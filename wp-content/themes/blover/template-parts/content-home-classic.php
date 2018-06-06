<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blover
 */

?>
<div class="col-xs-12 masonry">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'blover-classic' ); ?>>
	<header class="entry-header">
		<div class="blog-category-list">
		<?php the_category( __( '<span> &#124; </span>', 'blover' ) ); ?>
		</div>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
	<?php if ( get_theme_mod( 'home_page_show_featured_images', 1 ) && has_post_thumbnail() ) : ?>
		<div class="featured-image">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php the_post_thumbnail( 'large' ); ?>
			</a>
			<?php echo blover_post_format_icon( get_the_ID() ); // WPCS: XSS OK. ?>
		</div>
	<?php else : ?>
		<?php echo blover_post_format_icon( get_the_ID() ); // WPCS: XSS OK. ?>
	<?php endif; ?>

	<!-- .entry-header -->
	<?php if ( get_theme_mod( 'home_page_display_content', 1 ) ) : ?>
		<div class="entry-content">
			<?php blover_content(); ?>
		</div>
	<?php endif; ?>
	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php blover_posted_on() . blover_entry_footer(); ?>
		</div>
		<!-- .entry-meta -->
	<?php endif; ?>
	</article>
	<!-- #post-## -->
</div>
