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
define('DB_NAME', 'minglemedia');

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

define('FTP_HOST', 'localhost');
define('FTP_USER', 'daemon');
define('FTP_PASS', 'xampp');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^iL,#utuz2yJalj>FZn4~eXpP[&OPst%+d%_7eyJU9_d7Zw-I^>:|F_6lfqyS|#g');
define('SECURE_AUTH_KEY',  ' a1[r.!o+u.AE}KAR4.a[ShZZLbX,,(;ql+yP(mZa]M7F0).x4[T[RU/q+]U3sg5');
define('LOGGED_IN_KEY',    'rUZ@yEj:T7[[CN{4+2X(t|1:5-m<|Nv-$W%oS=x8Y[{DXT*WVrXncO(}2x])h6%1');
define('NONCE_KEY',        '0Q;QkM%jKp_72VuWG3IWm#<HWT9P`|ca;Tn49.;W_+S;UR)4n=[Hr1aA%a)B*-Yj');
define('AUTH_SALT',        '$yBQ|p?di?fKC>0X>fQZ4PBO|+LOq!7_`t(nxYGB*99{=1-@(c24cX~?~*:@#-j7');
define('SECURE_AUTH_SALT', 'xj<@&(#FY+z/  %z8ouk;!LNl**cYJ$q0X:g]|efQzcKz7 :]VWb-%^1Fsz|<`Ht');
define('LOGGED_IN_SALT',   'p/T&X2yev2?(iz{GQ2{Ld)& ]w-`.&kr+-hE-W/}wPf]R}6[+uL_<J$U`eFuLx?>');
define('NONCE_SALT',       '!ueZq`/=?LOi?NLL]9!DX0xwQqw7eWi?I#kEO9EcR9kMFfwQOd:#.)B E$och@H~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

putenv('TMPDIR=' . ini_get('upload_tmp_dir'));

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');