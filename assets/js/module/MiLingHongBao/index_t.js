jQuery(function ($) {
    //添加视频按钮单击
    $('.miling-add').on('click',function(){
        alert(111);
        var _this=$(this);
        $('.add-video-contain').removeClass('hide').dialog({
                modal:true,
                title:'添加视频数据',
                title_html:true,
                width:560,
                buttons:[
                    {
                        text: "确定",
                        class : "btn btn-primary btn-xs",
                        click: function() {
                            _this_btn = $( this );
                            var $form = $('.form-horizontal');
                            formData_object = new FormData();
                            var file_input = $form.find('input[type=file]');
                                file_input.each(function(){
                                    var field_name = $(this).attr('name');
                                    var files = $(this).data('ace_input_files');
                                    if(files && files.length > 0) {
                                        for(var f = 0; f < files.length; f++) {
                                            formData_object.append(field_name, files[f]);
                                        }
                                    }
                                });
                            formData_object.append('title',$('input[name=title]').val());
                            formData_object.append('desc' , $('textarea[name=desc]').val());
                            $.ajax({
                                type : 'post',
                                url:"/console/media/ajax_video_add",
                                beforeSend : function(){
                                    $.showLoading();
                                },
                                complete : function(){
                                    $.hideLoading();
                                },
                                dataType : 'json',
                                contentType: false,
                                processData: false,
                                data : formData_object,
                                error : function(){
                                    Weiba.tip('异常的请求', 3000);
                                },
                                success : function(resp) {
                                        if(resp.ret=='0'){
                                            var shtml ='<div class="data-item col-xs-2">'+
                                                '<div class="data-box">'+
                                                '<div class="data-body video_bg video_play" data-id="'+resp.data.media_id+'"><i class="ace-icon fa fa-film"></i><span  data-id="'+resp.data.media_id+'"></span></div>'+
                                            '<div class="video_item" style="position:absolute;top:0;width:100%;heigth:100%;"></div>'+
                                                '<div class="data-do action-buttons"><a  href="javascript:"><i style="margin-top:2px;" class="ace-icon  glyphicon glyphicon-play white bigger-125 video-edit" data-id="'+resp.data.media_id+'" videoId="'+resp.data.id+'"></i></a><a class="red" href="javascript:"><i style="margin-top:2px;" class="ace-icon fa fa-trash-o bigger-125 video-del white" data-id="'+resp.data.media_id+'" data-name="'+resp.data.name+'"></i></a></div>'+
                                            '<div class="data-del gritter-close" data-id="'+resp.data.media_id+'" data-name="'+resp.data.name+'" ></div>'+
                                                '</div>'+
                                                '<div class="data-name">'+resp.data.name+'</div>'+
                                                '</div>';
                                            $('.video-container').prepend(shtml);
                                            $('#video-container').find('.lessrelate').closest(".data-item").remove();
                                            file_input.ace_file_input('reset_input_ui');
                                            file_input.ace_file_input('loading', false);
                                            $.hideLoading();
                                            Weiba.tip("上传成功");
                                            _this_btn.dialog('close');
                                            $form[0].reset();
                                        }else{
                                            //file_input.ace_file_input('reset_input_ui');
                                            //file_input.ace_file_input('loading', false);
                                            $.hideLoading();
                                            //alert_box({'status':'error','message':resp.msg});
                                            Weiba.tip(resp.msg);
                                        }
                                    }
                            });
                        } 
                    },
                    {
                        text: "取消",
                        "class" : "btn btn-cannel btn-xs",
                        click: function() {
                            $( this ).dialog( "close" ); 
                            return false;
                        } 
                    }
                ]}
            );
        $.hideLoading();
    })

});