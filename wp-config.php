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
define('DB_NAME', 'wordpressfinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'H (QytN/{nT.E=PA[Vmo3wnbK;Y@f0mb$l&*+EYZHj`Y:P}+uZ=k|1GRI6#n^jA!');
define('SECURE_AUTH_KEY',  'gU*FP3z;eFo82~i>L}q!jg|KurrJFeo77<W7DE}XqvR.{KOjaF-1EnyOiM+:(:0w');
define('LOGGED_IN_KEY',    '2s/6xv~+2kD|o{5p I7U+1KT<JJS&Gkqd{;F4U2.4)t@@&L5VrC*-Suvg}6!d4SY');
define('NONCE_KEY',        '$?Sj?8V^MA.h[U|%#Z.%*dc:`q3I2yaO#1au/W/&$>Ps(Kh-<h#2.gP<20m5cU<v');
define('AUTH_SALT',        '5R27s78uz]7>5]NZf9j{b03=;Tc8n.9DPV&PX$g}|3:B?/3iY(5g|?%Yi|Qug651');
define('SECURE_AUTH_SALT', 'Rv&TFdPcBmKZ>iGV7z[_YuG~001D9bbGYB$3v+(ltM5f+87L{9?8qcdb%3#{R7)|');
define('LOGGED_IN_SALT',   ' GGbd%taAjdA4^EZ~6LK6DEO/m/=,Jp0N7Lz&c@Y#?+v)=}i7:Lb!nECB&2p%j6P');
define('NONCE_SALT',       'yD,uYuwxBo!qcMx #JfnqufPyS%r<tGc+s/.M^-Z<i,2zh([uPj=dWZ8XUv,<mj@');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
