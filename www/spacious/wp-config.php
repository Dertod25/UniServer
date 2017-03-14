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
define('DB_NAME', 'sp_user');

/** MySQL database username */
define('DB_USER', 'sp_user');

/** MySQL database password */
define('DB_PASSWORD', 'WgOrsYq3eZ5TGzB0');

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
define('AUTH_KEY',         'TQ>+rLSX:lV bD-p|gbW:O#v%_3z1+h<e};YBoU%+3unk5 =1U!%5u%(|=sG:TpY');
define('SECURE_AUTH_KEY',  '6v?2=u]-eWY )?$22U`fvg  A[08|/}+8N4 %qI158sOa-#s:Nqa{Yn*8voP]]LK');
define('LOGGED_IN_KEY',    'GL)c_EK)ao{A|HIH*`mqLx.It6Gz6:7?fHRE 0>1N@9StE+crurDc@LT_=13]fH?');
define('NONCE_KEY',        '4fyqD43bL_e25?dd1R18U7j&j`]8ctgU[QO#*>nwg#_X$Ep|m?Vv$>;0A)foVvB5');
define('AUTH_SALT',        '9*mI b=9}DRBU6{Jq]#mzCn-vB+y* =.!unvfviw_%S2yuPu*<rn:,)Z>8(9>^JD');
define('SECURE_AUTH_SALT', 'm7i@fDC]5}o}I.f|>ALQ8T6H3#k)cgJ+E&Sh,~OVC#l?uDW};*r,TyFkX=wW;4!D');
define('LOGGED_IN_SALT',   '5}SNePPqKud]wE-)i?dJEt?} +fb*!YMDL=Vg=phB/B(Il[KqGB+N.tkJ48O;J2$');
define('NONCE_SALT',       '2JiH{2uCcJFC8{/*J8fQ~Q#e=X5bFC!pZpJ6u^4CUD-v1RS c<|zc5PM-p0V<|,2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sp_';

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
