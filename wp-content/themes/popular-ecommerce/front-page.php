<?php
/**
 * Front Page Template
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ostore-child
 */

get_header(); 


//Fontpage settings
if ( 'posts' == get_option( 'show_on_front' ) ) { //Show Static Blog Page
    include( get_home_template() );
    
}else{ 
    /*Ostore Main Slider */
    do_action('ostore_main_slider');

    /*Full Width Homepage  Widget Area */
    dynamic_sidebar( 'home_page' );

    //Popular eCommerce Single Products
    do_action( 'popular_ecommerce_homepage_slider' );
    
    /*Add the Logo Slider */
    do_action('ostore_client_logo');
}

get_footer();