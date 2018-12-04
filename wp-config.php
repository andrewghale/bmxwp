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
define('DB_NAME', 'bmxwp');

/** MySQL database username */
define('DB_USER', 'bmxwpuser');

/** MySQL database password */
define('DB_PASSWORD', '8KFOZFwUqcMLABWz');

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
define('AUTH_KEY',         'od-7lb(r0c(@ljazK;ES5*X9k&zZ+J-z|wTPLX7d@JNXT<@>$m/w-6_:EEy@*H>2');
define('SECURE_AUTH_KEY',  'o I9^M~x}NiDH,;~^+U9{P/RWE6>S=<XEdxp[?pJ@NH#X)hRp:p`:d*5bbF;8@,o');
define('LOGGED_IN_KEY',    '6=PX5-re+gge3FhFN?>Q$K|,YJ.}IXZb~Yz~V(3v<HDK^w7^n2,c?ayRe?lUq kS');
define('NONCE_KEY',        '`QT#0y3e<D{=o#+[M&-u%`e0[hSnGXXSP,(Q+4IIAxKiPRn/KG&L-2HI$+G6%1-S');
define('AUTH_SALT',        'v}fXlb$;T{CnUHRk:j(H+5wPq$)IP>m-d|Cq?)icE<@)eD(#F,p]vS0a2]qgS8?]');
define('SECURE_AUTH_SALT', 'N6;NUr&6um63-A4W!irM86|p%R,KG@,FVm3$_IAvqE}ZDLe$_*9F:-L0(dp;XgIk');
define('LOGGED_IN_SALT',   '`:/s,gx8>8ld*&!t3b8$8mj@JIJ[C1s[H#HlRn/6]%?q37#zp`?<;Hg+NXwT t{n');
define('NONCE_SALT',       'SJj%]8Bz#,N75od-__iUY^{gT7J{>9y:W[&&g<A:Pmvfzi{L#D_<H$=#AF=D_o|-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'localwp_';

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
