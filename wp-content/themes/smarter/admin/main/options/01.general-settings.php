<?php
/**
 * General settings functions.
 *
 * @package ThinkUpThemes
 */

/* ----------------------------------------------------------------------------------
	Logo Settings
---------------------------------------------------------------------------------- */

function smarter_thinkup_custom_logo() {

	$output = NULL;

    // Get logo image url if image has been assigned.
	$check_logoset = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );

	if ( ! empty( $check_logoset[0] ) ) {
	   if ( function_exists( 'the_custom_logo' ) ) {
			$output = get_custom_logo();
		}
	} else {
		$output .= '<a rel="home" href="' . esc_url( home_url( '/' ) ) . '">';
		$output .= '<h1 rel="home" class="site-title" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</h1>';
		$output .= '<h2 class="site-description" title="' . esc_attr( get_bloginfo( 'description', 'display' ) ) . '">' . esc_html( get_bloginfo( 'description' ) ) . '</h2>';
		$output .= '</a>';
	}

	// Output logo is set
	if ( ! empty( $output ) ) {
		return $output;
	}
}


/* ----------------------------------------------------------------------------------
	Page Layout
---------------------------------------------------------------------------------- */

/* Add Custom Sidebar css */
function smarter_thinkup_sidebar_css($classes) {

// Get theme options values.
$thinkup_homepage_layout = smarter_thinkup_var ( 'thinkup_homepage_layout' );
$thinkup_general_layout  = smarter_thinkup_var ( 'thinkup_general_layout' );
$thinkup_blog_layout     = smarter_thinkup_var ( 'thinkup_blog_layout' );
$thinkup_post_layout     = smarter_thinkup_var ( 'thinkup_post_layout' );

	$class_sidebar = NULL;

	if ( is_front_page() ) {
		if ( $thinkup_homepage_layout == "option1" or empty( $thinkup_homepage_layout ) ) {		
			$class_sidebar = '';
		} else if ( $thinkup_homepage_layout == "option2" ) {
			$class_sidebar = 'layout-sidebar-left';
		} else if ( $thinkup_homepage_layout == "option3" ) {
			$class_sidebar = 'layout-sidebar-right';
		}
	} else if ( is_page() ) {	
		if ( $thinkup_general_layout == "option1" or empty( $thinkup_general_layout ) ) {		
			$class_sidebar = '';
		} else if ( $thinkup_general_layout == "option2" ) {
			$class_sidebar = 'layout-sidebar-left';
		} else if ( $thinkup_general_layout == "option3" ) {
			$class_sidebar = 'layout-sidebar-right';
		}
	} else if ( smarter_thinkup_check_isblog() and ! is_single() ) {
		if ( $thinkup_blog_layout == "option1" or empty( $thinkup_blog_layout ) ) {		
			$class_sidebar = '';
		} else if ( $thinkup_blog_layout == "option2" ) {
			$class_sidebar = 'layout-sidebar-left';
		} else if ( $thinkup_blog_layout == "option3" ) {
			$class_sidebar = 'layout-sidebar-right';
		}
	} else if ( is_singular( 'post' ) ) {
		if ( $thinkup_post_layout == "option1" or empty( $thinkup_post_layout ) ) {		
			$class_sidebar = '';
		} else if ( $thinkup_post_layout == "option2" ) {
			$class_sidebar = 'layout-sidebar-left';
		} else if ( $thinkup_post_layout == "option3" ) {
			$class_sidebar = 'layout-sidebar-right';
		} else {
			$class_sidebar = '';
		}
	} else if ( is_search() ) {	
		if ( $thinkup_general_layout == "option1" or empty( $thinkup_general_layout ) ) {		
			$class_sidebar = '';
		} else if ( $thinkup_general_layout == "option2" ) {
			$class_sidebar = 'layout-sidebar-left';
		} else if ($thinkup_general_layout == "option3") {
			$class_sidebar = 'layout-sidebar-right';
		}
	}

	// Output sidebar class
	if( ! empty( $class_sidebar ) ) {
		$classes[] = $class_sidebar;
	} else {
		$classes[] = 'layout-sidebar-none';
	}
	return $classes;
}
add_action( 'body_class', 'smarter_thinkup_sidebar_css' );

