<!DOCTYPE HTML>
<html>
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
</head>

<body>
	<h1>上传图片</h1>
	<form>
		<div id="queue"></div>
		<div id="preview"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
	</form>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : 'uploadify.swf',
				'uploader' : 'uploadify.php',
				'onUploadSuccess': function(file,data,response){
					var address = '../uploads/'+file.name;		//图片路径
					var $photoBox = $('<div></div>').css({		//定义图片外层的盒子
						width:'200px',
						height:'200px',
						margin:'5px',
						position:'relative',
						border:'1px solid #ccc',
						display:'inline-block'
					});
					var $img = $('<img src="'+address+'">').css({//图片的属性设置
						width:'200px',
						height:'200px',
					});
					var $del = $('<div></div>').css({			//定义删除按钮
						width:'16px',
						height:'16px',
						background:'URL(../img/uploadify-cancel.png)',
						position:'absolute',
						cursor:'pointer',
						top:0,
						right:0,
						zIndex:'9999'
					});
					//$del.html('删除');

					$('#preview').append($photoBox);			//生成图片外层的盒子
					$photoBox.append($img);						//生成图片
					$img.after($del);				//生成删除按钮
					$del.click(function(){
						//alert(1111)
						$photoBox.remove();
					});
				}
			});
		});
	</script>
</body>
</html>