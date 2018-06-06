<?php
/**
 * Display 404 page
 *
 * @package Food Restaurant
 */

get_header(); ?>

<div id="content-lt">
    <div class="container">
        <div class="page-content">
                <h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404', 'food-restaurant' ), esc_html__( 'Not Found', 'food-restaurant' ) ) ?></h1>
                <p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn', 'food-restaurant' ); ?></p>
                <p class="text-404"><?php esc_html_e( 'Dont worry it happens to the best of us.', 'food-restaurant' ); ?></p>
                <div class="read-moresec">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="button"><?php esc_html_e( 'Return to Home Page', 'food-restaurant' ); ?></a>
                </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>