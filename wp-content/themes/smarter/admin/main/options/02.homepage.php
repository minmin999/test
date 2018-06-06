<?php
/**
 * Homepage functions.
 *
 * @package ThinkUpThemes
 */

/* ----------------------------------------------------------------------------------
	ENABLE SLIDER - HOMEPAGE & INNER-PAGES
---------------------------------------------------------------------------------- */

// Add full width slider class to body
function smarter_thinkup_input_sliderclass($classes){

// Get theme options values.
$thinkup_homepage_sliderswitch      = smarter_thinkup_var ( 'thinkup_homepage_sliderswitch' );
$thinkup_homepage_sliderpresetwidth = smarter_thinkup_var ( 'thinkup_homepage_sliderpresetwidth' );

	if ( is_front_page() ) {
		if ( empty( $thinkup_homepage_sliderswitch ) or $thinkup_homepage_sliderswitch == 'option1' or $thinkup_homepage_sliderswitch == 'option4' ) {
			if ( empty( $thinkup_homepage_sliderpresetwidth ) or $thinkup_homepage_sliderpresetwidth == '1' ) {
				$classes[] = 'slider-full';
			} else {
				$classes[] = 'slider-boxed';
			}
		}
	}
	return $classes;
}
add_action( 'body_class', 'smarter_thinkup_input_sliderclass');


/* ----------------------------------------------------------------------------------
	ENABLE HOMEPAGE SLIDER
---------------------------------------------------------------------------------- */

