<?php
/**
 * Load All js css.
 *
 * @package Switty
 */

/**
 * Callback wp_enqueue_scripts.
 */
function switty_scripts() {

	global $switty_version;

	// Load bootstrap css.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.7', 'all' );

	// Load font-awesome file.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.6.3', 'all' );

	// Load default css file.
	wp_enqueue_style( 'switty-style-default', get_stylesheet_uri(), array( 'bootstrap', 'font-awesome' ), $switty_version, 'all' );

	// Load code css file.
	wp_enqueue_style( 'switty-style-core', get_template_directory_uri() . '/css/style.css', array( 'bootstrap', 'font-awesome' ), $switty_version, 'all' );

	// Load code woo css file.
	wp_enqueue_style( 'switty-style-woo', get_template_directory_uri() . '/css/style-woo.css', array( 'bootstrap', 'font-awesome', 'switty-style-default', 'switty-style-core' ), $switty_version, 'all' );

	// Load bootstrap js.
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.3.7', true );

	// Load theme main js file.
	wp_enqueue_script( 'switty-script', get_template_directory_uri() . '/js/script.js', array( 'jquery', 'imagesloaded', 'masonry' ), $switty_version, true );

	// Load html5shiv.
	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), '3.7.3', false );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	// Load respond js.
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.js', array(), $switty_version, false );
	wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

	// Load backtotop js depends on jquery and if enabled by customizer.
	if ( '1' === get_theme_mod( 'back_to_top', '1' ) ) {
		wp_enqueue_script( 'switty-backtotop', get_template_directory_uri() . '/js/backtotop.js', array( 'jquery' ), $switty_version, true );
	}

	// Load sidebar meny js depends on jquery and if enabled by customizer. also do not load on landing pages because do not have side bar menu.
	if ( '1' === get_theme_mod( 'sidebar_menu_onoff', '1' ) && ! is_page_template( 'templates/template-landing-elementor.php' ) && ! is_page_template( 'templates/template-landing-siteorigin.php' ) ) {
		wp_enqueue_script( 'switty-sidebar-menu', get_template_directory_uri() . '/js/sidebarmenu.js', array( 'jquery' ), $switty_version, true );
	}

	// Load comment-reply js.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'switty_scripts' );
