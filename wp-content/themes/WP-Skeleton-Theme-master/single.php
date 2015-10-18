<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
	get_header();
	get_template_part('menu', 'index');
	while(have_posts()) : the_post();
?>

		<h1><?php echo get_the_title(); ?></h1>
		<?php the_content();
		the_post_thumbnail('thumbnail');
?>
<div>
	<h2>Recipe Name1</h2>

</div>
<?php
	endwhile;
	get_footer();
?>