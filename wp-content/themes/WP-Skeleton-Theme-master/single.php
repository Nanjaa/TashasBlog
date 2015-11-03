<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
	get_header();
	get_template_part('menu', 'index');
	while(have_posts()) : the_post();
?>

		<h2><?php echo get_the_title(); ?></h2>
		<?php the_content();

	endwhile;
	get_footer();
?>