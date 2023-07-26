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
define( 'DB_NAME', 'zeeshan' );

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
define( 'AUTH_KEY',         '3SD%.?eQPr?c(G*ZEyilk=%o<f5<EYgE(U0kO]Y8v1?Dy)}rb|d[pR>1y&kfJ,.R' );
define( 'SECURE_AUTH_KEY',  'Ut&VjSK!(!fGAE6x0 E!:BxS_U6C;)_0=8Q!:otB+3$4~yGOuFSLab<CG-c_}ra?' );
define( 'LOGGED_IN_KEY',    'f1hq%!h$Mo9gGW?J+`/>>LG4>%2Y4#NS]_7/$`ZV&1D9P#Sm/S]}sk*lZc:p5=tY' );
define( 'NONCE_KEY',        '[6ky6kOAMyGH7?65Ms|O[k-y=F: ZMJ-,6MX.h9qWXMozCmV%h[L:O ZATU@;4|#' );
define( 'AUTH_SALT',        'bg5o$ny<fFP 2IV2K5}],XCF5bMT[57uCDb8SA^a+@iFD>R&DLtE@8iaK SHk_}c' );
define( 'SECURE_AUTH_SALT', '6XLog){y,:QnLDD[)ia{sM@hv}Oo]`5cMPV.M1VCG+PzB8OQWlY2Cwdm_e|=wfxO' );
define( 'LOGGED_IN_SALT',   '_ZJIrd*K8@XF>EX xenR01:;O,T/]W[ieh7RJ7<TTn[1:D83q65&%O<mMu:GtU#@' );
define( 'NONCE_SALT',       'H|v(P2KpiS/TR-l(zt4p9D:bMQMNR<GIl!%i<e-Rj_7CS:W`Y% 2m-<!FHc9[wtJ' );

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
