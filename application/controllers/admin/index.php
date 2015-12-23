<?php

class Index extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->load->model('admin_model');
	}

	//管理首页.网站数据统计等信息
	public function index() {
		$this->load->view('admin/index/index');
	}
}
