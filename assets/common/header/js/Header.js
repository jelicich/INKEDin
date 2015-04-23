/**
 * header module
 */

inked.Common.Header = {
	SUPPORTED_TABLET_WIDTH : 769,
	init : function() 
	{
		inked.Common.Header.initSidebar();
	},

	initSidebar : function()
	{
		//   if(window.innerWidth > 992){
				  //   	$(document).on("scroll",function(){
						//     if($(document).scrollTop()>50){
						      
						//         $("header").removeClass("full-header").addClass("small-header");

						//     } else{

						//         $("header").removeClass("small-header").addClass("full-header");
						//     }
						// });
				  //   }

		$(".menu-toggle").on("click", function() {
			$("#wrapper").toggleClass("menu-open");
			$("#wrapper .toggled").css("overflow", "inherit");
	    });

        //check_width();

		var t = this;
		var onResize = function() {
			if(window.innerWidth > t.SUPPORTED_TABLET_WIDTH) {
				$("#wrapper").removeClass("menu-open");
			}
		}

 		$(window).on('resize', onResize);
	},


	// onClickLogin : function(event)
	// {
	// 	event.preventDefault ? event.preventDefault() : event.returnValue = false;
	// 	$('#login-toggle').toggle();
	// 	$('#username').focus();	
	// },


	validateForm : function()
	{
		var user = $('#username').val();
		var pass = $('#password').val();
		if(user == '' || pass == '')
		{
			event.preventDefault ? event.preventDefault() : event.returnValue = false;
		}
	},

	buildUrl : function(event)
	{
		event.preventDefault();
		var query = $('#search-input').val();
		window.location = '/search/all/'+query;
	}
};

{
	$(document).ready(function() {
		inked.Common.Header.init();
	});
}
