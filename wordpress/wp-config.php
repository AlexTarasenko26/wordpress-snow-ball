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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         ';.k#VDK$OTZPzU3Q&Oa[-9Gu6u/[sB3BYc$. >`Uw%@Q^No0QFO$wG~jy6rcV|Y%' );
define( 'SECURE_AUTH_KEY',  '8phMnOeQ?)eE8Jt^HMGQ_J?XPbOgsRw^n$42>)i>Nq|JuGC+4nIIitBqV}=1{}*e' );
define( 'LOGGED_IN_KEY',    'D0;N}O@K?<L T8f`EV0;9Q&BMrDL5[D}i?x*-BvXFn/kf*|O}:r+fg8*03_(Tw3&' );
define( 'NONCE_KEY',        ';:  a~K*(]Z>]?%@p^0+eo%9.I7(RD+}%AC9(swP#PviLvh*:;dgh~3%wxS<L5Pm' );
define( 'AUTH_SALT',        'Q[Y;Iy@131o:P1h*~v#Z1^W{=m+N:yIZF73@1xCGg`G4;N>^h6~2lM-y>#]u!xR`' );
define( 'SECURE_AUTH_SALT', 'eC3lucXIzySudS*?Zt:~k:CR+z<F|o#0u+a@H3#)jIIHHv&?3w=K]B^+>{[=)>16' );
define( 'LOGGED_IN_SALT',   'cQUGkTohM8A)}FeAs3RFYo,W}p(lK|67oO9vb[$BXy`DEnidDf2:j*p3:paXQx8T' );
define( 'NONCE_SALT',       'P4%|dyOdDA+x}Ah{r_yTI;< i9},N+.PgM;Wm9[B8v|zvpVrziHR7I`${+dewp05' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
