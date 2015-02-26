/**
 * header module
 */

inked.User = {
	init : function() 
	{
		$('#name').focus();
		$('#account-info-form').validate({
			submitHandler : function(){
				var i = inked.User;
				i.saveUserInfo();
			}
		});
		$('#password-form').validate({
			submitHandler : function(){
				var i = inked.User;
				i.saveUserPassword();
			}
		});

        $('#account-about-form').validate({
                submitHandler : function(){
                        var i = inked.User;
                        i.saveUserAbout();
                }
        });


        //BIND CUSTOM EVENT FOR THE IMG UPLOAD. IT IS FIRED BY THE UPLOAD PLUGIN
        $('#upload').bind('inkedUploadFinished', function() {
            $('#finish-album').removeClass('disabled');
        });

	},

	saveUserInfo : function()
	{
		var params = {
                "name" : $('#name').val(),
                "last_name" : $('#last_name').val(),
                "email" : $('#email').val(),
                };
                $.ajax({
                        data:  params,
                        url:   '/user/update_account',
                        type:  'post',
                        beforeSend: function () 
                        {
                                $("#user-info-msg").fadeIn();
                                $("#user-info-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Guardando...</span>');
                        },
                        success:  function (response) 
                        {
                                if(response != true)
                                {
                                	var li = '';
                                	response = jQuery.parseJSON(response);
                                	$.each(response, function(key, value) {
        							    li += '<li>'+value+'</li>'; 
        							});
                                	$("#user-info-msg").html('<span>Ocurrio el siguiente error</span><ul>'+li+'</ul>');
                                }
                                else
                                {
                                	$("#user-info-msg").html('<span>Datos guardados!</span>');
                                }
                                setInterval(function(){
                                	$("#user-info-msg").fadeOut();	
                                },3000);
                        }
                });
	},

	saveUserPassword : function()
	{
		var params = {
                "old_password" : $('#old_password').val(),
                "new_password" : $('#new_password').val(),
                };
                $.ajax({
                        data:  params,
                        url:   '/user/update_password',
                        type:  'post',
                        beforeSend: function () 
                        {
                                $("#user-password-msg").fadeIn();
                                $("#user-password-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Guardando...</span>');
                        },
                        success:  function (response) 
                        {
                                if(response != true)
                                {
                                	var li = '';
                                	response = jQuery.parseJSON(response);
                                	$.each(response, function(key, value) {
        							    li += '<li>'+value+'</li>'; 
        							});
                                	$("#user-password-msg").html('<span>Ocurrio el siguiente error</span><ul>'+li+'</ul>');
                                }
                                else
                                {
                                	$("#user-password-msg").html('<span>Datos guardados!</span>');
                                }
                                setInterval(function(){
                                	$("#user-password-msg").fadeOut();	
                                },3000);
                        }
                });		
	},

    saveUserAbout : function()
    {
            var selected = [];
            $('.styles-container input:checked').each(function() {
                    selected.push($(this).val());
            });
            

            var params = {
            "about" : $('#about').val(),
            "styles" : selected,
            "availability" : $('#availability').val(),
            "phone" : $('#phone').val(),
            "address" : $('#address').val(),
            };

            $.ajax({
                    data:  params,
                    url:   '/user/update_about',
                    type:  'post',
                    beforeSend: function () 
                    {
                            $("#user-about-msg").fadeIn();
                            $("#user-about-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Guardando...</span>');
                    },
                    success:  function (response) 
                    {
                            if(response != true)
                            {
                                    var li = '';
                                    response = jQuery.parseJSON(response);
                                    $.each(response, function(key, value) {
                                                                li += '<li>'+value+'</li>'; 
                                                            });
                                    $("#user-about-msg").html('<span>Ocurrio el siguiente error</span><ul>'+li+'</ul>');
                            }
                            else
                            {
                                    $("#user-about-msg").html('<span>Datos guardados!</span>');
                            }
                            setInterval(function(){
                                    $("#user-about-msg").fadeOut();  
                            },3000);
                    }
            });
    },



        

};

{
	$(document).ready(function() {
		inked.User.init();
	});
}
