var $j = jQuery.noConflict();

$j(document).ready(function() {

	// Hover over the post titles, and have the 
	$j('.title').on('mouseenter', function() {
		$j(this).children().next().fadeIn(500);
		$j(this).children().first().children('.postTitle').addClass('postTitleTransition');
	});

	$j('.title').on('mouseleave', function() {
		$j(this).children().next().fadeOut(500);
		$j(this).children().first().children('.postTitle').removeClass('postTitleTransition');
	});

	$j('.title').click(function() {
		console.log('hello world');
	})
});

