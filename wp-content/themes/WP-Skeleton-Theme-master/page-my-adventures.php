<?php
	get_header();
	get_template_part('menu', 'index');
?>
	<h2>My Adventures</h2>
	<div class="content">
		<div class="two-thirds column alpha">
			<div class="main">
				<?php
					query_posts('category_name=adventures&showposts=5');
					while(have_posts()) : the_post();
						echo '<a href="'; the_permalink(); echo '"title="'; the_title_attribute(); echo '">'; the_title('<h3 class="postTitle">', '</h3>'); echo '</a>';
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