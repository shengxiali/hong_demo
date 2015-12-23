<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/4/29
 * Time: 16:29
 */
$this->load->helper('url');
?>
<html>
<head>
	<title>图片</title>
	<script src="<?php echo base_url();?>assets/js/jquery.js" charset="utf-8"></script>
	<script src="<?php echo base_url();?>assets/js/photo.js" charset="utf-8"></script>
<style type="text/css" rel="stylesheet">
body,div,p{margin: 0;padding: 0;}
.p_list{width: 100%;text-align: center;padding:10px;box-sizing: border-box;}
.p_list .no_photo{font-size: 36px;color:#ccc;margin: 100px 0;}
.p_list .p_box{width: 33.3%;float: left;padding:10px;box-sizing: border-box;}
.p_list .p_box .p_size{width: 180px;height: 180px;padding: 0;display: block;margin: 0 auto;cursor: pointer;}
.load_more{width: 100%;height: 30px;font-size: 16px;color: #ccc;line-height: 30px;text-align: center;}
.clearfix:after {visibility: hidden;display: block;font-size: 0;content: " ";clear: both;height: 0;}
.clearfix { display: inline-table; }
/* Hides from IE-mac \*/
* html .clearfix { height: 1%; }
.clearfix { display: block; }
/* End hide from IE-mac */
</style>
</head>
<body>
	<div class="p_list clearfix">
		<div class="no_photo js_no_photo">还没有照片，快点上传吧！</div>
	</div>
	<div data-page="0" class="load_more"></div>
</body>
</html>