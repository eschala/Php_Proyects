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
define( 'DB_NAME', 'secure_travel_db' );

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
define( 'AUTH_KEY',         '|O@*=1)/IvW2X>?p%m<M/QWIp~MCor~112(E>eFjJ]uZW[x`wws~7eijHQHGlv0@' );
define( 'SECURE_AUTH_KEY',  'jC&<]f%7$_?Uc.g6|B.s6hyk4j@jWUBo&:e:{j!rv)Gl?6~B30DXH7y<px }51-A' );
define( 'LOGGED_IN_KEY',    'ykTv K|`g2pox7f8K]R7E);xIaA.tz/c_tq9H]1.ezua`$Q>Io(v!=O{e]8?0Uk3' );
define( 'NONCE_KEY',        'zTkRHB`.`d0qa`R3huTmDp_w3;1J,12SH3C-Og+e6WrJ#IMb9[ka[{hRDDX;,[W!' );
define( 'AUTH_SALT',        'V1lR][8TGq7}DbSn}Fi%).q,Sf||Ds8j$6jS(dwLC$TtmL/Ep[w{E%B,=D!5q/3]' );
define( 'SECURE_AUTH_SALT', 'Dn]9^C/9z0&J$K}Y<?h`0d*0+[$MEZH[*1kMbbn5r?6d@U{A+xOAu38yeLmj;P/%' );
define( 'LOGGED_IN_SALT',   'iTb0oK&JX_w4uAccO&&CX%&458I?99}a|rf;>m([q3K~/]$:6<.?{pgotI0(`wky' );
define( 'NONCE_SALT',       '}_S??aY4|tvS@-/%I-DaILx84z?iDg50>1}ZBmEo*ZhU!YqffFUD;% 0aqv7yAkS' );

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
