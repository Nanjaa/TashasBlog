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
					<div class="title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<h3 class="postTitle<?php if(!in_category( 'myadventures' )) { echo ' recipeTitle'; }; ?>"><?php the_title(); ?></h3>
						</a>
						<?php if(in_category( 'myadventures')) { the_content(); } else { the_post_thumbnail(); }; ?>
						<div class="preview">
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac ultrices massa. In nec mauris tempus, imperdiet urna ac, blandit urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi ornare, elit eu blandit consectetur, mi mi ullamcorper lectus, eu porttitor nisl nulla non augue. Sed at dolor leo. Quisque laoreet feugiat lorem. Vivamus sollicitudin nulla in mauris finibus, a bibendum felis commodo. Donec consectetur nisi elit, non sodales risus commodo sed. Integer imperdiet, sem at condimentum imperdiet, purus turpis semper nisl, sit amet facilisis velit erat et erat. Nullam eu libero quam. Nulla dictum tellus sed nibh efficitur sodales. Nunc pretium magna et nisl ultrices fermentum. Nam vitae facilisis lacus. Curabitur mi nisi, sollicitudin a finibus vitae, lacinia vel arcu. Phasellus eu tempor nulla. Sed vitae interdum magna.

Ut rhoncus ante nec condimentum cursus. Mauris eu diam sodales, dignissim lorem at, vulputate orci. Suspendisse ultrices tincidunt libero, a viverra nulla cursus at. Integer a nibh vitae justo blandit volutpat ac vel risus. Morbi eu rhoncus sapien, et finibus sapien. Duis velit purus, volutpat laoreet ex at, dictum ornare orci. In vitae quam id est commodo lobortis pulvinar non tellus. Maecenas eleifend erat sed ullamcorper pharetra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin lobortis tortor et libero ornare posuere. Maecenas consectetur mauris ipsum, vitae vulputate dolor pretium ac.</p>
						</div>
					</div>
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
		
