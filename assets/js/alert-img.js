/**
 * Created by 111 on 2015/5/9.
 */
$(document).ready(function(){

    $(window.frames[0].document).find('.js_img').live('click',function(){
        var src = $(this).attr('src');
        alert(src)
        $('#alert_bg').css({
            'position':'absolute',
            'left':0,
            'top':0,
            'right':0,
            'buttom':0,
            'background-color':'#000'
        })
    })
});
