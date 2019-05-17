// parallax function
$(window).scroll(function() {
	
	var scroll = $(window).scrollTop();
	
	// parallax effect on background image
	$('.parallax').css('background-position', 'center '+(scroll*.6)+'px')
});
