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
define( 'AUTH_KEY',          '0A_W_]7%:G}SHBdZ&8e)$6_;RBsu,8p Tv&LKX`dsN9v%h j9nT0&kQHHWh%sJzM' );
define( 'SECURE_AUTH_KEY',   'ST-f[} v!7N0R/YdxOujw~PK&31O$Rz6kEslA>yCK>~CEn[[adFu6B>`SZNj-o.E' );
define( 'LOGGED_IN_KEY',     'J?tt07ieMQN7+skSG^f-R}z?*5.1=0BPAWy-J8z!Y@x0s`*=(-b`RyhpQG~+MV~%' );
define( 'NONCE_KEY',         'H=0a!flI0-EYCidE5#(c8kC7rL9J)4,9s08.Y&Bn!W|&X;hB-ys&,*xhHbOKIg`<' );
define( 'AUTH_SALT',         'Uk9Z5vloF]T>K~w}Y*E43$J)Z2M6<2]@^ovY*^&.4=H5 ${Y.68T905NJ^0vIoM{' );
define( 'SECURE_AUTH_SALT',  'JbLxr^39s.@?W*D*wyP-)ak+pAU5TQtGhkN}y7I%@:o#DR;#(m;Ao1l`)Kb[O9G2' );
define( 'LOGGED_IN_SALT',    'ClQ j_}9ru:B=>$bGWZ!%ru 4)ere3(K7Q nY0T?]V6cx}oI-C@CUzP:G+05Y8We' );
define( 'NONCE_SALT',        'DD1l_g~Ppx:-$U7MS*HId^PvPE7l!-R!ipS3c3;c?Z/(6?PUb?:jk!rJuDEzjh/*' );
define( 'WP_CACHE_KEY_SALT', '=G-D}pYD&-:aOCDHN#b_bERG6>#JJMqm[|K|8:XO$[w.MCz@VR(0xJV`#5ly:V)M' );


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
