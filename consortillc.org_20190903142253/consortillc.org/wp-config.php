<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/consortillc/consortillc.org/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'consortillc_org_4');

/** MySQL database username */
define('DB_USER', 'consortillc4');

/** MySQL database password */
define('DB_PASSWORD', 'batman&robin');

/** MySQL hostname */
define('DB_HOST', 'mysql.consortillc.org');

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
define('AUTH_KEY',         '#L|uVxrUef""A`!y5Q6QKRE/@TJj&4QPPrFZC`O|q&NFMId2~8ySFJmtE(SAsyz`');
define('SECURE_AUTH_KEY',  'G+)&"k21DbHNysZ)@?zL4sI^C?x7%$dKlMVA|n0jNXys9:)GQ!MUC3Bl`tLyLjEs');
define('LOGGED_IN_KEY',    '4G?dsi~`e8x$)";#*wO`%`PhzLLR(BHDf7NY2K~KQ8SIW&vy"l:Wj^j*4m"ZbGQ)');
define('NONCE_KEY',        '++Ryn`5kz@kahFjlLePH4IimT90tZxwLkbX#1MGQc!W8k5SG$!IGu6r+K`6n/q@O');
define('AUTH_SALT',        '3gjACzq0:r@6Gy)T:!:`q4KRX"878~G:7"1F71a@I|Hr4YPgdkO*~:)_5&TpZ*Z_');
define('SECURE_AUTH_SALT', '2Y2+W*q2Bzq9p@6O"J/Nk`hje:O/l$p9Zn3|J%ntL"X2/F*K~~lr&_Phl@1kxa14');
define('LOGGED_IN_SALT',   'D%URXMH)%Xjeb||";&xTGBp"BblMX(21FX)k#O93hdOkC+fRPHNH)"8+zZ6J&x_B');
define('NONCE_SALT',       'cz8SoLthW^7NaZAEWw26Xh0`"x(ejql8GytDL"08|xv5e_azLQEDBpY0fEdk9`di');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tufuc_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//Disable File Edits
define('DISALLOW_FILE_EDIT', true);