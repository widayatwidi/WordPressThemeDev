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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_base' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         'oKx~HhJJ~@Mm4CcN C:cJFH^z0FyaRqreQ8{`?aB~=P]UTyp.@vZUkP$`^`*O0=k' );
define( 'SECURE_AUTH_KEY',  'Gh<g~&B 9ccME8^i_eROp:1c-FQ$*eDlK=~IheVbrcw/MM]sBoCwlPJ^oQ>6tvS)' );
define( 'LOGGED_IN_KEY',    'iFV}6P(HYb,SR[E)SMW6;=C4I(9?4DPrf`i51BL(T^*]{z- 8]:R|%%kxm!=~sWB' );
define( 'NONCE_KEY',        'hP`7<{fCXYs$ytN$L@!KB<3s<DF|swyxsFzV-D;-72nZ<M&jf%%!LHT59UsjxWXC' );
define( 'AUTH_SALT',        'E0r%J$z4LDng4oIH*T1&$:VoA`w;3Ci{R92?qjE{oUw1qtgs@vcXkn<tt%c;nY%5' );
define( 'SECURE_AUTH_SALT', 'HhUiJ4~qDnEpv.r>]6%Irhr}EB)&)rJHvu~oSN)3$N0Dh,;QA@XBnK-bOV[_PZx(' );
define( 'LOGGED_IN_SALT',   ';FSO-;g;K?lsU(k)7*>#Jm5;]2]^Q%|PX`D`(N7DGrQk6+;?lpNTt2&E&_Lb;fW,' );
define( 'NONCE_SALT',       '&:&)8bq(uZ6WraL_>R=9KEnA:qrrK*qRaxy=2x#(Nbe55&*Pocxz:HF<^H%T;Jk6' );

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
