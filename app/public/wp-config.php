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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Gu>te.<`[uRU~^cu(}L6=/#dD$hD8{J]3u!R{}:`G_4D!hu#X@pIv;oC:)Ee=0sA' );
define( 'SECURE_AUTH_KEY',   'fke<k*I6!DB^KC |X?5K&,2Lj;%]#EYe*Evo25BrVOl<D8y_pXsIxtp&3K5)%.=y' );
define( 'LOGGED_IN_KEY',     'YEY5>Z???BJi6cN}wM%0{P;&dPy={llR)w0er%8,SuBR~`SUZvJ>L#z$LWyzULtr' );
define( 'NONCE_KEY',         'HI5ZP`CvhqH5|@^.q`BW^+,RY]TzMXkiL&1Q^en .WPbc:&OwmLENG3x|<@2Kb@[' );
define( 'AUTH_SALT',         'N,_a)cghWY=kWOKACgf%>5bVHs=+}I2fGUaGsSrK$-+`;zU~Mlv,U Vz0]Q%njz@' );
define( 'SECURE_AUTH_SALT',  'iBHo!OMqbhQ`vUJ6d%4y3dW#/B3Tl3UJ(^Y-KX+4|:`m~PD;BHL_?BIUJt(nVLKk' );
define( 'LOGGED_IN_SALT',    '/o;K-^UgtmA1MP6XZ)s<_g>~glWS.m_Wv(X0>(o+[{B9ZL^O?V7y[2U}eG@5#>2y' );
define( 'NONCE_SALT',        'BD:Y<zcb}7};la{uz!aCR7zZSPVe4#*s{~M6RS&KVf<lLyW]8h|R.&cBn5c>F$u2' );
define( 'WP_CACHE_KEY_SALT', 'IZqY|qQ]Jt1FTQL_#&|;yS8M(!Dp+Y{~@/<AINE{D[WNL;m>N/vLZ#v;OiNmTojt' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
