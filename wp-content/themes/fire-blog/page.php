<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fire-blog
 */

get_header(); 
while(have_posts()): the_post();

	global $post;
	$default_page = get_post_meta( $post->ID, 'page_style', true );
    
    if( empty( $default_page ) ){
        $default_page = 'default';
    }

	$section_class = ( $default_page == 'full' ? 'home-next' : '' ); ?>

	<section id="post-<?php the_ID(); ?>" <?php post_class( "fireblog_page page-one site-section main-category $section_class" ); ?>>

	    <div class="container">

            <?php 
            if( $default_page == 'default' ){
                echo '<div class="row">';
            }
            ?>

            <div class="content <?php echo $default_page == 'default' ? 'col-lg-8' : ''; ?>">
                <div class="single-page clearfix">

                	<?php 
                	if( has_post_thumbnail() ){ ?>
	                    <div class="blog-media">
	                        <?php the_post_thumbnail( 'fire_blog_homepage_sticky_posts' ); ?>
	                    </div>
                   		<?php 
                   	} ?>

                    <div class="blog-desc text-center">
                        <h3><?php the_title(); ?></h3>
                    </div><!-- end desc -->

                    <?php the_content(); 

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fire-blog' ),
                        'after'  => '</div>',
                	) );?>

                </div><!-- end single-page -->
            </div><!-- end content -->
            <?php 
            if( $default_page == 'default' ): ?>
	            <div class="sidebar col-lg-4">
	            	<?php get_sidebar(); ?> 
	            </div><!-- end sidebar -->
        	<?php endif; 

            if( $default_page == 'default' ){
                echo '</div>';
            }
            ?>

	    </div><!-- end container -->
	</section><!-- end section -->
	<?php
endwhile;
get_footer();
