<?php
/**
 * Add inline_css.
 *
 * @package Switty
 */

/**
 * Callback of wp_enqueue_scripts.
 */
function switty_inline_css() {

	$product_per_column = absint( get_theme_mod( 'product_per_column', '4' ) );

	$custom_css = '';

	// For sticky post.
	if ( '0' === get_theme_mod( 'sticky_dt_disply', '1' ) ) {

		$custom_css .= '
			.sticky .post-date {
				display: none;
			}
		';

	}

	// Display grid or list.
	if ( 'grid2c' === get_theme_mod( 'blog_list_grid', 'list' ) ) {

		$custom_css .= '
			@media (min-width: 700px) {
				.gridpostloop {
				  width: 48%;
				  margin-left: 2%;
				}
			}
		';

	}
	elseif ( 'grid3c' === get_theme_mod( 'blog_list_grid', 'list' ) ) {

		$custom_css .= '
			@media (min-width: 700px) {
				.gridpostloop {
				  width: 30%;
				  margin-left: 3%;
				}
			}
		';
	} else {
		$custom_css .= '
			.gridpostloop {
			  width: 100%;
			}
		';
	}

	// For woo.
	if ( 2 === $product_per_column ) {

		$custom_css .= '
			@media (min-width: 768px) {
				.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
					width: 46%;
				}
			}
		';

	}

	if ( 3 === $product_per_column ) {

		$custom_css .= '
			@media (min-width: 768px) {
				.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
					width: 30%;
				}
			}
		';
	}

	if ( 4 === $product_per_column ) {

		$custom_css .= '
			@media (min-width: 768px) {
				.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
					width: 22%;
				}
			}
			';

	}

	if ( 5 === $product_per_column ) {

		$custom_css .= '
			@media (min-width: 768px) {
				.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
					width: 16.9%;
				}
			}
		';
	}

	wp_add_inline_style( 'switty-style-core', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'switty_inline_css' );
