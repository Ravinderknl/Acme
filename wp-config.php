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
define( 'DB_NAME', 'acme' );

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
define( 'AUTH_KEY',         'k]-G8#JFSU%2yH+M*H=z1$}*7yu(EPpRnV/G;+Gpge.RV08qF<4GH)tjkV5yDd2]' );
define( 'SECURE_AUTH_KEY',  '-c?Jwmw~U#%-ZWH/|f56=MCd-YO<l)btd.R_!@XNPechr?x`yazzC[IiQR&la5<M' );
define( 'LOGGED_IN_KEY',    '?ErF@~[:>G4/4MCVB9KA~+0%CSplE7j.w|3htJ$Bo4R^.9s4O*h%;.gZV<(piYt/' );
define( 'NONCE_KEY',        'X{K;Bj)eGpl#2 _`YhayT4Y=!=~+WC0[J?Rj.+ZaGEI>ZK=a:ABz-h}58Cqw(iwz' );
define( 'AUTH_SALT',        'BKZ/v;}iWKjT+_M%5ky){6@uJs1}wW*|^.Z[68MlnmP/,oq(P|d+c3t)GN)J}BZ ' );
define( 'SECURE_AUTH_SALT', 'zcYZp#$~d:nO?HvCc1XqxeHyci-Bapxz}H><r#;;FJ;wpuAWlNqO9BmzL?KO{*d/' );
define( 'LOGGED_IN_SALT',   'qe!t2N9>xDMNV[i*M6PU/PH%{h/DhSw*.bz<@+s3j -oe8U@nf0Nw_P_FGBm7P5s' );
define( 'NONCE_SALT',       '([_x52!^R4E$pNGnj{Z1!~XmF^`[B?_K1q#@c0@vuUhFaA;ny#zA(Mq5.tcu=1pZ' );

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
