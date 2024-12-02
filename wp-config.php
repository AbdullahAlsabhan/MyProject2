<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abdullah' );

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
define( 'AUTH_KEY',         'lK=F}5aaAE}=W9Ys5z&P5;7zo{47f*|o3TT6-OBjvHIgL<}wY[ECik;3+=3Ee^w{' );
define( 'SECURE_AUTH_KEY',  'txs*%L,a!eWL67ob }gCN`G:Gtq_ u8DuryZBVuJdc1N,&.MY8LE$lA(Js>?W97U' );
define( 'LOGGED_IN_KEY',    'a`0%-/lb%azTpgus!@AB=K5Zq2ZfFp7E,pa2LUf^yJg>o<)rlFoaiDy>@gbqi=*-' );
define( 'NONCE_KEY',        'K#,|%kvAPN`lyI0T5]83#xSy7.&+<+N7!k@hQ58! fy 4M$&o_1$}7{+@mMz2r#B' );
define( 'AUTH_SALT',        'm1TiH.m{eY<+ ^vTn?&8/*8S{4=Crl2k[g>Ci]WF>=.W(:O<WoYm&|P*q|h$)heb' );
define( 'SECURE_AUTH_SALT', '#v]JHTSb-q8j^R3*J~A-xU2L;1KO(5Q@ Q<^({5nx!6[65n4E!x39-5Y8+e Ui:l' );
define( 'LOGGED_IN_SALT',   'Df=bag?8vs}23iz`)]T>USOy4.GztOriko0RK,|/+_^W>Cxcui-uR)-rUZ;bla_M' );
define( 'NONCE_SALT',       '1@~Eq [SO@S48FvUU-&Mw~YEl*v1Z4<9QFQR/@has91)kZ5t4^|c+^,[s#0tv;6~' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
