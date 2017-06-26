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
define('DB_NAME', 'working_wordpress1496960437');

/** MySQL database username */
define('DB_USER', 'working_43');

/** MySQL database password */
define('DB_PASSWORD', 'tz7TVWf4');

/** MySQL hostname */
define('DB_HOST', 'vdb1b.pair.com');

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
define('AUTH_KEY', 'pvsPJ8jwFtNSUUCfFvzz6PsgEpk2hAYPMPb5mdsNSDyUz6z4yMRiS5XMVqd9JmjP');
define('SECURE_AUTH_KEY', 'ezcB4HeJaGs2LtXg4sq2N3ACMWnufznGUG4VZ4KAzvGMJ36APYMdTDe6bxFMGHCs');
define('LOGGED_IN_KEY', 'HctqbFvJrhGfskfBxh3Ac6z93bee2S6wXhZXK49dVsFh6qL87PhgmLJzKkK8uw47');
define('NONCE_KEY', 'RF3HPsPwkQ9gEC6x3evWs9GisGGwqv9MgN65x67MNYqcu2hWhcd4LfJGjPSWXSY7');
define('AUTH_SALT', 'hesMAgA5WzYWKDKebBtPQnvNMP6keNnrbScp5AgY85YY2efUTVFfygnDFRaLyk2Q');
define('SECURE_AUTH_SALT', 'YzpDFcfqdAsjL494X3P8gphxdxWy7fEdAjTneqsPmGJPL6UQk3mPeXPi3jQ7DKVp');
define('LOGGED_IN_SALT', 'rRafF3Fs2CBNJeYfAMBcURUF3E99CjsuC5G5pcD35vDZCWQmsfVjDgGwijXLnjKi');
define('NONCE_SALT', 'SCAVNRayhNgGeUeMDv9gcsYbHf6HHMt2yrvNqNzsHUXuy92NaNVBCWTHMMgABXbG');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** enable wp-super-cache */
//define('WP_CACHE', true); //Added by WP-Cache Manager

/** enable direct filesystem access for theme/plugin installs */
define('FS_METHOD', 'direct');

define( 'WPCACHEHOME', '/usr/home/working/public_html/besthomehealthcare.info/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
