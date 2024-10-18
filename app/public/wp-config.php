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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'w|!*OEL118f42~ea#w#y^}+{ZYUljRn{>^^Dn[(}yjqL,?<}1{G@CA}93rN:p2q0' );
define( 'SECURE_AUTH_KEY',   'H:-/% R_vj3YLMIM~j^}R!$8F+CbvkZ[h15F@QmY{S~XjUFu0gbmk$}>(%{f{3iB' );
define( 'LOGGED_IN_KEY',     'f>Z`J. Fk<^{._e ?aW-5C,W)lINT(}rQU%/%}r%#gJzQX ~tjc-f-BbUMqrX.Kb' );
define( 'NONCE_KEY',         'qT?Eam{Fl|7yQm+TX{-5@dD-}m]5AW{.:w_[a.:i4#pWog}ww&3m^-HU(PNi+*oF' );
define( 'AUTH_SALT',         '3e7,P8:Qy8SQXEN@kaDemi4#Xg46xtXeiuYugu/T5V+(6/gdw*:S=+}pvd@`GDVm' );
define( 'SECURE_AUTH_SALT',  '?Rs0-|XT1d3/cY3- *OP3!xID(>|MuYs0f2r7R+UtiJAR$ IH4W}g~q$D&cCZq2}' );
define( 'LOGGED_IN_SALT',    'O!M2JV[aKlpP<($Icgayr!to+pxc75q*E6m&~~E <RD4LN7o)F_ETW}KY*;k69Kg' );
define( 'NONCE_SALT',        'ZvfZ:!}/6B+GHz9Pi=ybBidZ0@D_YIq<1G[oV,OdsU|fS`QDWpzz3#*[OTDhuI!:' );
define( 'WP_CACHE_KEY_SALT', '!!zEO0qYhvdse36G!R|QY/srV$`ziFoSzs1bTBL:o19-p?:FlTlC5I;/#b vt(.t' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
