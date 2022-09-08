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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '+9 GNpK3c$l#b*NuZ|Lhs}7~?}~@iB-rC8a>j1,0OA?r1EUet!oB?s7B4&05dLZ^' );
define( 'SECURE_AUTH_KEY',  ')<F);,6%~1IF(#$bcH7hLNun0H/l%]y4==b`|_P]!]9X=)v;W@Rq$YV1FF@pnITl' );
define( 'LOGGED_IN_KEY',    '[+2^v:*;dD6F-Am:]Qo3j3vLB)n=J[w3h,1Y*`eP:{s2HkY59,p/UN#io5:8Mzn.' );
define( 'NONCE_KEY',        'lmBa,k8ZU6.z6.$sLYkGgN72fu|.oq0}p.:=?n8iAiyhSS{[S6Ml9nL@3epuFV2[' );
define( 'AUTH_SALT',        'h9P:z#Fi~l0_uI&27u5(^GqsCcz( /O9O(Hp81>gJ`L8$fZ(##71xA8tnTy=e(M,' );
define( 'SECURE_AUTH_SALT', 'a84{Zb?[I7nH.JeEOXV|2G38CGczxAb~6hBY2Yo/LEaRWy<i,OC<4R}i2$k{Zc{K' );
define( 'LOGGED_IN_SALT',   '!iaZ[*),j^t}IJsoC1v+m<.5E%)z^F!Qg La,v*dZ_|ym;`dL?mlUn[5Mty]tL<o' );
define( 'NONCE_SALT',       'oGqg{=Cu{-P@1-o;2HHY =Zf_&kgMP<oR;}Nx|D6~Knu:l4=eB&y$#WK5@9Bg6#R' );

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
