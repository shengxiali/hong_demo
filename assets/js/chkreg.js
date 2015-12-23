/**
 * Created by 111 on 2015/3/20.
 */
$(document).ready(function(){
    //document.getElementById('user').focus();             //页面刷新时光标显示地方

    function request_ajax(selector){            //判断用户名是否已经被注册selector是用户名的选择器
        var value=selector.val();
        $.ajax({
            url:'/index.php/register/chkuser',
            type:'get',
            dataType:'json',
            data:{user:value},
            success:function(a){
                //console.log(a);
                if(a){
                    $('#uinfo').html('<p style="color:red">* 此账号已经被注册！</p>');
                    return 1;
                }else{
                    return 0;
                }
            }
        });
    }

    function is_null_name(){                      //判断用户名项为必填项
        var user = $('#user');
        var user_info = $('#uinfo');
        if(user.val()=='') {
            user_info.html('<p style="color:red">* 此项为必填项！</p>');
            return false;
        }else if(user.val().length>12){
            user_info.html('<p style="color:red">* 账号长度不能超过12字符！</p>');
            return false;
        }else if(request_ajax(user)){
            return false;
        }else {
            user_info.html('');
            return true;
        }
    }

    function is_null_pwd1() {                   //判断密码是否为空
        var pwd1 = $('#pwd1');
        var pwd1_info = $('#p1info');
        if(pwd1.val()==''){
            pwd1_info.html('<p style="color:red">* 此项为必填项！</p>');
            return false;
        }else if(pwd1.val().length<6){
            pwd1_info.html('<p style="color:red">* 密码长度不能小于6位!</p>');
            return false;
        }else{
            pwd1_info.html('');
            return true;
        }
    }

    function chk_pwd2() {                  //检查两次输入的密码是否一致
        var pwd1 = $('#pwd1');
        var pwd2 = $('#pwd2');
        var p2text = $('#p2info');
        if (pwd2.val() == '') {
            return false;
        } else if (pwd1.val() != pwd2.val()) {
            p2text.html('<p style="color:red">* 两次输入的密码不一致!</p>');
            return false;
        } else {
            p2text.html('');
            return true;
        }
    }

    $('#user').blur(function() {
        is_null_name();         //调用检查用户函数
    });
    $('#pwd1').blur(function(){
        is_null_pwd1();        //调用检查密码函数
    });
    $('#pwd2').blur(function(){
        chk_pwd2();           //调用检查两次密码是否相同函数
    });

    $('#submit').click(function(){  //点击注册按钮时检查所有的限制
        if(is_null_name()){         //检查用户名
            if(is_null_pwd1()){
                if(chk_pwd2()){
                    //传递数据到后台程序
                    var user = $('#user').val();
                    var password = $('#pwd1').val();
                    var age = $('#age').val();
                    var sex = $('.js_sex:radio:checked').val();
                    $.ajax({
                        url:'/index.php/register/add_data',
                        data:{user:user,password:password,age:age,sex:sex},
                        type:'post',
                        success:function(e) {
                            console.log(e);
                            if(confirm('恭喜您，注册成功！快去登录吧~')){
                                window.location.href = 'login';
                            }
                        }
                    });
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    });

    //is_click_submit('e_blur');                //传个e_click判断是执行onblur事件还是直接执行验证函数

    //图片预览
   /* $('#photo').click(function(){
     $.ajax({
     url:'/myblog/register/upload',
     data:$('input[name="photo"]'),
     type:'post',
     success:function(a){
     console.log(a);
     var html = "<img src='"+ a.path+"' width='100' height='100'";
     $('#photo_info').html(html);
     }
     });
     });*/
});