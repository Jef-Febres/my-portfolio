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
define( 'DB_NAME', 'my-portfolio' );

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
define( 'AUTH_KEY',         '5.>{H>o!>j*w7Rf+?+/?q$MM;PVxeOIm=m3}w;$~*d:33R!v^a}dp1?2[}&CLM>g' );
define( 'SECURE_AUTH_KEY',  'V/i}Evh|&fOw{{|_1VrN#]/rAPN$#zRm<L7K4[Ky(Tr_0(Z}OE/olq[9[<n,2UuW' );
define( 'LOGGED_IN_KEY',    '~ h=ED@,R+Ud|ECtG_& .K$Hmo>=2YvjYDo  4: @l:3yBLk Y<lKu0rAq?4z$#$' );
define( 'NONCE_KEY',        'p)e.p*xBIm}z_^VHwfyV8Na*UTtl8B`M1KZ9#*/Q7:Uyirza)~5D[grMY7DF~YO^' );
define( 'AUTH_SALT',        'u({7.k9zo~_Ne&^rKI%>tB7uWykRg7n)k)vg OZ[[9lDQJ`pe~5 A}gPkx8q#RKb' );
define( 'SECURE_AUTH_SALT', 'MHVZVpeZ9[0q@Bv(9PH14w=S*aUU2!ajFmq~r/b7~J!lrHg(JOyH?)9`ogNq+b}_' );
define( 'LOGGED_IN_SALT',   '^~X.hBA0N_&l=>)W,7Rg`oj^*8{9xV^<L,3(Nn`L4n-vrXP./5jR)bNa4P*;k:N>' );
define( 'NONCE_SALT',       'fAOWjF0epe+$NM].!V0#48l?4f*g;{=9UeBzt^v_{y|zb8m.}Qj@4gt[<7W.3wP<' );

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
