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
define('DB_NAME', 'ur_urku');

/** MySQL database username */
define('DB_USER', 'urku_user');

/** MySQL database password */
define('DB_PASSWORD', 'Z5TGzB0WgOrsYq3e');

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
define('AUTH_KEY',         '_)A<B XWsQt;$ofLN4rGmp!%i,b _G<?4@QFWh)i#YzO4~@DAq)$FBM6b]}dApqC');
define('SECURE_AUTH_KEY',  'mH}1SVh}NhZzy^p4S6>M`/r`~--];DE9&([x>.YDIr6`~x=9`5BLKN0,H.p^6RbO');
define('LOGGED_IN_KEY',    '%S1u$yIf)ImWs8OuIxzD?EpZm91QudT&05W6{vx{:6-ImeSgL1]q50IKbMl%^uF<');
define('NONCE_KEY',        '6Us`3[lBY1&Sb~E8{2ovvE8Gp:v|.wtqUqU|<IV8hII$vY/{ 0T-1.i,.E/WD/pl');
define('AUTH_SALT',        '6g<g/|lCiw,Fa]n+7)%RVm_.yCGV0]=/gwBtEw_`4Gf5N]k2W5SD7uu58_C{n(`l');
define('SECURE_AUTH_SALT', 'w1DZmO3{sb3/S2H!URK;D$bkc6)_lce2!1hjYPt]uDU8xzc_Mtu${2](MLW#6.4p');
define('LOGGED_IN_SALT',   '&LQSV(2x}xx|$pAO_ 8!Yuj(O[|Qlkk.EPv#1b|l66erb`yU^HEe)d_L3:],wOol');
define('NONCE_SALT',       'X@g)fV},KEN64I$u_Cq ,{H@+N4!bGooAiHB.%n4V5-e7I)!{_b%ZC87(;DF9g<{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ur_';

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
