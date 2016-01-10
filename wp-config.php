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
define('DB_NAME', 'vicch7_about_wp');

/** MySQL database username */
define('DB_USER', 'vicch7_about_wp');

/** MySQL database password */
define('DB_PASSWORD', 'NfYl0Ws7');

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
define('AUTH_KEY', 'U6oDPxVUeVV7wbD8bdMek1Gbp6iDd0D5QxbDEBowvVOQ0lqCjtxt4z9WaNxJ6Gon');
define('SECURE_AUTH_KEY', 'yGD9JYjpRcQQnZfH9h0nLhqQYzViphsMlccv5rfJWYqOC78KIRRA5VKjXAF0JrnF');
define('LOGGED_IN_KEY', 'jRnngvj8RoU29B0F3XLvUG6BQ2fF1KLPrX2OiDIAP6I7NNEYROZEZh3go88qOLxt');
define('NONCE_KEY', '1Byx26UoMQI0v8xeaHwi0KMonu8g30GwHmA4U6M6QomlZH2vRFnAzd041ZMSNgZX');
define('AUTH_SALT', 'NdJ7CPzA5sD7eOVGHiXGm4zNC0cp7o89Dgu8oxaqmBhR2Z71YWPOFKFzqiT8Oycy');
define('SECURE_AUTH_SALT', 'ZMxC5SqBPmduYgCpMkKPPQLgytN5EQKMavbfNPfT70P5lZyF10uWFGX74yZm4zv7');
define('LOGGED_IN_SALT', 'fE9qFcjObVukf9lyCf0TMbzmS1ZndnhprliKwO9ohsR0oXtZTrFYKHDu7D2USmlr');
define('NONCE_SALT', 'I9BD0Y4bD8QhfP0NU4Vcrx9rtGPd1ytr5pScV8NWylnjxZjg2Gnd4V8u8JqXYePD');

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
