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
define( 'DB_NAME', 'wordpress_aroma' );

/** MySQL database username */
define( 'DB_USER', 'vessilya2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vessilya2' );

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
define( 'AUTH_KEY',         'h$5q|[-8!R?x}Q*DYVcBJF]_gD=u6AL*UN#cFVaC7I7)l9&sA}!u32{fe&2v&ljV' );
define( 'SECURE_AUTH_KEY',  'S=/.y2|2w@``@og:M=7HVD9o?i+EegbA:2vPeogPK-Ck-2bC89i:!&4zqmVA*$,k' );
define( 'LOGGED_IN_KEY',    '@c}UDs{;+-pD94d fCQ?ds,jaz! C5G `6:=_>UG)VZ%,z^6P[YM2Q0HGD$q;/e*' );
define( 'NONCE_KEY',        'b`-8)h-CDF}`7-E/S0$!l^SW(qs~TGhakL/.SJ~G_6^ZpSn=#G_o3sTSq>laOtYU' );
define( 'AUTH_SALT',        '};fxadR{Wp5!sZ5BY$gLLNPVD_=~`s3Jb+N?K=6AB&B(Y(~|I<;bnr@38hyt$AN,' );
define( 'SECURE_AUTH_SALT', 'Qv(a3Ua9$15$!uCqLcMWU-HaHya+svSUh?C962I%#D`F2I,nzlsExw*fz52Fhn,W' );
define( 'LOGGED_IN_SALT',   'i9JU/YX=h~a)|tr&7ELTbmeJu?+W#5$]$/Rhqn[Zl=[/vF|=JI/k4dp`X.E[W:mz' );
define( 'NONCE_SALT',       'U0{Y8A 3jm~Cf-/adX3RvW[62717iU`M}ZKHT|y`L6fjc1B@&Q!X1H]=+O_yWxj(' );

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
