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
define('DB_NAME', 'csatlosmelinda');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'starT123!!');

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
define('AUTH_KEY',         'C n@|@$%vm0dzO/~o7D0d@9_A9 W;u9t|2X%Ue.pI$vbS/6q,]MZfiz,9CPmrZFp');
define('SECURE_AUTH_KEY',  '! :uFJc/J)N!mvMrrE%0dZc9ce?W#v ,;O%eC9H,f3J)J5 _+<.DuRBQPhhzb|6P');
define('LOGGED_IN_KEY',    '=&C`*M|k87wI}Bn9`v~&0Ynr,J8]Qshnp-v/}LuIt:`6&a,7PFX[y7o$7J}6N0y#');
define('NONCE_KEY',        'Gz|,;HY28G=b#wyY>p(s;PV+U?Y~NxIbf:}@>]jy_cO6?}m<:6;$4vr&JWP:kJN{');
define('AUTH_SALT',        'ABk#d2XlVm>%XAipFV(IX?[>@:W P?rA*X `4aOm5Tw?;MK7Q ?nBciRIY:qU7RB');
define('SECURE_AUTH_SALT', '8z%gb[2jWJT~L~>gzQ2v3vX+$@uV=G2ES78OH>I_m;%qx}qn+2LePCk![yE}3q:N');
define('LOGGED_IN_SALT',   'hDnX+wn`JTjZm0D Gm~.AZHw?*x7/`&|BX6:?=sAqbX#nDReQ&.EHbWKCJ-7/^~2');
define('NONCE_SALT',       'd[7DRN&H0G-@bP,K)J5Qi96AC>]Cu5Fwo.zV]R`4l7+1H6BG!Mw?ZF0$adP`z!U.');

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
