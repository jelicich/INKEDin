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
                $(event.target).next().removeClass('disabled');
                break;    

            case 'image/jpg':
                $(event.target).next().removeClass('disabled');
                break;

            case 'image/jpeg':
                $(event.target).next().removeClass('disabled');
                break;

            case 'image/gif':
                $(event.target).next().removeClass('disabled');
                break;

            default:
                $(event.target).next().addClass('disabled'); 
                break;     
        }

    },

    uploadPhoto : function(event)
    {
        event.preventDefault();
        var formData = new FormData();
        //var input = $('#profile-input-file');
        var input = $(event.target).prev();
        formData.append('upl',input[0].files[0]);
        var target = $(event.target).attr('data-target');
        formData.append('target',target);

        $.ajax({
            url: '/photo/update_profile_cover_photo',  //Server script to process data
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

                if(target == 'profile')
                {
                    var src = $('#display-current-photo').attr('src');
                    var $photo = $($('.user-menu-photo')[0]);
                    $photo.attr('src', src);    
                }
                
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

    loadFavouritePhotos : function()
    {
          
        $.ajax({
            url:   '/photo/load_favourites',
            data:  '',
            type:  'post',
            beforeSend: function () 
            {
                $("#user-album-edit-msg").fadeIn();
                $("#user-album-edit-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Cargando...</span>');
            },
            success:  function (response) 
            {
                $('#edit-album').html(response);
            }
            
        });
    },


};

{
	$(document).ready(function() {
		inked.Photo.init();
	});
}
