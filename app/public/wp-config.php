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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OdmZl9/0l82H4QbeS+wNoeCDGeMzMf6FtUpu2mckC4cZ5g4/K4msmQAvSkbSH1M4p3HWlR04Szdg6ZstRj8cvg==');
define('SECURE_AUTH_KEY',  'kQioPnByB8eu8liV4bZ5PEpNazY4/NxiLTBa5lzAz/4qmmmPArQXOsZtmwOc4ezkgZsUNeUtOE4waw8p9G28Gw==');
define('LOGGED_IN_KEY',    'JOD+g3BhioczYaBktMUkkURIOmDn9/U6/3UPjO2zyQ54ejzA7+PKZEPXsrvjYTCWsUN0NtXxDW1MKZGVWgy30A==');
define('NONCE_KEY',        'yawE/oIcj0UoQji9suK/VhbIRaqgpMiEIrc5jSV61U/mrZzmpV0HoNGVYjJ8+crZ6a6fPYDcLl28p3FxYL6X3w==');
define('AUTH_SALT',        'dp33egYY8tJ11O+ZQur/1i6YcvBKkYdswUQNVGIcojihzj8WAjD0n/h9GpdbiiYpeZ22gUXcKw3DokO+Vs83RQ==');
define('SECURE_AUTH_SALT', 'sazoHlfGexdV+Xmg97ouqJ9hze83ZlblgyDJssg/SYs49qOgocpWZhtBrEPfPYIsLXMB5A5IvNGY3lwyBOjocA==');
define('LOGGED_IN_SALT',   '13Rp4aImSfGyWbmcZynCUAbA4sUmIMrOin5DbavlCjg8NfLSZrF1ceNA3LSIdxNkUmSheGhGhFAZLxsWUxepXQ==');
define('NONCE_SALT',       'kadl9kwyU5TTT2zfxIM6DtuWb0DNvUK7yBUQ8jgrq0CtT0Clu1uW21xvFMj1Itba79LN4WWPEONmPrwcvZKIDg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'plesk.clientesmentores.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
