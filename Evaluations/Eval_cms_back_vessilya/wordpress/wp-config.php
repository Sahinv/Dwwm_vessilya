<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'eval_back' );

/** MySQL database username */
define( 'DB_USER', 'vessilya8' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vessilya8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-3Jtu^W&a]M2p7Z#C.@::kq%rdyNOnp`_vE-6tRf+i;Kl1V&N0cYI^=^Ns_fdN`[' );
define( 'SECURE_AUTH_KEY',  '*kpU]i&ZWwoF#D$iAf4$Ya%IdKJb>!ndF_=TA6PsC~?;G#w6:31bCe#$ #@eL*|]' );
define( 'LOGGED_IN_KEY',    'T{argJ0|FZ@dJ^i|}MJWeRO.zu!a~z(|ZtkGRm=daY&|![4Tty44/1:v$]2 QFO;' );
define( 'NONCE_KEY',        'g:AhJFlWmGm<7aHy~lgkbny*%u,%D :<Om|ck!D(caq!:cxP~6.Fu5A0lbB^B:Ug' );
define( 'AUTH_SALT',        '?{Rz1mDpbv_Cc]WbctXC~F!AlTz%%V^:o7M/<[1TSz$Sh)-9?.pI{I-iZX/Q ^,%' );
define( 'SECURE_AUTH_SALT', '`mI;g;[B[Vq1@:r5Q$~cLbg{.pO+Jh4=SXN9Bb0fGkSQarJ5l_,VVCY2i(&YnYZ-' );
define( 'LOGGED_IN_SALT',   '$4LBh?M^4Hi$p{]Q03Ql=s-+2?L:FgkFNewpwc(.-Ru!qnF8(tB@<)#/@3T=+K>h' );
define( 'NONCE_SALT',       '@XR;~iXHG]H4 ,6]#A8-;3].G9|y/qDe`$)Y ]/UT&LaUoZ;10$3-]<a5e)X]ByR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
