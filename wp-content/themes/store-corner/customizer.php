<?php
/**
 * Store Corner Theme Customizer.
 *
 * @package Store Corner
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function store_corner_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
	if(store_corner_is_wc()){
	$product_cat = get_terms( 'product_cat' ); // Get all Categories
	//$wp_category_list = array();
	$product_cats = array();
	$i = 0;
	foreach($product_cat as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$product_cats[$category->slug] = $category->name;
	}
	}
	//general settings
	
	$wp_customize->add_section( 'store_corner_general_section' , array(
		'title'       => __( 'General Options', 'store-corner' ),
		'priority'    => 20,
		'description' => __( 'Theme\'s general settings ', 'store-corner' ),
	) );
	
	$wp_customize->add_setting( 'store_corner_theme_color_setting', array (
		'default'     => '#446084',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'store_corner_theme_color', array(
		'label'    => __( 'Theme Color', 'store-corner' ),
		'section'  => 'store_corner_general_section',
		'settings' => 'store_corner_theme_color_setting',
	) ) );
	
	$wp_customize->add_setting('store_corner_home_layout', array(
		'default' => 'right',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_home_layout', array(
		'settings' => 'store_corner_home_layout',
		'type' => 'select',
		'label' => __('Select Blog Page Layout:','store-corner'),
		'section' => 'store_corner_general_section',
		'choices' => array(
			'left'=> __('Left Sidebar','store-corner'),
			'right'=> __('Right Sidebar','store-corner'),
			'full'=> __('Full Width','store-corner'),			
			),
		'priority'	=> 25
	));
	
	$wp_customize->add_setting('store_corner_post_layout', array(
		'default' => 'right',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_post_layout', array(
		'settings' => 'store_corner_post_layout',
		'type' => 'select',
		'label' => __('Select Post Page Layout:','store-corner'),
		'section' => 'store_corner_general_section',
		'choices' => array(
			'left'=> __('Left Sidebar','store-corner'),
			'right'=> __('Right Sidebar','store-corner'),
			'full'=> __('Full Width','store-corner'),			
			),
		'priority'	=> 25
	));
	
	//header settings
	$wp_customize->add_section( 'store_corner_topbar_section' , array(
		'title'       => __( 'Topbar', 'store-corner' ),
		'priority'    => 20,
		'description' => __( 'Topbar settings ', 'store-corner' ),
	) );
	
	
	$wp_customize->add_setting('store_corner_display_topbar_setting', array(
		'default'        => 0,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));
	$wp_customize->add_control('store_corner_display_topbar_setting', array(
		'settings' => 'store_corner_display_topbar_setting',
		'label'    => __('Display TopBar', 'store-corner'),
		'section'  => 'store_corner_topbar_section',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
	
	$wp_customize->add_setting('store_corner_display_topmenu_setting', array(
		'default'        => 0,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_topmenu_control', array(
		'settings' => 'store_corner_display_topmenu_setting',
		'label'    => __('Display Header Menu', 'store-corner'),
		'section'  => 'store_corner_topbar_section',
		'type'     => 'checkbox',
		'active_callback' =>'store_corner_topbar_active_callback',
		'priority'	=> 24
	));
	
	for($i=1; $i<=3; $i++){
	$wp_customize->add_setting('store_corner_header_icon_'.$i, array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_header_icon_'.$i, array(
		'settings' => 'store_corner_header_icon_'.$i,
		'label' => __('Header Element Icon ','store-corner').$i,
		'description' => __( 'Please add <strong>FontAwesome</strong> Class of respective social. Like  <strong>fa fa-facebook</strong>', 'store-corner' ),
		'section' => 'store_corner_topbar_section',
		'active_callback' =>'store_corner_topbar_active_callback',
		'priority'	=> 24
	));
	
	$wp_customize->add_setting('store_corner_header_heading_'.$i, array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_header_heading_'.$i, array(
		'settings' => 'store_corner_header_heading_'.$i,
		'label' => __('Header Element Heading ','store-corner').$i,
		'description' => __( 'Please add element\'s heading', 'store-corner' ),
		'section' => 'store_corner_topbar_section',
		'active_callback' =>'store_corner_topbar_active_callback',
		'priority'	=> 24
	));
	}
	$wp_customize->add_setting('store_corner_display_social_setting', array(
		'default'        => 0,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));
	$wp_customize->add_control('store_corner_display_social_setting', array(
		'settings' => 'store_corner_display_social_setting',
		'label'    => __('Display Social Icons', 'store-corner'),
		'section'  => 'store_corner_topbar_section',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
	for($i=1; $i<=5; $i++){
	$wp_customize->add_setting('store_corner_social_icon_'.$i, array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_social_icon_'.$i, array(
		'settings' => 'store_corner_social_icon_'.$i,
		'label' => __('Header Social Icon ','store-corner').$i,
		'description' => __( 'Please add <strong>FontAwesome</strong> Class of respective social. Like  <strong>fa fa-facebook</strong>', 'store-corner' ),
		'section' => 'store_corner_topbar_section',
		'active_callback' =>'store_corner_social_active_callback',
		'priority'	=> 24
	));
	
	$wp_customize->add_setting('store_corner_social_link_'.$i, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control('store_corner_social_link_'.$i, array(
		'settings' => 'store_corner_social_link_'.$i,
		'label' => __('Social Icon Link ','store-corner').$i,
		'description' => __( 'Please add Social Icon Link', 'store-corner' ),
		'section' => 'store_corner_topbar_section',
		'active_callback' =>'store_corner_social_active_callback',
		'priority'	=> 24
	));
	}
	
	//Main Panel
	$wp_customize->add_panel( 'store_corner_home_featured_panel', array(
		'priority'       => 25,
		'capability'     => 'edit_theme_options',
		'title'          => __('Front Page Features', 'store-corner' ),
		'description'    => __('Section that will show on Front page', 'store-corner' ),
	) );
	
	//slider
	$wp_customize->add_section( 'store_corner_slider_section' , array(
		'title'       => __( 'Slider', 'store-corner' ),
		'priority'    => 20,
		'description' => __( 'Slider Option', 'store-corner' ),
		'panel'  => 'store_corner_home_featured_panel',
	) );

	$wp_customize->add_setting('store_corner_display_slider_setting', array(
		'default'        => 1,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_slider_control', array(
		'settings' => 'store_corner_display_slider_setting',
		'label'    => __('Display Slider', 'store-corner'),
		'section'  => 'store_corner_slider_section',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
	//  =============================
	//  Select Box               
	//  =============================
	$wp_customize->add_setting('store_corner_category_slider', array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_category',
	));

	$wp_customize->add_control('store_corner_slider_control', array(
		'settings' => 'store_corner_category_slider',
		'type' => 'select',
		'label' => __('Select Category:','store-corner'),
		'section' => 'store_corner_slider_section',
		'active_callback' =>'store_corner_slider_active_callback',
		'choices' => $cats,
		'priority'	=> 25
	));
	
	//new products
	$wp_customize->add_section( 'store_corner_recent_section' , array(
		'title'       => __( 'Recent Products', 'store-corner' ),
		'priority'    => 25,
		'description' => __( 'This is WooCommerce Section. Please Activate WooCommerce Plugin to Enable it.', 'store-corner' ),
		'panel'  => 'store_corner_home_featured_panel',
	) );
	
	$wp_customize->add_setting('store_corner_display_recent_setting', array(
		'default'        => 0,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_recent_control', array(
		'settings' => 'store_corner_display_recent_setting',
		'label'    => __('Display Recent Products', 'store-corner'),
		'section'  => 'store_corner_recent_section',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
	
	$wp_customize->add_setting('store_corner_heading_recent', array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_heading_recent_control', array(
		'settings' => 'store_corner_heading_recent',
		'label' => __('Recent Products Section Heading','store-corner'),
		'section' => 'store_corner_recent_section',
		'active_callback' =>'store_corner_recent_active_callback',
		'priority'	=> 25
	));
	
	//Products Category
	$wp_customize->add_section( 'store_corner_category_section' , array(
		'title'       => __( 'Products Categories', 'store-corner' ),
		'priority'    => 25,
		'description' => __( 'This is WooCommerce Section. Please Activate WooCommerce Plugin to Enable it.', 'store-corner' ),
		'panel'  => 'store_corner_home_featured_panel',
	) );
	
	$wp_customize->add_setting('store_corner_display_cate_setting', array(
		'default'        => 0,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_categories_control', array(
		'settings' => 'store_corner_display_cate_setting',
		'label'    => __('Display Products Categories Section', 'store-corner'),
		'section'  => 'store_corner_category_section',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
	
	$wp_customize->add_setting('store_corner_heading_categories', array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_heading_categories_control', array(
		'settings' => 'store_corner_heading_categories',
		'label' => __('Products Categories Section Heading','store-corner'),
		'section' => 'store_corner_category_section',
		'active_callback' =>'store_corner_category_active_callback',
		'priority'	=> 25
	));
	
	//Products Collection 1
	$wp_customize->add_section( 'store_corner_collection_section' , array(
		'title'       => __( 'Products Collection 1', 'store-corner' ),
		'priority'    => 25,
		'description' => __( 'This is WooCommerce Section. Please Activate WooCommerce Plugin to Enable it.', 'store-corner' ),
		'panel'  => 'store_corner_home_featured_panel',
	) );
	
	$wp_customize->add_setting('store_corner_display_coll1_setting', array(
		'default'        => 0,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_col1_control', array(
		'settings' => 'store_corner_display_coll1_setting',
		'label'    => __('Display Products Collection 1', 'store-corner'),
		'section'  => 'store_corner_collection_section',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
	if(store_corner_is_wc()){
	$wp_customize->add_setting('store_corner_product_cat1', array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_product_cat1_control', array(
		'settings' => 'store_corner_product_cat1',
		'type' => 'select',
		'label' => __('Select Product Category:','store-corner'),
		'section' => 'store_corner_collection_section',
		'active_callback' =>'store_corner_col1_active_callback',
		'choices' => $product_cats,
		'priority'	=> 25
	));
	}
	//Products Collection 2
	$wp_customize->add_section( 'store_corner_collection2_section' , array(
		'title'       => __( 'Products Collection 2', 'store-corner' ),
		'priority'    => 25,
		'description' => __( 'This is WooCommerce Section. Please Activate WooCommerce Plugin to Enable it.', 'store-corner' ),
		'panel'  => 'store_corner_home_featured_panel',
	) );
	
	$wp_customize->add_setting('store_corner_display_coll2_setting', array(
		'default'        => 0,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_col2_control', array(
		'settings' => 'store_corner_display_coll2_setting',
		'label'    => __('Display Products Collection 2', 'store-corner'),
		'section'  => 'store_corner_collection2_section',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
	if(store_corner_is_wc()){
	$wp_customize->add_setting('store_corner_product_cat2', array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_product_cat2_control', array(
		'settings' => 'store_corner_product_cat2',
		'type' => 'select',
		'label' => __('Select Product Category:','store-corner'),
		'section' => 'store_corner_collection2_section',
		'active_callback' =>'store_corner_col2_active_callback',
		'choices' => $product_cats,
		'priority'	=> 25
	));
	}
	
	//blog
	$wp_customize->add_section( 'store_corner_blog_section' , array(
		'title'       => __( 'Blog', 'store-corner' ),
		'priority'    => 25,
		'description' => __( 'Blog Option', 'store-corner' ),
		'panel'  => 'store_corner_home_featured_panel',
	) );

	$wp_customize->add_setting('store_corner_display_blog_setting', array(
		'default'        => 1,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_blog_setting', array(
		'settings' => 'store_corner_display_blog_setting',
		'label'    => __('Display Blog', 'store-corner'),
		'section'  => 'store_corner_blog_section',
		'type'     => 'checkbox',
		'priority'	=> 25
	));
	$wp_customize->add_setting('store_corner_heading_blog', array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_heading_blog', array(
		'settings' => 'store_corner_heading_blog',
		'label' => __('Blog Heading:','store-corner'),
		'section' => 'store_corner_blog_section',
		'active_callback' =>'store_corner_blog_active_callback',
		'priority'	=> 30
	));
	
	//footer
	$wp_customize->add_section( 'store_corner_footer_section' , array(
		'title'       => __( 'Footer', 'store-corner' ),
		'priority'    => 25,
		'description' => __( 'Footer Option', 'store-corner' ),
	) );

	$wp_customize->add_setting('store_corner_footer_credit', array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_footer_credit', array(
		'settings' => 'store_corner_footer_credit',
		'label' => __('Footer Credit Text:','store-corner'),
		'section' => 'store_corner_footer_section',
		'priority'	=> 30
	));
	
	$wp_customize->add_setting('store_corner_footer_company', array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('store_corner_footer_company', array(
		'settings' => 'store_corner_footer_company',
		'label' => __('Footer Company Name:','store-corner'),
		'section' => 'store_corner_footer_section',
		'priority'	=> 30
	));
	
	$wp_customize->add_setting('store_corner_footer_link', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control('store_corner_footer_link', array(
		'settings' => 'store_corner_footer_link',
		'label' => __('Footer Company Link:','store-corner'),
		'section' => 'store_corner_footer_section',
		'priority'	=> 30
	));
}
add_action( 'customize_register', 'store_corner_customize_register' );
	
function store_corner_slider_active_callback() {
	if ( get_theme_mod( 'store_corner_display_slider_setting', 0 ) ) {
		return true;
	}
	return false;
}
function store_corner_recent_active_callback() {
	if ( get_theme_mod( 'store_corner_display_recent_setting', 0 ) ) {
		return true;
	}
	return false;
}
function store_corner_category_active_callback() {
	if ( get_theme_mod( 'store_corner_display_cate_setting', 0 ) ) {
		return true;
	}
	return false;
}
function store_corner_col1_active_callback() {
	if ( get_theme_mod( 'store_corner_display_coll1_setting', 0 ) ) {
		return true;
	}
	return false;
}
function store_corner_col2_active_callback() {
	if ( get_theme_mod( 'store_corner_display_coll2_setting', 0 ) ) {
		return true;
	}
	return false;
}
function store_corner_blog_active_callback() {
	if ( get_theme_mod( 'store_corner_display_blog_setting', 0 ) ) {
		return true;
	}
	return false;
}

function store_corner_topbar_active_callback() {
	if ( get_theme_mod( 'store_corner_display_topbar_setting', 0 ) ) {
		return true;
	}
	return false;
}
function store_corner_social_active_callback() {
	if ( get_theme_mod( 'store_corner_display_social_setting', 0 ) ) {
		return true;
	}
	return false;
}


/**
 * 1Sanitize checkbox
 */

if (!function_exists( 'store_corner_sanitize_checkbox' ) ) :
	function store_corner_sanitize_checkbox( $input ) {
		if ( $input != 1 ) {
			return 0;
		} else {
			return 1;
		}
	}
endif;

/**
 * Sanitize integer input
 */

if ( ! function_exists( 'store_corner_sanitize_category' ) ){
	function store_corner_sanitize_category( $input ) {
		$categories = get_categories();
		$cats = array();
		$i = 0;
		foreach($categories as $category){
			if($i==0){
				$default = $category->slug;
				$i++;
			}
			$cats[$category->slug] = $category->name;
		}
		$valid = $cats;

		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';

		}
	}
}

function store_corner_sanitize_text_field( $str ) {

	return sanitize_text_field( $str );

}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function store_corner_customize_preview_js() {
	wp_enqueue_script( 'store_corner_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'store_corner_customize_preview_js' );