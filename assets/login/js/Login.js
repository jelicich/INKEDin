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
	},

	validateForm : function()
	{
		var user = $('#email-view').val();
		var pass = $('#password-view').val();
		if(user == '' || pass == '')
		{
			event.preventDefault ? event.preventDefault() : event.returnValue = false;
		}
	}
};

{
	$(document).ready(function() {
		inked.Login.init();
	});
}
