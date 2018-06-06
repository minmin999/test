<?php

/**
 * 
 * Layla WordPress Theme
 * 
 * This file contains most of the work done by Layla
 * It's pretty straight forward, feel free to edit if you're comfortable with basic PHP
 * 
 * If you got here, thank you for using this theme ! Hack away at it as you see fit.
 * Please take a minute to leave us a review on WordPress.org
 * 
 * 
 */


function layla_scripts() {

    wp_enqueue_style('layla-style', get_stylesheet_uri());

    wp_enqueue_script('layla-navigation', get_template_directory_uri() . '/js/navigation.js', array(), LAYLA_VERSION, true);

    wp_enqueue_script('layla-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), LAYLA_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    
    $fonts = layla_fonts();
    
    if( array_key_exists ( get_theme_mod('header_font', 'Oswald, sans-serif'), $fonts ) ) :
        wp_enqueue_style('layla-font-header', '//fonts.googleapis.com/css?family=' . $fonts[get_theme_mod('header_font', 'Oswald, sans-serif')], array(), LAYLA_VERSION );
    endif;
    
    if( array_key_exists ( get_theme_mod('theme_font', 'Lato, sans-serif'), $fonts ) ) :
        wp_enqueue_style('layla-font-general', '//fonts.googleapis.com/css?family=' . $fonts[get_theme_mod('theme_font', 'Lato, sans-serif')], array(), LAYLA_VERSION );
    endif;
    

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css', array(), LAYLA_VERSION);
    wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/inc/css/bootstrap-theme.min.css', array(), LAYLA_VERSION);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/inc/css/font-awesome.min.css', array(), LAYLA_VERSION);
    wp_enqueue_style('layla-main-style', get_template_directory_uri() . '/inc/css/style.css', array(), LAYLA_VERSION);
    wp_enqueue_style('animate', get_template_directory_uri() . '/inc/css/animate.css', array(), LAYLA_VERSION);
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/inc/css/slicknav.min.css', array(), LAYLA_VERSION);
    
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/inc/js/easing.js', array('jquery'), LAYLA_VERSION, true);
    wp_enqueue_script('jquery-slicknav', get_template_directory_uri() . '/inc/js/slicknav.min.js', array('jquery'), LAYLA_VERSION, true);
    wp_enqueue_script('jquery-wow', get_template_directory_uri() . '/inc/js/wow.min.js', array('jquery'), LAYLA_VERSION, true);
    wp_enqueue_script('layla-script', get_template_directory_uri() . '/inc/js/script.js', array('jquery', 'jquery-ui-core', 'jquery-masonry'), LAYLA_VERSION);
    
}

add_action('wp_enqueue_scripts', 'layla_scripts');

