<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 网站界面显示
 */
class Home extends CI_Controller {

	/* 首页 */
	public function index()
	{
		$this->show('home_index');
	}

	/* 支持 */
	public function support($page='')
	{
		if($page == 'faq'){
			$this->show('home_support_faq');
			return;
		}
		if($page == 'service'){
			$this->show('home_support_service');
			return;
		}
		$this->show('home_support');
	}

	/* 关于 */
	public function about()
	{
		$this->show('home_about');
	}

	/* 英文片 */
	public function en()
	{
		$this->load->view('home_index_en');
	}

	/* 通用函数，加上公用的首尾 */
	public function show($page_name)
	{
		$this->load->view('home_inc_header');
		$this->load->view($page_name);
		$this->load->view('home_inc_footer');
	}
}
