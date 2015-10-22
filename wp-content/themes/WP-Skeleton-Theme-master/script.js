var $j = jQuery.noConflict();

$j('#test').on('click', function() {
	console.log('it worked');
});

$j(document).ready(function() {
	console.log('hello 2');	
})

$j('.recipeTitle').hover(function() {
	console.log('yo yo yo');
})