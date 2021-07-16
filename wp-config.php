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
define( 'AUTH_KEY',         '*5|#RT*P0Yq`P3K;sE%ZW*x9J|E~-E>w]&M)#+1 !V8Kh(t;*^2{!%W9Atnn?TJ:' );
define( 'SECURE_AUTH_KEY',  '14EuKD[D_]mk+n{5?-s{+m-R^?@e[$L)z>@lf<m3aQ.zcs=E{/i62Rl+!!H D]hj' );
define( 'LOGGED_IN_KEY',    '$}YhOsuZ6.p0LSajGBxij}R%Ml)jUsm2(}VqZ5+ B>@I<C%E!^2aXK1/Rwy+&DcA' );
define( 'NONCE_KEY',        'Zr^lK}MY6D$MDXC@ )dp`ysAW]JJq{txqi@:xur]&>F.V=kNP;?5r~g`El{@e`-I' );
define( 'AUTH_SALT',        '}|bU:jf_&^[r%{Pr[I-x!u(jy?<8237=u:$YEnyE%;Y*U~pg{bfinvA[TV 6~q#y' );
define( 'SECURE_AUTH_SALT', 'CkIH<g[l+qzH%drL8B!oX>0U-^nzFXYBuH?k,PH{Joe+>=IM=&m=s9bTNmQvu<ES' );
define( 'LOGGED_IN_SALT',   '/fb@x9m!ln%d!^pOnWwz>U8T~%st6_$RNu[LP)~+_+&G+StleB #![iZiG:EKP|d' );
define( 'NONCE_SALT',       '*OSK NQnwkgl3T;2JWUQ4I_9W#Vz6KFDY?k!k~{$Llkw?}xM=r?M 7aG<ZD<$pE^' );

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
