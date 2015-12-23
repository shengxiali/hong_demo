<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/4/28
 * Time: 11:35
 */
class User_info_model extends CI_Model{
	public function get_user_info($data){
		$where['id'] = $data['uid'];

		$res = $this->db->where($where)->get('user_info');
		if($res){
			return $res->result_array();
		}else{
			return false;
		}
	}
	public function add_user_img($data){
		try{
			foreach($data as $key=>$val){
				$res = $this->db->insert('user_img',$data[$key]);
				//需要开启事务管理，如果发生错误就全部回滚
			}

		}catch (Exception $e){
			$e->getMessage();
		}

		if($res){
			return true;
		}else{
			return false;
		}
	}
}