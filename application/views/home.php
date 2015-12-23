<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>LOL笔记</title>
    <meta name="description" content="共享笔记">
    <meta name="author" content="梅江">
    <link rel="stylesheet" href="/assets/jqueryMobile/jquery.mobile-1.4.5.min.css"/>
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/ace-fonts.css"/>

    <script type="text/javascript" src="/assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="/assets/jqueryMobile/jquery.mobile-1.4.5.min.js"></script>


    <style type="text/css">
        html,body,div,a,p{padding: 0;margin: 0;}
        .main a{text-decoration: none;}
        html,body,#home,#content,.main{height: 100%;}
        #home{
            background: url("/assets/img/home_bg.jpg") no-repeat;
            background-size: 100% 100%;
        }
        #content{padding: 0;}
        .main{
            position: relative;
        }
        .left{
            border: 1px solid #E5E5E5;
            width: 40%;
            height: 150px;
            position: absolute;
            left: 0;
            top:50%;
            margin-top: -75px;
            border-top-right-radius: 75px;
            border-bottom-right-radius: 75px;
            background-color: #000000;
            opacity: 0.6;
            box-shadow: 5px 5px 5px #000000;
        }
        .left .people-box{
            position: relative;
            width: 100%;
            height: 100%;
        }
        .left .people-box .people{
            border: 1px solid #ffffff;
            width: 150px;
            height: 150px;
            border-radius: 75px;
            background: url("/assets/img/gailun.png");
            background-size: 150px 150px;
            position: absolute;
            top:0;
            right: 0;
            z-index: 9;
        }

        .right{
            border: 1px solid #E5E5E5;
            width: 40%;
            height: 150px;
            position: absolute;
            right: 0;
            top:50%;
            margin-top: -75px;
            border-top-left-radius: 75px;
            border-bottom-left-radius: 75px;
            background-color: #000000;
            opacity: 0.6;
            box-shadow: 5px 5px 5px #000000;
        }
        .right .people-box{
            position: relative;
            width: 100%;
            height: 100%;
        }
        .right .people-box .people{
            border: 1px solid #ffffff;
            width: 150px;
            height: 150px;
            border-radius: 75px;
            background: url("/assets/img/kate.png");
            background-size: 150px 150px;
            position: absolute;
            top:0;
            left: 0;
            z-index: 9;
        }
        .bottom_box{
            width: 40%;
            height: 120px;
            border: 1px solid #ffffff;
            font-size: 5em;
            line-height: 120px;
            text-align: center;
            color: #999999;
            text-shadow: 5px 5px 5px #143270;
            box-shadow: 5px 5px 5px #000000;
            position: absolute;
            top: 80%;
            left: 50%;
            margin-top: -60px;
            margin-left: -20%;
        }

        .arrow_left{
             width: 150px;
             color: #ffffff;
             font-size: 3em;
             position: absolute;
             left: 40%;
             top: 50%;
             transform: translate(-50%,-50%);
             -webkit-transform: translate(-50%,-50%);;
             text-align: center;

         }
        .arrow_right{
            width: 150px;
            color: #ffffff;
            font-size: 3em;
            position: absolute;
            right: 40%;
            top: 50%;
            transform: translate(50%,-50%);
            -webkit-transform: translate(50%,-50%);
            text-align: center;

        }
        .arrow{
            animation: twinkle 2s infinite;
            -moz-animation:twinkle 2s infinite;
            -webkit-animation: twinkle 2s infinite;
        }
        
        @keyframes twinkle{
            0%{transform: scale(1);}
            100%{transform: scale(1.5);}
        }
        @-moz-keyframes twinkle{
            0%{-moz-transform: scale(1);}
            100%{-moz-transform: scale(1.5);}
        }
        @-webkit-keyframes twinkle {
             0%{-webkit-transform: scale(1);}
             100%{-webkit-transform: scale(1.5);}
         }

        .music_off{
            position: absolute;
            top:20px;
            right: 20px;
        }
        .music_img{
            width: 90px;
            height: 90px;
            background: url("/assets/img/music_off.png");
            background-size: 100% 100%;
        }
        .rotate{
            animation: rotater 1s linear infinite;
            -webkit-animation: rotater 1s linear infinite;
        }
        @keyframes rotater {
            0%{transform: rotate(0deg);}
            100%{transform: rotate(360deg);}
        }
        @-webkit-keyframes rotater {
            0%{-webkit-transform: rotate(0deg);}
            100%{-webkit-transform: rotate(360deg);}
        }

    </style>
</head>
<body>
    <div data-role="page" id="home">
        <div data-role="content" id="content">
            <div class="main">
                <div class="music_off "><div class="rotate music_img" id="music_img"></div></div>
                <div class="left">
                    <div class="people-box">
                        <a href="javascript:;"><div class="people"></div></a>
                        <div class="arrow_left"><p class="arrow"><i class="fa fa-angle-double-left"></i></p></div>
                    </div>
                </div>
                <div class="right">
                    <div class="people-box">
                        <a href="javascript:;"><div class="people"></div></a>
                        <div class="arrow_right"><p class="arrow"><i class="fa fa-angle-double-right"></i></p></div>
                    </div>
                </div>
                <div class="bottom_box">
                    人在塔在
                </div>
                <audio src="http://3.s.bama555.com/3/201508/14/59afede3deb35e7edaa9e3765926c51b.mp3" id="media" controls="controls" loop="loop" autoplay="autoplay" preload="preload" style="display: none;"></audio>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).on('pageinit','#home',function(){
        $('.music_off').on('click',function(){
            var audio = document.getElementById('media');
            if(audio.paused){
                audio.play();
                $('#music_img').addClass('rotate');
            }else{
                audio.pause();
                $('#music_img').removeClass('rotate');
            }
        });
        $('.left').on('swipeleft',function(){
            $(this).animate({left:'-25%'},200,function(){
                location.href='/index.php/m/home';
            })
        });
        $('.right').on('swiperight',function(){
            $(this).animate({right:'-25%'},200,function(){
                location.href='/index.php/h/first';
            });
        });
    });
</script>
</html>
