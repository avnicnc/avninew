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
define( 'DB_NAME', 'filter_demo_new_db' );

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
define( 'AUTH_KEY',         ',qI%HwJT0GL0OUylHub2zymuN{IGk343_3O!RdpBtid=z^gna=!n C@ujRZDRED#' );
define( 'SECURE_AUTH_KEY',  '>r!|>L%EohU DH7YhuLe},8RYm#(0AmS.!R-2&ZfvHRe{Y|`#?Xc5f%v*A1Wlzf:' );
define( 'LOGGED_IN_KEY',    ')jA{`zXeCcelv}tNY&TI:q7o;Pm1@:ndco[r%!@Y>nUjks`<a2y-ElPh-&yY<AZ:' );
define( 'NONCE_KEY',        'e_!<]$neCt;CJ1r){qljM$5i?qoTzqQV2KIv2fZLLLvPTH_g:m:|CMu*UYIcLLi4' );
define( 'AUTH_SALT',        'aiEOH~ F^AdFK@b?,30csRxJ2oRH3*onK3|,Oddn@esRhfNEA*`IC=oU8ze!~upB' );
define( 'SECURE_AUTH_SALT', 'b{m`?Qgafx5o_3)!C=LEXoG$Z_TF,(k!3u1Wt ,&-sP17IO wJ.9O]0ET6+l9X`q' );
define( 'LOGGED_IN_SALT',   ']W]rarG,~u6ZTiW?V)4BMFL{lc|d?fkyJ;vXb;SZ~R#>I:u2BmF4g(|Di)<j2&Ls' );
define( 'NONCE_SALT',       ',=lVx%Sf#(y<<2ROj!H.u8==?Et S3u?(gz>l?*aK0 !pMG0]_rVb;;%3*+q!!>>' );

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
