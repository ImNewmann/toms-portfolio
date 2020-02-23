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

// ** MySQL settings ** //
if (file_exists(dirname(__FILE__) . '/local.php')) {
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'tomnewma_db' );
	define( 'DB_USER', 'tomnewma_db' );
	define( 'DB_PASSWORD', '123window' );
	define( 'DB_HOST', '10.169.0.171' );
}

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
define('AUTH_KEY',         'zXqlJPR2k1uuv7g6Ncz7hAW+l0clnmhiSYmvgqw3guJ24xlqd3IrrVvtYhgnK5+Vpshc2RODt2wB1/8XIdN1Og==');
define('SECURE_AUTH_KEY',  'IRJmNTFgYo9CusCB+IgLXK2wXXrS1uc/4hjwSiZrDHzyaB/zxdK30sp/kKlpI2mC8mTVv9zqTokA460VZKVBWg==');
define('LOGGED_IN_KEY',    'GD6NsekZID5bV5bYSTyw55YxWRGj5o6WvDuxX254vbUPFuW/zpVAv4wVDZCz6Dvgw5sofRwcW0fufUtOG/ETRA==');
define('NONCE_KEY',        'oga7X4/rxkKZCpnm0XsIL1feBFm7fNOKOPrIxykFxhKRay9LV4+TeptHoc7OiiJOhjv3SNbWGC8GsYQ7emFLmA==');
define('AUTH_SALT',        'gagdNNIja+6I3OeWKsUvaASQXfffhW18y2S3RF3eJFVsjZD/WxZ1TSMn6iTIhZAWhKYbelgSxAiEIOs087BdCA==');
define('SECURE_AUTH_SALT', '7HkSDRCJaWvoZbWFhWxL5IgYWu2rJ9A9HWDjn15/ophMoYibxSPWhuBQlDWaPpnhewvLJgAjKeshcdc0nNDGAQ==');
define('LOGGED_IN_SALT',   'OBEJqF/O/9NFJ3s+T+0MagfgEHeY7JZMZR9shLCNn2VnvuMUzWcHdyK/PEF0Et9gUM38VeQSCNnTqjSrO5jMZQ==');
define('NONCE_SALT',       'meY1oWkXyc+twLNaYC+BqhN8APZECsGrUt27ny7MdngEHh4XY9KMmbiRjCPyQ0nZTWbGf6zzkr07psAE1teQuQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
define('FORCE_SSL_ADMIN', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
