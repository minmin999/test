<?php
/**
 * The template for displaying home page.
 * @package Luxury Travel
 */

get_header(); ?>

<?php
    $left_right = get_theme_mod( 'luxury_travel_layout','One Column');
    if($left_right == 'Right Sidebar'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
        		<div class="container">        
                    <div class="col-md-8 col-sm-8">                
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'luxury-travel' ),
                                    'next_text'          => __( 'Next page', 'luxury-travel' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'luxury-travel' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>      
                	<div class="col-md-4 col-sm-4"><?php get_sidebar();?></div>
          		    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    <?php }else if($left_right == 'Left Sidebar'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="col-md-4 col-sm-4"><?php get_sidebar();?></div>
                    <div class="col-md-8 col-sm-8" >                
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'luxury-travel' ),
                                    'next_text'          => __( 'Next page', 'luxury-travel' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'luxury-travel' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
    <?php }else if($left_right == 'One Column'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="col-md-12 col-sm-12">                
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'luxury-travel' ),
                                    'next_text'          => __( 'Next page', 'luxury-travel' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'luxury-travel' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
    <?php }else if($left_right == 'Three Columns'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-md-6 col-sm-6">                
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'luxury-travel' ),
                                    'next_text'          => __( 'Next page', 'luxury-travel' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'luxury-travel' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                    <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2');?></div>               
                </div>
            </div>
        </section>
    <?php }else if($left_right == 'Four Columns'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-md-3 col-sm-3">                
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'luxury-travel' ),
                                    'next_text'          => __( 'Next page', 'luxury-travel' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'luxury-travel' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                    <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2');?></div>
                    <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-3');?></div>
                </div>
            </div>
        </section>
    <?php }else if($left_right == 'Grid Layout'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="col-md-12 col-sm-12">                
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'luxury-travel' ),
                                    'next_text'          => __( 'Next page', 'luxury-travel' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'luxury-travel' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
    <?php } ?>

<?php get_footer(); ?>