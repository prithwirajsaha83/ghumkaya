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
define('DB_NAME', 'ghumkayaDb');

/** MySQL database username */
define('DB_USER', 'ghumkayaMaster');

/** MySQL database password */
define('DB_PASSWORD', 'Qaz0987Mko!');

/** MySQL hostname */
define('DB_HOST', 'ghumkayadb.cdgbcjwp8grd.us-east-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'jlG=GF*8JUmE5LntJSqW^!fLt,J*=4($%JXF_Q=-i)N6Rv%7|Z_RjsdE`Qt]j=,P');
define('SECURE_AUTH_KEY',  'TsQ<gUB{#Zb1I:+[:hg/^:hm`w@Gr*c&e8B6rxXQ?U36Y(J#*T]t2zm-g,H8$oJw');
define('LOGGED_IN_KEY',    '}&%TPXcDVvBy$b+.b&_sSn:e^F&LKe0gUHDi*L=qa=|s%rx0-TZ6/3Ar#=9F7!m9');
define('NONCE_KEY',        'CTcd(fNk/jpR!fJ>)UZ&+F*0ZHR6r-p]Q8!%Gf?D[OYu+At{;k2j.,9;8_dNP2G0');
define('AUTH_SALT',        'Y8?>!~DDE>W4?W~H?[Wq<K-jRq?B|OS@#$j5NRd4k]$B>?^G{[x^OC bU-hG7.EZ');
define('SECURE_AUTH_SALT', '0?l3&)a.pyYzz3U-V:)0bpR%<M$j@:dvw3/{mQ_71|:mpI2F::HI>PdZ;smi#d|5');
define('LOGGED_IN_SALT',   '})JCK%TG+8${;6,E(_fzKcmt,*O%UkA]=IlAXm-$Wr]Nyc$U{OP]@iQk{w[O2v[_');
define('NONCE_SALT',       '$NY*y04yM,4]L;|.GAH>.I{Er#Y=u5f})t[Wc*3%`#7;nt$KMs2v+XozF$!.fdq&');

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

