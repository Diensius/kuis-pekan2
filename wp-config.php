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
define( 'DB_NAME', 'kuis-pekan2' );

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
define( 'AUTH_KEY',         'I fR2*)HKKuo-b8|>ErUK5@)`MJSy[g55bJ3(hc+vR^3J`_4iW8C>V#|f=N*b&uG' );
define( 'SECURE_AUTH_KEY',  '=<UaFSxB_!epkT&!&vd`9#p djE!(02sQw),_8p|[vCwsAAhB:Me`be[UJ.Ui%8*' );
define( 'LOGGED_IN_KEY',    '-nlv9PZ]qVZ9n2E&lmIwp.GP!3/=cM7N?pBrvff8:T&^6qSqKVedQ>v+54`36!]T' );
define( 'NONCE_KEY',        'WG8`w*=HJJ5b$7Ms*y/?U}3aX)>}RmcTMY,~nr3Bt$U2mg`_7F1,{r>($_Zt~<`9' );
define( 'AUTH_SALT',        '1&K}%;Bo7Gbn_x1G=)N%wy`g+Rpe|W1BpE[2Hn3mLMs2~Q=pJS[xm+uoOVu`rN :' );
define( 'SECURE_AUTH_SALT', 'L;CRs Y[su|7>m5.?x13waWx1-@[Es0kltcUyHjf#?4qeF]TeYI47eM]owi-)rm3' );
define( 'LOGGED_IN_SALT',   'SVfv5&1GiIH_#},#6Qjzc&|oZ- ?B3KT<WC+$$lmGy2t&&?4X1mb.}&*_{1km_I+' );
define( 'NONCE_SALT',       'rKiZ8>a^MH@6If}UyT;33}3qr+#`;^_<XdAJi6 9uaawC}VPD&an*w4?(Nj>3!sE' );

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
