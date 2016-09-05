<?php get_header(); ?>

	<div id="content">

		<section id="main-content">
			<?php
			_e('<h2>404 NOT FOUND</h2>', 'ryukex');
			_e('<p>The article you were looking for was not found, but maybe try looking again!</p>', 'ryukex');

			get_search_form();

			_e('<h3>Content categories</h3>', 'ryukex');
			echo '<div class="404-catlist">';
			wp_list_categories( array( 'title_li' => '' ) );
			echo '</div>';

			_e('<h3>Tag Cloud</h3>', 'ryukex');
			wp_tag_cloud();
			?>
		</section>
		<section id="sidebar">
			<?php get_sidebar(); ?>
		</section>

	</div>

<?php get_footer(); ?>