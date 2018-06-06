<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Pet Shop
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

<div class="top_bar">
  <div class="container">
    <div class="contact_details">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <ul class="left-side-content">
            <li class="search-box">
              <span><i class="fas fa-search"></i></span>
            </li>
            <?php if(get_theme_mod('vw_pet_shop_header_callnumber','') != ''){ ?>
              <li class="">
                <span class="hi_normal"><i class="fas fa-phone-volume"></i><?php echo esc_html(get_theme_mod('vw_pet_shop_header_callnumber',__('8958-895-569','vw-pet-shop')));?></span>
              </li>
            <?php } ?>
            <?php if(get_theme_mod('vw_pet_shop_header_email_address','') != ''){ ?>
              <li class="">
                <span class="hi_normal"><i class="far fa-envelope-open"></i><?php echo esc_html(get_theme_mod('vw_pet_shop_header_email_address',__('abcdefxyz@gmail.com','vw-pet-shop')));?></span>
              </li>
            <?php } ?>
            <div class="serach_outer">
              <div class="closepop"><i class="far fa-window-close"></i></div>
              <div class="serach_inner">
                <?php get_search_form(); ?>
              </div>
            </div>
          </ul>
        </div>
        <div class="col-md-6 col-sm-6">
          <ul class="right-side-content">
            <?php if(get_theme_mod('vw_pet_shop_header_time','') != ''){ ?>
              <li>
                <span class="hi_normal"><i class="far fa-clock"></i><?php echo esc_html(get_theme_mod('vw_pet_shop_header_time',__('Mon - Fri 8:00Am to 7:00PM ','vw-pet-shop')));?></span>
              </li>
            <?php } ?>
            <?php if(get_theme_mod('vw_pet_shop_header_myaccount_url','') != ''){ ?>
              <li>
                <span class="hi_normal"><i class="fas fa-download"></i><a href="<?php echo esc_url( get_theme_mod( 'vw_pet_shop_header_myaccount_url','' ) ); ?>"><?php echo esc_html(get_theme_mod('vw_pet_shop_header_myaccount',__('My Account','vw-pet-shop')));?></a></span>
              </li>
            <?php } ?>
            <li class="cart_box">
              <span class="hi_normal"><i class="fas fa-cart-arrow-down"></i>
              <div class="top-cart-content">
                <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<div class="logo-responsive">
  <?php if( has_custom_logo() ){ vw_pet_shop_the_custom_logo();
  }else{ ?>
    <h1 class=""><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
    <?php $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) : ?>
      <p class="site-description"><?php echo esc_html($description); ?></p>
  <?php endif; } ?>
</div>
<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-pet-shop'); ?></a></div>
<div id="header">
  <div class="container">
    <div class="col-md-4 col-sm-6">
      <div class="nav">
        <?php wp_nav_menu( array('theme_location'  => 'left-primary') ); ?>
      </div>
    </div>
    <div class="col-md-4 logo_static">
      <div class="logo_outer_box">
        <div class="logo_outer">
          <div class="logo">
            <?php if( has_custom_logo() ){ vw_pet_shop_the_custom_logo();
            }else{ ?>
              <h1 class=""><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
              <?php $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo esc_html($description); ?></p>
            <?php endif; } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="nav">
        <?php wp_nav_menu( array('theme_location'  => 'right-primary') ); ?>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>