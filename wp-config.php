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
define('DB_NAME', 'seoitzon_seoitzone');

/** MySQL database username */
define('DB_USER', 'seoitzon_seo');

/** MySQL database password */
define('DB_PASSWORD', 'seoitzone@123');

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
define('AUTH_KEY',         '1HrF,-NamngnS9V*l)yfZ)@s!TeNYH/q>*k4ZNBEKc1{^&7)<>=W::[NdWm!pK%%');
define('SECURE_AUTH_KEY',  'DYg45.}hIe@AhLV&i3(^B3uEzL7$=C4bp-EIJ7zt}PXR_Hr0dvn|K_|xvp^-xscT');
define('LOGGED_IN_KEY',    'l~U`Nm/4HL?0ukbW30@J}t*7M*O~3>d$R^6.b(ic-Tmbmmq}CX3r]&)m;fF!l%iA');
define('NONCE_KEY',        'EqXF||Ntl!PGmfEtkgx[a{hzy*G2Onynov6N`uZPH-@J/ k<n/IyHJv+kGnz47<1');
define('AUTH_SALT',        '|CXD>gS|s4NvJaG@Ra,PkxGcl)LZh/9_b7(2`~PF$:v;ovGJd.zUW_I>^L.LjJK[');
define('SECURE_AUTH_SALT', '>rtu/_rie8b;9V;{4L(^lT|PzvXGySQv<{XAQ.V{CB1qXow;}lh; _O}+JUEeU]E');
define('LOGGED_IN_SALT',   'xG?IU]uh*CVD!:HY!$_Y$B_hwxUlSPyR/Ps5ax~a+k|$p:{9.A:K}M9_;l^77Z5p');
define('NONCE_SALT',       'xV(I?WqKqHg)Nxn}5hQS*X$`*>ZiZIM3Og=ygf*6De?wh?C:EhwCs}166jKT?eq}');

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
