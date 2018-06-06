<?php
/**
 * TS Charity Theme Customizer
 *
 * @package ts-charity
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ts_charity_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'ts_charity_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'ts-charity' ),
	    'description' => __( 'Description of what this panel does.', 'ts-charity' ),
	) );

	//Layouts
	$wp_customize->add_section( 'ts_charity_left_right', array(
    	'title'      => __( 'Layout Settings', 'ts-charity' ),
		'priority'   => 30,
		'panel' => 'ts_charity_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('ts_charity_layout_options',array(
	        'default' => __('Right Sidebar','ts-charity'),
	        'sanitize_callback' => 'ts_charity_sanitize_choices'	        
	)  );
	$wp_customize->add_control('ts_charity_layout_options',
	    array(
	        'type' => 'radio',
	        'label' => __('Change Layouts','ts-charity'),
	        'section' => 'ts_charity_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','ts-charity'),
	            'Right Sidebar' => __('Right Sidebar','ts-charity'),
	            'One Column' => __('One Column','ts-charity'),
	            'Three Columns' => __('Three Columns','ts-charity'),
	            'Four Columns' => __('Four Columns','ts-charity'),
	            'Grid Layout' => __('Grid Layout','ts-charity')
	        ),
	) );

	//Top Bar
	$wp_customize->add_section('ts_charity_topbar_header',array(
		'title'	=> __('Top Bar Section','ts-charity'),
		'description'	=> __('Add Top Bar Content here','ts-charity'),
		'priority'	=> null,
		'panel' => 'ts_charity_panel_id',
	) );

	$wp_customize->add_setting('ts_charity_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_charity_youtube_url',array(
		'label'	=> __('Add Youtube link','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_youtube_url',
		'type'		=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );
	$wp_customize->add_control('ts_charity_facebook_url',array(
		'label'	=> __('Add Facebook link','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_facebook_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_charity_twitter_url',array(
		'label'	=> __('Add Twitter link','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_twitter_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_charity_rss_url',array(
		'label'	=> __('Add RSS link','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_rss_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_charity_insta_url',array(
		'label'	=> __('Add Instagram link','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_insta_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_pint_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_charity_pint_url',array(
		'label'	=> __('Add Pintrest link','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_pint_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_charity_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_charity_call',array(
		'label'	=> __('Add Phone Number','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_call',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ts_charity_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_time',array(
		'label'	=> __('Add Time','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ts_charity_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_charity_email',array(
		'label'	=> __('Add Email','ts-charity'),
		'section'	=> 'ts_charity_topbar_header',
		'setting'	=> 'ts_charity_email',
		'type'		=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'ts_charity_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'ts-charity' ),
		'priority'   => null,
		'panel' => 'ts_charity_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'ts_charity_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'ts_charity_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'ts-charity' ),
			'section'  => 'ts_charity_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//Our Causes
	$wp_customize->add_section('ts_charity_causes_section',array(
		'title'	=> __('Our Causes','ts-charity'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'ts_charity_panel_id',
	));
	
	$wp_customize->add_setting('ts_charity_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('ts_charity_title',array(
		'label'	=> __('Title','ts-charity'),
		'section'	=> 'ts_charity_causes_section',
		'type'	=> 'text'
	));

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

	$wp_customize->add_setting('ts_charity_causes_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('ts_charity_causes_category',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Select Category to display Latest Post','ts-charity'),
		'section' => 'ts_charity_causes_section',
	));

	//footer
	$wp_customize->add_section('ts_charity_footer_section',array(
		'title'	=> __('Footer Text','ts-charity'),
		'description'	=> __('Add some text for footer like copyright etc.','ts-charity'),
		'priority'	=> null,
		'panel' => 'ts_charity_panel_id',
	));
	
	$wp_customize->add_setting('ts_charity_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('ts_charity_footer_copy',array(
		'label'	=> __('Copyright Text','ts-charity'),
		'section'	=> 'ts_charity_footer_section',
		'type'		=> 'text'
	));
}
add_action( 'customize_register', 'ts_charity_customize_register' );	


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class ts_charity_customize {

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
		$manager->register_section_type( 'TS_Charity_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new TS_Charity_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Charity Pro Theme', 'ts-charity' ),
					'pro_text' => esc_html__( 'Go Pro',         'ts-charity' ),
					'pro_url'  => 'https://www.themeshopy.com/themes/premium-charity-wordpress-theme/'
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

		wp_enqueue_script( 'ts-charity-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'ts-charity-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
ts_charity_customize::get_instance();