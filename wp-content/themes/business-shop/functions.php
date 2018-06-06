<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'business_shop_enqueue_styles' );
function business_shop_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

function business_shop_theme_setup(){
register_nav_menus( array(
		'business_shop_menu' => esc_html__( 'Slider Menu', 'store-corner' ),
	) );
	
	add_image_size( 'business_shop_slide', 1980, 800, true );
}
add_action( 'after_setup_theme', 'business_shop_theme_setup' );
/**
 * Register widget area.
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function business_shop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Front Page Widget Area 1', 'store-corner' ),
		'id'            => 'business-shop-widget-1',
		'description'   => __( 'Show Full width widget on front page.', 'store-corner' ),
		'before_widget' => '<div id="%1$s" class="row %2$s"><div class="home-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Front Page Widget Area 2', 'store-corner' ),
		'id'            => 'business-shop-widget-2',
		'description'   => __( 'Show Full width widget on front page.', 'store-corner' ),
		'before_widget' => '<div id="%1$s" class="row %2$s"><div class="home-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'business_shop_widgets_init' );

add_action( 'customize_register', 'business_shop_customize_register' );
function business_shop_customize_register( $wp_customize ) {
	
	if(store_corner_is_wc()){
	$product_cat = get_terms( 'product_cat' ); // Get all Categories
	//$wp_category_list = array();
	$product_cats = array();
	$i = 0;
	foreach($product_cat as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$product_cats[$category->slug] = $category->name;
	}
	}
	
	$wp_customize->add_setting('store_corner_display_menu_setting', array(
		'default'        => 1,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_menu_control', array(
		'settings' => 'store_corner_display_menu_setting',
		'label'    => __('Display Slider Sidebar Menu', 'store-corner'),
		'section'  => 'store_corner_slider_section',
		'type'     => 'checkbox',
		'priority'	=> 20
	));
	
$wp_customize->add_section( 'store_corner_service_section' , array(
		'title'       => __( 'Services', 'store-corner' ),
		'priority'    => 20,
		'description' => __( 'Services Option', 'store-corner' ),
		'panel'  => 'store_corner_home_featured_panel',
	) );

	$wp_customize->add_setting('store_corner_display_service_setting', array(
		'default'        => 1,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_service_control', array(
		'settings' => 'store_corner_display_service_setting',
		'label'    => __('Display Services', 'store-corner'),
		'section'  => 'store_corner_service_section',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
	
	for($i=1; $i<=3; $i++){
	
	$wp_customize->add_setting('service_icon_'.$i, array(
		'default'        => '',
		'sanitize_callback' => 'store_corner_sanitize_text_field',
	));

	$wp_customize->add_control('service_icon_'.$i.'_control', array(
		'settings' => 'service_icon_'.$i,
		'label'    => __('Service Icon ', 'store-corner').$i,
		'description'    => __('Add related font-awesome icon class', 'store-corner'),
		'section'  => 'store_corner_service_section',
		'priority'	=> 24
	));
	
	$wp_customize->add_setting('service_'.$i, array(
			'sanitize_callback'=>'business_shop_sanitize_integer',
		)
	);
	$wp_customize->add_control( 
	new Business_Shop_Page_Control( 
	$wp_customize, 'service_'.$i.'_control',
	array(
		'label'    => __('Service Page ', 'store-corner').$i,
		'section'  => 'store_corner_service_section',
		'settings' => 'service_'.$i,
		'priority'	=> 24	
	) ) );
	
	}
	
	//Products Collection 3
	$wp_customize->add_section( 'store_corner_collection_section3' , array(
		'title'       => __( 'Categories Collection 3', 'store-corner' ),
		'priority'    => 30,
		'description' => __( 'This is WooCommerce Section. Please Activate WooCommerce Plugin to Enable it.', 'store-corner' ),
		'panel'  => 'store_corner_home_featured_panel',
	) );
	
	$wp_customize->add_setting('store_corner_display_coll3_setting', array(
		'default'        => 0,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_col3_control', array(
		'settings' => 'store_corner_display_coll3_setting',
		'label'    => __('Display Products Collection 3', 'store-corner'),
		'section'  => 'store_corner_collection_section3',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
	
	if(store_corner_is_wc()){
	$wp_customize->add_setting('store_corner_product_cat3', array(
		'default' => '',
		'sanitize_callback' => 'store_corner_sanitize_cat',
	));
	

	$wp_customize->add_control(
		new Business_Shop_Control_Multiple_Select (
			$wp_customize,
			'store_corner_product_cat3',
			array(
				'settings' => 'store_corner_product_cat3',
				'label'    => 'Featured category',
				'section'  => 'store_corner_collection_section3', // Enter the name of your own section
				'type'     => 'multiple-select', // The $type in our class
				'choices' => store_corner_cats(),
				'priority'	=> 25
			)
		)
	);
	}
	
	//Products Collection 3
	$wp_customize->add_section( 'store_corner_widget_section' , array(
		'title'       => __( 'Widget Section', 'store-corner' ),
		'priority'    => 30,
		'description' => __( 'Add widgets to home page.', 'store-corner' ),
		'panel'  => 'store_corner_home_featured_panel',
	) );
	
	$wp_customize->add_setting('store_corner_display_widget1_setting', array(
		'default'        => 0,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_widget1_control', array(
		'settings' => 'store_corner_display_widget1_setting',
		'label'    => __('Display Widget Section 1', 'store-corner'),
		'section'  => 'store_corner_widget_section',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
	
	$wp_customize->add_setting('store_corner_display_widget2_setting', array(
		'default'        => 0,
		'sanitize_callback' => 'store_corner_sanitize_checkbox',
	));

	$wp_customize->add_control('store_corner_display_widget2_control', array(
		'settings' => 'store_corner_display_widget2_setting',
		'label'    => __('Display Widget Section 2', 'store-corner'),
		'section'  => 'store_corner_widget_section',
		'type'     => 'checkbox',
		'priority'	=> 24
	));
}
function store_corner_col3_active_callback() {
	if ( get_theme_mod( 'store_corner_display_coll3_setting', 0 ) ) {
		return true;
	}
	return false;
}
/* class for Page select custom control */
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Business_Shop_Page_Control' ) ) :
class Business_Shop_Page_Control extends WP_Customize_Control 
{  
 public function render_content(){ ?>
	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	<?php $page_data = array( 'post_type' => 'page', 'post_status'=>'publish','posts_per_page'=> -1); 
		$page_info = new WP_Query( $page_data ); ?>
		<select <?php $this->link(); ?> >
		<option value= ""<?php if($this->value()=='') echo 'selected="selected"';?>><?php esc_html_e('Not Page Selected','store-corner'); ?></option>
		<?php if($page_info->have_posts()):
			while($page_info->have_posts()):
				$page_info->the_post();?>
				 <option value= "<?php echo esc_attr(get_the_id()); ?>"<?php if($this->value()== get_the_id() ) echo 'selected="selected"';?>><?php the_title(); ?></option>
				<?php endwhile; 
	     endif; wp_reset_postdata(); ?>
		 </select>
		 <?php
}  /* public function ends */
}/*   class ends */
endif;
function business_shop_sanitize_integer( $input ) {
    return (int)($input);
}

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Business_Shop_Control_Multiple_Select' ) ) :
class Business_Shop_Control_Multiple_Select extends WP_Customize_Control {

/**
 * The type of customize control being rendered.
 */
public $type = 'multiple-select';

/**
 * Displays the multiple select on the customize screen.
 */
public function render_content() {

if ( empty( $this->choices ) )
    return;
?>
    <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <select <?php $this->link(); ?> multiple="multiple" style="height: 100%;">
            <?php
                foreach ( $this->choices as $value => $label ) {
                    $selected = ( in_array( $value, $this->value() ) ) ? selected( 1, 1, false ) : '';
                    echo '<option value="' . esc_attr( $value ) . '"' . $selected . '>' . $label . '</option>';
                }
            ?>
        </select>
    </label>
<?php }}
endif;

function store_corner_cats() {
	if(store_corner_is_wc()){
	$product_cats = array();
	$i = 0;
	foreach(get_terms( 'product_cat' ) as $product_cat => $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$product_cats[$category->slug] = $category->name;
	}
	}
  return $product_cats;
}

function store_corner_sanitize_cat( $input )
{
    $valid = store_corner_cats();

    foreach ($input as $value) {
        if ( !array_key_exists( $value, $valid ) ) {
            return [];
        }
    }

    return $input;
}