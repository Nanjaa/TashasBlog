<?php 
	get_header();
	get_template_part('menu', 'index');
	echo "hello";
	while ( have_posts() ) : the_post();
		the_content();

	endwhile;
	get_footer();
?>