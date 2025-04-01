<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'y &s0]G>,[T?EGD<yDNL_/Jg*J2GRud$M?RNN4{:rzt]T*(m~L$LUwrdL4i1i16,' );
define( 'SECURE_AUTH_KEY',  'M@p<EWvt8YAq?Xt)bfG,aFT#&{j_JeMe#7u2CxTJP!ksjwTNsWy?ss)QIU7:0k$0' );
define( 'LOGGED_IN_KEY',    '=7X2IV[$`tre u><dfA9HvH9jJSx@Rr7BQa9_6Z!%VIGGg{Ej)AkJ&H=m*nG>+!-' );
define( 'NONCE_KEY',        '@CMhOxDQd(yRp! t!#iqtsDow72n6z$Gxv4!6uBc<HRN9P9/qd;&MtBej`aWp_w$' );
define( 'AUTH_SALT',        'Br5rW^{P WDr5|m3yN`4l5D=z>1R1J7yp9`,X7o:&}g`V_]-/Kg@jh$|%C~%&TC!' );
define( 'SECURE_AUTH_SALT', 'j@pXO.w}(O#4?:^w*[wV*46yIXS%SdmAEUP{0,{h!y5 ~3,YEm9Xsp39XUf2l~*m' );
define( 'LOGGED_IN_SALT',   ':4% oPO!eQ}DGJe9(&B2iR}<an]5`lqZ@vmV11!av>xpiPb7r?CuHqin_RW7|t^s' );
define( 'NONCE_SALT',       'K8doh3sg}]fYgG!#uN)XQmFKS:z<1yITgnD:2 Q<BM#{:a:Mc(X/Sk7;a)Hy<7$F' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
