<?php 
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>

	<div class="content">
		<div class="two-thirds column alpha">
			<div class="main"> 
												
				<?php while ( have_posts() ) : the_post(); ?> <!--  the Loop -->
												
				<article id="post-<?php the_ID(); ?>">
					<div class="title">
						
						<!-- Recipes (Just picture and title) -->
						<?php if(in_category( 'recipes' )) {
								echo '<a href="'; the_permalink(); echo '" title="'; the_title_attribute(); echo '">'; the_title('<h3 class="postTitle recipeTitle">', '</h3>'); echo '</a>';
								the_post_thumbnail();
						}
							else if(in_category( 'adventures')) {
								echo '<a href="'; the_permalink(); echo '" title="'; the_title_attribute(); echo '">'; the_title('<h3 class="postTitle">', '</h3>'); echo '</a>';
								the_content();
							}
						?>
					</div>
				</article>
												
			
				<?php endwhile; ?><!--  End the Loop -->

				<?php /* Display navigation to next/previous pages when applicable */ ?>
	
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>

					<nav id="nav-below">
						<hr>
						<div class="nav-previous"><?php next_posts_link(); ?></div>
						<div class="nav-next"><?php previous_posts_link(); ?></div>
					</nav><!-- #nav-below -->
					
				<?php endif; ?>
					
				<?php /* Only load comments on single post/pages*/ ?>
				<?php if(is_page() || is_single()) : comments_template( '', true ); endif; ?>
		
			</div>  <!-- End Main -->
		</div>  <!-- End two-thirds column -->
	</div><!-- End Content -->
		
