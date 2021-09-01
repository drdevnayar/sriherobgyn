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
define( 'DB_NAME', 'sriherobgyn_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'YEHstRSQdiQWiA76{/pC(|NJwT .U*=ljS Q*`/o/JV7&F#](HkS@D;-Y!JRkZ19' );
define( 'SECURE_AUTH_KEY',  'Pw5IYf2crL5PxB:KF[}u*,vwJ1Kz.OLu/9k;hLfr@FsYb2nv]Hi2`0)0K>/ZX-G#' );
define( 'LOGGED_IN_KEY',    'do7{tZ$mntcZf|Hu/Qf>Jy-$hN.7FKTD^(|D|(#L$l2awkn*~{XH?ihAx(}x&BB*' );
define( 'NONCE_KEY',        'w3K@E4<h+M$Z9KqsN)kK5e0h>!r&p]qQ^Ipz,-tQWxFv7+{)/TVL(FG`Y(a<Lw$>' );
define( 'AUTH_SALT',        'sXy!%@dK_c4F75j~^;5bn5Bp9oHL?v@8Uf;_I6:Ff/29pn$++T?-N yF0R0K_4tL' );
define( 'SECURE_AUTH_SALT', 'd*K;O^oM1`<{cH$]v`mj; j*(dV7lh>6Jb%_p7Sws]Tktsv@-R1Ic[P[=e3.6a?L' );
define( 'LOGGED_IN_SALT',   '$H*XX7_W=-gIodptX]?auAH!M0K:s>,x<(m%1AycPgBWymqXqQZkQk}b@tLVU)8:' );
define( 'NONCE_SALT',       'cGf`5,bFP~Y[U!3z()N#i]YfO{8+2-OBOQVtTDK|!f9S6p5/hQ]wq6rdFNCUim%#' );

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
