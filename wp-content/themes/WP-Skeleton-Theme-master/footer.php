<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
  <div class="clear"></div>
	<div class="footer">
		<hr />
		<div class="sixteen columns">
			<div class="navigation center">
				<a class="menuLink" href="<?php echo home_url(); ?>">Home</a>|
				<a class="menuLink" href="http://test.nanja.space/about/">About Me</a>|
				<a class="menuLink" href="http://test.nanja.space/category/myadventures/">My Adventures</a>|
				<a class="menuLink" href="http://test.nanja.space/category/diy/">DIY</a>|
				<a class="menuLink" href="http://test.nanja.space/category/recipes/">Recipes</a>
			</div>
			<div class="social">
				<p id="test"><?php echo get_field('social_media_title', 5); ?></p>
				<a class="socialIcon" target="blank" href="https://www.facebook.com/tashaforcier?fref=ts"><i class="icon-facebook"></i></a>
				<a class="socialIcon" target="blank" href="https://twitter.com/Tashaforcier"><i class="icon-twitter"></i></a>
				<a class="socialIcon" target="blank" href="https://www.instagram.com/tashaforcier/"><i class="icon-instagram"></i></a>
				<a class="socialIcon" target="blank" href="#"><i class="icon-mail"></i></a>
			</div>
		</div>
	</div>
			
</div>                                            
<?php wp_footer(); ?>
   
</body>
</html>