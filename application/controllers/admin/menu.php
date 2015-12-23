<?php
//header("Content-Type:text/html;charset=utf-8");
class Menu extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('menu_model');
	}

	//管理首页.网站数据统计等信息
	public function index() {
		$query = $this->db->query('SELECT * FROM hong_menu');
		$list = $query->result();
		//$this->load->library('Pagination');

		$config['base_url'] = 'index.php/test/page/';
		$config['total_rows'] = 10;
		$config['per_page'] = 3;
		var_dump($config);
		$this->pagination->initialize($config);

		//echo $this->pagination->create_links();
		$this->data['list'] = $list;
		$this->load->view('admin/menu/index',$this->data);
	}

	public function add() {
		$this->load->view('admin/menu/add');
	}

	public function edit() {
		$this->load->view('admin/menu/edit');
	}
}
