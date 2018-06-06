<?php
/**
 * The template for displaying Search Results pages.
 * @package VW Restaurant
 * @subpackage vw-restaurant-lite
 * @since vw-restaurant-lite 1.0
 */

get_header(); ?>

<div class="container">
  <?php
    $left_right = get_theme_mod( 'vw_restaurant_lite_theme_options','One Column');
    if($left_right == 'Left Sidebar'){ ?>
    <div class="row">
      <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
      <div class="services col-md-8 col-sm-8">
          <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
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
                    'prev_text'          => __( 'Previous page', 'vw-restaurant-lite' ),
                    'next_text'          => __( 'Next page', 'vw-restaurant-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-restaurant-lite' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
      </div>
    </div>
  <?php }else if($left_right == 'Right Sidebar'){ ?>
    <div class="row">
      <div class="services col-md-8 col-sm-8">
          <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>        
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
                    'prev_text'          => __( 'Previous page', 'vw-restaurant-lite' ),
                    'next_text'          => __( 'Next page', 'vw-restaurant-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-restaurant-lite' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
      </div>
      <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
    </div>
  <?php }else if($left_right == 'One Column'){ ?>
    <div class="services">
        <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
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
                  'prev_text'          => __( 'Previous page', 'vw-restaurant-lite' ),
                  'next_text'          => __( 'Next page', 'vw-restaurant-lite' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-restaurant-lite' ) . ' </span>',
              ) );
          ?>
            <div class="clearfix"></div>
        </div>
    </div>
  <?php }else if($left_right == 'Three Columns'){ ?>
    <div class="row">
      <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
      <div class="services col-md-6 col-sm-6">
          <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
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
                    'prev_text'          => __( 'Previous page', 'vw-restaurant-lite' ),
                    'next_text'          => __( 'Next page', 'vw-restaurant-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-restaurant-lite' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
      </div>
      <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
    </div>
  <?php }else if($left_right == 'Four Columns'){ ?>
    <div class="row">
      <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
      <div class="services col-md-3 col-sm-3">
          <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
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
                    'prev_text'          => __( 'Previous page', 'vw-restaurant-lite' ),
                    'next_text'          => __( 'Next page', 'vw-restaurant-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-restaurant-lite' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
      </div>
      <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
      <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
    </div>
  <?php }else if($left_right == 'Grid Layout'){ ?>
    <div class="services">
        <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
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
                  'prev_text'          => __( 'Previous page', 'vw-restaurant-lite' ),
                  'next_text'          => __( 'Next page', 'vw-restaurant-lite' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-restaurant-lite' ) . ' </span>',
              ) );
          ?>
            <div class="clearfix"></div>
        </div>
    </div>
  <?php }?>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>