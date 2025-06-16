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
define( 'DB_NAME', 'wprueba' );

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
define( 'AUTH_KEY',         ';Ai/LG2E(xk],aanyF.%cZ4qxToj6j.Rr|0Z-jX0QtJ(=dEuvA:=}}VlJsTnZjiY' );
define( 'SECURE_AUTH_KEY',  'fF*_wN)~UIHwU>AO+u;5pWKH67:v.5Afb=GeaZOg_Ag& =@%F AYTl:n)s1xg+?[' );
define( 'LOGGED_IN_KEY',    '6JIFSie7,V3j9#bd(*YU<8/evbLa34!8!I#R{r=SDJLF2ffL%JAi~]Z%*A`GM]Ui' );
define( 'NONCE_KEY',        'RV$F%HCTwA#itP}6 GK,H}o%NdO!.y>vF`uW(8C{vqg]<$al^>n)bTE4XwPV}ti!' );
define( 'AUTH_SALT',        'Lm5m6+S]TTFS2J/4^dWB6 (0`/kp;k8-exgC$?INEyk*tXI8CRLb-vS{l5huqKZq' );
define( 'SECURE_AUTH_SALT', 'F2;W{ing%e.[m9CLaI2qE#$Y6(>0Nl,EsT-!;PJGAFq/Xb;5rh?-Vuq#)x:B/{@S' );
define( 'LOGGED_IN_SALT',   '|xn|^/I~MyD;H:xuPpJfe=fw8G*N6` ro=90,RAQAFt`28yJt._8P@;#NVZSJ7+m' );
define( 'NONCE_SALT',       'dZxY*XPF&a K~-)$h[f 3*-1aG9:fE$O+e?HOAnakA%wJwO[Ezg9d6o]1$$B8]hg' );

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
