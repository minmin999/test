<?php
/**
 * Switty theme setup.
 *
 * @package Switty
 */

// Assign the switty version to a var $switty_version.
$switty_theme_arr	= wp_get_theme( 'switty' );
$switty_version		= $switty_theme_arr['Version'];

/**
 * Callback after_setup_theme.
 */
function switty_setup() {

	global $content_width;

	if ( ! isset( $content_width ) ) {
		$content_width = 1098;
	}

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails', array( 'post' ) );
	set_post_thumbnail_size( 1140, 367, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'	=> __( 'Top Main Menu', 'switty' ),
		'sidebar'	=> __( 'Sidebar Menu', 'switty' ),
	) );

	add_theme_support( 'html5', array(
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', array(
		'default-color'      => '#f2f2f2',
		'default-attachment' => 'fixed',
	) );

	add_theme_support( 'custom-header', array(
		'width'         => 1140,
		'height'        => 400,
		'flex-width'    => true,
		'flex-height'   => true,
		'uploads'       => true,
		'header-text'	=> false,
		'default-image'	=> get_template_directory_uri() . '/img/header.png',
	) );

	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/img/header.png',
			'thumbnail_url' => '%s/img/header.png',
			'description'   => __( 'Default Header Image', 'switty' ),
		),
	) );

	add_theme_support( 'custom-logo', array(
		'height'		=> 50,
		'width'			=> 200,
		'flex-height'	=> true,
	) );

	add_theme_support( 'post-formats', array( 'quote' ) );

	add_editor_style( array( '//fonts.googleapis.com/css?family=Raleway', get_template_directory_uri() . '/css/editor-style.css' ) );
}
add_action( 'after_setup_theme', 'switty_setup' );
