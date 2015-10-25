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
define('DB_NAME', 'sweethomecreator');

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
define('AUTH_KEY',         'VysFMKFqnf[jB;oHU`QpZC[jMAY|,P|+IC9h+wR,&X7-J,yO;/7b(Wh,3O%2zMi<');
define('SECURE_AUTH_KEY',  'x=K|jpEX)ezdxE+qEts5zc%sF@HBGCJi7n&V5!x+$E! ?|H!Og_4w@}Ga3Q2m`nf');
define('LOGGED_IN_KEY',    'qR6/^~:R9TL&pI0D/P,2<IS7<). QOE}`c(5kQ+Y!Db+) _<{XqL})|#i9aGTcdo');
define('NONCE_KEY',        '/0=y,r6RJ=eMZ,g-L4$ES2_*Qe9*~|Y@*sAzO$yfsa{+Xg8RM^>L6NVUcF4a5=-}');
define('AUTH_SALT',        'n];!?Y4IUP&oNf5C2u7,stVx 3Ow;~NTeLQ]Mw_-w|{{nNar:LSAnPf70r-S<kaz');
define('SECURE_AUTH_SALT', 'wUuxr)|)$/zP}1QWh^}F?i$t,Pu+ylE= B0oGS4r_ZAte1+Aj{jXZi48Jk0]6%d1');
define('LOGGED_IN_SALT',   '_EVezpMl`~h`JjWlEI}oC_f(`IM3>@^/rYI*an350uU7p5$G@0cLL++`YZ`7cw|i');
define('NONCE_SALT',       'Dd|)T5PTRwsL{BID2Ib-.6iWqW?/h{_[0+0qQ;YL>Exqpb5YV~nY9pP8ZFzavT60');

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
