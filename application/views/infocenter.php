<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/4/28
 * Time: 12:01
 */
$this->load->helper('url');
$this->load->view('common/head.php');
$this->load->view('common/top.php');
?>
<script src="<?php echo base_url();?>assets/js/infoceter.js" charset="UTF-8"></script>
<link href="<?php echo base_url();?>assets/css/user_info.css" rel="stylesheet">
<div class="info_center">
	<div class="main clearfix">
		<div class="info_left">
			<div class="change_info">编辑资料</div>
			<div></div>
		</div>
		<div class="info_right">
			<div class="info_list clearfix">
				<div class="no_info">加载失败！</div>
			</div>
		</div>
	</div>
</div>