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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'b#nX~t mMb@!na;HQQCyO3/98%E7a?vQm09.hEAWiR!V8K:iCLB}*YRF~iB,zh!K' );
define( 'SECURE_AUTH_KEY',  'ocXkQ=;d#T>2.Ds8RDNoI[1?z&0LTc6=z8$;1B}r {?0lmBX#BLc:s-j)e]9=zoj' );
define( 'LOGGED_IN_KEY',    'jU(J{g^SSB`Eix%nl=gm!dpQ{T<(/1t><a%w2X(=k4S=q^S~(0>>h3O<JyAjV4QH' );
define( 'NONCE_KEY',        '}aO7w>5G782YrIpM%lb!Z5tYqCn)^O$Uzl!3 V1B|e)_LAy@m:0@<i|XY1E5aj.e' );
define( 'AUTH_SALT',        '5(EiVi&7o3?~|08XaywPx+eZMp%oC>+3gic~}Rs%Ct?RAvct}&,kOuTJch)^+)ld' );
define( 'SECURE_AUTH_SALT', 'vO#!!O~t(Sf*43N<tQ4,[xiG{[`5W<y?pek7=!TZI,K)pBLJQ3R{/+!T:_z{w+aS' );
define( 'LOGGED_IN_SALT',   '^7S?pKkQ:9F)S.1mKF^v0e_DJNk2 6X>gv4/ l,O*d*1<z,,lqHE&HVXeH>8pc0#' );
define( 'NONCE_SALT',       ';P+EKojM./]0#/Vg3(m7tvuIp~v^PjD2Ij{GYlh!bnUVuKHu*nFIG@1;auweJ<NQ' );

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
