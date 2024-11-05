<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u390278229_68DKE' );

/** Database username */
define( 'DB_USER', 'u390278229_Nfdvf' );

/** Database password */
define( 'DB_PASSWORD', 'aWypki1Oat' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'yNDmQ0dh_Xv++X6>.0{F#|UT#K5^;*o|aA/1};{K|*xt)g<S#r,u+Ag^EW:rf0yV' );
define( 'SECURE_AUTH_KEY',   'GMrsiCP;4JXLgd,EN07Iq^Tb$l=_5Cd|8j&3~mb0e#v78bZ??A<VB(0WbElb@~J;' );
define( 'LOGGED_IN_KEY',     '3aDba0bLom4-NzT4lPon46@F=JABlW0*PESJ7oi&n(]DO``Z7CvQ>`)s8vY]H@_w' );
define( 'NONCE_KEY',         '3:D$Xj~Cy[?OAlPS*-Ep}1]U(x&OHijB:=Z$bk5Ld[I i]8BKZc0J>]>]_(j5#,x' );
define( 'AUTH_SALT',         'lwJ)*w%nx )Q1aK=fR|9^CO0D$X6/`*zt3tTNMMc61*L2vrf,cbL)S^FUQRZ!Q_A' );
define( 'SECURE_AUTH_SALT',  'wf5O<kPjDtT@B}P,gtu`%4$t`2*Et8{IO?Q<rgjQn@gaO3(EC},(EUS9]7`uvcg<' );
define( 'LOGGED_IN_SALT',    'Wes:1!3|pRR-EpaV5dL3(BcXm)j5_[I4)[YB:fZc<:`jf~P)LC6h_&IU@Rx(h$`+' );
define( 'NONCE_SALT',        '$E34Acy`4+Rx*6>Te8q02TC*q.Yxdu)GL7AB=1%%BX3~%Vz#c|,w<#T2-Ze]^J[1' );
define( 'WP_CACHE_KEY_SALT', 'fGVs=t)v(WWYD}WY#$LVz<7ylw^MSRA@8^x9AME-RHf*iDkDbn1~z_!pZ(D5;wq]' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
