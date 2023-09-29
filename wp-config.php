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
define( 'DB_NAME', 'easy_school' );

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
define( 'AUTH_KEY',         '`0fqejsaas}&/aHX`=+^h74oG0g3p/1Ep7%bDT!^G<Xf0K]p2V3VsnSsV9r~R[<E' );
define( 'SECURE_AUTH_KEY',  'he*u4~z_~leH5bTEBSi_]WMB_B5Rtgz#,*:&v5B8c~6-oi`i,@Yv8N~a`L@-T.,1' );
define( 'LOGGED_IN_KEY',    ',aW<.dW>+|vV9fVy;.?o 1pYy>^Fr@046VQSMwB8y?fhmk#:)d9bQY0zu?pNy-%o' );
define( 'NONCE_KEY',        '_kCKE:8=/yn35i_gRUt)`F^[xP3{Fyk88Dx=h5T~*Cz!CC ]/%i!a}}w):q}IBNa' );
define( 'AUTH_SALT',        '1 r /2H$d{i>/%#iH<9 !,xDhuYv1TCT&O_Tt?G{a`mEeY0Ra1K+by8e_qe>Z{Ka' );
define( 'SECURE_AUTH_SALT', '$H@JxGT@c]O=Xlx1FRup~|dH$Oc3]VY}C#nWb?_B4bH{g&C+fqd>k5btu0V$7Zr0' );
define( 'LOGGED_IN_SALT',   'T@m-1hpi;XNb6/+?_D{nq]yb]Xw*dL+oX%vb7b6t5/a*`*J8E`4L<9o}S|j(%s;P' );
define( 'NONCE_SALT',       'Dp~67;nQWU.YbJC$Yf3IA&[I*A/ZZu/8^=uYy-@IHvai,3%sl,-~RU[aCH+xz7y_' );

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
