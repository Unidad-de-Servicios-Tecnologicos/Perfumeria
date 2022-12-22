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
define( 'DB_NAME', 'perfumeria' );

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
define( 'AUTH_KEY',         'f o&*H-_B%;1G<OO-nQWUQjP@4`4f|^|#Z2rsJQwYmdQ@b|]vL #OB4AaadH9n;E' );
define( 'SECURE_AUTH_KEY',  '#hqo!fP3!h]zm%{*vZr4tD?`Ps3x`6+vDadL.)Q_YYw[{e&g:aDeh3zb_htMFkeO' );
define( 'LOGGED_IN_KEY',    '?2_&`+%#]j7F=QmZ$<2/6GVCR->nTvN3qqRU3%_~8bq..5CkPV%-slt,?28SPo@)' );
define( 'NONCE_KEY',        ')H>S@ga/Sn`p7P4=Kq$X^zW>tV8+Tl,G,?>MFdTXF[eBCU(`9Mh2;_%s=*B<s=LM' );
define( 'AUTH_SALT',        '8#|N9<m(?6?$]!iFhC%)FBV?)x:l:s )lHnDY<w;ZdhpwXc==po5+{E,[&m7rB5T' );
define( 'SECURE_AUTH_SALT', 'CGK02.Y?:8(_>^;hjP8-2>T[LpjT=]z(G8|YAcbK5$phEc`rra>vF;>r,i}0q?d3' );
define( 'LOGGED_IN_SALT',   '/5<9zIo;K9da}|XsQ[hhrgM]h0ho6x%6$ZU#O*A`Tb?-TyvI3ft|dZyG75g1D[ei' );
define( 'NONCE_SALT',       'H.1T&#hK}GJZ@N- zK<H1~wE`KTuI>MJ^*d<?>(MM@;s)JXBQa?nA/^APdCVNztf' );

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
