<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/4/27
 * Time: 14:45
 */
$this->load->helper('url');
?>
<script src="<?php echo base_url();?>assets/js/top.js" charset="utf-8"></script>
<body>
<div>
	<div class="top">
		<div class="bg_head">
			<img class="photo js_photo">
			<p class="name"></p>
			<p class="sign"></p>
		</div>
		<div class="category clearfix">
			<ul type="none" class="box">
				<a href="/index.php/home"><li class="first hover">我的主页</li></a>
				<a href="/index.php/photo"><li class="second hover">我的相册</li></a>
				<a href="/index.php/infocenter"><li class="third hover">我的资料</li></a>
			</ul>
		</div>
	</div>