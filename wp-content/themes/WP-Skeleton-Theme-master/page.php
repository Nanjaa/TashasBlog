<?php 
	get_header();
	get_template_part('menu', 'index');
	while ( have_posts() ) : the_post();
		the_content();
		
	endwhile;
	get_footer();
?>
