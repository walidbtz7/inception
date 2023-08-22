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
define( 'DB_PASSWORD', 'AnotherSecretPass' );

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
define( 'AUTH_KEY',          'y#k?#hBG8E,%>.C-Un;j~46ZyDO$T=g%(I:ay0!(7w8waJhGSBA,U>~Vh$k5gR`^' );
define( 'SECURE_AUTH_KEY',   'xUAe cp1+!<s;Hq4[X3by3w=F<^*`y:!xD&v7=6rh&=?cF-UyVM~C!z.$d?yL.:@' );
define( 'LOGGED_IN_KEY',     '84CG9lnxlnC?8mg,-ll@8Hwgz$E{GMY;/,5z.[7Bn9@ncH02]+,MB GwRav0!e6R' );
define( 'NONCE_KEY',         'qjv<f:G;Af;n>X9]9N}&vC7^ovo@$r;ms] &R5-Bb}l%3]>:R9m]N@?o`U0v.!Si' );
define( 'AUTH_SALT',         '<*&nBe3z&&%yCMx(vL*R]`D2?g$C=[`KBh^q@>n}4YiZx,oz uCk?Jn5,<t>>oXI' );
define( 'SECURE_AUTH_SALT',  'VQ~sd&9Ldm5c|A-*[$B3}pVv E0Tgb21~$N#!|`1y&WUsy;n~ l.u#>dwQ( 0sFg' );
define( 'LOGGED_IN_SALT',    'cj&mW$CqrR>lRfDk|T-$</wXU3s Gx?ye$wQ]W<2|c<O=%Jw BV?w#7taGy86DH{' );
define( 'NONCE_SALT',        'y$-k93*Sg}FZ-:RF*[p^3R{4<2M|pFmd3/L.9OSU;fZgL-`u18CH:K6;:|(n>0`s' );
define( 'WP_CACHE_KEY_SALT', 'dBQ#DEm_P2QoVAE;GW{>]uieoWJTA2A}kN#}m]T9[oDd+`B<_jXjTl|<1-joJs5~' );


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
