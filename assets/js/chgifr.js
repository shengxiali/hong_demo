/**
 * Created by 111 on 2015/5/4.
 */
$(document).ready(function(){
    $('.p_add_photo').click(function(){
        $('iframe').attr('src','/index.php/iframe/upload_photo');
    })
})
