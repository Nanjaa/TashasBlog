var $j = jQuery.noConflict();

$j(document).ready(function() {

	$j('#test').on('click', function() {
		console.log('it worked');
	});
	
	console.log('hello 3');	
	
	$j('.recipeTitle').hover(function() {
		console.log('yo yo yo');
	});	
});

