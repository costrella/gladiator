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
define('DB_NAME', 'misiekmk_uks07');

/** MySQL database username */
define('DB_USER', 'misiekmk_uks07');

/** MySQL database password */
define('DB_PASSWORD', 'misiekmk_uks07');

/** MySQL hostname */
define('DB_HOST', '46.4.119.247');

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
define('AUTH_KEY',         '(^2>,d8*.S@;jqRgA_?V-Fj1m$GoBfgc%,JrKm[i>0hl99bt1pLh4Ag&PrD}pNaX');
define('SECURE_AUTH_KEY',  'WLw kMh@i4OE,T(.`DzogCXdY:a}dFQh|Zg?.*q5EQn:nBJvntz,~Eeacyq[,(9o');
define('LOGGED_IN_KEY',    '/AX9D2+g9Po%!l|TIJMwE`$T|9&pw,p4?[i6 :5Rv#P{[I,IP_f0>?r*wCb~hBTf');
define('NONCE_KEY',        'S] UKfX_F5TBT+u !UjRrLx9o%%-A^gO1^amS6_i@p[&#bJ$]p`{-,_9q).ez]]_');
define('AUTH_SALT',        '-TF5;j!(fQ^r0]Vjw0vgp!mEx;b#!SesALr9Zu9Y`-X1 )/D5<-~Dm#$3jjABNPy');
define('SECURE_AUTH_SALT', 'wra2YPws4_`tMB86xk(DT=f6lFx)eJ7]O}adm5h[%wVt&(NDw4k=.jj[:+oF|b%$');
define('LOGGED_IN_SALT',   'zKgZH0}!7%{|lwA2jOi@^*C2/;;lKp5-bk>i]w>hO9]Nk;;x&h.tJ2P>tJ0vjhXH');
define('NONCE_SALT',       '[qMlY.C<}%[32zb@D,[J7}GZXc~EUI3x1)RFc;h*XN{ }8us]neBEW%9LbU&JEcA');

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
