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
define( 'DB_NAME', 'woodd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'gf/2Iy|#uw1?Z@haLdtRu4LOo25]w<9j9dRq&]c$1pumE<@T*mc`~A-aS*&U=@3N');
define('SECURE_AUTH_KEY',  '_d0_ws+#,9;tLjaQ0nQwdQUtR-./h]tPj?xt8Ixn3Wi34#SCOSK/FDh(,QFnll+#');
define('LOGGED_IN_KEY',    'r)OU;3u$m|ce=M@(V:{q?|zH|iQyBflYhQYIVZ*fBje<rth0t6!nD6SU0tC=D{+u');
define('NONCE_KEY',        '<0~Tu-CZm-Srggauy-YbN$4*4+ %o@c-TO+:~2K?$JQN=7w8QX&KN!R]($&p%sm{');
define('AUTH_SALT',        'T4;-i2R?D)5n+]~ T6:dz4zIv]Q-_jt|#!M|9W&[)80FH4@>YBtcxO)AOhS1hThU');
define('SECURE_AUTH_SALT', 'zDSvaKdK*KMEcpN9Bvxm(-Az.C%MV..cprV|)#gOc}#!&`P<N Un}Vep#$hm=_v1');
define('LOGGED_IN_SALT',   '*zJ%w,3:4WgetF]-c(aL~RBSM4-#ti[~Nd;x`+58ZU|sM#QPJ#S?I:iVW~hVY1K1');
define('NONCE_SALT',       '`V|<8rQ$XkFK5)-Jbt#zo~>>rnx?d_?.hsh778{%-m0ep WZp2HA(aiwjp,_u?%C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