function layla_widgets_init() {

    register_sidebar(array(
        'name' => esc_html__('Right Sidebar', 'layla'),
        'id' => 'sidebar-right',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Left Sidebar', 'layla'),
        'id' => 'sidebar-left',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Shop Sidebar ( WooCommerce )', 'layla'),
        'id' => 'sidebar-shop',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));


    register_sidebar(array(
        'name' => esc_html__('Footer', 'layla'),
        'id' => 'sidebar-footer',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-4">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Top B - Homepage widget', 'layla'),
        'id' => 'sidebar-homepage',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-12">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'layla_widgets_init');



function layla_do_left_sidebar( $args ) {
    
    if( get_theme_mod( 'sidebar_location', 'right' ) == 'none' ) :
        return;
    endif;
    
    if( $args[0] == 'frontpage' && get_theme_mod('home_sidebar') == 'off' )
        return;
    
    if( $args[0] == 'page' && get_theme_mod('page_sidebar') == 'off' )
        return;
    
    if( $args[0] == 'single' && get_theme_mod('single_sidebar') == 'off' )
        return;
    
    
    
    if( get_theme_mod( 'sidebar_location', 'right' ) == 'left' ) :
        
        echo '<div class="col-sm-4" id="layla-sidebar">' .
        get_sidebar('right') . '</div>';
        
    endif;
    
    
}
add_action('layla-sidebar-left', 'layla_do_left_sidebar');

function layla_do_right_sidebar( $args ) {
    
    if( get_theme_mod( 'sidebar_location', 'right' ) == 'none' ) :
        return;
    endif;
    
    if( $args[0] == 'frontpage' && get_theme_mod('home_sidebar') == 'off' )
        return;
    
    if( $args[0] == 'page' && get_theme_mod('page_sidebar') == 'off' )
        return;
    
    if( $args[0] == 'single' && get_theme_mod('single_sidebar') == 'off' )
        return;
    
    
    
    if( get_theme_mod( 'sidebar_location', 'right' ) == 'right' ) :
        
        echo '<div class="col-sm-4" id="layla-sidebar">';
    
        get_sidebar('right');
        
        echo '</div>';
        
    endif;
    
    
}
add_action('layla-sidebar-right', 'layla_do_right_sidebar');

function layla_main_width(){
    
    $width = 12;
    
    if( is_active_sidebar('sidebar-left') && is_active_sidebar('sidebar-right') ) :
        
        $width = 6;
        
    elseif( is_active_sidebar('sidebar-left') || is_active_sidebar('sidebar-right') ) :
        $width = 9;
    else:
        $width = 12;
    endif;
    
    
    return $width;
}


function layla_customize_nav( $items, $args ) {

    if( $args->theme_location != 'primary' ) :
        return $items;
    endif;
    
    if( get_theme_mod('header_search_bool', 'on' ) == 'on' ) :
        $items .= '<li class="menu-item"><a class="layla-search" href="#search" role="button" data-toggle="modal"><span class="fa fa-search"></span></a></li>';
    endif;
    
    if( class_exists( 'WooCommerce' ) && get_theme_mod('header_cart_bool', 'on' ) == 'on' ) :
        $items .= '<li><a class="layla-cart" href="' . esc_url( WC()->cart->get_cart_url() ) . '"><span class="fa fa-shopping-cart"></span> ' . WC()->cart->get_cart_total() . '</a></li>';
    endif;
    
    
    
    return $items;
}

add_filter('wp_nav_menu_items', 'layla_customize_nav', 10, 2);


function layla_custom_css() {
    
    $theme_color = esc_attr( get_theme_mod('layla_theme_color', '#4cef9e' ) );
    $theme_color_rgba = layla_hex2rgb( $theme_color );
    $hover_color = esc_attr( get_theme_mod('layla_theme_color_hover', '#37ef93' ) );
    $hover_color_rgba = layla_hex2rgb( $hover_color );
    
    ?>
    <style type="text/css">


        body{
            font-size: <?php echo esc_attr( get_theme_mod( 'theme_font_size', '16px') ); ?>;
            font-family: <?php echo esc_attr( get_theme_mod( 'theme_font', 'Lato, sans-serif' ) ); ?>;

        }
        h1,h2,h3,h4,h5,h6,.slide2-header,.slide1-header,.layla-title, .widget-title,.entry-title, .product_title{
            font-family: <?php echo esc_attr( get_theme_mod('header_font', 'Oswald, sans-serif' ) ); ?>;
        }
        
        ul.layla-nav > li.menu-item a{
            font-size: <?php echo esc_attr( get_theme_mod('menu_font_size', '14px' ) ); ?>;
        }
        
        #layla-featured-post #slide1,
        #layla-featured-post #slide1 .slide-vert-wrapper{
            height: <?php echo intval( get_theme_mod('layla_jumbotron_height', 650 ) ); ?>px;
        }
        
        #masthead.site-header,
        #layla-header .header-inner,
        #layla-header .slicknav_menu,
        ul.layla-nav ul li{
            background-color: <?php echo esc_attr( get_theme_mod('layla_header_bg_color', '#f9f9f9' ) ); ?>;
        }
        
        #layla-header .header-inner a,
        .main-navigation .layla-cart,
        .layla-mobile-cart .layla-cart,
        #layla-header .site-description{
            color: <?php echo esc_attr( get_theme_mod('layla_header_text_color', '#4D5051' ) ); ?> !important;
        }
        
        a,a:visited,
        ul.layla-nav > li > ul li.current-menu-item > a,
        .woocommerce .woocommerce-message:before,
        #layla-social a{
            color: <?php echo $theme_color; ?>;
        }

        a:hover,
        a:focus,
        .site-info a:hover,
        ul.layla-nav ul li a:hover,
        #layla-social a:hover{
            color: <?php echo $hover_color; ?>;
        }

        ul.layla-nav > li.menu-item.current-menu-item a,
        ul.layla-nav > li.menu-item.current-menu-parent a,
        ul.layla-nav > li.menu-item a:hover{

            border-bottom: 2px solid <?php echo $hover_color; ?>;

        }

        .layla-button.primary,
        button, 
        input[type="button"], 
        input[type="submit"],
        .woocommerce button.button.alt, 
        .woocommerce input.button.alt,
        .woocommerce #respond input#submit.alt, 
        .woocommerce a.button.alt,
        .woocommerce ul.products li.product .button,
        .button.wc-backward,
        #layla-featured-post #layla-social a:hover{
            background-color: <?php echo $theme_color; ?> !important;
            color: #fff !important;
            background: <?php echo $theme_color; ?>;
            color: #fff;
        }

        button:hover, 
        input[type="button"]:hover, 
        input[type="submit"]:hover,
        .layla-button.primary:hover,
        .button.wc-backward:hover,
        .woocommerce ul.products li.product .button:hover,
        .woocommerce button.button.alt:hover, 
        .woocommerce input.button.alt:hover,
        .woocommerce #respond input#submit.alt:hover, 
        .woocommerce a.button.alt:hover{
            background: <?php echo $hover_color; ?> !important;
        }

        .entry-meta .fa,
        .layla-blog-post,
        #layla-featured,
        .woocommerce span.onsale,
        .entry-meta .post-category a{
            background: <?php echo $theme_color; ?>;
        }
        
        .layla-blog-post{
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-size: cover;
        }
        
        .woocommerce .woocommerce-message{
            border-top-color: <?php echo $theme_color; ?>;
        }


        .main-navigation .layla-cart,
        .layla-mobile-cart .layla-cart{
            transition: 0.25s all ease-in-out;
            -moz-transition: 0.25s all ease-in-out;
            -webkit-transition: 0.25s all ease-in-out;
            top: -5px;
        }


        #layla-featured,
        .woocommerce span.onsale{
            color: #fff;
        }
        #layla-featured .fa{
            color: #fff;
        }

        .scroll-top:hover {
            background: <?php echo $hover_color; ?>;
        }
        
        .woocommerce ul.products li.product a img{
            border-bottom: 7px solid <?php echo $theme_color; ?>;
        }
        <?php if( get_theme_mod( 'layla_the_featured_post_highlight', false ) ) : ?>
        #layla-featured-post #slide1 span.header-inner {
            padding: 15px;
            background: rgba( <?php echo intval( $theme_color_rgba[0] ); ?>,<?php echo intval( $theme_color_rgba[1] ); ?>,<?php echo intval( $theme_color_rgba[2] ); ?>, 0.8 ); 
        }
        <?php endif; ?>
        
    </style>
    <?php
}