// Content for slider layout - Standard
function smarter_thinkup_input_sliderhomepage() {

// Get theme options values.
$thinkup_homepage_sliderimage1_info  = smarter_thinkup_var ( 'thinkup_homepage_sliderimage1_info' );
$thinkup_homepage_sliderimage1_image = smarter_thinkup_var ( 'thinkup_homepage_sliderimage1_image', 'url' );
$thinkup_homepage_sliderimage1_title = smarter_thinkup_var ( 'thinkup_homepage_sliderimage1_title' );
$thinkup_homepage_sliderimage1_desc  = smarter_thinkup_var ( 'thinkup_homepage_sliderimage1_desc' );
$thinkup_homepage_sliderimage1_link  = smarter_thinkup_var ( 'thinkup_homepage_sliderimage1_link' );
$thinkup_homepage_sliderimage2_info  = smarter_thinkup_var ( 'thinkup_homepage_sliderimage2_info' );
$thinkup_homepage_sliderimage2_image = smarter_thinkup_var ( 'thinkup_homepage_sliderimage2_image', 'url' );
$thinkup_homepage_sliderimage2_title = smarter_thinkup_var ( 'thinkup_homepage_sliderimage2_title' );
$thinkup_homepage_sliderimage2_desc  = smarter_thinkup_var ( 'thinkup_homepage_sliderimage2_desc' );
$thinkup_homepage_sliderimage2_link  = smarter_thinkup_var ( 'thinkup_homepage_sliderimage2_link' );
$thinkup_homepage_sliderimage3_info  = smarter_thinkup_var ( 'thinkup_homepage_sliderimage3_info' );
$thinkup_homepage_sliderimage3_image = smarter_thinkup_var ( 'thinkup_homepage_sliderimage3_image', 'url' );
$thinkup_homepage_sliderimage3_title = smarter_thinkup_var ( 'thinkup_homepage_sliderimage3_title' );
$thinkup_homepage_sliderimage3_desc  = smarter_thinkup_var ( 'thinkup_homepage_sliderimage3_desc' );
$thinkup_homepage_sliderimage3_link  = smarter_thinkup_var ( 'thinkup_homepage_sliderimage3_link' );

	// Set output variable to avoid php errors
	$slide1_link = NULL;
	$slide2_link = NULL;
	$slide3_link = NULL;

	// Get url of featured images in slider pages
	$slide1_image_url = $thinkup_homepage_sliderimage1_image;
	$slide2_image_url = $thinkup_homepage_sliderimage2_image;
	$slide3_image_url = $thinkup_homepage_sliderimage3_image;

	// Get titles of slider pages
	$slide1_title = $thinkup_homepage_sliderimage1_title;
	$slide2_title = $thinkup_homepage_sliderimage2_title;
	$slide3_title = $thinkup_homepage_sliderimage3_title;

	// Get descriptions (excerpt) of slider pages
	$slide1_desc = $thinkup_homepage_sliderimage1_desc;
	$slide2_desc = $thinkup_homepage_sliderimage2_desc;
	$slide3_desc = $thinkup_homepage_sliderimage3_desc;

	// Get url of slider pages
	if( ! empty( $thinkup_homepage_sliderimage1_link ) ) {
		$slide1_link = get_permalink( $thinkup_homepage_sliderimage1_link );
	}
	if( ! empty( $thinkup_homepage_sliderimage2_link ) ) {
		$slide2_link = get_permalink( $thinkup_homepage_sliderimage2_link );
	}
	if( ! empty( $thinkup_homepage_sliderimage3_link ) ) {
		$slide3_link = get_permalink( $thinkup_homepage_sliderimage3_link );
	}

	// Create array for slider content
	$thinkup_homepage_sliderpage = array(
		array(
			'slide_image_url'   => $slide1_image_url,
			'slide_title'       => $slide1_title,
			'slide_desc'        => $slide1_desc,
			'slide_link'        => $slide1_link
		),
		array(
			'slide_image_url'   => $slide2_image_url,
			'slide_title'       => $slide2_title,
			'slide_desc'        => $slide2_desc,
			'slide_link'        => $slide2_link
		),
		array(
			'slide_image_url'   => $slide3_image_url,
			'slide_title'       => $slide3_title,
			'slide_desc'        => $slide3_desc,
			'slide_link'        => $slide3_link
		),
	);

	foreach ($thinkup_homepage_sliderpage as $slide) {

		if ( ! empty( $slide['slide_image_url'] ) ) {

			// Get url of background image or set video overlay image
			$slide_image = 'background: url(' . esc_url( $slide['slide_image_url'] ) . ') no-repeat center; background-size: cover;';

			// Used for slider image alt text
			if ( ! empty( $slide['slide_title'] ) ) {
				$slide_alt = $slide['slide_title'];
			} else {
				$slide_alt = __( 'Slider Image', 'smarter' );
			}

			echo '<li>',
				 '<img src="' . esc_url( get_template_directory_uri() ) . '/images/transparent.png" style="' . esc_attr( $slide_image ) . '" alt="' . esc_attr( $slide_alt ) . '" />',
				 '<div class="rslides-content">',
				 '<div class="wrap-safari">',
				 '<div class="rslides-content-inner">',
				 '<div class="featured">';

				if ( ! empty( $slide['slide_title'] ) ) {

					// Wrap text in <span> tags
					$slide['slide_title'] = '<span>' . esc_html( $slide['slide_title'] ) . '</span>';
					$slide['slide_title'] = str_replace( '<br />', '</span><br /><span>', $slide['slide_title'] );
					$slide['slide_title'] = str_replace( '<br/>', '</span><br/><span>', $slide['slide_title'] );

					echo '<div class="featured-title">',
						 $slide['slide_title'],
						 '</div>';
				}
				if ( ! empty( $slide['slide_desc'] ) ) {
					$slide_desc = '<p><span>' . esc_html( wp_strip_all_tags( $slide['slide_desc'] ) ) . '</span></p>';

					// Wrap text in <span> tags
					$slide_desc = str_replace( '<br />', '</span><br /><span>', $slide_desc );
					$slide_desc = str_replace( '<br/>', '</span><br/><span>', $slide_desc );

					echo '<div class="featured-excerpt">',
						 $slide_desc,
						 '</div>';
				}
				if ( ! empty( $slide['slide_link'] ) ) {

					if ( empty( $slide['slide_button'] ) ) {
						$slide['slide_button'] = __( 'Read More', 'smarter' );
					}

					echo '<div class="featured-link">',
						 '<a href="' . esc_url( $slide['slide_link'] ) . '"><span>' . esc_html( $slide['slide_button'] ) . '</span></a>',
						 '</div>';
				}

			echo '</div>',
				  '</div>',
				  '</div>',
				  '</div>',
				  '</li>';
		}
	}
}

