<?php

add_action('admin_menu', 'switty_theme_page');
 
function switty_theme_page() {
    add_theme_page(
        __( 'Switty Theme', 'switty' ),
        __( 'Switty Theme', 'switty' ),
        'manage_options',
        'switty-theme',
        'switty_theme_page_callback' );
}
 
function switty_theme_page_callback() {
    echo '<div class="wrap">
    <h1>'. __( 'Switty Theme Info', 'switty' ) .'</h1>
    <br />
    <div class="container-fluid" style="border:2px solid #ADADAD;">
        <div class="row">
            <div class="col-md-6" style="padding:0px;">
                <img class="img-responsive" src="'.get_template_directory_uri().'/screenshot.png" />
            </div>
            <div class="col-md-6">
            <h2>'. __( 'Switty WordPress Theme', 'switty' ) .'</h3>
            <p style="font-size:16px;">'. __( 'Switty is a Powerful, Clean, Multi Purpose, Responsive, SEO Friendly and Fully Customizable WordPress theme that provides a fast way to create an awesome online presence. Switty theme adds all theme options in customize so you can check your changes in real time without reloading front end each time and also have more than 30 color options to set your favorite colors. Switty theme comes with integrated typography options so you can select your favorite font form more than 800 Google fonts. It is fully compatible with all popular page builder plugins like Site Origin Page Builder, Elementor Page builder etc and have special page templates for those page builders including landing page template. Switty theme comes with dynamic footer widgets feature so you can disable footer widgets or enable one to four widgets area. Switty theme is fully compatible with woocommerce plugin so you can also sell your products online. Overall this theme can be use for various types of websites. And yes it is absolutely free and always will be. There is nothing behind pay wall.', 'switty' ) .'</p>
            <a target="_blank" class="btn btn-success" href="'.get_dashboard_url().'customize.php" role="button">'. __( 'Theme Options', 'switty' ) .'</a>
            <a target="_blank" class="btn btn-success" href="http://wordpress.org/support/theme/switty" role="button">'. __( 'Theme Support', 'switty' ) .'</a>
            <a target="_blank" class="btn btn-success" href="https://wordpress.org/support/theme/switty/reviews/?filter=5" role="button">'. __( 'Add Review', 'switty' ) .'</a>
            <a target="_blank" class="btn btn-success" href="https://www.paypal.me/RinkuYadav" role="button">'. __( 'Donate To Developer', 'switty' ) .'</a>
            <br /><br />
            </div>
        </div>
    </div>
    </div>';
}


// Enqueue js css files only if pagenow is themes.php and query string is page=switty-theme.
if ( 'themes.php' === $pagenow  && 'page=switty-theme' === $_SERVER['QUERY_STRING'] ) {
    add_action( 'admin_enqueue_scripts', 'switty_admin_js_css' );
}

function switty_admin_js_css() {
    // Load bootstrap css.
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.7', 'all' );
    // Load bootstrap js.
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.3.7', true );
}
