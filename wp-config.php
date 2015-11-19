<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/sites/scottishmotorhomes4hire.co.uk/public_html/development/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'cl47-a-wordp-b8f');

/** MySQL database username */
define('DB_USER', 'cl47-a-wordp-b8f');

/** MySQL database password */
define('DB_PASSWORD', 'YcBWn^H^3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'n4-ZhSqog7WjQA^h-Hk8C/_3ODv0ll8mlLyvK/_D9gzT_1^70RS4zCM=sT(O4vwU');
define('SECURE_AUTH_KEY',  'n-0rYvGc0nVsf5Yq!NpMBDcGjKYvaVtjmRQujIR8BLeSLQvwWS1o=MpUpUbA=fVg');
define('LOGGED_IN_KEY',    'lrFoDcXH2CMCf=LbPi93tgbigaB-2j29y6y3rs-pHm8(HzI26#44XKo58hfezL(I');
define('NONCE_KEY',        'ZPCg4PYV#Mub5-u56#=xyWYmTzSMuZ5#fKxYvoWVZgvcx-JfwNxxSgFgvqs#8G1L');
define('AUTH_SALT',        '2N/-e56gGoP+4z3oApZmfm935Up/zNvUSwme6Qwfufd2/cuTbhSJcrauRjfd3Mk8');
define('SECURE_AUTH_SALT', '9Rl1sApbSgw1m=Bf2IjDR1xk8q8!rOjgawQrj=l(MC)wI=ar4KI8Le)QOTn1poRK');
define('LOGGED_IN_SALT',   '7tpaIWWKI4sZmVsPflJCuWQ#YTFIEJ/mxC58uiTc+2m)g56Jd2Wln#umerQgA7Q#');
define('NONCE_SALT',       'V3=SIeACW!i934JQrVzoRXCUbXk7ZnP!qepNrP1hxKoL3ZXtOQy=mTJ/EIcHpjwV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

