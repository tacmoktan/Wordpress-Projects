<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'iceberg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&v }Xvf!GIYLa3,lc-20Qyt<WS:ttCR+z`H7JgqNQoXQNvUD8dO@Ac[XLVm71u=U' );
define( 'SECURE_AUTH_KEY',  'C^cYDn{>{rM(dCC4Zw|q>f[nM}?)K>thb&hTE{*{8um`}i>S/luA-m^2{gk@A1d&' );
define( 'LOGGED_IN_KEY',    '}jyX76k8L%M^9Q]Q@~Jn4&YxWbg`o+n#b<meOk) xl(v}aOvwH774E-[6q~LR=.5' );
define( 'NONCE_KEY',        '=?d~7KjpCBAY_|u3$c]AoYx8d|}?~]$}Uw4bBY`w^@0uP%:IYUf#&#JpOwK~4)Wu' );
define( 'AUTH_SALT',        'XP2<MNjFij<@IffWRKB G4xYrzg9KnoBKNLTPXtVzwGZ$s?PA`nf`y1+m=R`Nk(O' );
define( 'SECURE_AUTH_SALT', '^@}[0/~v-~oZr<RXeeC$/{m6EBb=[!=O%aHy]Gt1BS,d^#dF`[f4`.[DKOKK[><<' );
define( 'LOGGED_IN_SALT',   '.p/`JX*mWr?}V?x%6#,wOi[fD :C;@nn*B6BX?vbUUY.:*ccPRh):lPkbD6lv.6_' );
define( 'NONCE_SALT',       ',5/S|P;v]/o+ER<GP-)D>0.A$NNf 4|5X z0%IE^-Q6VK7X:#>T|}jayR:vz+Z S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
