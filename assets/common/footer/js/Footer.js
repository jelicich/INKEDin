inked.Common.Footer = {
	init : function()
	{
		$('.anchor').on('click', function(event){

			$('html, body').animate({
					 scrollTop: $( $(this).attr('href') ).offset().top
		    }, 500);
		    return false;

		});
	}
};

{
	$(document).ready(function() {
		inked.Common.Footer.init();
	});
}
