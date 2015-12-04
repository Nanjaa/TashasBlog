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
});

