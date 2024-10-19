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
define( 'DB_NAME', 'laviedesplantes' );

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
define( 'AUTH_KEY',         'Sow gRjk:Da4&lEcC#UQ{hl;q=-.kby 6BItOu6v:;b-J9&nvwNTyB~-@{h{lu;~' );
define( 'SECURE_AUTH_KEY',  'P)BzE>dH.pbU|v`:qx@BM}x;/+-oj;PU/ZFpg!j.DNy$OG#8YqBg/b9KcccE6V%/' );
define( 'LOGGED_IN_KEY',    'HtT0zkrl5(s;jYD(TDb!yfQ`7dF{x0&K$^o9A /Lm4BeZNE.qF:/TV F?1,?HZ=3' );
define( 'NONCE_KEY',        '@ubHUcgX=Jbe?VCVzDwo1h%t;fj`bVq/:C.GhF6W`I6C2vr2JjAK#urGsN_JUsvo' );
define( 'AUTH_SALT',        'mSmRzAZQ!E=[mxtW#_g K@1Czvv^OO,rA%<S5-0KF-=~Y}U`O2<[Y=? 9gb3`FhR' );
define( 'SECURE_AUTH_SALT', 'Q%nDFkRqIgQ`{Q{T3[3}oPjJ~yx_E)Q);?GQ~t~WWoFyGiW-dso:Q+SZ4/[a]4{z' );
define( 'LOGGED_IN_SALT',   'N_TQB~LI:A8L^{Qa!pmp~VqZd>/!]|J_PE`o.WE0VF4&5GJLA!ONnF}PFAc<l`^B' );
define( 'NONCE_SALT',       'p4)XHRK9Nqx{#+Yf!&:E6y2T)L1%monqH@5JF^u9VkvL_^=,a%z15/;;C*sf(}mC' );

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
