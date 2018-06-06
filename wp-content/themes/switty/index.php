<?php
/**
 * The main index file.
 *
 * @package Switty
 */

?>
<?php get_header(); ?>
<div class="<?php
if ( 'rights' === get_theme_mod( 'blog_archive_layout', 'rights' ) ) {
	echo 'col-md-8';
} else {
	echo 'col-md-12';
}
?>">

	<?php
	if ( have_posts() ) {

		echo '<div class="grid">';

		while ( have_posts() ) : the_post();

			echo '<div class="gridpostloop">';

			get_template_part( 'template-parts/content', 'loop' );

			echo '</div>';

		endwhile;

		echo '</div>';

		switty_posts_pagination();

	} else {

		get_template_part( 'template-parts/content', 'none' );

	}
	?>
</div>
<?php if ( 'rights' === get_theme_mod( 'blog_archive_layout', 'rights' ) ) { get_sidebar(); } ?>
<?php get_footer(); ?>
