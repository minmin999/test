<?php
/**
 * fire-blog Theme Customizer
 *
 * @package fire-blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

add_action( 'customize_register', 'fire_blog_upgrade_to_pro_msg' );
function fire_blog_upgrade_to_pro_msg( $wp_customize ){

	require_once get_template_directory() . '/inc/sections/controls.php';

	// Register custom section types.
	$wp_customize->register_section_type( 'Fire_Blog_Customize_section' );

	// Register sections.
	$wp_customize->add_section(
		new Fire_Blog_Customize_section(
			$wp_customize,
			'theme_upsell',
			array(
				'priority' => 1,
			)
		)
	);

}

add_action( 'init', 'fire_blog_setting',999 );

function fire_blog_setting(){

	if ( class_exists( 'kirki' ) ) {

		Kirki::add_config( 'fire-blog', array(
			'capability'    => 'edit_theme_options',
			'option_type'   => 'theme_mod',
		) );

		Kirki::add_panel( 'theme_option', array(
		    'priority'    => 10,
		    'title'       => esc_html__( 'Theme Option', 'fire-blog' ),
		) );

		Kirki::add_section( 'general', array(
		    'title'          => esc_html__( 'General' ,'fire-blog'),
		    'panel' => 'theme_option',
		    'capability'     => 'edit_theme_options',
		) );

		Kirki::add_field( 'fire-blog', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'banner_slider',
			'label'       => esc_attr__( 'Banner / Slider', 'fire-blog' ),
			'section'     => 'general',
			'default'     => 'banner',
			'priority'    => 10,
			'choices'     => array(
				'banner'   => esc_attr__( 'Banner', 'fire-blog' ),
				'slider' => esc_attr__( 'Slider', 'fire-blog' )
			),
		) );

		Kirki::add_field( 'fire-blog', array(
			'type'        => 'text',
			'settings'    => 'banner_title',
			'label'       => esc_attr__( 'Banner Title', 'fire-blog' ),
			'section'     => 'general',
			'default'     => 'FireBlog Lite',
			'priority'    => 10,
			'active_callback'    => array(
				array(
					'setting'  => 'banner_slider', // control in other section
					'operator' => '==',
					'value'    => 'banner',
				),
			),
			'transport' => 'postMessage',
			'partial_refresh' => array(
				'banner_title' => array(
					'selector'        => '.banner_title',
					'render_callback' => 'fire_blog_get_banner_title',
				),
			),
		) );

		Kirki::add_field( 'fire-blog', array(
			'type'        => 'textarea',
			'settings'    => 'banner_subtitle',
			'label'       => esc_attr__( 'Banner Subtitle', 'fire-blog' ),
			'section'     => 'general',
			'default'     => 'Minimal Blog WordPress Theme',
			'priority'    => 10,
			'active_callback'    => array(
				array(
					'setting'  => 'banner_slider', // control in other section
					'operator' => '==',
					'value'    => 'banner',
				),
			),
			'partial_refresh' => array(
				'banner_subtitle' => array(
					'selector'        => '.banner_subtitle',
					'render_callback' => 'fire_blog_get_banner_subtitle',
				),
			),
		) );

		Kirki::add_field( 'fire-blog', array(
			'type'        => 'image',
			'settings'    => 'banner_image_home',
			'label'       => esc_attr__( 'Banner Image', 'fire-blog' ),
			'section'     => 'general',
			'default'     => get_template_directory_uri() . '/images/breadcrum.jpg',
			'priority'    => 10,
			'active_callback'    => array(
				array(
					'setting'  => 'banner_slider', // control in other section
					'operator' => '==',
					'value'    => 'banner',
				),
			)
		) );

		Kirki::add_field( 'fire-blog', array(
			'type'        => 'select',
			'settings'    => 'slider_category',
			'label'       => esc_attr__( 'Select Slider Category' ,'fire-blog' ),
			'section'     => 'general',
			'default'     => '',
			'priority'    => 10,
			'multiple'    => 1,
			'choices'     => fire_blog_all_categories(),
			'active_callback'    => array(
				array(
					'setting'  => 'banner_slider', // control in other section
					'operator' => '==',
					'value'    => 'slider',
				),
			)
		) );

		Kirki::add_field( 'fire-blog', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'homepage_view',
			'label'       => esc_html__( 'Homepage Style', 'fire-blog' ),
			'section'     => 'general',
			'default'     => 'right',
			'priority'    => 10,
			'choices'     => array(
				'right' => esc_attr__( 'Right Sidebar', 'fire-blog' ),
				'left'  => esc_attr__( 'Left Sidebar', 'fire-blog' ),
				'full' => esc_attr__( 'Full', 'fire-blog' ),
				'two'  => esc_attr__( 'Two column', 'fire-blog' ),
				'three'  => esc_attr__( 'Three Column', 'fire-blog' ),
			),
			
		) );

		Kirki::add_field( 'fire-blog', array(
		'type'        => 'repeater',
		'label'       => esc_attr__( 'Social Media Links' ,'fire-blog' ),
		'section'     => 'general',
		'row_label' => array(
			'type' => 'text',
			'value' => esc_attr__( 'Icon' ,'fire-blog' ),
		),
		'settings'    => 'add_social_media_buttons',
		'default'     => array(
			array(
				'link_text' => esc_attr__( 'facebook', 'fire-blog' ),
				'link_url'  => 'https://cyclonethemes.com',
			),
		),
		'fields' => array(
			'link_text' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Enter FontAwesome icon' ,'fire-blog' ),
				'default'     => 'facebook',
				'description' => 'You can get icons from <a href="' . esc_url( 'https://fontawesome.com/v4.7.0/icons/' ) . '" target="_blank">here</a>'
			),
			'link_url' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Link URL' ,'fire-blog' ),
				'description' => esc_attr__( 'This will be the link URL' ,'fire-blog' ),
				'default'     => 'https://cyclonethemes.com',
			),
		)
	) );

		

		Kirki::add_section( 'category', array(
		    'title'          => esc_html__( 'Category Page' ,'fire-blog'),
		    	'panel' => 'theme_option',
		    'capability'     => 'edit_theme_options',
		) );

		Kirki::add_field( 'fire-blog', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'archive_style',
			'label'       => esc_html__( 'Category View', 'fire-blog' ),
			'section'     => 'category',
			'default'     => 'list',
			'priority'    => 10,
			'choices'     => array(
				'list' => esc_attr__( 'List View', 'fire-blog' ),
				'grid'  => esc_attr__( 'Grid View', 'fire-blog' ),
			),
			
		) );

		Kirki::add_section( 'single', array(
		    'title'          => esc_html__( 'Detail Page' ,'fire-blog'),
		    	'panel' => 'theme_option',
		    'capability'     => 'edit_theme_options',
		) );

		Kirki::add_field( 'fire-blog', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'single_style',
			'label'       => esc_html__( 'Layout', 'fire-blog' ),
			'section'     => 'single',
			'default'     => 'half',
			'priority'    => 10,
			'choices'     => array(
				'half' => esc_attr__( 'With Sidebar', 'fire-blog' ),
				'full'  => esc_attr__( 'Full Width', 'fire-blog' ),
			),
			
		) );

		Kirki::add_field( 'fire-blog', array(
		    'type'        => 'radio-buttonset',
		    'settings'    => 'social_icon',
		    'label'       => esc_html__( 'Social Icon Placement', 'fire-blog' ),
		    'section'     => 'single',
		    'default'     => 'bcontent',
		    'priority'    => 10,
		    'choices'     => array(
		      	'btitle' => esc_attr__( 'Below Title', 'fire-blog' ),
		      	'bcontent'  => esc_attr__( 'Below Content', 'fire-blog' ),
		    ),
		    
		) );

		Kirki::add_section( 'footer', array(
	      'title'          => esc_html__( 'Footer' ,'fire-blog'),
	        'panel' => 'theme_option',
	      'capability'     => 'edit_theme_options',
	    ) );
	}
}