add_action('wp_head', 'layla_custom_css');



function layla_featured_post() { ?>
    
    <div id="layla-featured-post">
        
        <?php
        if( get_theme_mod( 'layla_social_featured', 'on' ) == 'on' ) :
            layla_social_icons(); 
        endif;
        ?>
        
        <div id="layla-slider" class="hero">
            
            <?php $post_id = get_theme_mod( 'layla_the_featured_post', 1 ); ?>
            
            <?php if( $post_id ) : ?>
                
            <div id="slide1" style="background-image: url( '<?php header_image(); ?>');">
                
                <div class="overlay"></div>
                <div class="row">
                    <div class="col-sm-12 slide-details">

                        <div class="slide-vert-wrapper">
                         
                            <div class="slide-vert-inner">
                            
                                <a href="<?php echo get_the_permalink( $post_id ) ? esc_url( get_the_permalink( $post_id ) ) : null; ?>">
                                    <h2 class="header-text slide1-header animated fadeIn delay1">
                                        <span class="header-inner"><?php echo ( get_the_title( $post_id ) ? esc_attr( get_the_title( $post_id ) ) : '' ); ?></span>
                                    </h2>

                                    <p class="animated fadeIn delay1">
                                        <?php echo esc_html( wp_trim_words( strip_tags( get_post_field( 'post_content', $post_id ) ), 25 ) ); ?>
                                    </p>
                                </a>

                                <a href="<?php echo get_the_permalink( $post_id ) ? esc_url( get_the_permalink( $post_id ) ) : null; ?>" 
                                   class="animated fadeIn delay1 layla-button primary">
                                    <?php echo esc_attr( get_theme_mod( 'layla_the_featured_post_button', __( 'Continue reading', 'layla' )  ) ); ?>
                                </a>

                            </div>
                            
                        </div>

                    </div>

                </div>
                
                <div class="slider-bottom">
                    <div>
                        <span class="fa fa-chevron-down scroll-down animated slideInUp delay-long"></span>
                    </div>
                </div>

            </div>
            <?php endif; ?>
            
        </div>
    </div>


    <div class="clear"></div>
    
<?php }

