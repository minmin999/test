<?php
/**
 * About configuration
 *
 * @package Fire_Blog
 */

$config = array(
	'menu_name' => esc_html__( 'About Fire Blog', 'fire-blog' ),
	'page_name' => esc_html__( 'About Fire Blog', 'fire-blog' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'fire-blog' ), 'Fire Blog' ),

	/* translators: 1: theme name */
	'welcome_content' => sprintf( esc_html__( 'We hope this page will help you to setup %1$s with few clicks. We believe you will find it easy to use and perfect for your website development.', 'fire-blog' ), 'Fire Blog' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','fire-blog' ),
			'url'  => 'https://cyclonethemes.com/our_products/fireblog-lite',
			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','fire-blog' ),
			'url'  => 'https://fireblog-lite.cyclonethemes.com/',
			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','fire-blog' ),
			'url'    => 'https://docs.cyclonethemes.com/fire-blog-documentation/',
			'button' => 'primary',
			),
		'rate_url' => array(
			'text' => esc_html__( 'Rate This Theme','fire-blog' ),
			'url'  => 'https://wordpress.org/support/theme/fire-blog/reviews/#new-post',
			),
		'pro_url' => array(
			'text'   => esc_html__( 'Buy Pro Version','fire-blog' ),
			'url'    => 'https://www.templatesell.com/item/fireblog-pro/',
			'button' => 'primary',
			),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'fire-blog' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'fire-blog' ),
		'support'             => esc_html__( 'Support', 'fire-blog' ),
		'upgrade_to_pro'      => esc_html__( 'Upgrade to PRO', 'fire-blog' ),
		'free_pro'            => esc_html__( 'FREE VS. PRO', 'fire-blog' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'fire-blog' ),
			'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'fire-blog' ),
			'button_label'        => esc_html__( 'View documentation', 'fire-blog' ),
			'button_link'         => 'https://docs.cyclonethemes.com/fire-blog-documentation/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'fire-blog' ),
			'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'fire-blog' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'fire-blog' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=fire-blog-about&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'fire-blog' ),
			'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'fire-blog' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'fire-blog' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			'one-click-demo-import' => array(
				'title'       => esc_html__( 'One Click Demo Import', 'fire-blog' ),
				'description' => esc_html__( 'Please install the One Click Demo Import plugin to import the demo content. After activation go to Appearance >> Import Demo Data and import it.', 'fire-blog' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
			),
			'cyclone-widget' => array(
				'title'       => esc_html__( 'Cyclone Widgets', 'fire-blog' ),
				'description' => esc_html__( 'Please install the Cyclone Widgets plugin to get additionals widgets for the theme.', 'fire-blog' ),
				'check'       => function_exists( 'cyclone_widgets' ),
				'plugin_slug' => 'cyclone-widget',
				'id'          => 'cyclone-widget',
			)
		),
	),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'fire-blog' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'fire-blog' ),
			'button_label' => esc_html__( 'Contact Support', 'fire-blog' ),
			'button_link'  => esc_url( 'https://wordpress.org/support/theme/fire-blog' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Theme Documentation', 'fire-blog' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Kindly check our theme documentation for detailed information and video instructions.', 'fire-blog' ),
			'button_label' => esc_html__( 'View Documentation', 'fire-blog' ),
			'button_link'  => 'https://docs.cyclonethemes.com/fire-blog-documentation/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		// 'third' => array(
		// 	'title'        => esc_html__( 'Pro Version', 'fire-blog' ),
		// 	'icon'         => 'dashicons dashicons-products',
		// 	'icon'         => 'dashicons dashicons-star-filled',
		// 	'text'         => esc_html__( 'Upgrade to pro version for additional features and options.', 'fire-blog' ),
		// 	'button_label' => esc_html__( 'View Pro Version', 'fire-blog' ),
		// 	'button_link'  => 'https://promenadethemes.com/downloads/blog-way-plus/',
		// 	'is_button'    => true,
		// 	'is_new_tab'   => true,
		// ),
		// 'fourth' => array(
		// 	'title'        => esc_html__( 'Customization Request', 'fire-blog' ),
		// 	'icon'         => 'dashicons dashicons-admin-tools',
		// 	'text'         => esc_html__( 'We have dedicated team members for theme customization. Feel free to contact us any time if you need any customization service.', 'fire-blog' ),
		// 	'button_label' => esc_html__( 'Customization Request', 'fire-blog' ),
		// 	'button_link'  => 'https://promenadethemes.com/contact-us/',
		// 	'is_button'    => false,
		// 	'is_new_tab'   => true,
		// ),
		'fifth' => array(
			'title'        => esc_html__( 'Child Theme', 'fire-blog' ),
			'icon'         => 'dashicons dashicons-admin-customizer',
			'text'         => esc_html__( 'If you want to customize theme file, you should use child theme rather than modifying theme file itself.', 'fire-blog' ),
			'button_label' => esc_html__( 'About child theme', 'fire-blog' ),
			'button_link'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'sixth' => array(),
	),

	// Upgrade.
	'upgrade_to_pro' 	=> array(
		'description'   => esc_html__( 'Upgrade to pro version for more exciting features and additional theme options.', 'fire-blog' ),
		'button_label' 	=> esc_html__( 'Upgrade to Pro', 'fire-blog' ),
		'button_link'  	=> 'https://www.templatesell.com/item/fireblog-pro/',
		'is_new_tab'   	=> true,
	),

    // Free vs pro array.
    'free_pro' => array(
	    array(
		    'title'		=> esc_html__( 'Updates', 'fire-blog' ),
		    'desc' 		=> esc_html__( 'Lifetime Free Updates', 'fire-blog' ),
		    'free'      => esc_html__('yes','fire-blog'),
		    'pro'       => esc_html__('yes','fire-blog'),
	    ),

	    array(
		    'title'		=> esc_html__( 'Featured Slider', 'fire-blog' ),
		    'desc' 		=> esc_html__( 'Slider from category', 'fire-blog' ),
		    'free'      => esc_html__('yes','fire-blog'),
		    'pro'       => esc_html__('yes','fire-blog'),
	    ),

	    array(
		    'title'		=> esc_html__( 'Banner', 'fire-blog' ),
		    'desc' 		=> esc_html__( 'Banner on homepage', 'fire-blog' ),
		    'free'      => esc_html__('yes','fire-blog'),
		    'pro'       => esc_html__('yes','fire-blog'),
	    ),

        array(
    	    'title'		=> esc_html__( 'Home Layout', 'fire-blog' ),
    	    'desc' 		=> esc_html__( 'Variations of home page design', 'fire-blog' ),
    	    'free' 		=> esc_html__('5','fire-blog'),
    	    'pro'  		=> esc_html__('5','fire-blog'),
        ),

        array(
    	    'title'		=> esc_html__( 'Demo Content', 'fire-blog' ),
    	    'desc' 		=> esc_html__( 'Import content from our demo site', 'fire-blog' ),
    	    'free' 		=> esc_html__('no','fire-blog'),
    	    'pro'  		=> esc_html__('yes','fire-blog'),
        ),
	    
	    array(
		    'title'     => esc_html__( 'Font Options', 'fire-blog' ),
		    'desc' 		=> esc_html__( 'Google fonts options for changing the overall site fonts', 'fire-blog' ),
		    'free'  	=> 'no',
		    'pro'   	=> esc_html__('100+','fire-blog'),
	    ),
	    array(
		    'title'     => esc_html__( 'Color Option', 'fire-blog' ),
		    'desc'      => esc_html__( 'Options to change color of the site', 'fire-blog' ),
		    'free'      => esc_html__('no','fire-blog'),
		    'pro'       => esc_html__('yes','fire-blog'),
	    ),
	    array(
		    'title'     => esc_html__( 'Detailed Documentation', 'fire-blog' ),
		    'desc'      => esc_html__( 'All documentation about the theme', 'fire-blog' ),
		    'free'      => esc_html__('yes','fire-blog'),
		    'pro'       => esc_html__('yes','fire-blog'),
	    ),
        array(
    	    'title'     => esc_html__( 'Instagram Feeds', 'fire-blog' ),
    	    'desc'      => esc_html__( 'Widget to display feeds from instagram account', 'fire-blog' ),
    	    'free'      => esc_html__('yes','fire-blog'),
    	    'pro'       => esc_html__('yes','fire-blog'),
        ),

        array(
    	    'title'     => esc_html__( 'Social Icons in Header', 'fire-blog' ),
    	    'desc'      => esc_html__( 'Option to show social links in main header', 'fire-blog' ),
    	    'free'      => esc_html__('yes','fire-blog'),
    	    'pro'       => esc_html__('yes','fire-blog'),
        ),

        array(
    	    'title'     => esc_html__( 'Override Footer Credit', 'fire-blog' ),
    	    'desc'      => esc_html__( 'Option to Override existing Powerby credit of footer', 'fire-blog' ),
    	    'free'      => esc_html__('no','fire-blog'),
    	    'pro'       => esc_html__('yes','fire-blog'),
        ),
	    array(
		    'title'     => esc_html__( 'SEO', 'fire-blog' ),
		    'desc' 		=> esc_html__( 'Developed with high skilled SEO tools.', 'fire-blog' ),
		    'free'  	=> 'yes',
		    'pro'   	=> 'yes',
	    ),
	    array(
		    'title'     => esc_html__( 'Support Forum', 'fire-blog' ),
		    'desc'      => esc_html__( 'Highly experienced and dedicated support team for your help plus online chat.', 'fire-blog' ),
		    'free'      => esc_html__('yes', 'fire-blog'),
		    'pro'       => esc_html__('High Priority', 'fire-blog'),
	    )

    ),

);
Fire_Blog_About::init( apply_filters( 'fire_blog_about_filter', $config ) );
