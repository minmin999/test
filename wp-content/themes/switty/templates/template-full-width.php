<?php
/**
 * The template file for Default Full Width.
 *
 * Template Name: Default Full Width
 *
 * @package Switty
 */

?>
<?php get_header(); ?>
<div class="col-md-12">
	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile;
	?>
</div>
<?php get_footer(); ?>
