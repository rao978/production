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
define( 'DB_NAME', 'programmer' );

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
define( 'AUTH_KEY',         'S6<)qpFVR&%ew:r3}aK`#ptS{R|6HX-<xo< 8%#W0=(|}1b[Y=G7!/h3{u tQXZE' );
define( 'SECURE_AUTH_KEY',  '0C^qW:wpP9a1@GUCty|p_=,`)+^Ovx`Of2!`4 !t #)Mkv&}0_pJGaMN%.3YQ/Nc' );
define( 'LOGGED_IN_KEY',    '~*}0gsN]+7m]N&T!Q) rA%tKM=oqW@JN||re_ZQ8r!DaU5_@:16sgBx`Yr;3R$mE' );
define( 'NONCE_KEY',        '>A kHBGG{V<}x}t,|4|P}=9>`Psy1I:iDQd@gjYlvYGp#EXR)aOXLPJ8#KY^ZGUx' );
define( 'AUTH_SALT',        'vsL+tM)=jR{?qiIC>Y4a:[=e]I>q)h;ZG2itpkiekss-um#f}{6&CaCgRp47nL D' );
define( 'SECURE_AUTH_SALT', ';#1A,=$7/bh`CwEFy8JhQVumM1XaN-FdApYiwu`*N*Gd]fq(g]O`N742:on/Vb}N' );
define( 'LOGGED_IN_SALT',   'BpNQ7F|<MosHnoTXCySLxTQ`y(eP~Yn4s([UdxKE9^[s~eXv7hr+r4d{d1mY1s:Z' );
define( 'NONCE_SALT',       '7-9}GDRY?%ltl7Ki|y9FT M+{%<1`*]<+H;.,hS<SCI5evkbby|Db4LN0{41H]:r' );

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
