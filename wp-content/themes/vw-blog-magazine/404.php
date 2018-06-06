<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Blog Magazine
 */

get_header(); ?>

<div id="content-vw">
	<div class="container">
        <div class="page-content">
				<h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404', 'vw-blog-magazine' ), esc_html__( 'Not Found', 'vw-blog-magazine' ) ) ?></h1>
				<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'vw-blog-magazine' ); ?></p>
				<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-blog-magazine' ); ?></p>
				<div class="read-moresec">
        			<a href="<?php echo esc_url( home_url() ) ?>" class="button"><?php esc_html_e( 'Return to Home Page', 'vw-blog-magazine' ); ?></a>
				</div>
			<div class="clearfix"></div>
        </div>
	</div>
</div>
<?php get_footer(); ?>