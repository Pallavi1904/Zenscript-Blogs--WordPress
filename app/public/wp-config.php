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
define( 'AUTH_KEY',          '[LyCoJYh W5|7rqVS*}c()f,Sbw7i CMv59Y=^b)u;x-Gyi[trJs4elKun^ui0c/' );
define( 'SECURE_AUTH_KEY',   '+G,c1 pluCrqvsyK;+E+rlgjWV9d:KLd uBO%I+3ga2r&n^+E&bjJb~Wn~Y0<Kyt' );
define( 'LOGGED_IN_KEY',     'Va]3#/HZ=[*McP@Tu[7;ZR?$;Wev|22w@]6Hj>IUlat,n`]re3|(CM_F:2]6&Z;6' );
define( 'NONCE_KEY',         '07 nshNNfLEp-X<u(Aw;838{RqQkGG[`Sqy2.BA*}ft2qQ1v3H5n/BrI}i(,vwzU' );
define( 'AUTH_SALT',         'IvWWMF@7Y3F$(AHv&=Nr~SMaq}E~/3sy!Jv3!;mgU*Y5HxA|8Z-g&l;2;8+[?c=i' );
define( 'SECURE_AUTH_SALT',  '7(-YZA9wi,upttwq{K+djd:d +*&-,+(KAwl}&n36>E>@8KSL4A9e=7:Tm>6[d~n' );
define( 'LOGGED_IN_SALT',    'l-GjzO4s PkyYbLoNik]3{GG?EeCaq]n;degtQie>W<TD.MkHx~`gZ1Dm}v:XL)h' );
define( 'NONCE_SALT',        'rOtm(3l{bZ#LJE@E*CZzoTN!H)h9&oNBg]XBX+ncxU2s @SBtYu0!a!T|%? ?]Cg' );
define( 'WP_CACHE_KEY_SALT', 'v`t`>NB5`ah865oEDNqKW2jQC6:/~nvq9-lAL/^:E!03$T1iw$3]hZ]#AOR2e69?' );


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
