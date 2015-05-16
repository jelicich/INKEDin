/**
 * header module
 */

inked.Login = {
	init : function() 
	{
		$('#email').focus();
	},

	onClickSecondLogin : function(event)
	{
		event.preventDefault();
		$('#login-toggle').toggle();
		$('#username').focus();	
	},

	validateForm : function(event)
	{
		var user = $('#email-view').val();
		var pass = $('#password-view').val();
		if(user == '' || pass == '')
		{
			event.preventDefault();
		}
	}
};

{
	$(document).ready(function() {
		inked.Login.init();
	});
}
