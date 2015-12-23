<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Menu_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();        
        $this->load->database();
        
    }
    
    /*
     * 得到父级菜单
     */
    
    // public function getParentMenu(){
        
    //    $query=$this->db->get_where('hong_menu',array('m_parentId'=>1101));
        
    //     return $query->result_array();
    // }
    public function getSubMenu($parentid)
    {
        
        $query=$this->db->get_where('hong_menu',array('m_parentId'=>$parentid,'m_status'=>1));
        return $query->result_array();
    }
    
    /*
     * 添加子菜单
     */
    
    // public function addSubMenu($parentid,$menuname,$controllername,$actionname){
        
    //     $data=array('parentid'=>$parentid,
    //         'actionname'=>$menuname,
    //         'action'=>$actionname,
    //         'controller'=>$controllername,
    //         'viewmode'=>1,
    //         'linkmode'=>1,
    //         'masterid'=>1,
    //         'mastername'=>'admin',
    //         'createdate'=>date('Y-m-d H:i:s',  time())
    //         );
    //    return $this->db->insert('rrd_actions',$data);
        
    //          //date('Y-m-d H:i:s',  time())
    // }
    /*
     * 添加父菜单
     */
    // public function addParentMenu($actionname){
    //      $data=array('parentid'=>0,
    //         'actionname'=>$actionname,
           
    //         'viewmode'=>1,
    //         'linkmode'=>1,
    //         'masterid'=>1,
    //         'mastername'=>'admin',
    //         'createdate'=>date('Y-m-d H:i:s',  time())
    //         );
    //      return $this->db->insert('rrd_actions',$data);
        
    // }
    
    
    /*
     * 删除子菜单
     */
    // public function delSubMenu($menuid)
    // {
    //     return $this->db->delete('hong_menu',array('menu_id'=>$menuid));
        
    // }
}

?>
