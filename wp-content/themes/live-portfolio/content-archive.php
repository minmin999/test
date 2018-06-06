<?php
/**
 * The default template for displaying content
 *
 * Used for index/archive/search.
 *
 * @package WordPress
 * @subpackage Live Portfolio
 * @since Live Portfolio 1.0.0
 */
 
global $meditation_layout_content;
$liveportfolio_img = '';

if ( ( has_post_thumbnail() && ! post_password_required() ) ) {
	$liveportfolio_img = wp_get_attachment_url( get_post_thumbnail_id() );
} elseif ( meditation_get_theme_mod( 'is_thumbnail_empty_icon' ) ) {
	$liveportfolio_img = get_template_directory_uri() . '/img/empty.png';
}

?>

<?php do_action ( "meditation_grid_start", $meditation_layout_content, $wp_query->current_post); ?>

<div class="content-container entry-thumbnail coverback" style="background-image: url(<?php echo esc_url( $liveportfolio_img ); ?>); ">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
		
			<a class="hover-link" href="<?php echo esc_url( get_permalink() ); ?>"></a>

			<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>

			<?php if ( '1' == meditation_get_theme_mod( 'is_show_cat' ) ) : ?>

			<div class="category-list">
				<?php echo get_the_category_list(''); ?>
			</div><!-- .category-list -->	
			
			<?php endif; ?>

		</header><!-- .entry-header -->
		
		<?php if( 'excerpt' == meditation_get_theme_mod('single_style') || ( 'content' == meditation_get_theme_mod('single_style') && is_search() )  ) : ?>
			
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
				
		<?php elseif( 'content' == meditation_get_theme_mod('single_style') ) : ?>
			
			<div class="entry-content">
				<?php the_content( __('<div class="meta-nav">Continue reading... &rarr;</div>', 'live-portfolio' )); ?>
			</div><!-- .entry-content -->
			
		<?php endif; ?>
		
		<footer class="entry-meta">
			<?php if ( 'post' == get_post_type() ) : ?>

				<span class="post-date">
					<?php meditation_posted_on(); ?>
				</span>
				
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'live-portfolio' ), '<span title="'.__( 'Edit', 'live-portfolio' ).'" class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
		
	</article><!-- #post -->
	
</div><!-- .content-container -->

<?php do_action ( "meditation_grid_end", $meditation_layout_content, $wp_query->current_post, $wp_query->post_count); ?>