<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/4/13
 * Time: 20:25
 */
class LIN_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

		if(isset($this->session->userdata['user']) && isset($this->session->userdata['password'])){
			//如果用户session存在，重置session
			$data = array(
				'uid' => $this->session->userdata['uid'],
				'user' => $this->session->userdata['user'],
				'password' => $this->session->userdata['password']
			);
			$this->session->set_userdata($data);
			//$this->session->sess_destroy();
		}else{
			//echo "<meta http-equiv='Content-Type' content='text/html'; charset='utf-8'>";
			//echo "<script type='text/javascript' language='JavaScript' charset='utf-8'>alert('禁止访问！')</script>";
			//header('location:'.base_url('login'));			//载入登录页面
			//show_404();
			//$this->load->view('login.php');
			//echo " sorry~ 必须登录后才能访问！ <a href='".base_url('login')."'><font size='32'>立即登录</font></a>";
			$this->load->helper('url');
			redirect(base_url().'index.php/login','refresh');
			exit;
		}
	}
}