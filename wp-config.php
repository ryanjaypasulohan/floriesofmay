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
define( 'DB_NAME', 'if0_40316223_floriesofmay' );

/** Database username */
define( 'DB_USER', 'if0_40316223' );

/** Database password */
define( 'DB_PASSWORD', '7110wEqlFkiE' );

/** Database hostname */
define( 'DB_HOST', 'sql308.infinityfree.com' );

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
define( 'AUTH_KEY',         '4wE`d}c6TNp8@Dgu6zSO${Ffhi[S?h5;Q[g[Gp.;P@HhyZ>l-v4e,)-hdxJ (#bU' );
define( 'SECURE_AUTH_KEY',  '6yQZ{ bOJ9 iHA0U#bu1.GwYVL.*-gL>B<-,/D1X(*tX!ODMh2jbFIkVfTxvAG}0' );
define( 'LOGGED_IN_KEY',    '5] k!7f*D9X$v;J2Oo1Q41L8_V5i|YgIop-g6M7?Dl?:5! AZ.Mvheynfw)vpzh&' );
define( 'NONCE_KEY',        'o4Qhfmwc<PKAk:lL=<7yv}QsV2y(d-n3(mpGzP`xvKE+@<Y^rDUCb,U?M<B&Y.4s' );
define( 'AUTH_SALT',        'lus?8EZn*bHZ%gce1l>nC6-4$RKd|1AJ($>4:}I`PYnZQV|. v)l;/$nT0rHi8c?' );
define( 'SECURE_AUTH_SALT', 'z09=r$3)c7#*=S{!>w*5QBFw*I`,~UJo6Z2Y](0~,j_5]MX+2poZd@: 8uSgN{A{' );
define( 'LOGGED_IN_SALT',   'yZsJ(u.,&GO: /`{)!UvCwfE>&fQN*Z@,]y,HQ%Da.{9v9+LF)A+!V!}IErq>gJ2' );
define( 'NONCE_SALT',       ')6QDl$yp4QQOuG#{!F29-Y1ki6UK)UH@u-#mA_mwt;ygR:7BdLc`{LgaSKot@_N/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'floriesofmay_';

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
