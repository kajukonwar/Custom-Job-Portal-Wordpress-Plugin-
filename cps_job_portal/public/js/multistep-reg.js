(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 /***************************************************************************
	  ****************************************************************************
	  */

	 
	//Move the multistep reg forms
	 
	 function move_multi_reg(content) {

	 	$("#cn_multireg_forms").append(content);
	 	$("#cn_multireg_forms").delay(100).fadeIn(100);
	 }

	//complete the multi reg process
	
	function complete_multi_reg(content) {

		$("#cn_multireg_forms").append(content);
		$("#cn_multireg_forms").delay(100).fadeIn(100);
	} 

	 //Process multi reg submission
	 //@to-do check url:ajaxurl--something not right

	 function process_multireg_steps(f_data,f_id) {

	 	//remove previous error messages
	 	$(".multireg_val_error").html("");
	 	
	 	$.ajax({
		 		url: ajaxurl,
		 		type: 'post',
		 		dataType: 'json',
		 		data: {
		 			action: 'cps_multireg',
		 			data: f_data,
		 			formId: f_id
		 		},
		 		success: function(json_response) {
		 			
		 			switch(json_response.status) {

		 				case "pass":
		 					//load new form
		 					$.ajax({

		 						url: ajaxurl,
		 						type: 'post',
		 						dataType: 'html',
		 						data: {
		 							action: 'multireg_template',
		 							current_form_id: f_id
		 						},
		 						success: function(html_response) {
		 							
						 			$("#cn_multireg_forms").fadeOut(100);
						 			$("#cn_multireg_forms").empty();
						 			if(f_id==4) {
						 				complete_multi_reg(html_response);
						 			} else {

						 				move_multi_reg(html_response);

						 			}
						 			
		 						}
		 						
		 					});//inner ajax

		 					break;

		 				case "fail":
		 					//show errors
		 					
		 						for( var input_field in json_response.messages) {
		 							
		 							$("#"+input_field).siblings(".multireg_val_error").html(json_response.messages[input_field]);
		 				
		 						}
		 					break;

		 				default:
		 			}//switch
		 			
	
		 		}//outer ajax suucess

		 	});//outer ajax

	 }

	
	 $(document).ready( function() {

	 	/**
	 	 * handle multi reg submissions
	 	 *
	 	 */

	 	//step 2
	 	$("#cn_reg_btn2").on("click", function(e) {

	 		e.preventDefault();
	 		var regFormData=$("#cps_multireg_2").serialize();
	 		var regFormId=2;
	 		
	 		process_multireg_steps(regFormData, regFormId);
		 	
	 	});

	 	//step 3

	 	$("#cn_multireg_forms").on("click", "#cn_reg_btn3", function(e) {

	 		e.preventDefault();
	 		var regFormData=$("#cps_multireg_3").serialize();
	 		var regFormId=3;
	 		
	 		process_multireg_steps(regFormData, regFormId);
		 	
	 	});

	 	//step 4

	 	$("#cn_multireg_forms").on("click", "#cn_reg_btn4", function(e) {

	 		e.preventDefault();
	 		var regFormData=$("#cps_multireg_4").serialize();
	 		var regFormId=4;
	 		
	 		process_multireg_steps(regFormData, regFormId);
		 	
	 	});

	 	//end multi reg submissions

	 	/**
	 	 * handle multi reg conditional fields
	 	 */


	 	 $("#cn_multireg_forms").on("change", "#cps_multireg_4 input:radio", function(){

	 	 	
	 	 	if ($(this).is(':checked')){

	 	 		var field_name= this.name;
	 	 		var field_val= this.value;


      			$.ajax({

		 				url: ajaxurl,
		 				type: 'post',
		 				dataType: 'html',
		 				data: {
		 					   action: 'cps_multireg_conditional',
		 					   name: field_name,
		 					   value: field_val
		 					},
		 				success: function(html_response) {
		 							
								var elm=$('input:radio[name="'+field_name+'"]:checked');

								var elm_parent= elm.closest('.form-group');

								elm_parent.nextAll().remove();

								$(html_response).insertAfter(elm_parent);
						 			
		 					}
		 						
		 				});


	 	 	}//is checked
    			
	 	 });//is radio change
	 	 	

	 	 

	 });

})( jQuery );