// Add Slider - Homepage
function smarter_thinkup_input_sliderhome() {

// Get theme options values.
$thinkup_homepage_sliderswitch       = smarter_thinkup_var ( 'thinkup_homepage_sliderswitch' );
$thinkup_homepage_sliderimage1_image = smarter_thinkup_var ( 'thinkup_homepage_sliderimage1_image' );
$thinkup_homepage_sliderimage2_image = smarter_thinkup_var ( 'thinkup_homepage_sliderimage2_image' );
$thinkup_homepage_sliderimage3_image = smarter_thinkup_var ( 'thinkup_homepage_sliderimage3_image' );

$slider_default = NULL;

	if ( is_front_page() ) {

		// Set default slider
		$slider_default .= '<li><img src="' . esc_url( get_template_directory_uri() ) . '/images/transparent.png" style="background: url(' . esc_url( get_template_directory_uri() ) . '/images/slideshow/slide_demo1.png) no-repeat center; background-size: cover;" alt="' . esc_attr__( 'Demo Image', 'smarter' ) . '" /></li>';
		$slider_default .= '<li><img src="' . esc_url( get_template_directory_uri() ) . '/images/transparent.png" style="background: url(' . esc_url( get_template_directory_uri() ) . '/images/slideshow/slide_demo2.png) no-repeat center; background-size: cover;" alt="' . esc_attr__( 'Demo Image', 'smarter' ) . '" /></li>';
		$slider_default .= '<li><img src="' . esc_url( get_template_directory_uri() ) . '/images/transparent.png" style="background: url(' . esc_url( get_template_directory_uri() ) . '/images/slideshow/slide_demo3.png) no-repeat center; background-size: cover;" alt="' . esc_attr__( 'Demo Image', 'smarter' ) . '" /></li>';

		if ( ( current_user_can( 'edit_theme_options' ) and empty( $thinkup_homepage_sliderswitch ) ) or $thinkup_homepage_sliderswitch == 'option1' ) {

			echo '<div id="slider"><div id="slider-core">';
			echo '<div class="rslides-container" data-speed="6000"><div class="rslides-inner"><ul class="slides">';
				echo $slider_default;
			echo '</ul></div></div>';
			echo '</div></div>';

		} else if ( $thinkup_homepage_sliderswitch == 'option2' ) {

			echo '';

		} else if ( $thinkup_homepage_sliderswitch == 'option3' ) {

			echo '';

		} else if ( $thinkup_homepage_sliderswitch == 'option4' ) {

			// Check if page slider has been set
			if( empty( $thinkup_homepage_sliderimage1_image ) and empty( $thinkup_homepage_sliderimage2_image ) and empty( $thinkup_homepage_sliderimage3_image ) ) {

				echo '<div id="slider"><div id="slider-core">';
				echo '<div class="rslides-container" data-speed="6000"><div class="rslides-inner"><ul class="slides">';
					echo $slider_default;
				echo '</ul></div></div>';
				echo '</div></div>';

			} else {

				echo '<div id="slider"><div id="slider-core">';
				echo '<div class="rslides-container" data-speed="6000"><div class="rslides-inner"><ul class="slides">';
					smarter_thinkup_input_sliderhomepage();
				echo '</ul></div></div>';
				echo '</div></div>';
				
			}

		}
	}
}

