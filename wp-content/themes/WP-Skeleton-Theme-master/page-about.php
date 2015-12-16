<?php 
	// header
	get_header();
	get_template_part('menu', 'index');
	?>

	<div class="content">
		<div class="two-thirds column alpha">
			<div class="main">
				<div class="aboutTitle">
				<?php 
					// profile pic
					$image = get_field('profile_pic');
					$size = 'tn300';
					$image_sized = $image['sizes'][$size];
					if( !empty($image) ): ?>
						<img class="circledImage" src="<?php echo $image_sized; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				<?php
				// this is the var for the headline 
				$headline = get_field('headline');
				// content
				while ( have_posts() ) : the_post();
					echo '<h1 class="aboutHeadline">'; echo $headline; echo '</h1></div>';
					the_content();
				endwhile; 
			?>
			</div>
		</div>
	</div>
<?php
	get_template_part('sidebar', 'index');
	get_footer();
?>