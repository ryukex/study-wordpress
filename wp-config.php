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
define('AUTH_KEY',         ',e0oE7-j@f 6d]0l%`$W:j},^i5JKc^F1/k[a1yo(*x:dYyeSJ6UkDCSn&=#&b*2');
define('SECURE_AUTH_KEY',  '4+tIl-4r^p6. xri2,xMBs:2KIZYL`TB7`2BLP+l*Szt* QjX{c3~XRIK?S]Ii[-');
define('LOGGED_IN_KEY',    '5 ez AfbwP[R,zEN8<Y|Q_d#,#m8O}8Rb.t/uU]0Uq=su=xWmA2gy$=0Cl*hwkVR');
define('NONCE_KEY',        '[Nj$&UzCILWQyG 9JLWG{DQBc|&i)bSBgz~khp^qJZu^ A~%k/JK4zd{eg2ixKR{');
define('AUTH_SALT',        'z8loG=Mg24snZ>g,E_Li_!yHH-VP`}]%$1Exf~f!HT3M-y$A,#|p743DK@DtNMe^');
define('SECURE_AUTH_SALT', 'nC#DDI3S8),,QLJ)=Y`| 2AU/~LM=p,Gr*[uydcTca~3RT}?b[.qp YC9/Jb$F26');
define('LOGGED_IN_SALT',   'WlRiZFN.`>Q!F_zwN#fs+4.gon`b|;k`)j,7-HWyRWCW!Th8f<nZ]r?z<kmhZ&c2');
define('NONCE_SALT',       'd:Q7)RE}v6pCjOI8D&)pyT??C+s(nw,rFzZ~Wh.!j8`(32l-U^v:0qQQ+8L<KIKQ');

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
