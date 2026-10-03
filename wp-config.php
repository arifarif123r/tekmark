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
define( 'AUTH_KEY',         ';}rpt}C,sFsVCy?|F&F5K8^.SP50M=*S#0 T?1eu:^COn{xvWm$nAqiT!7??[lY?' );
define( 'SECURE_AUTH_KEY',  'KZnXbw^OVrdnamCvas)6~{.fmI=FFvhK/O%1RwlpSITv_h*5a0_(^kj.~FR85x.5' );
define( 'LOGGED_IN_KEY',    'W->Aj|}ouvK-HUgi1V,pWLw(A=b4OsF,9$+d^f-_(Vc,6hRN5F4_Bb}9p,^}l}r[' );
define( 'NONCE_KEY',        'LW/.@X>-kF$ZVh%~6vv;M4#G*p*>R=QGVFVxzk?`T~y;Zc3stKgt0,.$)(x4&nwt' );
define( 'AUTH_SALT',        '=o+) 8R{JCqUc^lOeY_^vGEv5_8wBk26lsgnx>b2te>H($]76~b0.6fn1h]i;YVg' );
define( 'SECURE_AUTH_SALT', 'PqPO%^w&4l5(1ze*x4MAUA&|&&GYOKW+HC~*r)7;qf$5BUhFdnX;BpPy.b<6hreG' );
define( 'LOGGED_IN_SALT',   '>b6c2.-+o@^4w>syA,3!J6b+nPh@;<,orMGi2Vcv6l04} kvCt.;1j3h0B8S5A~8' );
define( 'NONCE_SALT',       'EM>fW0%3mrh.V*N[cjd^W>cqpo:c}}nA*YCUFY:G!e3e[>vfAb,}S>ddv<ClA/fi' );

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
