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
define('DB_NAME', 'new_project');

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
define('AUTH_KEY',         'K9/99:}sS?dNDb~d;yPlQ!$ZL_Y/kXO&m^g}o+3:v|>En,46Yq-{=jPi?!CT{>#%');
define('SECURE_AUTH_KEY',  'qLwzATKj,|bsoXq8F2n{vE-d2MCAGL.K?yv)n#]s4wa+QThJ2-_cVH@3vRyMm.?[');
define('LOGGED_IN_KEY',    'aO~}e5m5.}!]5i*V4a$VG1#U<0w31L/Tx ,tZRN$]>*wo@ iX`Ev(8``Sb.96ZQ>');
define('NONCE_KEY',        '<#)~;9=oD_qC6ZX$/]fyL8 :!Je2 %(ca#C-ln&PBC};mAL`!QuuU4M@+GP-yoN/');
define('AUTH_SALT',        'X@tONua?*IfWi6=o+F(R34FSvSxyyo?|X+epI$65&<n_oFGNy}V5p7Z67@eo E$*');
define('SECURE_AUTH_SALT', '1sKWxCe>^S-!PCI>z;=|FYeAGcqmxW7i_N%&><!E2SX:IsT]d8W(Q2a!W9`D~<Px');
define('LOGGED_IN_SALT',   'P|PN+]|Wt&]OAG.NY^Y#/L::/3Yw1O@0QU+Z5O|oBtW}T}TE~TD.T_n!SdjT?L`P');
define('NONCE_SALT',       'Xe#>`H]fdj|K~_].ku7lJ>.Z-*z&z=%n1JrENcGP,<,Rbc,IS&p_9Nnj[yURjy/U');

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
