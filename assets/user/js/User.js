/**
 * header module
 */

inked.User = {
	init : function() 
	{
		$('#name').focus();
		$('#account-info-form').validate();
		$('#password-form').validate();
	}

};

{
	$(document).ready(function() {
		inked.User.init();
	});
}
