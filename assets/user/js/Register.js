/**
 * header module
 */

inked.Register = {
	init : function() 
	{
		$('#name').focus();
		$('#register-form').validate();
	},

	onClickSecondLogin : function()
	{
		event.preventDefault ? event.preventDefault() : event.returnValue = false;
		$('#login-toggle').toggle();
		$('#username').focus();	
	},

	validateForm : function()
	{
		var name = $('#name').val();
		var last = $('#last_name').val();
		var user = $('#email').val();
		var pass = $('#password-reg').val();
		if(name == '' || last == '' || user == '' || pass == '')
		{
			event.preventDefault ? event.preventDefault() : event.returnValue = false;
		}
	}
};

{
	$(document).ready(function() {
		inked.Register.init();
	});
}
