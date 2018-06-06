<?php
/**
 * Demo configuration
 *
 * @package News_Unlimited
 */

$config = array(
	'static_page'    => 'homepage',
	'posts_page'     => '',
	'menu_locations' => array(
		'menu-1' => 'main-menu'
	),
	'theme_mods' => array(
		'select_slider_category' => 7,
		'select_headline_category' => 3
	),
	'widget_data' => array(
		'widget_news_unlimited_widget:1' => array(
			'category' => 4
		),
		'widget_news_unlimited_middle_section_widget:1' => array(
			'category-1' => 6
		),
		'widget_news_unlimited_news_below_middle_section_widget:1' => array(
			'category' => 3
		),
		'widget_news_unlimited_latest_news_widget:2' => array(
			'category' => 3
		),
		'widget_news_unlimited_sidebar_last_object_widget:2' => array(
			'category' => 5
		),
		'widget_news_unlimited_latest_news_widget:3' => array(
			'category' => 6
		),
		'widget_news_unlimited_latest_news_widget:1' => array(
			'category' => 2
		),
		'widget_news_unlimited_sidebar_last_object_widget:1' => array(
			'category' => 3
		)
	),
	'ocdi'           => array(
		array(
			'import_file_name'             => esc_html__( 'Theme Demo Content', 'news-unlimited' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer.dat',
		),
	),
);

News_Unlimited_Demo::init( apply_filters( 'News_Unlimited_demo_filter', $config ) );
