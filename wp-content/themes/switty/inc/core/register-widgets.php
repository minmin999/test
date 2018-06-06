<?php
/**
 * Main file to init widgets.
 *
 * @package Switty
 */

/**
 * Callback of widgets_init.
 */
function switty_widgets_init() {
	register_sidebar( array(
		'name'			=> __( 'Blog Sidebar', 'switty' ),
		'id'			=> 'sidebar-1',
		'description'	=> __( 'Widgets for Blog sidebar. If you are using Full Width Layout in customize, then this sidebar will not display.', 'switty' ),
		'before_widget'	=> '<div id="%1$s" class="widget_sidebar_main pdl20 pdr20 pdb20 mrt50 postsloop clearfix %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="right-widget-title"><span class="right-widget-title-spn">',
		'after_title'	=> '</span></h3>',
	) );

	register_sidebar( array(
		'name'			=> __( 'Page Sidebar', 'switty' ),
		'id'			=> 'sidebar_page',
		'description'	=> __( 'Widgets for Page sidebar. If you are using Full Width No Sidebar Template, then this sidebar will not display.', 'switty' ),
		'before_widget'	=> '<div id="%1$s" class="widget_sidebar_main pdl20 pdr20 pdb20 mrt50 postsloop clearfix %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="right-widget-title"><span class="right-widget-title-spn">',
		'after_title'	=> '</span></h3>',
	) );

	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( array(
			'name'			=> __( 'Woocommerce Sidebar', 'switty' ),
			'id'			=> 'sidebar_woo',
			'description'	=> __( 'Widgets for Woocommerce Pages (For:- Product Loop, Product Search and Product Single Page). If you are using Full Width Layout in customize, then this sidebar will not display.', 'switty' ),
			'before_widget'	=> '<div id="%1$s" class="widget_sidebar_main pdl20 pdr20 pdb20 mrt50 postsloop clearfix %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3 class="right-widget-title"><span class="right-widget-title-spn">',
			'after_title'	=> '</span></h3>',
		) );
	}

	$number_of_footer_widgets = absint( get_theme_mod( 'number_of_footer_widgets', '0' ) );
	if ( 0 !== $number_of_footer_widgets ) {
		for ( $i = 1; $i <= $number_of_footer_widgets; $i++ ) {
			register_sidebar( array(
				'name' 			=> __( 'Footer Widget ', 'switty' ) . $i,
				'id'			=> 'footer_' . $i,
				'description'	=> __( 'Widgets for footer ', 'switty' ) . $i,
				'before_widget'	=> '<div id="%1$s" class="widgets_footer clearfix %2$s">',
				'after_widget'	=> '</div>',
				'before_title'	=> '<h3 class="widgets_footer_title">',
				'after_title'	=> '</h3>',
			) );
		}
	}
}
add_action( 'widgets_init', 'switty_widgets_init' );
