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
define( 'DB_NAME', "ezelenu6_gelmwp" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'IA/IuH7EEF4hap?,wJfOgf*?1XOpxF0&u{@_K/M@dI`$-WXxP01r.vo;#Zd.np*>' );
define( 'SECURE_AUTH_KEY',  '<6G`*Q1oWCS~%(_l!^(ar!,  me%& |rd8-A5XTbqy`Ya[@pR.TQ5c|(emNv@ t3' );
define( 'LOGGED_IN_KEY',    's^F-dYDkwg#N>^OfSu6DEln_kck)+@c!ON60;/Tu`EyU[d4#i `Bb2+UFM|O*8;l' );
define( 'NONCE_KEY',        'dgND&Ct1M~u~<%SZZO~=G7dmf`2MaPtoq4e$j).0a_i9(<XeA#B>oKMF+D3cZ@>N' );
define( 'AUTH_SALT',        '++sWFD#Z`*X7,6Of&A@$dG&HN 3bSmiXI4bN}f[aer$e{<CPx]Kls<!a6g.8/p%/' );
define( 'SECURE_AUTH_SALT', '>5s*ODV5)aGHWlVswGpXJ(Y=-hyVbY--V#zI!W|tC;3hpK&}||UknggW8k;=<:f>' );
define( 'LOGGED_IN_SALT',   'lVtlEy.NvE^V3^[;&_*DxSkL^QHo@fBo+4A55)n+05l+-*T:}OiRzqLrmTs;;vv~' );
define( 'NONCE_SALT',       'gb$py{K4S?e]T~=W2lu{Dqvu|0Z%Bz!?DO~r2S:9O+z6(R/O._c%0V,|M(DH`5Z,' );

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



define( 'WP_SITEURL', 'http://prazyicyd.site/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
