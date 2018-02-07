jQuery(document).ready(function() {
    jQuery("#loginLink").click(function( event ){
           event.preventDefault();
           jQuery(".overlay").fadeToggle("fast");
     });
     
    jQuery(".overlayLink").click(function(event){
        event.preventDefault();
        var action = jQuery(this).attr('data-action');
         
        jQuery("#loginTarget").load("ajax/" + action);
         
        jQuery(".overlay").fadeToggle("fast");
    });
     
    jQuery(".login-close").click(function(){
        jQuery(".overlay").fadeToggle("fast");
    });
     
    jQuery(document).keyup(function(e) {
        if(e.keyCode == 27 && jQuery(".overlay").css("display") != "none" ) { 
            event.preventDefault();
            jQuery(".overlay").fadeToggle("fast");
        }
    });

   jQuery(".register-overlayLink").click(function(event){
        event.preventDefault();
        var action = jQuery(this).attr('data-action');
         
        jQuery("#registerTarget").load("ajax/" + action);
         
        jQuery(".register-overlay").fadeToggle("fast");
    });
     
    jQuery(".register-close").click(function(){
        jQuery(".register-overlay").fadeToggle("fast");
    });
     
    jQuery(document).keyup(function(e) {
        if(e.keyCode == 27 && jQuery(".register-overlay").css("display") != "none" ) { 
            event.preventDefault();
            jQuery(".register-overlay").fadeToggle("fast");
        }
    });

/*
	Validation Start Here
*/

	//Login

jQuery('#login-form button[type=submit]').click(function(e){


    var jQuerybtn = jQuery(this).button('loading');

    e.preventDefault();

	jQuery('#login-form #email').closest('.form-group').find('.help-block').html('');
  /*  if(jQuery('#login-form #username').hasClass('has-error')){
        jQuery('#login-form #username').removeClass('has-error');
    }

    if(jQuery('#login-form #password').hasClass('has-error')){
        jQuery('#login-form #password').removeClass('has-error');
    }*/

    var form = jQuery(this).parents("form:first");
    var dataString = form.serialize();
    var formAction = form.attr('action');

    jQuery.ajax({
        type: "POST",
        url : formAction,
        data : dataString,
	headers : {
			'X-CSRF-Token' : jQuery('input[name="_token"]').val()
		   },
        success : function(data){
            console.log(data);

            setTimeout(
                function()
                {
                    jQuerybtn.button('success');
                    jQuery('#login-form button[type=submit]').css('background', '#449d44');

                    setTimeout(
                        function()
                        {
                            window.location.href = "/";

                        }, 2000);

                }, 2000);

        },
        error : function(data){
            var messages = jQuery.parseJSON(data.responseText);
            console.log(messages.errors.user_email[0]);

            setTimeout(
                function()
                {
                    if(messages.errors.user_email){
		if(!jQuery('#login-form #email').closest('.form-group').find('.help-block').hasClass('alert-danger'))
			jQuery('#login-form #email').closest('.form-group').find('.help-block').addClass('alert-danger');
                        jQuery('#login-form #email').closest('.form-group').find('.help-block').html(messages.errors.user_email[0]);
                        
                    }

                    if(messages.errors.password){
                if(!jQuery('#login-form #password').closest('.form-group').find('.help-block').hasClass('alert-danger'))
			jQuery('#login-form #password').closest('.form-group').find('.help-block').addClass('alert-danger');
                        jQuery('#login-form #password').closest('.form-group').find('.help-block').html(messages.errors.password[0]);
                    }

                    jQuerybtn.button('reset');

                }, 1500);

        }

    },"json");
});
		//register
jQuery('#register-form button[type=submit]').click(function(e){


    var jQuerybtn = jQuery(this).button('loading');

    e.preventDefault();

	jQuery('#register-form #name').closest('.form-group').find('.help-block').html('');
	jQuery('#register-form #email').closest('.form-group').find('.help-block').html('');
	jQuery('#register-form #password').closest('.form-group').find('.help-block').html('');
	jQuery('#register-form #mnumber').closest('.form-group').find('.help-block').html('');
  /*  if(jQuery('#login-form #username').hasClass('has-error')){
        jQuery('#login-form #username').removeClass('has-error');
    }

    if(jQuery('#login-form #password').hasClass('has-error')){
        jQuery('#login-form #password').removeClass('has-error');
    }*/

    var form = jQuery(this).parents("form:first");
    var dataString = form.serialize();
    var formAction = form.attr('action');

    jQuery.ajax({
        type: "POST",
        url : formAction,
        data : dataString,
	headers : {
			'X-CSRF-Token' : jQuery('input[name="_token"]').val()
		   },
        success : function(data){
            console.log(data);

            setTimeout(
                function()
                {
                    jQuerybtn.button('success');
                    jQuery('#register-form button[type=submit]').css('background', '#449d44');

                    setTimeout(
                        function()
                        {
                            window.location.href = "/";

                        }, 2000);

                }, 2000);

        },
        error : function(data){
            var messages = jQuery.parseJSON(data.responseText);
            console.log(messages);

            setTimeout(
                function()
                {
                    if(messages.errors.email){
		if(!jQuery('#register-form #email').closest('.form-group').find('.help-block').hasClass('alert-danger'))
			jQuery('#register-form #email').closest('.form-group').find('.help-block').addClass('alert-danger');
                        jQuery('#register-form #email').closest('.form-group').find('.help-block').html(messages.errors.email[0]);
                        
                    }
			else if(messages.message){
				if(!jQuery('#register-form #email').closest('.form-group').find('.help-block').hasClass('alert-danger'))
			jQuery('#register-form #email').closest('.form-group').find('.help-block').addClass('alert-danger');
                        jQuery('#register-form #email').closest('.form-group').find('.help-block').html(messages.errors.email[0]);
		 }
                    if(messages.errors.name){
		if(!jQuery('#register-form #name').closest('.form-group').find('.help-block').hasClass('alert-danger'))
			jQuery('#register-form #name').closest('.form-group').find('.help-block').addClass('alert-danger');
                        jQuery('#register-form #name').closest('.form-group').find('.help-block').html(messages.errors.name[0]);
                        
                    }


                    if(messages.errors.password){
                if(!jQuery('#register-form #password').closest('.form-group').find('.help-block').hasClass('alert-danger'))
			jQuery('#register-form #password').closest('.form-group').find('.help-block').addClass('alert-danger');
                        jQuery('#register-form #password').closest('.form-group').find('.help-block').html(messages.errors.password[0]);
                    }

                    jQuerybtn.button('reset');

                }, 1500);

        }

    },"json");
});

/*
	Validation End Here
*/


});
