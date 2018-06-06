<?php
/**
 * Demo class
 *
 * @package News_Unlimited
 */

if ( ! class_exists( 'News_Unlimited_Demo' ) ) {

	/**
	 * Main class.
	 *
	 * @since 1.0.0
	 */
	class News_Unlimited_Demo {

		/**
		 * Singleton instance of News_Unlimited_Demo.
		 *
		 * @var News_Unlimited_Demo $instance News_Unlimited_Demo instance.
		 */
		private static $instance;

		/**
		 * Configuration.
		 *
		 * @var array $config Configuration.
		 */
		private $config;

		/**
		 * Main News_Unlimited_Demo instance.
		 *
		 * @since 1.0.0
		 *
		 * @param array $config Configuration array.
		 */
		public static function init( $config ) {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof News_Unlimited_Demo ) ) {
				self::$instance = new News_Unlimited_Demo();
				if ( ! empty( $config ) && is_array( $config ) ) {
					self::$instance->config = $config;
					self::$instance->setup_actions();
				}
			}
		}

		/**
		 * Setup actions.
		 *
		 * @since 1.0.0
		 */
		public function setup_actions() {

			// Disable branding.
			add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

			// OCDI import files.
			add_filter( 'pt-ocdi/import_files', array( $this, 'ocdi_files' ), 99 );

			// OCDI after import.
			add_action( 'pt-ocdi/after_import', array( $this, 'ocdi_after_import' ) );
		}

		/**
		 * OCDI files.
		 *
		 * @since 1.0.0
		 */
		public function ocdi_files() {

			$ocdi = isset( $this->config['ocdi'] ) ? $this->config['ocdi'] : array();
			return $ocdi;
		}

		/**
		 * OCDI after import.
		 *
		 * @since 1.0.0
		 */
		public function ocdi_after_import() {

			// Set theme mod
			$theme_mods = !empty( $this->config['theme_mods'] ) ? $this->config['theme_mods'] : '';

			if( !empty( $theme_mods ) ){
				foreach ( $theme_mods as $key => $value) {					
					set_theme_mod( $key, $value );
				}
			}

			// Set widget data
			$widget_data = !empty( $this->config['widget_data'] ) ? $this->config['widget_data'] : '';

			foreach ( $widget_data as $key1 => $value1 ) {

				$label = explode( ':' , $key1 );

				$widget_key = $label[0];
				$position = $label[1];

				$db_widget_name = get_option( $widget_key );
				foreach ( $value1 as $key2 => $value2 ) {
					$db_widget_name[$position][$key2] = $value2;
				}
				update_option( $widget_key, $db_widget_name );
			}

			// Set static front page.
			$static_page = isset( $this->config['static_page'] ) ? $this->config['static_page'] : '';
			$posts_page  = isset( $this->config['posts_page'] ) ? $this->config['posts_page'] : '';
			update_option( 'show_on_front', 'page' );

			$pages = array(
				'page_on_front'  => $static_page,
				'page_for_posts' => $posts_page
			);

			foreach ( $pages as $option_key => $slug ) {
				$result = get_page_by_path( $slug );
				if ( $result ) {
					if ( is_array( $result ) ) {
						$object = array_shift( $result );
					} else {
						$object = $result;
					}

					update_option( $option_key, $object->ID );
				}
			}

			// Set menu locations.
			$menu_details = isset( $this->config['menu_locations'] ) ? $this->config['menu_locations'] : array();
			if ( ! empty( $menu_details ) ) {
				$nav_settings  = array();
				$current_menus = wp_get_nav_menus();

				if ( ! empty( $current_menus ) && ! is_wp_error( $current_menus ) ) {
					foreach ( $current_menus as $menu ) {
						foreach ( $menu_details as $location => $menu_slug ) {
							if ( $menu->slug === $menu_slug ) {
								$nav_settings[ $location ] = $menu->term_id;
							}
						}
					}
				}

				set_theme_mod( 'nav_menu_locations', $nav_settings );
			}
		}
	}

} // End if().
