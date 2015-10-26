var $j = jQuery.noConflict();

$j(document).ready(function() {

	// Hover over the post titles, and have the 
	$j('.postTitle').on('mouseenter', function() {
		console.log('hello there');
	});

});

