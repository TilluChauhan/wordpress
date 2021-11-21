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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'extra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<#gWT1X>e[E!4-!:CIS7o 2LUNvMR4zD+pni{7<mY9P%k`;.J_TJu@>=0@6>B=&/' );
define( 'SECURE_AUTH_KEY',  'y;VdppC?2.9O:z;Fu1+@9} *26`MtSpcEW3J19N5`u_+IFE:9*N0Gku)LPS-9b@9' );
define( 'LOGGED_IN_KEY',    'GF#~y9O-,3;&915!9wd2PYhN07#d!7DFqc}VHlKw<DtVt?@Lg*EU&X0t]y=CM,$q' );
define( 'NONCE_KEY',        ':[bz!rDmA>Q}j9# xvjP-j4JbJT&k-{q#;u~!Dcq}$5WU#1O!bYc3[_(xy#D5.JO' );
define( 'AUTH_SALT',        '3V[j=Jl?OfW=p*fZ,Q,q>pj05|e=[_33dSaW?/Puh9!,BN_q|H6eLJul*A^MUGsF' );
define( 'SECURE_AUTH_SALT', '0@0<Nm%q*d9D<k>J[rQluQ_&]msP06#[[St4>CE~h{VDh`~jc#}P`^u9kPS%w)*r' );
define( 'LOGGED_IN_SALT',   'YO!50@K*FU0(KO&uA-0H~X%14)1|u$q:Q^FZS=YjL=J@o]ImUN^a.w[*&YxXuw4L' );
define( 'NONCE_SALT',       'nL/ScDz=c0I<&d[xRr+EilzY;_O:7?0[yNwG0#Y*}F}?L]oo~aE|8vLMQpeZ0mVj' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
