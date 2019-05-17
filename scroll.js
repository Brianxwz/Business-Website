// autoscroll function
$(document).ready(function() {
	$("a").on('click', function(event) {

		if (this.hash !== "") {
			//prevent default behaviour
			event.preventDefault();
		
			var hash = this.hash;
			
			// scroll to desired part of page
			$('html, body').animate({
			scrollTop: $(hash).offset().top
			}, 300);
		}
	});
});
