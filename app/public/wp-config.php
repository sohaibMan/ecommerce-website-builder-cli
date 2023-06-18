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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'G86gfBCRYeTSZvjwiiKNA9rj50Cm+s3exxhNbQDFk2LRTSZcZ0l/oBZ5/ZIew1A+Q6rlc7UgdLqr7mUNLmeUqA==');
define('SECURE_AUTH_KEY',  'AogbCqRqVootYxJyzExXDP6vKjRaL8NUyezphI8V10h+RrtX3aG1PhZhzxDoqIoa1cYvnNE16e5bVe5RkB64dQ==');
define('LOGGED_IN_KEY',    'Ha2Qo2HUm/khtt2bCwWXWH2ewEtC2UN0i0E+0Hu6wyDebjoxqtXoUPic93Gq+eiexha3HBdwjXudyuk4GWHD6Q==');
define('NONCE_KEY',        'SszyIZCjawqLHwTRmQ2tdQuJ+QIJ0ZaXYtnwsUSGZpD1HcaR20P+QhlfsSFZIXCNxqnvogNoojmRtc8Kb8pF2Q==');
define('AUTH_SALT',        '+YmcOItvzwkKTnLS5uyvCTOsaHsT5eCz/GRBZcdJDSP6lEP2uDn6HZyqHkA9CjMJQZgPE3vsPQDnHmXDcq7VJQ==');
define('SECURE_AUTH_SALT', 's2fRgE62iiUB6O/IDooPotW+BpbH9LiLexDiG3OwG923QSLbq/pOtBWFcJtbWjCfU/i09TBpTGpXDu7J1XQkwA==');
define('LOGGED_IN_SALT',   'fgBoJLEnzk9RJXX2bI4r1VR1ZyWCwqemDwVm33KiqcIianBiSD5ZhV3LYrtZf9vtAL/opRck683Uooe0mFaBAQ==');
define('NONCE_SALT',       'fk+q/Yjx+0K5eJXqJuQ85vfHMuf7OUM6fqgg5UhjWRb3uJh9o6Jr/yscOtM7UrX+q5UoJ72EHfuez388oePvTA==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
