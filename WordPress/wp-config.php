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
define('AUTH_KEY',         'P,wHhYJm9*Zt>[SWp(]WtO&uf_x:8Uw~;7p(0z&JyJw61J@1J~>;,:qMWO6H+EV+');
define('SECURE_AUTH_KEY',  'pzkCuOYGa`v%!4RF?$$E(>:=MO-+[jz@koQwL 7[i{H}#j$=UE{|)G-pzbCfF6<B');
define('LOGGED_IN_KEY',    'P3,N)t7q{iSE `dtO,9=HG0Qgx/>rV@a#4dR`9|f#azVEF[s$:v+BM1ygfIQe_z]');
define('NONCE_KEY',        'dxxl-hJu:^&K) ~$M(*DI!J2gK-u=8KhF+zr[cuP|a}S:f<H,p}!Ol^|Ym@4yw3;');
define('AUTH_SALT',        '^2)Q.&f4|~O4~nkl<[CIm1tlB%@2X0n(`(la^wh,A:;nT@rcr0lF%p$wS$NTNCW/');
define('SECURE_AUTH_SALT', 'q!)n$?Wd,LoH5P=]dCRtYqQ!Ainn4/91[g_v/RNIhDhGR{wHr0.G%Me:EQV,T-Ym');
define('LOGGED_IN_SALT',   ')xT<h,EEq*E$7x}xK7y^@+/UAVPYT}0Jis&`e^A@qXn3~4`U2U[<ms+le32/h*RB');
define('NONCE_SALT',       '>oKAdmv;p_-}BZD ufOQ8MA/~jx:;7]@$3m}O3/.ak$BU8+v$dK0KBcXSqtWG:f/');

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
