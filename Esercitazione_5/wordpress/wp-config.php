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
define( 'DB_NAME', 'esercitazione_5_wp' );

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
define( 'AUTH_KEY',         '_0.jAWpk9g09]bpQW-MM|]%d-(!@xan7;fTNJ_S(R(EG!D<kxIFc60PH(-a7}f=]' );
define( 'SECURE_AUTH_KEY',  'bwYhXYPtW@3hJ#he,;-9;>lqC!H/:|KCd^R*t-z03/}.+*<Q$X-4`%I(e/NjLcqk' );
define( 'LOGGED_IN_KEY',    '5+UE!vr5hMeG4(I^A>?.?Q5VcA)+<mgNKVkb:l$x}[n.D_8ElDO&hzJ|+hC)P=>A' );
define( 'NONCE_KEY',        'b}`wA~5ajpXVv!OmM>e}p#`h)XON}>rz+B#6l<0RZUEUUFzNcJ*e:Zd#|fR6@V70' );
define( 'AUTH_SALT',        'B5@AJC?-)+X8|NQI+w/uNZ9XfC ?}Q@B*_n?<!cWaKj$,|]KoE<4y;uzy2G62mZ2' );
define( 'SECURE_AUTH_SALT', 'F# Y-kQ8%k!Q{^N1-$&4S+v^21N0]OD8TT_t-eJ%#hPR#X+euVzFR3Qx*fG+;|UF' );
define( 'LOGGED_IN_SALT',   'lKqNqYvOT9`jwMj%KIM{ Nd8A^=[E!NyQmN5?(UftI0(dngZ!sHv+^nj}3ic#Pyi' );
define( 'NONCE_SALT',       'AaBo%SKX@Nd?@<($2uDeuj>-;W&[~U$N;MnK]YV$_D{?N(U7rSFv]9)1vChoraXW' );

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
