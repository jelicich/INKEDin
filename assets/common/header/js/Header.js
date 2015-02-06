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
		$('#login-toggle').toggle();
		$('#username').focus();
	}
};

{
	$(document).ready(function() {
		inked.Common.Header.init();
	});
}
