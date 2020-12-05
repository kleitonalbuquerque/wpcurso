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
define('DB_NAME', 'wpcurso');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Marian@1206');

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
define('AUTH_KEY',         'qlAzCTVc^JYfG7Xov9+F=u_~DZOhaCwFt(<Ix4BH5r$He,H5@U$`pe$9dnscc3kt');
define('SECURE_AUTH_KEY',  '4c_we|UJ;IkV;b%~!W5}N&yq%-LJ@.9u`F !>3e2mm-(+)bUeIHl,fffhecelc%8');
define('LOGGED_IN_KEY',    '_Cw?t5NZP-T(o2TYg0 v-SCX9|D00_:qpV?yZPU=OiQw|X.XTa!&[6DS>#e!EWa2');
define('NONCE_KEY',        'd6olMK/tSO@p*~$8ip_d*wqz&g+j+$!Iq3dQ]Q:IFE0:QY1oOT7?MK8s0-BxpK,Y');
define('AUTH_SALT',        ';T>V B^X8k$gVs.],]!p^n&/~MfP56+{i*53KC4Q1W[:d{c]jKK=5N8;)fpHZ!>`');
define('SECURE_AUTH_SALT', 'ncp }skqFFIY=uoUF=2l .2/_Q8v59v<^U%/]#~j;h{g8: {GzCwTGv?)Ww}xj(,');
define('LOGGED_IN_SALT',   'APxsuq[ki-f&l:EP[?FSD5kHTMqsjRsO@NG*QiN({<<d<]Ld@*o;(BIN^rZl.4i[');
define('NONCE_SALT',       '4]|A#<]V8-l&:SrC(/Mq4HE)O1)^]Zli-l{m4yPmHUb6.$M,^)DfT-}xRyo{*y_6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpcrs_';

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
