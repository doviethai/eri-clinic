<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * eri.wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the eri.wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "eri.wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blogdb_testsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'n*_7dhtzb6=f%0S_.LljnLPF$G-XYs91p%_-*sU&F976RI=A20x$4GWk~O<}gMfj');
define('SECURE_AUTH_KEY',  'lBPP-x2CIc:iBl@F8=l.`^Eh[4REj]k7Q.o:56E +MjHq$BHz-O-RN@ld fHcO# ');
define('LOGGED_IN_KEY',    '52GBUR+~sF[+qKr],9Wx;WG< DE)G=nYwKkpx]g&4vimd>W^O=xzE ^uM$5(d;s[');
define('NONCE_KEY',        'il2ivL?h6`MXe[&aN#>t^ACq3-V9[oAv|d]eri.wp c5 ^OFqsz+If?`->MTpc=D=8Px');
define('AUTH_SALT',        'j2~WZOfEnT-y K3E,oOZIA=sMsAsamEilztH<v&X|C?D+>lx*VM+=@Z&%UclDik%');
define('SECURE_AUTH_SALT', '6LqvmTt [,g&8yzIVlK--(q52BXK?&I02*|$;w@N+B7]%t}hyj<#~0ZE!(ZXfI*,');
define('LOGGED_IN_SALT',   'ZysySy6n|3^jq>4B9( |$25|CJu:4,(DxtR>+^W}fFLO_}*BW4Vb:Vko+,/0xlw7');
define('NONCE_SALT',       'Ye5)nV-2s!0<0]47,jrg@ ?x?mQh(i(w(J5U];h[)O%5UjZ/N+sF0-2|(FaL!?/A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'media_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG',TRUE);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
