/**
 * Created by 111 on 2015/4/8.
 */
    $(function() {
        $('#file_upload').uploadify({
           'formData'     : {
                'timestamp' : time,
                'token'     : encodeTime
            },
            'swf'      : './assets/img/uploadify.swf',
            'uploader' : 'plug_uploadify/uploadify',
            'onUploadSuccess': function(file,data,response){
                var address = 'uploads/'+file.name;		//图片路径
                var $photoBox = $('<div></div>').css({		//定义图片外层的盒子
                    width:'30px',
                    height:'30px',
                    margin:'5px',
                    position:'relative',
                    border:'1px solid #ccc',
                    display:'inline-block'
                });
                var $img = $('<img src="'+address+'">').css({//图片的属性设置
                    width:'30px',
                    height:'30px',
                });
                var $del = $('<div></div>').css({			//定义删除按钮
                    width:'10px',
                    height:'10px',
                    background:'URL(../assets/img/uploadify-cancel.png)',
                    position:'absolute',
                    cursor:'pointer',
                    top:0,
                    right:0,
                    zIndex:'9999'
                });
                //$del.html('删除');

                $('#preview').append($photoBox);			//生成图片外层的盒子
                $photoBox.append($img);						//生成图片
                $img.after($del);				            //生成删除按钮
                $del.click(function(){
                    //alert(1111)
                    $photoBox.remove();
                });
            }
        });
    });
