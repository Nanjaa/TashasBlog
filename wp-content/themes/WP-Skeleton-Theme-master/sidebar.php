<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
	<div class="one-third column omega" id="side">
		<div class="sidebar"> <!--  the Sidebar -->
			<!-- Social Media -->
			<div class="social">
				<p id="test">Keep in Touch</p>
				<i class="socialIcon icon-facebook"></i>
				<i class="socialIcon icon-twitter"></i>
				<i class="socialIcon icon-instagram"></i>
				<i class="socialIcon icon-mail-circled"></i>
			</div>
			<!-- Search Bar -->
			<div class="clearfix">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
					<div>
						<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search Tasha's Blog" />
						<input type="submit" id="searchsubmit" value="Search" class="btn" />
					</div>
				</form>
			</div>
			<!-- all the rest -->
			<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?> <?php dynamic_sidebar( 'right-sidebar' ); ?>
			<?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin</p>
			<?php endif; ?>
		</div>
	</div>