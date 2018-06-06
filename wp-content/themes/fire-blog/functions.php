<?php
/**
 * fire-blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fire-blog
 */

if ( ! function_exists( 'fire_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fire_blog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fire-blog, use a find and replace
		 * to change 'fire-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fire-blog' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'fire-blog' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		add_image_size( 'fire_blog_homepage_slider', 675, 450, true );
		add_image_size( 'fire_blog_homepage_sticky_posts', 920, 414, true );
		add_image_size( 'fire_blog_homepage_posts', 540, 243, true );
        add_image_size( 'fire_blog_single_page', 760, 329, true );
        add_image_size( 'fire_blog_archive_page', 160, 160, true );
        add_image_size( 'fire_blog_portfolio_content', 378, 252, true );
        add_image_size( 'fire_blog_our_team', 225, 225, true );
        add_image_size( 'fire_blog_edu_popular_courses', 348, 232, true );
        add_image_size( 'fire_blog_edu_team', 255, 343, true );
        add_image_size( 'fire_blog_edu_latest_posts', 350, 158.5, true );
        add_image_size( 'fire_blog_wedding_slider', 1349, 731, true );
        add_image_size( 'fire_blog_wedding_stories', 350, 438, true );
        add_image_size( 'fire_blog_wed_content', 370, 242, true );
        add_image_size( 'fire_blog_mobile_content', 1000, 654, true );
        add_image_size( 'fire_blog_construction_contact_section', 525, 350, true );
        add_image_size( 'fire_blog_call_to_action', 540, 363, true );
        add_image_size( 'fire_blog_construction_partner', 155, 141, true );
        add_image_size( 'fire_blog_medical_department', 350, 255, true );
        add_image_size( 'fire_blog_medical_blog', 350, 233, true );
        add_image_size( 'fire_blog_medical_team', 248, 248, true );
	}
endif;
add_action( 'after_setup_theme', 'fire_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fire_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fire_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'fire_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fire_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fire-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fire-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title"><h3><span>',
		'after_title'   => '</span></h3></div>',
	) );

	register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'fire-blog' ),
        'id'            => 'footer_1',
        'description'   => esc_html__( 'Add widgets in the bottom area.', 'fire-blog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-title"><h3><span>',
        'after_title'   => '</span></h3></div>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'fire-blog' ),
        'id'            => 'footer_2',
        'description'   => esc_html__( 'Add widgets in the bottom area.', 'fire-blog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-title"><h3><span>',
        'after_title'   => '</span></h3></div>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'fire-blog' ),
        'id'            => 'footer_3',
        'description'   => esc_html__( 'Add widgets in the bottom area.', 'fire-blog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-title" ><h3><span>',
        'after_title'   => '</span></h3></div>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Single Page', 'fire-blog' ),
        'id'            => 'single_page',
        'description'   => esc_html__( 'Add widgets in single middle section', 'fire-blog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-title" ><h3><span>',
        'after_title'   => '</span></h3></div>',
    ) );
}
add_action( 'widgets_init', 'fire_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fire_blog_scripts() {

    /**
    * CSS
    */

	wp_enqueue_style( 'fire-blog-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/css/font-awesome.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri(). '/css/animate.min.css' );
	wp_enqueue_style( 'fire-blog-plugin.css', get_template_directory_uri(). '/css/plugin.css' );
	wp_enqueue_style( 'fire-blog-worksans_font','https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700' );
	wp_enqueue_style( 'fire-blog-josefin_sans', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,600,700' );
	wp_enqueue_style( 'fire-blog-style1', get_template_directory_uri(). '/css/style.css' );

    /**
    * JS
    */

	wp_enqueue_script( 'slick-lightbox', get_template_directory_uri() . '/js/slick-lightbox.min.js', array('jquery'),array(), true );

	wp_enqueue_script( 'fire-blog_tether', get_template_directory_uri() . '/js/tether.min.js', array('jquery'), true );

    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/js/waypoint.min.js',array('jquery'),  true );
    wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js',array('jquery'),  true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.min.js',array('jquery'),  true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js',array('jquery'),  true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'),  true );

    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/slicknav.js',array('jquery'),  true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.js',array('jquery'),  true );
    
    wp_register_script( 'fire-blog_custom', get_template_directory_uri() . '/js/custom.js', array('jquery'),array(), true );

    $map_info = array();
     
    $map_var = apply_filters( 'fire_blog_localize_script', $map_info );

    wp_localize_script( 
        'fire-blog_custom',
        'fire_blog_object',
        $map_var
    );

    wp_enqueue_script( 'fire-blog_custom' );

    wp_enqueue_script( 'jquery_parallex', get_template_directory_uri() . '/js/jquery_parallax.js', array('jquery'),array(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', 'fire_blog_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

require get_template_directory() . '/inc/kirki/kirki.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Widgets
 */
require get_template_directory() . '/inc/widgets/about-me.php';

/**
 * Enqueue style for custom customize control.
 */
add_action( 'customize_controls_enqueue_scripts', 'fire_blog_custom_customize_enqueue' );
function fire_blog_custom_customize_enqueue() {

    wp_enqueue_style( 'fire-blog-customize-controls', get_template_directory_uri() . '/inc/sections/customizer.css' );
}


// Class for li
add_filter('nav_menu_css_class','fire_blog_menu_li_class',1,3);
function fire_blog_menu_li_class($classes, $item, $args) {
    if($args->theme_location == 'menu-1') {
        $classes[] = 'nav-item dropdown has-submenu';
    }
    return $classes;
}

// Class for anchor
add_filter( 'nav_menu_link_attributes', 'fire_blog_menu_anchor_class', 10, 3 );
function fire_blog_menu_anchor_class( $atts, $item, $args ) {
    $class = 'nav-link ' . ( empty( $item->menu_item_parent ) ? 'dropdown-toggle' : '' ) ; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}

function fire_blog_get_logo(){

	if( has_custom_logo() ){
        the_custom_logo();
	} else {
		echo '<div class = "logo_name_description" >';
		echo '<a href="'.esc_url( home_url() ).'"><h3>'.esc_html( get_bloginfo('name') ).'</h3>';
		echo '<p>'. esc_html( get_bloginfo( 'description' ) ) . '</p> </a>';
		echo '</div>';
	}
}

/**
* Breadcrumbs
*/

function fire_blog_custom_breadcrumbs() {
       
    // Settings
    $separator          = '/';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = esc_html__( 'Home' , 'fire-blog' );;
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'category';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
           
        // Home page
        echo '<li class="item-home cyclone-hotel-home"><a class="bread-link bread-home" href="' . esc_url( home_url() ) . '">' . esc_html( $home_title ) . '</a></li>';
        
        if ( is_single() ) {
              
            // Get post category info
            $category = get_the_category();

            if(!empty($category)) {
              
                // Get last category post is in
                $a = array_slice($category, -1);
                $last_category =array_pop($a);
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'. wp_kses_post( $parents ) .'</li>';
                    //$cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );

                if( !empty( $taxonomy_terms ) && is_array( $taxonomy_terms ) ){

                  $cat_id         = $taxonomy_terms[0]->term_id;
                  $cat_nicename   = $taxonomy_terms[0]->slug;
                  $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                  $cat_name       = $taxonomy_terms[0]->name;

                }
                
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {

                $allowed_html = array(
                  'li' => array(
                    'class' => array()
                  ),
                  'a' => array(
                    'href' => array()
                  )
                );

                echo wp_kses( $cat_display , $allowed_html );
                echo '<li class="item-current"><span class="bread-current active">' . esc_html( get_the_title() ) . '</span></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat"><a class="bread-cat" href="' . esc_url( $cat_link ) . '">' . esc_html( $cat_name ) . '</a></li>';

				echo '<li class="item-current"><span class="active bread-current">' . esc_html( get_the_title() ) . '</span></li>';
              
            } else {
                  
                echo '<li class="item-current"><span class="active bread-current">' . esc_html( get_the_title() ) . '</span></li>';
                  
            }
              
        } elseif ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><span class="active bread-current bread-cat">' . single_cat_title('', false) . '</span></li>';
               
        } elseif ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                $parents = '';
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent"><a class="bread-parent" href="' . esc_url( get_permalink($ancestor) ) . '">' . esc_html( get_the_title($ancestor) ) . '</a></li>';
                }
                   
                // Display parent pages

                echo wp_kses( 
                  $parents, 
                  array(
                    'li' => array(
                      'class' => array()
                    ),
                    'a' => array(
                      'class' => array(),
                      'href' => array(),
                      'title' => array()
                    ),
                  )
                );
                   
                // Current page
                echo '<li class="item-current"><span class="active"> ' . esc_html( get_the_title() ) . '</span></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current"><span class="active bread-current">' . esc_html( get_the_title() ) . '</span></li>';
                   
            }
               
        } elseif ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current"><span class="active">' . esc_html( $get_term_name ) . '</span></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year"><a class="bread-year" href="' . esc_url( get_year_link( get_the_time('Y') ) ) . '">' . esc_html( get_the_time('Y') ) . '</a></li>';
               
            // Month link
            echo '<li class="item-month"><a class="bread-month" href="' . esc_url( get_month_link( get_the_time('Y'), get_the_time('m') ) ) . '">' . esc_html( get_the_time('M') ) . '</a></li>';
               
            // Day display
            echo '<li class="item-current"><span class="active bread-current"> ' . esc_html( get_the_time('jS') ) . ' ' . esc_html( get_the_time('M') ) . '</span></li>';
               
        } elseif ( is_month() ) {
               
            // Month Archive
               
            // Year link

			echo '<li class="item-year"><a class="bread-year" href="' . esc_url( get_year_link( get_the_time('Y') ) ) . '">' . esc_html( get_the_time('Y') ) . '</a></li>';
               
            // Month display
            echo '<li class="item-month"><span class="active bread-month">' . esc_html( get_the_time('M') ) . '</span></li>';
               
        } elseif ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current"><span class="active bread-current">' . esc_html( get_the_time('Y') ) . ' </span></li>';
               
        } elseif ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );

            /* translators: %s is replaced with "string". It will display the author name */
            echo '<li class="item-current"><span class="active bread-current">' . sprintf( esc_html__( 'Author: %s', 'fire-blog' ) , esc_html( $userdata->display_name ) ) . '</span></li>';
           
        } elseif ( is_search() ) {
           
           $search_title = explode( ',' , get_search_query() );

            /* translators: %s is replaced with "string". It will display the search title */
            echo '<li class="item-current"><span class="active bread-current">' . sprintf( esc_html__( 'Search results for: %s' , 'fire-blog' ) , esc_html( $search_title[0] ) ) . '</span></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li class="active">' . esc_html__( 'Error 404' , 'fire-blog' ) . '</li>';
        } elseif( is_tax() ){

          $term = get_term_by("slug", get_query_var("term"), get_query_var("taxonomy") );

          $tmpTerm = $term;
          $tmpCrumbs = array();
          while ($tmpTerm->parent > 0){
              $tmpTerm = get_term($tmpTerm->parent, get_query_var("taxonomy"));
              $crumb = '<li><a href="' . esc_url( get_term_link($tmpTerm, get_query_var('taxonomy')) ) . '">' . esc_html( $tmpTerm->name ) . '</a></li>';
              array_push($tmpCrumbs, $crumb);
          }
          echo implode('', array_reverse($tmpCrumbs));
          echo '<li class="item-current item-cat"><span class="active bread-current bread-cat">' . esc_html( $term->name ) . '</span></li>';

        }
                  
    }
       
}

