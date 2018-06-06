<?php
/**
 * Template Name: Custom home page
 */

get_header(); ?>

<?php do_action('the_wp_fitness_above_slider_section'); ?>

<?php /** slider section **/ ?>
<div class="slider-main">
  <?php
    // Get pages set in the customizer (if any)
    $pages = array();
    for ( $the_wp_fitness_count = 1; $the_wp_fitness_count <= 5; $the_wp_fitness_count++ ) {
      $mod = absint( get_theme_mod( 'the_wp_fitness_slidersettings-page-' . $the_wp_fitness_count ) );
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
        $the_wp_fitness_count = 1;
        ?>
        <div id="slider" class="nivoSlider">
          <?php
            $the_wp_fitness_n = 0;
          while ( $query->have_posts() ) : $query->the_post();
              $the_wp_fitness_n++;
              $the_wp_fitness_slideno[] = $the_wp_fitness_n;
              $the_wp_fitness_slidetitle[] = esc_html(get_the_title());
              $the_wp_fitness_slidelink[] = esc_url( get_permalink() );
              ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $the_wp_fitness_n ); ?>" />
              <?php
            $the_wp_fitness_count++;
          endwhile;
          wp_reset_postdata();
          ?>
        </div>
        <?php
        $the_wp_fitness_k = 0;
          foreach( $the_wp_fitness_slideno as $the_wp_fitness_sln ){ ?>
            <div id="slidecaption<?php echo absint( $the_wp_fitness_sln ); ?>" class="nivo-html-caption">
              <div class="slide-cap  ">
                <div class="container">
                  <h2><?php echo esc_html( $the_wp_fitness_slidetitle[$the_wp_fitness_k] ); ?></h2>
                  <a class="read-more" href="<?php echo esc_url( $the_wp_fitness_slidelink[$the_wp_fitness_k] ); ?>"><?php esc_html_e( 'Learn More','the-wp-fitness' ); ?></a>
                </div>
              </div>
            </div>
            <?php $the_wp_fitness_k++;
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

<?php do_action('the_wp_fitness_after_slider_section'); ?>

<?php /*--Trainer--*/?>
<section id="trainer">
    <div class="container">
      <div class="col-md-8 col-sm-8">
        <?php 
          $page_query = new WP_Query(array( 'category_name' => esc_html(get_theme_mod('the_wp_fitness_blogcategory_setting'),'theblog')));?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-md-4 col-sm-4">
                <div class="trainerbox">
                  <div class="abt-img-box"><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?></div>
                  <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                </div>
              </div>
          <?php endwhile;
          wp_reset_postdata();
        ?>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-4 col-sm-4 text-center">
        <?php if( get_theme_mod('the_wp_fitness_sec1_title') != ''){ ?>     
            <h3><?php echo esc_html(get_theme_mod('the_wp_fitness_sec1_title',__('MEET OUR TRAINER','the-wp-fitness'))); ?></h3>
            <div class="images_border">
              <img src="<?php echo esc_url( get_theme_mod('',get_template_directory_uri().'/images/headborder.png') ); ?>" alt="">
            </div>
        <?php }?>
        <?php if( get_theme_mod('the_wp_fitness_sec1_subtitle') != ''){ ?>
        <p class="subtitle"><?php echo esc_html(get_theme_mod('the_wp_fitness_sec1_subtitle',__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus.','the-wp-fitness'))); ?>
        </p>
        <?php }?>
        <div class ="testbutton">
          <a href="<?php echo esc_url(get_theme_mod('the_wp_fitness_trainer_link','#')); ?>"><span><?php echo esc_html(get_theme_mod('the_wp_fitness_trainer_name',__('READ MORE','the-wp-fitness'))); ?></span></a>
        </div>
      </div>
    </div>
</section>
  
<?php do_action('the_wp_fitness_after_trainer_section'); ?>

<?php /*--Gallery--*/?>
<section id="gallery">
  <div class="col-md-4 col-sm-4 gal-img">
    <?php
      $args = array( 'name' => get_theme_mod('the_wp_fitness_gallery1_setting',''));
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="box-image1 text-center">
              <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            </div>
        <?php endwhile; 
        wp_reset_postdata();?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php
    endif; ?>
  </div>
  <div class="col-md-8 col-sm-8 gal-img">
    <div class="col-md-8 col-sm-8 gal-img">
      <?php
        $args = array( 'name' => get_theme_mod('the_wp_fitness_gallery2_setting',''));
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="box-image text-center">
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              </div>
          <?php endwhile; 
          wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php
      endif; ?>
    </div>
    <div class="col-md-4 col-sm-4 gal-img">
      <?php
        $args = array( 'name' => get_theme_mod('the_wp_fitness_gallery3_setting',''));
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="box-image text-center">
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              </div>
          <?php endwhile; 
          wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php
      endif; ?>
    </div>
    <div class="col-md-4 col-sm-4 gal-img">
      <?php
        $args = array( 'name' => get_theme_mod('the_wp_fitness_gallery4_setting',''));
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="box-image text-center">
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              </div>
          <?php endwhile; 
          wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php
      endif; ?>
    </div>
    <div class="col-md-8 col-sm-8 gal-img">
      <?php
        $args = array( 'name' => get_theme_mod('the_wp_fitness_gallery5_setting',''));
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="box-image text-center">
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              </div>
          <?php endwhile; 
          wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php
      endif; ?>
    </div>
  </div>
</section>

<?php do_action('the_wp_fitness_after_gallery_section'); ?>

<?php /*--About Us--*/?>
<section class="about">
  <div class="container">
    <?php
      $args = array( 'name' => get_theme_mod('the_wp_fitness_about_setting',''));
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-md-8 col-sm-8">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <div class ="testbutton">
              <a href="<?php echo esc_url(get_theme_mod('the_wp_fitness_about_link','#')); ?>"><span><?php echo esc_html(get_theme_mod('the_wp_fitness_about_name',__('READ MORE','the-wp-fitness'))); ?></span></a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="abt-image">
              <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            </div>
          </div>          
        <?php endwhile; 
        wp_reset_postdata();?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php
    endif; ?>
  </div>
</section>

<?php do_action('the_wp_fitness_after_about_section'); ?>

<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>