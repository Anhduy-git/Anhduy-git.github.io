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
define( 'DB_NAME', 'anhduy' );

/** Database username */
define( 'DB_USER', 'anhduy' );

/** Database password */
define( 'DB_PASSWORD', 'anhduy4802' );

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
define( 'AUTH_KEY',         'Tk0g*Vd@!mI!T/?KwOt(h,vs=ueMP=pet3;s%k#q88AX#/&#nk=r uEKZVR^>f13' );
define( 'SECURE_AUTH_KEY',  '}W!=;p&I,`7,L0Uhl[<3[b)NB`d}!@jz`Z5+fcrh0B6mnDfObuGmQ}`fF*P7d=K^' );
define( 'LOGGED_IN_KEY',    'ab3hpGm*9`qy[,xu%1I6)DH5RO~v9xj1d!~6vla3C,Ml>~&|s$rRbO&Pela,FDq}' );
define( 'NONCE_KEY',        '{Hux`x{ 854h~6IM`fMm1DK9l[ZM/rH#krJRMd]LbUaSXC<E7M~owr#6gL]Xs3]9' );
define( 'AUTH_SALT',        'rY7tyNudp7/tI15 zq:#E|-sLtJNIl1PP0+K% jD-)8aW-X)VtTkd*->|r4jMks9' );
define( 'SECURE_AUTH_SALT', '[MskD^_J6=_(??EblO|8I&9bQH`RJIeVY}G[ZiuHdq=Fb]1*R/O$sqs4ZZfBhcG7' );
define( 'LOGGED_IN_SALT',   'A!ni?&Yj.3?#G;<&l)2_(>/5c@Wcx_+}Y!DJ}Hk*.N5K Y5pe6R:uzmOQX24#,tB' );
define( 'NONCE_SALT',       '@,K/xt#1RpL_2.r,BLG(.4fw=F^XneKnZAR;pf>n4x=--c>vFfZ$|F~cCFB^=uQq' );

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
