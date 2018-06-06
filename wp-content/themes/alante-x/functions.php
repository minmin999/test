<?php

// ----------------------------------------------------------------------------------
//	Register Front-End Styles And Scripts
// ----------------------------------------------------------------------------------

function alante_thinkup_child_frontscripts() {

	wp_enqueue_style( 'alante-thinkup-style', get_template_directory_uri() . '/style.css', array( 'alante-thinkup-bootstrap' ) );
	wp_enqueue_style( 'alante-thinkup-style-x', get_stylesheet_directory_uri() . '/style.css', array( 'alante-thinkup-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'alante_thinkup_child_frontscripts' );


// ----------------------------------------------------------------------------------
//	Add Google Fonts
// ----------------------------------------------------------------------------------

function alante_thinkup_child_googlefonts_url() {
    $fonts_url = '';

    // Translators: Translate this to 'off' if there are characters in your language that are not supported by google fonts
    $font_translate = _x( 'on', 'Open Sans font: on or off', 'alante' );
 
    if ( 'off' !== $font_translate ) {
        $font_families = array();
  
        if ( 'off' !== $font_translate ) {
            $font_families[] = 'Dancing Script:300,400,600,700';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }
 
    return $fonts_url;
}

function alante_thinkup_child_googlefonts_scripts() {
   wp_enqueue_style( 'alante-thinkup-child-google-fonts', alante_thinkup_child_googlefonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'alante_thinkup_child_googlefonts_scripts' );


// ----------------------------------------------------------------------------------
//	Update Options Array With Child Theme Color Values
// ----------------------------------------------------------------------------------

// Add child theme color values to options array
function alante_thinkup_updateoption_child_settings() {

	// Set theme name combinations
	$name_theme_upper = 'Alante';
	$name_theme_lower = strtolower( $name_theme_upper );

	// Set possible options names
	$name_options_free  = $name_theme_lower . '_thinkup_redux_variables';
	$name_child_color   = $name_theme_lower . '_thinkup_child_color_x';

	// Get options values (theme options)
	$options_free = get_option( $name_options_free );

	// Get child color values
	$options_child_settings = get_option( $name_child_color );

	if( ! empty( $options_free ) ) {

		// Only set child color values if not already set 
		if ( $options_child_settings != 1 ) {

			$options_free['thinkup_styles_skinswitch'] = '1';
			$options_free['thinkup_styles_skin']       = 'x';

			// Add child color to theme options array
			update_option( $name_options_free, $options_free );

		}
	}

	// Set the child color flag
	update_option( $options_child_settings, 1 );

}
add_action( 'init', 'alante_thinkup_updateoption_child_settings', 999 );