function layla_render_homepage() { 
    
    if( get_theme_mod( 'layla_the_featured_post_toggle', 'on' ) == 'on' ) :
    
        layla_featured_post();
    
    endif;
    
    ?>
    
    <?php $post_id = get_theme_mod( 'layla_the_featured_post2', 1 ); ?>
    <?php $the_post = $post_id ? get_post( $post_id ) : null; ?>
    <?php if( $the_post && get_theme_mod('layla_the_featured_post2_toggle', 'on' ) == 'on' ) : ?>
    <div id="layla-topa">
        
        <div class="row text-center">
            <div class="col-sm-12">
                
                <h3 class="heading"><?php echo esc_html( $the_post->post_title ); ?></h3>
                
                <p class="description">
                    <?php echo esc_html( wp_trim_words( $the_post->post_content, 40 ) ); ?>
                </p>
                
            </div>            
        </div>
        
        <div class="row text-center">
            <div class="col-sm-12">
                <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>"><?php echo get_the_post_thumbnail( $post_id ); ?></a>
            </div>
        </div>        

    </div>
    
    <div class="clear"></div>
    <?php endif; ?>
    
    <?php if( get_theme_mod('homepage_widget_bool', 'on' ) == 'on' ) : ?>
        <div id="layla-topb">
            <?php get_sidebar('homepage'); ?>
        </div>
    <?php endif; ?>
    
    <?php if( get_theme_mod('homepage_topc_toggle', 'on' ) == 'on' ) : ?>
    
    <div id="layla-topc">
        <div class="row">
            <div class="col-sm-4">
                
                <?php $post_id = get_theme_mod( 'layla_the_featured_post3', 1 ); ?>
                <?php $the_post = $post_id ? get_post( $post_id ) : null; ?>
                <?php if( $the_post ) : ?>
                
                    <div class="row text-center">
                        <div class="col-sm-12">

                            <h3 class="heading"><?php echo esc_html( $the_post->post_title ); ?></h3>

                            <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>"><?php echo get_the_post_thumbnail( $post_id ); ?></a>

                            <p class="description">
                                <?php echo esc_html( wp_trim_words( $the_post->post_content, 40 ) ); ?>
                            </p>
                            
                            <div class="center">
                                <a class="animated fadeInUp delay3 layla-button primary" href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>"><?php echo esc_html( get_theme_mod( 'homepage_topc_button', __( 'Learn more', 'layla' ) ) ); ?></a>
                            </div>
                            
                        </div>            
                    </div>

                <?php endif; ?>
                
            </div>
            <div class="col-sm-4">
                
                <?php $post_id = get_theme_mod( 'layla_the_featured_post4', 1 ); ?>
                <?php $the_post = $post_id ? get_post( $post_id ) : null; ?>
                <?php if( $the_post ) : ?>
                
                    <div class="row text-center">
                        <div class="col-sm-12">

                            <h3 class="heading"><?php echo esc_html( $the_post->post_title ); ?></h3>

                            <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>"><?php echo get_the_post_thumbnail( $post_id ); ?></a>

                            <p class="description">
                                <?php echo esc_html( wp_trim_words( $the_post->post_content, 40 ) ); ?>
                            </p>
                            
                            <div class="center">
                                <a class="animated fadeInUp delay3 layla-button primary" href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>"><?php echo esc_html( get_theme_mod( 'homepage_topc_button', __( 'Learn more', 'layla' ) ) ); ?></a>
                            </div>

                        </div>            
                    </div>

                <?php endif; ?>
                
            </div>
            <div class="col-sm-4">
                
                <?php $post_id = get_theme_mod( 'layla_the_featured_post5', 1 ); ?>
                <?php $the_post = $post_id ? get_post( $post_id ) : null; ?>
                <?php if( $the_post ) : ?>
                
                    <div class="row text-center">
                        <div class="col-sm-12">

                            <h3 class="heading"><?php echo esc_html( $the_post->post_title ); ?></h3>

                            <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>"><?php echo get_the_post_thumbnail( $post_id ); ?></a>

                            <p class="description">
                                <?php echo esc_html( wp_trim_words( $the_post->post_content, 40 ) ); ?>
                            </p>
                            
                            <div class="center">
                                <a class="animated fadeInUp delay3 layla-button primary" href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>"><?php echo esc_html( get_theme_mod( 'homepage_topc_button', __( 'Learn more', 'layla' ) ) ); ?></a>
                            </div>

                        </div>            
                    </div>

                
                <?php endif; ?>
                
                
                
            </div>
            <div class="clear"></div>
            <hr>
            
            
        </div>
        
    </div>
    
    <?php endif; ?>
    
    <div class="clear"></div>
    
    
    

    
    <?php
}

