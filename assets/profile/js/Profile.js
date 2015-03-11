/**
 * header module
 */

inked.Profile = {
	init : function() 
	{
        inked.Profile.dynamicLeftBar();
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
                data: { 'comment': comment_val },
                url:   '/profile/'+ $('#comments_modal input').val() +'/leave_comment',
                type:  'post',

                success:  function (response) 
                {
                    $('#comments_modal').modal('hide');
                    comment.val('');
                }
            });
    },
};

{
	$(document).ready(function() {
		inked.Profile.init();
	});
}
