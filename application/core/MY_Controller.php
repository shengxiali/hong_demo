<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        session_write_close();
        $this->load->library('session');
    }

    /**
     * 初始化配置
     * @return Array
     */
    protected function initConfig()
    {
        $this->config->load('component_setting', TRUE);
        $config = $this->config->item('component_setting');
        if (isset($config['component'])
            && is_array($config['component'])
        ) {
            //检测详细配置
            $component_setting = $config['component'];
            if (isset($component_setting['component_appid'])
                && isset($component_setting['msg_verify_token'])
                && isset($component_setting['encoding_aes_key'])
            ) {
                return $config;
            } else {
                log_message('error', '(Message_Controller->initConfig)配置信息不完整:' . var_export($config,true));
                return false;
            }
        } else {
            return false;
        }
    }
}

class ConsoleBase extends MY_Controller
{
    protected $login_info = null;
    //rest图片服务器上传使用的key / secret
    protected $rest_upload_app_key = '5318162aac6f0086';
    protected $rest_upload_app_secret = '0c28536510e0b0b429750f478222d549';

    public function __construct()
    {
        parent::__construct();

        //粗暴登录
        $this->session->set_userdata('login_info',array(
            'site_id' => 1,
            'domain' => 'test'
        ));

        //1.判断是否为登录状态
        $this->login_info = $this->session->userdata('login_info');
        if (!$this->login_info
            || !isset($this->login_info['site_id'])
            || !$this->login_info['domain']
        ) {
            $this->session->unset_userdata('login_info');
            if($this->input->is_ajax_request()){
                echo json_encode(array('ret'=>-1,'msg'=>'请从正确路径登录'));
                return;
            }
            show_error('请从正确路径登录', 200, '需要登录');
        }

        $this->load->model('bama555/Bama555Model');
        $this->load->model('bama555/Site_info');
        
        $this->login_info['site_info'] = $this->Site_info->getWechatAuthorize($this->login_info['site_id']);
        
       
        

        //2.前台的js配置文件
        $this->Page_Data['wechat2_config']  =   json_encode(array(
        ));

        //3.加载公共的ace前端文件
        $this->load->library('layout',array(
            'base_layout' => 'base_layout'
        ));

    }

    //返回app_id的相关信息
    protected function return_app_info()
    {
        return $this->Bama555Model->return_app_info($this->login_info['site_id']);
    }


    /**
     * 返回ajax结果
     * @param $ret
     * @param null $return_data
     * @param string $return_msg
     */
    protected function return_result($ret,$return_data =null ,$return_msg = ''){
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header('Content-Type: application/json');
        echo json_encode(array(
            'ret'=>$ret,
            'data'=>$return_data,
            'msg'=>$return_msg
        ));
        exit;
    }


    /**
     * 分页
     *
     * @param $total_rows
     * @param array $config
     * @return array
     */
    protected function _pager($total_rows, $config = array()) {
        $this->load->library('pagination');
        $default_config['base_url'] = site_url($this->uri->uri_string() . '?');
        $default_config['total_rows'] = $total_rows;
        $default_config['per_page'] = 5;
        $default_config['num_links'] = 4;
        $default_config['use_page_numbers'] = TRUE;
        $default_config['first_tag_open'] =
        $default_config['last_tag_open'] =
        $default_config['next_tag_open'] =
        $default_config['prev_tag_open'] =
        $default_config['num_tag_open'] = '<li class="paginate_button">';

        $default_config['last_tag_close'] =
        $default_config['first_tag_close'] =
        $default_config['next_tag_close'] =
        $default_config['prev_tag_close'] =
        $default_config['num_tag_close'] = '</li>';

        $default_config['cur_tag_open'] = '<li class="paginate_button active"><a>';
        $default_config['cur_tag_close'] = '</a></li>';
        $default_config['first_link'] = '首页';
        $default_config['last_link'] = '尾页';
        $default_config['prev_link'] = '上一页';
        $default_config['next_link'] = '下一页';
        $default_config['page_query_string'] = TRUE;
        $default_config['query_string_segment'] = 'page';
        $config = array_merge($default_config, $config);
        $this->pagination->initialize($config);
        $links = $this->pagination->create_links();

        return  $links;
    }
    
    public function _pager1($total_rows, $config = array()) {
    	$this->load->library('pagination');
    	$default_config['base_url'] = site_url($this->uri->uri_string() . '?');
    	$default_config['total_rows'] = $total_rows;
    	$default_config['per_page'] = 5;
    	$default_config['num_links'] = 5;
    	$default_config['use_page_numbers'] = TRUE;
    	$default_config['first_tag_open'] = $default_config['last_tag_open'] = $default_config['next_tag_open'] = $default_config['prev_tag_open'] = $default_config['num_tag_open'] = $default_config['cur_tag_open'] = '<li>';
    	$default_config['first_tag_close'] = $default_config['last_tag_close'] = $default_config['next_tag_close'] = $default_config['prev_tag_close'] = $default_config['num_tag_close'] = '</li>';
    	$default_config['full_tag_open'] = '<div class="dataTables_paginate paging_simple_numbers"><ul class="pagination">';
    	$default_config['full_tag_close'] = '</ul></div>';
    	$default_config['first_link'] = '1';
    	$default_config['last_link'] = '尾页';
    	$default_config['prev_link'] = '上一页';
    	$default_config['next_link'] = '下一页';
    	$default_config['cur_tag_open'] = '<li class="active disabled"><a href="javascript:;">';
    	$default_config['cur_tag_close'] = '</a></li>';
    	$default_config['page_query_string'] = TRUE;
    	$default_config['query_string_segment'] = 'page';
    	$config = array_merge($default_config, $config);
    	$this->pagination->initialize($config);
    	$links = $this->pagination->create_links();
    	$cur_page = $this->pagination->cur_page ? $this->pagination->cur_page : 1;
    	$limit_offset = ($cur_page - 1) * $config['per_page'];
    	return array(
    			'links' => $links,
    			'limit' => array('offset' => $limit_offset),
    	);
    }
     public function page_r(){
        echo "11111";
     }

    /**
     * 生存32随机数
     * @return string
     */
    protected  function generateRand32Chars(){
    
    	$str='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$subStr=substr(str_shuffle($str),0,10);
    	$rand32Str=time().getmypid().$subStr;
    	$rand32Str=md5($rand32Str);
    	return $rand32Str;
    	 
    }

}