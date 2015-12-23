<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/4/27
 * Time: 14:58
 */
$this->load->view('common/head.php');
$this->load->view('common/top.php');
$this->load->helper('url');
?>
<link href="<?php echo base_url();?>assets/css/my_photo.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/uploadTool/jquery.uploadify.js" charset="utf-8"></script>
<script src="<?php echo base_url();?>assets/js/chgifr.js" charset="utf-8"></script>
<script charset="utf-8">
	$(document).ready(function(){
		$('.alert_bg').click(function(){
			$('.alert_frame').hide();
			//$('body').css({'overflow':'auto'});
			$('.alert_container').empty();
		})
	})
</script>
<div class="my_photo">
	<div class="main clearfix">
		<div class="p_left">
			<div class="p_add_photo">添加照片</div>
			<div class="p_del_photo">删除照片</div>
		</div>
		<div class="p_right">
			<div class="p_list clearfix">
				<iframe width="100%"height="400" frameborder="0" src="/index.php/iframe/show_photo" name="iframeone">

				</iframe>
			</div>
			<div data-page="0" class="load_more"></div>
		</div>
	</div>

</div>
<div class="alert_frame">
	<div class="alert_bg" id="alert_bg"></div>
	<div class="alert_container" id="alert_container"></div>
</div>
<!--选择图像弹出层-->
<div class="alert_change_photo">
	<div class="alert_top">选择头像</div>
	<div class="alert_form">
			<div>选择头像</div>
	</div>
</div>