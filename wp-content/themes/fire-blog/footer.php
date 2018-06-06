<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fire-blog
 */

$insta = get_theme_mod( 'insta_shortcode' );

if( !empty( $insta ) ){
	echo wp_kses_post( do_shortcode($insta) );
} ?>

	<footer class="footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-5 col-md-12">
	                <div class="widget">
	                    <?php
						if( is_active_sidebar( 'footer_1' ) ){
							dynamic_sidebar( 'footer_1' );
						}
						?>
	                </div><!-- end widget -->
	            </div><!-- end col -->

	            <div class="col-lg-3 col-md-12">
	                <div class="widget clearfix">
	                	<div class="footer2_widget">
		                    <?php
							if( is_active_sidebar( 'footer_2' ) ){
								dynamic_sidebar( 'footer_2' );
							}
							?>
						</div>
	                </div><!-- end widget -->
	            </div><!-- end col -->

	            <div class="col-lg-4 col-md-12">
	                <div class="widget clearfix">
	                     <?php
						if( is_active_sidebar( 'footer_3' ) ){
							dynamic_sidebar( 'footer_3' );
						}
						?>
	                </div><!-- end widget -->
	            </div><!-- end col -->
	        </div><!-- end row -->
	    </div><!-- end container -->
	    <div class="copyright">
	        <div class="container">
	        	<p class="copyright_text"><?php
	        	fire_blog_footer_copyright();
	        	?></p>            
	        </div>
	    </div><!-- end copyright -->
	</footer><!-- end footer -->
</div><!-- end wrapper -->

<?php wp_footer(); ?>

</body>
</html>
