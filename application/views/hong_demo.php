<!DOCTYPE html>
<html>
<head>
	<title>jqm测试</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mobile-1.4.5.min.css"> -->
	<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$('.sure-btn').click(function(){
			alert(111);
		})
		$('.ffff').on('swipeleft',function(){
			alert(33333);
		})
	})
	</script>
	<style type="text/css">
		#kkkk .sure-btn{
		width: 100px;
		}
		#kkkk .ffff{
			width: 100px;
			height: 300px;
			background-color: #f0f;
		}
		.ui-loader-default{
			display: none;
		}
	</style>
</head>
<body id="kkkk" data-role="none">
	<input type="button" name="btn" value="sure" class="sure-btn" data-role="none">
	<div class="ffff" data-role="none"></div>
</body>
</html>