// Add ThinkUpSlider Height - Homepage
function smarter_thinkup_input_sliderhomeheight() {

// Get theme options values.
$thinkup_homepage_sliderswitch       = smarter_thinkup_var ( 'thinkup_homepage_sliderswitch' );
$thinkup_homepage_sliderpresetheight = smarter_thinkup_var ( 'thinkup_homepage_sliderpresetheight' );

	if ( empty( $thinkup_homepage_sliderpresetheight ) ) $thinkup_homepage_sliderpresetheight = '400';

	if ( is_front_page() ) {
		if ( empty( $thinkup_homepage_sliderswitch ) or $thinkup_homepage_sliderswitch == 'option1' or $thinkup_homepage_sliderswitch == 'option4' ) {
		echo 	"\n" .'<style type="text/css">' . "\n",
			'#slider .rslides, #slider .rslides li { height: ' . esc_html( $thinkup_homepage_sliderpresetheight ) . 'px; max-height: ' . esc_html( $thinkup_homepage_sliderpresetheight ) . 'px; }' . "\n",
			'#slider .rslides img { height: 100%; max-height: ' . esc_html( $thinkup_homepage_sliderpresetheight ) . 'px; }' . "\n",
			'</style>' . "\n";
		}
	}
}
add_action( 'wp_head','smarter_thinkup_input_sliderhomeheight', '13' );


//----------------------------------------------------------------------------------
//	ENABLE HOMEPAGE CONTENT
//----------------------------------------------------------------------------------

