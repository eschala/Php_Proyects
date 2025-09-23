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
define( 'AUTH_KEY',         'WwLyD +r.zZO|5rS5h09jS+C))C=H/zyw14Z}iFid({POk!Q^1C[b;8Y6bUdSG.-' );
define( 'SECURE_AUTH_KEY',  '(TN0a(CjfZ6J+-@`i/O94oKB.5/R*jqq(7?IZ*h,<}I|M$?MU!&pdLFCHe6yCe0{' );
define( 'LOGGED_IN_KEY',    '5vSMDx]P+qw6]Un(7RZ;41u`%qN&`=MfWeY`xQ!rtz|3t;lufp!,UiRmsv3WKMV3' );
define( 'NONCE_KEY',        '3KRR/~#jLC<$c&`v?WA}W(Xqq`wS59p(RC`6V(h`&%2P`ek79ocN3T3X@GGsMK/1' );
define( 'AUTH_SALT',        'WM!f@QThdY:%-4~L4ByW9^eg7o!q`J9~>vp5JK?z-t+y91s`OC++ojI7P0cK*6R>' );
define( 'SECURE_AUTH_SALT', 'm/vg/^uwzrX9^B*Jc&+WD`@Z[4FZutLOgtA5aqy[N:)tbGwAqPnf9$h+m]m`wEH$' );
define( 'LOGGED_IN_SALT',   'B9xs%%-#+!Mg&]WN3a|xx3YrcewIL_c98`5*N-]d!xD/Fd!oS`l-:=m8*jOf4R9w' );
define( 'NONCE_SALT',       '()6A4Edf3XZq.k,O+m~h~S[b</N8?/$:PMe3t191H6sH>M%EL4f*7ywLMgN6yw]8' );

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
