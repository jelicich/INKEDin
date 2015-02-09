/**
 * header module
 */

inked.Login = {
	init : function() 
	{
		$('#email').focus();
	},

	onClickSecondLogin : function()
	{
		event.preventDefault ? event.preventDefault() : event.returnValue = false;
		$('#login-toggle').toggle();
		$('#username').focus();	
	}
};

{
	$(document).ready(function() {
		inked.Login.init();
	});
}
