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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         '6, [|8cyD7t8r@zU>G?%82*rl:w8I?GO_orxHBsBp#w#Mx/DE1O@OnO<OU{?-uQp');
define('SECURE_AUTH_KEY',  '*P<*6ywd9Rc.Ks&%b*G s>+#pG_mx];+I)o.v4}-L=D_X`c,h2P[24`JdC*gr!Q^');
define('LOGGED_IN_KEY',    '=E@XAfB|W/?wbAB&<@V$vfg{gsxxOr<h[1kX <*Fh/<Tpq<!@xVq133s~/6EV|hE');
define('NONCE_KEY',        '.dxmJvS_,+@GFscZaw-:?ouf$/C9!a!6[zHS!V_-atiH=+_?Ek1q1x>2avHh`fA;');
define('AUTH_SALT',        'gfN$~AuK7!UkVHmsLV@/VJqA%80AA8r3P`ZpYk>wa^tZI9q!IMZ?dk5h#.y~Ys$~');
define('SECURE_AUTH_SALT', 'KO&hS@b)bu<yx_BH%K2.lsz004=8oX+UU$xDZYK0g]qt2nEhy2![,(-s{`Y|Y;#y');
define('LOGGED_IN_SALT',   'vVxWSs^4K??&u(tu.47SkFDEtv.{m{;<[:%UrGthbCSz<1TNBmTQ%y>S;&+ADOs=');
define('NONCE_SALT',       '{/QK){5PX9RHsxc=gm7^n,|HYo%O#hv_Wff%0@Nq6%_mi+E)6hpG>iW(=ZPx?OX(');

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
