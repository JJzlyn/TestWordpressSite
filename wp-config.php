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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'G]ujCA,4>|M9FZ*=(@m6|%2RoUPU>Cago9MkPR;T+A:T$h3kY)vk$tR;wh]gS~<{' );
define( 'SECURE_AUTH_KEY',  'nnQ=R`G3IaI?f@Dft{rS.Fu_DaMVa:w_,YdAco2EQ9g.pq IR4f<s!vDa(j77m/i' );
define( 'LOGGED_IN_KEY',    '/)}TP*}2=dMEBkiocU&d*sq*z1nKfi7h~SIksMZ,~D9_^7`BGGKoZv_j&Cj/[#2]' );
define( 'NONCE_KEY',        '3J:AQeY~ck<*<c )ugP>J;S!PhC!f6r=B:!3l[dy3.N!%xW?$wM=OA<;2y=%g#Gq' );
define( 'AUTH_SALT',        'z}/swd7}Lv.Y~cv]JY,0acx@Z}3.)K:*SiEn:UX8>e; -!@0z=Q+qSh`~5%CI,(*' );
define( 'SECURE_AUTH_SALT', 'VW15PyA)!6>y_h-/f$G7Z@*2i*4oEw^}[}PzA &;@d=+rq:I,lExreJG!bM7{.kw' );
define( 'LOGGED_IN_SALT',   '(=Q~&_9=&*E0B4I3%.DfcPSb~y(k}U<|>wT;4^l0<hn5$xKsHMr8yX%bYyU@#CKH' );
define( 'NONCE_SALT',       'ap@UKT@A6g8E8a73B|7VSaD)f))hB4b6,^xm*eMt&m0~4VQT:G74ai7<<rqvye`a' );

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
