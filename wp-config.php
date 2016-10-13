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
define('DB_NAME', 'th');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'D3oeF@]bY7yj>#[xG:|9xE!OrwY)v5[kusZ2MP$WGoiL}wZ3[YkjVmaw;soM;4HW');
define('SECURE_AUTH_KEY',  'XaLL&WzdI5UoqZU.GbAq?2ol8gC,uNXMli:!oE}#Dc]R(NzKL#pVwq|wgI,YL^XZ');
define('LOGGED_IN_KEY',    'D78gb|yT^x5)>5rjc-q~B[fPipU-K8gX/ZE*}CM}ihPl%0^Aj]S_6?W9XcI%W-rC');
define('NONCE_KEY',        '.GVH$GEoKs{/W+AAvSx/s(Cg41rcM[*w74@$JaG&:_/}Cc:)w!,Fy(ooE:qOT)D=');
define('AUTH_SALT',        '~rv`8bOxBf7)$#rO.6)mn/m]v*GPs,fQP/I4R2;%9/oa[K?`civ*?CP#(7F%[ULJ');
define('SECURE_AUTH_SALT', '3*-RLyRh4jOeHey<x.D5^efL`t_r]Q^{o7Lps(~udUySF}#HN0AfO0@9-aK^q~+h');
define('LOGGED_IN_SALT',   'Nl-5L)$uO] ,)fQ+{N-IsaWJ,zyv24b)aK #S/O<ylq4B8<%YsLFI2R7`!-S=Bdd');
define('NONCE_SALT',       'Ps mr,>%?kR/8V.{z)Yq7z{KNi6A kFs{tZF.PL!G:6ch4P$ihTeyOj*9BE5/-mh');

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
