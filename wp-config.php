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
define('DB_NAME', 'spirion');

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
define('AUTH_KEY',         'f?L5@Wwq9o?S0Fc_Nx`f.IgqIrq&qd5/iuhjO;jqV[giA1Kyy|K<C@<i]Rr)0+AR');
define('SECURE_AUTH_KEY',  'Mngmj<U+k7yd;6s+8-W#LnypT8G%M~B_-1&Be&+Ix@[P8056q8krq^&-S:.ad<_q');
define('LOGGED_IN_KEY',    '3>5W52upR;#f]Pn/f|6or&N:m>s;M|!o j=lz2i-.x;]V;foTsT[R$WSMnUud^.F');
define('NONCE_KEY',        '^HV:!%YlDbUKDpcP1`=3rV.~@Fhn<d]Vu1!|f2p,bK~8M;9Tq_M/ZkfJ#^BI)eI1');
define('AUTH_SALT',        's!USQiDx0~7#;Nl!+ [bYS?-O7oelRIhD?6QKSnSJP9N-/g,d<.O9bG-=2?Yjp67');
define('SECURE_AUTH_SALT', 'zuEyPR|E9cZH<7bH-8qIk=ON9l4<6F@)e25eZ`;->)>i^iw!x%B$NeVCSx(}1Sh|');
define('LOGGED_IN_SALT',   '^Wd#9_O92e*N@eT?SrU05FPf{%gD=8d,?v+)]$$&u}J<$o8X3hyS}BE/ {|&E3;6');
define('NONCE_SALT',       '3TeT&=`V1&X3S7!0{0FmRJ0~L-H1&qq};bM=Zqfb+lV@U@7(9`9b4S~$*f]0_(k1');

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
