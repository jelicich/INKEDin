/**
 * header module
 */

inked.Common.Header = {
	init : function() 
	{
		$(document).on("scroll",function(){
		    if($(document).scrollTop()>50){
		        $("header").removeClass("full-header").addClass("small-header");
		    } else{
		        $("header").removeClass("small-header").addClass("full-header");
		    }
		});
	},

	onClickLogin : function()
	{
		event.preventDefault ? event.preventDefault() : event.returnValue = false;
		$('#login-toggle').toggle();
		$('#username').focus();	
	},

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
		window.location = '/search/'+query;
	}
};

{
	$(document).ready(function() {
		inked.Common.Header.init();
	});
}