function fire_blog_breadcumbs_title(){
	// Get the query & post information
    global $post,$author;
    // Do not display on the homepage
    if ( !is_front_page() ) {
        
        if ( is_single() ) {
        	//single page
           echo esc_html($post->post_title); 

        } elseif ( is_tax() ) {

            $queried_object = get_queried_object();
            echo esc_html($queried_object->name);
            
        } elseif ( is_category() ) {
         // Category page
	       	$category = wp_get_post_terms( $post->ID, 'category' );
		    echo esc_html($category[0]->name);

    	} elseif ( is_author() ){
    		$userdata = get_userdata( $author );
    		echo esc_html($userdata->display_name);

    	}elseif ( is_day() ) {
            
            // Year link
            echo esc_html( get_the_time('Y') ) . ' ';
               
            // Month link
            echo esc_html( get_the_time('M') ) . ' ';
               
            // Day display
            echo esc_html( get_the_time('jS') ) . ' - ' . esc_html( get_the_time('M') );
               
        } elseif ( is_month() ) {
               
            // Month Archive
               
            // Year link

			echo esc_html( get_the_time('Y') ) .' - ' ;
               
            // Month display
            echo esc_html( get_the_time('M') );
               
        } elseif ( is_year() ) {
               
            // Display year archive
            echo esc_html( get_the_time('Y') );
               
        } elseif ( is_404() ) {
        	echo esc_html__( 'Error 404' , 'fire-blog' );
        } elseif ( is_page() ) {
        	echo esc_html( get_the_title() );
        } else if ( is_search() ){
        	$search_title = get_search_query();
        	echo esc_html($search_title);
        } elseif ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo esc_html( $get_term_name );
           
        }
    }     
}

