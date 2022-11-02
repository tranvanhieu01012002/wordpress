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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'W18)&m$[{&=XeaXq/A{W`M?Lo@k1A9mwGtU#%r+Mvadd*l4?&~/WPyOQ>o$U~*46' );
define( 'SECURE_AUTH_KEY',  '-$U]1i]$Ftk3Uj//8_ w-JFw1ePowG,WwZqg52,JR_NLOT]6%JHapo*Fu+2PEyqF' );
define( 'LOGGED_IN_KEY',    'TFEQLrN;s4T]`SYU_JW9T9alMOCV2yl$ fd>GvMAQ3K<KN&cPs;H@@Kk1Vy`Fe+)' );
define( 'NONCE_KEY',        ']bb4h_J,{A.ii=?qpc}ZAB)1RbZa7X,6toK/yX$ef]}oxtIei20>D7%G%/-hp,ns' );
define( 'AUTH_SALT',        'Tr?p 7ue`9EA(+llp^62@{fQNq<Cd]1*L(K~Y;ca%I=iU4ZBnU)9@04){TRn+cQx' );
define( 'SECURE_AUTH_SALT', 'B]uTLp;*UFX[HQtIyj>V{[I,JwQ2RRa^S,H=[8 mD?$cC]!T8W)/0AN]akh5o8nY' );
define( 'LOGGED_IN_SALT',   'ao6p5W#yB+Q8{)3T?>0-[jLksd;cajDSH(K NB]OnUplw|fLf ]o1+Ti$aF6D}u#' );
define( 'NONCE_SALT',       'Oo_|&f%ZCrq1n@P~X4Hp]hoBV4J><a32TkXM%{Me3CLD?eb U&%>wG#q}Z>|]n V' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
