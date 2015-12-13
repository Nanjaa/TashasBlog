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
					?>

					<div id="nav-below">
						<div class="nav-previous previous-post inline">
							<?php previous_post_link(); echo '<p class="pageUnavailable">Previous Post</p>'; ?>
						</div>
						<div class="nav-next next-post inline">
							<?php next_post_link(); echo '<p class="pageUnavailable">Next Post</p>'; ?>
						</div>
					</div><!-- #nav-below -->
				<?php 
					echo do_shortcode('[shareaholic app="share_buttons"]');
					echo do_shortcode('[fbcomments]');
				endwhile;
				?>
			</div>  <!-- End Main -->
		</div>  <!-- End two-thirds column -->
	</div><!-- End Content -->
<?php
	get_template_part( 'sidebar', 'index' );
	get_footer();
?>