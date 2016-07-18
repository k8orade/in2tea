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
define('DB_NAME', 'enli4ngs_wp943');

/** MySQL database username */
define('DB_USER', 'enli4ngs_wp943');

/** MySQL database password */
define('DB_PASSWORD', '6P46-S@aPx');

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
define('AUTH_KEY',         'lj1tpyywajijbpvouzsrwdmxqf8x1mtzxzhh8jd8juvhzpoh8gnopwam1iua1ilz');
define('SECURE_AUTH_KEY',  'uosamitjia6bxmaozxhmqi0bdevulf8zeizoyf6w9iefksefnrq7fdvlwarl98kb');
define('LOGGED_IN_KEY',    'mp6t321gck4banrvbdjb7rojd6fjfjobpn8szrjh2v2f31bwetumvqyztgogaij2');
define('NONCE_KEY',        'lgir0oef8cipake6bu4oiqtcnadtjiguopwcx2m4wffjqkq93tpaf068ewbpforo');
define('AUTH_SALT',        'qeumiynrllygntsa0agddjebcfhltmitenuioh01mb7i5ipgb1z37yootin6gnu1');
define('SECURE_AUTH_SALT', 'kskivnfpnmvehxenduocobjjd7x8q2siywlxr1rggycfq80bf81tyhypb7q5gxjc');
define('LOGGED_IN_SALT',   '8dn3zqqp6pjhiokkdvlzkirup6mzfqkzzqjlusa8mjczd8vsdirrcc2baqyjrqhb');
define('NONCE_SALT',       '7ajigzy07cvbljzh7tphruwsonl5m4cw6wh9yd9ljtlbgpj9ngvjg7qdlxppokii');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpux_';

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
