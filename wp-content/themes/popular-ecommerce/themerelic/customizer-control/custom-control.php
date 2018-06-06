<?php
/**
 * customizer Control
 * @package ostore-child
 */
add_action( 'customize_register', 'popular_ecommerce_customize_register' );
function popular_ecommerce_customize_register($wp_customize) {
    require get_stylesheet_directory() . '/themerelic/customizer-control/multicheck/multiple-checkbox.php';
    
    //Register Control
    $wp_customize->register_control_type( 'Popular_Ecommerce_MultiCheck_Control' );
}