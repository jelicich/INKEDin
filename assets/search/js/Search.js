inked.Search = {
    
    'offset_photos' : 0,
    'offset_users' : 0,

    init : function() 
    {
        
    },

    loadMorePhotos : function()
    {
        this.offset_photos += 16;
        var query = $('#load-more-photos').attr('data-query');
        var cn = $('#photos-result-container').attr('data-column-number');
        var data = {
            "offset" : this.offset_photos,
            "cn" : cn,
        }
        $.ajax({
                data: data,
                url:   '/search/photos/'+query,
                type:  'post',
                beforeSend : function()
                {
                    $('#load-more-photos').addClass('disabled');
                    $('#load-more-photos').html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/>');
                },
                success : function (response) 
                {
                    response = jQuery.parseJSON(response);
                    if(response == '')
                    {
                        console.log('sarasa');
                        $('#load-more-photos').html('FIN')
                    }
                    else
                    {
                        if(response.col == 2)
                        {
                            $even = $(response.even);
                            $odd = $(response.odd);
                            $even.hide();
                            $odd.hide();
                            $('#left-col-photos').append($even);
                            $('#right-col-photos').append($odd);
                            $even.fadeIn(1000);
                            $odd.fadeIn(1000);
                            $('#load-more-photos').html('VER MAS');
                            //inked.Common.Modal.init();
                            inked.Common.Modal.setOnClickModal($even.find('.photo-anchor'));
                            inked.Common.Modal.setOnClickModal($odd.find('.photo-anchor'));


                            if(response.even != "" && response.odd != "")
                            {
                                $('#load-more-photos').removeClass('disabled');
                            }
                            else
                            {
                               $('#load-more-photos').html('FIN')
                            }
                        }
                        if(response.col == 4)
                        {
                            $first = $(response.first);
                            $second = $(response.second);
                            $third = $(response.third);
                            $fourth = $(response.fourth);
                            $first.hide();
                            $second.hide();
                            $third.hide();
                            $fourth.hide();
                            $('#first-col-photos').append($first);
                            $('#second-col-photos').append($second);
                            $('#third-col-photos').append($third);
                            $('#fourth-col-photos').append($fourth);
                            $first.fadeIn(1000);
                            $second.fadeIn(1000);
                            $third.fadeIn(1000);
                            $fourth.fadeIn(1000);
                            
                            $('#load-more-photos').html('VER MAS');
                            //inked.Common.Modal.init();
                            inked.Common.Modal.setOnClickModal($first.find('.photo-anchor'));
                            inked.Common.Modal.setOnClickModal($second.find('.photo-anchor'));
                            inked.Common.Modal.setOnClickModal($third.find('.photo-anchor'));
                            inked.Common.Modal.setOnClickModal($fourth.find('.photo-anchor'));

                            if(response.first != "" && response.second != "" && response.third != "" && response.fourth != "")
                            {
                                $('#load-more-photos').removeClass('disabled');
                            }
                            else
                            {
                               $('#load-more-photos').html('FIN')
                            }
                        }
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

                $('#load-more-users').html('VER MAS');

                if(response != "")
                {
                    $('#load-more-users').removeClass('disabled');
                }
                else
                {
                   $('#load-more-users').html('FIN')
                }
            }
        });
    },

    buildUrlPhotos : function(event)
    {
        console.log('saras');
        event.preventDefault();
        var query = $('input[name="search-photos"]').val()
        window.location = '/search/photos/'+query;
    },

    buildUrlArtists : function(event)
    {
        console.log('saras');
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
        inked.Search.init();
    });
}