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
define( 'DB_NAME', 'esercitazione_6_wp' );

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
define( 'AUTH_KEY',         'wCjDP,v}5u#bGv$iHj)-Uvj~VS6il-9vyN#PAjfV;k pj<3f3 ~(2[VjRpRdmhK,' );
define( 'SECURE_AUTH_KEY',  'Uw$xaXUUv?!KaoaRv^wH+VuIdXYZDCyemv&-x7z`HrS,RN*z;8|4mv8@mw2eRdU/' );
define( 'LOGGED_IN_KEY',    'ijOI/d.?QZ*8K?%70cS8szwacPtA[LRyUe9[$fA1p|esF$[w6(uibadN7!yLfe89' );
define( 'NONCE_KEY',        '#Ds|@$DO,L2rU?HF:[^A|z^]pEL08]pep Y5XrRLicIa^c$7eW<98mR!s1Sa<Ij1' );
define( 'AUTH_SALT',        'aPkx9r@i*fXP1&6hPC*x_PnzE0g7c/7ez^ vw@93=6dDQviL,rG?PL/xE/;4oFAt' );
define( 'SECURE_AUTH_SALT', ']e)K0^9k_Vh{E[@N?i%s5A+fCOt~8,G![LLxmyeytJKlp0aTna{2j9IK$;6n2U`0' );
define( 'LOGGED_IN_SALT',   'Itt>&QR$u!dR_oQ4Tbn(L$p+(]]#/Qmu:[ch1HSL0i>t&`}=f:Z; :kb7zF:%E6F' );
define( 'NONCE_SALT',       '<7|Tp?-V3Cr]QZU?fU`UARw`T(Qd@;h2~|&Y(?|+?7h{Y{#u$AS`CYG2cuyU}pt8' );

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
