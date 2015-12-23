<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/27
 * Time: 19:19
 */ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>工作笔记</title>
    <meta name="description" content="个人笔记.">
    <meta name="author" content="梅江">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/assets/jqueryMobile/jquery.mobile-1.4.5.min.css"/>
    <script type="text/javascript" src="/assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="/assets/jqueryMobile/jquery.mobile-1.4.5.min.js"></script>
    <style type="text/css">
        body,div,p,ul,li,a,p{margin: 0;padding: 0;}
        html,body,.move-area,#content{height:100%;}
        #content{padding: 0;}
        #m_home{
            height: 100%;
            background: url("/assets/img/body_bg.jpg");
            background-size: 100% 100%;

        }
        .move-area{
            color: #ffffff;
            position: relative;
        }
        .move-area a{
            text-decoration: none;
            position: absolute;
            border: 1px solid #1f6377;
            display: block;
            border-radius: 3px;
            height: 24px;
            padding: 5px;
            overflow: hidden;
            line-height: 24px;
        }
        .move-area .first{
            opacity: 0;
            color: #002166;
            background-color: yellow;
            z-index: 9;
            bottom: 15px;
            left: 10px;
        }
        .move-area .second{
            opacity: 0;
            left: 50%;
            bottom: 30px;
            transform: translate(-50%,0);
            -webkit-transform: translate(-50%,0);
            -moz-transform: translate(-50%,0);
            color: red;
            z-index: 8;
            animation-delay: 3s;
            -moz-animation-delay:3s;
            -webkit-animation-delay:3s;
        }
        .move-area .third{
            opacity: 0;
            color: red;
            right: 10px;
            bottom: 18px;
            z-index: 10;
        }
        @keyframes move {
            0%{opacity: 0;}
            40%{opacity: 1;}
            60%{opacity: 1;}
            100%{bottom: 98%;
                opacity: 0;}
        }
        @-webkit-keyframes move{
            0%{opacity: 0;}
            40%{opacity: 1;}
            60%{opacity: 1;}
            100%{bottom: 98%;
                opacity: 0;}
        }
        @-moz-keyframes move{
            0%{
               opacity: 0;}
            40%{opacity: 1;}
            60%{opacity: 1;}
            100%{bottom: 90%;
                opacity: 0;}
         }

        .ani-time-20{
             animation: move 20s infinite;
             -moz-animation: move 20s infinite;
             -webkit-animation:move 20s infinite;
         }
        .ani-time-25{
            animation: move 25s infinite;
            -moz-animation: move 25s infinite;
            -webkit-animation:move 25s infinite;
        }
        .ani-time-18{
            animation: move 18s infinite;
            -moz-animation: move 18s infinite;
            -webkit-animation:move 18s infinite;
        }
        .ani-paused{
            animation-play-state: paused;
            -webkit-animation-play-state: paused;
            -moz-animation-play-state:paused;
        }
        .ani-run{
            animation-play-state: running;
            -webkit-animation-play-state: running;
            -moz-animation-play-state:running;
        }
        .point-on{
             border: double!important;
             -webkit-transform:scale(1.2);
             -moz-transform:scale(1.2);
             transform:scale(1.2);
         }
        .point-on-s{
            border: double!important;
            -webkit-transform:scale(1.2) translate(-50%,0)!important;
            -moz-transform:scale(1.2) translate(-50%,0)!important;
            transform:scale(1.2) translate(-50%,0)!important;
        }
    </style>
    <script src="/assets/js/jquery-1.11.2.min.js"></script>

</head>
<body>
<div data-role="page" id="m_home">
    <div data-role="content" id="content">
        <div class="move-area">
            <a class="first ani-time-20 " href="/index.php/m/home/index">轮播图</a>
            <a class="first ani-time-20 " style="background-color: #49afcd;color: #ffffff;animation-delay:10s;-webkit-animation-delay:10s;" href="javascript:;">CSS3动画</a>
            <a class="second  ani-time-25 " style="color: #fff;" href="javascript:;">地图坐标转换</a>
            <a class="third ani-time-25" style="background-color: #49afcd;color: #99BC99;" href="javascript:;">个人中心</a>
            <a class="third ani-time-18 " style="background-color: red;color: yellow;" href="/index.php/m/home/index#hr">定时脚本</a>
            <a class="second ani-time-25 " style="background-color: red;color: yellow;animation-delay:6s;-webkit-animation-delay:6s;" href="javascript:;">love my dog</a>
            <a class="second ani-time-25 " style="background-color: #999999;color: #E5E5E5;animation-delay:15s;-webkit-animation-delay:15s;" href="javascript:;">Laravel</a>
            <a class="first ani-time-25 " style="background-color: #49afcd;color: #ffffff;animation-delay:2s;-webkit-animation-delay:2s;" href="javascript:;">hello world</a>
            <a class="third ani-time-20 " style="background-color: #49afcd;color: #ffffff;animation-delay:13s;-webkit-animation-delay:13s;" href="javascript:;">PHP生成随机概率</a>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    $('.move-area a').on('mouseover',function(){
        $(this).removeClass('ani-run');
        if($(this).hasClass('second')){
            $(this).addClass('point-on-s');
        }else{
            $(this).addClass('point-on');
        }
        $(this).addClass('ani-paused');
    });

    $('.move-area a').on('mouseleave',function(){
        $(this).removeClass('ani-paused point-on point-on-s');
        $(this).addClass('ani-run');
    });
    $('.move-area a').on('click',function(){
        $(this).removeClass('ani-run');
        if($(this).hasClass('second')){
            $(this).addClass('point-on-s');
        }else{
            $(this).addClass('point-on');
        }
        $(this).addClass('ani-paused');
    });
</script>
</html>