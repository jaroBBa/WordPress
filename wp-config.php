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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'CQJsro-_]6BaNx1<]ZeFHh$t:e^Sc]Da}xZj:{-Cb;B,?<JNXpzH@Fa-`vFG BN}' );
define( 'SECURE_AUTH_KEY',  'XqsNTMOQqg[G:w.)[@CN^,!&yyVkG1^gT2jooCK2uK;H9G7WTV.G<AIqR<R]{cAG' );
define( 'LOGGED_IN_KEY',    '=|Qx8&o}$#;c_Te*[e( {Jz;7VK`~/^oB`Onj^}}PN/*,A7S{qPHb@J{nI{d{Srk' );
define( 'NONCE_KEY',        '!+3>4K68r;g,TZ/L:ctM3+d;zeg4B11m$&.*8]`RC4o,y8s[l3Ql_jlIp2p)NRD]' );
define( 'AUTH_SALT',        '>K]@9S-r;Ms_GG*N(d>/wEE3S6u%bze$.BHA|2.ZW>QAFlIdV  !|bScfKsLy6+@' );
define( 'SECURE_AUTH_SALT', 'niBL=9Xe[Lb6lFDh`Va,0Mc!41(W]6%M:>DdpI#l|S?!B);<g3{?xt%v6_!=( N?' );
define( 'LOGGED_IN_SALT',   'NS#4VDh|L@_i>-RVY2(|0B|q!:%%igHFQtF#ZcTG2}Z<qH8x7a_OlE.qyJ d^VlO' );
define( 'NONCE_SALT',       ']f}D2xs:kD9vzoEGi@`b3?RRDz6/<;Tt2,.bO.,5ltD|{i,jhwLC .ldoueh4[*~' );

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
