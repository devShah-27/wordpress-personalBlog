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
define( 'DB_NAME', 'personalBlog' );

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
define( 'AUTH_KEY',         'Qg>%;)ul}I=.xE>_$},}Jb&==hj`,#5@Ng4<n/um&k:yJEjV7ou2AGy ZH>nw$3 ' );
define( 'SECURE_AUTH_KEY',  'q2G):|Lf|?HS_zap(!GZ(DW4Hn?qAp/pB%4}kyy/An~ZsXFiQ?4OYG6Z!:r3|BC4' );
define( 'LOGGED_IN_KEY',    '2<tbmEfAbK?TN@*b|{Wed!e[Ke0I|KL#4]{@DaF1EG,/evk;]-_Nz.%g$,&gO,I,' );
define( 'NONCE_KEY',        'Y.S90}#?$v0nATCyYGUiBUy~hJ-Cc[SECHmw1EJawKQ@U1,>QpX62t Q!Z[E_ ;<' );
define( 'AUTH_SALT',        '$X.9n)_Hc]lESj6FQxygvQ}I-DS5=++nN4KKp&{7e9f`Q}-]fLH)-(DB&`oID#P6' );
define( 'SECURE_AUTH_SALT', 'd3Ltk.xxJ6?,b_vL^i2EQ(`%Eo j@D-.6JP,ltznq-49&zfG.5JOE^.H&$eQh=#i' );
define( 'LOGGED_IN_SALT',   'm:jX6B?_iy<,qBN BKe+J}>5Gm/(Q7kOW=S~7X)iusT7TOm2E>D:{@ z~7J]iWAQ' );
define( 'NONCE_SALT',       'vcjxAvZ@_t~n#Spa.o)V]^PZvK6wIxqAyXqE(8%.l1(v9h2lk5$y0im(g#q!%wl3' );

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
