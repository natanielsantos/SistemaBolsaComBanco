$(document).ready(function(){

	// hide #back-top first
	$("#subir").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#subir').fadeIn();
			} else {
				$('#subir').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#subir a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});