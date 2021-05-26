<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 考生输入考试口令
 */
class Login extends MY_Controller {

	/**
	 * 构造器
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('exam_model');
	}	

	/* 考生登录入口页 */
	public function index()
	{
		$this->key();
	}

	/* 考生输入考试口令 */
	public function key()
	{
		$this->load->view('login_key');
	}

	/* 考生输入考试口令（表单处理） */
	public function key_do()
	{
		//获取FORM表单值
		$key = strtolower(trim($this->input->post('key',true )));
		header("Location: /login/exam/".$key);
	}

	/* 考生输入考试口令（业务处理） */
	public function exam($exam_key="")
	{
		$code = 1;
		$message = 'success';
		$time =  date("Y-m-d H:i:s");
		$exam = null;

		if(strlen($exam_key) != 6){
			$code = 1001;
			$message = '输入有误：考试口令必须是6位';            
        }else{    
	        $exam = $this->exam_model->get_exam_by_key($exam_key);
	        if(empty($exam)){
	        	$code = 1002;
				$message = '输入有误：考试口令有误，该考试不存在';  
			}
		}
		
		$json['code'] = $code;
		$json['message'] = $message;
		$json['time'] = $time;
		$json['data'] = $exam;

		//echo json_encode($exam, JSON_PRETTY_PRINT);
		echo json_encode($json);
	}

}
