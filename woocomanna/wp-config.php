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
define( 'DB_NAME', 'db_anna' );

/** MySQL database username */
define( 'DB_USER', 'annapal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'heya' );

/** MySQL hostname */
define( 'DB_HOST', 'woocomanna.local' );

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
define( 'AUTH_KEY',         'got[,fX4oMlm:K#)RGnY1s^n3?:%J$s&E]a>=?#tx7sDjQC?SP99,IiHqZ+M!:tL' );
define( 'SECURE_AUTH_KEY',  'y9sAkPHZWtP_x5ZHOqyx8nG$2tpmBy(=Iaq.72]b}z)5~wrHzt:9Y0V&-O%2D,xW' );
define( 'LOGGED_IN_KEY',    'SVMvo*#fW~gSZvkEXAfN/RU$ )CYX7MYMFItq#jr`hA8>HQb?TK3p5~o/ ;df@O>' );
define( 'NONCE_KEY',        ' +tzQ_IMaKlnmruomWZ9tgJde_w9m5F$ARi)3+,-shEEkn>I)M G(9k-4lY5G~rb' );
define( 'AUTH_SALT',        'jAUqsn.!c>i&.W8vaaOsF}`M_nU!7?Nw d;lum6s:jdyNnME|0}]@oun:n6l2~xx' );
define( 'SECURE_AUTH_SALT', 'PWo<3H$h~Z10,;KI(= _.#?BD&g}a#sn?NnHX4d3F9n/W_;REw:2l@ oX&EUFY@L' );
define( 'LOGGED_IN_SALT',   'AYR/Vc`_r19xm53h uP3{.eKCKRp5.ughslr}>u2. l#[!lNEw/bXxxi$@_+GWkk' );
define( 'NONCE_SALT',       '._r{0]w@U n}62TjkA?AX*Eccf!=OKj |BZmy;Uei>i6FP2pheZ,Eoon]gqd>8E=' );

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
