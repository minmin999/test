<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Blog Magazine
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
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-blog-magazine'); ?></a></div>
  <div id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <div class="search-box">
            <?php get_search_form(); ?>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="nav">
            <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="social">
            <?php if( get_theme_mod( 'vw_blog_magazine_facebook_url','' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'vw_blog_magazine_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'vw_blog_magazine_twitter_url','' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'vw_blog_magazine_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
            <?php } ?>              
            <?php if( get_theme_mod( 'vw_blog_magazine_insta_url','' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'vw_blog_magazine_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'vw_blog_magazine_linkdin_url','' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'vw_blog_magazine_linkdin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'vw_blog_magazine_youtube_url','' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'vw_blog_magazine_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="logo">
    <?php if( has_custom_logo() ){ vw_blog_magazine_the_custom_logo();
       }else{ ?>
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <?php $description = get_bloginfo( 'description', 'display' );
      if ( $description || is_customize_preview() ) : ?> 
        <p class="site-description"><?php echo esc_html($description); ?></p>       
    <?php endif; }?>
  </div>

  <?php if ( is_singular() && has_post_thumbnail() ) : ?>
    <?php
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'vw-blog-magazine-post-image-cover' );
      $post_image = $thumb['0'];
    ?>
    <div class="header-image bg-image" style="background-image: url(<?php echo esc_url( $post_image ); ?>)">
      <?php the_post_thumbnail( 'vw-blog-magazine-post-image' ); ?>
    </div>

  <?php elseif ( get_header_image() ) : ?>
  <div class="header-image bg-image" style="background-image: url(<?php header_image(); ?>)">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
    </a>
  </div>
  <?php endif; // End header image check. ?>