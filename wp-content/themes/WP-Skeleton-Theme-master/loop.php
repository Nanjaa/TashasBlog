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
					<p><?php echo get_the_date(); ?></p>
					<a href="<?php the_permalink(); ?>">
						<div class="title">
							<h3 class="postTitle<?php if(!in_category( 'myadventures' )) { echo ' recipeTitle'; }; ?>"><?php the_title(); ?></h3>
							<div class="preview">
								<p><?php $previewText = get_field('preview_text'); echo $previewText; ?></p>
							</div>
							<?php if(in_category( 'myadventures')) { the_content(); } else { the_post_thumbnail(); }; ?>
						</div>
					</a>
					<div class="test">
						<?php echo '<a class="readMore" href="'; the_permalink(); echo '" title="'; the_title_attribute(); echo '">Read More...</a>'; ?>
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
		
