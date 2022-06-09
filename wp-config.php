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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'github_wordpress' );

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
define( 'AUTH_KEY',         ')J9<3K0>WW(&p?o;klXuW:=9[DRSP>KqI)L7mVrzAgTkiV!Z3!^.g/Y7^?yGNE@1' );
define( 'SECURE_AUTH_KEY',  '.zFL+!nJ-c1&bnwzXnWd i@4DHW|u9qW;yI9xY*9z@5>+_Gf=kW-X;O20z-tTw8n' );
define( 'LOGGED_IN_KEY',    '|Na[f/(xYp<oQKf+omBH8lekrVL->#:}^I~~:|?HfS@EG7Wb%_E.dNUeIwR12<}:' );
define( 'NONCE_KEY',        'I7cjW ~~dfq^p#Aw!pkq~PvZ|XM<Z_vCLKat2uwp>qwU%xA;leCyLhnA5M~C7j4M' );
define( 'AUTH_SALT',        '*=+K]kUibIKl<|AdfB.q.7Pr~m>QS7AY*tyVow[,!t@!z,P}R&QG9u`$%k<&40du' );
define( 'SECURE_AUTH_SALT', 'pFr0F:%k&uECuRi5N_Y{Fc Q.aD@@mE7uyrb_ KV$bYnpc*K7Yf@WNMvUG3X+F$6' );
define( 'LOGGED_IN_SALT',   ',lqLk*Bcj6&fjh|IA&El1YpLo;c**a8|Mrpv-kZ(dFs0h^y[A<`J5)rtl[d@/y5+' );
define( 'NONCE_SALT',       '75DQCtXx$y$K0zxSR#;xj3Yz<[Q_ET7^p=x(.Y,qDXc771vR7a^{~0{L+r`&_Th+' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
