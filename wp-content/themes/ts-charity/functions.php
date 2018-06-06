<?php
/**
 * TS Charity functions and definitions
 *
 * @package ts-charity
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
 
/* Theme Setup */
if ( ! function_exists( 'ts_charity_setup' ) ) :

function ts_charity_setup() {
	
	$GLOBALS['content_width'] = apply_filters( 'ts_charity_content_width', 640 );

	load_theme_textdomain( 'ts-charity', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	add_image_size('ts-charity-homepage-thumb',250,145,true);
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ts-charity' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	   /*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
	   */
		add_theme_support(
			'post-formats', array(
				'image',
				'video',
				'gallery',
				'audio',
			)
		);
	
	add_editor_style( array( 'css/editor-style.css', ts_charity_font_url() ) );
}

endif;
add_action( 'after_setup_theme', 'ts_charity_setup' );

/* Theme Widgets Setup */
function ts_charity_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'ts-charity' ),
		'description'   => __( 'Appears on blog page sidebar', 'ts-charity' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'ts-charity' ),
		'description'   => __( 'Appears on page sidebar', 'ts-charity' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'ts-charity' ),
		'description'   => __( 'Appears on page sidebar', 'ts-charity' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 1', 'ts-charity' ),
		'description'   => __( 'Appears on footer', 'ts-charity' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 2', 'ts-charity' ),
		'description'   => __( 'Appears on footer', 'ts-charity' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 3', 'ts-charity' ),
		'description'   => __( 'Appears on footer', 'ts-charity' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 4', 'ts-charity' ),
		'description'   => __( 'Appears on footer', 'ts-charity' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'ts_charity_widgets_init' );

/* Theme Font URL */
function ts_charity_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Vollkorn:400,400i,600,600i,700,700i,900,900i';
	
	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}	

/* Theme enqueue scripts */

function ts_charity_scripts() {
	wp_enqueue_style( 'ts-charity-font', ts_charity_font_url(), array() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'ts-charity-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'ts-charity-effect', get_template_directory_uri().'/css/effect.css' );
	wp_enqueue_style( 'ts-charity-customcss', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'jquery-nivo-slider', get_template_directory_uri().'/css/nivo-slider.css' );
	wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array('jquery') );
	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'ts-charity-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );

	wp_enqueue_style('ts-charity-ie', get_template_directory_uri().'/css/ie.css', array('ts-charity-basic-style'));
	wp_style_add_data( 'ts-charity-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'ts_charity_scripts' );

/*radio button sanitization*/
 function ts_charity_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

define('TS_CHARITY_BUY_NOW','https://www.themeshopy.com/themes/premium-charity-wordpress-theme/','ts-charity');
define('TS_CHARITY_LIVE_DEMO','https://themeshopy.com/ts-charity-pro/','ts-charity');
define('TS_CHARITY_PRO_DOC','https://themeshopy.com/docs/ts-charity-pro/','ts-charity');
define('TS_CHARITY_FREE_DOC','https://themeshopy.com/docs/free-charity/','ts-charity');
define('TS_CHARITY_CONTACT','https://wordpress.org/support/theme/ts-charity/','ts-charity');
define('TS_CHARITY_CREDIT','https://www.themeshopy.com/','ts-charity');

if ( ! function_exists( 'ts_charity_credit' ) ) {
	function ts_charity_credit(){
		echo "<a href=".esc_url(ts_charity_CREDIT)." target='_blank'>".esc_html__('ThemeShopy','ts-charity')."</a>";
	}
}

/* Custom header additions. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* admin file. */
require get_template_directory() . '/inc/admin/admin.php';