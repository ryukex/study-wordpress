<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, there will also show few fixed sidebar contents.
 * @package Thirteenmag
 * @since Thirteenmag 1.0
 */
?><div class="sidebar_section fix">
				<!-- Starting Recent posts, popular post and comments tab section-->
				<div class="recent_post_section fix">
					<div class="recent_title">
						<ul class="nav nav-tabs" role="tablist" id="myTab">
							<li class="active"><a href="#recent" role="tab" data-toggle="tab">Recent</a></li>
							<li><a href="#popular" role="tab" data-toggle="tab">Popular</a></li>
							<li><a href="#comments" role="tab" data-toggle="tab">Comments</a></li>
						</ul>
					</div>
					
					<div class="tab-content single_recent_content">
						<?php query_posts('showposts=4'); ?>
						<div class="tab-pane active" id="recent">
							<div class="single_tab_recent_posts">
								<?php while (have_posts()) : the_post(); ?>
								<div class="single_recent_post">
									<?php the_post_thumbnail('sidebar_image'); ?>
									<h3><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h3>
									<div class="news_date">
										<h5 class="floatleft"><i class="fa fa-calendar"></i><?php the_time(get_option('date_format')); ?></h5>
										<h5 class="floatleft tab_comments"><i class="fa fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></h5>
									</div>
								</div>
								<?php endwhile; ?>
							</div>
						</div>
						
						
						<div class="tab-pane" id="popular">
						<?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&showposts=4'); ?>
							<div class="single_tab_popular_posts">
								
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="single_popular_post">
									<?php the_post_thumbnail('sidebar_image'); ?>
									<h3><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h3>
									<div class="news_date">
										<h5 class="floatleft"><i class="fa fa-calendar"></i><?php the_time(get_option('date_format')); ?></h5>
										<h5 class="floatleft tab_comments"><i class="fa fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></h5>
									</div>
								</div>
								<?php endwhile; endif;
								wp_reset_query(); ?>
							</div>
						</div>
						
						
						<div class="tab-pane" id="comments">
							<div class="single_tab_comments_posts">
								<ul>
									<?php thirteenmag_bg_recent_comments(); ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="login_section fix">
				<?php if (!is_user_logged_in()) { // if user not logged in then there will show login ?> 
					<div class="login_title fix">
						<h3>Login</h3>
					</div>
					<div class="login">
						<form method="post" action="<?php echo site_url();?>/wp-login.php" id="loginform" name="loginform">
								<input type="text" size="20" value="" class="input" id="user_login" name="log">
								<input type="password" size="20" value="" class="input" id="user_pass" name="pwd">
								<p class="login-remember"><label><input type="checkbox" value="forever" id="rememberme" name="rememberme"> Remember Me</label></p>
								<p class="login-submit">
								<input type="submit" value="Log In" class="button-primary" id="wp-submit" name="wp-submit">
								<input type="hidden" value="<?php echo site_url(); ?>" name="redirect_to">
							</p>
						</form>
					</div>
				<?php }
				else { // sectionif user login, then it will show users avatar and description with posts  ?>
					<div class="author_area">
						<ul>
							<?php $avatar = get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>
							<li class="author_avatar"><?php echo $avatar; ?></li>
							<li class="author_name"><a href="<?php echo get_the_author_link(); ?>"><?php the_author_meta('user_firstname'); ?> <?php the_author_meta('user_lastname'); ?></a></li>
							<?php $meta_des = the_author_meta('description'); ?>
							<?php if($meta_des) { ?>
							<li class="author_des"><i class="fa fa-pencil-square-o"></i><?php echo $meta_des(); ?></li> <?php } ?>
							<li class="author_bio">All posts by&nbsp;<?php the_author_posts_link(); ?></li>
						</ul>
					</div>
				<?php } ?>
				</div>
				
				<!--Wordpress default widget section-->
				<?php dynamic_sidebar('right_sidebar'); ?>
			
		</div>