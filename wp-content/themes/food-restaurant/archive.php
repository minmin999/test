<?php
/**
 * Displaying Archive pages.
 *
 * @package Food Restaurant
 */

get_header(); ?>

<div class="container">
    <?php
        $layout = get_theme_mod( 'food_restaurant_theme_options','One Column');
        if($layout == 'Left Sidebar'){?>
        <div class="row">
            <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
            <div id="postmainbox" class="col-md-8 col-sm-8 postmain">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format()  ); 
                    
                    endwhile;

                    else :

                        get_template_part( 'no-results'); 

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'food-restaurant' ),
                            'next_text'          => __( 'Next page', 'food-restaurant' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'food-restaurant' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    <?php }else if($layout == 'Right Sidebar'){?>
        <div class="row">
            <div id="postmainbox" class="col-md-8 col-sm-8 postmain">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                      
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content' , get_post_format() ); 
                      
                    endwhile;

                    else :

                        get_template_part( 'no-results' );

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'food-restaurant' ),
                            'next_text'          => __( 'Next page', 'food-restaurant' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'food-restaurant' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
        </div>
    <?php }else if($layout == 'One Column'){?>
        <div id="postmainbox" class="postmain">
            <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>
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
                        'prev_text'          => __( 'Previous page', 'food-restaurant' ),
                        'next_text'          => __( 'Next page', 'food-restaurant' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'food-restaurant' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php }else if($layout == 'Three Columns'){?>
        <div class="row">
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
            <div id="postmainbox" class="col-md-6 col-sm-6 postmain">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                      
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format()); 
                      
                    endwhile;

                    else :

                        get_template_part( 'no-results' );

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'food-restaurant' ),
                            'next_text'          => __( 'Next page', 'food-restaurant' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'food-restaurant' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        </div>
    <?php }else if($layout == 'Four Columns'){?>
        <div class="row">
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
            <div id="postmainbox" class="col-md-3 col-sm-3 postmain">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                      
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format()); 
                      
                    endwhile;

                    else :

                        get_template_part( 'no-results' );

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'food-restaurant' ),
                            'next_text'          => __( 'Next page', 'food-restaurant' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'food-restaurant' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
        </div>
    <?php }else if($layout == 'Grid Layout'){?>
        <div class="row">
            <div id="postmainbox" class="col-md-8 col-sm-8 postmain">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                <div class="row">                    
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
                                'prev_text'          => __( 'Previous page', 'food-restaurant' ),
                                'next_text'          => __( 'Next page', 'food-restaurant' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'food-restaurant' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
        </div>
    <?php } ?>
</div>

<?php get_footer(); ?>