/* Add Custom Sidebar html */
function smarter_thinkup_sidebar_html() {

// Get theme options values.
$thinkup_homepage_layout = smarter_thinkup_var ( 'thinkup_homepage_layout' );
$thinkup_general_layout  = smarter_thinkup_var ( 'thinkup_general_layout' );
$thinkup_blog_layout     = smarter_thinkup_var ( 'thinkup_blog_layout' );
$thinkup_post_layout     = smarter_thinkup_var ( 'thinkup_post_layout' );

do_action('smarter_thinkup_sidebar_html');

	if ( is_front_page() ) {	
		if ( $thinkup_homepage_layout == "option1" or empty( $thinkup_homepage_layout ) ) {		
				echo '';
		} else if ( $thinkup_homepage_layout == "option2" ) {
				echo get_sidebar(); 
		} else if ( $thinkup_homepage_layout == "option3" ) {
				echo get_sidebar();
		}
	} else if ( is_page() ) {	
		if ( $thinkup_general_layout == "option1" or empty( $thinkup_general_layout ) ) {		
			echo '';
		} else if ( $thinkup_general_layout == "option2" ) {
			echo get_sidebar();
		} else if ( $thinkup_general_layout == "option3" ) {
			echo get_sidebar();
		}
	} else if ( smarter_thinkup_check_isblog() and ! is_single() ) {
		if ( $thinkup_blog_layout == "option1" or empty( $thinkup_blog_layout ) ) {		
			echo '';
		} else if ( $thinkup_blog_layout == "option2" ) {
			echo get_sidebar();
		} else if ( $thinkup_blog_layout == "option3" ) {
			echo get_sidebar();
		}
	} else if ( is_singular( 'post' ) ) {
		if ( $thinkup_post_layout == "option1" or empty( $thinkup_post_layout ) ) {
			echo '';
		} else if ( $thinkup_post_layout == "option2" ) {
			echo get_sidebar();
		} else if ( $thinkup_post_layout == "option3" ) {
			echo get_sidebar();
		} else {
			echo '';
		}
	} else if ( is_search() ) {
		if ( $thinkup_general_layout == 'option1' or empty( $thinkup_general_layout ) ) {		
			echo '';
		} else if ( $thinkup_general_layout == "option2" ) {
			get_sidebar();
		} else if ( $thinkup_general_layout == "option3" ) {
			get_sidebar();
		}
	}
}


/* ----------------------------------------------------------------------------------
	Select a Sidebar
---------------------------------------------------------------------------------- */

/* Add Selected Sidebar To Specific Pages */
function smarter_thinkup_input_sidebars() {

// Get theme options values.
$thinkup_general_sidebars  = smarter_thinkup_var ( 'thinkup_general_sidebars' );
$thinkup_homepage_sidebars = smarter_thinkup_var ( 'thinkup_homepage_sidebars' );
$thinkup_blog_sidebars     = smarter_thinkup_var ( 'thinkup_blog_sidebars' );
$thinkup_post_sidebars     = smarter_thinkup_var ( 'thinkup_post_sidebars' );

	if ( is_front_page() ) {	
		$output = $thinkup_homepage_sidebars;
	} else if ( is_page() ) {
		$output = $thinkup_general_sidebars;
	} else if ( smarter_thinkup_check_isblog() and ! is_single() ) {
		$output = $thinkup_blog_sidebars;
	} else if ( is_singular( 'post' ) ) {
		$output = $thinkup_post_sidebars;
	} else if ( is_search() ) {
		$output = $thinkup_general_sidebars;
	}

	if ( empty( $output ) or $output == 'Select a sidebar:' ) {
		$output = 'Sidebar';
	}

return $output;
}


/* ----------------------------------------------------------------------------------
	Intro Default options
---------------------------------------------------------------------------------- */

/* Add custom intro section [Extend for more options in future update] */
function smarter_thinkup_custom_intro() {

	if ( ! is_front_page() ) {
		echo	'<div id="intro" class="option1"><div id="intro-core">',
				'<h1 class="page-title"><span>',
				smarter_thinkup_title_select(),
				'</span></h1>',
				'</div></div>';
	}
}


