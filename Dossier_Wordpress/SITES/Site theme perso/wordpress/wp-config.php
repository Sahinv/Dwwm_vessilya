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
define( 'DB_NAME', 'wordpress_theme_perso' );

/** MySQL database username */
define( 'DB_USER', 'vessilya3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vessilya3' );

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
define( 'AUTH_KEY',         '`1sqpoe+Wlj6Y}hnRl8Bkn:NBg+4@1Z247=TJrZ5V(tcN{v~YfSA>O3,sKM?,/Pk' );
define( 'SECURE_AUTH_KEY',  '=DHIo?51gKs{<^?$Fc%X:WoQ!]ZVai0ksoKX)+`joSd]11n<M:4DFSelaeA20#-[' );
define( 'LOGGED_IN_KEY',    './:HN2SgN1<Y1 vmX2<d*I(73J]$Y5M~zaq[;^Kf`j8_;YuC2iz;n!E}t4WU[n|j' );
define( 'NONCE_KEY',        '{vp$oTx%xvm#.vo~W)_ )vn,Kpc:ifYJjsS^xIIr:`V2%j:mvJERS.tu25ec*t~P' );
define( 'AUTH_SALT',        'A2R5yGjJ_Gt<;aHrX(F *Q.IZgwcKSKXe@_9DAHva3dIZ {C9l.NGV9EosxC|b:z' );
define( 'SECURE_AUTH_SALT', 'q8X4>-v-yv9gQ#;8Kp$SfRwbPe(/rJ_[wkz~:-!tqhE&v*b;_ qLf(h|{-qF;<O*' );
define( 'LOGGED_IN_SALT',   'Qs{g|x^&RLU:+P#A62%.zItU^I:xomc8D1)B/XKyGEKRP0d|9blO,aQW!+$2H$HM' );
define( 'NONCE_SALT',       'R{B>E1-lcZ@g[</*oI8zQcQo:cb%h6yBJ%fNTTuikv:AT,($B-I7# [{>$Al?(,h' );

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
