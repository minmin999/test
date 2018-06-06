<?php
/**
 * Add customizer settings
 * 
 * @since Popular ecommerce
 */
function popular_ecommerce_customize_register_homepage( $wp_customize ) {

   
    
    //Homepage Panel Create
    $wp_customize->add_panel( 'popular_ecommerce_homepage_panel', array(
        'title'      => esc_html__( 'Frontpage', 'popular-ecommerce' ),
        'priority'   => 5
    ) );

    
    /************************************************************
     *              Homepage Single Products Select
     ***********************************************************/
    //Single Products Section
    $wp_customize->add_section( 'popular_ecommerce_single_products', array(
        'title'    => esc_html__( 'Single Products Section', 'popular-ecommerce' ),
        'priority' => 1,
        'panel'    =>'popular_ecommerce_homepage_panel'
    ) );

    /** Single products */
    $wp_customize->add_setting( 
        'popular_ecommerce_single_products_section_enable', 
        array(
            'default' => false,
            'sanitize_callback' => 'popular_ecommerce_sanitize_checkbox'
        )
    );
     
    $wp_customize->add_control( 
        'popular_ecommerce_single_products_section_enable', 
        array(
            'label' => esc_html__( 'Enable Single Products Secion', 'popular-ecommerce' ),
            'section' => 'popular_ecommerce_single_products',
            'type' => 'checkbox',
            'priority' => 1,
        )
    );      
    


    /** Single Products Title */
	$wp_customize->add_setting(
        'popular_ecommerce_single_products_slider_header_title',
        array(
            'default'           => esc_html__('CHOOSE THE BEST','popular-ecommerce'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
		'popular_ecommerce_single_products_slider_header_title',
		array(
			'section'	  => 'popular_ecommerce_single_products',
			'label'		  => esc_html__( 'Header Title', 'popular-ecommerce' ),
			'description' => esc_html__( 'Display the header title.Ex: CHOOSE THE BEST', 'popular-ecommerce' ),
            'type'        => 'text',
            'priority'    => 2,
		)		
    );


    /** Single Products Desc */
	$wp_customize->add_setting(
        'popular_ecommerce_single_products_slider_header_desc',
        array(
            'default'           => esc_html__('MIRUM EST NOTARE QUAM LITTERA GOTHICA QUAM NUNC PUTAMUS PARUM CLARAM!','popular-ecommerce'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
		'popular_ecommerce_single_products_slider_header_desc',
		array(
			'section'	  => 'popular_ecommerce_single_products',
			'label'		  => esc_html__( 'Header Sort Description', 'popular-ecommerce' ),
			'description' => esc_html__( 'Display the header sort description.', 'popular-ecommerce' ),
            'type'        => 'textarea',
            'priority'    => 3,
		)		
    );



    /** Category Section Hear */
    $wp_customize->add_setting(
		'popular_ecommerce_single_products_id', 
		array(
            'default' => array(),
            'sanitize_callback'=>'popular_ecommerce_sanitize_multiple_check'
		)
	);
	$wp_customize->add_control(
		new Popular_Ecommerce_MultiCheck_Control(
			$wp_customize,
            'popular_ecommerce_single_products_id',
			array(
				'section'     => 'popular_ecommerce_single_products',
				'label'       => esc_html__( 'Single Products Select', 'popular-ecommerce' ),
                'description' => esc_html__( 'Select the Single products.', 'popular-ecommerce' ),
				'choices'     => popular_ecommerce_get_woocommerce_products_id( )
			)
		)
    );
        
}
add_action( 'customize_register', 'popular_ecommerce_customize_register_homepage' );


/*************************************************************
 *                 Sanitization Functions
 ***********************************************************/
//Checkbox
function popular_ecommerce_sanitize_checkbox( $checked ) {
// Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

//Multiple checkbox section
function popular_ecommerce_sanitize_multiple_check( $value ) {                        
    $value = ( ! is_array( $value ) ) ? explode( ',', $value ) : $value;
    return ( ! empty( $value ) ) ? array_map( 'sanitize_text_field', $value ) : array();    
}
   

//Remove the Section on child theme
function popular_ecommerce_remove_section_customize_register() {     
    global $wp_customize;

        //Remove control 
        $wp_customize->remove_control( 'ostore_slider_style' );
        $wp_customize->remove_control( 'ostore_woo_category_1' );
        $wp_customize->remove_control( 'ostore_woo_category_2' );

        //Remove Panel
        $wp_customize->remove_panel( 'os_store_footer' );

        //Remove section 
        $wp_customize->remove_section( 'payment_logo_slider' );
        $wp_customize->remove_section( 'top_header' );  //Modify this line as needed 
} 
add_action( 'customize_register', 'popular_ecommerce_remove_section_customize_register', 11 );

