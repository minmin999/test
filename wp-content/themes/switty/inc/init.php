<?php
/**
 * Include all files for functions.php.
 *
 * @package Switty
 */

/**
 * Theme setup.
 */
require_once get_template_directory() . '/inc/core/theme-setup.php';

/**
 * Theme scripts and styles.
 */
require_once get_template_directory() . '/inc/core/script-style.php';

/**
 * Include the file, which will add inline css code.
 */
require get_template_directory() . '/inc/core/inline-css.php';

/**
 * Theme widgets register.
 */
require_once get_template_directory() . '/inc/core/register-widgets.php';

/**
 * Theme actions and filters.
 */
require_once get_template_directory() . '/inc/core/actions-filters.php';

/**
 * Theme individual functions.
 */
require_once get_template_directory() . '/inc/core/individual-functions.php';

/**
 * Nav walker.
 */
require_once get_template_directory() . '/inc/core/navwalker.php';

/**
 * Add class-tgm-plugin-activation.
 */
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

/**
 * Add tgm options.
 */
require_once get_template_directory() . '/inc/tgm/tgm-options.php';

/**
 * Load kirki plugin, if not activated in list of plugins. Text Domain renamed in kirki.
 */
if( ! class_exists( 'Kirki' ) ) {
	require get_template_directory() . '/inc/frameworks/kirki/kirki.php';
}

/**
 * Include the kirki options file.
 */
require get_template_directory() . '/inc/kirki/kirki-options.php';

/**
 * Include custom woo filters and actions.
 */
require get_template_directory() . '/inc/core/custom-woo.php';

/**
 * Meta Box for pages / posts.
 */
require get_template_directory() . '/inc/core/meta-box.php';

/**
 * Donate / TRT pro.
 */
require get_template_directory() . '/inc/trt-customize-pro/class-customize.php';

/**
 * Theme page.
 */
require get_template_directory() . '/inc/core/add-theme-page.php';
