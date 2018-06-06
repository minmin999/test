<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Layla
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        
        <div class="overlay-widget">
            <div class="row">
                <?php get_sidebar( 'overlay' ); ?>
            </div>
        </div>
        
        <div id="layla-search" class="noshow">
            
            <div class="row">
                
                <span class="fa fa-search"></span>
                
                <?php get_search_form( ); ?>
                
                <span class="fa fa-close"></span>
       
            </div>
            
        </div>
        
        <div id="page" class="hfeed site <?php echo has_post_thumbnail() ? 'has-thumb' : ''; ?>">

            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'layla'); ?></a>
            
            <header id="masthead" class="site-header" role="banner">

                <div id="layla-header" class="<?php echo is_front_page() ? 'frontpage' : ''; ?>">

                    <div class="header-inner">

                        <div class="row">

                            <div class="layla-branding">

                                <div class="site-branding">
                                    
                                    <div id="layla-logo" class="<?php echo function_exists( 'has_custom_logo' ) && has_custom_logo() ? 'show' : 'hidden'; ?>">

                                        <?php the_custom_logo(); ?>

                                    </div>
                                        <h1 class="site-title <?php echo ! function_exists( 'has_custom_logo' ) || ! has_custom_logo() ? 'show' : 'hidden'; ?>">
                                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                        </h1>

                                        <p class="site-description <?php echo ! function_exists( 'has_custom_logo' ) || ! has_custom_logo() ? 'show' : 'hidden'; ?>">
                                            <?php bloginfo('description'); ?>
                                        </p>
                                        
                                    <?php //endif; ?>
                                    
                                </div><!-- .site-branding -->

                            </div>

                            <div class="layla-header-menu">

                                <?php if( class_exists( 'WooCommerce' ) ) : ?>
                                
                                    <div class="layla-mobile-cart">

                                        <a class="layla-cart" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>"><span class="fa fa-shopping-cart"></span> <?php echo esc_attr( WC()->cart->get_cart_total() ); ?></a>

                                    </div>
                                
                                <?php endif; ?>
                                
                                
                                <nav id="site-navigation" class="main-navigation" role="navigation">
                                    
                                    <?php
                                    
                                    if( has_nav_menu( 'primary' ) ) :
                                        
                                        $menu = wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'menu_id' => 'primary-menu',
                                            'menu_class' => 'layla-nav',
                                        ));
                                    else :
                                        
                                        if( current_user_can( 'edit_theme_options' ) ) :
                                            echo '<div id="layla-add-menu"><a class="layla-cart" href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . __( 'Add a Primary Menu', 'layla' ) . '</a></div>';
                                        endif;
                                    endif;
                                    

                                    ?>


                                </nav><!-- #site-navigation -->

                                
                            </div>

                        </div>
                    </div>
                </div>

            </header><!-- #masthead -->

            <div id="content" class="site-content">
