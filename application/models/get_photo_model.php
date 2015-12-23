<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/4/10
 * Time: 18:23
 */
class Get_photo_model extends CI_Model{
	//获取用户头像操作
	public function get_user_photo($uid){
		$where['id'] = $uid;
		$res = $this->db->where($where)->get('user_info');
		if($res){
			return $res->row_array();			//返回用户信息记录
		}else{
			return false;						//如果查找失败返回false
		}
	}
	//获取用户图片操作
	public function get_user_img($data){
		$where['uid'] = $data['uid'];
		$lim_num = $data['per_page'];						//一次查找的数据条数
		$start = $data['curr_page']*$data['per_page'];	//查询的起始位置
		$res = $this->db->where($where)->order_by('id','desc')->limit($lim_num,$start)->get('user_img');
		if($res){
			return $res->result_array();
		}else{
			return false;
		}
	}
}