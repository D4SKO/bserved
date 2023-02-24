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
define( 'DB_NAME', 'bserved' );

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
define( 'AUTH_KEY',         'rw;4a#qFxwEH*B?pNx=<TATblK(75NMH0KAL?2=n<c<0V`,<l*T(F_I8E]YN7M<x' );
define( 'SECURE_AUTH_KEY',  '!h)[[>Bh9MNApH<rQjn`Y{R@s!Lqp30P)9-xEo(BX>^mXkwS1lWO*59>,A~sV{:#' );
define( 'LOGGED_IN_KEY',    '=LsqChFvC&v%Lmx3.YrhC#XK#}U.>qa;g* H5Y!2a:HI&dFTh;`Din #.!tyNdfX' );
define( 'NONCE_KEY',        'C9^B7m-KY[_XQ|uc-RjE*8sRL,oh|z|Mo +*K|1Y].x_f7z&# Sr,HD>3c$9A<,&' );
define( 'AUTH_SALT',        'fj1KSPm^s:c5R9kRm~N2~DA&Zljle-cSuY<E0h)OXOGYE!(C3QhfKmiP=vqq>zF^' );
define( 'SECURE_AUTH_SALT', ']6Yw^`Qiw|zlb|]o({E3DDtyl.N>&&eB!J>$L 6(qFTR?Oyf;qB@1S,c8@I9o{Po' );
define( 'LOGGED_IN_SALT',   '<KP&1I2%nBe^]#a*614dwDj@&i`=7v?[8Akt)jCR;U~fJ#V|]q zaE%YsGu6brhc' );
define( 'NONCE_SALT',       'z7W EwXLbz9Hz.Bn/x;*J#TK~vH,kB58v*6LCK&Q=]zQh-CZv, NB({c,D$&U^)4' );

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
