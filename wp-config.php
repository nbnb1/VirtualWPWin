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
define('DB_NAME', 'startwordpress');

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
define('AUTH_KEY',         '{{~)#-0K2U!nf78xsP?E@Ko0~3n5&6_BhXvQm:{u`/wM.2u%t+<jq_} ^?Lp<Jy>');
define('SECURE_AUTH_KEY',  'K/P/vh8NDiD_6K^6@KO)n{^6J`u>zz51=`{Vq|L JMPKR-#~+u-X9DF~PmP|@hGL');
define('LOGGED_IN_KEY',    '?x3c0#;?P_AR^JZo#WMa6^}Dz^TzGU+K>*nh$TLW^%-P-+{)zs8!Nno@x#,g9Y][');
define('NONCE_KEY',        '_C4B-4@m*/s73wYuN:g/>-t9dUx|yq~Z:-{-b)p+q)d*N`V=>h3*Um3Y:ieA}^Ba');
define('AUTH_SALT',        'x2i9suM(mH<M(p@8&ztwZV-BX{I>a:Adb}*0DQP-[+Yr9lWYilTzQ+1X|(,;ND*8');
define('SECURE_AUTH_SALT', '=7tD)K$zOBd[hj?F#J|xHO+#l zSGBsI`5|/OjGHr#aMPkn-|&Dy-aRy=1>;V&FP');
define('LOGGED_IN_SALT',   'FjjL0wJxP IK(cv`b*3(xd7/=eSSj]b}|<9oA5++dsc#S2_I$_gu~IZ.EV=dE|}v');
define('NONCE_SALT',       'sKNG_JY:rSMS;5e[&%LANs;<Nv,l:X6pTG)-+I%Hc!q?PV-KLw%=XoLsE:VWmB8-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
