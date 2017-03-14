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
define('DB_NAME', 'wp_user');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'axlLVpWkcIRJvIhy');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'FHpSz>UT=)~GgCreo+?.G7jM}*,T_#0-iE!^Ij5IaF+~ARHr8{NA6M%KMEAz}C6M');
define('SECURE_AUTH_KEY',  'tzF<sJf%10 ;6?xL`,p[%GqL~Ze5_zS}WK/*!D,#P~Xok%Mr)/}qOg)NoGEk.a(A');
define('LOGGED_IN_KEY',    'J$uD`[}%.mBGfEZxRNnOq+pG`qE^x}`>L54r43rf@pCtqDr*F8K$#b&(|{B%1e+^');
define('NONCE_KEY',        'g7yTn~UXc]=I,^*>#UCh+BhN,WO%#xJwaEid$x,$nc$AgGu=mQ>DrN5l3EnR%L c');
define('AUTH_SALT',        '.zkd8f`nd_#RdVm24dg8tLp?:^y4OJEGB7 cMw;k,]>@9e}j<@!F#ivWOw[uhiwX');
define('SECURE_AUTH_SALT', 'wE>q4(ZM}H/;ZB)$E6!@4CsabyfN{:[0/VSM@a>@UbC6LuOM@oH-@/T(O4o6nB]E');
define('LOGGED_IN_SALT',   'j`]y;=wTS(oX$xJ,>BNW +1fJ?2S;;%Oj#/f3k2{;@F.!(NIWU9R<v:*q@QJw?zZ');
define('NONCE_SALT',       '7=bhE3$ZY.1nhsBECRoc;/xH?~}S>*td4pUTGj9p ,QXvwSZ3c HtxE4$!=n&2zZ');

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
