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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'Vu|-VUTfHEcwhon:MS/ JS.@u-w NR4M_@ZqRkj*YuB]H;zI+:xx[m&D]/oC/S=B' );
define( 'SECURE_AUTH_KEY',  'h<kOEAfo}p{X!|h.JE4XBQX_-coX++h@MwoxFDWgWlgTvKTG}?@!I9s[Zc;_?Q_p' );
define( 'LOGGED_IN_KEY',    's.*6y*KR4j53/0<yF:n|<)Iy:nj0k.:iIPxqfwuezPAhkp2Sb-|NnTn8rU#_+)z:' );
define( 'NONCE_KEY',        '775Ld_E_3:A#/5P4o+MgLPEgbeAv^5-!vue$089&DL+as.#B!B`TN#T03~S;+F_W' );
define( 'AUTH_SALT',        'PI>Z3-W&/KRLS>|/.}xiQ$!^&%ci,D`$.hHx-4E1>|,T?5MEO: OrACv*>i!e|2H' );
define( 'SECURE_AUTH_SALT', 'q>5}=Hk%HR1BuZYB]@,qpUV1dk&-1|DEy}SW`o&kT$t@,{m_GUDa_8f35|0bFcGh' );
define( 'LOGGED_IN_SALT',   'i[O=Gu#ix`JcAkGa`W{Im~#g4!N;DM?Id2W2B7_Qm~xey7,X-X.R+u#%gD$!1c:u' );
define( 'NONCE_SALT',       'xPlFd=H;>T^#]M5b),.RDK{PMUvYWg*j%gyS3-~{wE7X8E}k+Wv<4BBxBw*;zx#p' );

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
