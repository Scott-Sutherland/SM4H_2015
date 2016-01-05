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
define('DB_NAME', 'cl47-sm4h-live');

/** MySQL database username */
define('DB_USER', 'cl47-sm4h-live');

/** MySQL database password */
define('DB_PASSWORD', 'sE-2kYD^r');

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
define('AUTH_KEY',         '9#3Um&H/5l6{K-Bjiu#A]l~<}LwY**(rpWc8QV9UQmwR!VJi/UPq+M/]T6e5#F-1');
define('SECURE_AUTH_KEY',  '#.|ZYXi6)}kXXn8vjqplY?KvFJ3/Su$5Qb>]R4F#J+b5Wgw-|->)|9swwGzNWd`A');
define('LOGGED_IN_KEY',    'AlWFr5}*3I-~Xo<[hNxx<f_iMZlG;+?HqX=Mrk]O}+*liI}KDu)i<?o=R6km*jQ2');
define('NONCE_KEY',        'FYN]p <Xd2+nuQk:nqo-*W%o1,Z=z6nVNkWgKt|aSZ{-}$Iw/XAg,V~y4EZh#7Z8');
define('AUTH_SALT',        '.)+xUUK$B5+<]M)|(ZVL7Ne&~/r($TF,rM8Ei`RQo]lsVP*+Ou%tdyI:5/`L`e@C');
define('SECURE_AUTH_SALT', 'RW&S|+SfnDThS >tj/JR>k.+]I =$ifV@,KA-BP,[[qBu#`7a|!||&8UM62<]zi>');
define('LOGGED_IN_SALT',   'v=lCW(chCl Gr=}PilG:(pEcEs|WCM;~k2R Oz0K+xe5GS&-C*/u+S:[ ~P[@uP)');
define('NONCE_SALT',       'tXCn/_$37SQh]h.gY~b*a4eGnRn*jDO%BhJR?F6H-~#SSCk$q%<hm}~-=B`:sJ#|');

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
