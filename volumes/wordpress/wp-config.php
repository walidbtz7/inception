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
 * * Localized language
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
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^mt??FSqE#cfsmcXS1B*TQ*YS(4a+=au}nX(LGr0;0EhqW8L9mMji}*4O>?Ecr&]' );
define( 'SECURE_AUTH_KEY',   '$UM#-2~N~q^.ddFCRkx$%U7/!JUH#bH{^gcKn&Z-6/a`x!#}[Rp]6w)wi>@:t(]]' );
define( 'LOGGED_IN_KEY',     's0{I;0M-}%m>}kAwYCb,t|Fa ju0+;IE*L$Gt15rg?>5(`BrHVy>A`8?cDOY9=$z' );
define( 'NONCE_KEY',         '=ZfL~miCD3+BT5v4<JFs;ggX@X~E|s.4B1)Vtq_K*.zGPS:W`,M.ddNK,{qHsl-c' );
define( 'AUTH_SALT',         'v;E1RxAKF{S8y;I2.39uTMXbIAbknl/R[5@H0eT#~ N8M;13$AKeC=_U+UcaZCD7' );
define( 'SECURE_AUTH_SALT',  'cp}.VRgZp/`M4u:wel%q&Z3qy2mUXW#<C%:6/b-z3yf<9%h<ku[zxdbc%xXVA-:G' );
define( 'LOGGED_IN_SALT',    '|fI}o+}CBU!55=^}JL~L2g&*0JZP7__<tID/(bgk`UO5Ww;)^iP{*5g.yL3^=kA$' );
define( 'NONCE_SALT',        '1{JuurdIh1)#YMuj&@<YrA/E^KeW/x:e&8tpU!9cu{d}9k+9Afkwy=s:^:q^L:I]' );
define( 'WP_CACHE_KEY_SALT', 'Y->@0{~,suX/HZ(@fKx9GJhx6Z$?OxJxMqi8>w](t.1)j3:21f8fV#%@Js;tGI/<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
