<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 后台考试管理
 */
class Exam extends BA_Controller {

	/**
	 * 构造器
	 */
	public function __construct()
	{
		parent::__construct();
	}	


	/* 考试后台主页 */
	public function index()
	{

		$this->lists();
	}		


	/* 考试列表 */
	public function lists()
	{
		//得到考试列表
		$user_id = $this->user_id;
		$exams = $this->exam_model->get_exams_by_userid($user_id);
		$data["exams"] = $exams;
		$this->show('exam_list',$data);
	}


	/* 删除考试信息 */
	public function delete($exam_id)
	{
		if(!empty($exam_id)){
			$this->exam_model->delete( $exam_id );  //############ 尚未校验权限
			//看影响了
			$result = $this->db->affected_rows();
			if($result == 1){
				$this->show_msg_js('成功，该考试已删除', '/exam');
				return;
			}else{
				$this->show_msg('失败，删除操作没有执行', '/exam');
				return;
			}			
		}else{
			$this->show_msg('失败，输入参数有误', '/exam');
			return;			
		}		
	}


	/* 编辑考试信息 */
	public function edit($exam_id="")
	{
		$data = null;
		//当exam_id为空表示新建
		if(empty($exam_id)){
			//空置1项
			$exam['exam_id'] = '' ;
			//基本2项
			$exam['exam_name'] = '' ;
			$exam['exam_url'] = '' ;
			//锁屏4项
			$exam['exam_lock'] = 1 ;
			$exam['exam_lock_on_key'] = '' ;
			$exam['exam_lock_off_key'] = '' ;
			$exam['exam_lock_password'] = '123' ;
			//界面4项
			$exam['exam_ui_top'] = 1 ;
			$exam['exam_ui_bottom'] = 1 ;
			//屏蔽6项
			/*
			$exam['exam_shield_multidisplay'] = 0 ;
			$exam['exam_shield_projector'] = 0 ;
			$exam['exam_shield_qq'] = 0 ;
			$exam['exam_shield_teamviewer'] = 0 ;
			$exam['exam_shield_vmware'] = 0 ;
			$exam['exam_shield_visualbox'] = 0 ;
			*/
			//装入对象
			$data['exam'] = $exam;
		}else{
			$exam = $this->exam_model->get_row( $exam_id );
			if(empty($exam)){
				$this->show_msg('参数有误：参数有误，该考试不存在', '/exam'); //############ 尚未校验权限
            	return;
			}
			//装入对象
			$data['exam'] = $exam;
			
		}
		$this->show('exam_edit',$data);
	}


	/* 保存考试信息 */
	public function save()
	{
		//Step1：判断是否新增
		$exam_id = trim($this->input->post('exam_id', true));

		//Step2：获取表单信息
		$data['exam_name'] = trim($this->input->post('exam_name', true));
		$data['exam_url'] = trim($this->input->post('exam_url', true));

		//默认checkbox的返回值是on，但数据库中存的是0和1，故需要转义
		$data['exam_lock'] = empty($this->input->post('exam_lock', true)) ? 0:1 ; 
		$data['exam_lock_on_key'] = trim($this->input->post('exam_lock_on_key', true));
		$data['exam_lock_off_key'] = trim($this->input->post('exam_lock_off_key', true));	
		$data['exam_lock_password'] = trim($this->input->post('exam_lock_password', true));		

		$data['exam_ui_top'] = empty($this->input->post('exam_ui_top', true)) ? 0:1 ;
		$data['exam_ui_bottom'] = empty($this->input->post('exam_ui_bottom', true)) ? 0:1 ;
		
		/*
		$data['exam_shield_multidisplay'] = empty($this->input->post('exam_shield_multidisplay', true)) ? 0:1 ;
		$data['exam_shield_projector'] = empty($this->input->post('exam_shield_projector', true)) ? 0:1 ;
		$data['exam_shield_qq'] = empty($this->input->post('exam_shield_qq', true)) ? 0:1 ;
		$data['exam_shield_teamviewer'] = empty($this->input->post('exam_shield_teamviewer', true)) ? 0:1 ;
		$data['exam_shield_vmware'] = empty($this->input->post('exam_shield_vmware', true)) ? 0:1 ;
		$data['exam_shield_visualbox'] = empty($this->input->post('exam_shield_visualbox', true)) ? 0:1 ;
		*/

		//Step3：新增操作
		if(empty($exam_id)){
			$data['user_id'] = $this->user_id;
			$data['create_time'] = date("Y-m-d H:i");
			$insert_result = $this->exam_model->insert( $data ); //######### 还需要检验权限
			if($insert_result){
				$exam_id = $this->exam_model->get_insert_id();	
				//需要把 $exam_id 转成字符串，否则转码有误
				$exam_id_encode = my_encode((String)$exam_id);
				//为防止手工刷新导致重复提交，需跳转一下页面
				header("Location: /exam/save_msg/".$exam_id_encode);
			}else{
				$this->show_msg("失败，数据操作有误", "/exam");            	
			}
			return;
		}

		//Step4：更新操作
		$update_result = $this->exam_model->update( $exam_id, $data ); //######### 还需要检验权限
		if($update_result){
				$this->show_msg_js("成功，考试信息修改完成", "/exam");
			}else{
				$this->show_msg("失败，数据操作有误", "/exam"); 
		}
		return;
	}


	/* 为防止新建成功后再重复提交，把消息提示界面独立出来 */
	public function save_msg($exam_id_encode)
	{
		$exam_id = my_decode($exam_id_encode);
		//不能为空
		if(empty($exam_id_encode) || empty(my_decode($exam_id_encode))){
			$this->show_msg('参数有误：参数为空，或参数解析有误', '/exam'); 
        	return;
		}
		//如果解码后的内容不是纯数字（怕有人手工修改加密后）
		if(!preg_match("/^[1-9][0-9]*$/" ,$exam_id)){
			$this->show_msg('参数有误：参数编码有误，编码有可能被篡改', '/exam'); 
        	return;
		}
		$exam = $this->exam_model->get_row( $exam_id );
		//如果对象为空，即找不到对方的考试
		if(empty($exam)){
			$this->show_msg('参数有误：参数有误，该考试不存在', '/exam'); 
        	return;
		}
		$exam_name = $exam['exam_name'];
		$this->show_msg("成功，[ ".$exam_name." ] 创建完成，考试口令是 <strong>".$exam_id."</strong>", "/exam",'succ','确认'); 
	}

}
