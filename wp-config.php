<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'baraa' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`mRh}hE6/s=/rKE8_7aqtv6b>k}UPr<H%@,y}sRT(+.ZQa0EG;}uzxt96fbXtR|d' );
define( 'SECURE_AUTH_KEY',  'j[_=BjNVNKGmHoC;|%OT7Q}?*lDrr.@d;S zS6ER]oe;o!gzrUS@qc8Nh2G&^?DO' );
define( 'LOGGED_IN_KEY',    ',kQcDx;fF[rm&Rh~M8< #ml-VG{[Q3B}6I@)>tw@.Wd+j,Lqu{cL1P/Zp#RV3#;a' );
define( 'NONCE_KEY',        'dgTy@~g*^sw=Sr4p/aL(S~(xM}EL:p=,s/;C@}~~+a36S3~)S$+3g|h16(&NLk :' );
define( 'AUTH_SALT',        'h:*)j$g<l2`8KmmaH_%7%~o]<oP_G1zfglPd8k,@lj+st<;d?L=+UTB.2Rtl<Z`5' );
define( 'SECURE_AUTH_SALT', 'szQD9Um 05.vEE19fl s{,KYbD[vT%*1sod|ME;dLs? jwieXb2[Qn>397-6N*+R' );
define( 'LOGGED_IN_SALT',   't%n}e|%rT*lBn^o,be3.)r1c/$RFkF0x jP@8`TYy/:DLO?sGwm*ItH,%(rMDzjI' );
define( 'NONCE_SALT',       '>qq|cX-^S=ATg_?1kLoCGg.QKS-M DipZOtf54C:bSJGs(E=16UyZcxU@i50!j0Z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');