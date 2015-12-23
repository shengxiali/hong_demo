<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/3/31
 * Time: 19:50
 */
class Add_data_model extends CI_Model{
	public function is_exist($data){
		$where['user_name'] = $data['user'];
		//$where['password'] = $data['password'];

		$res = $this->db->where($where)->get('user_info');
		if($res->num_rows){
			return $res->row_array();
		}else{
			return false;	//如果数据库里面没有这个账号返回false
		}
	}

	public function add($data){

		$add = array(
			'user_name' => $data['user'],
			'password' => $data['password'],
			'age' => $data['age'],
			'sex' => $data['sex'],
			'create_time' => $data['create_time']
		);
		try{
			$res = $this->db->insert('user_info',$add);
		}catch (Exception $e){
			$e->getMessage();	//抛出异常
		}
		if($res){				//判断查询结果（插入的id）
			return $this->db->insert_id();
		}else{
			return false;
		}
	}
}