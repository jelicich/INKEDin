/**
 * header module
 */

inked.Register = {
	init : function() 
	{
		$('#name').focus();
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
		inked.Register.init();
	});
}
