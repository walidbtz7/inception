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
define( 'AUTH_KEY',          'e_.xKH[un~~mfBJpl0k&tyFEmgb;f9h-_A05,m,3%o(P7VNue].]Sx}C8LU+)!L[' );
define( 'SECURE_AUTH_KEY',   'n_wSaYP{,Uhs{_k-O_j|[S?Am~-Koyv:9Li(Kj!jp&MlPQ7]HkxH4L^(yGP$Yd[n' );
define( 'LOGGED_IN_KEY',     '3<EEA~kIG.vlx$X(2|h#Jt=~Met#qSMJWHuFK;YhMo heWExzZ1OY`[::kl^Gl}9' );
define( 'NONCE_KEY',         'D,Flkju(7ymy/mX qJLO>{:2(ia9UoB%XUZo@GN4n1|)idjb.M*v|4O(odjQj;X[' );
define( 'AUTH_SALT',         '8wDBCD,H_sI[]GL1cn60e%CKNt8}SL-;PEyFV%Rm{|S-B?>K;E`qo@;{]>XOyi@}' );
define( 'SECURE_AUTH_SALT',  '44ud,]8ikbNo!N:aBoFeMtJ[47aps.u,/}Mfj>!u2:bUXz3}zwf0+=P_k9]K*3no' );
define( 'LOGGED_IN_SALT',    'qhw/vJYR+ %.!5-~b9gSWJ4bgnCo;`=cd,g(MU+[}DnzDpj$8{~,]SChL$Hr;!B&' );
define( 'NONCE_SALT',        '/gui;Cnc(ng-FjvESLS-oLu?I4%;X`<RH$?dB5?cJ+PY{)kWUg31Rv|eDY7oTTO}' );
define( 'WP_CACHE_KEY_SALT', 'gIT^x5;.A&W5z`{m0o;-/11WngNW6Q{G21qRZT$j)Z}`-i!S`1gZeq2@T@A-:tj}' );


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
