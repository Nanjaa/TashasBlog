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
					<h1 class="fullpageTitle"><?php echo get_the_title(); ?></h1>
					<?php the_content();
					?>

					<div id="nav-below">
						<div class="nav-previous previous-post inline">
							<?php 
								$prev_link = get_previous_post();
								if(!empty( $prev_link )):
									$prevy = $prev_link->post_title;
								if(strlen($prevy) > 45) {
									$prev_short = substr($prevy,0,45).'...';
								}
								else {
									$prev_short = $prevy;
								}
								endif;
							?>
							<?php 
								previous_post_link('%link', $prev_short );
								echo '<p class="pageUnavailable">Previous Post</p>'; 
							?>
						</div>
						<div class="nav-next next-post inline">
							<?php 
								$next_link = get_next_post();
								if(!empty( $next_link )):
									$nexty = $next_link->post_title;
								if(strlen($nexty) > 45) {
									$next_short = substr($nexty,0,45).'...';
								}
								else {
									$next_short = $nexty;
								}
								endif;
							?>
							<?php 
								next_post_link('%link', $next_short );
								echo '<p class="pageUnavailable">Previous Post</p>'; 
							?>						</div>
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