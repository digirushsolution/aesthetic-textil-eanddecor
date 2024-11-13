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
define( 'DB_NAME', 'karmahome' );

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
define( 'AUTH_KEY',         'jLwBS0I2fGOz8au1t!(E,Mp$P}(|y]?KO S#!MEsm9Rrc[b}6!CY#DvJjHr)LKt-' );
define( 'SECURE_AUTH_KEY',  'KizzF>4/d5{I E7X7=?^_AMDMB,<U>7X62fxP~#X.@8`d|@!K1b1fUHsL`pb `du' );
define( 'LOGGED_IN_KEY',    'YEU*W!~Hap%r~ =9H3`d.9Cd5wvX{t+z}TJ:,XF@,{nl;O8AtwLzD5Z=X2-/$eQo' );
define( 'NONCE_KEY',        '+9uZ~v6Lo>R5-)G1t^/C#@WkM(%}4m(&d|qmd`]O*B X:gznUCAO2]T=D-86ER#%' );
define( 'AUTH_SALT',        ')m8vWaSV>LfWgBcIF*GQCaZ<Zm;=|xSk?zv3b{V-:ovM2ah`BMf_Peq,VL2pxLG^' );
define( 'SECURE_AUTH_SALT', 'K2+HLdw{u~OoCm+REO4D`*:mj<H;]bJwDMhLeOdypd,_DoZOH^ZBe3[R(b9{+RL/' );
define( 'LOGGED_IN_SALT',   '/|MJP;P[*f.3KC4-#wAt>!Uuk~6#~ CM(r*7[J<*<+i8y.*5g):+U6sSZ&|/[ hW' );
define( 'NONCE_SALT',       '1b<n)y__g5;l;BiA-Zn~s+E?xHkma<+k&~$Pq6HIW_F1LF?Qa!9x+|YD)^U:{a)k' );

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
