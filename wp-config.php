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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^M}6`!Fv8poO?:jUvo~f--d#fFomJ>@@%ZKkEhn~X$J/z8 O/;XbQA96cWAVP#&n' );
define( 'SECURE_AUTH_KEY',  'UQSzTfT9hz1bT-f~[VrYf%7[[8}-yabI~$axk,AC1<_449W0wA,C]-%WFf?m`EXg' );
define( 'LOGGED_IN_KEY',    'QAqwncJ4)C)`W<y{{#b8{l&Kk_NQ-!{?k,EMDv&NBg(pgBjc$BO^*H8^k#UK=J>I' );
define( 'NONCE_KEY',        'kq)y|I@Ieu+3)`h+?oF>]4Sd{9;F>`<;m:p*>ArE8|i)$k]Z;WHgKj+%uIWHO,6G' );
define( 'AUTH_SALT',        '/q<B|{iXjhTI6n4CUN4zPQ0C)B+YIJKCe(/;(x=jW3@b*!kM(<N+o^Fi75P[2)Xe' );
define( 'SECURE_AUTH_SALT', 'Fv#LU$L<[0W{NHxBI&v|tCa>V XItt>ieWRYKQ|fl)`r&2[Ln,0(QCO8tT;C*JYv' );
define( 'LOGGED_IN_SALT',   'E7_<rzH8vHsUE^/h~`-U(1hh70k;O9)sLsah?&{5B}=W@f!gm9/LO`Nq8rRvPDh/' );
define( 'NONCE_SALT',       '2qxk79B>!hG;Hzauq>pd~5%NyIL7n:USvr+-1n8l)Ze$6~];~):FB5.6N*2ei[<a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
