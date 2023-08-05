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
define( 'AUTH_KEY',          '_hh >J5U~/itnRTSL]YR3,%dh~Ds?CH-n9Ny7tt_P:=yxF qo6$6kmCTQ.]M3u-d' );
define( 'SECURE_AUTH_KEY',   'B6{G<)-eId0Z<9482rqYTJ7(s:r#=_FRP`O//y|&(qdSXeV{6UGJ-rWwVQ <=9Ej' );
define( 'LOGGED_IN_KEY',     '$s3M;@;tL%__2qHYn7G!q>Y)@<t UMtc@kcoSyJ_55b%q?:(7Ffm>Najo>iYjv@)' );
define( 'NONCE_KEY',         'p[-7Y:!C+=(Bp6xJq806v3aZ|oQ]$Sz/f._U.*u3OVfh5@(:Ruq66VYA{<z]6,Tb' );
define( 'AUTH_SALT',         'RzN7 2u#r97<PHU@ZN])&FS,,o.2qsvb)dUh(l}LH#DFjx&N~hg{_ib{#QID-A %' );
define( 'SECURE_AUTH_SALT',  'D*jg}U=3_/zNpxV!(UdzWWuA.[Eb~Z{&5D$pU!ID@4o|QX0s$i(mWjKufhlc$wJP' );
define( 'LOGGED_IN_SALT',    'OnGb_Nv9Q2/hUd-%8H$a9Kpf4$~MY6[hRECK7[q9k+KB`4nah|[H!#OQqxwfmwLQ' );
define( 'NONCE_SALT',        'd`5)=J`-m^?7DH0haI$!dCm^NEYH;4c+$J]#]46%$G_pvZSTk0k![xa nQ;/E3fX' );
define( 'WP_CACHE_KEY_SALT', '^Z-PN0r@yMeJCBQx!k4@^=q4QaYrde_xc_abrlG`-O?S~a?ClX]x910osNWm7]I-' );


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
