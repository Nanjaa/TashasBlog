var $j = jQuery.noConflict();

$j(document).ready(function() {

	// Hover over the post titles, and have the 
	$j('.title').on('mouseenter', function() {
		$j(this).children('.preview').fadeIn(500);
		$j(this).children().first().addClass('postTitleTransition');
	});

	$j('.title').on('mouseleave', function() {
		$j(this).children('.preview').fadeOut(500);
		$j(this).children().first().removeClass('postTitleTransition');
	});

	$j(document).keyup(function(event) {
		if(event.keyCode == 37) {
			var previous = $j('.previous-post a').attr('href');
			if(previous !== undefined) {
				window.location = previous;
			}
		}
		else if(event.keyCode == 39) {
			var next = $j('.next-post a').attr('href');
			if(next !== undefined) {
				window.location = next;
			}
		}
	});
});

