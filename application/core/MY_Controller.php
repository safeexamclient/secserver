<?php

/**
 * 基类
 */
class MY_Controller extends CI_Controller
{
	/**
	 * 构造器
	 */
	public function __construct ()
	{
		parent::__construct();
		//设置时区为北京时间
		date_default_timezone_set('Asia/Shanghai');
		//启动 session
		$this->load->library('session');		
		$this->load->library('email');
		//通用函数
		$this->load->helper('my_helper');
	}

	/**
	 * 通用消息提示页面
	 */
	public function show_msg($text, $url, $pic="",$btn='返回', $view='msg_view'){
		$msg = array();
		$msg['text'] = $text;
		$msg['url'] = $url;
		$msg['btn'] = $btn;
		$msg['pic'] = $pic;
		$this->load->view($view, $msg);
	}

	/**
	 * 通用消息提示页面（JavaScript）
	 */
	public function show_msg_js($text, $url, $view='msg_script'){
		$msg = array();
		$msg['text'] = $text;
		$msg['url'] = $url;
		$this->load->view($view, $msg);
	}

	public function send_email($to, $subject, $message){
		//邮箱环境设置
		$config = [];

		// $config['smtp_host'] = 'ssl://smtp.163.com';
	 //    $config['smtp_user'] = 'safeexamclient@163.com';
	 //    $config['smtp_pass'] = 'ZXPRQUATWJPKVMKY';
	 //    $config['smtp_port'] = '465';
	 //    $config['protocol'] = 'smtp';
	 //    $config['smtp_timeout'] = 30;
	 //    $config['charset'] = 'utf-8';
	 //    $config['wordwrap'] = TRUE;
	 //    $config['mailtype'] = 'html';
	 //    $config['crlf'] = "\r\n";
	 //    $config['newline'] = "\r\n";	

	    $config['smtp_host'] = 'ssl://smtp.qq.com';
	    $config['smtp_user'] = 'safeexamclient@foxmail.com';
	    $config['smtp_pass'] = 'rsvabpoovdghcjcc'; 
	    $config['smtp_port'] = '465';
	    $config['protocol'] = 'smtp';
	    $config['smtp_timeout'] = 30;
	    $config['charset'] = 'utf-8';
	    $config['wordwrap'] = TRUE;
	    $config['mailtype'] = 'html';
	    $config['crlf'] = "\r\n";
	    $config['newline'] = "\r\n";    	    	 

	    $this->email->initialize($config);
	    //发送邮件，发送人必须与验证名一致
	    $this->email->from( $config['smtp_user'] , '安全考试客户端');
		$this->email->to($to);
		$this->email->bcc('chenguang@ats.org.cn');
		$this->email->subject($subject);
		$this->email->message($this->email_message_format($message));
		$send_flag = $this->email->send();
		if(!$send_flag){
			//echo '邮件发送不成功';
			//echo $this->email->print_debugger();	
			//exit;
		}
	}

	public function email_message_format($message){
		$msg_format = "
		<div style='margin: 20px auto;width: 680px;border: 1px solid #D0D0D0;'>
			<div style='background-color:#e7e7e7;border-bottom: 1px solid #ddd;'>
				<table border='0' cellpadding='0' cellspacing='0'>
					<tr>
						<td><img src='http://www.safeexamclient.com/images/logo.png' width='30px' style='padding:10px 15px 5px 15px;'></td>
						<td><span style='font-size: 18px; color: #777;'>安全考试客户端</span></td>
					<tr>
				</table>
			</div>
			<div style='text-align: left; min-height: 200px; padding:20px 15px ; font-size: 14px; line-height:26px;'>
				<div style='color:#12128d; font-weight:bold;'>尊敬的先生/女士：</div><br>
				".$message."	
				<br><br>				
				SEC产品团队
			</div>		
			<p style='text-align: right;font-size: 11px;border-top: 1px solid #ddd;line-height: 40px;padding: 0 10px;margin: 20px 0 0 0;color: #ccc;'>发送时间：".date("Y-m-d H:i:s")."</p>
		</div>
		";
		return $msg_format; 
	}

}


/**
 * 基类 - 后台管理
 * @author ChenGuang
 * @date 2020-12-20
 */
class BA_Controller extends MY_Controller
{

	//常用数据
	public $user_id = '';
	public $user_logname = '';
	public $user_name = '';

	/**
	 * 构造器
	 */
	public function __construct ()
	{
		parent::__construct();
		// 引用Model
		$this->load->model('exam_model');
		$this->load->model('user_model');
		// 初始化参数
		$this->init_session(); 
		// 校验登录（放 init_session 之后）
		$this->user_need_login();
	}

	/**
	 * 初始化参数
	 */
	protected function init_session()
	{
		// 基本信息
		$this->user_id = $this->session->session_user_id;
		$this->user_logname = $this->session->session_user_logname;
		$this->user_name = $this->session->session_user_name;
	}

	/**
	 * 检查登录状态
	 */
	protected function user_need_login()
	{
		if (empty($this->user_id) || empty($this->user_name)) {		
			//用JS才能跳离后台界面，否则将在原有界面上叠加显示	
			$this->show_msg("<script>alert('会话超时，请登录！');location.href='/user/signin';</script>", '/user/signin');
			return;
		}
	}

	/* 通用函数，加上公用的首尾 */
	public function show($page_name, $data="")
	{
		$head_data = array();
		$head_data['user_id'] = $this->user_id;
		$head_data['user_logname'] = $this->user_logname;
		$head_data['user_name'] = $this->user_name;
		//把基本信息传给header文件
		$this->load->view('back_inc_header',$head_data);
		//把业务数据传给主文件
		$this->load->view($page_name, $data);
		$this->load->view('back_inc_footer');
	}	 

}

