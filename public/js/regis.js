// JavaScript Validation For Registration Page

$('document').ready(function()
{ 		 		
	
	$('select[name="brandname"]').on('change', function() {

							var stateID = $(this).val();
							console.log(stateID);

							if (stateID) {

								$.ajax({

									url : '/api/' + stateID,

									headers : {
										'X-CSRF-Token' : $('input[name="_token"]').val()
									},

									type : "GET",

									dataType : "json",

									success : function(data) {

										$('select[name="modelno"]').empty();

										console.log(data);

										$.each(data, function(i, value) {

											console.log(value.model_no);
											$('select[name="modelno"]').append('<option value="' + value.model_no + '">' + value.model_no + '</option>');

										});

									}
								});

							} else {

								$('select[name="modelno"]').empty();
							}

						});
		 
		 var numregex =  /^\d+$/;
		 
		 $.validator.addMethod("numeric", function( value, element ) {
		     return this.optional( element ) || numregex.test( value );
		 });
		 
		 
		 $("#register").validate({
					
		  rules:
		  {
		  		amount: {
					required: true,
					numeric: true
				},
				sellprice: {
					required: true,
					numeric: true
				},
				buyprice: {
					required: true,
					numeric: true
				},
		   },
		   messages:
		   {
				amount: {
					  required: "Please Enter Amount Of Product",
					  numeric: "Enter Valid Amount"
					   },
				sellprice: {
					  required: "Please Enter Email Address",
					  numeric: "Enter Valid Email Address"
					   },
				buyprice: {
					  required: "Please Enter Email Address",
					  numeric: "Enter Valid Email Address"
					   }
		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   
		   		submitHandler: function(form){
					
					form.submit();
					}
		   
		   }); 
		   
		   
		   /*function submitForm(){
			 
			   
			   /*$('#message').slideDown(200, function(){
				   
				   $('#message').delay(3000).slideUp(100);
				   $("#register-form")[0].reset();
				   $(element).closest('.form-group').find("error").removeClass("has-success");
				    
			   });
			   
			   alert('form submitted...');
			   $("#register-form").resetForm();
			      
		   }*/
});