<?php
/**
 * Woo Commerce actions and Filters base on custom settings.
 *
 * @package Switty
 */

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

/**
 * Setup woo.
 */
function switty_woo_setup() {
	add_theme_support( 'woocommerce' );

	if ( '1' === get_theme_mod( 'support_gallery_zoom', '1' ) ) {
		add_theme_support( 'wc-product-gallery-zoom' );
	}

	if ( '1' === get_theme_mod( 'support_gallery_lightbox', '1' ) ) {
		add_theme_support( 'wc-product-gallery-lightbox' );
	}

	if ( '1' === get_theme_mod( 'support_gallery_slider', '1' ) ) {
		add_theme_support( 'wc-product-gallery-slider' );
	}
}
add_action( 'after_setup_theme', 'switty_woo_setup' );

/**
 * Product per page.
 *
 * @param int $cols    Number of products per page.
 */
function switty_product_per_page( $cols ) {
	$cols = absint( get_theme_mod( 'product_per_page', '12' ) );
	return $cols;
}
add_filter( 'loop_shop_per_page', 'switty_product_per_page', 20 );

/**
 * Related products per column.
 *
 * @param array $args    woocommerce output related products args.
 */
function switty_related_products_args( $args ) {
		$args['posts_per_page'] = absint( get_theme_mod( 'product_per_column', '4' ) );
		$args['columns'] = 1;
		return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'switty_related_products_args' );

/**
 * Product(s) Per Column.
 */
function switty_loop_columns() {
		return absint( get_theme_mod( 'product_per_column', '4' ) );
}
add_filter( 'loop_shop_columns', 'switty_loop_columns' );

// Remove_wc_breadcrumbs - theme does not need default breadcrumb.
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

// Remove related product hook base on setting.
if ( '0' === get_theme_mod( 'display_related_prdkt', '1' ) ) {
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
}
