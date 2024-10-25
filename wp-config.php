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
define( 'DB_NAME', 'wordpresspractice' );

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
define( 'AUTH_KEY',         'HsOU AJ8Wc12`1=dw$_m+$r{kX1-x,;k.2S_bVo%PA`^yf=IU]_h{FU`oNoF]#fN' );
define( 'SECURE_AUTH_KEY',  '@2:[Q7QyqVE+XLB3jr%B>??0G M1d(ud5TY:-T>U(Z.(]&l=xth3t[uyT69j?N{s' );
define( 'LOGGED_IN_KEY',    ';,0/F8$&(OHDY>ZBb3]*k+q8GE3h!c0t6#a~/x[RrOJ2ZCMs<~G~w[7;!Ry=`:Fh' );
define( 'NONCE_KEY',        '2<H,}[5o$16Eux_,Y+FIh9G ~%V*)$!o|=2@TV7}3QWf JSO][TL76g~GDQFfN?Y' );
define( 'AUTH_SALT',        'JaA5Zah^y|dNB4?ABl?,91v_eBVNHT;XRNlQOQs>y VCg3<Z60eoIxMHoISP_3F/' );
define( 'SECURE_AUTH_SALT', '3&(26W*/l?E0|Q?6eXfig/XQdGE-ZP}NMKxGyP5VqQN) {fkc(yPy4tM}w#i@*;H' );
define( 'LOGGED_IN_SALT',   ',YF>Oc$4t$o#1@V:_l}?>_n~0Z3L-?iOn|P:1W*5IdH%[%<+R7A~38s?_yGC#>5M' );
define( 'NONCE_SALT',       'aGznJf3k_FlkWPPxA/3L4=_$yMf3>CgSERf51Tp5aa}O._rAYay<_YH@X&l^hR|3' );

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
