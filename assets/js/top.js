/**
 * Created by 111 on 2015/4/27.
 */
$(document).ready(function(){
    //请求用户头像和用户信息
    $.ajax({
        url:'/index.php/home/user_photo',
        type:'post',
        dataType:'json',
        async: false,
        beforeSend:function(){
            $('.js_photo').text('loading...');
        },
        success:function(e){
            //console.log(e.photoname);
            var src = '/assets/img/user_photo/'+ e.photoname;
            $('.js_photo').attr('src',src);
            $('.name').text(e.user_name);
            $('.sign').text(e.sign);
        },
        error:function(){
            alert('请求错误！');
        }
    });
});
