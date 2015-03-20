inked.Common.Modal = {
    init : function() 
    {
        $('#myModal').on('hidden.bs.modal', function () {
            $("#save-to-favourites").html('Guardar <span class="glyphicon glyphicon-picture"></span>');
            $("#save-to-favourites").removeClass('disabled');
        })

        $('.photo-anchor').click(function()
        {
            //console.log($(this).children());
            var src = $(this).children().attr('src');
            var photo_id = $(this).children().attr('data-photo-id');

            if(src.indexOf('/thumb/') != (-1))
            {
                var lg_src = src.replace('/thumb/','/reg/');    
            }
            if(src.indexOf('/md/') != (-1))
            {
                var lg_src = src.replace('/md/','/reg/');       
            }
            if(src.indexOf('/sm/') != (-1))
            {
                var lg_src = src.replace('/sm/','/reg/');       
            }
            
            $('#photo-target').attr('src', lg_src);
            $('#photo-target').attr('data-photo-id', photo_id);        
            var desc = $(this).children().attr('alt');
            var tags = $(this).children().attr('data-tags');
            $('#photo-description').html(desc);
            $('#photo-tags').html(tags);        
        });
    },
    saveToFavourites : function(event)
    {        
        event.preventDefault();
        var photo_id = $('#photo-target').attr('data-photo-id');
        var data = {
            'photo_id' : photo_id,
        }
        $.ajax({
            data:  data,
            url:   '/user/save_to_favourites',
            type:  'post',
            beforeSend: function () 
            {
                $("#save-to-favourites").html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/>');
            },
            success:  function(response) 
            {
                //console.log(response);
                response = jQuery.parseJSON(response);
                if(response.status == 'error')
                {
                    $("#save-to-favourites").html(response.message);
                }
                else
                {
                    $("#save-to-favourites").html('Guardado <span class="glyphicon glyphicon-picture"></span>');
                }
                $("#save-to-favourites").addClass('disabled');
            }
        });
    }
};


{
    $(document).ready(function() {
        inked.Common.Modal.init();
    });
}