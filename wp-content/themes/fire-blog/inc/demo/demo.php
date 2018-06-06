<?php
/**
 * Demo configuration
 *
 * @package Fire Blog
 */

$config = array(
	'static_page'    => '',
	'posts_page'     => '',
	'menu_locations' => array(
		'menu-1' => 'all-pages'
	),
	'ocdi'           => array(
		array(
			'import_file_name'             => esc_html__( 'Theme Demo Content', 'fire-blog' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer.dat',
		),
	),
);

Fire_Blog_Demo::init( apply_filters( 'fire_blog_demo_filter', $config ) );
