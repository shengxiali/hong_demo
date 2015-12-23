<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/3/4
 * Time: 11:02
 */
class Chklog_model extends CI_Model{
	public function check($data){
		$where['user_name'] = $data['user'];
		$where['password'] = $data['password'];
		$res = $this->db->where($where)->get('user_info');
		if($res->num_rows){
			return $res->row_array();		//返回用户数据
		}else{
			return false;
		}
	}
}