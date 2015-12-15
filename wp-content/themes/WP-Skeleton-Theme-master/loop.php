<?php 
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>

	<div class="content">
		<div class="two-thirds column alpha">
			<div class="main"> 
				<?php $post_count = 0;
				if(is_category()) {
					echo '<h1 class="categoryTitle">'; echo single_cat_title('', true); echo '</h1>';
				}
				else if(is_archive()) {
					echo '<h1 class="categoryTitle">'; echo the_archive_title(); echo '</h1>';	
				}

				while ( have_posts() ) : the_post(); ?> <!--  the Loop -->

				<?php 
					$post_count = $post_count + 1;
				?>

				<article id="post-<?php the_ID(); ?>" class="<?php if($post_count !== sizeof($posts)) { echo 'articleBorder'; } ?>">
					<p><?php echo get_the_date(); ?></p> <!-- The Date -->
					<a href="<?php the_permalink(); ?>"> <!-- The square post preview -->
						<?php 
							$coverPhoto = get_field('cover_photo');
							$size = 'tn650';
							$image_sized = $coverPhoto['sizes'][$size];
						?>
						<div class="title" style="background-image:url(<?php echo $image_sized; ?>)">
							<h3 class="postTitle<?php if(!in_category( 'myadventures' )) { echo ' recipeTitle'; }; ?>"><?php the_title(); ?></h3> <!-- post title -->
							<div class="preview"> <!-- the preview text -->
								<p><?php $previewText = get_field('preview_text'); echo $previewText; ?></p>
							</div>
						</div>
					</a>
					<div class="readMore">
						<?php echo '<a class="readMore" href="'; the_permalink(); echo '" title="'; the_title_attribute(); echo '">Read More...</a>'; ?>
					</div>
				</article>
												
			
				<?php endwhile; ?><!--  End the Loop -->
			</div>  <!-- End Main -->
			<!-- Display navigation to next/previous pages when applicable -->
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>

				<nav id="nav-below">
					<hr>
					<div class="nav-previous inline"><?php if(get_previous_posts_link()) { previous_posts_link('Previous Page'); } else { echo '<p class="pageUnavailable">Previous Page</p>'; } ?></div>
					<p class="nav-current inline"><?php global $paged; if($paged !== 0) { echo $paged; } else { echo '1'; } ?></p>
					<div class="nav-next inline"><?php if(get_next_posts_link()) { next_posts_link('Next Page'); } else { echo '<p class="pageUnavailable">Next Page</p>'; } ?></div>
				</nav><!-- #nav-below -->
				
			<?php endif; ?>
		</div>  <!-- End two-thirds column -->
	</div><!-- End Content -->
		
