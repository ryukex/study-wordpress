<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-thumbnail">
		<?php ryukex_thumbnail( 'thumbnail' ); ?>
	</div>
	<header class="entry-header">
		<?php ryukex_entry_header(); ?>
		<?php ryukex_entry_meta() ?>
	</header>
	<div class="entry-content">
		<?php ryukex_entry_content(); ?>
		<?php ( is_single() ? ryukex_entry_tag() : '' ); ?>
	</div>
</article>