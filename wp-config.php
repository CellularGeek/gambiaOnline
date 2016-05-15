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
define('DB_NAME', 'gamonlineproject');

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
define('AUTH_KEY',         '(@.EW>ySB[aTs=qwDt8pB2!H*gH)<&vl!b.p|ZeYc9{jP%2XAqJtZ4`# 6)+wqF|');
define('SECURE_AUTH_KEY',  'd3s}[kJa)UIA(l&zk}yy1jlY3(iR&K?@}D3/gxC>!WaVVHHMrX|-/5UKCO2ae`+%');
define('LOGGED_IN_KEY',    'JZGoI<!,O|O?]MPA(cA4B<xs(1)l|8ro7 Z>!3eA8P}hPW~Q8fP|JuIrzFe ]g~A');
define('NONCE_KEY',        'TpTk)s4!j!t=1Vzw0r.O3,HzpEu1FQD9G.>-8N&fN->Kjke>bonhM*<kj/(3UfGn');
define('AUTH_SALT',        '*C5_T^t)jJ2jdf2UEgd.^q,IMHZynhSr-&aC+0i5^rT~G#4ztw<[ax)y;zKx&}wT');
define('SECURE_AUTH_SALT', 'It34IsA=lNm6xLc`es]A,&2j[T?y0+PPSs>CoJAn4+(o&D.w#)EM3!$*(L{gRC=s');
define('LOGGED_IN_SALT',   'pu@Mf]sR o!;ZXS<+Z,[+lq_F2}Y/=R){TS8V^C,6HT/AZhce?0eQfVfc7d3VTE@');
define('NONCE_SALT',       'Y]~>7k&/kDl`{4YLQgPBb{2h34)H3d(v*2U/CvW7Gj/oVXp]u+:;iiV$nhR*|xY4');

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
