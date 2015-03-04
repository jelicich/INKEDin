/**
 * header module
 */

inked.Photo = {
	init : function() 
	{

	},

    validateForm : function(event)
    {
        var file = $(event.target);
        //console.log(file[0].files[0].type);
        switch(file[0].files[0].type)
        {
            case 'image/png':
                $('#save-profile-pic-btn').removeClass('disabled');
                break;    

            case 'image/jpg':
                $('#save-profile-pic-btn').removeClass('disabled');
                break;

            case 'image/jpeg':
                $('#save-profile-pic-btn').removeClass('disabled');
                break;

            case 'image/gif':
                $('#save-profile-pic-btn').removeClass('disabled');
                break;

            default:
                $('#save-profile-pic-btn').addClass('disabled'); 
                break;     
        }

    },

    uploadProfilePhoto : function(event)
    {
        event.preventDefault();
        var formData = new FormData();
        var input = $('#profile-input-file');
        formData.append('upl',input[0].files[0]);
                
        
        $.ajax({
            url: '/photo/update_profile_photo',  //Server script to process data
            type: 'POST',
            xhr: function() {  // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if(myXhr.upload){ // Check if upload property exists
                    //myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // For handling the progress of the upload
                }
                return myXhr;
            },
            //Ajax events
            beforeSend: function () 
            {
                console.log('before');
                $("#user-profile-picture-msg").fadeIn();
                $("#user-profile-picture-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Guardando...</span>');
            },
            success: function (response)
            {
                $('#profile-pic').html(response);
                $("#user-profile-picture-msg").show();
                setInterval(function(){
                    $("#user-profile-picture-msg").fadeOut();  
                },3000);

                var src = $('#display-current-photo').attr('src');
                var $photo = $($('.user-menu-photo')[0]);
                $photo.attr('src', src);
            },
            error: function(r)
            {
                console.log('error');
                console.log(r);
            },
            
            // Form data
            data: formData,
            //Options to tell jQuery not to process data or worry about content-type.
            cache: false,
            contentType: false,
            processData: false
        });   
    },	

    createNewAlbum : function()
    {
            var params = {
                "name" : $('#album-name').val(),
            };

            $.ajax({
                data:  params,
                url:   '/album/create_album',
                type:  'post',
                beforeSend: function () 
                {
                    $("#user-album-create-msg").fadeIn();
                    $("#user-album-create-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Guardando...</span>');
                },
                success:  function (response) 
                {
                    response = jQuery.parseJSON(response);
                    if(response.status == 'error')
                    {
                            var li = '';
                            //response = jQuery.parseJSON(response);
                            $.each(response, function(key, value) {
                                                        li += '<li>'+value+'</li>'; 
                                                    });
                            $("#user-album-create-msg").html('<span>Ocurrio el siguiente error</span><ul>'+li+'</ul>');
                    }
                    else
                    {
                            $("#user-album-create-msg").html('<span>Datos guardados!</span>');
                            $("#new-album-form input[type='submit']").hide();
                            $("#album-name").attr('disabled','true');
                            $("#upload").fadeIn();
                            $("#album-id").attr('value', response.album);
                            $("#finish-album").attr('data-album-id', response.album);
                            $("#finish-album").css('display', 'block').hide().fadeIn();
                            $("#finish-album").css('display', 'block').hide().fadeIn();

                    }
                    setInterval(function(){
                            $("#user-album-create-msg").fadeOut();  
                    },3000);
                }
            });
    }

};

{
	$(document).ready(function() {
		inked.Photo.init();
	});
}
