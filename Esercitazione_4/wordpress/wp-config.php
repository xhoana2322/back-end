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
define( 'DB_NAME', 'esercitazione_4_wp' );

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
define( 'AUTH_KEY',         'a`,rCYYV@WBy+LcL4kpYWeocWS}7}xekuYg)9@JY5|SQ$[&C$<e7NB`V&ah#E kz' );
define( 'SECURE_AUTH_KEY',  'b1elFCdOj<x82Hv%b2V4@;/:8~{s`~lOBE/g.5FdkUOnJ>D$3@$c%tN]OY5NQDa%' );
define( 'LOGGED_IN_KEY',    'zrPmrpJw@B/R70P<6=BPlc`P!Vq(0VI)|gI*ChT%HuKEZ5e(Fqts KSMV)DDBm9P' );
define( 'NONCE_KEY',        ':WQQ]L5adUU}#UvXq_k8n+N2S%flBJ8%`;a!dA:T9$-tv+pw:D_C@Tc_abQOvyV>' );
define( 'AUTH_SALT',        '&)ZWe+!ggF9Ivz77k.x10/nWqxr$q6` dG:Hi$4@e[0IZ8Mx^E(MUY6cUJ.h5|Qo' );
define( 'SECURE_AUTH_SALT', '`Kok,(h.+>31Xl1!T(6:9It9v]!+q]?D]#&DYd,B<jA|M[qZ~GXhTN+xBW6e)wIm' );
define( 'LOGGED_IN_SALT',   '`w^Hv_6+V8pBw.:SD6|HON[XNu)<ZmoQC.u0aC#4HLH$vesX&q%Lr^3oi6D S%1!' );
define( 'NONCE_SALT',       'i9zEpqSv.)7Y0;Dru~Vl?dON`jjY#+ XgaAhdy!{L/7=`Ey C5+wmV4b~fKGjWaf' );

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