function fire_blog_homepage_views(){

	$homepage_views = get_theme_mod( 'homepage_view', 'right' );

	switch ( $homepage_views ) {
		case 'right':			
			get_template_part( 'template-parts/homepage', 'right' );
			break;

		case 'left':			
			get_template_part( 'template-parts/homepage', 'left' );
			break;

		case 'full':			
			get_template_part( 'template-parts/homepage', 'full' );
			break;

		case 'two':			
			get_template_part( 'template-parts/homepage', 'two' );
			break;

		case 'three':			
			get_template_part( 'template-parts/homepage', 'three' );
			break;
		
		default:
			# code...
			break;
	}

}

function fire_blog_all_categories(){

	$data = array();

	$terms = get_terms( array(
		'taxonomy' => 'category',
         'hide_empty' => false,
	) );

	foreach ($terms as $term) {
		$id = $term->term_id;
		$data[$id] = $term->name;
	}
	return $data;

}

function fire_blog_archive_listing_style(){

    $archive_style = get_theme_mod( 'archive_style', 'list' );

    if( $archive_style == 'list' ){

        get_template_part( 'template-parts/archive', 'list' );

    } else {

        get_template_part( 'template-parts/archive', 'grid' );

    }

}

function fire_blog_wp_custom_pagination($args = array(), $class = 'pagination') {

    echo '<div class="result-paging-wrapper">';
    the_posts_pagination( 
        array(
            'mid_size'      => 2,
            'prev_text' => esc_html__( '&laquo;', 'fire-blog' ),
            'next_text' => esc_html__( '&raquo;', 'fire-blog' ),
        ) 
    );
    echo '</div>';

}

