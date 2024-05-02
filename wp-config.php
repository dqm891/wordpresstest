<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         ' e{ JtHAZW20!g8NKN7Ee^x_vX@?6^sv Wlxu)A3c-ltP~wS[aQ_kR)pLrTKi&Z7' );
define( 'SECURE_AUTH_KEY',  '?0e$8J(feBK&3bfV|+kc&u?=nmh!I}Zr6{v+CoeiW/?baFiQ)5f9UEsib]g67;!h' );
define( 'LOGGED_IN_KEY',    '23HU7dsj_3o[ogHA5EyT%7E948vyLn5s}{bRa_<Vh5OF[073-yuOH;dQdvPNl%hL' );
define( 'NONCE_KEY',        'y+D#~VWRX2R.[9E5U9&6pV>7B_a<inA]WBz,%BP2xN,Xz#@+]4R;e-~S:iA4%Si&' );
define( 'AUTH_SALT',        'a1U?^L@ez%lJVe.R+P]#!0c#G4SFGTsn/vYM@:$bAm6FFLnSBef+QU_zkK7#@wYP' );
define( 'SECURE_AUTH_SALT', '_wx#-P_Fst ua[N3ZZu/fWH(Yi%p@0K<~IsPRUgPDBeVU0N{G%xr{j]SII?qDX}}' );
define( 'LOGGED_IN_SALT',   '-O_wN_j/g>F%6,&<vdkLp&uM=,nU);g2Tc-]!y,KzN^FsdzynfJ<}DTZ+4GhBu&3' );
define( 'NONCE_SALT',       '59/!#1/ilqulh=7tZx!cBB;m/{jMEV`o.G)_4]Xe>y=DK%RZH&h}<?@CUU>.rw `' );

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
