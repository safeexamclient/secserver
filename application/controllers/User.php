<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 用户注册与登录等
 * 命名规则：为便于维护，所有表单的action名称都是加do，比如signin()和signin_do()、signup()和signup_do()
 * @author ChenGuang
 * @date 2020-12-20
 */
class User extends MY_Controller {

	/**
	 * 构造器
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}	

	/* 管理员入口 */
	public function index()
	{
		$this->signin();
	}		

	/* 管理员登录 */
	public function signin()
	{
		$this->show('user_signin');
	}	

	/* 管理员登录（表单处理） */
	public function signin_do()
	{
		//获取FORM表单值
		$user_logname = strtolower(trim($this->input->post('user_logname',true )));
		$user_password = trim($this->input->post('user_password',true ));
		$user_password_md5 = md5($user_password);
		$this->signin_doin($user_logname, $user_password_md5);
	}	

	/* 管理员登录（可拼装链接，一键进入后台，虽然有点不安全，但使用方便） */
	public function signin_doin($user_logname, $user_password_md5)
	{
		//检查这两个值是否不为空
		if(strlen($user_logname)<2 || strlen($user_password_md5) !=32 ){
            $this->show_msg('输入有误：登录参数有误，请重新输入', '/user/signin');
            return;
        }
        $user_info = $this->user_model->check_signin($user_logname, $user_password_md5);
        if(!empty($user_info)){
        	//登录后取值
        	$user_id = $user_info['user_id'];
        	$user_logname = $user_info['user_logname'];
        	$user_name = $user_info['user_name'];
        	//清空所有session      	
        	session_unset(); 
        	$this->session->session_user_id = $user_id;
			$this->session->session_user_logname = $user_logname;
			$this->session->session_user_name = $user_name;
			//页面跳转进后台
			header("Location: /exam");
        }else{
        	$this->show_msg('登录失败：帐号或密码有误，请重新输入', '/user/signin');
            return;
        }		
	}			

	/* 管理员注册 */
	public function signup()
	{
		$this->show('user_signup');
	}

	/* 管理员注册（表单处理） */
	public function signup_do()
	{
		//获取FORM表单值
		$user_logname = strtolower(trim($this->input->post('user_logname',true )));
		$user_password = trim($this->input->post('user_password',true ));
		$user_name = trim($this->input->post('user_name',true ));
		$user_mobile = trim($this->input->post('user_mobile',true ));
		$user_email = trim($this->input->post('user_email',true ));
		//校验输入内容
		if(strlen($user_logname)<2 || strlen($user_logname)>20){
            $this->show_msg('输入有误：登录账号只能3-20位字母或数字', 'javascript:history.back();');
            return;
        }else if(!preg_match("/^[\da-z]+$/",$user_logname)){
            $this->show_msg('输入有误：登录账号只能是小写字母和数字', 'javascript:history.back();');
            return;
        }
        //检查帐号是否存在
        $is_exist_logname = $this->user_model->check_exist_logname($user_logname);
        if($is_exist_logname){
        	$this->show_msg('输入有误：该登录帐号已被占用，请换一个', 'javascript:history.back();');
            return;
        }
        //检查手机是否存在
        $is_exist_mobile = $this->user_model->check_exist_mobile($user_mobile);
        if($is_exist_mobile){
        	$this->show_msg('输入有误：该手机号码已被占用，请换一个', 'javascript:history.back();');
            return;
        }
        //新注册用户写入库中
        $data = array();
		$data['user_logname'] = $user_logname;
		$data['user_password'] = md5($user_password);
		$data['user_name'] = $user_name;
		$data['user_mobile'] = $user_mobile;
		$data['user_email'] = $user_email;
		$data['create_time'] = date("Y-m-d H:i:s");
		$result = $this->user_model->insert($data);
		if($result){
			//提示注册成功，并显示一张图片
			$this->show_msg("恭喜，[ $user_logname ] 注册成功", "/user/signin_doin/".$user_logname."/".md5($user_password),'succ','进入系统');
			$message = "
			您已成功注册为安全考试客户端企业用户！<br>
			<br>
			登录账号： $user_logname <br>
			企业名称： $user_name <br>
			联系电话： $user_mobile<br>
			联系邮箱： $user_email<br>
			<br>
			安全考试客户端（Safe Exam Client）是一款运行于电脑桌面端的可执行程序，支持Windows7及以上系统，可以让您的在线考试更安全。<br>
			后台管理：<a target='_blank' href='http://www.safeexamclient.com/user'>http://www.safeexamclient.com/user</a><br><br>
			祝您使用愉快！
			";
			$this->send_email($user_email, '成功注册为 [ 安全考试客户端 ] 企业用户', $message);
            return;
		}

	}	

	/* 管理员退出系统 */
	public function signout()
	{
		$this->session->sess_destroy();
		$this->show_msg_js("您已退出系统", "/user/signin");
	}	

	/* 管理员忘记密码 */
	public function forget()
	{
		$this->show('user_forget');
	}

	public function forget_do()
	{
		//获取FORM表单值
		$user_logname = strtolower(trim($this->input->post('user_logname',true )));
		$user_email = trim($this->input->post('user_email',true ));
		$user_info = $this->user_model->check_forgetpw($user_logname, $user_email);
		if(!empty($user_info)){
        	$user_id = $user_info['user_id'];
        	$user_name = $user_info['user_name'];
        	$new_pw = get_rand_str_lowerint(6); //得到6位的随机密码						
        	$data['user_password'] = md5($new_pw); 
        	$update_result = $this->user_model->update( $user_id, $data ); 
			if($update_result){
				$message = "
				贵企业 [ $user_name ] 的登录密码已经重置，请知悉<br>
				<br>
				登录账号： $user_logname <br>
				密码已重置为： <b> $new_pw </b> <br>
				<br>
				登录网址：<a target='_blank' href='http://www.safeexamclient.com/user'>http://www.safeexamclient.com/user</a>
				";
				$this->send_email($user_email, '重置密码成功', $message);
				$this->show_msg_js("邮件发送成功，新密码已发送到您的邮箱中", "/user");
				return;
			}else{
				$this->show_msg("失败，重置密码有误，数据不能更新", "/user"); 
				return;
			}
        }else{
        	$this->show_msg('操作失败：您输入的 [ 登录账号 ] 和 [ 联系人邮箱 ] 不匹配', '/user/forget');
            return;
        }		
	}	

	/* 通用函数，加上公用的首尾 */
	public function show($page_name)
	{
		$this->load->view('home_inc_header');
		$this->load->view($page_name);
		$this->load->view('home_inc_footer');
	}

}
