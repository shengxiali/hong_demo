<!DOCTYPE HTML>
<!--<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="jquery.uploadify.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>-->
<?php $this->load->view('common/head');?>

<link href="<?php echo base_url();?>assets/uploadTool/uploadify.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/uploadTool/jquery.uploadify.js"></script>
<body style="background-color: #fff;">
<div style="width: 90%;margin: 0 auto;">
	<h1>请选择图片</h1>
	<form>
		<div id="queue"></div>
		<div id="preview"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
	</form>
	<div class="submit" style="width:120px;height:40px;margin:30px auto;line-height:40px;border-radius:10px;text-align: center;font-size: 20px;color: #fff;background-color: red;cursor: pointer;">开始上传</div>
</div>

	<script type="text/javascript">

		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'auto':true,
				'removeTimeout':0,
				'buttomText':'选择文件',
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : '/assets/uploadTool/uploadify.swf',
				'uploader' : '/index.php/plug_uploadify/uploadify',
				'queueID'  : 'display:none',
				'onUploadSuccess': function(file,data,response){	//file为返回的文件内容，data为服务器消息,response为是否上传成功
					var address = '/uploads/'+data;		//图片路径
					var $photoBox = $('<div class="js_p" ></div>').css({		//定义图片外层的盒子
						width:'150px',
						height:'150px',
						margin:'5px',
						position:'relative',
						border:'1px solid #ccc',
						display:'inline-block'
					});
					var $img = $('<img src="'+address+'">').css({//图片的属性设置
						width:'150px',
						height:'150px',
					});
					var $del = $('<div></div>').css({			//定义删除按钮
						width:'16px',
						height:'16px',
						background:'URL(/assets/uploadTool/uploadify-cancel.png)',
						position:'absolute',
						cursor:'pointer',
						top:0,
						right:0,
						zIndex:'9999'
					});
					//$del.html('删除');

					$('#preview').append($photoBox);			//生成图片外层的盒子
					$photoBox.append($img);						//生成图片
					$img.after($del);							//生成删除按钮
					$del.click(function(){
						$photoBox.remove();
					});
				}
			});

		});
		$('.submit').click(function(){
			if(!$('#preview').html()){
				alert('请选择要上传的图片！');
			}else{
				var arr = new Array();
				$('.js_p').each(function(){
					var img = $(this).children('img');
					arr[$(this).index()] = img.attr('src');
				})
				var data = {};
				data.imgs = JSON.stringify(arr);
				$.ajax({
					url:'/index.php/upload',
					data:data,
					type:'post',
					dataType:'json',
					success:function(res){
						if(res.failed){
							alert('有'+res.failed+'张图片上传失败！');
							window.location.href = '/index.php/iframe/upload_photo';
						}else if(res.mysql){
							alert('上传成功！');
							window.location.href = '/index.php/iframe/upload_photo';
						}else{
							alert('数据库异常，请重新上传！');
							window.location.href = '/index.php/iframe/upload_photo';
						}
					}
				})
			}

		});
	</script>
</body>
</html>