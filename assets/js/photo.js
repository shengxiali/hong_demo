/**
 * Created by 111 on 2015/4/27.
 */
$(document).ready(function(){
    function loadPhoto(){
        $loadMore = $('.load_more');
        var currPage = $loadMore.attr('data-page');
        $.ajax({
            url:'/index.php/photo/get_photo',
            type:'post',
            data:{perPage:9,currPage:currPage},
            dataType:'json',
            success:function(e){
                if(e){
                    var path = '/assets/img/user_img/';
                    var _html = '';
                    $('.js_no_photo').text('').removeClass('no_photo');
                    $.each(e,function(i,data){
                        _html += '<div class="p_box">'+
                        '<img src="'+path+data.imgname+'" class="p_size js_img"/>'+
                        '</div>';
                    });
                    $('.p_list').append(_html);
                    $loadMore.attr('data-page',parseInt(currPage)+1);
                }else{
                    $loadMore.text('没有更多图片了');
                }
            }
        });
    }
    loadPhoto();
    $(window).scroll(function(){
        if($(this).scrollTop()+$(window).height()+10>=$(document).height()&&$(this).scrollTop()>10){
            loadPhoto();
        }
    });
    //添加照片
    $('.p_add_photo').click(function(){
        var html = '<iframe width="100%" height="400" src="/index.php/test" frameborder="0"></iframe>';
        $('.p_list').html('');
        $('.p_list').append(html);

    })
    //照片弹出层
    $('.js_img').hover(function(){
        $(this).css({'cursor': 'pointer'});
    });
    $('.js_img').live('click',function(){
        //$('body',parent.document).css({'overflow':'hidden'});                              //隐藏body的滚动条
        var src = $(this).attr('src');
        var $img = new Image();
        var img_container = $('.alert_container',parent.document);
        $('.alert_frame',parent.document).css({'display':'block'});                       //改变弹出层显示方式
        $('alert_frame').show();                                                          //显示弹出层
        $img.src = src;
        img_container.append($img);
        $img.onload=function(){
            var w = $img.width;
            var h = $img.height;
            img_container.css({
                'width':w,
                'height':h,
                'position':'absolute',
                'left':'50%',
                'top':'50%',
                'margin-top':-h/2,
                'margin-left':-w/2,
                'z-index':10
            });
        }
    })
});
