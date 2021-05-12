<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 后台企业信息管理
 */
class Info extends BA_Controller {

	/**
	 * 构造器
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->edit();
	}

	public function edit()
	{
		$data = null;
		$user = null;	
		if(!empty($this->user_id)){
			$user = $this->user_model->get_row( $this->user_id );
		}else{
			$this->show_msg('参数有误：企业登录状态失效，请重新登录', '/user'); //############ 尚未校验权限
		}			
		if(empty($user)){
			$this->show_msg('参数有误：参数有误，企业信息不存在', '/exam'); //############ 尚未校验权限
        	return;
		}
		//装入对象
		$data['user'] = $user;	
		$this->show('info_edit',$data);
	}

	public function edit_save()
	{		
		$data['user_name'] = trim($this->input->post('user_name', true));
		$data['user_mobile'] = trim($this->input->post('user_mobile', true));
		$data['user_email'] = trim($this->input->post('user_email', true)); 

		$update_result = $this->user_model->update( $this->user_id, $data ); //######### 还需要检验权限
		if($update_result){
				$this->show_msg_js("成功，企业信息修改完成", "/exam");
			}else{
				$this->show_msg("失败，数据操作有误", "/exam"); 
		}
		return;
	}

	public function editpw()
	{
		$this->show('info_editpw');
	}

	public function editpw_save()
	{		
		$old_pw = trim($this->input->post('old_pw', true));
		$new_pw = trim($this->input->post('new_pw', true));
		$old_pw = md5($old_pw);
		$new_pw = md5($new_pw);

		$curr_pw = $this->user_model->get_field_by_id('user_password',$this->user_id);
		if( $old_pw != $curr_pw){
			$this->show_msg_js("失败，[ 原密码 ] 输入有误，请重新输入", "/info/editpw");
			return;
		}

		$data['user_password'] = $new_pw; 
		$update_result = $this->user_model->update( $this->user_id, $data ); //######### 还需要检验权限
		if($update_result){
				$this->show_msg_js("成功，修改密码完成", "/exam");
			}else{
				$this->show_msg("失败，数据操作有误", "/exam"); 
		}
		return;
	}		

}
