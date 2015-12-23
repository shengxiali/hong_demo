var include = [
	'<link rel="stylesheet" href="/assets/css/bootstrap-datetimepicker.css">',
	'<script src="/assets/js/date-time/moment.min.js"></script>',
	'<script src="/assets/js/date-time/bootstrap-datetimepicker.min.js"></script>',
	'<script src="/assets/js/fuelux/fuelux.spinner.min.js"></script>',
	'<script src="/assets/validationEngine/js/jquery.validationEngine.js"></script>',
	'<script src="/assets/validationEngine/js/jquery.validationEngine-zh_CN.js"></script>',
	'<link rel="stylesheet" href="/assets/validationEngine/css/validationEngine.jquery.css">'
];
document.write(include.join(''));

$(function(){

	$("input[name=ad_type]").on('change',function(){
		var v = $(this).val();
		if($(this).prop('checked'))
		{
			$('#tg_img div.tg_img').addClass('hide');
			$('#tg_img div.tg_img').eq(v).removeClass('hide');
		}
	});

	$('#id-input-file').ace_file_input({
		style:'well',
		btn_choose:'上传logo',
		btn_change:null,
		no_icon:'ace-icon fa fa-cloud-upload',
		droppable:true,
		thumbnail:'small',
		preview_error : function(filename, error_code) {
		}
	}).on('change', function(){});

	$('#id-input-file2').ace_file_input({
		style:'well',
		btn_choose:'上传推广图',
		btn_change:null,
		no_icon:'ace-icon fa fa-cloud-upload',
		droppable:true,
		thumbnail:'small',
		preview_error : function(filename, error_code) {
		}
	}).on('change', function(){});


	$('#date-timepicker1').datetimepicker({
		format:'YYYY-MM-DD HH:mm:ss',
		useSeconds:!0,
		weekStart: 1, 
		minDate:w_mindate,
	}).prev().on(ace.click_event, function(){
		$(this).next().focus();
	});
	$('#date-timepicker2').datetimepicker({
		format:'YYYY-MM-DD HH:mm:ss',
		useSeconds:!0,
		weekStart: 1, 
		minDate:w_mindate
	}).prev().on(ace.click_event, function(){
		$(this).next().focus();
	});

	$('#form-field-5').ace_spinner({numberFormat: "quantity",value:50,min:50,max:9999999,step:50, on_sides: true, icon_up:'ace-icon fa fa-plus smaller-75', icon_down:'ace-icon fa fa-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'})
	.on('keyup', function(event){
		var keyCode = event.keyCode;
        if (keyCode === 37||keyCode === 39) {
            return;
        }
        var v = parseInt(this.value);
        if( isNaN(v) ) v=50;
        if( v > 9999999 ) v=9999999;
        this.value = v;
	});

	$('#form-field-6').ace_spinner({numberFormat: "quantity",value:1,min:1,max:999,step:1, on_sides: true, icon_up:'ace-icon fa fa-plus smaller-75', icon_down:'ace-icon fa fa-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'})
	.on('keyup', function(event){
		var keyCode = event.keyCode;
        if (keyCode === 37||keyCode === 39) {
            return;
        }
        var v = parseInt(this.value);
        if( isNaN(v) ) v=1;
        if( v > 999 ) v=999;
        this.value = v;
	});

	$('#form-field-7-1').on('change',function(){
		var keyCode = event.keyCode;
        if (keyCode === 37||keyCode === 39) {
            return;
        }
        var v = Number(this.value);
        if( isNaN(v) ) v=1;
        v = v.toFixed(2);
        if( v > 200 ) v='200.00';
        //v = check_form_field_7(1);
        this.value = v;
	});

	$('#form-field-7-2').on('change',function(){
		var keyCode = event.keyCode;
        if (keyCode === 37||keyCode === 39) {
            return;
        }
        var v = Number(this.value);
        if( isNaN(v) ) v=1;
        v = v.toFixed(2);
        if( v > 200 ) v='200.00';
        //v = check_form_field_7(2);
        this.value = v;
	});

	window.submited = false;
	$("#form").validationEngine({
		'showOneMessage':true,
		'scroll':false,
		onValidationComplete:function(form,valid){
			if( window.submited )
			{
				Weiba.tip('正在提交中...');
				return;
			}
			if( false == valid ) return;

			var fd = new FormData();

			if( $("input[name=ad_type]:checked").val() == 1 )
			{
				var file = $('#id-input-file').data('ace_input_files');
				if( file && file.length >= 1 )
					fd.append('file',file[0]);
			}else{
				var file = $('#id-input-file2').data('ace_input_files');
				if( file && file.length >= 1 )
					fd.append('file',file[0]);
			}

			var o = $(form).serializeArray();
			for( var i in o )
			{
				if( o[i]['name'] == 'file' ) continue;
				fd.append(o[i]['name'],o[i]['value']);
			}
			$.showLoading();
			window.submited = true;
			//先提交图片
	        $.ajax({
	            url         :   '',
	            type        :   'post',
	            processData :   false,//important
	            contentType :   false,//important
	            dataType    :   'json',
	            data        :   fd,
	            success     :   function(resp)
	            {
	            	if( resp.ret != 0 )
	            	{
	            		window.submited = false;
	            		Weiba.tip(resp.msg);
	            		return false;
	            	}
	                window.location.href = './index';
	            }
	        });
		}
	});
});
