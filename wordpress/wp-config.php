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
define( 'DB_NAME', 'erin' );

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
define( 'AUTH_KEY',         'R!SNvDRqU>I<wz6B&#1s5WKmNSyAQ44J/3j-09:=Bq`tNJN6!}-v$e<C;W|?!@!#' );
define( 'SECURE_AUTH_KEY',  '|}j@0+&uK6o3+so3#1;8_zLulI#!8pT?o3y`cU~v?>0YFP=EUx*._`ggN^HcY@$m' );
define( 'LOGGED_IN_KEY',    ']UlP{mU=/Q[y78}gI s}ppXS<3{cX<Jz5?!Z=tvPN3*/>4jZo[:xufJLAuOt+K>Z' );
define( 'NONCE_KEY',        '@~Dk04=ySjrE+W71Zw2q_MThTJmFGUZ9WEW:a[Q ?~}MPq*PB68kpQJI^wF;.:!o' );
define( 'AUTH_SALT',        '}8#IVeHc[m/@Uia,d9u3Grz6Zt_^oZj~`[H&FieT#6]*1Sb2CA~ n4o(5lc?<VIM' );
define( 'SECURE_AUTH_SALT', ';1XD8nbF}L,kI5}o_(%Py`oSM&2b?Tz*UkWJ^Nug8lXFicofn-+q(OxT>;A14j>D' );
define( 'LOGGED_IN_SALT',   '& 3i&{MZ>Jm+n|r0#x!O)~gdIioTow3U,xf{A6toFbh^zp5Y08A5oDgQ9<j0-Xd:' );
define( 'NONCE_SALT',       'E9dz=KUooGo>tQ@5Z#ZXI4OC$ol<T)Uv8~_%!P]-AfH;Kgplu0ZB$4HW;H_ogW<p' );

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
