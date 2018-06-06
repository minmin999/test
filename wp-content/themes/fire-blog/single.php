<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fire-blog
 */

get_header();

$single_style = get_theme_mod( 'single_style', 'half' );
$social_icons = get_theme_mod( 'social_icon', 'bcontent' );

while ( have_posts() ) : the_post();

	global $post;
	$post_id = $post->ID;
    $image = get_the_post_thumbnail_url();
    $post_cat = wp_get_post_terms( $post->ID, 'category' );
    $comments_count = wp_count_comments($post->ID);
    $total_comments = $comments_count->total_comments;
    ?>

	<section id="post-<?php the_ID(); ?>" <?php post_class('site-section home-next single_post'); ?>>
        <div class="container">
            <div class="row">
                <div class="<?php echo $single_style == 'half' ? 'content col-lg-8' : 'content col-lg-10 offset-lg-1'; ?>">
                    <div class="single-page clearfix">

                        <?php 
                        if( has_post_thumbnail() ){ ?>
                            <div class="blog-media">
                                <?php the_post_thumbnail( 'fire_blog_homepage_sticky_posts' ); ?>
                            </div>
                            <?php 
                        } ?>
                        <!-- end blog-media -->

                        <div class="blog-desc text-center <?php echo ( has_post_thumbnail() ? 'single_image_available' : '' ); ?>">
                            <span class="cat-title">
                                <a href="<?php echo esc_url(get_term_link( $post_cat[0]->term_id ));?>"><?php echo esc_html( $post_cat[0]->name );?>        
                                </a>
                            </span>
                            <div class="blog-meta">
                                <span><a href="<?php echo esc_url( home_url() ); ?>/<?php echo date( 'Y/m' , strtotime( get_the_date() ) ); ?>"><i class="fa fa-calendar"></i> <?php echo esc_html( get_the_date() );?></a> &nbsp;&nbsp;<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) )); ?>"><i class="fa fa-user"></i> <?php the_author_meta( 'user_login' , $post->post_author );?></a>&nbsp;&nbsp;
                                    <a href="<?php the_permalink(); ?>/#respond"><i class="fa fa-comment"></i> <?php echo esc_html($total_comments == 0 ? esc_html__('0 Comment','fire-blog') : sprintf( _n( '%s Comment', '%s Comments', $total_comments, 'fire-blog' ), $total_comments )); ?></a>
                                </span>
                            </div>
                            <!-- end meta -->

                            <h3><?php the_title(); ?></h3>
                            <?php

                            $blog_title = get_the_title( $post_id );

                            if ( $social_icons == 'btitle' ): 
                                fire_blog_get_three_social_links( $post_id , $image );
                            endif;
                            ?>
                        </div><!-- end desc -->

                        <?php the_content(); ?>

                        <div class="single-blog-bottom clearfix">
                            <?php
                            $tags = get_the_tags();
                            if( !empty($tags) ): ?>
                                <div class="tag-widget float-left">
                                    <?php
                                    foreach ($tags as $key => $value) {
                                        echo '<a href="'. esc_url( get_tag_link( $value->term_id ) ) .'">'. esc_html($value->name) .'</a>' ;
                                    }
                                    ?>
                                </div><!-- end tag-widget -->
                            <?php endif; 
                            if( $social_icons == 'bcontent' ):
                                fire_blog_get_three_social_links( $post_id , $image );
                            endif;?>
                        </div>

                        <?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
                    </div><!-- end single-page -->
                </div><!-- end content -->
                <?php if( $single_style == 'half' ): ?>
                    <div class="sidebar col-lg-4">

                        <?php 
                        if( is_active_sidebar( 'single_page' ) ){
                            dynamic_sidebar( 'single_page' );
                        }?>

                    </div><!-- end sidebar -->
                <?php endif;?>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

	
    <?php
endwhile; // End of the loop.
get_footer(); 
