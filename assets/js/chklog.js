/**
 * Created by 111 on 2015/3/6.
 */
$(document).ready(function(){
    function chknull(){
        var user = document.getElementById('user').value;
        var password = document.getElementById('password').value;

        if(user == ''){
            alert('请输入用户名！');
            // window.history.back();
            document.getElementById('user').focus();
            return false;
        }else if(password ==''){
            alert('请输入用户密码！');
            // window.history.back();
            document.getElementById('password').focus();
            return false;
        }else{
            return true;
        }
    }
    $('#submit').click(function(){
        if(chknull()){          //检查用户名和密码是否为空
            var user = $('#user').val();
            var password = $('#password').val();
            $.ajax({
                url:'/index.php/login/chklog',
                type:'post',
                data:{user:user,password:password},
                dataType:'json',
                async: false,
                success:function(e){
                    if(e){
                        $("#formSubmit").trigger('click');
                        $('form').submit();
                    }else{
                        alert('用户名或密码不正确，请重新输入！');
                        $('#user').focus();
                    }
                }
            });
        }
    });
    $(document).keydown(function(e){
        if(e.keyCode==13){          //按enter键登录
            if(chknull()){          //检查用户名和密码是否为空
                var user = $('#user').val();
                var password = $('#password').val();
                $.ajax({
                    url:'/index.php/login/chklog',
                    type:'post',
                    data:{user:user,password:password},
                    dataType:'json',
                    async: false,
                    success:function(e){
                        if(e){
                            $sub = $('#formSubmit');
                            $sub.trigger('click');
                            //$('form').submit();
                        }else{
                            alert('用户名或密码不正确，请重新输入！');
                            $('#user').focus();
                        }
                    }
                });
            }
        }
    });
});

