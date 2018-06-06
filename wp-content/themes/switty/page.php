<?php
/**
 * This file will load when a single page will be visited.
 *
 * @package Switty
 */

?>
<?php get_header(); ?>
<div class="col-md-8">
	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile;
	?>
</div>
<?php get_sidebar( 'page' ); ?>
<?php get_footer(); ?>
