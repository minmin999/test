<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>

<?php /** slider section **/ ?>
<div class="slider-main">
  <?php
    // Get pages set in the customizer (if any)
    $pages = array();
    for ( $count = 1; $count <= 5; $count++ ) {
      $mod = absint( get_theme_mod( 'ts_charity_slidersettings_page' . $count ) );
      if ( 'page-none-selected' != $mod ) {
        $pages[] = $mod;
      }
    }
    
    if( !empty($pages) ) :
      $args = array(
        'posts_per_page' => 5,
        'post_type' => 'page',
        'post__in' => $pages,
        'orderby' => 'post__in'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
        $count = 1;
        ?>
        <div id="slider" class="nivoSlider">
          <?php
            $ts_charity_n = 0;
          while ( $query->have_posts() ) : $query->the_post();
              
              $ts_charity_n++;
              $ts_charity_slideno[] = $ts_charity_n;
              $ts_charity_slidetitle[] = get_the_title();
              $ts_charity_slidetext[] = get_the_excerpt();
              $ts_charity_slidelink[] = esc_url( get_permalink() );
              ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $ts_charity_n ); ?>" />
              <?php
            $count++;
          endwhile; wp_reset_postdata(); ?>
        </div>

        <?php
        $ts_charity_k = 0;
          foreach( $ts_charity_slideno as $ts_charity_sln ){ ?>
            <div id="slidecaption<?php echo esc_attr( $ts_charity_sln ); ?>" class="nivo-html-caption">
              <div class="container">
                <div class="slide-cap row">
                  <div class="col-md-9 col-sm-9">
                    <h2><?php echo esc_html( $ts_charity_slidetitle[$ts_charity_k] ); ?></h2>
                    <p><?php echo esc_html( $ts_charity_slidetext[$ts_charity_k] ); ?></p>
                  </div>
                  <div class="slider-btn col-md-3 col-sm-3">
                    <div class="first-border">
                      <div class="second-border">
                        <a class="read-more" href="<?php echo esc_url( $ts_charity_slidelink[$ts_charity_k] ); ?>"><?php esc_html_e( 'READ MORE','ts-charity' ); ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $ts_charity_k++;
        }
      else : ?>
          <div class="header-no-slider"></div>
        <?php
      endif;
    else : ?>
        <div class="header-no-slider"></div>
    <?php
    endif; 
  ?>
</div>

<?php /** post section **/ ?>
<section id="causes">
  <?php if( get_theme_mod('ts_charity_title') != ''){ ?>
      <div class="heading-line">
        <h3><?php echo esc_html(get_theme_mod('ts_charity_title','')); ?> </h3>
        <img src="<?php echo esc_url( get_theme_mod('',get_template_directory_uri().'/images/hr.png') ); ?>" alt="">
      </div>
    <?php } ?>
  <div class="container"> 
    <div class="row">
      <?php 
          $page_query = new WP_Query(array( 'category_name' => get_theme_mod('ts_charity_causes_category','theblog')));?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
            <div class="causes-box col-md-4 col-sm-4">
              <div class="abt-img-box"><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?></div>
              <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
              <p><?php the_excerpt(); ?></p>
              <div class="metabox">
                <span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
                <span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'ts-charity'), __('0 Comments', 'ts-charity'), __('% Comments', 'ts-charity') ); ?> </span>
              </div>
            </div>
      <?php endwhile;
      wp_reset_postdata();
      ?>          
      <div class="clearfix"></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>