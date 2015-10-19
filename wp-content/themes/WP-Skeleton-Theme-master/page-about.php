<?php 
	// header
	get_header();
	get_template_part('menu', 'index');
	// profile pic
	$image = get_field('profile_pic');
	if( !empty($image) ): ?>
		<img class="circledImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
<?php
	// content
	while ( have_posts() ) : the_post();
		the_content();
	endwhile; 
?>
<?php
	get_footer();
?>