<?php
/**
 * Setup theme options used in customizer.
 *
 * @package ThinkUpThemes
 */

function smarter_thinkup_customizer_theme_options( $wp_customize ) {

	global $smarter_thinkup_prefix;

	$prefix_name = $smarter_thinkup_prefix;

	// ==========================================================================================
	// 1. ADD PANELS / SECTIONS
	// ==========================================================================================

	// Add Upgrade Section
	$wp_customize->add_section(
		new smarter_thinkup_customizer_customswitch_button_link(
			$wp_customize,
			$prefix_name . 'thinkup_customizer_section_upgrade_top',
			array(
				'title'        => __( 'Smarter Pro', 'smarter' ),
				'priority'     => 1,
				'button_text' => __( 'Upgrade Now', 'smarter' ),
				'button_url'  => '//www.thinkupthemes.com/themes/smarter/',
				'button_class' => 'button-primary',
			)
		)
	);

	// Add Documentation Section
	$wp_customize->add_section(
		new smarter_thinkup_customizer_customswitch_button_link(
			$wp_customize,
			$prefix_name . 'thinkup_customizer_section_docs',
			array(
				'title'        => __( 'Documentation', 'smarter' ),
				'priority'     => 1,
				'button_text' => __( 'View Docs', 'smarter' ),
				'button_url'  => admin_url( 'themes.php?page=thinkup-welcome&tab=documentation' ),
				'button_class' => 'button-secondary',
			)
		)
	);

	// Add Theme Options Panel
	$wp_customize->add_panel(
		$prefix_name . 'thinkup_customizer_section_themeoptions',
		array(
			'title'       => __( 'Theme Options', 'smarter' ),
			'description' => __( 'Use the options below to customize your theme!', 'smarter' ),
			'priority'    => 2,
		)
	);

	// Add General Settings Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_generalsettings',
		array(
			'title'    => __( 'General Settings', 'smarter' ),
			'priority' => 10,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Homepage Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_homepage',
		array(
			'title'    => __( 'Homepage', 'smarter' ),
			'priority' => 20,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Homepage (Featured) Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_homepagefeatured',
		array(
			'title'    => __( 'Homepage (Featured)', 'smarter' ),
			'priority' => 30,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Header Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_header',
		array(
			'title'    => __( 'Header', 'smarter' ),
			'priority' => 40,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Footer Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_footer',
		array(
			'title'    => __( 'Footer', 'smarter' ),
			'priority' => 50,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Social Media Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_socialmedia',
		array(
			'title'    => __( 'Social Media', 'smarter' ),
			'priority' => 60,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Blog Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_blog',
		array(
			'title'    => __( 'Blog', 'smarter' ),
			'priority' => 70,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Upgrade (10% off) Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_upgrade_inner',
		array(
			'title'    => __( 'Upgrade (10% off)', 'smarter' ),
			'priority' => 80,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);


	// ==========================================================================================
	// 2. ADD CONTROLS
	// ==========================================================================================

	//----------------------------------------------------
	// 2.1. Add General Settings Controls
	//----------------------------------------------------

	// Add Logo Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_general_heading]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_general_heading',
			array(
				'label'           => __( 'Logo Settings', 'smarter' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_general_heading]',
				'active_callback' => '',
			)
		)
	);

	// Add Logo Info Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_logosetting]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_raw(
			$wp_customize,
			'thinkup_general_logosetting',
			array(
				'label'           => __( 'Since WordPress v4.5 you can now add a site logo using the native WordPress options. To add a site logo go the "Site Identitiy" settings on the main customizer screen.', 'smarter' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_general_logosetting]',
				'active_callback' => '',
			)
		)
	);

	// Add General Page Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_general_page]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_general_page',
			array(
				'label'           => __( 'Page Structure', 'smarter' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_general_page]',
				'active_callback' => '',
			)
		)
	);

	// Add Page Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_general_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_general_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'label'			  => __( 'Page Layout', 'smarter' ),
				'description'	  => __( 'Select page layout. This will only be applied to published Pages.', 'smarter' ),
				'choices'		  => array(
					'option1' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option01.png',
					'option2' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option02.png',
					'option3' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option03.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add General Sidebar Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_sidebars]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_sidebar',
		)
	);
	$wp_customize->add_control(
		'thinkup_general_sidebars',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_general_sidebars]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_generalsettings',
			'type'			  => 'select',
			'label'			  => __( 'Select a Sidebar', 'smarter' ),
			'description'	  => __( 'Choose a sidebar to use with the page layout.', 'smarter' ),
			'choices'		  => smarter_thinkup_customizer_select_array_sidebar(),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Enable Fixed Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_fixedlayoutswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_general_fixedlayoutswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_general_fixedlayoutswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'label'           => __( 'Enable Fixed Layout', 'smarter' ),
				'description'	  => __( '(i.e. Disable responsive layout)', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	// Add Enable Breadcrumbs Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_breadcrumbswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_general_breadcrumbswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_general_breadcrumbswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'label'           => __( 'Enable Breadcrumbs', 'smarter' ),
				'description'	  => __( 'Switch on to enable breadcrumbs.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	// Add Breadcrumb Delimiter Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_breadcrumbdelimeter]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_general_breadcrumbdelimeter',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_general_breadcrumbdelimeter]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_generalsettings',
			'type'			  => 'text',
			'label'			  => __( 'Breadcrumb Delimiter', 'smarter' ),
			'description'	  => __( 'Specify a custom delimiter to use instead of the default &#40; / &#41;.', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);


	//----------------------------------------------------
	// 2.2. Homepage
	//----------------------------------------------------

	// Add Homepage Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_homepage_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
				'label'			  => __( 'Homepage Layout', 'smarter' ),
				'description'	  => __( 'Select page layout. This will only be applied to static homepages (front page) and not to homepage blogs.', 'smarter' ),
				'choices'		  => array(
					'option1' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option01.png',
					'option2' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option02.png',
					'option3' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option03.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add Homepage Select a Sidebar Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sidebars]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_sidebar',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sidebars',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sidebars]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'select',
			'label'			  => __( 'Select a Sidebar', 'smarter' ),
			'description'	  => __( 'Choose a sidebar to use with the layout.', 'smarter' ),
			'choices'		  => smarter_thinkup_customizer_select_array_sidebar(),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Homepage Slider Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_homepage_slider]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_homepage_slider',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_homepage_slider]',
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'label'           => __( 'Homepage Slider', 'smarter' ),
				'active_callback' => '',
			)
		)
	);

	// Add Choose Homepage Slider Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'radio',
			'label'			  => __( 'Choose Homepage Slider', 'smarter' ),
			'description'	  => __( 'Switch on to enable home page slider.', 'smarter' ),
			'choices'		  => array(
				'option4' => 'Image Slider',
				'option3' => 'Disable'
			),
			'active_callback' => '',
		)
	);

	// Add Image Slide 1 - Info
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_info]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_raw(
			$wp_customize,
			'thinkup_homepage_sliderimage1_info',
			array(
				'label'           => __( 'Slide 1', 'smarter' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_info]',
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 1 - Image
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_image][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_homepage_sliderimage1_image',
			array(
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_image][url]',
				'label'	          => '',
				'description'	  => __( 'Image', 'smarter' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 1 - Title
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage1_title',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_title]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => __( 'Title', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Image Slide 1 - Description
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage1_desc',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_desc]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => __( 'Description', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Slide 1 - Page Link
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage1_link',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_link]',
			'type'			  => 'dropdown-pages',
			'label'			  => '',
			'description'	  => __( 'URL', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Image Slide 2 - Info
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_info]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_raw(
			$wp_customize,
			'thinkup_homepage_sliderimage2_info',
			array(
				'label'           => __( 'Slide 2', 'smarter' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_info]',
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 2 - Image
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_image][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_homepage_sliderimage2_image',
			array(
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_image][url]',
				'label'	          => '',
				'description'	  => __( 'Image', 'smarter' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 2 - Title
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage2_title',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_title]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => __( 'Title', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Image Slide 2 - Description
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage2_desc',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_desc]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => __( 'Description', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Slide 2 - Page Link
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage2_link',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_link]',
			'type'			  => 'dropdown-pages',
			'label'			  => '',
			'description'	  => __( 'URL', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Image Slide 3 - Info
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_info]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_raw(
			$wp_customize,
			'thinkup_homepage_sliderimage3_info',
			array(
				'label'           => __( 'Slide 3', 'smarter' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_info]',
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 3 - Image
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_image][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_homepage_sliderimage3_image',
			array(
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_image][url]',
				'label'	          => '',
				'description'	  => __( 'Image', 'smarter' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 3 - Title
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage3_title',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_title]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => __( 'Title', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Image Slide 3 - Description
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage3_desc',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_desc]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => __( 'Description', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Slide 3 - Page Link
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage3_link',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_link]',
			'type'			  => 'dropdown-pages',
			'label'			  => '',
			'description'	  => __( 'URL', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Enable Full-Width Slider Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderpresetwidth]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_homepage_sliderpresetwidth',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderpresetwidth]',
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'label'           => __( 'Enable Full-Width Slider', 'smarter' ),
				'description'	  => __( 'Switch on to enable full-width slider.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Slider Height (Max) Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderpresetheight]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'absint',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderpresetheight',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderpresetheight]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'text',
			'label'			  => __( 'Slider Height (Max)', 'smarter' ),
			'description'	  => __( 'Specify the maximum slider height (px).', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Call To Action - Intro Section Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_homepage_ctaintro]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_homepage_ctaintro',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_homepage_ctaintro]',
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'label'           => __( 'Call To Action - Intro', 'smarter' ),
				'active_callback' => '',
			)
		)
	);

	// Add Homepage - Intro Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'checkbox',
			'label'			  => __( 'Message', 'smarter' ),
			'description'	  => __( 'Check to enable intro on home page.', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Add Homepage - Intro Title Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introaction]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introaction',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introaction]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'text',
			'description'	  => __( 'Enter a <strong>title</strong> message.<br /><br />This will be one of the first messages your visitors see. Use this to get their attention.', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Add Homepage - Intro Teaser Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionteaser]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introactionteaser',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionteaser]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'text',
			'description'	  => __( 'Enter a <strong>teaser</strong> message.<br /><br />Use this to provide more details about what you offer.', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Add Homepage - Intro Button Text Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionbutton]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introactionbutton',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionbutton]',
			'type'			  => 'text',
			'label'	          => __( 'Button Text', 'smarter' ),
			'description'	  => __( 'Input text to display on the action button.', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Add Homepage - Intro Link Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionlink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introactionlink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionlink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'radio',
			'label'			  => __( 'Button - Link', 'smarter' ),
			'description'	  => __( 'Specify whether the action button should link to a page on your site, out to external webpage or disable the link altogether.', 'smarter' ),
			'choices'		  => array(
				'option1' => __( 'Link to a Page', 'smarter' ),
				'option2' => __( 'Specify Custom link', 'smarter' ),
				'option3' => __( 'Disable Link', 'smarter' ),
			),
			'active_callback' => '',
		)
	);

	// Add Homepage - Intro Page Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionpage]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introactionpage',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionpage]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'dropdown-pages',
			'label'			  => __( 'Button - Link to a page', 'smarter' ),
			'description'	  => __( 'Select a target page for action button link.', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Homepage - Intro Custom Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactioncustom]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introactioncustom',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactioncustom]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'text',
			'label'			  => __( 'Button - Custom link', 'smarter' ),
			'description'	  => __( 'Input a custom url for the action button link.<br>Add http:// if linking to an external webpage.', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);


	//----------------------------------------------------
	// 2.3. Homepage (Featured)
	//----------------------------------------------------

	// Add Enable Pre-Made Homepage Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sectionswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_homepage_sectionswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sectionswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
				'label'           => __( 'Enable Pre-Made Homepage', 'smarter' ),
				'description'	  => __( 'switch on to enable pre-designed homepage layout.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	// Add Content Area 1 Icon Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_icon]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_faicons',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section1_icon',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_icon]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'select',
			'label'			  => __( 'Content Area 1', 'smarter' ),
			'description'	  => __( 'Choose an icon for the section background.', 'smarter' ),
			'choices'		  => smarter_thinkup_customizer_select_array_faicons(),
			'active_callback' => '',
		)
	);

	// Add Content Area 1 Title Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section1_title',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_title]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => __( 'Add a title to the section.', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 1 Description Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section1_desc',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_desc]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => __( 'Add some text to featured section 1.', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 1 Link Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section1_link',
		array(
			'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_link]',
			'section'		=> $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			=> 'dropdown-pages',
			'label'			=> __( 'Link to a page', 'smarter' ),
		)
	);

	// Add Content Area 2 Icon Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_icon]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_faicons',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section2_icon',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_icon]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'select',
			'label'			  => __( 'Content Area 2', 'smarter' ),
			'description'	  => __( 'Choose an icon for the section background.', 'smarter' ),
			'choices'		  => smarter_thinkup_customizer_select_array_faicons(),
			'active_callback' => '',
		)
	);

	// Add Content Area 2 Title Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section2_title',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_title]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => __( 'Add a title to the section.', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 2 Description Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section2_desc',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_desc]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => __( 'Add some text to featured section 2.', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 2 Link Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section2_link',
		array(
			'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_link]',
			'section'		=> $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			=> 'dropdown-pages',
			'label'			=> __( 'Link to a page', 'smarter' ),
		)
	);

	// Add Content Area 3 Icon Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_icon]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_faicons',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section3_icon',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_icon]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'select',
			'label'			  => __( 'Content Area 3', 'smarter' ),
			'description'	  => __( 'Choose an icon for the section background.', 'smarter' ),
			'choices'		  => smarter_thinkup_customizer_select_array_faicons(),
			'active_callback' => '',
		)
	);

	// Add Content Area 3 Title Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section3_title',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_title]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => __( 'Add a title to the section.', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 3 Description Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section3_desc',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_desc]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => __( 'Add some text to featured section 3.', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 3 Link Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section3_link',
		array(
			'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_link]',
			'section'		=> $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			=> 'dropdown-pages',
			'label'			=> __( 'Link to a page', 'smarter' ),
		)
	);


	// -----------------------------------------------------------------------------------
	//	3.	Header
	// -----------------------------------------------------------------------------------

	// Add Enable Search (Main Header) Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_searchswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_searchswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_searchswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_header',
				'label'           => __( 'Enable Search (Pre Header)', 'smarter' ),
				'description'	  => __( 'Switch on to enable header search.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);


	//----------------------------------------------------
	// 2.5. Footer
	//----------------------------------------------------

	// Add Footer Widgets Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_footer_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_footer_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_footer_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_footer',
				'label'			  => __( 'Footer Widgets Layout', 'smarter' ),
				'description'	  => __( 'Select footer layout. Take complete control of the footer content by adding widgets.', 'smarter' ),
				'choices'		  => array(
					'option1'  => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option01.png',
					'option2'  => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option02.png',
					'option3'  => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option03.png',
					'option4'  => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option04.png',
					'option5'  => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option05.png',
					'option6'  => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option06.png',
					'option7'  => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option07.png',
					'option8'  => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option08.png',
					'option9'  => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option09.png',
					'option10' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option10.png',
					'option11' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option11.png',
					'option12' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option12.png',
					'option13' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option13.png',
					'option14' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option14.png',
					'option15' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option15.png',
					'option16' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option16.png',
					'option17' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option17.png',
					'option18' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/footer/option18.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add Disable Footer Widgets Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_footer_widgetswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_footer_widgetswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_footer_widgetswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_footer',
			'type'			  => 'checkbox',
			'label'			  => __( 'Disable Footer Widgets', 'smarter' ),
			'description'	  => __( 'Check to disable footer widgets.', 'smarter' ),
			'active_callback' => '',
		)
	);


	//----------------------------------------------------
	// 2.6. Social Media
	//----------------------------------------------------

	// Add Social Media Content Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_socialswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_socialswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_socialswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => __( 'Enable Social Media Links (Pre Header)', 'smarter' ),
				'description'	  => __( 'Switch on to enable links to social media pages.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	// Add Social Media Content Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_header_social]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_header_social',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_header_social]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => __( 'Social Media Content', 'smarter' ),
				'active_callback' => '',
			)
		)
	);

	// Add Social Media Display Message Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_socialmessage]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_socialmessage',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_socialmessage]',
			'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => __( 'Add a message here. E.g. &#34;Follow Us&#34;.<br />(Only shown in header)', 'smarter' ),
			'active_callback' => '',
		)
	);

	// Facebook social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_facebookswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_facebookswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_facebookswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => __( 'Facebook', 'smarter' ),
				'description'	  => __( 'Enable link to Facebook profile.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_facebooklink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_facebooklink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_facebooklink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => __( 'Input the url to your Facebook page.', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_facebookiconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_facebookiconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_facebookiconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => __( 'Custom Icon', 'smarter' ),
			'description'	  => __( 'Check to use custom Facebook icon', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_facebookcustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_facebookcustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_facebookcustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => __( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'smarter' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Twitter social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_twitterswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_twitterswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_twitterswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => __( 'Twitter', 'smarter' ),
				'description'	  => __( 'Enable link to Twitter profile.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_twitterlink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_twitterlink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_twitterlink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => __( 'Input the url to your Twitter page.', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_twittericonswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_twittericonswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_twittericonswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => __( 'Custom Icon', 'smarter' ),
			'description'	  => __( 'Check to use custom Twitter icon', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_twittercustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_twittercustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_twittercustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => __( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'smarter' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Google+ social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_googleswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_googleswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_googleswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => __( 'Google+', 'smarter' ),
				'description'	  => __( 'Enable link to Google+ profile.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_googlelink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_googlelink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_googlelink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => __( 'Input the url to your Google+ page.', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_googleiconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_googleiconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_googleiconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => __( 'Custom Icon', 'smarter' ),
			'description'	  => __( 'Check to use custom Google+ icon', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_googlecustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_googlecustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_googlecustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => __( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'smarter' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Instagram social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_instagramswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_instagramswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_instagramswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => __( 'Instagram', 'smarter' ),
				'description'	  => __( 'Enable link to Instagram profile.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_instagramlink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_instagramlink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_instagramlink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => __( 'Input the url to your Instagram page.', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_instagramiconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_instagramiconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_instagramiconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => __( 'Use Custom Instagram Icon', 'smarter' ),
			'description'	  => __( 'Check to use custom Instagram icon', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_instagramcustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_instagramcustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_instagramcustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => __( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'smarter' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// LinkedIn social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_linkedinswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_linkedinswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_linkedinswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => __( 'LinkedIn', 'smarter' ),
				'description'	  => __( 'Enable link to LinkedIn profile.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_linkedinlink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_linkedinlink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_linkedinlink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => __( 'Input the url to your LinkedIn page.', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_linkediniconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_linkediniconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_linkediniconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => __( 'Custom Icon', 'smarter' ),
			'description'	  => __( 'Check to use custom LinkedIn icon', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_linkedincustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_linkedincustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_linkedincustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => __( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'smarter' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Flickr social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_flickrswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_flickrswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_flickrswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => __( 'Flickr', 'smarter' ),
				'description'	  => __( 'Enable link to Flickr profile.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_flickrlink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_flickrlink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_flickrlink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => __( 'Input the url to your Flickr page.', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_flickriconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_flickriconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_flickriconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => __( 'Custom Icon', 'smarter' ),
			'description'	  => __( 'Check to use custom Flickr icon', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_flickrcustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_flickrcustomicon',
			array(
				'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_header_flickrcustomicon][url]',
				'section'		=> $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	=> __( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'smarter' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// YouTube social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_youtubeswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_youtubeswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_youtubeswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => __( 'YouTube', 'smarter' ),
				'description'	  => __( 'Enable link to YouTube profile.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_youtubelink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_youtubelink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_youtubelink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'     => __( 'Input the url to your YouTube page.', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_youtubeiconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_youtubeiconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_youtubeiconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => __( 'Custom Icon', 'smarter' ),
			'description'	  => __( 'Check to use custom YouTube icon', 'smarter' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_youtubecustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_youtubecustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_youtubecustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => __( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'smarter' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);


	//----------------------------------------------------
	// 2.7. Blog
	//----------------------------------------------------

	// Add Blog Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_blog_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_blog_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_blog_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
				'label'			  => __( 'Blog Layout', 'smarter' ),
				'description'	  => __( 'Select blog page layout. Only applied to the main blog page and not individual posts.', 'smarter' ),
				'choices'		  => array(
					'option1' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option01.png',
					'option2' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option02.png',
					'option3' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option03.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add Blog Select a Sidebar Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_blog_sidebars]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_sidebar',
		)
	);
	$wp_customize->add_control(
		'thinkup_blog_sidebars',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_blog_sidebars]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
			'type'			  => 'select',
			'label'			  => __( 'Select a Sidebar', 'smarter' ),
			'description'	  => __( 'Note: Sidebars will not be applied to homepage Blog. Control sidebars on the homepage from the &#39;Home Settings&#39; option.', 'smarter' ),
			'choices'		  => smarter_thinkup_customizer_select_array_sidebar(),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Post Content Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_blog_postswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		'thinkup_blog_postswitch',
		array(
			'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_blog_postswitch]',
			'section'		=> $prefix_name . 'thinkup_customizer_section_blog',
			'type'			=> 'radio',
			'label'			=> __( 'Post Content', 'smarter' ),
			'description'	=> __( 'Control how much content you want to show from each post on the main blog page. Remember to control the full article content by using the Wordpress <a href="http://en.support.wordpress.com/splitting-content/more-tag/">more</a> tag in your post.', 'smarter' ),
			'choices'		=> array(
				'option1' => __( 'Show excerpt', 'smarter' ),
				'option2' => __( 'Show full article', 'smarter' ),
				'option3' => __( 'Hide article', 'smarter' ),
			)
		)
	);

	// Add Control Single Post Page Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_post_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_post_layout',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_post_layout]',
				'section'         => $prefix_name . 'thinkup_customizer_section_blog',
				'label'           => __( 'Control Single Post Page', 'smarter' ),
				'active_callback' => '',
			)
		)
	);

	// Add Post Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_post_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_post_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_post_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
				'label'			  => __( 'Post Layout', 'smarter' ),
				'description'	  => __( 'Select blog page layout. This will only be applied to individual posts and not the main blog page.', 'smarter' ),
				'choices'		  => array(
					'option1' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option01.png',
					'option2' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option02.png',
					'option3' => trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout/blog/option03.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add Post Select a Sidebar Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_post_sidebars]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_sidebar',
		)
	);
	$wp_customize->add_control(
		'thinkup_post_sidebars',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_post_sidebars]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
			'type'			  => 'select',
			'label'			  => __( 'Select a Sidebar', 'smarter' ),
			'description'	  => __( 'Choose a sidebar to use with the layout.', 'smarter' ),
			'choices'		  => smarter_thinkup_customizer_select_array_sidebar(),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Show Author Bio Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_post_authorbio]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_post_authorbio',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_post_authorbio]',
				'section'         => $prefix_name . 'thinkup_customizer_section_blog',
				'label'           => __( 'Show Author Bio', 'smarter' ),
				'description'	  => __( 'Check to enable the author biography.', 'smarter' ),
				'choices'		  => array(
					'1'      => __( 'On', 'smarter' ),
					'off'    => __( 'Off', 'smarter' ),
				),
				'active_callback' => '',
			)
		)
	);


	//----------------------------------------------------
	// 2.8. Upgrade Section (10% off)
	//----------------------------------------------------

	// Add Upgrade Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_upgrade_content]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'wp_filter_post_kses',
		)
	);
	$wp_customize->add_control(
		new smarter_thinkup_customizer_customcontrol_upgrade_inner(
			$wp_customize,
			'thinkup_upgrade_content',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_upgrade_content]',
				'section'         => $prefix_name . 'thinkup_customizer_section_upgrade_inner',
				'upgrade_url'     => '//www.thinkupthemes.com/themes/smarter/',
				'price_discount'  => __( 'Upgrade for $31 (10% off)', 'smarter' ),
				'price_normal'	  => __( 'Normally $35. Use coupon at checkout.', 'smarter' ),
				'coupon'	      => __( 'smarter31', 'smarter' ),
				'button'	      => __( 'Upgrade Now', 'smarter' ),
				'title_main'	  => __( 'So&hellip; Why upgrade?', 'smarter' ),
				'title_secondary' => __( 'We&#39;re glad you asked! Here&#39;s just some of the amazing features you&#39;ll get when you upgrade&hellip;', 'smarter' ),
				'images'		  => array(
					'%s/admin/main/inc/controls/upgrade_inner/img/1_trusted_team.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/2_page_builder.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/3_premium_support.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/4_theme_options.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/5_shortcodes.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/6_unlimited_colors.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/7_parallax_pages.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/8_typography.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/9_backgrounds.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/10_responsive.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/11_retina_ready.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/12_site_layout.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/13_translation_ready.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/14_rtl_support.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/15_infinite_sidebars.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/16_portfolios.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/17_seo_optimized.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/18_demo_content.png',
				),
				'active_callback' => '',
			)
		)
	);

}
add_action( 'customize_register', 'smarter_thinkup_customizer_theme_options' );