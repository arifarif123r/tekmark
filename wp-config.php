<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techmarket' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x]GXy~np`e(,L8fP - %79lwO-)(oI}BH X5I@- a3&7bKYgDU2Kmfp((0;w]5cx' );
define( 'SECURE_AUTH_KEY',  'bYpp9e<*~AlbQ%p}1YXRU?@E^5w9/?B2aSeft19rM1b)$lG83PzqO5Q]}JRSlnOo' );
define( 'LOGGED_IN_KEY',    'No2+*q:68Npa&Yw|h,f0que)Y1w_S/jw~YP/4u7ZRyEha_ r0Sf-Aw,r/!Rn;duw' );
define( 'NONCE_KEY',        'Cr&uUySlGre]~%ZcdxmKB@C0^6w.=?jSak}tSD]}G/_m1GbW(o(e~p-k%<O;A=U2' );
define( 'AUTH_SALT',        'HzWiW=0pmBm4JR/0:nU>Iu]LaRna_e5TN]-FJ7RKv~]~I21 ]_ yqVY3}P6~TL=<' );
define( 'SECURE_AUTH_SALT', '/z&cx$(^{:o(Cm7L{K^k(u+4Hr_n2ZW[ZL4.y=b-`:%A{.ym)gv9xq#QF7JV`&Tq' );
define( 'LOGGED_IN_SALT',   'Fh(~{Uvr;CV]FD;VUfwt37XGSIrDH`)_Ua6Tt6R/p|J`jd[F*fAXK3Z@!Mr$+b%]' );
define( 'NONCE_SALT',       'c0reEMc7Qh5dSJa63di15WQHAsBI1j#s0YLeB`J VY@[@.kBKIc<cKxudiWLS}9*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'tm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
