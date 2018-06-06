<?php
/**
 * About configuration
 *
 * @package News_Unlimited
 */

$config = array(
	'menu_name' => esc_html__( 'About News Unlimited', 'news-unlimited' ),
	'page_name' => esc_html__( 'About News Unlimited', 'news-unlimited' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'news-unlimited' ), 'News Unlimited Lite' ),

	/* translators: 1: theme name */
	'welcome_content' => sprintf( esc_html__( 'We hope this page will help you to setup %1$s with few clicks. We believe you will find it easy to use and perfect for your website development.', 'news-unlimited' ), 'News Unlimited Lite' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','news-unlimited' ),
			'url'  => 'https://cyclonethemes.com/our_products/news-unlimited-lite',
			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','news-unlimited' ),
			'url'  => 'https://news-unlimited-lite.cyclonethemes.com/',
			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','news-unlimited' ),
			'url'    => 'https://docs.cyclonethemes.com/news-unlimited/',
			'button' => 'primary',
			),
		'rate_url' => array(
			'text' => esc_html__( 'Rate This Theme','news-unlimited' ),
			'url'  => 'https://wordpress.org/support/theme/news-unlimited/reviews/#new-post',
			),
		'pro' => array(
            'text'   => esc_html__( 'Buy Pro','news-unlimited' ),
            'url'    => 'https://www.templatesell.com/item/news-unlimited-pro/',
            'button' => 'primary',
            ),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'news-unlimited' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'news-unlimited' ),
		'support'             => esc_html__( 'Support', 'news-unlimited' ),
		'upgrade_to_pro'      => esc_html__( 'Upgrade to PRO', 'news-unlimited' ),
		'free_pro'            => esc_html__( 'FREE VS. PRO', 'news-unlimited' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'news-unlimited' ),
			'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'news-unlimited' ),
			'button_label'        => esc_html__( 'View documentation', 'news-unlimited' ),
			'button_link'         => 'https://docs.cyclonethemes.com/news-unlimited/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'news-unlimited' ),
			'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'news-unlimited' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'news-unlimited' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=news-unlimited-about&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'news-unlimited' ),
			'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'news-unlimited' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'news-unlimited' ),
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
				'title'       => esc_html__( 'One Click Demo Import', 'news-unlimited' ),
				'description' => esc_html__( 'Please install the One Click Demo Import plugin to import the demo content. After activation go to Appearance >> Import Demo Data and import it.', 'news-unlimited' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
			),
		),
	),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'news-unlimited' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'news-unlimited' ),
			'button_label' => esc_html__( 'Contact Support', 'news-unlimited' ),
			'button_link'  => esc_url( 'https://wordpress.org/support/theme/news-unlimited' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Theme Documentation', 'news-unlimited' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Kindly check our theme documentation for detailed information and video instructions.', 'news-unlimited' ),
			'button_label' => esc_html__( 'View Documentation', 'news-unlimited' ),
			'button_link'  => 'https://docs.cyclonethemes.com/news-unlimited/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'fifth' => array(
			'title'        => esc_html__( 'Child Theme', 'news-unlimited' ),
			'icon'         => 'dashicons dashicons-admin-customizer',
			'text'         => esc_html__( 'If you want to customize theme file, you should use child theme rather than modifying theme file itself.', 'news-unlimited' ),
			'button_label' => esc_html__( 'About child theme', 'news-unlimited' ),
			'button_link'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'sixth' => array(),
	),

   	// Upgrade.
    'upgrade_to_pro'        => array(
        'description'   => esc_html__( 'Upgrade to pro version for more exciting features and additional theme options.', 'news-unlimited' ),
        'button_label'  => esc_html__( 'Upgrade to Pro', 'news-unlimited' ),
        'button_link'   => 'https://www.templatesell.com/item/news-unlimited-pro/',
        'is_new_tab'    => true,
    ),

    // Free vs pro array.
    'free_pro' => array(
        array(
                'title' => esc_html__( 'Updates', 'news-unlimited' ),
                'desc' => esc_html__( 'Lifetime Free Updates', 'news-unlimited' ),
                'free' => esc_html__('yes','news-unlimited'),
                'pro' => esc_html__('yes','news-unlimited'),
        ),

        array(
                'title' => esc_html__( 'Breadcrum Image', 'news-unlimited' ),
                'desc' => esc_html__( 'Add image on breadcrum', 'news-unlimited' ),
                'free' => esc_html__('no','news-unlimited'),
                'pro' => esc_html__('yes','news-unlimited'),
        ),

        array(
            'title'             => esc_html__( 'Theme Color', 'news-unlimited' ),
            'desc'              => esc_html__( 'Change color of the theme', 'news-unlimited' ),
            'free'      => esc_html__('no','news-unlimited'),
            'pro'       => esc_html__('yes','news-unlimited'),
        ),

        array(
            'title'             => esc_html__( 'Secondary Theme Color', 'news-unlimited' ),
            'desc'              => esc_html__( 'Change secondary color of the theme', 'news-unlimited' ),
            'free'      => esc_html__('no','news-unlimited'),
            'pro'       => esc_html__('yes','news-unlimited'),
        ),

        array(
            'title'             => esc_html__( 'Show/Hide Sections', 'news-unlimited' ),
            'desc'              => esc_html__( 'Show/Hide sections on the homepage', 'news-unlimited' ),
            'free'              => esc_html__('no','news-unlimited'),
            'pro'               => esc_html__('yes','news-unlimited'),
        ),

        array(
            'title'             => esc_html__( 'Top Header', 'news-unlimited' ),
            'desc'              => esc_html__( 'Top Header', 'news-unlimited' ),
            'free'              => esc_html__('yes','news-unlimited'),
            'pro'               => esc_html__('yes','news-unlimited'),
        ),

        array(
            'title'             => esc_html__( 'Options Panel', 'news-unlimited' ),
            'desc'              => esc_html__( 'Options availble in the theme', 'news-unlimited' ),
            'free'              => esc_html__('Limited','news-unlimited'),
            'pro'               => esc_html__('All','news-unlimited'),
        ),
           
        array(
            'title'     => esc_html__( 'Font Options', 'news-unlimited' ),
            'desc'              => esc_html__( 'Google fonts options for changing the overall site fonts', 'news-unlimited' ),
            'free'      => 'no',
            'pro'       => esc_html__('100+','news-unlimited'),
        ),
        array(
            'title'     => esc_html__( 'Slider', 'news-unlimited' ),
            'desc'      => esc_html__( 'Add slider on the homepage', 'news-unlimited' ),
            'free'      => esc_html__('yes','news-unlimited'),
            'pro'       => esc_html__('yes','news-unlimited'),
        ),

        array(
            'title'     => esc_html__( 'Social Links', 'news-unlimited' ),
            'desc'      => esc_html__( 'Add social links ( facebook, twitter etc )', 'news-unlimited' ),
            'free'      => esc_html__('yes','news-unlimited'),
            'pro'       => esc_html__('yes','news-unlimited'),
        ),
        array(
                'title'     => esc_html__( 'Detailed Documentation', 'news-unlimited' ),
                'desc'      => esc_html__( 'All documentation about the theme', 'news-unlimited' ),
                'free'      => esc_html__('yes','news-unlimited'),
                'pro'       => esc_html__('yes','news-unlimited'),
        ),
        array(
            'title'     => esc_html__( 'Reorder Homepage Sections', 'news-unlimited' ),
            'desc'      => esc_html__( 'Change the sections order on the homepage', 'news-unlimited' ),
            'free'      => esc_html__('no','news-unlimited'),
            'pro'       => esc_html__('yes','news-unlimited'),
        ),

        array(
            'title'     => esc_html__( 'Footer Layout', 'news-unlimited' ),
            'desc'      => esc_html__( 'Change footer style', 'news-unlimited' ),
            'free'      => esc_html__('1','news-unlimited'),
            'pro'       => esc_html__('2','news-unlimited'),
        ),

        array(
            'title'     => esc_html__( 'Custom Post Type', 'news-unlimited' ),
            'desc'      => esc_html__( 'Another post type', 'news-unlimited' ),
            'free'      => esc_html__('no','news-unlimited'),
            'pro'       => esc_html__('yes','news-unlimited'),
        ),

        array(
            'title'     => esc_html__( 'Widgets', 'news-unlimited' ),
            'desc'      => esc_html__( 'Widget Sections', 'news-unlimited' ),
            'free'      => esc_html__('10','news-unlimited'),
            'pro'       => esc_html__('14','news-unlimited'),
        ),

        array(
            'title'     => esc_html__( 'Override Footer Credit', 'news-unlimited' ),
            'desc'      => esc_html__( 'Option to Override existing Powerby credit of footer', 'news-unlimited' ),
            'free'      => esc_html__('no','news-unlimited'),
            'pro'       => esc_html__('yes','news-unlimited'),
        ),
        array(
                'title'     => esc_html__( 'SEO', 'news-unlimited' ),
                'desc'              => esc_html__( 'Developed with high skilled SEO tools.', 'news-unlimited' ),
                'free'      => 'yes',
                'pro'       => 'yes',
        ),
        array(
                'title'     => esc_html__( 'Support Forum', 'news-unlimited' ),
                'desc'      => esc_html__( 'Highly experienced and dedicated support team for your help plus online chat.', 'news-unlimited' ),
                'free'      => esc_html__('yes', 'news-unlimited'),
                'pro'       => esc_html__('High Priority', 'news-unlimited'),
        )

    ),

);
News_Unlimited_About::init( apply_filters( 'News_Unlimited_about_filter', $config ) );
