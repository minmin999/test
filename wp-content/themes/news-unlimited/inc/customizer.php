<?php
/**
 * news-unlimited Theme Customizer
 *
 * @package news-unlimited
 */

add_action( 'customize_register', 'news_unlimited_upgrade_to_pro_msg' );
function news_unlimited_upgrade_to_pro_msg( $wp_customize ){

	require_once get_template_directory() . '/inc/sections/controls.php';

	// Register custom section types.
	$wp_customize->register_section_type( 'News_Unlimited_Customize_section' );

	// Register sections.
	$wp_customize->add_section(
		new News_Unlimited_Customize_section(
			$wp_customize,
			'theme_upsell',
			array(
				'priority' => 1,
			)
		)
	);

}

add_action( 'init' , 'news_unlimited_kirki_fields' );

function news_unlimited_kirki_fields(){

	if( class_exists( 'kirki' ) ){
		Kirki::add_config( 'news-unlimited', array(
			'capability'    => 'edit_theme_options',
			'option_type'   => 'theme_mod',
		) );

		Kirki::add_panel( 'theme_option', array(
		    'priority'    => 10,
		    'title'       => esc_html__( 'Theme Option', 'news-unlimited' ),
		) );

		Kirki::add_section( 'header', array(
		    'title'          => esc_html__( 'Header' ,'news-unlimited'),
		    // 'description'    => __( 'Add custom CSS here' ),
		    	'panel' => 'theme_option',
		    'capability'     => 'edit_theme_options',
		) );


		Kirki::add_field( 'news-unlimited', array(
			'type'     => 'text',
			'settings' => 'write_top_headline',
			'label'    => esc_attr__( 'Headline Label' ,'news-unlimited' ),
			'section'  => 'Header',
			'default'  => '',
			'partial_refresh' => array(
		      	'write_top_headline' => array(
		          	'selector'        => '.write_top_headline',
		          	'render_callback' => 'news_unlimited_top_headline_label',
		      	),
		  	),
		) );

		Kirki::add_field( 'news-unlimited', array(
			'type'        => 'select',
			'settings'    => 'select_headline_category',
			'label'       => esc_attr__( 'Select Headline Category' ,'news-unlimited' ),
			'section'     => 'Header',
			'default'     => '',
			'priority'    => 10,
			'multiple'    => 1,
			'choices'     => news_unlimited_getAllCategories(),
		) );

		Kirki::add_field( 'news-unlimited', array(
			'type'        => 'image',
			'settings'    => 'news-unlimited_side_ad_image',
			'label'       => esc_attr__( 'Header Ad Image' ,'news-unlimited'),
			'description' => esc_html__( 'Upload 751x91 dimensional Ad Banner', 'news-unlimited' ),
			'section'     => 'Header',
			'default'     => '',
		) );

		Kirki::add_field( 'news-unlimited', array(
			'type'     => 'text',
			'settings' => 'link_of_ad',
			'label'    => esc_html__( 'Ad links' ,'news-unlimited' ),
			'section'  => 'Header',
			'default'  => '',
		) );

		Kirki::add_field( 'news-unlimited', array(
			'type'        => 'repeater',
			'label'       => esc_attr__( 'Social Media Links' ,'news-unlimited' ),
			'section'     => 'Header',
			'row_label' => array(
				'type' => 'text',
				'value' => esc_attr__( 'Social Media','news-unlimited' ),
			),
			'settings'    => 'add_social_media_buttons',
			'default'     => array(
				array(
					'link_text' => 'fa fa-facebook',
					'link_url'  => '#',
				),
			),
			'fields' => array(
				'link_text' => array(
					'type'        => 'text',
					'label'       => esc_attr__( 'Icon' ,'news-unlimited' ),
					'description' => esc_attr__( 'You can use the icons from here http://fontawesome.io/icons/ eg. fa fa-facebook' ,'news-unlimited' ),
				),
				'link_url' => array(
					'type'        => 'text',
					'label'       => esc_attr__( 'Link URL' ,'news-unlimited' ),
					'description' => esc_attr__( 'This will be the social link URL' ,'news-unlimited' ),
					'default'     => '',
				),
			)
		) );

		Kirki::add_section( 'homepage', array(
		    'title'          => esc_html__( 'Homepage' ,'news-unlimited' ),
		    'panel'			 => 'theme_option',
		    'capability'     => 'edit_theme_options',
		) );
		
		Kirki::add_field( 'news-unlimited', array(
			'type'        => 'checkbox',
			'settings'    => 'hide_slider_checkbox',
			'label'       => esc_attr__( 'Show Slider', 'news-unlimited' ),
			'section'     => 'homepage',
			'priority'    => 10,
			// 'choices'	  => news_unlimited_getAllCategories(),
		) );

		Kirki::add_field( 'news-unlimited', array(
			'type'        => 'select',
			'settings'    => 'select_slider_category',
			'label'       => esc_attr__( 'Select Slider Category' ,'news-unlimited' ),
			'section'     => 'homepage',
			'default'     => '',
			'priority'    => 10,
			'multiple'    => 1,
			'choices'     => news_unlimited_getAllCategories(),
			'active_callback'    => array(
			          array(
			                  'setting'  => 'hide_slider_checkbox',
			                  'operator' => '==',
			                  'value'    => 1,
			          ),
			  ),
		) );

		  Kirki::add_field( 'news-unlimited', array(
		    'type'        => 'radio-buttonset',
		    'settings'    => 'slider_style',
		    'label'       => esc_html__( 'Slider Style ', 'news-unlimited' ),
		    'section'     => 'homepage',
		    'default'     => '3',
		    'priority'    => 10,
		    'choices'     => array(
		      '2' => esc_attr__( 'Two Column', 'news-unlimited' ),
		      '3'  => esc_attr__( 'Three Column', 'news-unlimited' ),
		    ),
		    'active_callback'    => array(
		        array(
		            'setting'  => 'hide_slider_checkbox',
		            'operator' => '==',
		            'value'    => 1,
		        ),
			),
		  ) );

		Kirki::add_section( 'single', array(
		    'title'          => esc_html__( 'Single Page' ,'news-unlimited'),
		    	'panel' => 'theme_option',
		    'capability'     => 'edit_theme_options',
		) );

		Kirki::add_field( 'news-unlimited', array(
			'type'        => 'checkbox',
			'settings'    => 'show_sidebar_checkbox',
			'label'       => esc_attr__( 'Show Sidebar', 'news-unlimited' ),
			'section'     => 'Single',
			'priority'    => 10,
			'default'     => true
		) );

		Kirki::add_section( 'category', array(
		    'title'          => esc_html__( 'Category Page' ,'news-unlimited'),
		    	'panel' => 'theme_option',
		    'capability'     => 'edit_theme_options',
		) );

		Kirki::add_field( 'news-unlimited', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'grid_and_row_view',
			'label'       => esc_html__( 'Choose your category page view ', 'news-unlimited' ),
			'section'     => 'category',
			'default'     => 'green',
			'priority'    => 10,
			'choices'     => array(
				'green' => esc_attr__( 'Grid View', 'news-unlimited' ),
				'blue'  => esc_attr__( 'Row View', 'news-unlimited' ),
			),
		) );

		Kirki::add_section( 'general', array(
		    'title'          => esc_html__( 'General' ,'news-unlimited'),
		    'panel' => 'theme_option',
		    'capability'     => 'edit_theme_options',
		    'priority' => 1
			) );

		Kirki::add_field( 'news-unlimited', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'left_or_right_sidebar',
			'label'       => esc_html__( 'Sidebar', 'news-unlimited' ),
			'section'     => 'general',
			'default'     => 'right',
			'priority'    => 10,
			'choices'     => array(
				'left'  => esc_attr__( 'Left Sidebar', 'news-unlimited' ),
				'right' => esc_attr__( 'Right Sidebar', 'news-unlimited' ),
			),
		) );

		Kirki::add_field( 'news-unlimited', array(
			'type'        => 'number',
			'settings'    => 'words_limit',
			'label'       => esc_attr__( 'Words Limit', 'news-unlimited' ),
			'section'     => 'general',
			'default'     => 30,
			'description' => esc_attr__( 'No. of words to show in the category page and in homepage blogs.', 'news-unlimited' ),
			'choices'     => array(
				'min'  => 1,
				'max'  => 100,
				'step' => 5
			),
		) );
	}
	
}