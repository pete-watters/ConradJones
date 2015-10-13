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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'cuilduin');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'wordpress');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'wordpress');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{Mi]ISuo>cnW]Dh<rOKX=|~X6>[^BpV;eL&7Zpe-irR)sP!m8*bm&13W(>8*+3|;');
define('SECURE_AUTH_KEY',  'VY&Ny(#yZ-kt}#qRG6t-p63EYmD_;$24D8:U.|$+#%Zug8Y16Fe&m%)@{oY5Bw^/');
define('LOGGED_IN_KEY',    '3&2>ImzOJ6+hGBIXwD4>V&vtf+c7/~4 3-h,3t+Yg`Y`H41>yC/yX^;$>ecnV9[o');
define('NONCE_KEY',        'oJ+;UpJtV,>Wj-Fh@7M=__yR-4.V[2yz+.[w$hUg$c8B9xw2oy!-/-Cd6fVfG+3p');
define('AUTH_SALT',        '%#eE41)|Qfpp]3bs}^=Oo1Vr_|AS~EG-f}f+))^GUh_ !Fj?_8VSznQK%Q+ JN,p');
define('SECURE_AUTH_SALT', 'a<ct2j]nH)_R~7Fx#`McJ.{I}pmEU{1>XAi-TS6LVk_0ByVnX}eWFf J2{V|A zb');
define('LOGGED_IN_SALT',   'IjJ,F.<- {|Fmf&Pli@[:12bCYb*T%AXw6FCV+z(ja.Fm4XS>E2iz|9y[feM-{=G');
define('NONCE_SALT',       'Sp?VuO)8+=*=-3{D[<fJA/VdWqi ~tE~^5~@QlYZCXml#FqA~J{U4$5=.ZSK=bX.');

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
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
