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
define('DB_NAME', 'nile');

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
define('AUTH_KEY',         'tq2`YB(RoeS+k1x|/pzTODdS=,J%_S:R]We7jIN zJT;vFjN:v0?ciRVH.7xl:J@');
define('SECURE_AUTH_KEY',  'bjIs4A2xVG8 |W~SlPKM=x(LaD99j5Y[![jm#L`8whT?crOhg5/5N&IA*i:*!l^I');
define('LOGGED_IN_KEY',    'fSW8uL,Q(sOU32Hz7!ldj_4$tAH>`),&]!0]UtSnKK^z.7p{mY  VqrQ7#!7tt@7');
define('NONCE_KEY',        'VxjlsQtm;3 }%8uNW]TE*t6)FZ1:3n(nbO~}Cl+g4f!!/skOPYGE aIa:N*OkfAV');
define('AUTH_SALT',        'HE%R-X|3wp{c]AImdrgELm<4P+}?N~)Rh1]N9M]~isa!hXB9-Z~I<X`[*$!95~y)');
define('SECURE_AUTH_SALT', ':O[,TOS[0G!z^h#fZKI{G4SBy+}_8x;+1rrDFeNCM19Or{(%y.pla_mNK4@J>!C1');
define('LOGGED_IN_SALT',   '2/G.SA(d;kQ.L;o#W|7@HjjRrMLW!oR|e(2@2HZmUBw!*XD2Y)TQQOlbs}Gqr_n<');
define('NONCE_SALT',       '(r;dMRu~tHsV!V,O$j_!}yHDT<Y/PyA(L,b]Pz2s/5i#r)r+ue[(H1MS)ZA0VA25');

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
