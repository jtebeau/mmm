<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'mingle_web');

/** MySQL database username */
define('DB_USER', 'mingle_admin');

/** MySQL database password */
define('DB_PASSWORD', 'JTmprpass14');

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
define('AUTH_KEY',         '9J~@0|3KKxd;XaWdzbC(RV}A]J%%a,J+|[Tora!kcDH(/oL7:psOIpac7{[;f*$Y');
define('SECURE_AUTH_KEY',  '3SuUX1*0lRn^x$0z^eX7V:G7?Ab6Wo%/3?R#Z+tqb-9xt>B;%B8^AAsZTnqIu)dG');
define('LOGGED_IN_KEY',    '<xS9tY)) WPxP{P_D2 [s[;9=6OePP4K+[zQjR2c4!sX-gVFCevr<lqvzH2MvGZk');
define('NONCE_KEY',        ',/pi+/LU3p[Xe(-,dp;4k(ym|q`+]j,BH>E2B;h3|@(,5NlOSt]EpfMi2<P->-.M');
define('AUTH_SALT',        ']ZP41f5-i~Vfe,PxF4^@u<9w1+uf?3Q n1I[@Q!&u_}ELXE/1gEYj@>&w 3fFlkM');
define('SECURE_AUTH_SALT', 'y&j emX|2o_!b8p jG-qP[-IgI?h]ZiD+M}BQ3*Dasj0104gsL3qX^*]t>{nHKRN');
define('LOGGED_IN_SALT',   '%ImH[Xee9CE*Wo>(7uUp^Fn H%+|u4dA&o#czuLwYd?A?m6YvbEi5W!]GP)0F>*Z');
define('NONCE_SALT',       '6wrG!C>qxPul{%9~|-;#i50IY#%r1VPTc1_*sE(|5/hd4)k(8q=}yqH-=6]%!!9=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'minglemediamarketing.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define( 'SUNRISE', 'on' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

