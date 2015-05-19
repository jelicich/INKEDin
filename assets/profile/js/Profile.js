/**
 * header module
 */

inked.Profile = {
	'offset_comments' : 0,

    init : function() 
	{    
        // $( window ).load(function() {
        //     $('html, body').animate({
        //         scrollTop: 51
        //     }, 500);
        // })

        var map_canvas = document.getElementById("map_canvas");
        if ( map_canvas ) { inked.Profile.dynamicMap(); };

        $('#comment-form').validate({
                submitHandler : function(){
                        var i = inked.Profile;
                        i.saveComment();
                }
        });

        inked.Profile.removeFavourite(); 
        inked.Profile.loadMoreFavs();
        inked.Profile.dynamicLeftBar();
        inked.Profile.moveName();
        
        $( window ).resize(function() 
        {
            if($(window).width() < 1200 )
            {
                $(document).unbind("scroll");
                 $("#profile-fix-wrapper").removeClass("profile-absolute").removeClass("profile-fixed").addClass("profile-free");
            }
            else
            {
                inked.Profile.dynamicLeftBar();
            }

            inked.Profile.moveName();

        });

        $('#photos-album-container').ready(function(){
            inked.Profile.initNavPhotos();
        });
    },


    dynamicMap : function(){

        var geocoder;
        var map;

        function initialize() {

                geocoder = new google.maps.Geocoder();
                // var latlng = new google.maps.LatLng(42.095287, -79.3185139);
                var options = {
                  zoom: 15,
                  // center: latlng,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                map = new google.maps.Map(map_canvas, options);

                codeAddress();
        }
              

        function codeAddress() {

            var address = $('#address').text();

            geocoder.geocode( { 'address': address}, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {

                        map.setCenter(results[0].geometry.location);

                        var marker = new google.maps.Marker({
                            map: map, 
                            position: results[0].geometry.location
                        });
                } 
            });
        }

        google.maps.event.addDomListener(window, "load", initialize);
    },

	
    dynamicLeftBar : function()
    {
        if($(window).width() > 1200)
        {
            $(document).on("scroll",function(){
                //console.log($(document).scrollTop());
                if($(document).scrollTop()>140)
                {
                    $("#profile-fix-wrapper").removeClass("profile-free").addClass("profile-fixed");
                    if($(document).scrollTop()>411)
                    {
                        $("#profile-fix-wrapper").removeClass("profile-fixed").addClass("profile-absolute");
                    }
                    if($(document).scrollTop()<411 && $("#profile-fix-wrapper").hasClass("profile-absolute"))
                    {
                        $("#profile-fix-wrapper").removeClass("profile-absolute").addClass("profile-fixed");
                    }
                }       
                else
                {
                    $("#profile-fix-wrapper").removeClass("profile-fixed").addClass("profile-free");
                    
                }
            });
        }
        // else if($(window).width() > 992)
        // {
        //     $(document).on("scroll",function(){
        //         console.log($(document).scrollTop());
        //         if($(document).scrollTop()>140)
        //         {
        //             $("#profile-fix-wrapper").removeClass("profile-free").addClass("profile-fixed");
        //             if($(document).scrollTop()>342)
        //             {
        //                 $("#profile-fix-wrapper").removeClass("profile-fixed").addClass("profile-absolute");
        //             }
        //             if($(document).scrollTop()<342 && $("#profile-fix-wrapper").hasClass("profile-absolute"))
        //             {
        //                 $("#profile-fix-wrapper").removeClass("profile-absolute").addClass("profile-fixed");
        //             }
        //         }       
        //         else
        //         {
        //             $("#profile-fix-wrapper").removeClass("profile-fixed").addClass("profile-free");
                    
        //         }
        //     });
        // }
    },



    saveComment : function()
    {
        var comment = $('#comments_modal textarea');
        var comment_val = comment.val();

        $.ajax({
                data: { comment: comment_val },
                url:   '/profile/'+ $('#comments_modal input').val() +'/leave_comment',
                type:  'post',
                beforeSend : function()
                {
                    $('#comments_modal').find('button.btn.btn-default').addClass('disabled');
                    $('#comments_modal').find('button.btn.btn-default').html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/>');
                },
                success : function (response) 
                {   
                    $('#comments_modal').modal('hide');
                    $('#profile-mid-col').after(response);
                    $('#profile-mid-col').remove();
                    $('#comment-form').validate({
                            submitHandler : function(){
                                    var i = inked.Profile;
                                    i.saveComment();
                            }
                    });
                }
            });
    },



    saveFollower : function()
    {   
        
        var follow_button = $('#add-fav');
        var profile_id = follow_button.attr('data-profile-id');
        var user_id = follow_button.attr('data-user-id');

        $.ajax({
                url:   '/profile/'+ profile_id +'/save_follower',
                type:  'post',
                success : function () 
                {   
                   follow_button.html('YA ES TU FAVORITO !');
                   follow_button.removeAttr('onclick id');
                   follow_button.removeClass('btn-default').addClass('btn-success');
                }
            });
    },


    removeFavourite : function()
    {   
       // if ($('.remove-favourite')) {
            var favourites = $('.remove-favourite');

            favourites.each(function()
            {

                var _self = $(this);

                _self.on('click', function(e){

                    e.preventDefault();
                    
                    var favourite = _self.data('favourite');


                    $.ajax({
                            url:   '/profile/'+ favourite +'/remove_favourite',
                            type:  'post',
                           
                            success: function(response) 
                            {   
                                // console.log(response);
                                $('#side-content-profile').replaceWith(response);
                                inked.Profile.removeFavourite();
                                inked.Profile.loadMoreFavs();

                            },

                    });

                });

            });
      //  };
    },

 

    loadMoreComments : function()
    {
        this.offset_comments += 21;
        var profile_id = $('#load-more-comments').attr('data-profile-id');
        var data = {
            "offset" : this.offset_comments,
        }

        $.ajax({
            data: data,
            url:   '/profile/' + profile_id + '/comments/',
            type:  'post',
            beforeSend : function()
            {
                $('#load-more-comments').addClass('disabled');
                $('#load-more-comments').html('<img src="/assets/common/app/img/loading.gif" class="loading-gif" width="16" height="16" alt="Cargando"/>');
            },
            success : function (response) 
            {
                var $last_comment = $('#profile-mid-col').find('article').last();
                $response = $(response);
                $response.hide();
                $last_comment.after($response);
                $response.fadeIn(1000);

                $('#load-more-comments').html('VER MAS');

                if(response != "")
                {
                    $('#load-more-comments').removeClass('disabled');
                }
                else
                {
                   $('#load-more-comments').html('FIN')
                }
            }
        });
    },

    loadMoreFavs : function()
    {
        var $favContainer = $('.fav-container');
        $favContainer.each(function()
        {
            var t = $(this);
            if(t.height() >= 245)
            {
                var btn = '<div class="more-favs"><a href="#">Ver mas</a></div>';
                t.append(btn);
                $(t).find('.more-favs a').click(function(e){
                    e.preventDefault();
                    t.css('max-height', 'none');
                    t.find('.more-favs').remove();
                });
            }

        });
    },

    moveName : function()
    {
        if($(window).width() < 992 )
        {
            var $nameprof = $($('#profile-mid-col').find('.name-profile')[0]);
            $nameprof.prependTo('#profile-left-col');
        }
        else
        {
            var $nameprof = $($('#profile-left-col').find('.name-profile')[0]);
            $nameprof.prependTo('#profile-mid-col');
        }
    },

    initNavPhotos : function()
    {
        var t = this;
        t.$container = $('#photos-album-container');
        t.photos = t.$container.find('img.photo-album');
        $.each(t.photos, function( i, value ) 
        {
            $(t.photos[i]).attr('data-order',i);
        });
    },

    navPhotos : function(e)
    {
        e.preventDefault();
        var t = this;
        var current = parseInt($('#photo-target').attr('data-order'));
        if( $(e.target).parent().attr('data-dir') =='left' )
        {
            var newPos = current -1;
            if(newPos == -1)
            {
                newPos = t.photos.length -1;
            }
        }
        else
        {
            var newPos = current +1;
            if(newPos > t.photos.length -1)
            {
                newPos = 0;
            }
            
        }
        var newSrc = $($(t.photos)[newPos]).attr('src');
        var lg_src = newSrc.replace('/sm/','/reg/');
        var newId = $($(t.photos)[newPos]).attr('data-photo-id');
        var desc = $($(t.photos)[newPos]).attr('alt');
        var tags = $($(t.photos)[newPos]).attr('data-tags');
        
        $('#photo-target').after('<div class="mask-pic"></div>');
        $('.mask-pic').css('height',$('#photo-target').height());
        $('.mask-pic').css('width',$('#photo-target').width());
        $('#photo-target').attr('src', lg_src);
        $('#photo-target').bind('load', function() {
            $('.modal-body .mask-pic').remove();
        });
        $('#photo-target').attr('data-order', newPos);
        $('#photo-target').attr('data-photo-id', newId);

        $('#myModal').find('.caption').html(desc);
        $('#photo-tags').html(tags);

        $('#myModal').find('.pic-details').remove();
        $($(t.photos)[newPos]).parent().parent().find('.pic-details').clone().appendTo('.modal-tools');
    }

};

{
	$(document).ready(function() {
		inked.Profile.init();
	});
}