add_action( 'layla_homepage', 'layla_render_homepage' );


function layla_get_post_thumb( $post_id ) {
    
    if( $post_id == 'nopost' ) :
        return get_template_directory_uri() . '/inc/images/layla1.jpg';
    endif;
    
    if( has_post_thumbnail( $post_id ) ) :
        $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );
        return $img[0];
    endif;
    
}


function layla_render_footer(){ ?>
    
    <?php if( get_theme_mod( 'footer_background_toggle', 'on' ) == 'on') : ?>
    
    <div class="layla-footer" class="parallax-window" data-parallax="scroll" style="background-image: url(<?php echo esc_url( get_theme_mod('footer_background_image', get_template_directory_uri() . '/inc/images/cab.jpg' ) ); ?>)">
        <div>
            <div class="row">
                <?php get_sidebar('footer'); ?>
            </div>            
        </div>

        
    </div>
    
    <div class="clear"></div>
    
    <?php endif; ?>
    
    <div class="site-info">
        
        <div class="row">
            
            <div class="layla-copyright">
                <?php echo esc_html( get_theme_mod( 'copyright_text', get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?>
            </div>
            <?php 
            if( get_theme_mod( 'layla_social_footer', 'on' ) == 'on' ) :
                layla_social_icons(); 
            endif;
            ?>
            
            <div class="payment-icons">

                <?php if ( get_theme_mod( 'layla_include_cc_visa', false ) ) : ?>
                    <i class="fa fa-cc-visa"></i>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'layla_include_cc_mastercard', false ) ) : ?>
                    <i class="fa fa-cc-mastercard"></i>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'layla_include_cc_amex', false ) ) : ?>
                    <i class="fa fa-cc-amex"></i>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'layla_include_cc_paypal', false ) ) : ?>
                    <i class="fa fa-cc-paypal"></i>
                <?php endif; ?>

            </div>
            
            <hr>

            <a href="https://smartcatdesign.net" rel="designer" style="display: block !important" class="rel">
                <?php printf( esc_html__( 'Designed by %s', 'layla' ), 'Smartcat' ); ?> 
                <img src="<?php echo get_template_directory_uri() . '/inc/images/cat_logo_mini.png'?>"/>
            </a>
            
        </div>
        
        <div class="scroll-top alignright">
            <span class="fa fa-chevron-up"></span>
        </div>
        

        
    </div><!-- .site-info -->
    
    
