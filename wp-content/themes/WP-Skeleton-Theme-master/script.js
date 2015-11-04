var $j = jQuery.noConflict();

$j(document).ready(function() {

	// Hover over the post titles, and have the 
	$j('.postTitle').on('mouseenter', function() {
		$j(this).parent().next().fadeIn(1000);
	});
	$j('.postTitle').on('mouseout', function() {
		$j('.preview').fadeOut(1000);
	});

});

