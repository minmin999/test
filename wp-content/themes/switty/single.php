<?php
/**
 * The file will load when user will visit a single post.
 *
 * @package Switty
 */

?>
<?php get_header(); ?>
<div class="<?php
if ( 'rights' === get_theme_mod( 'blog_single_layout', 'rights' ) ) {
	echo 'col-md-8';
} else {
	echo 'col-md-12';
}
?>">
	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_format() );

	endwhile;

	the_post_navigation( array(
		'prev_text' => __( '&larr; %title', 'switty' ),
		'next_text' => __( '%title &rarr;', 'switty' ),
	) );
	?>
</div>
<?php if ( 'rights' === get_theme_mod( 'blog_single_layout', 'rights' ) ) { get_sidebar(); } ?>
<?php get_footer(); ?>