function smarter_thinkup_input_homepagesection() {

// Get theme options values.
$thinkup_homepage_sectionswitch  = smarter_thinkup_var ( 'thinkup_homepage_sectionswitch' );
$thinkup_homepage_section1_icon  = smarter_thinkup_var ( 'thinkup_homepage_section1_icon' );
$thinkup_homepage_section1_title = smarter_thinkup_var ( 'thinkup_homepage_section1_title' );
$thinkup_homepage_section1_desc  = smarter_thinkup_var ( 'thinkup_homepage_section1_desc' );
$thinkup_homepage_section1_link  = smarter_thinkup_var ( 'thinkup_homepage_section1_link' );
$thinkup_homepage_section2_icon  = smarter_thinkup_var ( 'thinkup_homepage_section2_icon' );
$thinkup_homepage_section2_title = smarter_thinkup_var ( 'thinkup_homepage_section2_title' );
$thinkup_homepage_section2_desc  = smarter_thinkup_var ( 'thinkup_homepage_section2_desc' );
$thinkup_homepage_section2_link  = smarter_thinkup_var ( 'thinkup_homepage_section2_link' );
$thinkup_homepage_section3_icon  = smarter_thinkup_var ( 'thinkup_homepage_section3_icon' );
$thinkup_homepage_section3_title = smarter_thinkup_var ( 'thinkup_homepage_section3_title' );
$thinkup_homepage_section3_desc  = smarter_thinkup_var ( 'thinkup_homepage_section3_desc' );
$thinkup_homepage_section3_link  = smarter_thinkup_var ( 'thinkup_homepage_section3_link' );

	// Set default values for icons
	if ( empty( $thinkup_homepage_section1_icon ) ) $thinkup_homepage_section1_icon = __( 'fa fa-thumbs-up', 'smarter' );
	if ( empty( $thinkup_homepage_section2_icon ) ) $thinkup_homepage_section2_icon = __( 'fa fa-desktop', 'smarter' );
	if ( empty( $thinkup_homepage_section3_icon ) ) $thinkup_homepage_section3_icon = __( 'fa fa-gears', 'smarter' );

	// Set default values for titles
	if ( empty( $thinkup_homepage_section1_title ) ) $thinkup_homepage_section1_title = __( 'Step 1 &#45; Theme Options', 'smarter' );
	if ( empty( $thinkup_homepage_section2_title ) ) $thinkup_homepage_section2_title = __( 'Step 2 &#45; Setup Slider', 'smarter' );
	if ( empty( $thinkup_homepage_section3_title ) ) $thinkup_homepage_section3_title = __( 'Step 3 &#45; Create Homepage', 'smarter' );

	// Set default values for descriptions
	if ( empty( $thinkup_homepage_section1_desc ) ) 
	$thinkup_homepage_section1_desc = __( 'To begin customizing your site go to Appearance -> Customizer and select Theme Options. Use the options to customize.', 'smarter' );

	if ( empty( $thinkup_homepage_section2_desc ) ) 
	$thinkup_homepage_section2_desc = __( 'Go to Theme Options -> Homepage and choose image slider. Add an image, title and description to create a slide.', 'smarter' );

	if ( empty( $thinkup_homepage_section3_desc ) ) 
	$thinkup_homepage_section3_desc = __( 'Go to Theme Options -> Homepage (Featured) and turn the switch on then add the content you want for each section.', 'smarter' );

	// Get page names for links
	if ( ! empty( $thinkup_homepage_section1_link ) ) {
		$thinkup_homepage_section1_link = get_permalink( $thinkup_homepage_section1_link );
	}
	if ( ! empty( $thinkup_homepage_section2_link ) ) {
		$thinkup_homepage_section2_link = get_permalink( $thinkup_homepage_section2_link );
	}
	if ( ! empty( $thinkup_homepage_section3_link ) ) {
		$thinkup_homepage_section3_link = get_permalink( $thinkup_homepage_section3_link );
	}

	// Output featured content areas
	if ( is_front_page() ) {
		if ( ( current_user_can( 'edit_theme_options' ) and empty( $thinkup_homepage_sectionswitch ) ) or $thinkup_homepage_sectionswitch == '1' ) {

		echo '<div id="section-home"><div id="section-home-inner">';

			echo '<article class="section1 one_third">',
					'<div class="iconfull style2">',
					'<div class="iconimage">';
					if ( empty( $thinkup_homepage_section1_icon ) ) {
						echo '<i class="' . esc_attr( $thinkup_homepage_section1_icon ) . ' fa-2x fa-inverse"></i>';
					} else {
						if ( ! empty( $thinkup_homepage_section1_link ) ) {
							echo '<a href="' . esc_url( $thinkup_homepage_section1_link ) . '"><i class="' . esc_attr( $thinkup_homepage_section1_icon ) . ' fa-2x fa-inverse"></i></a>';
						} else {
							echo '<i class="' . esc_attr( $thinkup_homepage_section1_icon ) . ' fa-2x fa-inverse"></i>';
						}
					}
					echo '<h3>' . esc_html( $thinkup_homepage_section1_title ) . '</h3>';
			echo	'</div>',
					'<div class="iconmain">',
					wpautop( esc_html( do_shortcode ( $thinkup_homepage_section1_desc ) ) );
					if ( ! empty( $thinkup_homepage_section1_link ) ) {
						echo '<p class="iconurl"><a class="" href="' . esc_url( $thinkup_homepage_section1_link ) . '">' . __( 'Read More', 'smarter' ) . '</a></p>';
					}
			echo	'</div>',
					'</div>',
				'</article>';
			echo '<article class="section2 one_third">',
					'<div class="iconfull style2">',
					'<div class="iconimage">';
					if ( empty( $thinkup_homepage_section2_icon ) ) {
						echo '<i class="' . esc_attr( $thinkup_homepage_section2_icon ) . ' fa-2x fa-inverse"></i>';
					} else {
						if ( ! empty( $thinkup_homepage_section2_link ) ) {
							echo '<a href="' . esc_url( $thinkup_homepage_section2_link ) . '"><i class="' . esc_attr( $thinkup_homepage_section2_icon ) . ' fa-2x fa-inverse"></i></a>';
						} else {
							echo '<i class="' . esc_attr( $thinkup_homepage_section2_icon ) . ' fa-2x fa-inverse"></i>';
						}
					}
					echo '<h3>' . esc_html( $thinkup_homepage_section2_title ) . '</h3>';
			echo	'</div>',
					'<div class="iconmain">',
					wpautop( esc_html( do_shortcode ( $thinkup_homepage_section2_desc ) ) );
					if ( ! empty( $thinkup_homepage_section2_link ) ) {
						echo '<p class="iconurl"><a class="" href="' . esc_url( $thinkup_homepage_section2_link ) . '">' . __( 'Read More', 'smarter' ) . '</a></p>';
					}
			echo	'</div>',
					'</div>',
				'</article>';

			echo '<article class="section3 one_third last">',
					'<div class="iconfull style2">',
					'<div class="iconimage">';
					if ( empty( $thinkup_homepage_section3_icon ) ) {
						echo '<i class="' . esc_attr( $thinkup_homepage_section3_icon ) . ' fa-2x fa-inverse"></i>';
					} else {
						if ( ! empty( $thinkup_homepage_section3_link ) ) {
							echo '<a href="' . esc_url( $thinkup_homepage_section3_link ) . '"><i class="' . esc_attr( $thinkup_homepage_section3_icon ) . ' fa-2x fa-inverse"></i></a>';
						} else {
							echo '<i class="' . esc_attr( $thinkup_homepage_section3_icon ) . ' fa-2x fa-inverse"></i>';
						}
					}
					echo '<h3>' . esc_html( $thinkup_homepage_section3_title ) . '</h3>';
			echo	'</div>',
					'<div class="iconmain">',
					wpautop( esc_html( do_shortcode ( $thinkup_homepage_section3_desc ) ) );
				if ( ! empty( $thinkup_homepage_section3_link ) ) {
					echo '<p class="iconurl"><a class="" href="' . esc_url( $thinkup_homepage_section3_link ) . '">' . __( 'Read More', 'smarter' ) . '</a></p>';
				}
			echo	'</div>',
					'</div>',
				'</article>';

		echo '<div class="clearboth"></div></div></div>';
		}
	}
}


