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
define( 'DB_NAME', 'esercitazione_10_wp' );

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
define( 'AUTH_KEY',         '$+?Kt00 Dv=6kRp%(fQ_^TW{(kUCW{&|A%iUsjCYeo,0yYNv(S!qu.Q1%(M.GFyD' );
define( 'SECURE_AUTH_KEY',  'fnQMBe5.~~o_mdTTO|u@DQ%nL $.` DIw{%Tg+dRn[NrS!9@#^nJ1jWL*UH%}?:n' );
define( 'LOGGED_IN_KEY',    '<3x6ky=11r$W{xDH^Q|2?3K/q>Dzr=XKQZOM[!>J1>)c^zr6=jjU{B]oGJchu>7F' );
define( 'NONCE_KEY',        'Bh7+kR~?3&.[S;GyQUB~f.aNAfbp{~E4|3vjPVfZyW#dE<DZw`BDlTlcK/c?<g;T' );
define( 'AUTH_SALT',        '~QXe=iqc0V+]R?}7#+XK{I)%;`Zq_wQe f?3)<!*lsgVbKk!DpJzXJe9;F75MIyj' );
define( 'SECURE_AUTH_SALT', '01@gysGBNA7#ik]8jPX*axXASQj;keh4Ko:%x)[pb_;~aTH+pT-x82c@G}5l!9#|' );
define( 'LOGGED_IN_SALT',   '+GHi`!A%R?z.X j:=(tWK@d!k6D0^WY<eN,0i4nRUTOqZL2VY6hXjIQ3h-=Lyj+8' );
define( 'NONCE_SALT',       'Nrh66|FyPxlJf1H$9D0qSaNLU>&zd7r>Q?4T~R:OIG,..Vm~<x7D<^lO<VSD[.3+' );

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
