/**
 * header module
 */

inked.Profile = {
	init : function() 
	{
        inked.Profile.dynamicLeftBar();
        $('#comment-form').validate({
                submitHandler : function(){
                        var i = inked.Profile;
                        i.saveComment();
                }
        });
	},

	
    dynamicLeftBar : function()
    {
        $(document).on("scroll",function(){
            
            if($(document).scrollTop()>140)
            {
                $("#profile-fix-wrapper").removeClass("profile-free").addClass("profile-fixed");
                if($(document).scrollTop()>410)
                {
                    $("#profile-fix-wrapper").removeClass("profile-fixed").addClass("profile-absolute");
                }
                if($(document).scrollTop()<410 && $("#profile-fix-wrapper").hasClass("profile-absolute"))
                {
                    $("#profile-fix-wrapper").removeClass("profile-absolute").addClass("profile-fixed");
                }
            }       
            else
            {
                $("#profile-fix-wrapper").removeClass("profile-fixed").addClass("profile-free");
                
            }
        });
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
    }



};

{
	$(document).ready(function() {
		inked.Profile.init();
	});
}





