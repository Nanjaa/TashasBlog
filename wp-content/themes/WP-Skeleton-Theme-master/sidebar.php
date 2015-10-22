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
				<p>Keep in Touch</p>
				<i class="icon-facebook-circled"></i>
			</div>
			<!-- all the rest -->
			<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?> <?php dynamic_sidebar( 'right-sidebar' ); ?>
			<p> Hello world!</p>
			<?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin</p>
			<?php endif; ?>
		</div>
	</div>
