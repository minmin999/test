<?php
/**
 * Recommended plugins using TGM.
 *
 * @package Switty
 */

add_action( 'tgmpa_register', 'switty_register_required_plugins' );

/**
 * Callback for tgmpa_register.
 */
function switty_register_required_plugins() {
	$plugins = array(
		
		array(
			'name'      => __( 'Regenerate Thumbnails', 'switty' ),
			'slug'      => 'regenerate-thumbnails',
			'required'  => false,
		),

		array(
			'name'      => __( 'Page Builder by SiteOrigin', 'switty' ),
			'slug'      => 'siteorigin-panels',
			'required'  => false,
		),

		array(
			'name'      => __( 'SiteOrigin Widgets Bundle (Page Builder Widgets)', 'switty' ),
			'slug'      => 'so-widgets-bundle',
			'required'  => false,
		),

		array(
			'name'      => __( 'Elementor Page Builder', 'switty' ),
			'slug'      => 'elementor',
			'required'  => false,
		),

		array(
			'name'      => __( 'Contact Form 7 (For Forms)', 'switty' ),
			'slug'      => 'contact-form-7',
			'required'  => false,
		),

		array(
			'name'      => __( 'WooCommerce (For E-Commerce)', 'switty' ),
			'slug'      => 'woocommerce',
			'required'  => false,
		),

	);

	$config = array(
		'id'           => 'switty',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'switty-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
