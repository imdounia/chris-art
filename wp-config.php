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
define( 'DB_NAME', 'chrisart' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'E$B; Jy9[x{3k]xYU:N-g>y*kq xv@Zg@#BI3V1:]=[omR.UyRy>tH9e?{{sth- ' );
define( 'SECURE_AUTH_KEY',  '*?Q{LIlcu:G7dD2K{)1kNg^?Dv*:Vm=?j^^{mz:Q*F^DMZJvB`8!q4g#Kl6Lv|Bm' );
define( 'LOGGED_IN_KEY',    ')uBsN ~#-7WA3MvBuv1-~Nuaug#p kb7P%09.Y,DAXin-pVmZePY8lu{xM-EKqW$' );
define( 'NONCE_KEY',        '(;,]nrmok4nwADo*fQ,nNdx7%W~LvIMkF$cmNCw>>?Sc?G@-`)vV6/2H#-|CO3`U' );
define( 'AUTH_SALT',        'A[)XLKL&<4qs/Pt~;5p&Q][K/ehx0k4KJ`g|W?6|:>>iglB<Zed`7De>,S0xUSy ' );
define( 'SECURE_AUTH_SALT', 'o7WX]a@^?d.~LC%B@HwPdudB&a]E>[U9?<xYsKrw:q95f;h]j.SUal}2],paLhLq' );
define( 'LOGGED_IN_SALT',   '(aIv#]0=Q|Yf{@i^+0FBes9H;Wja!,19mX94suf!t3/7 uq#ShE*R(?MGN@yzr7<' );
define( 'NONCE_SALT',       'A,zTQe8ITB+mC/z S]71{d!ymWQQyp-VqC=Pl{9ZzA[pgxfGC-8ZBIIy)vUOMZ$n' );

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
