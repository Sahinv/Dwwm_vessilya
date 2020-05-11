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
define( 'DB_NAME', 'plug-in' );

/** MySQL database username */
define( 'DB_USER', 'vessilya6' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vessilya6' );

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
define( 'AUTH_KEY',         'Hvg% di&P?`?9mT;h=@xE?wOiAhff2&$4{=U]dU88rabR-0eCJTl&p&nYshnYtH*' );
define( 'SECURE_AUTH_KEY',  '86hMp=nq8O,E_31d2`qjJ3hOn^sES%{9N1MvZL5ttw88>HvhD-w#!=Yx`H_0&/?Y' );
define( 'LOGGED_IN_KEY',    'x9H9`^Z4g#h$.z]H%(Hhk?C$XJ,Q+PK<,li$@6)|e^ HFx%Tefok|U,Y{leV E<6' );
define( 'NONCE_KEY',        'K zfz%>$Y-Cy3}Ct8{$YD9 aVLb^|]v04WwAD%4ah9kH=VPs%3Pm43YV].<g0%F1' );
define( 'AUTH_SALT',        '41<9|?l7Jhzy;n&3&10.<8fR@r*ILYvQ-6hK1c4+~D&^i}1T({7DtsJdMf%A>y{c' );
define( 'SECURE_AUTH_SALT', '#s$3>>>9?9~HEiGj/!Kp8`Cc`uOitRqWHp4;zHx]qd+T;uWA?3>[8Rg@92R5E<hP' );
define( 'LOGGED_IN_SALT',   '5Xq$eIVhk:Ba#$N%W E_MHLlr?68Wt?*4>O?bI4rOg[v@d5urc&l]>zE86f@i)sj' );
define( 'NONCE_SALT',       ':v&dQ+._/={nY7#Sw?e%744P({pXuO-Z.>s(<9U,LMmd{[k^2>f9TC2ou:ik#F%>' );

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
