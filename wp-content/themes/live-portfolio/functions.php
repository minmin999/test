<?php
/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage Live Portfolio
 * @since Live Portfolio 1.0
*/

/**
 * Live Portfolio setup.
 *
 * @since Live Portfolio 1.0
 */
 
 if ( ! isset( $content_width ) ) {
	$content_width = 900;
}
define ( 'LIVEPORTFOLIO_VERSION', '1.0.2' );
  
function liveportfolio_setup() {

	$defaults = meditation_get_defaults();

	load_child_theme_textdomain( 'live-portfolio' );
	
	$args = array(
		'default-image'          => get_stylesheet_directory_uri() . '/img/header.jpg',
		'header-text'            => true,
		'default-text-color'     => 'ffffff',
		'width'                  => absint( meditation_get_theme_mod( 'size_image' ) ),
		'height'                 => absint( meditation_get_theme_mod( 'size_image_height' ) ),
		'flex-height'            => true,
		'flex-width'             => true,
	);
	add_theme_support( 'custom-header', $args );
	
	remove_action( 'meditation_empty_sidebar-header', 'meditation_header_sidebar', 20 );

}
add_action( 'after_setup_theme', 'liveportfolio_setup' );


/**
 * Enqueue parent and child scripts
 *
 * @package WordPress
 * @subpackage Live Portfolio
 * @since Live Portfolio 1.0
*/

function liveportfolio_styles() {
    wp_enqueue_style( 'meditation-style', get_template_directory_uri() . '/style.css', array(), LIVEPORTFOLIO_VERSION );
    wp_enqueue_style( 'liveportfolio-style', get_stylesheet_uri(), array( 'meditation-style', 'meditation-animate' ), LIVEPORTFOLIO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'liveportfolio_styles' );

/**
 * Set defaults
 *
 * @package WordPress
 * @subpackage Live Portfolio
 * @since Live Portfolio 1.0
*/

function liveportfolio_defaults( $defaults ) {
	
	$defaults['is_cat'] = '1';
	$defaults['is_author'] = '';
	$defaults['is_date'] = '';
	$defaults['is_views'] = '';
	$defaults['is_comments'] = '';
	$defaults['blog_is_cat'] = '1';
	$defaults['blog_is_author'] = '';
	$defaults['blog_is_date'] = '';
	$defaults['blog_is_views'] = '';
	$defaults['blog_is_comments'] = '';
	$defaults['blog_is_entry_meta'] = '';
	$defaults['is_restart_header'] = '';
	$defaults['font_scheme'] = '3';
	$defaults['color_scheme'] = '4';
	$defaults['menu_effect_class'] = '15';
	$defaults['blog_effect_class'] = '5';
	$defaults['sidebar_effect_class'] = '2';
	$defaults['header_effect_class'] = '1';

	$defaults['site_style'] = 'full';
	
	$defaults['width_site'] = '1500';
	$defaults['width_top_widget_area'] = '1500';
	$defaults['width_content_no_sidebar'] = '1500';	
	$defaults['width_content'] = '1500';
	$defaults['width_main_wrapper'] = '1500';
	
	/* Header Image size */
	$defaults['size_image'] = '1500';
	$defaults['size_image_height'] = '400';
	/* Header Image and top sidebar wrapper */
	$defaults['width_image'] = '1500';
	
	$defaults['scroll_button'] = 'right';
	
	$defaults['single_style'] = 'excerpt';

	$defaults['footer_text'] = '<a href="' . esc_url( __( 'http://wordpress.org/', 'live-portfolio' ) ) . '">' . __( 'Powered by WordPress', 'live-portfolio' ). '</a> | ' . __( 'theme ', 'live-portfolio' ) . '<a href="' .  esc_attr( __( 'https://visualpharm.com/wpblogs/themes/', 'live-portfolio') ) . '">Live Portfolio</a>';
	
	return $defaults;

}
add_filter( 'meditation_option_defaults', 'liveportfolio_defaults' );

/** Set theme layout
 *
 * @since Live Portfolio 1.0
 */
function liveportfolio_layout( $layout ) {
	
	foreach( $layout as $id => $layouts ) {
		if ( 'layout_home' == $layouts['name'] ) {

			$layout[ $id ]['val'] = 'no-sidebar';
			
		}
		if ( 'layout_home' == $layouts['name'] || 'layout_blog' == $layouts['name'] || 'layout_archive' == $layouts['name'] ) {

			$layout[ $id ]['content_val'] = 'flex-layout-3';
			
		}	
		if (  'layout_archive' == $layouts['name'] ) {

			$layout[ $id ]['content_val'] = 'flex-layout-3';
			
		}
		if (  'layout_default' == $layouts['name'] ) {

			$layout[ $id ]['val'] = 'right-sidebar';
			
		}
	}
	return $layout;
}
add_filter( 'meditation_layout', 'liveportfolio_layout' );