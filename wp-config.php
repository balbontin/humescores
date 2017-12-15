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
define('DB_NAME', 'humescores_db');

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
define('AUTH_KEY',         'ZX0.?K^[&uXzZqNF1dqN1:@;tqK4=Bv0vMI TZPV3us,1iH F^I`#-m!ZxU1>eG ');
define('SECURE_AUTH_KEY',  'kL@/b.>kko9CmXEpWF#/bo-Q{:}Pf8c5@)]$Q]UX5{b.l2]m~p{5RB`+Fa{c.&@|');
define('LOGGED_IN_KEY',    '5Llizw;0ylR3}hkFt2g8IVs403S10Kt#^u7a1@ymy^U!L1VlF]$;[E6x&.n!N6O!');
define('NONCE_KEY',        'BK7P]i$[ciUBAE3u)`t)YhL(3;1F&`_{@v(0&S^I#%UdEQtB>z0wR ,Fd1_50#-?');
define('AUTH_SALT',        '~J6U=u*lysOPR^1tal>~k[wUWr.VMm)O#2-u.FNjwhN{3KQ4f1epy#]@MugC}JY,');
define('SECURE_AUTH_SALT', '[q&Rn0J{RM71ne4dRNQ8>%RmM~QJ^g+3_I](ciSF,{&2fz1qRRz+j&#(`ThN0z]y');
define('LOGGED_IN_SALT',   'jW~6fyJ8!QwCWvkDzAU,n)19A0SOn=SgtvV%an`xy~4_VK<Bf:Bl4!`/-wv }fOD');
define('NONCE_SALT',       'AIoz~)+FS[Mw@BVzRm?bmFf7mdb`dB[h]A)Wu-aL9H.$6.Zp,Ye@(.jKo2;OEDUy');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
