// JavaScript Validation For Registration Page

$('document').ready(function()
{ 		 		
		 // name validation
		  var nameregex = /^[a-zA-Z ]+$/;
		 
		 jQuery.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 jQuery.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 // valid email pattern
		 var numregex =  /^\d+$/;
		 
		 $.validator.addMethod("numeric", function( value, element ) {
		     return this.optional( element ) || numregex.test( value );
		 });
		 
		 
		 $("#form").validate({
					
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
				email: {
					required: true,
					validemail: true
				},
				password: {
					required: true,
					minlength: 8,
					maxlength: 15
				},
				cpassword: {
					required: true,
					equalTo: '#password'
				},
		   },
		   messages:
		   {
				name: {
					required: "Please Enter User Name",
					validname: "Name must contain only alphabets and space",
					minlength: "Your Name is Too Short"
					  },
			    email: {
					  required: "Please Enter Email Address",
					  validemail: "Enter Valid Email Address"
					   },
				amount: {
					  required: "Please Enter Email Address",
					  validemail: "Enter Valid Email Address"
					   },
				sellprice: {
					  required: "Please Enter Email Address",
					  validemail: "Enter Valid Email Address"
					   },
				buyprice: {
					  required: "Please Enter Email Address",
					  validemail: "Enter Valid Email Address"
					   },
				password:{
					required: "Please Enter Password",
					minlength: "Password at least have 8 characters"
					},
				cpassword:{
					required: "Please Retype your Password",
					equalTo: "Password Did not Match !"
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
					
					alert('submitted');
					form.submit();
					//var url = $('#register-form').attr('action');
					//location.href=url;
					
				}
				
			});
});