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
define( 'DB_NAME', 'github_ecom' );

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
define( 'AUTH_KEY',         '&Yg{`0tr+cB}N<`C<C(^FG3c~KVMX#5R}2FtRLtxJu?W<[OHRx:sZAM)x`t7xW]?' );
define( 'SECURE_AUTH_KEY',  ' b3Y=p+qM{x&E vIzg Vo+Xf3vfN*%5_rA%g`W+LF/yV*TEaTI%`}*>74M@)g~h#' );
define( 'LOGGED_IN_KEY',    ' ^UL[c4*1j;tU,Zmk4@ymDx:yWEvORZWN10So5%1VNr*?OU!)j[QkW8]y&@hY5yd' );
define( 'NONCE_KEY',        'zxjPvlKDAz4Q*`ZK+crDW!G:S#>LBdh):$:4_HXnJ.3Lf^-u~bz;-zC6S%MZ>;=~' );
define( 'AUTH_SALT',        'O_!ss/mctp&Jh$7@k=!oJ~j~sxS`Dx0NAC?dM>I*2J!&K1%>^t1%O,g~]@=Aqq&Q' );
define( 'SECURE_AUTH_SALT', 'L1Oh?pZWjEhC_!Iph/*.E7N@ylmdZMi,?lvE5]6e;hJMe<+YgnT$n+_Wt6IYo?I$' );
define( 'LOGGED_IN_SALT',   'VMoMM=F`Ng]ueNef9xcwOq2PRN4AP,-m`$rF1fUH/oo*~73a{!H;.J`.VoAGl+n<' );
define( 'NONCE_SALT',       '1nM+E99?y5:Ve)Vq6r?Z${Ul2.S0r/~44@:=3IJ6%JRui_za$ZmtAFh%!f7b/VQH' );

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
