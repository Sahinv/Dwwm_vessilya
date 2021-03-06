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

define( 'DB_NAME', "EvalAlan" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '@fIpmo@F?iNUCw$:~Z;%pko{g{(iDGym_sNxNzitF!uS[KH-= dg3_ ;=/BfK&h!' );

define( 'SECURE_AUTH_KEY',  '-7%J/|!&LA1CXtF)~R?vZp +?!HsJUAI $RrLJe<B=dhW.Ot8iQ)+-$!trZE-*XJ' );

define( 'LOGGED_IN_KEY',    '|80?v`k+jFEs.K@:w-C^[8t<(NDm/ICi,x#3!|CslF~9paxIf]hE=gZ_rR.v8@,b' );

define( 'NONCE_KEY',        'hCu.H3HMpPdN0QAlk1i1_|)RxOma;iL<{@W/=%MpKE_)fsLEQ&6wUa4cb6,Ch3#s' );

define( 'AUTH_SALT',        'sN<n|FL|7mg6jR6QtCh*}4y+tmJhw(wA#GLe&M;X1e=Llcp/AJ#AEL**r^D(-Qy3' );

define( 'SECURE_AUTH_SALT', '*gQV-1vTf*Syaz}s[c+RmMZNWer-]#hFa?%k5Qh`8y.RR80{3H*;%_DaRpm:E?H$' );

define( 'LOGGED_IN_SALT',   'J1qRuT%}fZ# y$>D&;I:m c/~%FGMo!mu<t)oC{!pA6{mC3Y=-=):8DE$3;4HNl@' );

define( 'NONCE_SALT',       '0lEF*YO{p|B4-&is0k3L -OawlW(0Uj^lta2Pu>E>+y~2QD.,R$#~_e`QbZr;wNV' );


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

