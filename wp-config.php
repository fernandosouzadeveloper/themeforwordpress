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
define('DB_NAME', 'wptheme');

/** MySQL database username */
define('DB_USER', 'wptheme');

/** MySQL database password */
define('DB_PASSWORD', '@@Sp0Pa193');

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
define('AUTH_KEY',         '3u2zwtt8fdx0jwi5nmjqwscrfbag5xyrldkppsyecvuy6bccgu6fg6mntdl6oceq');
define('SECURE_AUTH_KEY',  'vvoibdxwjs4pqpg0cqbbrfwnsujzcpgrsuac6sbuhqutyvdnkhimkl9jm7wkz2eh');
define('LOGGED_IN_KEY',    '0eja2qs03vcfsrj1e2phqjnn6sm0sli3xvrzroi0ofoapbosiyz0z2ftduq5n969');
define('NONCE_KEY',        'ei0nt51jw10m6jh3xijk3kxppvizuiwenic0zmda9xjkurmrdnhciz1xdrqs2xaf');
define('AUTH_SALT',        'pnwtilrev1fzinwm6bwtvc20xrw6adwisoxwb1sm0hah8uwqbtuspdxzswnft7r7');
define('SECURE_AUTH_SALT', 'ifndvxkizlhzbfv8fjwvxuhu8q5ctx3d03rc1s1dhtibspqdrucjk1zpk8rmu9gl');
define('LOGGED_IN_SALT',   'vblapgt9epobxjspppkti2eswagfxpgtqwnuzylbjisrcdlbjp90fjkaesh68alf');
define('NONCE_SALT',       '0oz5vnilfsfrpyvfafkykv2jc4mlxsvqilyed2qh8tocv6wpifinqyuqzrosx7tu');

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
