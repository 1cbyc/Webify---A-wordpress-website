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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w`a<#z=,>Ya@ ~-q23m*24Y{+|g8r2>/B1Ppq4F,uXx:4nI; uJ_P_K//1tGHjt0');
define('SECURE_AUTH_KEY',  'LImT,H{(;afH&s@>;?e;ohNN7=q2iplIa;@w6C|7T~yW%LhiH2p-O=_~^cR{eri(');
define('LOGGED_IN_KEY',    'T*xmXcl&d@v&+<M.[F^tPw8kP%djGOrS@FK5.jZ1s@_1*j(t9r`*LY3R[ZDd_}Iz');
define('NONCE_KEY',        'E,wPIgE~w2hPW:|n;+=-D~I,?%$%@wGl}*YK-Y WDgp*L_YnK>FhJX-bYup5[a8[');
define('AUTH_SALT',        '[TZ7uqKm:@uuqDt7T%@@ZsotEZH}Ja`4dy-n9P8C[V/?_jyj^PcoPc:]^sgSt[F#');
define('SECURE_AUTH_SALT', 'FpQ:y@LV}$3Sw)W?{qAM@%&kddOr6>G$CBI:Xv9}TS/5Nk&j`b~;cnBR_THuN5!^');
define('LOGGED_IN_SALT',   '8Q#y[9{p6Di`;hu-^}|{T[2j._DZ~:z?vAsp*vo(oyBl4TVDKqif_Nh|~R)wC8VD');
define('NONCE_SALT',       'mPcqMgy[}2)/v~=FG]W5sG5/mX@`v`ULnUF7h0KQfry>IGWsIC4tr/cC#]lUqt>x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
