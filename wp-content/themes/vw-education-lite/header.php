<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package VW Education Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-education-lite'); ?></a></div> 
    <div class="top-bar">
    	<div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <?php if(get_theme_mod('vw_education_lite_cont_phone','') != '') { ?>
              <i class="fas fa-phone"></i><span><?php echo esc_html( get_theme_mod('vw_education_lite_cont_phone','') ); ?></span>
            <?php } ?>
          </div>		
      		<div class="col-md-3 col-sm-3">
            <?php if(get_theme_mod('vw_education_lite_cont_email','') != '') { ?>
              <i class="far fa-envelope"></i><a href="mailto:<?php echo esc_attr(get_theme_mod('vw_education_lite_cont_email','')); ?>"><span><?php echo esc_html(get_theme_mod('vw_education_lite_cont_email','')); ?></a></span>
            <?php } ?>
          </div>
          <div class="social-icon col-md-6 col-sm-6">
            <?php if( get_theme_mod( 'vw_education_lite_youtube_url','' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'vw_education_lite_youtube_url','' ) ); ?>"><i class="fab fa-youtube" aria-hidden="true"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'vw_education_lite_facebook_url','' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'vw_education_lite_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'vw_education_lite_twitter_url','' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'vw_education_lite_twitter_url','' ) ); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'vw_education_lite_rss_url','' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'vw_education_lite_rss_url','' ) ); ?>"><i class="fas fa-rss" aria-hidden="true"></i></a>
            <?php } ?>
          </div>
        </div>
  	  </div>
    </div><!-- top-bar -->
  <div class="header">
	  <div class="container">
      <div class="logo col-md-6">
          <?php vw_education_lite_the_custom_logo(); ?>
          <?php if ( is_front_page() && is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php endif;

          $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo esc_html( $description ); ?></p>
          <?php endif; ?>
        </div>
      <div class="clear"></div>
	  </div>
  </div>
  
  <div class="menu-bar nav">
  	<div class="container">
          <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
  		<div class="clearfix"></div>
  	</div>      
  </div>


  <?php if ( is_singular() && has_post_thumbnail() ) : ?>
    <?php
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'vw-education-lite-post-image-cover' );
      $post_image = $thumb['0'];
    ?>
    <div class="header-image bg-image" style="background-image: url(<?php echo esc_url( $post_image ); ?>)">

      <?php the_post_thumbnail( 'vw-education-lite-post-image' ); ?>

    </div>

  <?php elseif ( get_header_image() ) : ?>
  <div class="header-image bg-image" style="background-image: url(<?php header_image(); ?>)">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
    </a>
  </div>
  <?php endif; // End header image check. ?>