/* ----------------------------------------------------------------------------------
	Enable Breadcrumbs
---------------------------------------------------------------------------------- */

/* Toggle Breadcrumbs */
function smarter_thinkup_input_breadcrumbswitch() {

// Get theme options values.
$thinkup_general_breadcrumbswitch = smarter_thinkup_var ( 'thinkup_general_breadcrumbswitch' );

	if( ! is_front_page() ) {
		if ( $thinkup_general_breadcrumbswitch == '0' or empty( $thinkup_general_breadcrumbswitch ) ) {
			echo '';
		} else if ( $thinkup_general_breadcrumbswitch == '1' ) {
			echo smarter_thinkup_input_breadcrumb();
		}
	}
}


/* ----------------------------------------------------------------------------------
	Enable Responsive Layout
---------------------------------------------------------------------------------- */

/* http://wordpress.stackexchange.com/questions/27497/how-to-use-wp-nav-menu-to-create-a-select-menu-dropdown */
class smarter_thinkup_nav_menu_responsive extends Walker_Nav_Menu{

    public function start_el(&$output, $item, $depth=0, $args=array(), $id = 0){

      // add spacing to the title based on the current depth
      $item->title = str_repeat("&nbsp; ", $depth * 2 ) . apply_filters( 'the_title', $item->title, $item->ID );

      parent::start_el($output, $item, $depth, $args);
    } 
}

// Fallback responsive menu when custom header menu has not been set.
function smarter_thinkup_input_responsivefall() {

	$output = wp_list_pages('echo=0&title_li=');

	echo '<div id="header-responsive-inner" class="responsive-links nav-collapse collapse"><ul>',
		 $output,
		 '</ul></div>';
}

function smarter_thinkup_input_responsivehtml1() {

// Get theme options values.
$thinkup_general_fixedlayoutswitch = smarter_thinkup_var ( 'thinkup_general_fixedlayoutswitch' );

	if ( $thinkup_general_fixedlayoutswitch !== '1' ) {

		echo '<div id="header-nav">',
		     '<a class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">',
		     '<span class="icon-bar"></span>',
		     '<span class="icon-bar"></span>',
		     '<span class="icon-bar"></span>',
		     '</a>',
		     '</div>';
	}
}

function smarter_thinkup_input_responsivehtml2() {

// Get theme options values.
$thinkup_general_fixedlayoutswitch = smarter_thinkup_var ( 'thinkup_general_fixedlayoutswitch' );

	if ( $thinkup_general_fixedlayoutswitch !== '1' ) {

		$args =  array(
			'container_class' => 'responsive-links nav-collapse collapse', 
			'container_id'    => 'header-responsive-inner', 
			'menu_class'      => '', 
			'theme_location'  => 'header_menu', 
			'walker'          => new smarter_thinkup_nav_menu_responsive(), 
			'fallback_cb'     => 'smarter_thinkup_input_responsivefall',
		);

		echo '<div id="header-responsive">',
		     wp_nav_menu( $args ),
		     '</div>';
	}
}

function smarter_thinkup_input_responsivecss() {

// Get theme options values.
$thinkup_general_fixedlayoutswitch = smarter_thinkup_var ( 'thinkup_general_fixedlayoutswitch' );

	if ( $thinkup_general_fixedlayoutswitch !== '1' ) {
		wp_enqueue_style ( 'smarter-thinkup-responsive' );
	}
}
add_action( 'wp_enqueue_scripts', 'smarter_thinkup_input_responsivecss', '12' );

function smarter_thinkup_input_responsiveclass($classes){

// Get theme options values.
$thinkup_general_fixedlayoutswitch = smarter_thinkup_var ( 'thinkup_general_fixedlayoutswitch' );

	if ( $thinkup_general_fixedlayoutswitch == '1' ) {
		$classes[] = 'layout-fixed';
	} else {
		$classes[] = 'layout-responsive';	
	}
	return $classes;
}
add_action( 'body_class', 'smarter_thinkup_input_responsiveclass');