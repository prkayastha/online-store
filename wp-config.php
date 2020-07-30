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
define( 'DB_NAME', 'online_store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '+cO+))*KyVtmG,`eB}8]tpN[%@ [Zfx+QBX<oG cQevGfnfZVL#{S6K!y!|2PV)^' );
define( 'SECURE_AUTH_KEY',  'Lt0!ya(Z)e+^;}9E[m@:b-_|ggqp=~inGXM^nVvS##p+mNHkK(r$@M4wg?s^Me :' );
define( 'LOGGED_IN_KEY',    'x5Dz)%(o3VgG`Ozq$m>u<,Nt2`MkX>1mH5l6FR@+&ErVX0Yk|o5TV$N;BrJvDFY-' );
define( 'NONCE_KEY',        'kG`:6axG]-pd|4p$; i-+|`o!YZ8txmhCOmvuEq}@q6Cwxu lgo[;iRmC~G2`HHA' );
define( 'AUTH_SALT',        'P}e!Q<S}7Qp/m[ofDeYZ}L`t=yd&T^|IKUa%u%zmqr(e4j~&?Yb(6j*k`RXNl6R]' );
define( 'SECURE_AUTH_SALT', 'E()XK4*/HwqW^4;y@}z<3){Xw-]DmI(M8YoF!=A<;VVg^D&x/5H&q?C@fE1)Vsl4' );
define( 'LOGGED_IN_SALT',   'msSY?{HQIS8Gyg`;b%k0dbIfK*M*O8NWwSMu1lZt0Kf~H&Fi(+gv&-^u=+=d`C6u' );
define( 'NONCE_SALT',       '67BDI`2t8JRhfJQ]B/I4Y]VE,3*>/pSX0P|`HaV&&R(|$ )z_m8j7A!ylLw^wcKj' );

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
