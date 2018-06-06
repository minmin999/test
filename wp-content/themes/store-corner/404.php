<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Store Corner
 */

get_header(); 
get_template_part('breadcrumps'); ?>
	
<!-- 404 Start -->
<div class="container-fluid bs-margin bs-404">
	<div class="container">
		<div class="row ep-error">
			<div class="col-md-8">
				<h1 class="error-title"><?php _e('404','store-corner'); ?> <span> <?php _e('Error','store-corner'); ?> </span></h1>
				<h3><?php _e('Content Not Found','store-corner'); ?></h3>
				<p><i class="fa fa-info-circle"></i> <?php _e('Oops! The page you requested was not found.','store-corner'); ?> </p>
				<a class="error-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home"></i> <?php _e('Go To Home Page','store-corner'); ?></a>
			</div>
			<?php get_sidebar();?>
		</div>
	</div>
</div>
<!-- 404 End -->
<?php
get_footer();
