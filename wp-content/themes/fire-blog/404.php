<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fire-blog
 */

get_header(); ?>

<section class="site-section error">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12">
                <div class="single-page clearfix">
                    <div class="notfound">   
                        <div class="row">
                            <div class="col-md-8 offset-md-2 text-center">
                                <h2><?php esc_html_e( '404' , 'fire-blog' ); ?></h2>
                                <span class="error-txt"><?php esc_html_e( 'Error' , 'fire-blog' ); ?></span>
                                <h3><?php esc_html_e( 'Oh no! Page Not Found' , 'fire-blog' ); ?></h3>
               
                                <a href="<?php echo esc_url( home_url() ); ?>" class="btn btn-primary back_to_home"><i class="fa fa-angle-double-left"></i> <?php esc_html_e( 'Back to Home' , 'fire-blog' ); ?></a>
                            </div>
                        </div>
                    </div>
                </div><!-- end single-page -->
            </div><!-- end content -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<?php
get_footer();
