<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Pet Shop
 */

get_header(); ?>

<div class="title-box">
    <div class="container">
        <h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404','vw-pet-shop' ), esc_html__( 'Not Found', 'vw-pet-shop' ) ) ?></h1>
    </div>
</div>

<div id="content-vw">
	<div class="container">
        <div class="page-content">		
			<div class="col-md-12">				
				<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'vw-pet-shop' ); ?></p>
				<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-pet-shop' ); ?></p>
				<div class="read-moresec">
            		<a href="<?php echo esc_url(home_url()); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Return to the home page', 'vw-pet-shop' ); ?></a>
				</div>
			</div>
			<div class="clearfix"></div>
        </div>
	</div>
</div>
<?php get_footer(); ?>