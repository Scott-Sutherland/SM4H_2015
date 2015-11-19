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
define('DB_NAME', 'cl47-sm4h-2016');

/** MySQL database username */
define('DB_USER', 'cl47-sm4h-2016');

/** MySQL database password */
define('DB_PASSWORD', 'c-/G4Gs-q');

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
define('AUTH_KEY',         'C&HYwy-1:|dI,M(=E|>C^}rAw}t199=I>dc[m7j%T5E{HDYLg7%t0kGKQhY`f]-#');
define('SECURE_AUTH_KEY',  'c5ctuPx/;|ZdFbV/<9hWyphF<X]M;bcDLUm5{ImO+ZIiM<NWo#C]u-4RRjLeR.ok');
define('LOGGED_IN_KEY',    '/l,pg;MBJ`XUHq-+3_a|rIMqGb$;?P,uM:|CG*+GKFUL9nV.bA^Ow+}T3=Qb}SKS');
define('NONCE_KEY',        '/<3Da<${QX(BnG~CdZFzFpN$H}8|[ !}tZs7WilPaw}~t*?7qYid-l7idw#^,m,|');
define('AUTH_SALT',        'uUX6}+P{-#fnK0vJLq[-oF])j@&jjh8G^Ynte0]AR]|Zv~A{&Z0R3D;,zu`vIpI^');
define('SECURE_AUTH_SALT', 'CwO1:U xWD~kyl!Kx{K${I,Vdzk04^1EK<!J?pFA1^L+.ub6LT*f%k4P|oX-an!(');
define('LOGGED_IN_SALT',   '=pSW %mNicQ|7C?[QvN{kscI:A!W#qoH11=.gc*i8D&KyXM%!#_,}{MfwW:=Fi{|');
define('NONCE_SALT',       'kYroGP7nJAbQ+IU|e5H#%`i;6H-A8D4~HX%u_3Vt> K /EiMwf7g>k<2]i5LFtz)');

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
