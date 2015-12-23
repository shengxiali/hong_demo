<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

$config['num_tag_close']	= '</li>';