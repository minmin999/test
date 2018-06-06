<?php
/**
 * All the customize settings.
 *
 * @package Switty
 */

// Set Kirki config.
Kirki::add_config( 'switty_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


// The main panel.
Kirki::add_panel( 'switty_options', array(
	'priority'    => 10,
	'title'       => esc_attr__( 'Switty Options', 'switty' ),
	'description' => esc_attr__( 'All options of Switty theme', 'switty' ),
) );

// Typography.
Kirki::add_section( 'typography_options', array(
	'title'          => esc_attr__( 'Typography', 'switty' ),
	'panel'          => 'switty_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'body_typog',
	'label'       => esc_attr__( 'Body Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'	=> 'Lora',
		'variant'		=> 'regular',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'body_h1_typog',
	'label'       => esc_attr__( 'H1 / Headline 1 Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '22px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h1, .h1',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'body_h2_typog',
	'label'       => esc_attr__( 'H2 / Headline 2 Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '22px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h2, .h2',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'body_h3_typog',
	'label'       => esc_attr__( 'H3 / Headline 3 Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '22px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h3, .h3',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'body_h4_typog',
	'label'       => esc_attr__( 'H4 / Headline 4 Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '20px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h4, .h4',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'body_h5_typog',
	'label'       => esc_attr__( 'H5 / Headline 5 Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '20px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h5, .h5',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'body_h6_typog',
	'label'       => esc_attr__( 'H6 / Headline 6 Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '20px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h6, .h6',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'body_p_typog',
	'label'       => esc_attr__( 'Paragraph Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'	=> 'Lora',
		'variant'		=> 'regular',
		'font-size'			=> '16px',
		'line-height'		=> '25px',
		'letter-spacing'	=> '0.1px',
		'text-transform'	=> 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#maincontainer p',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'top_menu_typog',
	'label'       => esc_attr__( 'Main Menu Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Rajdhani',
		'variant'        => '500',
		'font-size'      => '18px',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#navbar ul.navbar-nav li a',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'sb_menu_typo',
	'label'       => esc_attr__( 'Sidebar Menu Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Rajdhani',
		'variant'        => '500',
		'font-size'      => '18px',
		'line-height'    => '25px',
		'letter-spacing' => '0.1px',
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.side-menu-menu-wrap ul li a',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'sidebar_li',
	'label'       => esc_attr__( 'Widgets List Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '1.7',
		'letter-spacing' => '0.1px',
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.widget_sidebar_main ul li, .widget_sidebar_main ol li',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'mn_footer_typog',
	'label'       => esc_attr__( 'Footer Widgets Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '1.7',
		'letter-spacing' => '0',
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.footer',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'typography',
	'settings'    => 'footer_cprt_typog',
	'label'       => esc_attr__( 'Footer Copyright Typography', 'switty' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '1.7',
		'letter-spacing' => '0',
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.footer-copyright',
		),
	),
	'transport' => 'auto',
) );

// Color options.
Kirki::add_section( 'color_options', array(
	'title'          => esc_attr__( 'Color Options', 'switty' ),
	'panel'          => 'switty_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'default_a_color',
	'label'       => esc_attr__( 'Default Links: Color', 'switty' ),
	'description' => esc_attr__( 'This is actually primary color.', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#337ab7',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> 'body a, .woocommerce .star-rating span',
			'property'	=> 'color',
		),
		array(
			'element'  => '.widget_sidebar_main .right-widget-title-spn',
			'property' => 'border-bottom-color',
		),
		array(
			'element'  => '.navigation.pagination .nav-links .page-numbers, .navigation.pagination .nav-links .page-numbers:last-child',
			'property' => 'border-color',
		),
		array(
			'element'  => '.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce .widget_price_filter .ui-slider .ui-slider-range',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'default_mover_a_color',
	'label'       => esc_attr__( 'Default Links: Mouse Over Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#44C47E',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> 'body a:hover',
			'property'	=> 'color',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'button_color',
	'label'       => esc_attr__( 'Button: Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '.spclbtn, #back-to-top',
			'property'	=> 'color',
		),
		array(
			'element'	=> '.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button',
			'property'	=> 'color',
		),
		array(
			'element'	=> '.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover',
			'property'	=> 'color',
		),
		array(
			'element'	=> '.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt',
			'property'	=> 'color',
		),
		array(
			'element'	=> '.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover',
			'property'	=> 'color',
		),
		array(
			'element'	=> '.woocommerce-product-search input[type="submit"]',
			'property'	=> 'color',
		),
		array(
			'element'	=> '.wpcf7-form .wpcf7-form-control.wpcf7-submit',
			'property'	=> 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'button_bg_color',
	'label'       => esc_attr__( 'Button: Background Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#286090',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '.spclbtn, #back-to-top',
			'property'	=> 'background-color',
		),
		array(
			'element'	=> '.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button',
			'property'	=> 'background-color',
		),
		array(
			'element'	=> '.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt',
			'property'	=> 'background-color',
		),
		array(
			'element'	=> '.woocommerce-product-search input[type="submit"]',
			'property'	=> 'background-color',
		),
		array(
			'element'	=> '.wpcf7-form .wpcf7-form-control.wpcf7-submit',
			'property'	=> 'background-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'button_mover_bg_color',
	'label'       => esc_attr__( 'Button: Mouse Over Background Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#44C47E',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '.spclbtn:hover, #back-to-top:hover',
			'property'	=> 'background-color',
		),
		array(
			'element'	=> '.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover',
			'property'	=> 'background-color',
		),
		array(
			'element'	=> '.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover',
			'property'	=> 'background-color',
		),
		array(
			'element'	=> '.woocommerce-product-search input[type="submit"]:hover',
			'property'	=> 'background-color',
		),
		array(
			'element'	=> '.wpcf7-form .wpcf7-form-control.wpcf7-submit:hover',
			'property'	=> 'background-color',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'menu_color',
	'label'       => esc_attr__( 'Main Menu: Parent Items Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#E2E2E2',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '#navbar .navbar-brand',
			'property'	=> 'color',
		),
		array(
			'element'	=> '.navbar-default .navbar-nav > li > a',
			'property'	=> 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'menu_mover_color',
	'label'       => esc_attr__( 'Main Menu: Active Parent Item Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus',
			'property'	=> 'color',
		),
		array(
			'element'	=> '.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus',
			'property'	=> 'color',
		),
		array(
			'element'	=> '.navbar-default .navbar-nav > li.current-menu-parent > a',
			'property'	=> 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'menu_bg_color',
	'label'       => esc_attr__( 'Main Menu: Background Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => 'rgba(1, 9, 3, 0.50)',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'	=> '#navbar',
			'property'	=> 'background-color',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'menu_bg_after_scroll_color',
	'label'       => esc_attr__( 'Main Menu: After Scroll Background Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => 'rgba(1, 9, 3, 0.30)',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'	=> '.afterscroolnav',
			'property'	=> 'background-color',
			'suffix'	=> '!important',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'menu_dd_color',
	'label'       => esc_attr__( 'Main Menu: Drop Down Items Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#6b6b6b',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '#navbar .dropdown-menu a',
			'property'	=> 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'menu_dd_mover_color',
	'label'       => esc_attr__( 'Main Menu: Drop Down Active Item Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#000000',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '#navbar .dropdown-menu > .active > a, #navbar .dropdown-menu > .active > a:hover, #navbar .dropdown-menu > .active > a:focus',
			'property'	=> 'color',
		),
		array(
			'element'	=> '#navbar .dropdown-menu a:hover',
			'property'	=> 'color',
		),
	),
	'transport' => 'auto',
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'menu_dd_bg_color',
	'label'       => esc_attr__( 'Main Menu: Drop Down Items Background Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#f4f4f4',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '#navbar .dropdown-menu a',
			'property'	=> 'background-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'menu_dd_mover_bg_color',
	'label'       => esc_attr__( 'Main Menu: Drop Down Active Item Background Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#6997bf',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '#navbar .dropdown-menu > .active > a, #navbar .dropdown-menu a:hover, #navbar .dropdown-menu > a:focus',
			'property'	=> 'background-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'dflt_cntnr_bg_color',
	'label'       => esc_attr__( 'Content Container: Background Color', 'switty' ),
	'section'     => 'color_options',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '.postsloop',
			'property'	=> 'background-color',
		),
	),
	'transport' => 'auto',
) );

// Blog.
Kirki::add_section( 'blog_options', array(
	'title'          => esc_attr__( 'Blog Options', 'switty' ),
	'panel'          => 'switty_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'switty_config', array(
	'type'			=> 'toggle',
	'settings'		=> 'archive_post_thumbnail',
	'label'			=> esc_attr__( 'Thumbnail on Archive Post', 'switty' ),
	'description'	=> esc_attr__( 'Enable/Disable Thumbnail on Archive/Loop Page', 'switty' ),
	'section'		=> 'blog_options',
	'default'		=> '1',
	'priority'		=> 10,
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'toggle',
	'settings'    => 'single_post_thumbnail',
	'label'       => esc_attr__( 'Thumbnail on Single Post', 'switty' ),
	'description' => esc_attr__( 'Enable/Disable Thumbnail on Single Post', 'switty' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'toggle',
	'settings'    => 'sticky_dt_disply',
	'label'       => esc_attr__( 'Display Sticky Post Date', 'switty' ),
	'description' => esc_attr__( 'Show/Hide date of sticky post on archive/loop page.', 'switty' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'select',
	'settings'    => 'blog_list_grid',
	'label'       => esc_attr__( 'Display List OR Grid', 'switty' ),
	'description' => esc_attr__( 'List, Grid 2 column or Grid 3 column on archive?', 'switty' ),
	'section'     => 'blog_options',
	'default'     => 'list',
	'priority'    => 10,
	'choices'     => array(
		'list'		=> esc_attr__( 'Display List', 'switty' ),
		'grid2c'	=> esc_attr__( 'Display Grid 2 Column', 'switty' ),
		'grid3c'	=> esc_attr__( 'Display Grid 3 Column', 'switty' ),
	),
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'select',
	'settings'    => 'post_date_view',
	'label'       => esc_attr__( 'Post Date View', 'switty' ),
	'description' => esc_attr__( 'Which date do you want to display for single post?', 'switty' ),
	'section'     => 'blog_options',
	'default'     => 'updated',
	'priority'    => 10,
	'choices'     => array(
		'updated' => esc_attr__( 'Display Updated Date', 'switty' ),
		'publish' => esc_attr__( 'Display Publish Date', 'switty' ),
	),
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'select',
	'settings'    => 'excerpt_or_content',
	'label'       => esc_attr__( 'Display Excerpt or Content on Archive', 'switty' ),
	'section'     => 'blog_options',
	'default'     => 'excerpt',
	'priority'    => 10,
	'choices'     => array(
		'excerpt'	=> esc_attr__( 'Display Excerpt', 'switty' ),
		'content'	=> esc_attr__( 'Display Content', 'switty' ),
		'non'		=> esc_attr__( 'Display Nothing', 'switty' ),
	),
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'number',
	'settings'    => 'excerpt_length',
	'label'       => esc_attr__( 'Excerpt Length', 'switty' ),
	'description' => esc_attr__( 'How much words you want to display on Archive page?', 'switty' ),
	'section'     => 'blog_options',
	'default'     => 57,
	'choices'     => array(
		'min'  => 1,
		'step' => 1,
	),
	'active_callback'  => array(
		array(
			'setting'  => 'excerpt_or_content',
			'operator' => '==',
			'value'    => 'excerpt',
		),
	),
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'select',
	'settings'    => 'display_archive_pagination',
	'label'       => esc_attr__( 'Display Pagination on Archive', 'switty' ),
	'description' => esc_attr__( 'Which type of pagination, you want to display?', 'switty' ),
	'section'     => 'blog_options',
	'default'     => 'nextprev',
	'priority'    => 10,
	'choices'     => array(
		'nextprev'	=> esc_attr__( 'Next Previous Pagination', 'switty' ),
		'number' 	=> esc_attr__( 'Number Pagination', 'switty' ),
	),
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'radio-image',
	'settings'    => 'blog_archive_layout',
	'label'       => esc_attr__( 'Archive / Loop Layout', 'switty' ),
	'section'     => 'blog_options',
	'default'     => 'rights',
	'priority'    => 10,
	'choices'     => array(
		'fullw'	  => get_template_directory_uri() . '/img/fullw.png',
		'rights'  => get_template_directory_uri() . '/img/rights.png',
	),
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'radio-image',
	'settings'    => 'blog_single_layout',
	'label'       => esc_attr__( 'Single Post Layout', 'switty' ),
	'section'     => 'blog_options',
	'default'     => 'rights',
	'priority'    => 10,
	'choices'     => array(
		'fullw'	  => get_template_directory_uri() . '/img/fullw.png',
		'rights'  => get_template_directory_uri() . '/img/rights.png',
	),
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'sticky_bg_color',
	'label'       => esc_attr__( 'Sticky Post background Color', 'switty' ),
	'section'     => 'blog_options',
	'default'     => '#d3d3d3',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.sticky',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'cmnt_even_color',
	'label'       => esc_attr__( 'Even Comment Color', 'switty' ),
	'section'     => 'blog_options',
	'default'     => '#000000',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '#comments .comment.even',
			'property' => 'color',
		),
		array(
			'element'  => '#comments .pingback.even',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'cmnt_even_bg_color',
	'label'       => esc_attr__( 'Even Comment Background Color', 'switty' ),
	'section'     => 'blog_options',
	'default'     => '#f8f8f8',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '#comments .comment.even',
			'property' => 'background-color',
		),
		array(
			'element'  => '#comments .pingback.even',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'cmnt_odd_color',
	'label'       => esc_attr__( 'Odd Comment Color', 'switty' ),
	'section'     => 'blog_options',
	'default'     => '#000000',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '#comments .comment.odd',
			'property' => 'color',
		),
		array(
			'element'  => '#comments .pingback.odd',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'cmnt_odd_bg_color',
	'label'       => esc_attr__( 'Odd Comment Background Color', 'switty' ),
	'section'     => 'blog_options',
	'default'     => '#eeeeee',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '#comments .comment.odd',
			'property' => 'background-color',
		),
		array(
			'element'  => '#comments .pingback.odd',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
) );

// Sidebar menu options.
Kirki::add_section( 'sitebar_menu_options', array(
	'title'          => esc_attr__( 'Sidebar Menu Options', 'switty' ),
	'panel'          => 'switty_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'toggle',
	'settings'    => 'sidebar_menu_onoff',
	'label'       => esc_attr__( 'Side Bar Menu', 'switty' ),
	'description' => esc_attr__( 'Enable/Disable Side Bar Menu', 'switty' ),
	'section'     => 'sitebar_menu_options',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'sb_menu_clr',
	'label'       => esc_attr__( 'Sidebar Menu: Items Color', 'switty' ),
	'section'     => 'sitebar_menu_options',
	'default'     => '#c4c4c4',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '.side-menu-menu-wrap ul li a',
			'property'	=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback'  => array(
		array(
			'setting'  => 'sidebar_menu_onoff',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'sb_menu_mover_clr',
	'label'       => esc_attr__( 'Sidebar Menu: Active Item Color', 'switty' ),
	'section'     => 'sitebar_menu_options',
	'default'     => '#44C47E',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '.side-menu-menu-wrap ul li a:hover, .side-menu-menu-wrap ul li.current_page_item a, .side-menu-menu-wrap ul li.current-menu-item a',
			'property'	=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback'  => array(
		array(
			'setting'  => 'sidebar_menu_onoff',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'sb_menu_bg_clr',
	'label'       => esc_attr__( 'Sidebar Menu: Background Color', 'switty' ),
	'section'     => 'sitebar_menu_options',
	'default'     => 'rgba(0,0,0,0.45)',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
		),
	'output' => array(
		array(
			'element'	=> '.side-menu-menu-wrap',
			'property'	=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback'  => array(
		array(
			'setting'  => 'sidebar_menu_onoff',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'sb_menu_cls_btn_clr',
	'label'       => esc_attr__( 'Sidebar Menu: Menu Close button color', 'switty' ),
	'section'     => 'sitebar_menu_options',
	'default'     => '#bdc3c7',
	'priority'    => 10,
	'output' => array(
		array(
			'element'	=> '.side-menu-close-button::before, .side-menu-close-button::after',
			'property'	=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback'  => array(
		array(
			'setting'  => 'sidebar_menu_onoff',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

// woocommerce section.
if ( class_exists( 'WooCommerce' ) ) {

	Kirki::add_section( 'woocommerce_options', array(
		'title'          => esc_attr__( 'Woocommerce Options', 'switty' ),
		'panel'          => 'switty_options', // Not typically needed.
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
	) );

	Kirki::add_field( 'switty_config', array(
		'type'        => 'toggle',
		'settings'    => 'display_related_prdkt',
		'label'       => esc_attr__( 'Related Products', 'switty' ),
		'description' => esc_attr__( 'Enable/Disable WooCommerce Related Products (Please save and reload)', 'switty' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	Kirki::add_field( 'switty_config', array(
		'type'        => 'toggle',
		'settings'    => 'support_gallery_zoom',
		'label'       => esc_attr__( 'Gallery Zoom', 'switty' ),
		'description' => esc_attr__( 'Enable/Disable gallery zoom support on single product. (Please save and reload)', 'switty' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	Kirki::add_field( 'switty_config', array(
		'type'        => 'toggle',
		'settings'    => 'support_gallery_lightbox',
		'label'       => esc_attr__( 'Gallery Light Box', 'switty' ),
		'description' => esc_attr__( 'Enable/Disable gallery light box support on single product. (Please save and reload)', 'switty' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	Kirki::add_field( 'switty_config', array(
		'type'        => 'toggle',
		'settings'    => 'support_gallery_slider',
		'label'       => esc_attr__( 'Gallery Slider', 'switty' ),
		'description' => esc_attr__( 'Enable/Disable gallery slider support on single product. (Please save and reload)', 'switty' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	Kirki::add_field( 'switty_config', array(
		'type'        => 'number',
		'settings'    => 'product_per_page',
		'label'       => esc_attr__( 'Number of products display on loop page', 'switty' ),
		'description' => esc_attr__( 'How much products you want to display on loop page? (Please save and reload)', 'switty' ),
		'section'     => 'woocommerce_options',
		'default'     => 12,
		'choices'     => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		),
	) );

	Kirki::add_field( 'switty_config', array(
		'type'        => 'slider',
		'settings'    => 'product_per_column',
		'label'       => esc_attr__( 'Number of products display per column', 'switty' ),
		'description' => esc_attr__( 'How much products you want to display in single line?', 'switty' ),
		'section'     => 'woocommerce_options',
		'default'     => 4,
		'priority'    => 10,
		'choices'     => array(
			'min'  => '2',
			'max'  => '5',
			'step' => '1',
			),
	) );

	Kirki::add_field( 'switty_config', array(
		'type'        => 'radio-image',
		'settings'    => 'woo_layout',
		'label'       => esc_attr__( 'WooCommerce Page Layout', 'switty' ),
		'description' => esc_attr__( 'This layout will apply on Shop, Single Product and Product Search Pages.', 'switty' ),
		'section'     => 'woocommerce_options',
		'default'     => 'fullw',
		'priority'    => 10,
		'choices'     => array(
			'fullw'	  => get_template_directory_uri() . '/img/fullw.png',
			'rights'  => get_template_directory_uri() . '/img/rights.png',
		),
	) );
} // End if().

// Footer widgets section.
Kirki::add_section( 'footer_options', array(
	'title'          => esc_attr__( 'Footer Widgets Options', 'switty' ),
	'panel'          => 'switty_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'slider',
	'settings'    => 'number_of_footer_widgets',
	'label'       => esc_attr__( 'Footer Widgets', 'switty' ),
	'description' => esc_attr__( 'How much Widgets you want? (please save and go to Widgets page to add.)', 'switty' ),
	'section'     => 'footer_options',
	'default'     => '0',
	'priority'    => 10,
	'choices'     => array(
		'min'  => '0',
		'max'  => '4',
		'step' => '1',
	),
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'footer_wdgt_color',
	'label'       => esc_attr__( 'Text Color', 'switty' ),
	'section'     => 'footer_options',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer, .footer caption',
			'property' => 'color',
		),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'number_of_footer_widgets',
			'operator' => '!=',
			'value'    => 0,
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'footer_wdget_headline_color',
	'label'       => esc_attr__( 'Widgets Headline Color', 'switty' ),
	'section'     => 'footer_options',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer .widgets_footer_title',
			'property' => 'color',
		),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'number_of_footer_widgets',
			'operator' => '!=',
			'value'    => 0,
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'footer_wdgt_link_color',
	'label'       => esc_attr__( 'Links Color', 'switty' ),
	'section'     => 'footer_options',
	'default'     => '#337ab7',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer a',
			'property' => 'color',
		),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'number_of_footer_widgets',
			'operator' => '!=',
			'value'    => 0,
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'footer_wdgt_mover_link_color',
	'label'       => esc_attr__( 'Links Color Mouse Over', 'switty' ),
	'section'     => 'footer_options',
	'default'     => '#44C47E',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer a:hover',
			'property' => 'color',
		),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'number_of_footer_widgets',
			'operator' => '!=',
			'value'    => 0,
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'footer_bg_color',
	'label'       => esc_attr__( 'Background Color', 'switty' ),
	'section'     => 'footer_options',
	'default'     => '#2A2A2A',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer',
			'property' => 'background-color',
		),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'number_of_footer_widgets',
			'operator' => '!=',
			'value'    => 0,
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'footer_wdgt_border_color',
	'label'       => esc_attr__( 'Top Border Color', 'switty' ),
	'section'     => 'footer_options',
	'default'     => '#337ab7',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer',
			'property' => 'border-color',
		),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'number_of_footer_widgets',
			'operator' => '!=',
			'value'    => 0,
		),
	),
	'transport' => 'auto',
) );

// Footer copyright section.
Kirki::add_section( 'footer_cprt_options', array(
	'title'          => esc_attr__( 'Footer Copyright Options', 'switty' ),
	'panel'          => 'switty_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'editor',
	'settings'    => 'left_copy_con',
	'label'       => esc_attr__( 'Footer Left Content', 'switty' ),
	'section'     => 'footer_cprt_options',
	'default'     => wp_kses_post( __( '<p>&copy; Copyright text. Some right reserved.</p>', 'switty' ) ),
	'priority'    => 10,
) );


Kirki::add_field( 'switty_config', array(
	'type'        => 'editor',
	'settings'    => 'right_copy_con',
	'label'       => esc_attr__( 'Footer Right Content', 'switty' ),
	'section'     => 'footer_cprt_options',
	'default'     => wp_kses_post( __( '<p>Powered by <a href="https://wordpress.org/themes/switty/" target="_blank">Switty WordPress Theme</a>.</p>', 'switty' ) ),
	'priority'    => 10,
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'footer_cprt_color',
	'label'       => esc_attr__( 'Text Color', 'switty' ),
	'section'     => 'footer_cprt_options',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer-copyright',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'footer_cprt_link_color',
	'label'       => esc_attr__( 'Links Color', 'switty' ),
	'section'     => 'footer_cprt_options',
	'default'     => '#337ab7',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer-copyright a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'footer_cprt_mover_link_color',
	'label'       => esc_attr__( 'Links Color Mouse Over', 'switty' ),
	'section'     => 'footer_cprt_options',
	'default'     => '#44C47E',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer-copyright a:hover',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'color',
	'settings'    => 'footer_cprt_bg_color',
	'label'       => esc_attr__( 'Background Color', 'switty' ),
	'section'     => 'footer_cprt_options',
	'default'     => '#111111',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer-copyright',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
) );

// misc section.
Kirki::add_section( 'misc_options', array(
	'title'          => esc_attr__( 'MISC Options', 'switty' ),
	'panel'          => 'switty_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'toggle',
	'settings'    => 'back_to_top',
	'label'       => esc_attr__( 'Back To Top Button', 'switty' ),
	'description' => esc_attr__( 'Enable/Disable Back To Top Button', 'switty' ),
	'section'     => 'misc_options',
	'default'     => '1',
	'priority'    => 10,
) );

// Settings in other section.
Kirki::add_field( 'switty_config', array(
	'type'        => 'slider',
	'settings'    => 'custom_logo_width',
	'label'       => esc_attr__( 'Logo Width', 'switty' ),
	'description'    => esc_attr__( 'Width will be set in Pixel. Height is automatic to maintain quality of Logo', 'switty' ),
	'section'     => 'title_tagline',
	'default'     => '200',
	'priority'    => 9,
	'choices'     => array(
		'min'  => '10',
		'max'  => '600',
		'step' => '1',
	),
	'output' => array(
		array(
			'element'	=> '#logoasimg .custom-logo',
			'property'	=> 'width',
			'suffix'	=> 'px',
		),
	),
	'transport' => 'auto',
) );

// Theme info section.
Kirki::add_section( 'themeinfo', array(
	'title'          => esc_attr__( 'Theme Info', 'switty' ),
	'panel'          => 'switty_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'custom',
	'settings'    => 'info_doc_file',
	'label'       => esc_attr__( 'Theme Docs', 'switty' ),
	'section'     => 'themeinfo',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">' . __( 'Switty Docs:', 'switty' ) . ' <a target="_blank" href="https://rinkuyadav.com/docs/switty-doc.docx"> ' . __( 'Download Docs File', 'switty' ) . '</a>.</div>',
	'priority'    => 10,
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'custom',
	'settings'    => 'info_support',
	'label'       => esc_attr__( 'Theme Support', 'switty' ),
	'section'     => 'themeinfo',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">' . __( 'Do you want support? You can create', 'switty' ) . ' <a target="_blank" href="http://wordpress.org/support/theme/switty"> ' . __( 'Support Topic here', 'switty' ) . '</a>.</div>',
	'priority'    => 10,
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'custom',
	'settings'    => 'info_review',
	'label'       => esc_attr__( 'Theme Review', 'switty' ),
	'section'     => 'themeinfo',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">' . __( 'Do you love Switty theme? Please', 'switty' ) . ' <a target="_blank" href="http://rinkuyadav.com/switty/"> ' . __( 'Add your review.', 'switty' ) . '</a>.</div>',
	'priority'    => 10,
) );

Kirki::add_field( 'switty_config', array(
	'type'        => 'custom',
	'settings'    => 'info_donate',
	'label'       => esc_attr__( 'Donate to Developer', 'switty' ),
	'section'     => 'themeinfo',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">' . __( 'I really need your support. i will make it more better, Promise! You can', 'switty' ) . ' <a target="_blank" href="https://www.paypal.me/RinkuYadav"> ' . __( 'Donate Me here', 'switty' ) . '</a>.</div>',
	'priority'    => 10,
) );
