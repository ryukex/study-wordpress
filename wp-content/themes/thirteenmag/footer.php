<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Thirteenmag
 
 * @since Thirteenmag 1.0
 */
?>
	
	<div class="footer_bottom fix">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
				<p><?php echo bloginfo('name'); ?> | Designed by <i class="fa fa-hand-o-right"></i> <a target="_blank" href="http://hellothirteen.com/thirteenmag/">hellothirteen</a></p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="footer_logo floatright">
					<a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
				</div>
			</div>
		</div>
	</div> <!-- end footer_bottom-->
	
	<div class="scrollUp fix">
		<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt="" /></a>
	</div>
		
		<?php wp_footer(); ?>

    </body>
</html>
