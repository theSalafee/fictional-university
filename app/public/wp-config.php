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
define('AUTH_KEY',         'iZRC8YQYHviKvdeN2k9f6xxcqRTUGnG96vhcKh0rRKtQIq7KQlkAQgjm0ehfclW/jdiGHqpci1N28jRWFGjCJg==');
define('SECURE_AUTH_KEY',  'EM6AdNYRKKCWkx8735RWQ6UeS96GDTT3qgMAMoI5lTcxOk0ZZh9HWNFmnrKF5bOd2XnTSKzC5YVar3zksanZqw==');
define('LOGGED_IN_KEY',    'gzbN37nnh51+lar1wQawVuZTix9Z6+/shxmjIY8RYvdzsDP4fd9Wn7CSLq/WkJRdy+JzQQRwKbjnNpiIGuocmg==');
define('NONCE_KEY',        'Fl5RJK1JN+3HqNrJzyDii3q6rJYFhs8ivGp9Yo3/3fgDwRKpa1XIIlQgBL83hGMonz9E7Kj4W1qXZ9BMV/DIfQ==');
define('AUTH_SALT',        'KyIf/NbMuxuI3lm2DIJO/UiGF9qQ/l70Zvyikfa7CyDfx6H8lAxA71WePBd1X8MlYW5zlGnNxhqinfaRGXThSA==');
define('SECURE_AUTH_SALT', 'DG3S+DiHVO5lFMWKnlujZrsYdH9z3zn7zHevDN7JTydtKa8xZUEH/GABmwsQ3d/ncQQu8uJSZP20acjVEH7vcg==');
define('LOGGED_IN_SALT',   'GzW4tD1KUo5ULsTC4+lJs7jVn5GZ5QYg+VbaPNq+DJkc63ufFDoPj943gkPzdCxBB+GR4ts1Q2FojEiF2OqyFQ==');
define('NONCE_SALT',       'vmw2NBODFvvQDIwrAwUakM78YFZ1dS1nJZOWvRRV/9tYOx9IE7o8j9Osfiyqwv0w7qm2uOm7NEyqqUYiAu5Siw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
