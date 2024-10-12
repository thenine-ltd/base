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
define( 'DB_NAME', 'base' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!L;=$h#F~f,xIi[A4@jgRxIsJu LCWO$K~*wu<NWB~;<yoxqo8dCD-cSUo}Yvt:&' );
define( 'SECURE_AUTH_KEY',  'oa7E!F<I T@w7@O( +D}h@|46X-vvv)z %%2MB]JUv.;-.5K[G9Uf=T[86_g(2)*' );
define( 'LOGGED_IN_KEY',    ']1T^ *U8Cch1viP5S}&IijQ:?RDo*@E{I}&W|n3,xV^9s28tUsF79h:TonvmBfGd' );
define( 'NONCE_KEY',        '|zE F66V?.|aF36FyAu$;4]mLTvKt]6,^}r?g?Hvt{J>S!Y0rXm KXC;xcAQwMv)' );
define( 'AUTH_SALT',        ')+r2k4V!wEuKizkuy?nm=xiR.68jvM$,Cbu2iaEcr~ vthJV S8Bg.1ugU<z7V|G' );
define( 'SECURE_AUTH_SALT', 'cMTJF^7ct7/p:YB0 Kq~YrNy*TpJX0o4eJc<vVN4rk[uiN<vYX/(Q>[_>l>OD/}j' );
define( 'LOGGED_IN_SALT',   'V2J$ik-=^.,q[JbdTj1R7Sp[=ikLpQpO:@=,SNe!epgL{8?lgY<RK3W,Jv#k#n!X' );
define( 'NONCE_SALT',       '$%{e}g+,F~96$U#3[+mqX:a4;Lw56wzTJ(zs=K^k5]CFO|~D8[0-G!O1OJw]0LS:' );

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
