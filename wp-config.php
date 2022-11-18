<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'epiz_32975767_w560');

/** Database username */
define('DB_USER', '32975767_1');

/** Database password */
define('DB_PASSWORD', '9S6)1L!Zop');

/** Database hostname */
define('DB_HOST', 'sql212.byetcluster.com');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'r9z1molzqzb6cd78cittwwy543a5oedytg39mhiyfpyt3tf4iextdivrylyalvlu' );
define( 'SECURE_AUTH_KEY',  'gk5kpem0pchwhodqactxl3a0sbzvinhdpmm8uzqy6xnslb3ukh72cua7e2ibhvka' );
define( 'LOGGED_IN_KEY',    'j8vlqqc75t4oiih480rnubgaynn4lq1g7l4tdovcp75eizsg0sqlik3qh3jxrn8v' );
define( 'NONCE_KEY',        'ro3ppaobmi1fzik0cavvld2f11bsjdqc8gwe6ywyiwvs0fb2ai63hv7nd5uchuri' );
define( 'AUTH_SALT',        'el6gyk7vwwfcpoyhmevp9zjb6vdb8usjho4rcietewyccrs164y93mxamhpovvur' );
define( 'SECURE_AUTH_SALT', '6e4brlitznk2wwcaclg5ywm1jo6ayddsj25yllqdnjuggo7ddyytxur4to9ubsrw' );
define( 'LOGGED_IN_SALT',   'lvcpomzdw0lnyydcv8vxjebs0siph00m1l26bt32r4mzycejrucxchgtnpyjohgj' );
define( 'NONCE_SALT',       'rosbsphcg1hgsv9opp7gi15tjjlquwij0y3mndzabxxxbgqzetnf5wsrb0p0hyyd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsz_';

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
