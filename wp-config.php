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
define( 'DB_NAME', 'db_duediligence' );

/** MySQL database username */
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T[[[8eQY^~(Vl3<bFio6e71izjG1}WXk)2Kb@M,[F6h!NKo26(vy4p)SGslM;+nr' );
define( 'SECURE_AUTH_KEY',  'u4~lS![!gaG]ciol]U+q=YS!bm]A]mYl 1Q0__|EdsWuz*Qlp{N?<,%j{{+yJ*k$' );
define( 'LOGGED_IN_KEY',    '{n52^97r;UgUI<8ot@VO#O1,+E@zlN0tfn9RAe=nID|*jsA?MVP]ZU>!lx@]Z3dv' );
define( 'NONCE_KEY',        '^8ShLSsD.LS^ Bo9t~OAO`{CTZZ#~-g!Ox<)qzVV>-!!<x]b@)Y^,exP8`]YKoHW' );
define( 'AUTH_SALT',        'yG+.o:zFG$dMk>&z<|*YEuGc2#UqW`XEjk$4F0$Q$4_]W.5unfmvv,)*W{~YlA/M' );
define( 'SECURE_AUTH_SALT', '%>EuimHQ&mS#bu/Y86c(QOI[A6CNAH&bgyFI75GbWT*MC&fX.77P]]fB@1)dKwT(' );
define( 'LOGGED_IN_SALT',   'Omi.5AxglMF*GGBwa32t6.o%!bG13 +63do[n)J=(4`|l=bd3*He:%DKc0Tm[B<*' );
define( 'NONCE_SALT',       '`1s#xyY*|JM<@eRG-0%QcZsY4LjFo9Lzj7.0*! ,Effrs/,hAVpbQI89&.H;P`tk' );

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