function fire_blog_all_pages_option($select=null){
    
    $data = array();

    $pages = get_pages();

    foreach ($pages as $page ) {
        
        $id = $page->ID;
        $data[$id] = $page->post_title;
        echo '<option ';
        selected( $select, $id);
        echo ' value="' . esc_html($id) . '">' . esc_html($data[$id])  . '</option>';

    }
}

if( !function_exists('fire_blog_footer_copyright') ){
    
    function fire_blog_footer_copyright(){

        echo '<p>';
        esc_html_e( 'Copyright &copy;', 'fire-blog' ); 
        echo date_i18n( __( 'Y' , 'fire-blog' ) ); ?> 
                        
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
            <?php bloginfo( 'name' ); ?>
        </a>

        <?php 

        esc_html_e( '. All rights reserved. ', 'fire-blog' ); 

        printf( 
            esc_html__( 'Powered %1$s by %2$s', 'fire-blog' ), 
            '', 
            '<a href="https://wordpress.org/" target="_blank">WordPress</a>' 
        ); 
        ?>

        <span class="sep"> &amp; </span>

        <?php esc_html_e( 'Designed by', 'fire-blog' ); ?> 

        <a href="<?php echo esc_url( 'http://cyclonethemes.com/'); ?>" target="_blank">
            <?php esc_html_e( 'Cyclone Themes', 'fire-blog' ); ?>
        </a>

        <?php
        echo '</p>';
    }
}

add_filter('nav_menu_css_class' , 'fire_blog_special_nav_class' , 10 , 2);

