/**
 * header module
 */

inked.Album = {
	init : function() 
	{
        $('#new-album-form').validate({
                submitHandler : function(){
                        var i = inked.Album;
                        i.createNewAlbum();
                }
        });

        $('#upload').bind('inkedUploadFinished', function() {
            //console.log('all files uploaded!');
            $('#finish-album').removeClass('disabled');
        });

	},

	

    createNewAlbum : function()
    {
            //event.preventDefault ? event.preventDefault() : event.returnValue = false;               

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
                                    $("#finish-album").css('display', 'block').hide().fadeIn();
                                    $("#finish-album").css('display', 'block').hide().fadeIn();

                            }
                            setInterval(function(){
                                    $("#user-album-create-msg").fadeOut();  
                            },3000);
                    }
            });
    },


    loadAlbumEdit : function()
    {
            
            
            var params = {
                    'album_id' : $('#album-id').val(),
            }

            $.ajax({
                    data:  params,
                    url:   '/album/load_album_edit',
                    type:  'post',
                    beforeSend: function () 
                    {
                        $("#user-album-edit-msg").fadeIn();
                        $("#user-album-edit-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Cargando album...</span>');
                    },
                    success:  function (response) 
                    {

                        $('#edit-album').html(response);

                        //SET THE VALIDATION TO THE NEW VIEW LOADED
                        $('#edit-album-form').validate({
                                submitHandler : function(){
                                        var i = inked.Album;
                                        i.savePhotosEdit();
                                }
                        });

                    }
            });

            $("a[href='#edit-album']").tab('show');
            this.loadCreateAlbum();

    },

    savePhotosEdit : function()
    {

            var photosData = [];

            $('#edit-album .photo-edit-container').each(function(i, containerEl) {
                var $containerEl = $(containerEl);
                var photoId = $containerEl.find('img').attr('data-photo-id');
                var description = $containerEl.find('.description').val();
                var tags = $containerEl.find('.tags').val();

                photosData.push({
                    photoId : photoId,
                    description : description,
                    tags : tags
                });
            });

            $.ajax({
                    url:   '/album/save_album_edit',
                    data:  $.param({
                        'photos' : photosData
                    }),
                    type:  'post',
                    beforeSend: function () 
                    {
                        $("#user-album-edit-msg").fadeIn();
                        $("#user-album-edit-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Guardando...</span>');
                    },
                    success:  function (response) 
                    {

                        $('#edit-album').html(response);
                        $("#user-album-edit-msg").html('<span>Datos guardados!</span>');
                        setInterval(function(){
                            $("#user-album-edit-msg").fadeOut();  
                        },3000);

                    }
                    
            });
            
    },

    loadAlbumList : function()
    {
        $.ajax({
            url:   '/album/load_album_list',
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
                /*
                $("#user-album-edit-msg").html('<span>Datos guardados!</span>');
                setInterval(function(){
                    $("#user-album-edit-msg").fadeOut();  
                },3000);
                */

            }
            
        });
    },

    loadCreateAlbum : function()
    {
        $.ajax({
            url:   '/album/load_create_album',
            data:  '',
            type:  'post',
            beforeSend: function () 
            {
                //$("#user-album-edit-msg").fadeIn();
                //$("#user-album-edit-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Cargando...</span>');
            },
            success:  function (response) 
            {

                $('#create-album').html(response);
                
                $('#new-album-form').validate({
                        submitHandler : function(){
                                var i = inked.Album;
                                i.createNewAlbum();
                        }
                });

                $('#upload').bind('inkedUploadFinished', function() {
                    //console.log('all files uploaded!');
                    $('#finish-album').removeClass('disabled');
                });
                inked.Upload.init();
                /*
                $("#user-album-edit-msg").html('<span>Datos guardados!</span>');
                setInterval(function(){
                    $("#user-album-edit-msg").fadeOut();  
                },3000);
                */

            }
            
        });   
    }

};

{
	$(document).ready(function() {
		inked.Album.init();
	});
}