<?php }
add_action( 'layla_footer', 'layla_render_footer' );

function layla_hex2rgb( $hex ) {
    $hex = str_replace( "#", "", $hex );

    if ( strlen( $hex ) == 3 ) {
        $r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
        $g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
        $b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
    } else {
        $r = hexdec( substr( $hex, 0, 2 ) );
        $g = hexdec( substr( $hex, 2, 2 ) );
        $b = hexdec( substr( $hex, 4, 2 ) );
    }
    $rgb = array ( $r, $g, $b );
    //return implode(",", $rgb); // returns the rgb values separated by commas
    return $rgb; // returns an array with the rgb values
}

function layla_social_icons() { ?>

    <div id="layla-social">

        <?php if( get_theme_mod( 'facebook_url', '' ) != '' ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'facebook_url', '' ) ); ?>" target="_BLANK" class="layla-facebook">
            <span class="fa fa-facebook"></span>
        </a>
        <?php endif; ?>


        <?php if( get_theme_mod( 'gplus_url', '' ) != '' ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'gplus_url', '' ) ); ?>" target="_BLANK" class="layla-gplus">
            <span class="fa fa-google-plus"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'instagram_url', '' ) != '' ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'instagram_url', '' ) ); ?>" target="_BLANK" class="layla-instagram">
            <span class="fa fa-instagram"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'linkedin_url', '' ) != '' ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'linkedin_url', '' ) ); ?>" target="_BLANK" class="layla-linkedin">
            <span class="fa fa-linkedin"></span>
        </a>
        <?php endif; ?>


        <?php if( get_theme_mod( 'pinterest_url', '' ) != '' ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'pinterest_url', '' ) ); ?>" target="_BLANK" class="layla-pinterest">
            <span class="fa fa-pinterest"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'twitter_url', '' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'twitter_url', '' ) ); ?>" target="_BLANK" class="layla-twitter">
            <span class="fa fa-twitter"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'vimeo_url', '' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'vimeo_url', '' ) ); ?>" target="_BLANK" class="layla-vimeo">
            <span class="fa fa-vimeo"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'spotify_url', '' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'spotify_url', '' ) ); ?>" target="_BLANK" class="layla-spotify">
            <span class="fa fa-spotify"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'apple_url', '' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'apple_url', '' ) ); ?>" target="_BLANK" class="layla-apple">
            <span class="fa fa-apple"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'github_url', '' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'github_url', '' ) ); ?>" target="_BLANK" class="layla-github">
            <span class="fa fa-github"></span>
        </a>
        <?php endif; ?>


        <?php if( get_theme_mod( 'vine_url', '' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'vine_url', '' ) ); ?>" target="_BLANK" class="layla-vine">
            <span class="fa fa-vine"></span>
        </a>
        <?php endif; ?>

    </div>
    
<?php }