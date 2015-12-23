<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/3/4
 * Time: 13:45
 */
$this->load->helper('url');
$this->load->view('common/head.php');
?>
<link href="<?php echo base_url();?>assets/css/log_style.css" rel="stylesheet">
<script src="<?php echo base_url()?>assets/js/chklog.js" charset="utf-8"></script>
<body class="frame">
	<div class="outline">
		<a  href="<?php echo base_url('index.php/register');?>" class="register">用户注册>></a>
		<form name="log_form" method="post" action="<?php echo base_url('index.php/home');?>">
			<div>
				<input name="user" type="text" placeholder="请输入用户名" id="user">
			</div>
			<div>
				<input name="password" type="password" placeholder="请输入密码" id="password">
			</div>
				<input type="checkbox" value="0" id="chkbox">
				<input name="submit" type="button" value="登  录" id="submit">
				<input type="submit" value="登  录" id="formSubmit" style="display: none;">
		</form>

	</div>
</body>


