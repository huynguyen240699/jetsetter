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
define( 'DB_NAME', 'jetsetter24-8' );

/** Database username */
define( 'DB_USER', 'jetsetter24-8' );

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
define( 'AUTH_KEY',         'Es31:9_>Em+F{rDO(SA:QI9lof(Wt2@9:,Q#>@{8%lq@T.Z*G6V<,|^]CdM F}z5' );
define( 'SECURE_AUTH_KEY',  'gdA2_uN5Yd&.<f+^WcY;ns|_!.g{7oz(tw(;&u2dl~`haQ-pn`7f[HHlO%>22N!g' );
define( 'LOGGED_IN_KEY',    'D.]U+uO!O|~}EHE$ldeZw/U}1,1x2.j@=M /a-r]J#$ixs)VenZ+)L/RVnXo5CpO' );
define( 'NONCE_KEY',        'G~OVs{HaK&`3 )uR[<{>*ND&TM1O$!dE;j?{cL7_dlmGyK;(Px=TNjfh>|#Jw4C]' );
define( 'AUTH_SALT',        'tvEz|e-K&GBXPD?*Tz/7e&>rw=aaa,dD).{|mv^M?l5t{uGtdl&zw<@AOxDy510*' );
define( 'SECURE_AUTH_SALT', '+mC|&Edh@c>4+kJoJ1OV~(GROc_g^YF$7l3|ql6,0E],8@CqmtDMcE$5[A}txQX0' );
define( 'LOGGED_IN_SALT',   'ls7wfhbIWyN}76Uo0##Xm-{(B%GDs^GE9qP3Eb9>u(Q*V&itzoV_8#QNDM*jqNGk' );
define( 'NONCE_SALT',       '&T2w0?Pg!xls5^BLO+}EK#WH81-Sm6M.g}<r)=WiKQJ@+L9<G>-h_GUa]_B-3>6N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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

define( 'WP_DEBUG_LOG', true );

define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );

define( 'SAVEQUERIES', true ); 

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
