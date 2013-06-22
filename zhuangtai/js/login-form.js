/* *********************************************************************************************

Login form tutorial (CSS3 + jQuery) [Tutorial]
"Login form tutorial (CSS3 + jQuery)" that was specially made for DesignModo by our friend Valeriu Timbuc. 

Links:
http://vtimbuc.net/
https://twitter.com/vtimbuc
http://designmodo.com/futurico
http://vladimirkudinov.com
http://rockablethemes.com

********************************************************************************************* */

$(document).ready(function() {

	// Check if JavaScript is enabled
	$('body').addClass('js');

	// Make the checkbox checked on load
	$('.login-form span').addClass('checked').children('input').attr('checked', true);

	// Click function
	$('.login-form span').on('click', function() {

		if ($(this).children('input').attr('checked')) {
			$(this).children('input').attr('checked', false);
			$(this).removeClass('checked');
		}

		else {
			$(this).children('input').attr('checked', true);
			$(this).addClass('checked');
		}
	
	});

});