/* ----------------------------------------------------------------------------------
	CALL TO ACTION - INTRO
---------------------------------------------------------------------------------- */

function smarter_thinkup_input_ctaintro() {

// Get theme options values.
$thinkup_homepage_introswitch       = smarter_thinkup_var ( 'thinkup_homepage_introswitch' );
$thinkup_homepage_introaction       = smarter_thinkup_var ( 'thinkup_homepage_introaction' );
$thinkup_homepage_introactionteaser = smarter_thinkup_var ( 'thinkup_homepage_introactionteaser' );
$thinkup_homepage_introactionbutton = smarter_thinkup_var ( 'thinkup_homepage_introactionbutton' );
$thinkup_homepage_introactionlink   = smarter_thinkup_var ( 'thinkup_homepage_introactionlink' );
$thinkup_homepage_introactionpage   = smarter_thinkup_var ( 'thinkup_homepage_introactionpage' );
$thinkup_homepage_introactioncustom = smarter_thinkup_var ( 'thinkup_homepage_introactioncustom' );

	if ( $thinkup_homepage_introswitch == '1' and is_front_page() and ! empty( $thinkup_homepage_introaction ) ) {
		echo '<div id="introaction"><div id="introaction-core">';
		if ( empty( $thinkup_homepage_introactionbutton ) ) {
			if ( empty( $thinkup_homepage_introactionteaser ) ) {
				echo	'<div class="action-text">',
						'<h3>' . esc_html( $thinkup_homepage_introaction ) . '</h3>',
						'</div>';
			} else {
				echo	'<div class="action-text action-teaser">',
						'<h3>' . esc_html( $thinkup_homepage_introaction ) . '</h3>',
						wpautop( esc_html( $thinkup_homepage_introactionteaser ) ),
						'</div>';
			}
		} else if ( ! empty( $thinkup_homepage_introactionbutton ) ) {
			if ( empty( $thinkup_homepage_introactionteaser ) ) {
				echo	'<div class="action-text">',
						'<h3>' . esc_html( $thinkup_homepage_introaction ) . '</h3>',
						'</div>';
			} else {
				echo	'<div class="action-text action-teaser">',
						'<h3>' . esc_html( $thinkup_homepage_introaction ) . '</h3>',
						wpautop( esc_html( $thinkup_homepage_introactionteaser ) ),
						'</div>';
			}
			if ( $thinkup_homepage_introactionlink == 'option1' ) {
				echo '<div class="action-button"><a href="' . esc_url( get_permalink( $thinkup_homepage_introactionpage ) ) . '"><h4 class="themebutton">';
				echo esc_html( $thinkup_homepage_introactionbutton );
				echo '</h4></a></div>';
			} else if ( $thinkup_homepage_introactionlink == 'option2' ) {
				echo '<div class="action-button"><a href="' . esc_url( $thinkup_homepage_introactioncustom ) . '"><h4 class="themebutton">';
				echo esc_html( $thinkup_homepage_introactionbutton );
				echo '</h4></a></div>';
			}
		}
		echo '</div></div>';
	}
}