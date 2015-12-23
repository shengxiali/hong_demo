<?php
/***user:meijiang*****/
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2015/3/18
 * Time: 19:31
 */
$this->load->view('common/head');
?>
<script src="<?php echo base_url();?>assets/js/chkreg.js" charset='utf-8'></script>;
<link href="<?php echo base_url();?>assets/css/uploadify.css" rel="stylesheet">


<body>
	<div class="all">
		<div class="bg_head">
			<p class="welcome">欢迎注册您的个人博客</p>
		</div>
		<div class="main">
			<div class="top font_black1">
				<p>注册账号</p>
			</div>
			<div class="line"></div>
			<form name="f_register" action="/index.php/register/add_data" method="post" enctype="multipart/form-data">
				<div class="form clearfix">
					<div class="item clearfix">
						<div class="tr">
							<label>账号</label>
							<div class="inbox lfloat">
								<input type="text" id="user" name="user">
							</div>
							<div class="chkinfo" id="uinfo"></div>
						</div>
					</div>
					<div class="item clearfix">
						<div class="tr">
							<label>密码</label>
							<div class="inbox lfloat">
								<input type="password" name="pwd1" id="pwd1">
							</div>
							<div class="chkinfo" id="p1info"></div>
						</div>
					</div>
					<div class="item clearfix">
						<div class="tr">
							<label>确认密码</label>
							<div class="inbox lfloat">
								<input type="password" name="pwd2" id="pwd2">
							</div>
							<div class="chkinfo" id="p2info"></div>
						</div>
					</div>
					<div class="item clearfix">
						<div class="tr">
							<label>年龄</label>
							<div class="inbox lfloat">
								<input type="text" name="age" id="age" placeholder="0">
							</div>
							<div class="chkinfo" id="ainfo"></div>
						</div>
					</div>
					<div class="item clearfix">
						<div class="tr">
							<label>性别</label>
							<div class="sex lfloat">
								<div id="man">
									<input class="js_sex" type="radio" name="sex" id="m" value="0" checked>男
								</div>
								<div id="feman">
									<input class="js_sex" type="radio" name="sex" id="f" value="1">女
								</div>
							</div>
							<div class="chkinfo"></div>
						</div>
					</div>
					<!--<div class="item clearfix">
						<div class="tr">
							<label> </label>
							<div class="photo">
								<input id="file_upload" name="file_upload" type="hidden" multiple="true">
							</div>
							<div class="chkinfo" id="preview"></div>
						</div>
					</div>-->
					<div class="item clearfix">
						<div class="tr">
							<label></label>
							<div class="inbox lfloat">
								<input type="button"  id="submit" value="立即注册">
							</div>
							<div class="chkinfo"></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		<?php $timestamp = time();?>
		var time = '<?php echo $timestamp;?>'
		var encodeTime = '<?php echo md5('unique_salt' . $timestamp);?>'
	</script>

</body>


