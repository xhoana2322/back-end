<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'esercitazione_9_wp' );

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
define( 'AUTH_KEY',         'GsD1XMs}>AOOpdb)OIL57BIVm!C-/A(UBb&SE~>g|y],x;v9w]D^LgLe{!ETZBG?' );
define( 'SECURE_AUTH_KEY',  'Qd8BP-u.bQIA!oI-z%X#gY|p+l|9O!#!a,QU.<=`$$(n7,Mk{-M}%53oFaC.~%|r' );
define( 'LOGGED_IN_KEY',    '-L&eg[P})7AnQ`GPOms[z4BlSFgDKl&`Ajr<[5DdfyT*s#A-awX*<f@4 (h!i|T<' );
define( 'NONCE_KEY',        '!E2_dICJm>7G}UoVNZxNPO=`>RgbCU4LlED6`,A2jHQ_cF!)<H{adYT/xv:];]KI' );
define( 'AUTH_SALT',        'b,{xg>qRpc/bYyM)Ag5Ymt Jv|vuFyHsg46ouj|f5]Pd;>f=Vipj]m(uhhejQ?:=' );
define( 'SECURE_AUTH_SALT', 'r;nQ7TciufZf<+NLr$?lug-lvgoCR3tb&b3UmimM/N2;zH-{L7l0r.P<e@Ie~5&9' );
define( 'LOGGED_IN_SALT',   '4{`JTq|Izx}&6[ODq?{m/`]XnYF#?##ZwE14#7{8]A)]z;7dMu{YEE@j$R7[RWl@' );
define( 'NONCE_SALT',       'W-X5)shs4Uf}i+p039mDU(s!U$DI`R(49l%ph^AT0&+c[mZy9pV$luB1iw1dd@V5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
