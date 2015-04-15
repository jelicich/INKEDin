/**
 * header module
 */

inked.Common.Header = {
	init : function() 
	{
		// $(document).on("scroll",function(){
		//     if($(document).scrollTop()>50){
		//         $("header").removeClass("full-header").addClass("small-header");
		//     } else{
		//         $("header").removeClass("small-header").addClass("full-header");
		//     }
		// });

		inked.Common.Header.sidebarMenu();
	},

	sidebarMenu : function()
	{
		function check_width()
		{
		 		if(window.innerWidth < 769){

            	    $("#wrapper").addClass("toggled");

            	}else{
					
				    $("#wrapper").removeClass("toggled");
				}
		}

		$(".menu-toggle").on("click", function() {
   	    	
   	    		$("#wrapper").toggleClass("toggled");
   	    		$("#wrapper .toggled").css("overflow", "inherit");
	    });

        check_width();

 		$(window).on('resize', check_width);
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
