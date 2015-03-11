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
            $('#finish-album').removeClass('disabled');
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
    },


    loadAlbumEdit : function(event)
    {
          
        var params = {
            'album_id' : $(event.target).attr('data-album-id'),
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

                inked.Album.toggleLabel();
                $("a[href='#edit-album']").tab('show');
                inked.Album.loadCreateAlbum();
            }
        });
    },

    savePhotosEdit : function()
    {

            var photosData = [];

            $('#edit-album .photo-edit-container').each(function(i, containerEl) {
                var $containerEl = $(containerEl);
                var photoId = $containerEl.find('img').attr('data-photo-id');
                var description = $containerEl.find('.description').val();
                var tags = $containerEl.find('.tags').val();
                var checkbox = $containerEl.find('.delete');
                var remove = false;
                if(checkbox.is(':checked'))
                {
                    remove = true;
                }

                photosData.push({
                    photoId : photoId,
                    description : description,
                    tags : tags,
                    del : remove
                });

            });

            $.ajax({
                url:   '/album/save_album_edit',
                data:  $.param({
                    'photos' : photosData,
                    'album_id' : $('#edit-album-form').attr('data-album-id')
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
                    $('#finish-album').removeClass('disabled');
                });
                inked.Upload.init('#upload');

            }
            
        });   
    },

    deleteAlbum : function(event)
    {
        var params = {
            'album_id' : $(event.target).attr('data-album-id'),
        }

        $.ajax({
            data:  params,
            url:   '/album/delete_album',
            type:  'post',
            beforeSend: function () 
            {
                $("#user-album-edit-msg").fadeIn();
                $("#user-album-edit-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Cargando...</span>');
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

    addPhotos : function(event)
    {
        event.preventDefault();
        $.ajax({
            url:   '/album/add_photos',
            data:  $.param({
                'album_id' : $('#edit-album-form').attr('data-album-id')
            }),
            type:  'post',
            beforeSend: function () 
            {
                $("#user-album-edit-msg").fadeIn();
                $("#user-album-edit-msg").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/> <span>Cargando...</span>');
            },
            success:  function (response) 
            {

                //LOAD VIEW addphotosview
                $('#edit-album').html(response);

                $('#upload-add').bind('inkedUploadFinished', function() {
                    $('#finish-add').removeClass('disabled');
                });
                inked.Upload.init('#upload-add');

            }
            
        });
        
    },

    toggleLabel : function()
    {        
                      
        $('.label-toggle').each(function(i, el){
            $el = $(el);
            $el.click(function()
            {
                //console.log($(this));
                $(this).toggleClass('label-open');
                $(this).next().toggle('fast');
            });  
        })
    }

};

{
	$(document).ready(function() {
		inked.Album.init();
	});
}
