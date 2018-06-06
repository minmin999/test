<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Store Corner
 */

get_header(); 
get_template_part('breadcrumps');
$sidebar_position = get_theme_mod( 'store_corner_post_layout','right'); ?>
<!-- Blog Start -->
	<div class="container-fluid bs-margin bs-blogs bs-single">
		<div class="container">
			<div class="row bs-blog-page">
			<?php if($sidebar_position=='left'){
				get_sidebar();
			} ?>
				<div class="<?php if($sidebar_position=='full'){ echo esc_attr('col-md-12'); }else{ echo esc_attr('col-md-8'); } ?> right-side">
				<?php if ( have_posts() ) : 
				while ( have_posts() ) : the_post(); ?>
					<div class="row bs-blog">
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="blog-detail">
							<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="divider"></div>
								<ul class="bs-author-detail">
									<li class="bs-date">
										<?php _e('POSTED ON -','store-corner'); ?> <a href="<?php echo esc_url(get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('d'))); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a>
									</li>
									<li class="bs-author">
										 <?php _e('BY - ','store-corner'); ?>
										<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
									</li>
								</ul>
								<?php if(has_post_thumbnail()): ?>
									<div class="img-thumbnail">
										<?php $data= array('class' =>'img-responsive post_image'); 
										the_post_thumbnail('store_corner_thumb', $data); ?>
									</div>
								<?php endif; ?>
								
								<ul class="bs-category-detail">
								<?php if(get_the_category_list() != '') { ?>
									<li class="bs-category"><i class="fa fa-folder-open"></i> <?php the_category(','); ?> </li>
								<?php }if(get_the_tag_list()) { 
									echo get_the_tag_list('<li class="bs-tags"><i class="fa fa-tags"></i>',', ','</li>');
								} ?>
								</ul>
								<ul class="bs-author-detail">
									<li class="bs-comments">
										<?php $num_comments = get_comments_number(); // get_comments_number returns only a numeric value
										if ( comments_open() ) {
											if ( $num_comments == 0 ) {
												$comments = __('No Comments','store-corner');
											} elseif ( $num_comments > 1 ) {
												$comments = $num_comments . __(' Comments','store-corner');
											} else {
												$comments = __('1 Comment','store-corner');
											}
											$write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
										echo $write_comments;
										} ?>
									</li>
								</ul>
								<?php the_content();
								store_corner_link_pages(); ?>
								<?php store_corner_post_link(); ?>
							</div>
							<?php if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif; ?>
						</div>
					</div>
					<?php endwhile;
					endif; ?>
				</div>
				<?php if($sidebar_position=='right'){
				get_sidebar();
			} ?>
			</div>
		</div>
	</div>
	<!-- Blog End -->
<?php
get_footer();
?>