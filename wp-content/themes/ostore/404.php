<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package oStore
 */

get_header(); ?>
<!--Container -->
<div class="error-page">
    <div class="container">
		<?php 
			//Ostore Sidebar Layout 
			if ( $ostore_get_layout == 'left-sidebar' OR $ostore_get_layout == 'both-sidebar' ) : 
				get_sidebar('left'); 
			endif;
		?>
		<div class="ostore_error_pagenotfound <?php echo esc_attr( ostore_main_class() ); ?>"> 
			<strong><?php echo esc_html__('4','ostore'); ?><span id="ostore-animate-arrow"><?php echo esc_html__('0','ostore'); ?></span><?php echo esc_html__('4','ostore'); ?> </strong> <br />
			<h1 class="page-title"><?php  echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'ostore' ); ?></h1>
			<p><?php  echo esc_html__('Try using the button below to go to main page of the site', 'ostore'); ?></p>
			<br />
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button-back"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; <?php echo esc_html__('Go to Back', 'ostore'); ?></a>
		</div>
    <!-- end error page notfound --> 
		<?php 
			//Ostore Sidebar Layout 
			if ( $ostore_get_layout == 'right-sidebar' OR $ostore_get_layout == 'both-sidebar' ) : 
				get_sidebar(); 
			endif;
		?>
	</div>
</div>

<?php
get_footer();