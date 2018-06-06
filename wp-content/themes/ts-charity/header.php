<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-ts">
 *
 * @package ts-charity
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
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','ts-charity'); ?></a></div>
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="social-media col-md-3 col-sm-3">
          <?php if( get_theme_mod( 'ts_charity_facebook_url','' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_charity_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'ts_charity_twitter_url','' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_charity_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'ts_charity_youtube_url','' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_charity_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
          <?php } ?> 
          <?php if( get_theme_mod( 'ts_charity_rss_url','' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_charity_rss_url','' ) ); ?>"><i class="fas fa-rss"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'ts_charity_insta_url','' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_charity_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'ts_charity_pint_url','' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'ts_charity_pint_url','' ) ); ?>"><i class="fab fa-pinterest-p"></i></a>
          <?php } ?>
        </div>
        <div class="contact col-md-9 col-sm-9">
          <?php if( get_theme_mod( 'ts_charity_call','' ) != '') { ?>
            <span><i class="fas fa-phone-volume"></i><?php echo esc_html( get_theme_mod('ts_charity_call',__('(518) 356-5373','ts-charity') )); ?></span>
          <?php } ?>
          <?php if( get_theme_mod( 'ts_charity_time','' ) != '') { ?>
            <span><i class="far fa-clock"></i><?php echo esc_html( get_theme_mod('ts_charity_time',__('Mon-Fri 8:00am to 2:00pm','ts-charity') )); ?></span>
          <?php } ?>
          <?php if( get_theme_mod( 'ts_charity_email','' ) != '') { ?>
            <span><i class="far fa-envelope"></i><?php echo esc_html( get_theme_mod('ts_charity_email',__('example@123.com','ts-charity') )); ?></span>
          <?php } ?>
        </div>      
      </div>
    </div>
  </div>
  <div id="header" data-spy="affix" data-offset-top="150">
    <div class="container">
      <div class="row">
        <div class="logo col-md-3 col-sm-3">
          <?php if( has_custom_logo() ){ ts_charity_the_custom_logo();
           }else{ ?>
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
          <?php $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?> 
            <p class="site-description"><?php echo esc_html($description); ?></p>       
          <?php endif; }?>
        </div>
        <div class="col-md-8 col-sm-8">
          <div class="nav">
            <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
          </div>
        </div>
        <div class="search-box col-md-1 col-sm-1">
          <span><i class="fas fa-search"></i></span>
        </div>
      </div>
      <div class="serach_outer">
        <div class="closepop"><i class="far fa-window-close"></i></div>
        <div class="serach_inner">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>