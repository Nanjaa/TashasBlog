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
			<!-- all the rest -->
			<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?> <?php dynamic_sidebar( 'right-sidebar' ); ?>
			<?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin</p>
			<?php endif; ?>
		</div>
	</div>
