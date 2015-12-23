/**
 * Created by 111 on 2015/4/10.
 */
$(document).ready(function(){
    //请求用户照片
    function ajaxRequestImg(){
        var $ldMore = $('.loadMore');
        var currPage = $ldMore.attr('data-page');
        $.ajax({
            url:'/index.php/home/user_img',
            type:'post',
            dataType:'json',
            data:{perPage:6,currPage:currPage},
            success:function(data){
                var $ul = $('.js_user_img').addClass('photo clearfix');
                if(data==0){                                        //如果没有获取到任何图像
                    var $li = $('<li></li>');                       //创建一个li标签
                    $li.addClass('lfloat cell');                    //给li标签加样式
                    var $img = $('<img>');                          //创建一个img标签
                    $img.attr('src','/assets/img/user_img/add.png');
                    $img.attr('id','addImg');
                    //var $p = $('<p></p>');                          //创建一个p标签
                    //$p.text('点击添加');

                    //$img.append($p);
                    $li.append($img);
                    $ul.append($li);
                    $('.loadMore').css({'display':'none'});
                }else{
                    for(var i in data){
                        var $li = $('<li></li>');                       //创建一个li标签
                        $li.addClass('lfloat cell');                    //给li标签加样式
                        var $img = $('<img>');                          //创建一个img标签
                        // document.write(data[i]['imgname']);
                        $path = '/assets/img/user_img/';
                        $img.attr('src',$path+data[i]['imgname']);      //定义img标签的src属性
                        $li.append($img);                               //将img标签插入li标签里面
                        $ul.append($li);                                //将li标签插入ul标签里面
                    }
                    //加载更多按钮的data-page值+1
                    $ldMore.attr('data-page',parseInt(currPage)+1);
                }
                //alert($ldMore.attr('data-page'));
            },
            error:function(e){
                alert('错误');
            }
        });
    }
    ajaxRequestImg();           //调用ajaxRequestImg
    $('.loadMore').click(function(){        //点击加载更多按钮加载图片
       ajaxRequestImg();
    });
    //加载博客内容
    function ajaxRequestBlog(){
        var $ldMoreBlog = $('.loadMoreBlog');       //点击更多博客按钮
        var currPageBlog = $ldMoreBlog.attr('data-page');   //博客分页的当前页数
        $.ajax({
            url:'/index.php/home/load_blog',
            type:'post',
            dataType:'json',
            data:{currPage:currPageBlog,perPage:3},         //传递当前页数和每页显示的博客条数
            success:function(blog){
                //console.log(blog);
                var _html = '';
                if(blog==0){
                    $ldMoreBlog.text('亲，没有更多的博客啦~');
                }else{
                    $.each(blog,function(i,data){
                        _html += '<div class="one_record clearfix">'+
                        '<a href="#"><span class="font_black1 font_18">'+data.title+'</span></a>'+
                        '<span class="time ">'+data.add_time+'</span>'+
                        '<p>'+data.content+'</p>'+
                        '<ul type="none" class="clearfix">'+
                        '<li class="lfloat item">评论（'+data.comment+'）</li>'+
                        '<li class="lfloat item">转发（'+data.reprint+'）</li>'+
                        '<li class="lfloat item">赞（'+data.is_like+'）</li>'+
                        '</ul>'+
                        '<div class="line"></div>'+
                        '</div>';
                    });
                    $('.js_blog_content').append(_html);
                    //加载更多按钮的值+1
                    $ldMoreBlog.attr('data-page',parseInt(currPageBlog)+1);
                }
            }
        });
    }
    ajaxRequestBlog();
    //滚动加载更多博客按钮
    $(window).scroll(function(){
        if($(this).scrollTop()+$(window).height()+10>=$(document).height()&&$(this).scrollTop()>100){
            ajaxRequestBlog();              //调用加载博客函数
        }
    });

    //发表博客
    $('#pub').click(function(){
        var title = $('.w_title');
        var content = $('.w_content');
        if(title.val()==''){
            title.attr('placeholder','标题必须填写！').addClass('w_title_alert');
            return ;
        }else if(content.val()==''){
            content.attr('placeholder','内容必须要填写！').addClass('w_content_alert');
            return ;
        }else{
            $.ajax({
                url:'/index.php/home/publish',
                type:'post',
                data:{title:title.val(),content:content.val()},
                dataType:'json',
                success:function(e){
                    window.location.href = '/index.php/home';
                }
            });
        }
    });
    //取消发布
    $('#concer').click(function(){
        var title = $('.w_title');
        var content = $('.w_content');
        if(title.val()!=''||content.val()!=''){
            if(confirm('您确定不发布该条消息了吗？')){
                title.val('');
                content.val('');
                title.removeClass('w_title_alert');
                content.removeClass('w_content_alert');
            }
        }

    });
});