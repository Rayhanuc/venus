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
define( 'DB_NAME', 'venus' );

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
define( 'AUTH_KEY',         'b`*Ya2Pa VKYJg3-=a;bk.C%+K{1h8r$<k8p.CK*b /Lkibpm+>u`I}~O7F3: Hu' );
define( 'SECURE_AUTH_KEY',  '.D$BNw!Gip=Y<Jz>FNCv_z&NJ^K{n9`X^xN2>l.7QbEj2l0C8Z=iZG2Yzi]eNrO/' );
define( 'LOGGED_IN_KEY',    '>slY_FjjM8M~8|5XYpm `*^K8./|@r-D_btVjl( :m!t}JI*HeTAHu2ZjR@++;h:' );
define( 'NONCE_KEY',        'X57(XLu]7W?UcdW,Y`W>F1+AK$AsmJb/t*]|t1cZ&k?PA xA6@RW<;1a@_y;jltY' );
define( 'AUTH_SALT',        'gO*sBJ?Zoiy>D<&7<3z)x*;D*zE;z:9:L4D;c.mKn,<aglo.B2>o_HSe85nb}VOf' );
define( 'SECURE_AUTH_SALT', 'x>WNN }=D#^L=u/LHb<z&6SV8a7Afb->,rVigr<0NZ,46}7:<x?P]WD^ kDI%}ux' );
define( 'LOGGED_IN_SALT',   '*.Y8o}/ULP5c!KkVqYu[.XBo(c!c[{MktQ,}s)62^&q+/doGTv:{/GO<m_hEn%xD' );
define( 'NONCE_SALT',       '#t(y<qrt=R,0ugF(4Rw>/vLUgqgrvL||uY[o7;Vwkzn!k4W1J`wU_Yp7!+e2~e,e' );

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
