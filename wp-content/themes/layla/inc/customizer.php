<?php

/**
 * Layla Theme Customizer.
 *
 * @package Layla
 */

/**
 * Add refresh support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function layla_customize_register( $wp_customize ) {

    class LaylaCustomizerPanel extends WP_Customize_Control {

        public function render_content() { ?>
            
            <p>
                <a target="_BLANK" href="http://layla.smartcatdev.wpengine.com/" class="button-primary"><?php _e( 'Live demo', 'layla' ); ?></a>
            </p>

            <p>
                <?php _e( 'Layla allows you to easily create a frontpage, blog page, e-commerce shop page, and it also includes templates allowing you to customize where the sidebars are located', 'layla' ); ?>
            </p>
            <p>
                <?php _e( 'The <b>Frontpage</b> section includes customization options for your Frontpage. You can select a post, page or WooCommerce product to be featured in the main jumbotron. There are 3 sections that allow you to feature your pages, posts or products.', 'layla' ); ?>
            </p>
            <p>
                <?php _e( 'You can select if you want your homepage to show the Blog or the Frontpage from <b> Frontpage -> Static Front Page</b>', 'layla' ); ?>
            </p>
            <h4>
                <?php _e( 'Enjoy this free theme! If you have any recommendations, comments or suggestions please leave us a comment on our', 'layla' ); ?>
                <a href="https://www.facebook.com/SmartcatDesign/" target="_BLANK"><?php _e( 'Facebook page', 'layla' ); ?></a>
            </h4>
        <?php }

    }
    
    
    // *********************************************
    // ****************** General ******************
    // *********************************************
    
    $wp_customize->add_section('header_image', array(
        'title'     => __( 'Jumbotron', 'layla' ),
        'priority'  => 0.5,
        'panel'     => 'homepage'
    ));
    
    $wp_customize->add_section('layla_demo', array(
        'title'     => __( 'Theme Demo & Instructions', 'layla'),
        'priority'  => 0.5,
    ));
    
	$wp_customize->add_setting( 'layla_demo_details', array(
            'default'           => false,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
            new LaylaCustomizerPanel(
            $wp_customize,
            'layla_demo',
                array(
                    'label'     => __('Layla Demo','layla'),
                    'section'   => 'layla_demo',
                    'settings'  => 'layla_demo_details',
                )
            )
	);

        

    $wp_customize->add_section( 'social_links', array (
        'title'                 => __( 'Social Icons & Links', 'layla' ),
        'priority'              => 10,
    ) );
    
    $wp_customize->add_setting( 'layla_social_featured', array (
        'default'               => 'on',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'layla_radio_sanitize_onoff'
    ) );

   $wp_customize->add_control( 'layla_social_featured', array(
        'label'         => __( 'Display the social icons in the featured post ?', 'layla' ),
        'section' => 'social_links',
        'type'    => 'radio',
        'choices'    => array(
            'on'    => __( 'Yes', 'layla' ),
            'off'    => __( 'No', 'layla' )
        )
    ));
    
    $wp_customize->add_setting( 'layla_social_footer', array (
        'default'               => 'on',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'layla_radio_sanitize_onoff'
    ) );

   $wp_customize->add_control( 'layla_social_footer', array(
        'label'         => __( 'Display the social icons in the footer ?', 'layla' ),
        'section' => 'social_links',
        'type'    => 'radio',
        'choices'    => array(
            'on'    => __( 'Yes', 'layla' ),
            'off'    => __( 'No', 'layla' )
        )
    ));
    
    $wp_customize->add_setting( 'facebook_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'facebook_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Facebook URL', 'layla' )
        
    ) );
    
    $wp_customize->add_setting( 'gplus_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'gplus_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Google Plus URL', 'layla' )
        
    ) );
    
    $wp_customize->add_setting( 'instagram_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'instagram_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Instagram URL', 'layla' )
        
    ) );
    
    $wp_customize->add_setting( 'linkedin_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'linkedin_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Linkedin URL', 'layla' )
        
    ) );
    
    $wp_customize->add_setting( 'pinterest_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'pinterest_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Pinterest URL', 'layla' )
        
    ) );
    
    $wp_customize->add_setting( 'twitter_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'twitter_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Twitter URL', 'layla' )
        
    ) );
    
    $wp_customize->add_setting( 'vimeo_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'vimeo_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Vimeo URL', 'layla' )
        
    ) );
    
    $wp_customize->add_setting( 'spotify_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'spotify_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Spotify URL', 'layla' )
    ) );
    
    $wp_customize->add_setting( 'apple_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'apple_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Apple URL', 'layla' )
    ) );
    
    $wp_customize->add_setting( 'github_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'github_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'GitHub URL', 'layla' )
    ) );
    
    $wp_customize->add_setting( 'vine_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'vine_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Vine URL', 'layla' )
    ) );

    
    $wp_customize->add_panel( 'logo', array (
        'title' => __( 'Logo & Menu bar', 'layla' ),
        'description' => __( 'set the logo image, site title, description and site icon favicon', 'layla' ),
        'priority' => 10
    ) );

    
    
        $wp_customize->add_section( 'layla_header_color_section', array (
            'title'                 => __( 'Colors', 'layla' ),
            'panel'                 => 'logo',
        ) );
    
            $wp_customize->add_setting( 'layla_header_bg_color', array (
                'default'               => '#f9f9f9',
                'transport'             => 'refresh',
                'sanitize_callback'     => 'sanitize_hex_color',
            ) );
            $wp_customize->add_control( 
                new WP_Customize_Color_Control( $wp_customize, 'layla_header_bg_color', array(
                    'label'      => __( 'Background color', 'layla' ),
                    'section'    => 'layla_header_color_section',
                    'settings'   => 'layla_header_bg_color',
                ) ) 
            );
    
            $wp_customize->add_setting( 'layla_header_text_color', array (
                'default'               => '#4D5051',
                'transport'             => 'refresh',
                'sanitize_callback'     => 'sanitize_hex_color',
            ) );
            $wp_customize->add_control( 
                new WP_Customize_Color_Control( $wp_customize, 'layla_header_text_color', array(
                    'label'      => __( 'Menu link color', 'layla' ),
                    'section'    => 'layla_header_color_section',
                    'settings'   => 'layla_header_text_color',
                ) ) 
            );
    
        $wp_customize->add_section( 'layla_header_cart', array (
            'title'                 => __( 'Shopping cart', 'layla' ),
            'Description'           => __( 'This setting works if you have WooCommerce active', 'layla' ),
            'panel'                 => 'logo',
        ) );
        
            $wp_customize->add_setting( 'header_cart_bool', array (
                'default'               => 'on',
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_radio_sanitize_onoff'
            ) );

           $wp_customize->add_control( 'header_cart_bool', array(
                'label'   => __( 'Display shopping cart ?', 'layla' ),
                'description'   => __( 'The shopping cart will only show up if you have WooCommerce installed and activated', 'layla' ),
                'section' => 'layla_header_cart',
                'type'    => 'radio',
                'choices'    => array(
                    'on'    => __( 'Yes', 'layla' ),
                    'off'    => __( 'No', 'layla' )
                )
            ));
    
        $wp_customize->add_section( 'layla_site_search', array (
            'title'                 => __( 'Site Search', 'layla' ),
            'Description'           => __( 'Do you want to show the search icon in the header ?', 'layla' ),
            'panel'                 => 'logo',
        ) );
        
            $wp_customize->add_setting( 'header_search_bool', array (
                'default'               => 'on',
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_radio_sanitize_onoff'
            ) );

           $wp_customize->add_control( 'header_search_bool', array(
                'label'   => __( 'Display search icon ?', 'layla' ),
                'section' => 'layla_site_search',
                'type'    => 'radio',
                'choices'    => array(
                    'on'    => __( 'Yes', 'layla' ),
                    'off'    => __( 'No', 'layla' )
                )
            ));
    
    // *********************************************
    // ****************** Homepage *****************
    // *********************************************
    $wp_customize->add_panel( 'homepage', array (
        'title'                 => __( 'Frontpage', 'layla' ),
        'description'           => __( 'Customize the appearance of your homepage', 'layla' ),
        'priority'              => 10
    ) );

    $wp_customize->add_section( 'homepage_jumbotron', array (
        'title'                 => __( 'Featured Post/Page/Product', 'layla' ),
        'panel'                 => 'homepage',
    ) );
    
            $wp_customize->add_setting( 'layla_the_featured_post_toggle', array (
                'default'               => 'on',
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_radio_sanitize_onoff'
            ) );

           $wp_customize->add_control( 'layla_the_featured_post_toggle', array(
                'label'         => __( 'Display the Jumbotron ?', 'layla' ),
                'section' => 'header_image',
                'type'    => 'radio',
                'priority' => 0,
                'choices'    => array(
                    'on'    => __( 'Yes', 'layla' ),
                    'off'    => __( 'No', 'layla' )
                )
            ));
    
            $wp_customize->add_setting( 'layla_the_featured_post', array (
                'default'               => 1,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_post',
            ) );
            $wp_customize->add_control( 'layla_the_featured_post', array(
                'type'                  => 'select',
                'section'               => 'header_image',
                'priority' => 0,
                'label'                 => __( 'Select the Featured Post', 'layla' ),
                'description'           => __( 'Select a post, page or one of your WooCommerce products to be featured on the Frontpage. To edit the text that shows up, go to the post and edit it directly.', 'layla' ),
                'choices'               => layla_all_posts_array(),
            ) );
    
            $wp_customize->add_setting( 'layla_jumbotron_height', array (
                'default'               => 650,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_integer',
            ) );
            $wp_customize->add_control( 'layla_jumbotron_height', array(
                'type'                  => 'number',
                'section'               => 'header_image',
                'priority' => 0,
                'label'                 => __( 'Height of Featured Post section', 'layla' ),
                'input_attrs'           => array(
                    'min' => 300,
                    'max' => 1000,
                    'step' => 50,
            ) ) );
            
            $wp_customize->add_setting( 'layla_the_featured_post_button', array (
                'default'               => __( 'Read More', 'layla' ),
                'transport'             => 'refresh',
                'sanitize_callback'     => 'sanitize_text_field',
            ) );
            $wp_customize->add_control( 'layla_the_featured_post_button', array(
                'type'                  => 'text',
                'section'               => 'header_image',
                'label'                 => __( 'Button Text', 'layla' ),
                'priority' => 0,
            ) );
            
            $wp_customize->add_setting( 'layla_the_featured_post_highlight', array (
                'default'               => false,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_checkbox',
            ) );
            $wp_customize->add_control( 'layla_the_featured_post_highlight', array(
                'type'                  => 'checkbox',
                'section'               => 'header_image',
                'priority' => 0,
                'label'                 => __( 'Add background color to post title ?', 'layla' ),
            ) );
            

    $wp_customize->add_section( 'homepage_topa', array (
        'title'                 => __( 'Top A - Featured Page/Post/Product', 'layla' ),
        'panel'                 => 'homepage',
    ) );
    
            $wp_customize->add_setting( 'layla_the_featured_post2_toggle', array (
                'default'               => 'on',
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_radio_sanitize_onoff'
            ) );

           $wp_customize->add_control( 'layla_the_featured_post2_toggle', array(
                'label'         => __( 'Display the featured post Top A section ?', 'layla' ),
                'section' => 'homepage_topa',
                'type'    => 'radio',
                'choices'    => array(
                    'on'    => __( 'Yes', 'layla' ),
                    'off'    => __( 'No', 'layla' )
                )
            ));
    
            $wp_customize->add_setting( 'layla_the_featured_post2', array (
                'default'               => 1,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_post',
            ) );
            $wp_customize->add_control( 'layla_the_featured_post2', array(
                'type'                  => 'select',
                'section'               => 'homepage_topa',
                'label'                 => __( 'Select the Featured Post', 'layla' ),
                'choices'               => layla_all_posts_array(),
            ) );

    

    $wp_customize->add_section( 'homepage_widget', array (
        'title'                 => __( 'Top B - Homepage Widget', 'layla' ),
        'panel'                 => 'homepage',
    ) );
    

        $wp_customize->add_setting( 'homepage_widget_bool', array (
            'default'               => 'on',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'layla_radio_sanitize_onoff'
        ) );

       $wp_customize->add_control( 'homepage_widget_bool', array(
            'label'         => __( 'Display Homepage Top B Widget ?', 'layla' ),
            'description'   => __( 'This widget shows up if you have the Static Front Page set to "A static page" in customizer -> Frontpage -> Static Front Page', 'layla' ),
            'section' => 'homepage_widget',
            'type'    => 'radio',
            'choices'    => array(
                'on'    => __( 'Yes', 'layla' ),
                'off'    => __( 'No', 'layla' )
            )
        ));
    
        $wp_customize->add_setting( 'homepage_widget_background', array (
            'default'               => get_template_directory_uri() . '/inc/images/people.jpg',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'esc_url_raw'
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control5', array (
            'label' =>              __( 'Widget Background', 'layla' ),
            'section'               => 'homepage_widget',
            'mime_type'             => 'image',
            'settings'              => 'homepage_widget_background',
            'description'           => __( 'Select the image file that you would like to use as the background image', 'layla' ),        
        ) ) );
    
        
    $wp_customize->add_section( 'homepage_topc', array (
        'title'                 => __( 'Top C - 3-column Page/Post/Product', 'layla' ),
        'panel'                 => 'homepage',
    ) );
    
    
        $wp_customize->add_setting( 'homepage_topc_toggle', array (
            'default'               => 'on',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'layla_radio_sanitize_onoff'
        ) );

       $wp_customize->add_control( 'homepage_topc_toggle', array(
            'label'         => __( 'Display Homepage Top C Widget ?', 'layla' ),
            'description'   => __( 'This widget shows up if you have the Static Front Page set to "A static page" in customizer -> Frontpage -> Static Front Page', 'layla' ),
            'section' => 'homepage_topc',
            'type'    => 'radio',
            'choices'    => array(
                'on'    => __( 'Yes', 'layla' ),
                'off'    => __( 'No', 'layla' )
            )
        ));
    
            $wp_customize->add_setting( 'layla_the_featured_post3', array (
                'default'               => 1,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_post',
            ) );
            $wp_customize->add_control( 'layla_the_featured_post3', array(
                'type'                  => 'select',
                'section'               => 'homepage_topc',
                'label'                 => __( 'Select the Featured Post', 'layla' ),
                'choices'               => layla_all_posts_array(),
            ) );
    
            $wp_customize->add_setting( 'layla_the_featured_post4', array (
                'default'               => 1,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_post',
            ) );
            $wp_customize->add_control( 'layla_the_featured_post4', array(
                'type'                  => 'select',
                'section'               => 'homepage_topc',
                'label'                 => __( 'Select the Featured Post', 'layla' ),
                'choices'               => layla_all_posts_array(),
            ) );
    
            $wp_customize->add_setting( 'layla_the_featured_post5', array (
                'default'               => 1,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_post',
            ) );
            $wp_customize->add_control( 'layla_the_featured_post5', array(
                'type'                  => 'select',
                'section'               => 'homepage_topc',
                'label'                 => __( 'Select the Featured Post', 'layla' ),
                'choices'               => layla_all_posts_array(),
            ) );
            
            $wp_customize->add_setting( 'homepage_topc_button', array (
                'default'               => __( 'Learn more', 'layla' ),
                'transport'             => 'refresh',
                'sanitize_callback'     => 'sanitize_text_field',
            ) );
            $wp_customize->add_control( 'homepage_topc_button', array(
                'type'                  => 'text',
                'section'               => 'homepage_topc',
                'label'                 => __( 'Link Text', 'layla' ),
            ) );


    $wp_customize->add_section( 'static_front_page', array (
        'title' => __( 'Static Front Page', 'layla' ),
        'panel' => 'homepage',
    ) );
    
    $wp_customize->add_section( 'title_tagline', array (
        'title' => __( 'Logo, Title, Tagline & Favicon', 'layla' ),
        'panel' => 'logo',
    ) );

   
    // *********************************************
    // ****************** Apperance *****************
    // *********************************************
    $wp_customize->add_panel( 'appearance', array (
        'title'                 => __( 'Appearance', 'layla' ),
        'description'           => __( 'Customize your site colros, fonts and other appearance settings', 'layla' ),
        'priority'              => 10
    ) );
    

    
    $wp_customize->add_section( 'color', array (
        'title'                 => __( 'Skin Color', 'layla' ),
        'panel'                 => 'appearance',
    ) );
    
    $wp_customize->add_section( 'font', array (
        'title'                 => __( 'Fonts', 'layla' ),
        'panel'                 => 'appearance',
    ) );

    // Logo Bool
    $wp_customize->add_setting( 'logo_bool', array (
        'default'               => 'on',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'layla_radio_sanitize_onoff'
    ) );

    $wp_customize->add_control( 'logo_bool', array(
        'type'                  => 'radio',
        'section'               => 'logo',
        'label'                 => __( 'Display Logo', 'layla' ),
        'description'           => __( 'If you do not use a logo, the site title will be displayed', 'layla' ),  
        'choices'               => array(
            'on'              => __( 'Yes', 'layla'),
            'off'             => __( 'No', 'layla'),
        )
    ) );
    
    // Logo Image
    $wp_customize->add_setting( 'logo', array (
        'default'               => get_template_directory_uri() . '/inc/images/logo.png',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control4', array (
        'label' =>              __( 'Logo', 'layla' ),
        'section'               => 'logo',
        'mime_type'             => 'image',
        'settings'              => 'logo',
        'description'           => __( 'Image for your site', 'layla' ),        
    ) ) );
    
    
    $wp_customize->add_setting( 'layla_theme_color', array (
        'default'               => '#4cef9e',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'layla_theme_color', array(
            'label'      => __( 'Theme primary color', 'layla' ),
            'section'    => 'color',
            'settings'   => 'layla_theme_color',
        ) ) 
    );
    
    $wp_customize->add_setting( 'layla_theme_color_hover', array (
        'default'               => '#37ef93',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'layla_theme_color_hover', array(
            'label'      => __( 'Hover color', 'layla' ),
            'section'    => 'color',
            'settings'   => 'layla_theme_color_hover',
        ) ) 
    );
    
    $wp_customize->add_setting( 'header_font', array (
        'default'               => 'Oswald, sans-serif',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'layla_sanitize_font'
    ) );
    
    $wp_customize->add_control( 'header_font', array(
        'type'                  => 'select',
        'section'               => 'font',
        'label'                 => __( 'Headers Font', 'layla' ),
        'description'           => __( 'Applies to the slider header, callouts headers, post page & widget titles etc..', 'layla' ),
        'choices'               => layla_fonts()
        
    ) );
    
    $wp_customize->add_setting( 'theme_font', array (
        'default'               => 'Lato, sans-serif',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'layla_sanitize_font'
    ) );
    
    $wp_customize->add_control( 'theme_font', array(
        'type'                  => 'select',
        'section'               => 'font',
        'label'                 => __( 'General font for the site body', 'layla' ),
        'choices'               => layla_fonts()
        
    ) );
    
    
    $wp_customize->add_setting( 'menu_font_size', array (
        'default'               => '14px',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'layla_sanitize_font_size'
    ) );
    
    $wp_customize->add_control( 'menu_font_size', array(
        'type'                  => 'select',
        'section'               => 'font',
        'label'                 => __( 'Menu Font Size', 'layla' ),
        'choices'               => layla_font_sizes()
        
    ) );
    
    $wp_customize->add_setting( 'theme_font_size', array (
        'default'               => '16px',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'layla_sanitize_font_size'
    ) );
    
    $wp_customize->add_control( 'theme_font_size', array(
        'type'                  => 'select',
        'section'               => 'font',
        'label'                 => __( 'Content Font Size', 'layla' ),
        'choices'               => layla_font_sizes()
        
    ) );
    
    
    // *********************************************
    // ****************** Footer *****************
    // *********************************************
    $wp_customize->add_panel( 'footer', array (
        'title'                 => __( 'Footer', 'layla' ),
        'description'           => __( 'Customize the site footer', 'layla' ),
        'priority'              => 10
    ) );
    
        $wp_customize->add_section( 'footer_background', array (
            'title'                 => __( 'Footer Background', 'layla' ),
            'panel'                 => 'footer',
        ) );
    
            $wp_customize->add_setting( 'footer_background_toggle', array (
                'default'               => 'on',
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_radio_sanitize_onoff'
            ) );

           $wp_customize->add_control( 'footer_background_toggle', array(
                'label'         => __( 'Display the footer background ?', 'layla' ),
                'section' => 'footer_background',
                'type'    => 'radio',
                'choices'    => array(
                    'on'    => __( 'Yes', 'layla' ),
                    'off'    => __( 'No', 'layla' )
                )
            )); 
        
        
            $wp_customize->add_setting( 'footer_background_image', array (
                'default'               => get_template_directory_uri() . '/inc/images/cab.jpg',
                'transport'             => 'refresh',
                'sanitize_callback'     => 'esc_url_raw'
            ) );

            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control3', array (
                'label' =>              __( 'Footer Background Image ( Parallax )', 'layla' ),
                'section'               => 'footer_background',
                'mime_type'             => 'image',
                'settings'              => 'footer_background_image',
                'description'           => __( 'Select the image file that you would like to use as the footer background', 'layla' ),        
            ) ) );
    
    
    $wp_customize->add_section( 'payment_methods', array (
        'title'                 => __( 'Payment Methods', 'layla' ),
        'panel'                 => 'footer',
    ) );
    
        // Payment Icons - Visa
            $wp_customize->add_setting( 'layla_include_cc_visa', array (
                'default'               => true,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_checkbox',
            ) );
            $wp_customize->add_control( 'layla_include_cc_visa', array(
                'type'                  => 'checkbox',
                'section'               => 'payment_methods',
                'label'                 => __( 'Display Visa Icon?', 'layla' ),
            ) );

            // Payment Icons - MasterCard
            $wp_customize->add_setting( 'layla_include_cc_mastercard', array (
                'default'               => true,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_checkbox',
            ) );
            $wp_customize->add_control( 'layla_include_cc_mastercard', array(
                'type'                  => 'checkbox',
                'section'               => 'payment_methods',
                'label'                 => __( 'Display MasterCard Icon?', 'layla' ),
            ) );

            // Payment Icons - American Express
            $wp_customize->add_setting( 'layla_include_cc_amex', array (
                'default'               => true,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_checkbox',
            ) );
            $wp_customize->add_control( 'layla_include_cc_amex', array(
                'type'                  => 'checkbox',
                'section'               => 'payment_methods',
                'label'                 => __( 'Display American Express Icon?', 'layla' ),
            ) );

            // Payment Icons - PayPal
            $wp_customize->add_setting( 'layla_include_cc_paypal', array (
                'default'               => true,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'layla_sanitize_checkbox',
            ) );
            $wp_customize->add_control( 'layla_include_cc_paypal', array(
                'type'                  => 'checkbox',
                'section'               => 'payment_methods',
                'label'                 => __( 'Display PayPal Icon?', 'layla' ),
            ) );
    
    $wp_customize->add_section( 'footer_text', array (
        'title'                 => __( 'Copyright Text', 'layla' ),
        'panel'                 => 'footer',
    ) );
    
        $wp_customize->add_setting( 'copyright_text', array (
            'default'               => get_bloginfo( 'name' ) . ' ' . date_i18n( __( 'Y', 'layla') ),
            'transport'             => 'refresh',
            'sanitize_callback'     => 'sanitize_text_field'
        ) );

        $wp_customize->add_control( 'copyright_text', array(
            'type'                  => 'text',
            'section'               => 'footer_text',
            'label'                 => __( 'Copyright Text', 'layla' )

        ) );
    
    // *********************************************
    // ****************** Social Icons *****************
    // *********************************************
    $wp_customize->add_panel( 'social', array (
        'title'                 => __( 'Social', 'layla' ),
        'description'           => __( 'Social Icons, Links & Location', 'layla' ),
        'priority'              => 10
    ) );
   
    
    $wp_customize->get_setting( 'blogname' )->transport             = 'refresh';
    $wp_customize->get_setting( 'blogdescription' )->transport      = 'refresh';

    

    
}

add_action( 'customize_register', 'layla_customize_register' );




/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

function layla_customize_enqueue() {
    
    wp_enqueue_script( 'layla-customizer-js', get_template_directory_uri() . '/inc/js/customizer.js', array( 'jquery', 'customize-controls' ), false, true );
    
}
add_action( 'customize_controls_enqueue_scripts', 'layla_customize_enqueue' );

function layla_customize_preview_js() {
    wp_enqueue_script( 'layla_customizer', get_template_directory_uri() . '/js/customizer.js', array ( 'customize-preview' ), LAYLA_VERSION, true );
}

add_action( 'customize_preview_init', 'layla_customize_preview_js' );


function layla_icons(){
    
    return array( 
        'fa fa-clock' => __( 'Select One', 'layla'), 
        'fa fa-500px' => __( ' 500px', 'layla'), 
        'fa fa-amazon' => __( ' amazon', 'layla'), 
        'fa fa-balance-scale' => __( ' balance-scale', 'layla'), 'fa fa-battery-0' => __( ' battery-0', 'layla'), 'fa fa-battery-1' => __( ' battery-1', 'layla'), 'fa fa-battery-2' => __( ' battery-2', 'layla'), 'fa fa-battery-3' => __( ' battery-3', 'layla'), 'fa fa-battery-4' => __( ' battery-4', 'layla'), 'fa fa-battery-empty' => __( ' battery-empty', 'layla'), 'fa fa-battery-full' => __( ' battery-full', 'layla'), 'fa fa-battery-half' => __( ' battery-half', 'layla'), 'fa fa-battery-quarter' => __( ' battery-quarter', 'layla'), 'fa fa-battery-three-quarters' => __( ' battery-three-quarters', 'layla'), 'fa fa-black-tie' => __( ' black-tie', 'layla'), 'fa fa-calendar-check-o' => __( ' calendar-check-o', 'layla'), 'fa fa-calendar-minus-o' => __( ' calendar-minus-o', 'layla'), 'fa fa-calendar-plus-o' => __( ' calendar-plus-o', 'layla'), 'fa fa-calendar-times-o' => __( ' calendar-times-o', 'layla'), 'fa fa-cc-diners-club' => __( ' cc-diners-club', 'layla'), 'fa fa-cc-jcb' => __( ' cc-jcb', 'layla'), 'fa fa-chrome' => __( ' chrome', 'layla'), 'fa fa-clone' => __( ' clone', 'layla'), 'fa fa-commenting' => __( ' commenting', 'layla'), 'fa fa-commenting-o' => __( ' commenting-o', 'layla'), 'fa fa-contao' => __( ' contao', 'layla'), 'fa fa-creative-commons' => __( ' creative-commons', 'layla'), 'fa fa-expeditedssl' => __( ' expeditedssl', 'layla'), 'fa fa-firefox' => __( ' firefox', 'layla'), 'fa fa-fonticons' => __( ' fonticons', 'layla'), 'fa fa-genderless' => __( ' genderless', 'layla'), 'fa fa-get-pocket' => __( ' get-pocket', 'layla'), 'fa fa-gg' => __( ' gg', 'layla'), 'fa fa-gg-circle' => __( ' gg-circle', 'layla'), 'fa fa-hand-grab-o' => __( ' hand-grab-o', 'layla'), 'fa fa-hand-lizard-o' => __( ' hand-lizard-o', 'layla'), 'fa fa-hand-paper-o' => __( ' hand-paper-o', 'layla'), 'fa fa-hand-peace-o' => __( ' hand-peace-o', 'layla'), 'fa fa-hand-pointer-o' => __( ' hand-pointer-o', 'layla'), 'fa fa-hand-rock-o' => __( ' hand-rock-o', 'layla'), 'fa fa-hand-scissors-o' => __( ' hand-scissors-o', 'layla'), 'fa fa-hand-spock-o' => __( ' hand-spock-o', 'layla'), 'fa fa-hand-stop-o' => __( ' hand-stop-o', 'layla'), 'fa fa-hourglass' => __( ' hourglass', 'layla'), 'fa fa-hourglass-1' => __( ' hourglass-1', 'layla'), 'fa fa-hourglass-2' => __( ' hourglass-2', 'layla'), 'fa fa-hourglass-3' => __( ' hourglass-3', 'layla'), 'fa fa-hourglass-end' => __( ' hourglass-end', 'layla'), 'fa fa-hourglass-half' => __( ' hourglass-half', 'layla'), 'fa fa-hourglass-o' => __( ' hourglass-o', 'layla'), 'fa fa-hourglass-start' => __( ' hourglass-start', 'layla'), 'fa fa-houzz' => __( ' houzz', 'layla'), 'fa fa-i-cursor' => __( ' i-cursor', 'layla'), 'fa fa-industry' => __( ' industry', 'layla'), 'fa fa-internet-explorer' => __( ' internet-explorer', 'layla'), 'fa fa-map' => __( ' map', 'layla'), 'fa fa-map-o' => __( ' map-o', 'layla'), 'fa fa-map-pin' => __( ' map-pin', 'layla'), 'fa fa-map-signs' => __( ' map-signs', 'layla'), 'fa fa-mouse-pointer' => __( ' mouse-pointer', 'layla'), 'fa fa-object-group' => __( ' object-group', 'layla'), 'fa fa-object-ungroup' => __( ' object-ungroup', 'layla'), 'fa fa-odnoklassniki' => __( ' odnoklassniki', 'layla'), 'fa fa-odnoklassniki-square' => __( ' odnoklassniki-square', 'layla'), 'fa fa-opencart' => __( ' opencart', 'layla'), 'fa fa-opera' => __( ' opera', 'layla'), 'fa fa-optin-monster' => __( ' optin-monster', 'layla'), 'fa fa-registered' => __( ' registered', 'layla'), 'fa fa-safari' => __( ' safari', 'layla'), 'fa fa-sticky-note' => __( ' sticky-note', 'layla'), 'fa fa-sticky-note-o' => __( ' sticky-note-o', 'layla'), 'fa fa-television' => __( ' television', 'layla'), 'fa fa-trademark' => __( ' trademark', 'layla'), 'fa fa-tripadvisor' => __( ' tripadvisor', 'layla'), 'fa fa-tv' => __( ' tv', 'layla'), 'fa fa-vimeo' => __( ' vimeo', 'layla'), 'fa fa-wikipedia-w' => __( ' wikipedia-w', 'layla'), 'fa fa-y-combinator' => __( ' y-combinator', 'layla'), 'fa fa-yc' => __( ' yc', 'layla'), 'fa fa-adjust' => __( ' adjust', 'layla'), 'fa fa-anchor' => __( ' anchor', 'layla'), 'fa fa-archive' => __( ' archive', 'layla'), 'fa fa-area-chart' => __( ' area-chart', 'layla'), 'fa fa-arrows' => __( ' arrows', 'layla'), 'fa fa-arrows-h' => __( ' arrows-h', 'layla'), 'fa fa-arrows-v' => __( ' arrows-v', 'layla'), 'fa fa-asterisk' => __( ' asterisk', 'layla'), 'fa fa-at' => __( ' at', 'layla'), 'fa fa-automobile' => __( ' automobile', 'layla'), 'fa fa-balance-scale' => __( ' balance-scale', 'layla'), 'fa fa-ban' => __( ' ban', 'layla'), 'fa fa-bank' => __( ' bank', 'layla'), 'fa fa-bar-chart' => __( ' bar-chart', 'layla'), 'fa fa-bar-chart-o' => __( ' bar-chart-o', 'layla'), 'fa fa-barcode' => __( ' barcode', 'layla'), 'fa fa-bars' => __( ' bars', 'layla'), 'fa fa-battery-0' => __( ' battery-0', 'layla'), 'fa fa-battery-1' => __( ' battery-1', 'layla'), 'fa fa-battery-2' => __( ' battery-2', 'layla'), 'fa fa-battery-3' => __( ' battery-3', 'layla'), 'fa fa-battery-4' => __( ' battery-4', 'layla'), 'fa fa-battery-empty' => __( ' battery-empty', 'layla'), 'fa fa-battery-full' => __( ' battery-full', 'layla'), 'fa fa-battery-half' => __( ' battery-half', 'layla'), 'fa fa-battery-quarter' => __( ' battery-quarter', 'layla'), 'fa fa-battery-three-quarters' => __( ' battery-three-quarters', 'layla'), 'fa fa-bed' => __( ' bed', 'layla'), 'fa fa-beer' => __( ' beer', 'layla'), 'fa fa-bell' => __( ' bell', 'layla'), 'fa fa-bell-o' => __( ' bell-o', 'layla'), 'fa fa-bell-slash' => __( ' bell-slash', 'layla'), 'fa fa-bell-slash-o' => __( ' bell-slash-o', 'layla'), 'fa fa-bicycle' => __( ' bicycle', 'layla'), 'fa fa-binoculars' => __( ' binoculars', 'layla'), 'fa fa-birthday-cake' => __( ' birthday-cake', 'layla'), 'fa fa-bolt' => __( ' bolt', 'layla'), 'fa fa-bomb' => __( ' bomb', 'layla'), 'fa fa-book' => __( ' book', 'layla'), 'fa fa-bookmark' => __( ' bookmark', 'layla'), 'fa fa-bookmark-o' => __( ' bookmark-o', 'layla'), 'fa fa-briefcase' => __( ' briefcase', 'layla'), 'fa fa-bug' => __( ' bug', 'layla'), 'fa fa-building' => __( ' building', 'layla'), 'fa fa-building-o' => __( ' building-o', 'layla'), 'fa fa-bullhorn' => __( ' bullhorn', 'layla'), 'fa fa-bullseye' => __( ' bullseye', 'layla'), 'fa fa-bus' => __( ' bus', 'layla'), 'fa fa-cab' => __( ' cab', 'layla'), 'fa fa-calculator' => __( ' calculator', 'layla'), 'fa fa-calendar' => __( ' calendar', 'layla'), 'fa fa-calendar-check-o' => __( ' calendar-check-o', 'layla'), 'fa fa-calendar-minus-o' => __( ' calendar-minus-o', 'layla'), 'fa fa-calendar-o' => __( ' calendar-o', 'layla'), 'fa fa-calendar-plus-o' => __( ' calendar-plus-o', 'layla'), 'fa fa-calendar-times-o' => __( ' calendar-times-o', 'layla'), 'fa fa-camera' => __( ' camera', 'layla'), 'fa fa-camera-retro' => __( ' camera-retro', 'layla'), 'fa fa-car' => __( ' car', 'layla'), 'fa fa-caret-square-o-down' => __( ' caret-square-o-down', 'layla'), 'fa fa-caret-square-o-left' => __( ' caret-square-o-left', 'layla'), 'fa fa-caret-square-o-right' => __( ' caret-square-o-right', 'layla'), 'fa fa-caret-square-o-up' => __( ' caret-square-o-up', 'layla'), 'fa fa-cart-arrow-down' => __( ' cart-arrow-down', 'layla'), 'fa fa-cart-plus' => __( ' cart-plus', 'layla'), 'fa fa-cc' => __( ' cc', 'layla'), 'fa fa-certificate' => __( ' certificate', 'layla'), 'fa fa-check' => __( ' check', 'layla'), 'fa fa-check-circle' => __( ' check-circle', 'layla'), 'fa fa-check-circle-o' => __( ' check-circle-o', 'layla'), 'fa fa-check-square' => __( ' check-square', 'layla'), 'fa fa-check-square-o' => __( ' check-square-o', 'layla'), 'fa fa-child' => __( ' child', 'layla'), 'fa fa-circle' => __( ' circle', 'layla'), 'fa fa-circle-o' => __( ' circle-o', 'layla'), 'fa fa-circle-o-notch' => __( ' circle-o-notch', 'layla'), 'fa fa-circle-thin' => __( ' circle-thin', 'layla'), 'fa fa-clock-o' => __( ' clock-o', 'layla'), 'fa fa-clone' => __( ' clone', 'layla'), 'fa fa-close' => __( ' close', 'layla'), 'fa fa-cloud' => __( ' cloud', 'layla'), 'fa fa-cloud-download' => __( ' cloud-download', 'layla'), 'fa fa-cloud-upload' => __( ' cloud-upload', 'layla'), 'fa fa-code' => __( ' code', 'layla'), 'fa fa-code-fork' => __( ' code-fork', 'layla'), 'fa fa-coffee' => __( ' coffee', 'layla'), 'fa fa-cog' => __( ' cog', 'layla'), 'fa fa-cogs' => __( ' cogs', 'layla'), 'fa fa-comment' => __( ' comment', 'layla'), 'fa fa-comment-o' => __( ' comment-o', 'layla'), 'fa fa-commenting' => __( ' commenting', 'layla'), 'fa fa-commenting-o' => __( ' commenting-o', 'layla'), 'fa fa-comments' => __( ' comments', 'layla'), 'fa fa-comments-o' => __( ' comments-o', 'layla'), 'fa fa-compass' => __( ' compass', 'layla'), 'fa fa-copyright' => __( ' copyright', 'layla'), 'fa fa-creative-commons' => __( ' creative-commons', 'layla'), 'fa fa-credit-card' => __( ' credit-card', 'layla'), 'fa fa-crop' => __( ' crop', 'layla'), 'fa fa-crosshairs' => __( ' crosshairs', 'layla'), 'fa fa-cube' => __( ' cube', 'layla'), 'fa fa-cubes' => __( ' cubes', 'layla'), 'fa fa-cutlery' => __( ' cutlery', 'layla'), 'fa fa-dashboard' => __( ' dashboard', 'layla'), 'fa fa-database' => __( ' database', 'layla'), 'fa fa-desktop' => __( ' desktop', 'layla'), 'fa fa-diamond' => __( ' diamond', 'layla'), 'fa fa-dot-circle-o' => __( ' dot-circle-o', 'layla'), 'fa fa-download' => __( ' download', 'layla'), 'fa fa-edit' => __( ' edit', 'layla'), 'fa fa-ellipsis-h' => __( ' ellipsis-h', 'layla'), 'fa fa-ellipsis-v' => __( ' ellipsis-v', 'layla'), 'fa fa-envelope' => __( ' envelope', 'layla'), 'fa fa-envelope-o' => __( ' envelope-o', 'layla'), 'fa fa-envelope-square' => __( ' envelope-square', 'layla'), 'fa fa-eraser' => __( ' eraser', 'layla'), 'fa fa-exchange' => __( ' exchange', 'layla'), 'fa fa-exclamation' => __( ' exclamation', 'layla'), 'fa fa-exclamation-circle' => __( ' exclamation-circle', 'layla'), 'fa fa-exclamation-triangle' => __( ' exclamation-triangle', 'layla'), 'fa fa-external-link' => __( ' external-link', 'layla'), 'fa fa-external-link-square' => __( ' external-link-square', 'layla'), 'fa fa-eye' => __( ' eye', 'layla'), 'fa fa-eye-slash' => __( ' eye-slash', 'layla'), 'fa fa-eyedropper' => __( ' eyedropper', 'layla'), 'fa fa-fax' => __( ' fax', 'layla'), 'fa fa-feed' => __( ' feed', 'layla'), 'fa fa-female' => __( ' female', 'layla'), 'fa fa-fighter-jet' => __( ' fighter-jet', 'layla'), 'fa fa-file-archive-o' => __( ' file-archive-o', 'layla'), 'fa fa-file-audio-o' => __( ' file-audio-o', 'layla'), 'fa fa-file-code-o' => __( ' file-code-o', 'layla'), 'fa fa-file-excel-o' => __( ' file-excel-o', 'layla'), 'fa fa-file-image-o' => __( ' file-image-o', 'layla'), 'fa fa-file-movie-o' => __( ' file-movie-o', 'layla'), 'fa fa-file-pdf-o' => __( ' file-pdf-o', 'layla'), 'fa fa-file-photo-o' => __( ' file-photo-o', 'layla'), 'fa fa-file-picture-o' => __( ' file-picture-o', 'layla'), 'fa fa-file-powerpoint-o' => __( ' file-powerpoint-o', 'layla'), 'fa fa-file-sound-o' => __( ' file-sound-o', 'layla'), 'fa fa-file-video-o' => __( ' file-video-o', 'layla'), 'fa fa-file-word-o' => __( ' file-word-o', 'layla'), 'fa fa-file-zip-o' => __( ' file-zip-o', 'layla'), 'fa fa-film' => __( ' film', 'layla'), 'fa fa-filter' => __( ' filter', 'layla'), 'fa fa-fire' => __( ' fire', 'layla'), 'fa fa-fire-extinguisher' => __( ' fire-extinguisher', 'layla'), 'fa fa-flag' => __( ' flag', 'layla'), 'fa fa-flag-checkered' => __( ' flag-checkered', 'layla'), 'fa fa-flag-o' => __( ' flag-o', 'layla'), 'fa fa-flash' => __( ' flash', 'layla'), 'fa fa-flask' => __( ' flask', 'layla'), 'fa fa-folder' => __( ' folder', 'layla'), 'fa fa-folder-o' => __( ' folder-o', 'layla'), 'fa fa-folder-open' => __( ' folder-open', 'layla'), 'fa fa-folder-open-o' => __( ' folder-open-o', 'layla'), 'fa fa-frown-o' => __( ' frown-o', 'layla'), 'fa fa-futbol-o' => __( ' futbol-o', 'layla'), 'fa fa-gamepad' => __( ' gamepad', 'layla'), 'fa fa-gavel' => __( ' gavel', 'layla'), 'fa fa-gear' => __( ' gear', 'layla'), 'fa fa-gears' => __( ' gears', 'layla'), 'fa fa-gift' => __( ' gift', 'layla'), 'fa fa-glass' => __( ' glass', 'layla'), 'fa fa-globe' => __( ' globe', 'layla'), 'fa fa-graduation-cap' => __( ' graduation-cap', 'layla'), 'fa fa-group' => __( ' group', 'layla'), 'fa fa-hand-grab-o' => __( ' hand-grab-o', 'layla'), 'fa fa-hand-lizard-o' => __( ' hand-lizard-o', 'layla'), 'fa fa-hand-paper-o' => __( ' hand-paper-o', 'layla'), 'fa fa-hand-peace-o' => __( ' hand-peace-o', 'layla'), 'fa fa-hand-pointer-o' => __( ' hand-pointer-o', 'layla'), 'fa fa-hand-rock-o' => __( ' hand-rock-o', 'layla'), 'fa fa-hand-scissors-o' => __( ' hand-scissors-o', 'layla'), 'fa fa-hand-spock-o' => __( ' hand-spock-o', 'layla'), 'fa fa-hand-stop-o' => __( ' hand-stop-o', 'layla'), 'fa fa-hdd-o' => __( ' hdd-o', 'layla'), 'fa fa-headphones' => __( ' headphones', 'layla'), 'fa fa-heart' => __( ' heart', 'layla'), 'fa fa-heart-o' => __( ' heart-o', 'layla'), 'fa fa-heartbeat' => __( ' heartbeat', 'layla'), 'fa fa-history' => __( ' history', 'layla'), 'fa fa-home' => __( ' home', 'layla'), 'fa fa-hotel' => __( ' hotel', 'layla'), 'fa fa-hourglass' => __( ' hourglass', 'layla'), 'fa fa-hourglass-1' => __( ' hourglass-1', 'layla'), 'fa fa-hourglass-2' => __( ' hourglass-2', 'layla'), 'fa fa-hourglass-3' => __( ' hourglass-3', 'layla'), 'fa fa-hourglass-end' => __( ' hourglass-end', 'layla'), 'fa fa-hourglass-half' => __( ' hourglass-half', 'layla'), 'fa fa-hourglass-o' => __( ' hourglass-o', 'layla'), 'fa fa-hourglass-start' => __( ' hourglass-start', 'layla'), 'fa fa-i-cursor' => __( ' i-cursor', 'layla'), 'fa fa-image' => __( ' image', 'layla'), 'fa fa-inbox' => __( ' inbox', 'layla'), 'fa fa-industry' => __( ' industry', 'layla'), 'fa fa-info' => __( ' info', 'layla'), 'fa fa-info-circle' => __( ' info-circle', 'layla'), 'fa fa-institution' => __( ' institution', 'layla'), 'fa fa-key' => __( ' key', 'layla'), 'fa fa-keyboard-o' => __( ' keyboard-o', 'layla'), 'fa fa-language' => __( ' language', 'layla'), 'fa fa-laptop' => __( ' laptop', 'layla'), 'fa fa-leaf' => __( ' leaf', 'layla'), 'fa fa-legal' => __( ' legal', 'layla'), 'fa fa-lemon-o' => __( ' lemon-o', 'layla'), 'fa fa-level-down' => __( ' level-down', 'layla'), 'fa fa-level-up' => __( ' level-up', 'layla'), 'fa fa-life-bouy' => __( ' life-bouy', 'layla'), 'fa fa-life-buoy' => __( ' life-buoy', 'layla'), 'fa fa-life-ring' => __( ' life-ring', 'layla'), 'fa fa-life-saver' => __( ' life-saver', 'layla'), 'fa fa-lightbulb-o' => __( ' lightbulb-o', 'layla'), 'fa fa-line-chart' => __( ' line-chart', 'layla'), 'fa fa-location-arrow' => __( ' location-arrow', 'layla'), 'fa fa-lock' => __( ' lock', 'layla'), 'fa fa-magic' => __( ' magic', 'layla'), 'fa fa-magnet' => __( ' magnet', 'layla'), 'fa fa-mail-forward' => __( ' mail-forward', 'layla'), 'fa fa-mail-reply' => __( ' mail-reply', 'layla'), 'fa fa-mail-reply-all' => __( ' mail-reply-all', 'layla'), 'fa fa-male' => __( ' male', 'layla'), 'fa fa-map' => __( ' map', 'layla'), 'fa fa-map-marker' => __( ' map-marker', 'layla'), 'fa fa-map-o' => __( ' map-o', 'layla'), 'fa fa-map-pin' => __( ' map-pin', 'layla'), 'fa fa-map-signs' => __( ' map-signs', 'layla'), 'fa fa-meh-o' => __( ' meh-o', 'layla'), 'fa fa-microphone' => __( ' microphone', 'layla'), 'fa fa-microphone-slash' => __( ' microphone-slash', 'layla'), 'fa fa-minus' => __( ' minus', 'layla'), 'fa fa-minus-circle' => __( ' minus-circle', 'layla'), 'fa fa-minus-square' => __( ' minus-square', 'layla'), 'fa fa-minus-square-o' => __( ' minus-square-o', 'layla'), 'fa fa-mobile' => __( ' mobile', 'layla'), 'fa fa-mobile-phone' => __( ' mobile-phone', 'layla'), 'fa fa-money' => __( ' money', 'layla'), 'fa fa-moon-o' => __( ' moon-o', 'layla'), 'fa fa-mortar-board' => __( ' mortar-board', 'layla'), 'fa fa-motorcycle' => __( ' motorcycle', 'layla'), 'fa fa-mouse-pointer' => __( ' mouse-pointer', 'layla'), 'fa fa-music' => __( ' music', 'layla'), 'fa fa-navicon' => __( ' navicon', 'layla'), 'fa fa-newspaper-o' => __( ' newspaper-o', 'layla'), 'fa fa-object-group' => __( ' object-group', 'layla'), 'fa fa-object-ungroup' => __( ' object-ungroup', 'layla'), 'fa fa-paint-brush' => __( ' paint-brush', 'layla'), 'fa fa-paper-plane' => __( ' paper-plane', 'layla'), 'fa fa-paper-plane-o' => __( ' paper-plane-o', 'layla'), 'fa fa-paw' => __( ' paw', 'layla'), 'fa fa-pencil' => __( ' pencil', 'layla'), 'fa fa-pencil-square' => __( ' pencil-square', 'layla'), 'fa fa-pencil-square-o' => __( ' pencil-square-o', 'layla'), 'fa fa-phone' => __( ' phone', 'layla'), 'fa fa-phone-square' => __( ' phone-square', 'layla'), 'fa fa-photo' => __( ' photo', 'layla'), 'fa fa-picture-o' => __( ' picture-o', 'layla'), 'fa fa-pie-chart' => __( ' pie-chart', 'layla'), 'fa fa-plane' => __( ' plane', 'layla'), 'fa fa-plug' => __( ' plug', 'layla'), 'fa fa-plus' => __( ' plus', 'layla'), 'fa fa-plus-circle' => __( ' plus-circle', 'layla'), 'fa fa-plus-square' => __( ' plus-square', 'layla'), 'fa fa-plus-square-o' => __( ' plus-square-o', 'layla'), 'fa fa-power-off' => __( ' power-off', 'layla'), 'fa fa-print' => __( ' print', 'layla'), 'fa fa-puzzle-piece' => __( ' puzzle-piece', 'layla'), 'fa fa-qrcode' => __( ' qrcode', 'layla'), 'fa fa-question' => __( ' question', 'layla'), 'fa fa-question-circle' => __( ' question-circle', 'layla'), 'fa fa-quote-left' => __( ' quote-left', 'layla'), 'fa fa-quote-right' => __( ' quote-right', 'layla'), 'fa fa-random' => __( ' random', 'layla'), 'fa fa-recycle' => __( ' recycle', 'layla'), 'fa fa-refresh' => __( ' refresh', 'layla'), 'fa fa-registered' => __( ' registered', 'layla'), 'fa fa-remove' => __( ' remove', 'layla'), 'fa fa-reorder' => __( ' reorder', 'layla'), 'fa fa-reply' => __( ' reply', 'layla'), 'fa fa-reply-all' => __( ' reply-all', 'layla'), 'fa fa-retweet' => __( ' retweet', 'layla'), 'fa fa-road' => __( ' road', 'layla'), 'fa fa-rocket' => __( ' rocket', 'layla'), 'fa fa-rss' => __( ' rss', 'layla'), 'fa fa-rss-square' => __( ' rss-square', 'layla'), 'fa fa-search' => __( ' search', 'layla'), 'fa fa-search-minus' => __( ' search-minus', 'layla'), 'fa fa-search-plus' => __( ' search-plus', 'layla'), 'fa fa-send' => __( ' send', 'layla'), 'fa fa-send-o' => __( ' send-o', 'layla'), 'fa fa-server' => __( ' server', 'layla'), 'fa fa-share' => __( ' share', 'layla'), 'fa fa-share-alt' => __( ' share-alt', 'layla'), 'fa fa-share-alt-square' => __( ' share-alt-square', 'layla'), 'fa fa-share-square' => __( ' share-square', 'layla'), 'fa fa-share-square-o' => __( ' share-square-o', 'layla'), 'fa fa-shield' => __( ' shield', 'layla'), 'fa fa-ship' => __( ' ship', 'layla'), 'fa fa-shopping-cart' => __( ' shopping-cart', 'layla'), 'fa fa-sign-in' => __( ' sign-in', 'layla'), 'fa fa-sign-out' => __( ' sign-out', 'layla'), 'fa fa-signal' => __( ' signal', 'layla'), 'fa fa-sitemap' => __( ' sitemap', 'layla'), 'fa fa-sliders' => __( ' sliders', 'layla'), 'fa fa-smile-o' => __( ' smile-o', 'layla'), 'fa fa-soccer-ball-o' => __( ' soccer-ball-o', 'layla'), 'fa fa-sort' => __( ' sort', 'layla'), 'fa fa-sort-alpha-asc' => __( ' sort-alpha-asc', 'layla'), 'fa fa-sort-alpha-desc' => __( ' sort-alpha-desc', 'layla'), 'fa fa-sort-amount-asc' => __( ' sort-amount-asc', 'layla'), 'fa fa-sort-amount-desc' => __( ' sort-amount-desc', 'layla'), 'fa fa-sort-asc' => __( ' sort-asc', 'layla'), 'fa fa-sort-desc' => __( ' sort-desc', 'layla'), 'fa fa-sort-down' => __( ' sort-down', 'layla'), 'fa fa-sort-numeric-asc' => __( ' sort-numeric-asc', 'layla'), 'fa fa-sort-numeric-desc' => __( ' sort-numeric-desc', 'layla'), 'fa fa-sort-up' => __( ' sort-up', 'layla'), 'fa fa-space-shuttle' => __( ' space-shuttle', 'layla'), 'fa fa-spinner' => __( ' spinner', 'layla'), 'fa fa-spoon' => __( ' spoon', 'layla'), 'fa fa-square' => __( ' square', 'layla'), 'fa fa-square-o' => __( ' square-o', 'layla'), 'fa fa-star' => __( ' star', 'layla'), 'fa fa-star-half' => __( ' star-half', 'layla'), 'fa fa-star-half-empty' => __( ' star-half-empty', 'layla'), 'fa fa-star-half-full' => __( ' star-half-full', 'layla'), 'fa fa-star-half-o' => __( ' star-half-o', 'layla'), 'fa fa-star-o' => __( ' star-o', 'layla'), 'fa fa-sticky-note' => __( ' sticky-note', 'layla'), 'fa fa-sticky-note-o' => __( ' sticky-note-o', 'layla'), 'fa fa-street-view' => __( ' street-view', 'layla'), 'fa fa-suitcase' => __( ' suitcase', 'layla'), 'fa fa-sun-o' => __( ' sun-o', 'layla'), 'fa fa-support' => __( ' support', 'layla'), 'fa fa-tablet' => __( ' tablet', 'layla'), 'fa fa-tachometer' => __( ' tachometer', 'layla'), 'fa fa-tag' => __( ' tag', 'layla'), 'fa fa-tags' => __( ' tags', 'layla'), 'fa fa-tasks' => __( ' tasks', 'layla'), 'fa fa-taxi' => __( ' taxi', 'layla'), 'fa fa-television' => __( ' television', 'layla'), 'fa fa-terminal' => __( ' terminal', 'layla'), 'fa fa-thumb-tack' => __( ' thumb-tack', 'layla'), 'fa fa-thumbs-down' => __( ' thumbs-down', 'layla'), 'fa fa-thumbs-o-down' => __( ' thumbs-o-down', 'layla'), 'fa fa-thumbs-o-up' => __( ' thumbs-o-up', 'layla'), 'fa fa-thumbs-up' => __( ' thumbs-up', 'layla'), 'fa fa-ticket' => __( ' ticket', 'layla'), 'fa fa-times' => __( ' times', 'layla'), 'fa fa-times-circle' => __( ' times-circle', 'layla'), 'fa fa-times-circle-o' => __( ' times-circle-o', 'layla'), 'fa fa-tint' => __( ' tint', 'layla'), 'fa fa-toggle-down' => __( ' toggle-down', 'layla'), 'fa fa-toggle-left' => __( ' toggle-left', 'layla'), 'fa fa-toggle-off' => __( ' toggle-off', 'layla'), 'fa fa-toggle-on' => __( ' toggle-on', 'layla'), 'fa fa-toggle-right' => __( ' toggle-right', 'layla'), 'fa fa-toggle-up' => __( ' toggle-up', 'layla'), 'fa fa-trademark' => __( ' trademark', 'layla'), 'fa fa-trash' => __( ' trash', 'layla'), 'fa fa-trash-o' => __( ' trash-o', 'layla'), 'fa fa-tree' => __( ' tree', 'layla'), 'fa fa-trophy' => __( ' trophy', 'layla'), 'fa fa-truck' => __( ' truck', 'layla'), 'fa fa-tty' => __( ' tty', 'layla'), 'fa fa-tv' => __( ' tv', 'layla'), 'fa fa-umbrella' => __( ' umbrella', 'layla'), 'fa fa-university' => __( ' university', 'layla'), 'fa fa-unlock' => __( ' unlock', 'layla'), 'fa fa-unlock-alt' => __( ' unlock-alt', 'layla'), 'fa fa-unsorted' => __( ' unsorted', 'layla'), 'fa fa-upload' => __( ' upload', 'layla'), 'fa fa-user' => __( ' user', 'layla'), 'fa fa-user-plus' => __( ' user-plus', 'layla'), 'fa fa-user-secret' => __( ' user-secret', 'layla'), 'fa fa-user-times' => __( ' user-times', 'layla'), 'fa fa-users' => __( ' users', 'layla'), 'fa fa-video-camera' => __( ' video-camera', 'layla'), 'fa fa-volume-down' => __( ' volume-down', 'layla'), 'fa fa-volume-off' => __( ' volume-off', 'layla'), 'fa fa-volume-up' => __( ' volume-up', 'layla'), 'fa fa-warning' => __( ' warning', 'layla'), 'fa fa-wheelchair' => __( ' wheelchair', 'layla'), 'fa fa-wifi' => __( ' wifi', 'layla'), 'fa fa-wrench' => __( ' wrench', 'layla'), 'fa fa-hand-grab-o' => __( ' hand-grab-o', 'layla'), 'fa fa-hand-lizard-o' => __( ' hand-lizard-o', 'layla'), 'fa fa-hand-o-down' => __( ' hand-o-down', 'layla'), 'fa fa-hand-o-left' => __( ' hand-o-left', 'layla'), 'fa fa-hand-o-right' => __( ' hand-o-right', 'layla'), 'fa fa-hand-o-up' => __( ' hand-o-up', 'layla'), 'fa fa-hand-paper-o' => __( ' hand-paper-o', 'layla'), 'fa fa-hand-peace-o' => __( ' hand-peace-o', 'layla'), 'fa fa-hand-pointer-o' => __( ' hand-pointer-o', 'layla'), 'fa fa-hand-rock-o' => __( ' hand-rock-o', 'layla'), 'fa fa-hand-scissors-o' => __( ' hand-scissors-o', 'layla'), 'fa fa-hand-spock-o' => __( ' hand-spock-o', 'layla'), 'fa fa-hand-stop-o' => __( ' hand-stop-o', 'layla'), 'fa fa-thumbs-down' => __( ' thumbs-down', 'layla'), 'fa fa-thumbs-o-down' => __( ' thumbs-o-down', 'layla'), 'fa fa-thumbs-o-up' => __( ' thumbs-o-up', 'layla'), 'fa fa-thumbs-up' => __( ' thumbs-up', 'layla'), 'fa fa-ambulance' => __( ' ambulance', 'layla'), 'fa fa-automobile' => __( ' automobile', 'layla'), 'fa fa-bicycle' => __( ' bicycle', 'layla'), 'fa fa-bus' => __( ' bus', 'layla'), 'fa fa-cab' => __( ' cab', 'layla'), 'fa fa-car' => __( ' car', 'layla'), 'fa fa-fighter-jet' => __( ' fighter-jet', 'layla'), 'fa fa-motorcycle' => __( ' motorcycle', 'layla'), 'fa fa-plane' => __( ' plane', 'layla'), 'fa fa-rocket' => __( ' rocket', 'layla'), 'fa fa-ship' => __( ' ship', 'layla'), 'fa fa-space-shuttle' => __( ' space-shuttle', 'layla'), 'fa fa-subway' => __( ' subway', 'layla'), 'fa fa-taxi' => __( ' taxi', 'layla'), 'fa fa-train' => __( ' train', 'layla'), 'fa fa-truck' => __( ' truck', 'layla'), 'fa fa-wheelchair' => __( ' wheelchair', 'layla'), 'fa fa-genderless' => __( ' genderless', 'layla'), 'fa fa-intersex' => __( ' intersex', 'layla'), 'fa fa-mars' => __( ' mars', 'layla'), 'fa fa-mars-double' => __( ' mars-double', 'layla'), 'fa fa-mars-stroke' => __( ' mars-stroke', 'layla'), 'fa fa-mars-stroke-h' => __( ' mars-stroke-h', 'layla'), 'fa fa-mars-stroke-v' => __( ' mars-stroke-v', 'layla'), 'fa fa-mercury' => __( ' mercury', 'layla'), 'fa fa-neuter' => __( ' neuter', 'layla'), 'fa fa-transgender' => __( ' transgender', 'layla'), 'fa fa-transgender-alt' => __( ' transgender-alt', 'layla'), 'fa fa-venus' => __( ' venus', 'layla'), 'fa fa-venus-double' => __( ' venus-double', 'layla'), 'fa fa-venus-mars' => __( ' venus-mars', 'layla'), 'fa fa-file' => __( ' file', 'layla'), 'fa fa-file-archive-o' => __( ' file-archive-o', 'layla'), 'fa fa-file-audio-o' => __( ' file-audio-o', 'layla'), 'fa fa-file-code-o' => __( ' file-code-o', 'layla'), 'fa fa-file-excel-o' => __( ' file-excel-o', 'layla'), 'fa fa-file-image-o' => __( ' file-image-o', 'layla'), 'fa fa-file-movie-o' => __( ' file-movie-o', 'layla'), 'fa fa-file-o' => __( ' file-o', 'layla'), 'fa fa-file-pdf-o' => __( ' file-pdf-o', 'layla'), 'fa fa-file-photo-o' => __( ' file-photo-o', 'layla'), 'fa fa-file-picture-o' => __( ' file-picture-o', 'layla'), 'fa fa-file-powerpoint-o' => __( ' file-powerpoint-o', 'layla'), 'fa fa-file-sound-o' => __( ' file-sound-o', 'layla'), 'fa fa-file-text' => __( ' file-text', 'layla'), 'fa fa-file-text-o' => __( ' file-text-o', 'layla'), 'fa fa-file-video-o' => __( ' file-video-o', 'layla'), 'fa fa-file-word-o' => __( ' file-word-o', 'layla'), 'fa fa-file-zip-o' => __( ' file-zip-o', 'layla'), 'fa fa-circle-o-notch' => __( ' circle-o-notch', 'layla'), 'fa fa-cog' => __( ' cog', 'layla'), 'fa fa-gear' => __( ' gear', 'layla'), 'fa fa-refresh' => __( ' refresh', 'layla'), 'fa fa-spinner' => __( ' spinner', 'layla'), 'fa fa-check-square' => __( ' check-square', 'layla'), 'fa fa-check-square-o' => __( ' check-square-o', 'layla'), 'fa fa-circle' => __( ' circle', 'layla'), 'fa fa-circle-o' => __( ' circle-o', 'layla'), 'fa fa-dot-circle-o' => __( ' dot-circle-o', 'layla'), 'fa fa-minus-square' => __( ' minus-square', 'layla'), 'fa fa-minus-square-o' => __( ' minus-square-o', 'layla'), 'fa fa-plus-square' => __( ' plus-square', 'layla'), 'fa fa-plus-square-o' => __( ' plus-square-o', 'layla'), 'fa fa-square' => __( ' square', 'layla'), 'fa fa-square-o' => __( ' square-o', 'layla'), 'fa fa-cc-amex' => __( ' cc-amex', 'layla'), 'fa fa-cc-diners-club' => __( ' cc-diners-club', 'layla'), 'fa fa-cc-discover' => __( ' cc-discover', 'layla'), 'fa fa-cc-jcb' => __( ' cc-jcb', 'layla'), 'fa fa-cc-mastercard' => __( ' cc-mastercard', 'layla'), 'fa fa-cc-paypal' => __( ' cc-paypal', 'layla'), 'fa fa-cc-stripe' => __( ' cc-stripe', 'layla'), 'fa fa-cc-visa' => __( ' cc-visa', 'layla'), 'fa fa-credit-card' => __( ' credit-card', 'layla'), 'fa fa-google-wallet' => __( ' google-wallet', 'layla'), 'fa fa-paypal' => __( ' paypal', 'layla'), 'fa fa-area-chart' => __( ' area-chart', 'layla'), 'fa fa-bar-chart' => __( ' bar-chart', 'layla'), 'fa fa-bar-chart-o' => __( ' bar-chart-o', 'layla'), 'fa fa-line-chart' => __( ' line-chart', 'layla'), 'fa fa-pie-chart' => __( ' pie-chart', 'layla'), 'fa fa-bitcoin' => __( ' bitcoin', 'layla'), 'fa fa-btc' => __( ' btc', 'layla'), 'fa fa-cny' => __( ' cny', 'layla'), 'fa fa-dollar' => __( ' dollar', 'layla'), 'fa fa-eur' => __( ' eur', 'layla'), 'fa fa-euro' => __( ' euro', 'layla'), 'fa fa-gbp' => __( ' gbp', 'layla'), 'fa fa-gg' => __( ' gg', 'layla'), 'fa fa-gg-circle' => __( ' gg-circle', 'layla'), 'fa fa-ils' => __( ' ils', 'layla'), 'fa fa-inr' => __( ' inr', 'layla'), 'fa fa-jpy' => __( ' jpy', 'layla'), 'fa fa-krw' => __( ' krw', 'layla'), 'fa fa-money' => __( ' money', 'layla'), 'fa fa-rmb' => __( ' rmb', 'layla'), 'fa fa-rouble' => __( ' rouble', 'layla'), 'fa fa-rub' => __( ' rub', 'layla'), 'fa fa-ruble' => __( ' ruble', 'layla'), 'fa fa-rupee' => __( ' rupee', 'layla'), 'fa fa-shekel' => __( ' shekel', 'layla'), 'fa fa-sheqel' => __( ' sheqel', 'layla'), 'fa fa-try' => __( ' try', 'layla'), 'fa fa-turkish-lira' => __( ' turkish-lira', 'layla'), 'fa fa-usd' => __( ' usd', 'layla'), 'fa fa-won' => __( ' won', 'layla'), 'fa fa-yen' => __( ' yen', 'layla'), 'fa fa-align-center' => __( ' align-center', 'layla'), 'fa fa-align-justify' => __( ' align-justify', 'layla'), 'fa fa-align-left' => __( ' align-left', 'layla'), 'fa fa-align-right' => __( ' align-right', 'layla'), 'fa fa-bold' => __( ' bold', 'layla'), 'fa fa-chain' => __( ' chain', 'layla'), 'fa fa-chain-broken' => __( ' chain-broken', 'layla'), 'fa fa-clipboard' => __( ' clipboard', 'layla'), 'fa fa-columns' => __( ' columns', 'layla'), 'fa fa-copy' => __( ' copy', 'layla'), 'fa fa-cut' => __( ' cut', 'layla'), 'fa fa-dedent' => __( ' dedent', 'layla'), 'fa fa-eraser' => __( ' eraser', 'layla'), 'fa fa-file' => __( ' file', 'layla'), 'fa fa-file-o' => __( ' file-o', 'layla'), 'fa fa-file-text' => __( ' file-text', 'layla'), 'fa fa-file-text-o' => __( ' file-text-o', 'layla'), 'fa fa-files-o' => __( ' files-o', 'layla'), 'fa fa-floppy-o' => __( ' floppy-o', 'layla'), 'fa fa-font' => __( ' font', 'layla'), 'fa fa-header' => __( ' header', 'layla'), 'fa fa-indent' => __( ' indent', 'layla'), 'fa fa-italic' => __( ' italic', 'layla'), 'fa fa-link' => __( ' link', 'layla'), 'fa fa-list' => __( ' list', 'layla'), 'fa fa-list-alt' => __( ' list-alt', 'layla'), 'fa fa-list-ol' => __( ' list-ol', 'layla'), 'fa fa-list-ul' => __( ' list-ul', 'layla'), 'fa fa-outdent' => __( ' outdent', 'layla'), 'fa fa-paperclip' => __( ' paperclip', 'layla'), 'fa fa-paragraph' => __( ' paragraph', 'layla'), 'fa fa-paste' => __( ' paste', 'layla'), 'fa fa-repeat' => __( ' repeat', 'layla'), 'fa fa-rotate-left' => __( ' rotate-left', 'layla'), 'fa fa-rotate-right' => __( ' rotate-right', 'layla'), 'fa fa-save' => __( ' save', 'layla'), 'fa fa-scissors' => __( ' scissors', 'layla'), 'fa fa-strikethrough' => __( ' strikethrough', 'layla'), 'fa fa-subscript' => __( ' subscript', 'layla'), 'fa fa-superscript' => __( ' superscript', 'layla'), 'fa fa-table' => __( ' table', 'layla'), 'fa fa-text-height' => __( ' text-height', 'layla'), 'fa fa-text-width' => __( ' text-width', 'layla'), 'fa fa-th' => __( ' th', 'layla'), 'fa fa-th-large' => __( ' th-large', 'layla'), 'fa fa-th-list' => __( ' th-list', 'layla'), 'fa fa-underline' => __( ' underline', 'layla'), 'fa fa-undo' => __( ' undo', 'layla'), 'fa fa-unlink' => __( ' unlink', 'layla'), 'fa fa-angle-double-down' => __( ' angle-double-down', 'layla'), 'fa fa-angle-double-left' => __( ' angle-double-left', 'layla'), 'fa fa-angle-double-right' => __( ' angle-double-right', 'layla'), 'fa fa-angle-double-up' => __( ' angle-double-up', 'layla'), 'fa fa-angle-down' => __( ' angle-down', 'layla'), 'fa fa-angle-left' => __( ' angle-left', 'layla'), 'fa fa-angle-right' => __( ' angle-right', 'layla'), 'fa fa-angle-up' => __( ' angle-up', 'layla'), 'fa fa-arrow-circle-down' => __( ' arrow-circle-down', 'layla'), 'fa fa-arrow-circle-left' => __( ' arrow-circle-left', 'layla'), 'fa fa-arrow-circle-o-down' => __( ' arrow-circle-o-down', 'layla'), 'fa fa-arrow-circle-o-left' => __( ' arrow-circle-o-left', 'layla'), 'fa fa-arrow-circle-o-right' => __( ' arrow-circle-o-right', 'layla'), 'fa fa-arrow-circle-o-up' => __( ' arrow-circle-o-up', 'layla'), 'fa fa-arrow-circle-right' => __( ' arrow-circle-right', 'layla'), 'fa fa-arrow-circle-up' => __( ' arrow-circle-up', 'layla'), 'fa fa-arrow-down' => __( ' arrow-down', 'layla'), 'fa fa-arrow-left' => __( ' arrow-left', 'layla'), 'fa fa-arrow-right' => __( ' arrow-right', 'layla'), 'fa fa-arrow-up' => __( ' arrow-up', 'layla'), 'fa fa-arrows' => __( ' arrows', 'layla'), 'fa fa-arrows-alt' => __( ' arrows-alt', 'layla'), 'fa fa-arrows-h' => __( ' arrows-h', 'layla'), 'fa fa-arrows-v' => __( ' arrows-v', 'layla'), 'fa fa-caret-down' => __( ' caret-down', 'layla'), 'fa fa-caret-left' => __( ' caret-left', 'layla'), 'fa fa-caret-right' => __( ' caret-right', 'layla'), 'fa fa-caret-square-o-down' => __( ' caret-square-o-down', 'layla'), 'fa fa-caret-square-o-left' => __( ' caret-square-o-left', 'layla'), 'fa fa-caret-square-o-right' => __( ' caret-square-o-right', 'layla'), 'fa fa-caret-square-o-up' => __( ' caret-square-o-up', 'layla'), 'fa fa-caret-up' => __( ' caret-up', 'layla'), 'fa fa-chevron-circle-down' => __( ' chevron-circle-down', 'layla'), 'fa fa-chevron-circle-left' => __( ' chevron-circle-left', 'layla'), 'fa fa-chevron-circle-right' => __( ' chevron-circle-right', 'layla'), 'fa fa-chevron-circle-up' => __( ' chevron-circle-up', 'layla'), 'fa fa-chevron-down' => __( ' chevron-down', 'layla'), 'fa fa-chevron-left' => __( ' chevron-left', 'layla'), 'fa fa-chevron-right' => __( ' chevron-right', 'layla'), 'fa fa-chevron-up' => __( ' chevron-up', 'layla'), 'fa fa-exchange' => __( ' exchange', 'layla'), 'fa fa-hand-o-down' => __( ' hand-o-down', 'layla'), 'fa fa-hand-o-left' => __( ' hand-o-left', 'layla'), 'fa fa-hand-o-right' => __( ' hand-o-right', 'layla'), 'fa fa-hand-o-up' => __( ' hand-o-up', 'layla'), 'fa fa-long-arrow-down' => __( ' long-arrow-down', 'layla'), 'fa fa-long-arrow-left' => __( ' long-arrow-left', 'layla'), 'fa fa-long-arrow-right' => __( ' long-arrow-right', 'layla'), 'fa fa-long-arrow-up' => __( ' long-arrow-up', 'layla'), 'fa fa-toggle-down' => __( ' toggle-down', 'layla'), 'fa fa-toggle-left' => __( ' toggle-left', 'layla'), 'fa fa-toggle-right' => __( ' toggle-right', 'layla'), 'fa fa-toggle-up' => __( ' toggle-up', 'layla'), 'fa fa-arrows-alt' => __( ' arrows-alt', 'layla'), 'fa fa-backward' => __( ' backward', 'layla'), 'fa fa-compress' => __( ' compress', 'layla'), 'fa fa-eject' => __( ' eject', 'layla'), 'fa fa-expand' => __( ' expand', 'layla'), 'fa fa-fast-backward' => __( ' fast-backward', 'layla'), 'fa fa-fast-forward' => __( ' fast-forward', 'layla'), 'fa fa-forward' => __( ' forward', 'layla'), 'fa fa-pause' => __( ' pause', 'layla'), 'fa fa-play' => __( ' play', 'layla'), 'fa fa-play-circle' => __( ' play-circle', 'layla'), 'fa fa-play-circle-o' => __( ' play-circle-o', 'layla'), 'fa fa-random' => __( ' random', 'layla'), 'fa fa-step-backward' => __( ' step-backward', 'layla'), 'fa fa-step-forward' => __( ' step-forward', 'layla'), 'fa fa-stop' => __( ' stop', 'layla'), 'fa fa-youtube-play' => __( ' youtube-play', 'layla'), 'fa fa-500px' => __( ' 500px', 'layla'), 'fa fa-adn' => __( ' adn', 'layla'), 'fa fa-amazon' => __( ' amazon', 'layla'), 'fa fa-android' => __( ' android', 'layla'), 'fa fa-angellist' => __( ' angellist', 'layla'), 'fa fa-apple' => __( ' apple', 'layla'), 'fa fa-behance' => __( ' behance', 'layla'), 'fa fa-behance-square' => __( ' behance-square', 'layla'), 'fa fa-bitbucket' => __( ' bitbucket', 'layla'), 'fa fa-bitbucket-square' => __( ' bitbucket-square', 'layla'), 'fa fa-bitcoin' => __( ' bitcoin', 'layla'), 'fa fa-black-tie' => __( ' black-tie', 'layla'), 'fa fa-btc' => __( ' btc', 'layla'), 'fa fa-buysellads' => __( ' buysellads', 'layla'), 'fa fa-cc-amex' => __( ' cc-amex', 'layla'), 'fa fa-cc-diners-club' => __( ' cc-diners-club', 'layla'), 'fa fa-cc-discover' => __( ' cc-discover', 'layla'), 'fa fa-cc-jcb' => __( ' cc-jcb', 'layla'), 'fa fa-cc-mastercard' => __( ' cc-mastercard', 'layla'), 'fa fa-cc-paypal' => __( ' cc-paypal', 'layla'), 'fa fa-cc-stripe' => __( ' cc-stripe', 'layla'), 'fa fa-cc-visa' => __( ' cc-visa', 'layla'), 'fa fa-chrome' => __( ' chrome', 'layla'), 'fa fa-codepen' => __( ' codepen', 'layla'), 'fa fa-connectdevelop' => __( ' connectdevelop', 'layla'), 'fa fa-contao' => __( ' contao', 'layla'), 'fa fa-css3' => __( ' css3', 'layla'), 'fa fa-dashcube' => __( ' dashcube', 'layla'), 'fa fa-delicious' => __( ' delicious', 'layla'), 'fa fa-deviantart' => __( ' deviantart', 'layla'), 'fa fa-digg' => __( ' digg', 'layla'), 'fa fa-dribbble' => __( ' dribbble', 'layla'), 'fa fa-dropbox' => __( ' dropbox', 'layla'), 'fa fa-drupal' => __( ' drupal', 'layla'), 'fa fa-empire' => __( ' empire', 'layla'), 'fa fa-expeditedssl' => __( ' expeditedssl', 'layla'), 'fa fa-facebook' => __( ' facebook', 'layla'), 'fa fa-facebook-f' => __( ' facebook-f', 'layla'), 'fa fa-facebook-official' => __( ' facebook-official', 'layla'), 'fa fa-facebook-square' => __( ' facebook-square', 'layla'), 'fa fa-firefox' => __( ' firefox', 'layla'), 'fa fa-flickr' => __( ' flickr', 'layla'), 'fa fa-fonticons' => __( ' fonticons', 'layla'), 'fa fa-forumbee' => __( ' forumbee', 'layla'), 'fa fa-foursquare' => __( ' foursquare', 'layla'), 'fa fa-ge' => __( ' ge', 'layla'), 'fa fa-get-pocket' => __( ' get-pocket', 'layla'), 'fa fa-gg' => __( ' gg', 'layla'), 'fa fa-gg-circle' => __( ' gg-circle', 'layla'), 'fa fa-git' => __( ' git', 'layla'), 'fa fa-git-square' => __( ' git-square', 'layla'), 'fa fa-github' => __( ' github', 'layla'), 'fa fa-github-alt' => __( ' github-alt', 'layla'), 'fa fa-github-square' => __( ' github-square', 'layla'), 'fa fa-gittip' => __( ' gittip', 'layla'), 'fa fa-google' => __( ' google', 'layla'), 'fa fa-google-plus' => __( ' google-plus', 'layla'), 'fa fa-google-plus-square' => __( ' google-plus-square', 'layla'), 'fa fa-google-wallet' => __( ' google-wallet', 'layla'), 'fa fa-gratipay' => __( ' gratipay', 'layla'), 'fa fa-hacker-news' => __( ' hacker-news', 'layla'), 'fa fa-houzz' => __( ' houzz', 'layla'), 'fa fa-html5' => __( ' html5', 'layla'), 'fa fa-instagram' => __( ' instagram', 'layla'), 'fa fa-internet-explorer' => __( ' internet-explorer', 'layla'), 'fa fa-ioxhost' => __( ' ioxhost', 'layla'), 'fa fa-joomla' => __( ' joomla', 'layla'), 'fa fa-jsfiddle' => __( ' jsfiddle', 'layla'), 'fa fa-lastfm' => __( ' lastfm', 'layla'), 'fa fa-lastfm-square' => __( ' lastfm-square', 'layla'), 'fa fa-leanpub' => __( ' leanpub', 'layla'), 'fa fa-linkedin' => __( ' linkedin', 'layla'), 'fa fa-linkedin-square' => __( ' linkedin-square', 'layla'), 'fa fa-linux' => __( ' linux', 'layla'), 'fa fa-maxcdn' => __( ' maxcdn', 'layla'), 'fa fa-meanpath' => __( ' meanpath', 'layla'), 'fa fa-medium' => __( ' medium', 'layla'), 'fa fa-odnoklassniki' => __( ' odnoklassniki', 'layla'), 'fa fa-odnoklassniki-square' => __( ' odnoklassniki-square', 'layla'), 'fa fa-opencart' => __( ' opencart', 'layla'), 'fa fa-openid' => __( ' openid', 'layla'), 'fa fa-opera' => __( ' opera', 'layla'), 'fa fa-optin-monster' => __( ' optin-monster', 'layla'), 'fa fa-pagelines' => __( ' pagelines', 'layla'), 'fa fa-paypal' => __( ' paypal', 'layla'), 'fa fa-pied-piper' => __( ' pied-piper', 'layla'), 'fa fa-pied-piper-alt' => __( ' pied-piper-alt', 'layla'), 'fa fa-pinterest' => __( ' pinterest', 'layla'), 'fa fa-pinterest-p' => __( ' pinterest-p', 'layla'), 'fa fa-pinterest-square' => __( ' pinterest-square', 'layla'), 'fa fa-qq' => __( ' qq', 'layla'), 'fa fa-ra' => __( ' ra', 'layla'), 'fa fa-rebel' => __( ' rebel', 'layla'), 'fa fa-reddit' => __( ' reddit', 'layla'), 'fa fa-reddit-square' => __( ' reddit-square', 'layla'), 'fa fa-renren' => __( ' renren', 'layla'), 'fa fa-safari' => __( ' safari', 'layla'), 'fa fa-sellsy' => __( ' sellsy', 'layla'), 'fa fa-share-alt' => __( ' share-alt', 'layla'), 'fa fa-share-alt-square' => __( ' share-alt-square', 'layla'), 'fa fa-shirtsinbulk' => __( ' shirtsinbulk', 'layla'), 'fa fa-simplybuilt' => __( ' simplybuilt', 'layla'), 'fa fa-skyatlas' => __( ' skyatlas', 'layla'), 'fa fa-skype' => __( ' skype', 'layla'), 'fa fa-slack' => __( ' slack', 'layla'), 'fa fa-slideshare' => __( ' slideshare', 'layla'), 'fa fa-soundcloud' => __( ' soundcloud', 'layla'), 'fa fa-spotify' => __( ' spotify', 'layla'), 'fa fa-stack-exchange' => __( ' stack-exchange', 'layla'), 'fa fa-stack-overflow' => __( ' stack-overflow', 'layla'), 'fa fa-steam' => __( ' steam', 'layla'), 'fa fa-steam-square' => __( ' steam-square', 'layla'), 'fa fa-stumbleupon' => __( ' stumbleupon', 'layla'), 'fa fa-stumbleupon-circle' => __( ' stumbleupon-circle', 'layla'), 'fa fa-tencent-weibo' => __( ' tencent-weibo', 'layla'), 'fa fa-trello' => __( ' trello', 'layla'), 'fa fa-tripadvisor' => __( ' tripadvisor', 'layla'), 'fa fa-tumblr' => __( ' tumblr', 'layla'), 'fa fa-tumblr-square' => __( ' tumblr-square', 'layla'), 'fa fa-twitch' => __( ' twitch', 'layla'), 'fa fa-twitter' => __( ' twitter', 'layla'), 'fa fa-twitter-square' => __( ' twitter-square', 'layla'), 'fa fa-viacoin' => __( ' viacoin', 'layla'), 'fa fa-vimeo' => __( ' vimeo', 'layla'), 'fa fa-vimeo-square' => __( ' vimeo-square', 'layla'), 'fa fa-vine' => __( ' vine', 'layla'), 'fa fa-vk' => __( ' vk', 'layla'), 'fa fa-wechat' => __( ' wechat', 'layla'), 'fa fa-weibo' => __( ' weibo', 'layla'), 'fa fa-weixin' => __( ' weixin', 'layla'), 'fa fa-whatsapp' => __( ' whatsapp', 'layla'), 'fa fa-wikipedia-w' => __( ' wikipedia-w', 'layla'), 'fa fa-windows' => __( ' windows', 'layla'), 'fa fa-wordpress' => __( ' wordpress', 'layla'), 'fa fa-xing' => __( ' xing', 'layla'), 'fa fa-xing-square' => __( ' xing-square', 'layla'), 'fa fa-y-combinator' => __( ' y-combinator', 'layla'), 'fa fa-y-combinator-square' => __( ' y-combinator-square', 'layla'), 'fa fa-yahoo' => __( ' yahoo', 'layla'), 'fa fa-yc' => __( ' yc', 'layla'), 'fa fa-yc-square' => __( ' yc-square', 'layla'), 'fa fa-yelp' => __( ' yelp', 'layla'), 'fa fa-youtube' => __( ' youtube', 'layla'), 'fa fa-youtube-play' => __( ' youtube-play', 'layla'), 'fa fa-youtube-square' => __( ' youtube-square', 'layla'), 'fa fa-ambulance' => __( ' ambulance', 'layla'), 'fa fa-h-square' => __( ' h-square', 'layla'), 'fa fa-heart' => __( ' heart', 'layla'), 'fa fa-heart-o' => __( ' heart-o', 'layla'), 'fa fa-heartbeat' => __( ' heartbeat', 'layla'), 'fa fa-hospital-o' => __( ' hospital-o', 'layla'), 'fa fa-medkit' => __( ' medkit', 'layla'), 'fa fa-plus-square' => __( ' plus-square', 'layla'), 'fa fa-stethoscope' => __( ' stethoscope', 'layla'), 'fa fa-user-md' => __( ' user-md', 'layla'), 'fa fa-wheelchair' => __( ' wheelchair', 'layla') );
    
}

function layla_font_sizes(){
    
    $font_size_array = array(
        '10px' => '10 px',
        '12px' => '12 px',
        '14px' => '14 px',
        '16px' => '16 px',
        '18px' => '18 px',
        '20px' => '20 px',
        '24px' => '24 px',
    );
    
    return $font_size_array;
    
}

   function layla_slider_transition_sanitize($input) {
      $valid_keys = array(
        'true' => __('Fade', 'layla'),
        'false' => __('Slide', 'layla'),
      );
      if ( array_key_exists( $input, $valid_keys ) ) {
         return $input;
      } else {
         return '';
      }
   }
   
   
   function layla_radio_sanitize_enabledisable($input) {
      $valid_keys = array(
        'enable'=>__('Enable', 'layla'),
        'disable'=>__('Disable', 'layla')
      );
      if ( array_key_exists( $input, $valid_keys ) ) {
         return $input;
      } else {
         return '';
      }
   }
   
   function layla_radio_sanitize_yesno($input) {
    $valid_keys = array(
      'yes'=>__('Yes', 'layla'),
      'no'=>__('No', 'layla')
      );
    if ( array_key_exists( $input, $valid_keys ) ) {
     return $input;
   } else {
     return '';
   }
 }
   
   function layla_radio_sanitize_onoff($input) {
    $valid_keys = array(
      'on'=>__('On', 'layla'),
      'off'=>__('Off', 'layla')
      );
    if ( array_key_exists( $input, $valid_keys ) ) {
     return $input;
   } else {
     return '';
   }
 }
   
// checkbox sanitization
function layla_checkbox_sanitize($input) {
   if ( $input == 1 ) {
      return 1;
   } else {
      return '';
   }
}

   
function layla_fonts() {

    $font_family_array = array(
        'Bad Script, cursive' => 'Bad+Script',
        'Lobster Two, cursive' => 'Lobster+Two',
        'Josefin Sans, sans-serif' => 'Josefin',
        'Open Sans, sans-serif' => 'Open Sans',
        'Palatino Linotype, Book Antiqua, Palatino, serif' => 'Palatino Linotype',
        'Source Sans Pro, sans-serif' => 'Source Sans Pro',
        'Abel, sans-serif' => 'Abel',
        'Bangers, cursive' => 'Bangers',
        'Lobster Two, cursive' => 'Lobster+Two',
        'Josefin Sans, sans-serif' => 'Josefin+Sans:300,400,600,700',
        'Montserrat, sans-serif' => 'Montserrat:400,700',
        'Poiret One, cursive' => 'Poiret+One',
        'Source Sans Pro, sans-serif' => 'Source+Sans+Pro:200,400,600',
        'Lato, sans-serif' => 'Lato:100,300,400,700,900,300italic,400italic',
        'Raleway, sans-serif' => 'Raleway:400,300,500,700',
        'Russo One, sans-serif' => 'Russo+One',
        'Shadows Into Light, cursive' => 'Shadows+Into+Light',
        'Orbitron, sans-serif' => 'Orbitron',
        'Old Standard TT, serif' => 'Old+Standard+TT',
        'Oswald, sans-serif' => 'Oswald',
        'PT Sans Narrow, sans-serif' => 'PT+Sans+Narrow',
        'Playfair Display, serif' => 'Playfair+Display:400,700',
        'Lora, serif' => 'Lora',
        'Abel, sans-serif' => 'Abel',
        'Yellowtail, cursive' => 'Yellowtail',
        'Corben, cursive' => 'Corben'
    );

    return $font_family_array;
    

}
function layla_all_posts_array() {

    $posts = get_posts( array(
        'post_type'        => array( 'post', 'page', 'product' ),
        'posts_per_page'   => -1,
        'post_status'      => 'publish',
        'orderby'          => 'title',
        'order'             => 'ASC',
    ));

    $posts_array = array();

    foreach ( $posts as $post ) :

        if ( ! empty( $post->ID ) ) :
            $posts_array[ $post->ID ] = $post->post_title;
        endif;

    endforeach;

    return $posts_array;

}

function layla_sanitize_icon( $input ) {
    $valid_keys = layla_icons();
    if ( array_key_exists( $input, $valid_keys ) ) {
     return $input;
   } else {
     return '';
   }
}

function layla_sanitize_post( $input ) {
    $valid_keys = layla_all_posts_array();
    if ( array_key_exists( $input, $valid_keys ) ) {
     return $input;
   } else {
     return '';
   }
}

function layla_sanitize_font( $input ){
    $valid_keys = layla_fonts();
    if ( array_key_exists( $input, $valid_keys ) ) {
     return $input;
   } else {
     return '';
   }    
}

function layla_sanitize_font_size( $input ){
    $valid_keys = layla_font_sizes();
    if ( array_key_exists( $input, $valid_keys ) ) {
     return $input;
   } else {
     return '';
   }    
}

function layla_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function layla_sanitize_integer( $input ) {
    return intval( $input );
}