function fire_blog_special_nav_class($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function fire_blog_all_pages(){
    
    $data = array();

    $pages = get_pages();

    foreach ($pages as $page ) {
        
        $id = $page->ID;
        $data[$id] = $page->post_title;

    }
    return $data;
}

/**
* Recommended plugins 
*/

add_action( 'tgmpa_register', 'fire_blog_register_required_plugins' );
function fire_blog_register_required_plugins() {

    $plugins = array(  
        array(
            'name' => esc_html__( 'Cyclone Widgets', 'fire-blog' ),
            'slug' => 'cyclone-widget'
        )
    );

    $config = array(
        'id'           => 'fire_blog_tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );

}

add_filter( 'excerpt_length', 'fire_blog_custom_excerpt_length', 999 );
function fire_blog_custom_excerpt_length( $length ) {
    return 15;
}

// Create a helper function for easy SDK access.
function fire_blog_fb_fs() {
    global $fb_fs;

    if ( ! isset( $fb_fs ) ) {
        // Include Freemius SDK.
        require_once get_template_directory() . '/freemius/start.php';

        $fb_fs = fs_dynamic_init( array(
            'id'                  => '2038',
            'slug'                => 'fire-blog',
            'type'                => 'theme',
            'public_key'          => 'pk_2e2c9be202679bfd9f5d518bf5396',
            'is_premium'          => false,
            'has_addons'          => false,
            'has_paid_plans'      => false,
            'menu'                => array(
                'account'        => false
            ),
        ) );
    }

    return $fb_fs;
}

// Init Freemius.
fire_blog_fb_fs();
// Signal that SDK was initiated.
do_action( 'fb_fs_loaded' );

if ( is_admin() ) {
    // Load about.
    require_once trailingslashit( get_template_directory() ) . '/inc/theme-info/class-about.php';
    require_once trailingslashit( get_template_directory() ) . '/inc/theme-info/about.php';

    // Load demo.
    require_once trailingslashit( get_template_directory() ) . '/inc/demo/class-demo.php';
    require_once trailingslashit( get_template_directory() ) . '/inc/demo/demo.php';
}

function fire_blog_get_banner_title(){

    $banner_title = get_theme_mod( 'banner_title' );
    return esc_html( $banner_title );

}

function fire_blog_get_banner_subtitle(){

    $banner_subtitle = get_theme_mod( 'banner_subtitle' );
    return esc_html( $banner_subtitle );

}

function fire_blog_get_three_social_links( $post_id , $image ){ ?>
    
    <div class="blog-social clearfix">
        <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink( $post_id )); ?>&picture=<?php echo esc_url( $image ); ?>&title=<?php echo esc_attr(  get_the_title( $post_id ) ); ?>&quote=<?php echo esc_attr(  get_the_title( $post_id ) ); ?>&description=<?php echo esc_attr(  get_the_title( $post_id ) ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo esc_attr( 'Share on Facebook' , 'fire-blog' ) ?>">
            <div class="socibox">
                <span class="fa fa-facebook"></span>
            </div>
        </a>
        <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo esc_url(get_permalink( $post_id )); ?>&picture=<?php echo esc_url( $image ); ?>&text=<?php echo esc_attr(  get_the_title( $post_id ) ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo esc_attr( 'Share on Twitter' , 'fire-blog' ) ?>">
            <div class="socibox">
                <span class="fa fa-twitter"></span>
            </div>
        </a>
        <a target="_blank" href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink( $post_id )); ?>&picture=<?php echo esc_url( $image ); ?>&title=<?php echo esc_attr(  get_the_title( $post_id ) ); ?>&quote=<?php echo esc_attr(  get_the_title( $post_id ) ); ?>&description=<?php echo esc_attr(  get_the_title( $post_id ) ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo esc_attr( 'Share on Google Plus' , 'fire-blog' ) ?>">
            <div class="socibox">
                <span class="fa fa-google-plus"></span>
            </div>
        </a>
    </div><!-- end blog-social -->

    <?php
}

function fire_blog_get_five_social_links( $post_id , $image ){ ?>

    <div class="blog-social clearfix">
        <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink( $post_id )); ?>&picture=<?php echo esc_url( $image ); ?>&title=<?php echo esc_attr( get_the_title( $post_id ) ); ?>&quote=<?php echo esc_attr( get_the_title( $post_id ) ); ?>&description=<?php echo esc_attr( get_the_title( $post_id ) ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e( 'Share on Facebook', 'fire-blog' ) ?>">
            <div class="socibox">
                <span class="fa fa-facebook"></span>
            </div>
        </a>
        <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo esc_url(get_permalink( $post_id )); ?>&picture=<?php echo esc_url( $image ); ?>&text=<?php echo esc_attr( get_the_title( $post_id ) ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e( 'Share on Twitter', 'fire-blog' ) ?>">
            <div class="socibox">
                <span class="fa fa-twitter"></span>
            </div>
        </a>
        <a target="_blank" href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink( $post_id )); ?>&picture=<?php echo esc_url( $image ); ?>&title=<?php echo esc_attr( get_the_title( $post_id ) ); ?>&quote=<?php echo esc_attr( get_the_title( $post_id ) ); ?>&description=<?php echo esc_attr( get_the_title( $post_id ) ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e( 'Share on Google Plus', 'fire-blog' ) ?>">
            <div class="socibox">
                <span class="fa fa-google-plus"></span>
            </div>
        </a>
        <a target="_blank" href="https://pinterest.com/pin/create/%20button?url=<?php echo esc_url(get_permalink( $post_id )); ?>&picture=<?php echo esc_url( $image ); ?>&text=<?php echo esc_attr( get_the_title( $post_id ) ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e( 'Share on Pinterest', 'fire-blog' ) ?>">
            <div class="socibox">
                <span class="fa fa-pinterest"></span>
            </div>
        </a>
        <a target="_blank" href="https://www.linkedin.com/cws/share?url=<?php echo esc_url(get_permalink( $post_id )); ?>&picture=<?php echo esc_url( $image ); ?>&text=<?php echo esc_attr( get_the_title( $post_id ) ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e( 'Share on Linkedin', 'fire-blog' ) ?>">
            <div class="socibox">
                <span class="fa fa-linkedin"></span>
            </div>
        </a>
    </div>

    <?php
}

function fire_blog_partial_refresh_copyright(){
    $copyright_area = get_theme_mod( 'blog_copyright' );
    return wp_kses_post( $copyright_area );
}