<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alejandra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's7xFMQ7mc05VO4HRn4iTkxCwTCL25Bo7pDzX067gzwEnZGQPSEWYD1dadMEWOyU8' );
define( 'SECURE_AUTH_KEY',  'o270APqwDz3vteSSRFET5tPYkBlDR76hZIwBmdZKJAAilJURbYD6DBZP3Ax5yGPb' );
define( 'LOGGED_IN_KEY',    'vnNN1ZPeGVMB7IZFEHChZGIaq3CbSkqAObcQiUQ6PnYmRUbN7ctRVMRgtakFr1IU' );
define( 'NONCE_KEY',        'RxSWeH8o7ShS8KJPAAsfW2JlGqnN4ZrZx3iG1c4hXF1qirByBnQYBuybCLsM0oi2' );
define( 'AUTH_SALT',        'ewiaQ3gMAtbKUZHCXTRB3dlo7XUZGQ87FnA37psA5jz40JTr2pSxbzVs2NcHwvhM' );
define( 'SECURE_AUTH_SALT', 'YtPdg9wGHXMKWRuTL5TnTU2Hx8N9L8NVLxkAWTaldfny1cHKICGPIZzZm2n60iS5' );
define( 'LOGGED_IN_SALT',   '7nr8r2T8sj7Vel5EX8yBu6KhXV5ehQvrOwwlwFdypsrTSQ1vD3gNcLtMEqZX1L9U' );
define( 'NONCE_SALT',       'zoON21ySNSKDYfdh8EjTISXheeUGMNxWoRWLsLn6BCewjUYATMZ1HwXsDBqwqbDE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
