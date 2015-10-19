<?php 
	get_header();
	get_template_part('menu', 'index');
	echo('hello there world!');

	$image = get_field('profile_pic');
	if( !empty($image) ): ?>
		<img class="circledImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	get_footer();
<?php endif; ?>