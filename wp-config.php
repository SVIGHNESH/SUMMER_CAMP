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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '$-~2^$m@|e#CpO4NzAU<Ru2@9>#`OB,c/C1.dr!C,,^z+W;.d%C4nGp`#_qta>*a' );
define( 'SECURE_AUTH_KEY',  ',r@[yUh57e(KuCh#Z1MKwWPd/c&EGZZ$q[<|`M|G:!UH%h{m3pR_Yyk,JykM0NNx' );
define( 'LOGGED_IN_KEY',    'fVk@5~r*?h-N {B4@nQ),V!<?!{H5`n-B1*d<5/y@d.@$bUV`Ol^z0Nb7d0<=JJ2' );
define( 'NONCE_KEY',        '%#8WqbQf&0&TEp@40gLcQ&7$1 ;K~tKHzri;./zTh}:!!sxS!DsZ8<Itk@cgUwOE' );
define( 'AUTH_SALT',        '<o=<aVa^a3Z)o/qyq$d tTI:c=KIK,=!rc;yN<oZU> 7VU(~T{xfi&f6Hb!O)34|' );
define( 'SECURE_AUTH_SALT', '/__5$3]wf}yqD&U#)h$YB$G?k8*sONS_4p5|G3s[8wu<%Xc,*o8Uk*S2,?!a.]DX' );
define( 'LOGGED_IN_SALT',   '<(tE<w}%I_8UtIq[k_CP6<Et3gVZqIEV[kCit}qyuv%|K;iN%-PoSb#R)T<d9_9D' );
define( 'NONCE_SALT',       'J![N+~vsg3gQ`cc0.Y<lvQ)l7})-TbbWi!1FY|_K18YSyI{k4u^HOaWM3v&mW:7c' );

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
