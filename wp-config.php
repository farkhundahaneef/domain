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
define( 'DB_NAME', 'domain' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Xa{ZQ0!bWi~bDW[R[]MT<7oR7LExp*p2eLY~fjS~L}=cV^=P_SoHAGyG2f BnOdK' );
define( 'SECURE_AUTH_KEY',  'jN;#-liZ)%u!Zjd?UDahTT7O*S7(s$(~%uS3&JEi.$-:.gtP/|zo*m2C2FZ|KSv(' );
define( 'LOGGED_IN_KEY',    '4Kvh!:RY}fc;AHxZl2oOti@yj.U`bK3$X8PZ8Ngf7iD%EPXk.6N=a#{$/?Ta3Dlz' );
define( 'NONCE_KEY',        'Dp*V#P-O RRQ!:NXj.:uZ(;#h4Nl]}g,I#?c[@j#_G%^WA[6W^Dh+M0K0` [YoB5' );
define( 'AUTH_SALT',        'zU>$Tm[,Y4h~s=6I<?>j5BtoyWUa>SI!tOeDVk5I<g[MSa3i99DO*dx/(:ohKV-F' );
define( 'SECURE_AUTH_SALT', 'WlpX(Gk%9xb1U/gaX{*~SVqFy)`WV 8@p [[d2 _nuBFaK+{()[p@u8,czUNW{]q' );
define( 'LOGGED_IN_SALT',   'kI78`5QfNlw^s,a/xE*n,yVy=|#@-qG^eL-vuUz6Kj.4%x:Nw[B941#e?|$gF+f0' );
define( 'NONCE_SALT',       'Ktr0R-y!`)jU}cm@_xMA/EH@}NV>NkqEQ@?a_?FvCGszMG=FbLH@I`7$giB_K&,m' );

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
