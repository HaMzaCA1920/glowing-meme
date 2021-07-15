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
define( 'DB_NAME', 'wordpresslocal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'L}bNbeoWr,Z5Y^rEIoV,_[{us`wYE(%Lbzc9h;RO4^Y:c-A{e`*_=q>CvE3cMjE-' );
define( 'SECURE_AUTH_KEY',  'S5A!.Yma7BcLAWTam&iCd{o^DahJ#+L)Pvtx2qIbHi#=v$8.Y)n3,-Z9bqHeKPO1' );
define( 'LOGGED_IN_KEY',    ']_JD0I-/YDK-<a/hj8{CSE<]#8N|O@5X[H7|(=8/ gPEn,D~5*cD^_YPD^BwB6MI' );
define( 'NONCE_KEY',        '8Kg<`Y~>&p&@;:ju={[,x7->JdB7v1w%w8t4dC<W^UdF ZqXT1d?2Im-(-42Nx6}' );
define( 'AUTH_SALT',        '7*u4CoBu4}1@t(oC=K3`(gd92nbP! V|M]pb;S~{LYAP)dWY/][*s7l+x ^jL9=n' );
define( 'SECURE_AUTH_SALT', '?6pDaGXacD=E3jv#q4{&}<w?Idv%2*t68Re?+Ghd|2]@s}Us6*eW|05&tXmQAN]:' );
define( 'LOGGED_IN_SALT',   'WP(>))+#USK%b1xIB|3VP*r&ZJ|kc!c7G<P*i@ILtjya(Sc~xnD6(O:=zFNEy=Gj' );
define( 'NONCE_SALT',       ';y_%Em-6+/t*H8kQ3b?;41HA7YK}2R,z=9;<~LGC8nfYg:6fF`+{8S}x)Q-U&TAW' );

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
