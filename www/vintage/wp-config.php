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
define('DB_NAME', 'vi_vintage');

/** MySQL database username */
define('DB_USER', 'vintage_user');

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
define('AUTH_KEY',         'e vW[?I#@(>s$Z9+p@ sv:W:z{LK~jG>Na-Pi7R{Gp;:@H^H$9RVx[$SPLY&qc?,');
define('SECURE_AUTH_KEY',  'Xm1}Rctw3(Yqt|d%}&f.~j=6@IdOBv[1 t>/k+ltt~km+KatH.|>1:^LpteD#/>+');
define('LOGGED_IN_KEY',    'KAuJ*`x-:=w6_KD1^k+]6_byY,cYV;9:-eW6Z;j.5<>%tPQV9 ply*oit{[~}$xD');
define('NONCE_KEY',        '~sar*hWwhALg@QRZZ9|?x{#mye:NjN.hG3;kNL3.?CO@5pPEr(|J7cu#`IL@yoVn');
define('AUTH_SALT',        'zfrt%wO{Qlp^|0))e/]><iLoG%sknhp-Al[Zaa[jY6j=u.mIw6a00lQ|:}ybeOF(');
define('SECURE_AUTH_SALT', 'zhuzW1GuU>.a?zI!OS(8C=1e9*JHm]OO,+<j$ yNk9wS2LM7<tgPLS!D`5&H/hrq');
define('LOGGED_IN_SALT',   'V;dZE#gS~vp#$]35?E5g d8O)|pbD]cz6S%k5KO|Gr5DjF=q15o+G|<wOq2T6d#j');
define('NONCE_SALT',       'HL9#[=e%8%KxE&<e19693Lak4:JD$mdAVv]kwD&|(:%~Xz9Ad6oKI32/(vEN!*&x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vi_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
