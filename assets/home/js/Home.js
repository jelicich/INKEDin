inked.Home = {
    
    'offset_photos' : 0,

    init : function() 
    {
        
    },

    loadMorePhotos : function()
    {
        this.offset_photos += 10;
        var data = {
            "offset" : this.offset_photos,
        };
        console.log(data);
        $.ajax({
                data: data,
                url:   '/index/index',
                type:  'post',
                beforeSend : function()
                {
                    $('#load-more-photos').addClass('disabled');
                    $('#load-more-photos').html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/>');
                },
                success : function (response) 
                {
                    console.log(response);
                    response = jQuery.parseJSON(response);
                    console.log(response);
                    $left = $(response.leftcol);
                    $right = $(response.rightcol);
                    $left.hide();
                    $right.hide();
                    $('#left-col-photos').append($left);
                    $('#right-col-photos').append($right);
                    $left.fadeIn(1000);
                    $right.fadeIn(1000);
                    $('#load-more-photos').html('VER MAS');
                    inked.Common.Modal.init();
                    if(response.leftcol != "" && response.rightcol != "")
                    {
                        $('#load-more-photos').removeClass('disabled');
                    }
                    else
                    {
                       $('#load-more-photos').html('FIN')
                    }
                }
            });
    },

    loadMoreUsers : function()
    {
        this.offset_users += 20;
        var query = $('#load-more-users').attr('data-query');
        var cw = $('#users-result-container').attr('data-column-width');
        var data = {
            "offset" : this.offset_users,
            "cw" : cw,
        }

        $.ajax({
            data: data,
            url:   '/search/artists/'+ query,
            type:  'post',
            beforeSend : function()
            {
                $('#load-more-users').addClass('disabled');
                $('#load-more-users').html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/>');
            },
            success : function (response) 
            {
                //console.log(response);
                var $last_article = $('#users-result-container').find('article').last();
                $response = $(response);
                $response.hide();
                $last_article.after($response);
                $response.fadeIn(1000);

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
    },

    buildUrlPhotos : function(event)
    {
        event.preventDefault();
        var query = $('input[name="search-photos"]').val()
        window.location = '/search/photos/'+query;
    },

    buildUrlArtists : function(event)
    {
        event.preventDefault();
        var query = $('input[name="search-artists"]').val()
        if(query == '')
        {
            query = ' ';
        }
        var province = $('#province').val();
        var city = $('#city').val();
        var url = '/search/artists/'+query;
        if(province != '')
        {
            url += '/' + province;
            if(city != '')
            {
                url += '/' + city;
            }
        }
        window.location = url;
    },

    getCities : function(event)
    {
        var params = { "province_id" : $(event.target).val() };
        //$label = $($('label[for="city"]')[0]);

        $.ajax({
            data:  params,
            url:   '/user/get_cities',
            type:  'post',
            beforeSend: function () 
            {
                //$label.html('Ciudad <img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/>');
            },
            success:  function (response) 
            {
                //$label.html('Ciudad');   
                $('#city').html(response);

            }
        });
    }
};


{
    $(document).ready(function() {
        inked.Home.init();
    });
}