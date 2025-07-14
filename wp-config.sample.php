<?php
/**
 * WordPress configuration.
 *
 * Credentials are NOT stored in this repository. Every secret below is read
 * from the environment. Set them on the host (or in a local .env that is
 * git-ignored) before serving the site.
 *
 * Required environment variables:
 *   WP_DB_NAME, WP_DB_USER, WP_DB_PASSWORD, WP_DB_HOST
 *   WP_AUTH_KEY, WP_SECURE_AUTH_KEY, WP_LOGGED_IN_KEY, WP_NONCE_KEY
 *   WP_AUTH_SALT, WP_SECURE_AUTH_SALT, WP_LOGGED_IN_SALT, WP_NONCE_SALT
 *
 * Generate fresh keys and salts at:
 *   https://api.wordpress.org/secret-key/1.1/salt/
 */

/** Read a required setting from the environment. */
function tepl_env( $name, $default = '' ) {
	$value = getenv( $name );
	return ( false === $value || '' === $value ) ? $default : $value;
}

// ** Database settings ** //
define( 'DB_NAME',     tepl_env( 'WP_DB_NAME' ) );
define( 'DB_USER',     tepl_env( 'WP_DB_USER' ) );
define( 'DB_PASSWORD', tepl_env( 'WP_DB_PASSWORD' ) );
define( 'DB_HOST',     tepl_env( 'WP_DB_HOST', 'localhost' ) );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );

// ** Authentication unique keys and salts ** //
define( 'AUTH_KEY',         tepl_env( 'WP_AUTH_KEY' ) );
define( 'SECURE_AUTH_KEY',  tepl_env( 'WP_SECURE_AUTH_KEY' ) );
define( 'LOGGED_IN_KEY',    tepl_env( 'WP_LOGGED_IN_KEY' ) );
define( 'NONCE_KEY',        tepl_env( 'WP_NONCE_KEY' ) );
define( 'AUTH_SALT',        tepl_env( 'WP_AUTH_SALT' ) );
define( 'SECURE_AUTH_SALT', tepl_env( 'WP_SECURE_AUTH_SALT' ) );
define( 'LOGGED_IN_SALT',   tepl_env( 'WP_LOGGED_IN_SALT' ) );
define( 'NONCE_SALT',       tepl_env( 'WP_NONCE_SALT' ) );

// ** Database table prefix ** //
$table_prefix = 'wp_';

// ** Debugging ** //
define( 'WP_DEBUG',         false );
define( 'WP_DEBUG_LOG',     false );
define( 'WP_DEBUG_DISPLAY', false );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
