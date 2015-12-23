<!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<script type="text/javascript" src="/assets/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="/assets/js/idangerous.swiper-1.9.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/idangerous.swiper.css">
	<style type="text/css">
	*{
		margin: 0;
		padding:0;
	}
	body{
		height: 100%;
	}
	html{
		height: 100%;
	}
	.main{
		height: 100%;
		position: relative;
	}
	body{
	min-height: 100%;
	color: #222;
	background-color: #f5f5f5;
}
.wrapper{
	min-width: 320px;
	max-width: 640px;
	position: relative;
	margin:0 auto;
}
.home-top{
	position: relative;
	height: 100%;
}

.swiper-slide img{
	width: 100%;
	height: 100%;
}
.pagination1
{
	position: relative;
    text-align: center;
    z-index: 88;
    margin-top: -38px;
}
.pagination1 .swiper-pagination-switch{
	display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 10px;
    box-shadow: 0px 1px 2px #555 inset;
    margin: 0 5px;
    cursor: pointer;
    background-color: #999;
}
.pagination1 .swiper-active-switch{
	background-color: #f0f;
}
.arrow-left{
	background: url(../images/prev.png) no-repeat right center;
	left:10px;
}

.arrow-right{
	background: url(../images/next.png) no-repeat left center;
	right: 10px;
}

.arrow {
    width: 40px;
    height: 40px;
    position: absolute;
    top: 50%;
    margin-top: -20px;
    z-index: 100;
}
.swiper-main{
	height: 100%;
}
.home-come .loader-1{
	display: block;
    content: " ";
    width: 100px;
    height: 100px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -50px 0 0 -50px;
    line-height: 80px;
    background-color: #fff;
    background-color: rgba(255,255,255, .9);
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -o-border-radius: 100px;
    -ms-border-radius: 100px;
    border-radius: 100px;
    overflow: hidden;
    -webkit-animation: pulse infinite alternate ease-in-out 1s;
    -moz-animation: pulse infinite alternate ease-in-out 1s;
    -ms-animation: pulse infinite alternate ease-in-out 1s;
    -o-animation: pulse infinite alternate ease-in-out 1s;
    animation: pulse infinite alternate ease-in-out 1s;
    z-index: 999;
}
.home-come .loader-2
{
	display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 80px;
    height: 80px;
    margin: -40px 0 0 -40px;
    background-color: rgba(255,255,255, .9);
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -o-border-radius: 100px;
    -ms-border-radius: 100px;
    border-radius: 100px;
    font-family: Arial, sans-serif;
    font-size: 12px;
    font-weight: 700;
    text-align: center;
    line-height: 80px;
    color: #999;
    overflow: hidden;
    -webkit-animation: pulse infinite alternate ease-in-out 1s;
    -moz-animation: pulse infinite alternate ease-in-out 1s;
    -ms-animation: pulse infinite alternate ease-in-out 1s;
    -o-animation: pulse infinite alternate ease-in-out 1s;
    animation: pulse infinite alternate ease-in-out 1s;
    z-index: 999;
}
@-webkit-keyframes pulse{
  0% {
	-webkit-transform: scale(1);
	background-color: rgba(255,255,255, .9);
  }
  50% {
	-webkit-transform: scale(1.3);
	background-color: rgba(255,255,255, .59);
  }
  100% {
	-webkit-transform: scale(1);
	background-color: rgba(255,255,255, .9);
  }
}

@-moz-keyframes pulse {
  0% {
	-moz-transform: scale(1);
	background-color: rgba(255,255,255, .9);
  }
  50% {
	-moz-transform: scale(1.3);
	background-color: rgba(255,255,255, .59);
  }
  100% {
	-moz-transform: scale(1);
	background-color: rgba(255,255,255, .9);
  }
}

@-ms-keyframes pulse {
  0% {
	-ms-transform: scale(1);
	background-color: rgba(255,255,255, .9);
  }
  50% {
	-ms-transform: scale(1.3);
	background-color: rgba(255,255,255, .59);
  }
  100% {
	-ms-transform: scale(1);
	background-color: rgba(255,255,255, .9);
  }
}

@-o-keyframes pulse {
  0% {
	-o-transform: scale(1);
	background-color: rgba(255,255,255, .9);
  }
  50% {
	-o-transform: scale(1.3);
	background-color: rgba(255,255,255, .59);
  }
  100% {
	-o-transform: scale(1);
	background-color: rgba(255,255,255, .9);
  }
}

@keyframes pulse{
  0% {
	transform: scale(1);
	background-color: rgba(255,255,255, .9);
  }
  50% {
	transform: scale(1.3);
	background-color: rgba(255,255,255, .59);
  }
  100% {
	transform: scale(1);
	background-color: rgba(255,255,255, .9);
  }
}
	</style>
</head>
<body>
<div class="main">
	<div class="home-top">
		<a class="arrow-left arrow show-href" href="#"></a>
		<a class="arrow-right arrow show-href" href="#"></a>
		<div class="swiper-main">
			<div class="swiper-container swiper1">
			    <div class="swiper-wrapper">
			        <div class="swiper-slide"> 
			        	<img src="/assets/img/1.jpg" alt="图片1"></a>
			        </div>      
			        <div class="swiper-slide">
			        	<img src="/assets/img/2.jpg" alt="图片2"></a>
			       	</div> 
			       	<div class="swiper-slide">
			        	<img src="/assets/img/3.jpg" alt="图片3"></a>
			       	</div> 
			       	<div class="swiper-slide">
			        	<img src="/assets/img/4.jpg" alt="图片4"></a>
			       	</div> 
			       	<div class="swiper-slide">
			        	<img src="/assets/img/5.jpg" alt="图片5"></a>
			       	</div> 
			   	</div>
			 </div>
		</div>
		<div class="pagination pagination1"></div>
	</div>
	<a href="#">
		<div class="home-come">
			<div class="loader-1"></div>
			<div class="loader-2">Welcome</div>
		</div>
	</a>
<!-- 	<div class="rotate">
		<div class='left heat'></div>
		<div class='right heat'></div>
	</div> -->
</div>
<script type="text/javascript">
	$(function(){
	var swiper = new Swiper('.swiper1', {
		pagination : '.pagination1',
		loop:true,
		grabCursor: true
	});
	//Navigation arrows
	$('.arrow-left').click(function(e) {
        e.preventDefault()
		swiper.swipePrev()
    });
	$('.arrow-right').click(function(e) {
        e.preventDefault()
		swiper.swipeNext()
    });
    //Clickable pagination
    $('.pagination1 .swiper-pagination-switch').click(function(){
    	swiper.swipeTo($(this).index())
    })
	setInterval(swiper.swipeNext,4000);
})
</script>
</body>
</html>