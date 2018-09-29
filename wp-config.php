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
define('DB_NAME', 'accelerate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'vgJG)j>`bV~7l$u9mI^wl#Y xHDp(S$w78,ap/Zk1AsB6ewWbWraq?gAn+9Vo0S&');
define('SECURE_AUTH_KEY',  ',_aLDSQ-1@Gg%Z+j}!7iUN|B4U+zz9]9~PV #Lm!4lg2Wd~|fdUK -{O>POyKR1s');
define('LOGGED_IN_KEY',    ':@XnY@Fz&t5&a0<)`6)=]U|l;*x!3d5II.3_8/ `DI=&Z}Gzqa+^$(f9WnQ)|c11');
define('NONCE_KEY',        '-aTkNRhS|1UymbA${v+@..w3cm3OA#rgX/a/Ik:H*G|.{*@CBo~ ~Kxp<V.3upAY');
define('AUTH_SALT',        'bxZmO{PNSy9,!**C^=cC;?7fsHZx=&xgpZ2DB7J,K^H67|4)fPaQ.^@>6u]B@yId');
define('SECURE_AUTH_SALT', '(tb0T8qr#3}.)&KdbAs)Z(mfUcyexL){JSx~qzCRd|^1:Hh<DhG0NnS){MwXP`ZU');
define('LOGGED_IN_SALT',   '^ Q?TR`0Dote7JA$k@YwWL#CAfnu4.0L3E/KZ/6Sm+TM$6!z~VZ_2C+([IoJtl7/');
define('NONCE_SALT',       '@g+sZ`3NFeJ_k!w~Yff/|WB6i4*Zaf-^8!wE&1W^05N!l77w9x}/=qV9%gvk:Lj{');

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
