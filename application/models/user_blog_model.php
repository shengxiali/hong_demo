<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/4/16
 * Time: 20:57
 */
class User_blog_model extends CI_Model{
	public function get_blog($data){
		$where['uid'] = $data['uid'];			//获取用户id
		$where['is_show'] = 1;					//可显示
		$lim_data = $data['perPage'];		//获取记录条数
		$start = $data['currPage']*$data['perPage'];			//开始计数的位置

		$res = $this->db->where($where)->order_by('id','desc')->limit($lim_data,$start)->get('blog_info');
		if($res){								//返回查询结果
			return $res->result_array();
		}else{									//返回false
			return false;
		}
	}
	public function add_blog($data){
		try{
			$res = $this->db->insert('blog_info',$data);
			if($res){
				return $this->db->insert_id();
			}else{
				return false;
			}
		}catch (Exception $e){
			return $e->getMessage();
		}
	}
}