<?php
/**
 * VW Pet Shop functions and definitions
 *
 * @package VW Pet Shop
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if ( ! function_exists( 'vw_pet_shop_setup' ) ) :
 
function vw_pet_shop_setup() {

	$GLOBALS['content_width'] = apply_filters( 'vw_pet_shop_content_width', 640 );
	
	load_theme_textdomain( 'vw-pet-shop', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('vw-pet-shop-homepage-thumb',240,145,true);
	
       register_nav_menus( array(
		'left-primary' => __( 'Left Primary Menu', 'vw-pet-shop' ),
		'right-primary' => __( 'Right Primary Menu', 'vw-pet-shop' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', vw_pet_shop_font_url() ) );
}
endif;
add_action( 'after_setup_theme', 'vw_pet_shop_setup' );


/* Theme Widgets Setup */
function vw_pet_shop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vw-pet-shop' ),
		'description'   => __( 'Appears on blog page sidebar', 'vw-pet-shop' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vw-pet-shop' ),
		'description'   => __( 'Appears on page sidebar', 'vw-pet-shop' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'vw-pet-shop' ),
		'description'   => __( 'Appears on page sidebar', 'vw-pet-shop' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 1', 'vw-pet-shop' ),
		'description'   => __( 'Appears on footer 1', 'vw-pet-shop' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 2', 'vw-pet-shop' ),
		'description'   => __( 'Appears on footer 2', 'vw-pet-shop' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 3', 'vw-pet-shop' ),
		'description'   => __( 'Appears on footer 3', 'vw-pet-shop' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 4', 'vw-pet-shop' ),
		'description'   => __( 'Appears on footer 4', 'vw-pet-shop' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vw_pet_shop_widgets_init' );

/* Theme Font URL */
function vw_pet_shop_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Poppins:100i,200,200i,300,300i,400,400i,500,500i,600,600i';
	$font_family[] = 'Vollkorn:400,400i,600,600i,700,700i,900,900i';	

	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function vw_pet_shop_scripts() {
	wp_enqueue_style( 'vw-pet-shop-font', vw_pet_shop_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'vw-pet-shop-basic-style', get_stylesheet_uri() );	
	wp_enqueue_style( 'effect', get_template_directory_uri().'/css/effect.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'vw-pet-shop-customcss', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'nivo-style', get_template_directory_uri().'/css/nivo-slider.css' );
	wp_enqueue_script( 'nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') ,'',true);
	
	wp_enqueue_script( 'vw-pet-shop-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Enqueue the Dashicons script */
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'vw_pet_shop_scripts' );

function vw_pet_shop_ie_stylesheet(){
	wp_enqueue_style('vw-pet-shop-ie', get_template_directory_uri().'/css/ie.css');
	wp_style_add_data( 'vw-pet-shop-ie', 'conditional', 'IE' );
}
add_action('wp_enqueue_scripts','vw_pet_shop_ie_stylesheet');

/*radio button sanitization*/

function vw_pet_shop_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

define('vw_pet_shop_CREDIT','https://www.vwthemes.com','vw-pet-shop');

if ( ! function_exists( 'vw_pet_shop_credit' ) ) {
	function vw_pet_shop_credit(){
		echo "<a href=".esc_url(vw_pet_shop_CREDIT)." target='_blank'>".esc_html__('VWThemes','vw-pet-shop')."</a>";
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
	if (!function_exists('loop_columns')) {
		function loop_columns() {
	return 3; // 3 products per row
	}
}

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';