<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/4/10
 * Time: 16:12
 */
class First extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	//载入用户主页
	public function index(){
        $this->load->view('h/first');

	}
}