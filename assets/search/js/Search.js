inked.Search = {
    
    'offset_photos' : 1,
    'offset_users' : 1,

    init : function() 
    {
        
    },

    loadMorePhotos : function()
    {
        this.offset_photos += 15;
        var query = $('#load-more-photos').attr('data-query');
        $.ajax({
                data: {},
                url:   '/search/'+ query +'/photos/'+this.offset_photos,
                type:  'post',
                beforeSend : function()
                {
                    $('#load-more-photos').addClass('disabled');
                    $('#load-more-photos').html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/>');
                },
                success : function (response) 
                {
                    response = jQuery.parseJSON(response);
                    $('#left-col-photos').append(response.even);
                    $('#right-col-photos').append(response.odd);
                    $('#load-more-photos').html('Ver mas');
                    inked.Modal.init();

                    if(response.even != "" && response.odd != "")
                    {
                        $('#load-more-photos').removeClass('disabled');
                    }
                    else
                    {
                       $('#load-more-photos').html('Fin')
                    }
                }
            });
    },

    loadMoreUsers : function()
    {
        this.offset_users += 20;
        var query = $('#load-more-users').attr('data-query');

        $.ajax({
            data: {},
            url:   '/search/'+ query +'/users/'+this.offset_users,
            type:  'post',
            beforeSend : function()
            {
                $('#load-more-users').addClass('disabled');
                $('#load-more-users').html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/>');
            },
            success : function (response) 
            {
                console.log(response);
                var $last_article = $('#users-result-container').find('article').last();
                $last_article.after(response);

                $('#load-more-users').html('Ver mas');

                if(response != "")
                {
                    $('#load-more-users').removeClass('disabled');
                }
                else
                {
                   $('#load-more-users').html('Fin')
                }
            }
        });
    }
};


{
    $(document).ready(function() {
        inked.Search.init();
    });
}