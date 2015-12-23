<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/27
 * Time: 20:02
 */
class Main extends CI_Controller{
    public function index(){
        $this->load->view('m/main');
    }
}