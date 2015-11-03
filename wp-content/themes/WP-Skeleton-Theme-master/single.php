<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
	get_header();
	get_template_part('menu', 'index');
?>

	<div class="content">
		<div class="two-thirds column alpha">
			<div class="main"> 
				<?php							
					while(have_posts()) : the_post();
				?>
				<h2 class="fullpageTitle"><?php echo get_the_title(); ?></h2>
				<?php the_content();

				endwhile;
				?>
			</div>  <!-- End Main -->
		</div>  <!-- End two-thirds column -->
	</div><!-- End Content -->
<?php
	get_template_part( 'sidebar', 'index' );
	get_footer();
?>