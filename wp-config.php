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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'KJ0fpVHx/rTc@Ru4GI-IUP#XHh,K[{6k#rrK,?e?qp5{!C}Y`qGZ@y$aBI.pKB6s' );
define( 'SECURE_AUTH_KEY',  '|R Oq,HJsX%H.QT~|2!h35(;dLczBlb0x7uN^^5Uy8cBhw!9Vi|v|_vg$~)*~1~s' );
define( 'LOGGED_IN_KEY',    '<T!b_-Ezr/|-5{?lU-8kT;j;UJA#?i(51PwcQlJyZ##0e*Ts2p.7]!_4MwBC[386' );
define( 'NONCE_KEY',        'p_kPY]n4GH]gK[jGX3-M,aXKu{O/_276yE-DSqz^qPya/[a]P>o-ORa[8jfH!{E%' );
define( 'AUTH_SALT',        '5m0di,{A}b]>0F9N&><cSn},_[3F;1:y%th~*/@HceUq./s5@+Q8|+`mQIjtqVi+' );
define( 'SECURE_AUTH_SALT', 'X3E]ZWCr/Fd`[Q$^ _vLz?y[#$(T#7FD6zs#5O|,a`O*QD>p0%le$YcA&O|yr%|)' );
define( 'LOGGED_IN_SALT',   'O+wlmy?,5~z0@>sC:Nh~wki<E0[3!R$oVj}}%p=WPGE,m(U0/~f`H]%robA~d1PM' );
define( 'NONCE_SALT',       '+w3ylyEm Ja2d|Aw,)<u35NO-vnZ[~lv2d!wH(7]]@!D1GGg&^H9ENNP1Jqa1cCI' );

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
