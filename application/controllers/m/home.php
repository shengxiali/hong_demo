<?php
/***user:m*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/4/10
 * Time: 16:12
 */
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	//载入用户主页
	public function index(){
        $this->load->view('m/home');

	}

    //自动执行脚本
    public function autoRun(){
        ignore_user_abort(); //即使Client断开(如关掉浏览器)，PHP脚本也可以继续执行.
        set_time_limit(0); // 执行时间为无限制，php默认执行时间是30秒，可以让程序无限制的执行下去
        $time = time();

        $interval=30; // 每隔两分钟运行一次
        echo $interval;
        do{
            $sql = "INSERT INTO test(time) VALUES($time)";
            $this->db->query($sql);
            sleep($interval);

        }while(true);

    }
}