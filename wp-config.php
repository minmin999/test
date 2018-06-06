<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`GU9XuNV/rb|9,{ByQwK2|$WlZ,FQ__EnOYC9 T8(~?b5I)(^PDpW>[/&xtuZK0 ');
define('SECURE_AUTH_KEY',  '/R@c-_v=} nvW6:Wv#TLhQxw=r43+:{?lF6J3p}.cnWiTBHaCuSm};gG<EvxoDKt');
define('LOGGED_IN_KEY',    'W861EZEoCgWZM_M&|[UJ~k,%4?~Seb]l9RPp? HsYieQRy&~LS%hLKc$U$){@Wlq');
define('NONCE_KEY',        'N5k1uqg1/mz;pF<V6{<V5Ns#`_ZfZAT)4QT8pamN#N@pbAH.3`&WQ$wxbOY<T5k,');
define('AUTH_SALT',        '7&SK|{f*1DDC!ZZMN 1xuRI;xG*5_$E1{z0lq(5IRd@_mxH?cAswmzu/=JNy-t| ');
define('SECURE_AUTH_SALT', 'swD`u9C5]<Q^.1@0$ZN$|uINI<m7r*yQXM*(&WVuPiS8z,ch!#_&0J0%[.Z5K1aq');
define('LOGGED_IN_SALT',   'Ytf UF%Q%i8:N9q<9pvCa(/<c?L2RxwB~iyoPK8I4{GBe,n(vw{TNB;?bb1H,Gdy');
define('NONCE_SALT',       'hGQ{MAEJ5^M-,D2r,m;.QyQyQgJ)1Q|zJHwpG6(Ae^ct/7-A-c^U#4of0{207z-,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
