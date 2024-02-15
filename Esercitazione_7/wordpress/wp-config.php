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
define( 'DB_NAME', 'esercitazione_7_wp' );

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
define( 'AUTH_KEY',         'RE~%adlfqD&@h|YHm1p{W>/Ko<-kK{ c?SW+hL73e>u!QeU7Bdc[jJ$j6E^TlmA2' );
define( 'SECURE_AUTH_KEY',  'HW~IHpvTMtl=;437_tqrtD;HH:2rVQ+}*&mLy}|r#Ukg//5HS+jYq-4wjS#US[sv' );
define( 'LOGGED_IN_KEY',    'pN&N+|Svf/pYARaF>BYfyKeK(3v0@sTl[s~#5$c~.9Tk:./B1|Z(R7s4JIe[PjAV' );
define( 'NONCE_KEY',        't29Z^u>]GTEkZlsj%N6=X_ywl-KDAD=eHvSpb#Wp]47Sr|]j |nf_VaiKfOoXx`o' );
define( 'AUTH_SALT',        'w~CGePk$xjy~L}%{3%f,8Tsb*6:[;S5${&puPaOo]v3F 605X)sP&)bHX&%{-3nM' );
define( 'SECURE_AUTH_SALT', 'U`FphKMvvVHoR&!S-5UQO%o)-gd3;wVO,9hap(T<K>a0KKmU&p,>c4gg-(pe5%vZ' );
define( 'LOGGED_IN_SALT',   '?4R:h+ +)[@a5K<v~L&lL7%~C>^T;9]<O:3f+I1)?O|`cTD2iK;6SH0g`ei@U{CT' );
define( 'NONCE_SALT',       '- 6Gr7L=n3B0Jr<8.<tKw^Qi~.2910Y=vW&$8X*6(9U)FBL!y#t5xF;K>Pd,wp+|' );

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
