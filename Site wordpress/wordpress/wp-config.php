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
define( 'DB_NAME', 'site_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'vessilya1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vessilya1' );

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
define( 'AUTH_KEY',         't|7|I~:t.6C/ck^Q;/0vV)|cL[akZQ@BeVKo}9R=>zD4Ssj0K%{nw}tv61QQ!%BG' );
define( 'SECURE_AUTH_KEY',  '/1`*Fu:.1[rsHm,`&4-9hwA6;[@U!NasSy^eBjT+p^a!,Fnjc;Y.b-Ibff+Xwp9!' );
define( 'LOGGED_IN_KEY',    'y<~_T964JB$QB)fjG3l/bO$%CSxR1QqTtOzV Gxf5LkgeqL.z)`-9vi_n]C5PBa}' );
define( 'NONCE_KEY',        'OPD Nb%BEDXz=`d0zg!A+L}C)6&VIr^bkl^nwpv<3UhH8h*-iXPVVJr HQNM,Rr9' );
define( 'AUTH_SALT',        '[fS6<p_BNvcjyDFe%]EI  @*U_yq2eXD5KRY3,vtJwW7&(s`T@;D>M#%[Jx+B44t' );
define( 'SECURE_AUTH_SALT', 'tv6Qg98>)69rO*wC{J`N>R;Z+Xp,8^ZC>ae::uUnCs=`r/TDl+;/PvL=j/,a( Z;' );
define( 'LOGGED_IN_SALT',   '+JymU^^8V:$r{IGDsj^XvrP( f%D1> l5ZKPMc5 qkf>JiY&2Hf.4#`[wwN]5E]M' );
define( 'NONCE_SALT',       '8$Tc=E,ObBVu2w3Tn3|&n1iwq5{s|Z?N@x8qd9G,T/nOLCvTVrPkj{$###5bF(>7' );

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
