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
define( 'AUTH_KEY',          '6>6V.ADX!QI&d--zV`!ds<F6uU5_h.!aLgbR6<3|<6TiZ=f<IFMqFmVoK^G:[?C^' );
define( 'SECURE_AUTH_KEY',   '=f)YyPRl*/ %92RNS^4B{$w9:pVmlp)mxuX2:7_ButNv18sTsC#]n$z;]M#^+UWI' );
define( 'LOGGED_IN_KEY',     'v!2lyGRzV2f=_XvP1R_YiT+4,NPB22;]>~/D/6+OAq;/Z|fWlipC,T$fg}F O)=B' );
define( 'NONCE_KEY',         'ST$#pFo>di7dkxK>TXTah5;j.yk_U*6x+E-lB;gU@sL^FNAb%PGI (y094aM#{xC' );
define( 'AUTH_SALT',         '[R&pHN*e83(Cp<ax>VSsj:u0gTvJ09yI~.rwJt-a@c8mu/~&I@QjXcLXNM-<kV0`' );
define( 'SECURE_AUTH_SALT',  'U{)mw9%#z`ew^Ds@?tl#L;t=n-z[>h%@dFLv`:u#CgvvwDg;CRc`*:qx~Ezm~,N?' );
define( 'LOGGED_IN_SALT',    'E<j=2d7aj/8;q]#QZk{NMe?Xnc `bs.Q<NH*UOW3LX!)?A2LI=#Xqv5TZH&!rt^ ' );
define( 'NONCE_SALT',        '.4TBDvInN81},evyPaGE%h9:3JuEDeuc&zLV)ZvbUx|,UA1r$Qmq&#XSUZB8vX4j' );
define( 'WP_CACHE_KEY_SALT', 'n9Q+$!,%FKkj&a`0r(fDr=Si~7,fNNN5Igr)kMHuTwc>t6nm,aair.MT4P;G`*/{' );


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
