<?php
/**
 * The template for displaying archive pages
 * @package Thirteenmag
 * @since Thirteenmag 1.0
 */
get_header(); ?>

	<div class="wrapper">

			<div class="mainsection floatleft fix">
				<h1 class="archive">
					<?php if (have_posts()) : ?>
						<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
							<?php /* If this is a category archive */ if (is_category()) { ?>
							<div class="archive_short_category">
								<?php _e('Category', 'selfword'); ?>
							</div>
							<div class="archive_title_category">
								<?php echo single_cat_title(); ?> <?php _e('', 'selfword'); ?>
							</div>
							<?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>
								<?php _e('Category', 'selfword'); ?> <?php single_tag_title(); ?>
							<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
								<?php _e('Archive for', 'selfword'); ?><?php the_time(get_option('F jS, Y')); ?>
							<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
								<?php _e('Archive for', 'selfword'); ?> <?php the_time(get_option('m')); ?>
							<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
								<?php _e('Archive for', 'selfword'); ?> <?php the_time(get_option('Y')); ?>
							<?php /* If this is a search */ } elseif (is_search()) { ?>
								<?php _e('Search Results', 'selfword'); ?>
							<?php /* If this is an author archive */ } elseif (is_author()) { ?>
								<?php _e('Author Archive', 'selfword'); ?>
							<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
								<?php _e('Blog Archives', 'selfword'); ?>    
					<?php } ?>
				</h1>


				<?php get_template_part('post-loop'); ?>
				
				<?php else : ?>
				<h3><?php _e('404 Error&#58; Not Found', 'selfword'); ?></h3>
				<?php endif; ?>
			</div> <!-- end mainsection-->
		
		<?php get_sidebar(); ?>
		
	</div> <!--End Wrapper-->

<?php get_footer(); ?>
