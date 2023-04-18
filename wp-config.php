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
define( 'DB_NAME', 'labb2-jonas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'izB4W|) Wl-Km!C_C7dlC@]ypAwpXp(&|R,OjJX$2(9(@73$]66z|LK&bpw0P/u/' );
define( 'SECURE_AUTH_KEY',  'w!g<Qk@$8MhHI##ppWhC ):5oEjOj;M/T33Y}KFLFvo%+EeD)$0_sI<+9&5lrkuU' );
define( 'LOGGED_IN_KEY',    'MmD8I6C&#y3>;Li>EcaWZKXg:{hJ@H0atNBEAA^F$57FL^M*#j^fTGMnR%ww)##-' );
define( 'NONCE_KEY',        '7A9;E$%3,ztN6d?<?a6hG/@NQKe0Vn<D|N]=OG~?N7jQZ.jjtvXjaX x$4_peBR;' );
define( 'AUTH_SALT',        ':H^c|Y;-2L`%H_Kzh@0X`VN{fYnHl1A<}_FlZQ9-$?e+<K`,r8LV)o`Sb^3kP1,O' );
define( 'SECURE_AUTH_SALT', 'b.Tb28T(^P%z=+rAp -^ jiLEcsD{]@ rF,j;)X4]QTm,+)ywj)(:bsOn?^u6e7R' );
define( 'LOGGED_IN_SALT',   '.$z`OyxvX|sL.5kI4V&= ?I)<T41MMVlcVoZSS|+B&Mnbj<B9fUNF?;)]N-CRwg!' );
define( 'NONCE_SALT',       'Jqm992FO!*j_58r:X9E?nbJfIhl^5eA@-Mh9a&kS^q4~b(R)m0,:.}@RJK0QP.qb' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
