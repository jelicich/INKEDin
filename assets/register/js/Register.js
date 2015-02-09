/**
 * header module
 */

inked.Register = {
	init : function() 
	{
		$('#name').focus();
	},
};

{
	$(document).ready(function() {
		inked.Register.init();
	});
}
