<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio_poneill');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$PO>D=p[8qh&~]#?~mv9}.unG-A3~zErY#VO_>nKOXAoo6D/Z4|&QL*+[s2nZW-6');
define('SECURE_AUTH_KEY',  '?:g):G^mhnaE&jQnE;LF+8:v-QXJ0XzI(DL.EH-B+X(Z%Z~L|I;5O3NxA;~7l3Cd');
define('LOGGED_IN_KEY',    '%&J([Q@fu:^u&@<T<r~-fC.r|}G7g.(tvcT)+lvk1~<TO75+h>Jt36&(D[=%rN_Q');
define('NONCE_KEY',        '_pT?o^io,KTfwBGUNCb#;y=X@[RYU$QV Z_Y#3%%/qPlSn/fxx#+Q;b@kp|W3zo&');
define('AUTH_SALT',        '/ 9-Zqfdj?wL`1jGvCb(|28i70/g?9_SX0o%W1wNsN(X&M7)|/2LPoL9VMWz~d;(');
define('SECURE_AUTH_SALT', ' j+U8#r*~/F:b4kAo&cg=$C?>11`%FWOkJT=,JSJ<m&~lfY}NDm~v+wwU;>)KG>k');
define('LOGGED_IN_SALT',   ':zQ*+mEf)0zE+k59g}}FAff`[::ymo88VA-7FJJL%+5j#WR^zK|$:{=rtceB+Pju');
define('NONCE_SALT',       'd0BR~%ZV;|tuTc_})acN>-4;SW|F$-b8|)|;|>W5=Z, D_%=#$+m6%h~]+N%5h~3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '41_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
