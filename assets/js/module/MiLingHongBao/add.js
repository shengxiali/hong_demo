		var  includeCssJsFile=[
	                   	'<link rel="stylesheet" href="/assets/css/bootstrap-datetimepicker.css"/>',
	                   	'<link rel="stylesheet" href="/assets/validationform_plugin/css/validationEngine.jquery.css"/>',
	                   	'<script src="/assets/js/date-time/moment.min.js"></script>',
	                   	'<script src="/assets/js/date-time/bootstrap-datetimepicker.min.js"></script>',
	                   	'<script src="/assets/validationform_plugin/js/languages/jquery.validationEngine-zh_CN.js"></script>',
	                   	'<script src="/assets/validationform_plugin/js/jquery.validationEngine.js"></script>'
	                   	];
	   document.write(includeCssJsFile.join(''));
	   	 

	  jQuery(function($){
		  
		
		  $('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
				$(this).prev().focus();
		  });
		  
		  $('#date-timepicker2').datetimepicker().next().on(ace.click_event, function(){
				$(this).prev().focus();
			});
		 
		  
		  //表单验证部分
			$('#form1').validationEngine('attach', { 
				  promptPosition: 'centerRight', 
				  scroll: false ,
				  addPromptClass: 'formError-noArrow formError-text',
				  validationEventTrigger:'blur',
				  onSuccess:function(){},
				  onFailure:function(){}
				});
		  
		 
			
		 //点击限领按钮，后台文本框必须添加
					
			$('input[name="receive_count"]').change(function(){
				
				if($(this).is($('#limitreceive_radio'))){
					$('#receive_count_val').addClass('validate[minOneNumber]');
					$('#receive_count_val').val(1);
					$('#receive_count_val')[0].focus();
				}else{
					$('#receive_count_val').removeClass('validate[minOneNumber]');
					
				}
				 							   
			});
			
			
			
		
			
			
			
			
		
			
		
			
		   
			
		  
		
			
			
		  
		
	
			
	   });