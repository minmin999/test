<?php
/**
 * VW Blog Magazine Theme Customizer
 *
 * @package VW Blog Magazine
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_blog_magazine_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_blog_magazine_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-blog-magazine' ),
	    'description' => __( 'Description of what this panel does.', 'vw-blog-magazine' ),
	) );

	$wp_customize->add_section( 'vw_blog_magazine_left_right', array(
    	'title'      => __( 'General Settings', 'vw-blog-magazine' ),
		'priority'   => 30,
		'panel' => 'vw_blog_magazine_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_blog_magazine_theme_options',array(
	        'default' =>  __( 'One Column', 'vw-blog-magazine' ),
	        'sanitize_callback' => 'vw_blog_magazine_sanitize_choices'	        
	) );
	$wp_customize->add_control('vw_blog_magazine_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'vw-blog-magazine' ),
	        'section' => 'vw_blog_magazine_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','vw-blog-magazine'),
	            'Right Sidebar' => __('Right Sidebar','vw-blog-magazine'),
	            'One Column' => __('One Column','vw-blog-magazine'),
	            'Three Columns' => __('Three Columns','vw-blog-magazine'),
	            'Four Columns' => __('Four Columns','vw-blog-magazine'),
	            'Grid Layout' => __('Grid Layout','vw-blog-magazine')
	        ),
	) );

	$font_array = array(
        '' => __( 'No Fonts', 'vw-blog-magazine' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-blog-magazine' ),
        'Acme' => __( 'Acme', 'vw-blog-magazine' ),
        'Anton' => __( 'Anton', 'vw-blog-magazine' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-blog-magazine' ),
        'Arimo' => __( 'Arimo', 'vw-blog-magazine' ),
        'Arsenal' => __( 'Arsenal', 'vw-blog-magazine' ),
        'Arvo' => __( 'Arvo', 'vw-blog-magazine' ),
        'Alegreya' => __( 'Alegreya', 'vw-blog-magazine' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-blog-magazine' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-blog-magazine' ),
        'Bangers' => __( 'Bangers', 'vw-blog-magazine' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-blog-magazine' ),
        'Bad Script' => __( 'Bad Script', 'vw-blog-magazine' ),
        'Bitter' => __( 'Bitter', 'vw-blog-magazine' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-blog-magazine' ),
        'BenchNine' => __( 'BenchNine', 'vw-blog-magazine' ),
        'Cabin' => __( 'Cabin', 'vw-blog-magazine' ),
        'Cardo' => __( 'Cardo', 'vw-blog-magazine' ),
        'Courgette' => __( 'Courgette', 'vw-blog-magazine' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-blog-magazine' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-blog-magazine' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-blog-magazine' ),
        'Cuprum' => __( 'Cuprum', 'vw-blog-magazine' ),
        'Cookie' => __( 'Cookie', 'vw-blog-magazine' ),
        'Chewy' => __( 'Chewy', 'vw-blog-magazine' ),
        'Days One' => __( 'Days One', 'vw-blog-magazine' ),
        'Dosis' => __( 'Dosis', 'vw-blog-magazine' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-blog-magazine' ),
        'Economica' => __( 'Economica', 'vw-blog-magazine' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-blog-magazine' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-blog-magazine' ),
        'Francois One' => __( 'Francois One', 'vw-blog-magazine' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-blog-magazine' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-blog-magazine' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-blog-magazine' ),
        'Handlee' => __( 'Handlee', 'vw-blog-magazine' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-blog-magazine' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-blog-magazine' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-blog-magazine' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-blog-magazine' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-blog-magazine' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-blog-magazine' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-blog-magazine' ),
        'Kanit' => __( 'Kanit', 'vw-blog-magazine' ),
        'Lobster' => __( 'Lobster', 'vw-blog-magazine' ),
        'Lato' => __( 'Lato', 'vw-blog-magazine' ),
        'Lora' => __( 'Lora', 'vw-blog-magazine' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-blog-magazine' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-blog-magazine' ),
        'Merriweather' => __( 'Merriweather', 'vw-blog-magazine' ),
        'Monda' => __( 'Monda', 'vw-blog-magazine' ),
        'Montserrat' => __( 'Montserrat', 'vw-blog-magazine' ),
        'Muli' => __( 'Muli', 'vw-blog-magazine' ),
        'Marck Script' => __( 'Marck Script', 'vw-blog-magazine' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-blog-magazine' ),
        'Open Sans' => __( 'Open Sans', 'vw-blog-magazine' ),
        'Overpass' => __( 'Overpass', 'vw-blog-magazine' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-blog-magazine' ),
        'Oxygen' => __( 'Oxygen', 'vw-blog-magazine' ),
        'Orbitron' => __( 'Orbitron', 'vw-blog-magazine' ),
        'Patua One' => __( 'Patua One', 'vw-blog-magazine' ),
        'Pacifico' => __( 'Pacifico', 'vw-blog-magazine' ),
        'Padauk' => __( 'Padauk', 'vw-blog-magazine' ),
        'Playball' => __( 'Playball', 'vw-blog-magazine' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-blog-magazine' ),
        'PT Sans' => __( 'PT Sans', 'vw-blog-magazine' ),
        'Philosopher' => __( 'Philosopher', 'vw-blog-magazine' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-blog-magazine' ),
        'Poiret One' => __( 'Poiret One', 'vw-blog-magazine' ),
        'Quicksand' => __( 'Quicksand', 'vw-blog-magazine' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-blog-magazine' ),
        'Raleway' => __( 'Raleway', 'vw-blog-magazine' ),
        'Rubik' => __( 'Rubik', 'vw-blog-magazine' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-blog-magazine' ),
        'Russo One' => __( 'Russo One', 'vw-blog-magazine' ),
        'Righteous' => __( 'Righteous', 'vw-blog-magazine' ),
        'Slabo' => __( 'Slabo', 'vw-blog-magazine' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-blog-magazine' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-blog-magazine'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-blog-magazine' ),
        'Sacramento' => __( 'Sacramento', 'vw-blog-magazine' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-blog-magazine' ),
        'Tangerine' => __( 'Tangerine', 'vw-blog-magazine' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-blog-magazine' ),
        'VT323' => __( 'VT323', 'vw-blog-magazine' ),
        'Varela Round' => __( 'Varela Round', 'vw-blog-magazine' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-blog-magazine' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-blog-magazine' ),
        'Volkhov' => __( 'Volkhov', 'vw-blog-magazine' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-blog-magazine' )
    );

	//Typography
	$wp_customize->add_section( 'vw_blog_magazine_typography', array(
    	'title'      => __( 'Typography', 'vw-blog-magazine' ),
		'priority'   => 30,
		'panel' => 'vw_blog_magazine_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'vw_blog_magazine_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_blog_magazine_paragraph_color', array(
		'label' => __('Paragraph Color', 'vw-blog-magazine'),
		'section' => 'vw_blog_magazine_typography',
		'settings' => 'vw_blog_magazine_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('vw_blog_magazine_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_blog_magazine_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_blog_magazine_paragraph_font_family', array(
	    'section'  => 'vw_blog_magazine_typography',
	    'label'    => __( 'Paragraph Fonts','vw-blog-magazine'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_blog_magazine_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_blog_magazine_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_typography',
		'setting'	=> 'vw_blog_magazine_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'vw_blog_magazine_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_blog_magazine_atag_color', array(
		'label' => __('"a" Tag Color', 'vw-blog-magazine'),
		'section' => 'vw_blog_magazine_typography',
		'settings' => 'vw_blog_magazine_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('vw_blog_magazine_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_blog_magazine_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_blog_magazine_atag_font_family', array(
	    'section'  => 'vw_blog_magazine_typography',
	    'label'    => __( '"a" Tag Fonts','vw-blog-magazine'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'vw_blog_magazine_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_blog_magazine_li_color', array(
		'label' => __('"li" Tag Color', 'vw-blog-magazine'),
		'section' => 'vw_blog_magazine_typography',
		'settings' => 'vw_blog_magazine_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('vw_blog_magazine_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_blog_magazine_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_blog_magazine_li_font_family', array(
	    'section'  => 'vw_blog_magazine_typography',
	    'label'    => __( '"li" Tag Fonts','vw-blog-magazine'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'vw_blog_magazine_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_blog_magazine_h1_color', array(
		'label' => __('H1 Color', 'vw-blog-magazine'),
		'section' => 'vw_blog_magazine_typography',
		'settings' => 'vw_blog_magazine_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('vw_blog_magazine_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_blog_magazine_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_blog_magazine_h1_font_family', array(
	    'section'  => 'vw_blog_magazine_typography',
	    'label'    => __( 'H1 Fonts','vw-blog-magazine'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('vw_blog_magazine_h1_font_size',array(
		'default'	=> '50px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_blog_magazine_h1_font_size',array(
		'label'	=> __('H1 Font Size','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_typography',
		'setting'	=> 'vw_blog_magazine_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'vw_blog_magazine_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_blog_magazine_h2_color', array(
		'label' => __('h2 Color', 'vw-blog-magazine'),
		'section' => 'vw_blog_magazine_typography',
		'settings' => 'vw_blog_magazine_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('vw_blog_magazine_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_blog_magazine_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_blog_magazine_h2_font_family', array(
	    'section'  => 'vw_blog_magazine_typography',
	    'label'    => __( 'h2 Fonts','vw-blog-magazine'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('vw_blog_magazine_h2_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_blog_magazine_h2_font_size',array(
		'label'	=> __('h2 Font Size','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_typography',
		'setting'	=> 'vw_blog_magazine_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'vw_blog_magazine_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_blog_magazine_h3_color', array(
		'label' => __('h3 Color', 'vw-blog-magazine'),
		'section' => 'vw_blog_magazine_typography',
		'settings' => 'vw_blog_magazine_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('vw_blog_magazine_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_blog_magazine_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_blog_magazine_h3_font_family', array(
	    'section'  => 'vw_blog_magazine_typography',
	    'label'    => __( 'h3 Fonts','vw-blog-magazine'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('vw_blog_magazine_h3_font_size',array(
		'default'	=> '36px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_blog_magazine_h3_font_size',array(
		'label'	=> __('h3 Font Size','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_typography',
		'setting'	=> 'vw_blog_magazine_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'vw_blog_magazine_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_blog_magazine_h4_color', array(
		'label' => __('h4 Color', 'vw-blog-magazine'),
		'section' => 'vw_blog_magazine_typography',
		'settings' => 'vw_blog_magazine_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('vw_blog_magazine_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_blog_magazine_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_blog_magazine_h4_font_family', array(
	    'section'  => 'vw_blog_magazine_typography',
	    'label'    => __( 'h4 Fonts','vw-blog-magazine'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('vw_blog_magazine_h4_font_size',array(
		'default'	=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_blog_magazine_h4_font_size',array(
		'label'	=> __('h4 Font Size','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_typography',
		'setting'	=> 'vw_blog_magazine_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'vw_blog_magazine_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_blog_magazine_h5_color', array(
		'label' => __('h5 Color', 'vw-blog-magazine'),
		'section' => 'vw_blog_magazine_typography',
		'settings' => 'vw_blog_magazine_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('vw_blog_magazine_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_blog_magazine_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_blog_magazine_h5_font_family', array(
	    'section'  => 'vw_blog_magazine_typography',
	    'label'    => __( 'h5 Fonts','vw-blog-magazine'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('vw_blog_magazine_h5_font_size',array(
		'default'	=> '25px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_blog_magazine_h5_font_size',array(
		'label'	=> __('h5 Font Size','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_typography',
		'setting'	=> 'vw_blog_magazine_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'vw_blog_magazine_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_blog_magazine_h6_color', array(
		'label' => __('h6 Color', 'vw-blog-magazine'),
		'section' => 'vw_blog_magazine_typography',
		'settings' => 'vw_blog_magazine_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('vw_blog_magazine_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_blog_magazine_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_blog_magazine_h6_font_family', array(
	    'section'  => 'vw_blog_magazine_typography',
	    'label'    => __( 'h6 Fonts','vw-blog-magazine'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('vw_blog_magazine_h6_font_size',array(
		'default'	=> '18px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_blog_magazine_h6_font_size',array(
		'label'	=> __('h6 Font Size','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_typography',
		'setting'	=> 'vw_blog_magazine_h6_font_size',
		'type'	=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('vw_blog_magazine_topbar_header',array(
		'title'	=> __('Social Icon Section','vw-blog-magazine'),
		'description'	=> __('Add Header Content here','vw-blog-magazine'),
		'priority'	=> null,
		'panel' => 'vw_blog_magazine_panel_id',
	));

	$wp_customize->add_setting('vw_blog_magazine_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('vw_blog_magazine_facebook_url',array(
		'label'	=> __('Add Facebook link','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_topbar_header',
		'setting'	=> 'vw_blog_magazine_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('vw_blog_magazine_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('vw_blog_magazine_twitter_url',array(
		'label'	=> __('Add Twitter link','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_topbar_header',
		'setting'	=> 'vw_blog_magazine_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('vw_blog_magazine_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('vw_blog_magazine_insta_url',array(
		'label'	=> __('Add Instagram link','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_topbar_header',
		'setting'	=> 'vw_blog_magazine_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('vw_blog_magazine_linkdin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('vw_blog_magazine_linkdin_url',array(
		'label'	=> __('Add Linkdin link','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_topbar_header',
		'setting'	=> 'vw_blog_magazine_linkdin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('vw_blog_magazine_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('vw_blog_magazine_youtube_url',array(
		'label'	=> __('Add Youtube link','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_topbar_header',
		'setting'	=> 'vw_blog_magazine_youtube_url',
		'type'		=> 'url'
	));	
	
	//Our Blog Category section
  	$wp_customize->add_section('vw_blog_magazine_category_section',array(
	    'title' => __('Category Section','vw-blog-magazine'),
	    'description' => '',
	    'priority'  => null,
	    'panel' => 'vw_blog_magazine_panel_id',
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

	$wp_customize->add_setting('vw_blog_magazine_category',array(
	    'default' => 'select',
	    'sanitize_callback' => 'vw_blog_magazine_sanitize_choices',
  	));

  	$wp_customize->add_control('vw_blog_magazine_category',array(
	    'type'    => 'select',
	    'choices' => $cats,
	    'label' => __('Select Category to display Latest Post','vw-blog-magazine'),
	    'section' => 'vw_blog_magazine_category_section',
	));

	//Category section 2
  	$wp_customize->add_section('vw_blog_magazine_cat_two_sec',array(
	    'title' => __('Category section 2','vw-blog-magazine'),
	    'description' => '',
	    'priority'  => null,
	    'panel' => 'vw_blog_magazine_panel_id',
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

	$wp_customize->add_setting('vw_blog_magazine_section_two',array(
	    'default' => 'select',
	    'sanitize_callback' => 'vw_blog_magazine_sanitize_choices',
  	));

  	$wp_customize->add_control('vw_blog_magazine_section_two',array(
	    'type'    => 'select',
	    'choices' => $cats,
	    'label' => __('Select Category to display Latest Post','vw-blog-magazine'),
	    'section' => 'vw_blog_magazine_cat_two_sec',
	));

	//footer
	$wp_customize->add_section('vw_blog_magazine_footer_section',array(
		'title'	=> __('Footer Text','vw-blog-magazine'),
		'description'	=> __('Add some text for footer like copyright etc.','vw-blog-magazine'),
		'priority'	=> null,
		'panel' => 'vw_blog_magazine_panel_id',
	));
	
	$wp_customize->add_setting('vw_blog_magazine_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_blog_magazine_footer_copy',array(
		'label'	=> __('Copyright Text','vw-blog-magazine'),
		'section'	=> 'vw_blog_magazine_footer_section',
		'type'		=> 'text'
	));
	/** home page setions end here**/	
}
add_action( 'customize_register', 'vw_blog_magazine_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_blog_magazine_customize {

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
		$manager->register_section_type( 'VW_Blog_Magazine_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new VW_Blog_Magazine_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Premium Blog Theme', 'vw-blog-magazine' ),
					'pro_text' => esc_html__( 'Upgrade Pro',         'vw-blog-magazine' ),
					'pro_url'  => 'https://www.vwthemes.com/themes/best-premium-wordpress-blog-theme/'
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new VW_Blog_Magazine_Customize_Section_Pro(
				$manager,
				'example_2',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Documentation', 'vw-blog-magazine' ),
					'pro_text' => esc_html__( 'Docs', 'vw-blog-magazine' ),
					'pro_url'  => admin_url( 'themes.php?page=vw_blog_magazine_guide' )
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

		wp_enqueue_script( 'vw-blog-magazine-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-blog-magazine-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
vw_blog_magazine_customize::get_instance();