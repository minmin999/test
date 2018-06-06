<?php
/**
 * VW Tour Lite Theme Customizer
 *
 * @package VW Tour Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_tour_lite_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_tour_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-tour-lite' ),
	    'description' => __( 'Description of what this panel does.', 'vw-tour-lite' ),
	) );

	//Layouts
	$wp_customize->add_section( 'vw_tour_lite_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'vw-tour-lite' ),
		'priority'   => 30,
		'panel' => 'vw_tour_lite_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_tour_lite_theme_options',array(
	        'default' => '',
	        'sanitize_callback' => 'vw_tour_lite_sanitize_choices'
	    )
    );

	$wp_customize->add_control('vw_tour_lite_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'vw-tour-lite' ),
	        'section' => 'vw_tour_lite_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','vw-tour-lite'),
	            'Right Sidebar' => __('Right Sidebar','vw-tour-lite'),
	            'One Column' => __('One Column','vw-tour-lite'),
	            'Three Columns' => __('Three Columns','vw-tour-lite'),
	            'Four Columns' => __('Four Columns','vw-tour-lite'),
	            'Grid Layout' => __('Grid Layout','vw-tour-lite')
	        ),
	    )
    );

    $font_array = array(
        '' => __( 'No Fonts', 'vw-tour-lite' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-tour-lite' ),
        'Acme' => __( 'Acme', 'vw-tour-lite' ),
        'Anton' => __( 'Anton', 'vw-tour-lite' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-tour-lite' ),
        'Arimo' => __( 'Arimo', 'vw-tour-lite' ),
        'Arsenal' => __( 'Arsenal', 'vw-tour-lite' ),
        'Arvo' => __( 'Arvo', 'vw-tour-lite' ),
        'Alegreya' => __( 'Alegreya', 'vw-tour-lite' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-tour-lite' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-tour-lite' ),
        'Bangers' => __( 'Bangers', 'vw-tour-lite' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-tour-lite' ),
        'Bad Script' => __( 'Bad Script', 'vw-tour-lite' ),
        'Bitter' => __( 'Bitter', 'vw-tour-lite' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-tour-lite' ),
        'BenchNine' => __( 'BenchNine', 'vw-tour-lite' ),
        'Cabin' => __( 'Cabin', 'vw-tour-lite' ),
        'Cardo' => __( 'Cardo', 'vw-tour-lite' ),
        'Courgette' => __( 'Courgette', 'vw-tour-lite' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-tour-lite' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-tour-lite' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-tour-lite' ),
        'Cuprum' => __( 'Cuprum', 'vw-tour-lite' ),
        'Cookie' => __( 'Cookie', 'vw-tour-lite' ),
        'Chewy' => __( 'Chewy', 'vw-tour-lite' ),
        'Days One' => __( 'Days One', 'vw-tour-lite' ),
        'Dosis' => __( 'Dosis', 'vw-tour-lite' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-tour-lite' ),
        'Economica' => __( 'Economica', 'vw-tour-lite' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-tour-lite' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-tour-lite' ),
        'Francois One' => __( 'Francois One', 'vw-tour-lite' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-tour-lite' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-tour-lite' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-tour-lite' ),
        'Handlee' => __( 'Handlee', 'vw-tour-lite' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-tour-lite' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-tour-lite' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-tour-lite' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-tour-lite' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-tour-lite' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-tour-lite' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-tour-lite' ),
        'Kanit' => __( 'Kanit', 'vw-tour-lite' ),
        'Lobster' => __( 'Lobster', 'vw-tour-lite' ),
        'Lato' => __( 'Lato', 'vw-tour-lite' ),
        'Lora' => __( 'Lora', 'vw-tour-lite' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-tour-lite' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-tour-lite' ),
        'Merriweather' => __( 'Merriweather', 'vw-tour-lite' ),
        'Monda' => __( 'Monda', 'vw-tour-lite' ),
        'Montserrat' => __( 'Montserrat', 'vw-tour-lite' ),
        'Muli' => __( 'Muli', 'vw-tour-lite' ),
        'Marck Script' => __( 'Marck Script', 'vw-tour-lite' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-tour-lite' ),
        'Open Sans' => __( 'Open Sans', 'vw-tour-lite' ),
        'Overpass' => __( 'Overpass', 'vw-tour-lite' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-tour-lite' ),
        'Oxygen' => __( 'Oxygen', 'vw-tour-lite' ),
        'Orbitron' => __( 'Orbitron', 'vw-tour-lite' ),
        'Patua One' => __( 'Patua One', 'vw-tour-lite' ),
        'Pacifico' => __( 'Pacifico', 'vw-tour-lite' ),
        'Padauk' => __( 'Padauk', 'vw-tour-lite' ),
        'Playball' => __( 'Playball', 'vw-tour-lite' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-tour-lite' ),
        'PT Sans' => __( 'PT Sans', 'vw-tour-lite' ),
        'Philosopher' => __( 'Philosopher', 'vw-tour-lite' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-tour-lite' ),
        'Poiret One' => __( 'Poiret One', 'vw-tour-lite' ),
        'Quicksand' => __( 'Quicksand', 'vw-tour-lite' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-tour-lite' ),
        'Raleway' => __( 'Raleway', 'vw-tour-lite' ),
        'Rubik' => __( 'Rubik', 'vw-tour-lite' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-tour-lite' ),
        'Russo One' => __( 'Russo One', 'vw-tour-lite' ),
        'Righteous' => __( 'Righteous', 'vw-tour-lite' ),
        'Slabo' => __( 'Slabo', 'vw-tour-lite' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-tour-lite' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-tour-lite'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-tour-lite' ),
        'Sacramento' => __( 'Sacramento', 'vw-tour-lite' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-tour-lite' ),
        'Tangerine' => __( 'Tangerine', 'vw-tour-lite' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-tour-lite' ),
        'VT323' => __( 'VT323', 'vw-tour-lite' ),
        'Varela Round' => __( 'Varela Round', 'vw-tour-lite' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-tour-lite' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-tour-lite' ),
        'Volkhov' => __( 'Volkhov', 'vw-tour-lite' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-tour-lite' )
    );

	//Typography
	$wp_customize->add_section( 'vw_tour_lite_typography', array(
    	'title'      => __( 'Typography', 'vw-tour-lite' ),
		'priority'   => 30,
		'panel' => 'vw_tour_lite_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'vw_tour_lite_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tour_lite_paragraph_color', array(
		'label' => __('Paragraph Color', 'vw-tour-lite'),
		'section' => 'vw_tour_lite_typography',
		'settings' => 'vw_tour_lite_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('vw_tour_lite_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tour_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_tour_lite_paragraph_font_family', array(
	    'section'  => 'vw_tour_lite_typography',
	    'label'    => __( 'Paragraph Fonts','vw-tour-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_tour_lite_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_typography',
		'setting'	=> 'vw_tour_lite_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'vw_tour_lite_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tour_lite_atag_color', array(
		'label' => __('"a" Tag Color', 'vw-tour-lite'),
		'section' => 'vw_tour_lite_typography',
		'settings' => 'vw_tour_lite_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('vw_tour_lite_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tour_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_tour_lite_atag_font_family', array(
	    'section'  => 'vw_tour_lite_typography',
	    'label'    => __( '"a" Tag Fonts','vw-tour-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'vw_tour_lite_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tour_lite_li_color', array(
		'label' => __('"li" Tag Color', 'vw-tour-lite'),
		'section' => 'vw_tour_lite_typography',
		'settings' => 'vw_tour_lite_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('vw_tour_lite_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tour_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_tour_lite_li_font_family', array(
	    'section'  => 'vw_tour_lite_typography',
	    'label'    => __( '"li" Tag Fonts','vw-tour-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'vw_tour_lite_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tour_lite_h1_color', array(
		'label' => __('H1 Color', 'vw-tour-lite'),
		'section' => 'vw_tour_lite_typography',
		'settings' => 'vw_tour_lite_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('vw_tour_lite_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tour_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_tour_lite_h1_font_family', array(
	    'section'  => 'vw_tour_lite_typography',
	    'label'    => __( 'H1 Fonts','vw-tour-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('vw_tour_lite_h1_font_size',array(
		'default'	=> '50px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_h1_font_size',array(
		'label'	=> __('H1 Font Size','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_typography',
		'setting'	=> 'vw_tour_lite_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'vw_tour_lite_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tour_lite_h2_color', array(
		'label' => __('h2 Color', 'vw-tour-lite'),
		'section' => 'vw_tour_lite_typography',
		'settings' => 'vw_tour_lite_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('vw_tour_lite_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tour_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_tour_lite_h2_font_family', array(
	    'section'  => 'vw_tour_lite_typography',
	    'label'    => __( 'h2 Fonts','vw-tour-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('vw_tour_lite_h2_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_h2_font_size',array(
		'label'	=> __('h2 Font Size','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_typography',
		'setting'	=> 'vw_tour_lite_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'vw_tour_lite_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tour_lite_h3_color', array(
		'label' => __('h3 Color', 'vw-tour-lite'),
		'section' => 'vw_tour_lite_typography',
		'settings' => 'vw_tour_lite_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('vw_tour_lite_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tour_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_tour_lite_h3_font_family', array(
	    'section'  => 'vw_tour_lite_typography',
	    'label'    => __( 'h3 Fonts','vw-tour-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('vw_tour_lite_h3_font_size',array(
		'default'	=> '36px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_h3_font_size',array(
		'label'	=> __('h3 Font Size','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_typography',
		'setting'	=> 'vw_tour_lite_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'vw_tour_lite_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tour_lite_h4_color', array(
		'label' => __('h4 Color', 'vw-tour-lite'),
		'section' => 'vw_tour_lite_typography',
		'settings' => 'vw_tour_lite_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('vw_tour_lite_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tour_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_tour_lite_h4_font_family', array(
	    'section'  => 'vw_tour_lite_typography',
	    'label'    => __( 'h4 Fonts','vw-tour-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('vw_tour_lite_h4_font_size',array(
		'default'	=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_h4_font_size',array(
		'label'	=> __('h4 Font Size','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_typography',
		'setting'	=> 'vw_tour_lite_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'vw_tour_lite_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tour_lite_h5_color', array(
		'label' => __('h5 Color', 'vw-tour-lite'),
		'section' => 'vw_tour_lite_typography',
		'settings' => 'vw_tour_lite_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('vw_tour_lite_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tour_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_tour_lite_h5_font_family', array(
	    'section'  => 'vw_tour_lite_typography',
	    'label'    => __( 'h5 Fonts','vw-tour-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('vw_tour_lite_h5_font_size',array(
		'default'	=> '25px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_h5_font_size',array(
		'label'	=> __('h5 Font Size','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_typography',
		'setting'	=> 'vw_tour_lite_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'vw_tour_lite_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tour_lite_h6_color', array(
		'label' => __('h6 Color', 'vw-tour-lite'),
		'section' => 'vw_tour_lite_typography',
		'settings' => 'vw_tour_lite_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('vw_tour_lite_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tour_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_tour_lite_h6_font_family', array(
	    'section'  => 'vw_tour_lite_typography',
	    'label'    => __( 'h6 Fonts','vw-tour-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('vw_tour_lite_h6_font_size',array(
		'default'	=> '18px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_h6_font_size',array(
		'label'	=> __('h6 Font Size','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_typography',
		'setting'	=> 'vw_tour_lite_h6_font_size',
		'type'	=> 'text'
	));

	//contact info
	$wp_customize->add_section('vw_tour_lite_headercont_section',array(
		'title'	=> __('Topbar Contact','vw-tour-lite'),
		'description'	=> __('Add topbar contact details here','vw-tour-lite'),
		'priority'	=> null,
		'panel' => 'vw_tour_lite_panel_id'
	));
	
	$wp_customize->add_setting('vw_tour_lite_cont_phone',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_cont_phone',array(
		'label'	=> __('Add Contact Number','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_headercont_section',
		'setting'	=> 'vw_tour_lite_cont_phone',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('vw_tour_lite_cont_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_cont_email',array(
		'label'	=> __('Add email address here','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_headercont_section',
		'setting'	=> 'vw_tour_lite_cont_email',
		'type'		=> 'text'
	));
	
	//social pannel
	$wp_customize->add_section('vw_tour_lite_social_section',array(
        'title' => __('Social Links','vw-tour-lite'),
        'description'   => '',
        'panel' => 'vw_tour_lite_panel_id',
    ));
	
	$wp_customize->add_setting('vw_tour_lite_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	
	$wp_customize->add_control('vw_tour_lite_facebook_url',array(
		'label'	=> __('Facebook URL','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_social_section',
		'type'		=> 'url'
	));
	
	$wp_customize->add_setting('vw_tour_lite_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	
	$wp_customize->add_control('vw_tour_lite_twitter_url',array(
		'label'	=> __('Twitter URL','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_social_section',
		'type'		=> 'url'
	));
	
	$wp_customize->add_setting('vw_tour_lite_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	
	$wp_customize->add_control('vw_tour_lite_rss_url',array(
		'label'	=> __('RSS URL','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_social_section',
		'type'		=> 'url'
	));
	
	$wp_customize->add_setting('vw_tour_lite_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	
	$wp_customize->add_control('vw_tour_lite_youtube_url',array(
		'label'	=> __('Youtube URL','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_social_section',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'vw_tour_lite_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'vw-tour-lite' ),
		'priority'   => 30,
		'panel' => 'vw_tour_lite_panel_id'
	) );

	for ( $count = 1; $count <= 3; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'vw_tour_lite_slidersettings-page-' . $count, array(
				'default'           => '',
				'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'vw_tour_lite_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'vw-tour-lite' ),
			'section'  => 'vw_tour_lite_slidersettings',
			'type'     => 'dropdown-pages'
		) );

	}

	//OUR services
	$wp_customize->add_section('vw_tour_lite_our_services',array(
		'title'	=> __('Why Choose Us Section','vw-tour-lite'),
		'description'=> __('This section will appear below the slider.','vw-tour-lite'),
		'panel' => 'vw_tour_lite_panel_id',
	));
	
	
	$wp_customize->add_setting('vw_tour_lite_sec1_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_sec1_title',array(
		'label'	=> __('Section Title','vw-tour-lite'),
		'section'=> 'vw_tour_lite_our_services',
		'setting'=> 'vw_tour_lite_sec1_title',
		'type'=> 'text'
	));	

	for ( $count = 0; $count <= 2; $count++ ) {

		$wp_customize->add_setting( 'vw_tour_lite_servicesettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control( 'vw_tour_lite_servicesettings-page-' . $count, array(
			'label'    => __( 'Select Service Page', 'vw-tour-lite' ),
			'section'  => 'vw_tour_lite_our_services',
			'type'     => 'dropdown-pages'
		));
	}

	//Footer Text
	$wp_customize->add_section('vw_tour_lite_footer',array(
		'title'	=> __('Footer Text','vw-tour-lite'),
		'description'=> __('This section will appear in footer.','vw-tour-lite'),
		'panel' => 'vw_tour_lite_panel_id',
	));
	
	
	$wp_customize->add_setting('vw_tour_lite_footer_copy',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_footer_copy',array(
		'label'	=> __('Copyright Text','vw-tour-lite'),
		'section'=> 'vw_tour_lite_footer',
		'setting'=> 'vw_tour_lite_footer_copy',
		'type'=> 'text'
	));	

}
add_action( 'customize_register', 'vw_tour_lite_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_tour_lite_customize {

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
		$manager->register_section_type( 'VW_Tour_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new VW_Tour_Lite_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'VW Tour Pro Theme', 'vw-tour-lite' ),
					'pro_text' => esc_html__( 'Upgrade Pro', 'vw-tour-lite' ),
					'pro_url'  => 'https://www.vwthemes.com/product/vw-tour-theme/'
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new VW_Tour_Lite_Customize_Section_Pro(
				$manager,
				'example_2',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Documentation', 'vw-tour-lite' ),
					'pro_text' => esc_html__( 'Docs', 'vw-tour-lite' ),
					'pro_url'  => admin_url( 'themes.php?page=vw_tour_lite_guide' )
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

		wp_enqueue_script( 'vw-tour-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-tour-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
vw_tour_lite_customize::get_instance();