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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'solitech-i-commerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ';oQ;sk<_bee@fMY0j#>MeeqTXl7~yns=V{|p~[(GD#iuM-b(7^f.ige&`x:AG-_-' );
define( 'SECURE_AUTH_KEY',  '`l//Pw=cv:0pbPH-}|9nK?wc!1uK.[iJ*im~U[x2a *~fL4a}p~%[9CwqA7<|Mju' );
define( 'LOGGED_IN_KEY',    'g:|&fpQa_6kNB4h#.5B@wQ_~lggCAfs,l1aJYk+_8?~1oWxuOQ|l]$-=3_[Xq;1d' );
define( 'NONCE_KEY',        '|*b0qF.2=T cuNbk$ZO0Z<JntlUKD(Jpvh)^uS( c tlx$(NBojJh}_j?+V47L@j' );
define( 'AUTH_SALT',        'S]5S%^{GJm(IKpe@_v0O`^)=+a/1GnUP^w%PMn-9 ]/V!0D:u}{r$Gr1[g@+h##{' );
define( 'SECURE_AUTH_SALT', 'wsQ/yF#ZvSFt)D+KMD=&ta#o2wD:v>wkkTFhUE45%,Hm>5pvnFxQ>HE+nXUxw%f~' );
define( 'LOGGED_IN_SALT',   'F)A%^)><8Yq,:2*;qP(J^yPXPIZ_oTwCU3C>O5X@Co=H0XSR&&R!{gW_nqFVA,UC' );
define( 'NONCE_SALT',       'E r*([a|eBgL-?-s|8oh;|;#IDCq=NHN5!{:qIasPT&QpM]g_:K/85+g<f/>fP[@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
