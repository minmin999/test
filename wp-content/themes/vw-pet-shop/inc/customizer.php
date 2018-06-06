<?php
/**
 * VW Pet Shop Theme Customizer
 *
 * @package VW Pet Shop
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_pet_shop_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_pet_shop_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-pet-shop' ),
	    'description' => __( 'Description of what this panel does.', 'vw-pet-shop' ),
	) );

	$wp_customize->add_section( 'vw_pet_shop_left_right', array(
    	'title'      => __( 'General Settings', 'vw-pet-shop' ),
		'priority'   => 30,
		'panel' => 'vw_pet_shop_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_pet_shop_theme_options',array(
        'default' => __('Right Sidebar','vw-pet-shop'),
        'sanitize_callback' => 'vw_pet_shop_sanitize_choices'	        
	));
	$wp_customize->add_control('vw_pet_shop_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','vw-pet-shop'),
        'section' => 'vw_pet_shop_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-pet-shop'),
            'Right Sidebar' => __('Right Sidebar','vw-pet-shop'),
            'One Column' => __('One Column','vw-pet-shop'),
            'Three Columns' => __('Three Columns','vw-pet-shop'),
            'Four Columns' => __('Four Columns','vw-pet-shop'),
            'Grid Layout' => __('Grid Layout','vw-pet-shop')
        ),
	)   );
    
	//Topbar section
	$wp_customize->add_section('vw_pet_shop_topbar',array(
		'title'	=> __('Topbar Section','vw-pet-shop'),
		'description'	=> __('Add Header Content here','vw-pet-shop'),
		'priority'	=> null,
		'panel' => 'vw_pet_shop_panel_id',
	));
	
	$wp_customize->add_setting('vw_pet_shop_header_callnumber',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_pet_shop_header_callnumber',array(
		'label'	=> __('Add Contact Details','vw-pet-shop'),
		'section'	=> 'vw_pet_shop_topbar',
		'setting'	=> 'vw_pet_shop_header_callnumber',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_pet_shop_header_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_pet_shop_header_email_address',array(
		'label'	=> __('Add Email Address','vw-pet-shop'),
		'section'	=> 'vw_pet_shop_topbar',
		'setting'	=> 'vw_pet_shop_header_email_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_pet_shop_header_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_pet_shop_header_time',array(
		'label'	=> __('Add Time','vw-pet-shop'),
		'section'	=> 'vw_pet_shop_topbar',
		'setting'	=> 'vw_pet_shop_header_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_pet_shop_header_myaccount_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('vw_pet_shop_header_myaccount_url',array(
		'label'	=> __('Add My Account Page Link','vw-pet-shop'),
		'section'	=> 'vw_pet_shop_topbar',
		'setting'	=> 'vw_pet_shop_header_myaccount_url',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'vw_pet_shop_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'vw-pet-shop' ),
		'priority'   => 30,
		'panel' => 'vw_pet_shop_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {
		// Add color scheme setting and control.
		$wp_customize->add_setting( 'vw_pet_shop_slidersettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'vw_pet_shop_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'vw-pet-shop' ),
			'section'  => 'vw_pet_shop_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//Pet Collection
	$wp_customize->add_section('vw_pet_shop_products',array(
		'title'	=> __('Pets Collection','vw-pet-shop'),
		'description'=> __('This section will appear below the slider.','vw-pet-shop'),
		'panel' => 'vw_pet_shop_panel_id',
	));
	
	$wp_customize->add_setting('vw_pet_shop_maintitle',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_pet_shop_maintitle',array(
		'label'	=> __('Section Title','vw-pet-shop'),
		'section'=> 'vw_pet_shop_products',
		'setting'=> 'vw_pet_shop_maintitle',
		'type'=> 'text'
	));	

	for ( $count = 0; $count <= 0; $count++ ) {

		$wp_customize->add_setting( 'vw_pet_shop_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control( 'vw_pet_shop_page' . $count, array(
			'label'    => __( 'Select Page', 'vw-pet-shop' ),
			'section'  => 'vw_pet_shop_products',
			'type'     => 'dropdown-pages'
		));
	}

	//Footer Text
	$wp_customize->add_section('vw_pet_shop_footer',array(
		'title'	=> __('Footer','vw-pet-shop'),
		'description'=> __('This section will appear in the footer','vw-pet-shop'),
		'panel' => 'vw_pet_shop_panel_id',
	));	
	
	$wp_customize->add_setting('vw_pet_shop_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_pet_shop_footer_text',array(
		'label'	=> __('Copyright Text','vw-pet-shop'),
		'section'=> 'vw_pet_shop_footer',
		'setting'=> 'vw_pet_shop_footer_text',
		'type'=> 'text'
	));	
}

add_action( 'customize_register', 'vw_pet_shop_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_pet_shop_customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Pet_Shop_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new VW_Pet_Shop_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'VW Pet Pro', 'vw-pet-shop' ),
					'pro_text' => esc_html__( 'Upgrade Pro', 'vw-pet-shop' ),
					'pro_url'  => 'https://www.vwthemes.com/themes/premium-pet-wordpress-theme/'
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-pet-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-pet-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
vw_pet_shop_customize::get_instance();