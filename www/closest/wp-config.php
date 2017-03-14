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
define('DB_NAME', 'cl_closest');

/** MySQL database username */
define('DB_USER', 'closest_user');

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
define('AUTH_KEY',         'g!G_fr$84YHGu>f%yU6qkbM~9OlVc*8x3/|g&rNoY:NH$1Ym[SWKodpR+2IWDZJ#');
define('SECURE_AUTH_KEY',  'HVE?[2l6{eWF)8dOxApV!YuI]+4i+oP{!{CN9^9BG%xdAGOam&d?nhBW|<*/QCzD');
define('LOGGED_IN_KEY',    'NkKb`,c!{=fxBAw6*,B=e<~49&Fy=ut[v!e6Pl{,}RZBFO<eCczH?.v%UV ,hc=I');
define('NONCE_KEY',        '~DFRb1^vo. A!/ aZ,m%k+hw|Ut#av[>sqd=I490}n9<u0BOX!hw`9d3d}@z7VRO');
define('AUTH_SALT',        'p|z)Y?saCtAl)7vSjG$LL3yA:etkh{D?=u#~j@zms?e6I3Um :MY?a1G%pPdIb8G');
define('SECURE_AUTH_SALT', '&>VkedwT|2qrS^C^X3CT{#[ysiq:3Zb~/K^936HBBI- grgg5rhWx3iLjr%3]6;*');
define('LOGGED_IN_SALT',   'Xek#T9,fh_qE@TCIGH%_c[}d7E-; }kbh8B.6pm^U##!!q3PoB#9*!THR8fYcC}Y');
define('NONCE_SALT',       'BS)<UVC,01`nV%R>Df]:yS;>^},NM>Hx?DBanGvt7Ok/v,qP],,f(Z-Xp-Kqnn3r');

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
