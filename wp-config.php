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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ')?r=Cyclz(V#NV|B8%JlH*ZG&HkdrGK 0V$!xl(iA`vKjTQ!xf:YcCxz:TmH.L!E' );
define( 'SECURE_AUTH_KEY',  'Q)4mC .D1T!*%<`9vYL2iO2+ VcSjQ=v{S5;(Fl,}M-7Csz{X6Y&8BB}&_&73vJ9' );
define( 'LOGGED_IN_KEY',    '$okMhy0/;P3eFe;]<dvQv%NX1VYP!&q9)Of#:hc_x[TVK UO{hH88[HO&$W7]lnb' );
define( 'NONCE_KEY',        'uG-Ela9Uii<F3dg<LUn0u3d-v7nTNeo@`tYyG|u{>QW7%EgLiUvc.xuG5NZk>e]h' );
define( 'AUTH_SALT',        '0;c!X@F[IN;*cm!I]+{4Yy#phi*=t/gJImdBTp r6H8^G_$%`Bg+j{o~_J9{YgM[' );
define( 'SECURE_AUTH_SALT', 'f>D_2A~C(Qp}clz9|151^*kT$ 2/9i(S@p8 ^ (!FJrEKPy~,XDKVAf<ea:DZT;<' );
define( 'LOGGED_IN_SALT',   '/F~b]_yqPYCFfpdm$5Hzx%4(B%y;8P~4rcz*:^dsq&16@5DK#M[NT*+gXm]W#6r7' );
define( 'NONCE_SALT',       'SG8AJM7zsc_;fbg?%|-*2PKHT`3ncYwQ:pbg 6y5>u D$BRRxmv*x0..n0ASyR;_' );

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
