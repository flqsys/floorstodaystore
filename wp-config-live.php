<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'floorsstore' );

/** Database username */
define( 'DB_USER', 'floorsstore' );

/** Database password */
define( 'DB_PASSWORD', 'PFL7nTwwoBqa1mbHgLdH' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'L=Pv{^V4oSK7BW^ef%bA5_D1LV|swL?/^4|z^`qx,C/[tHsc{&+@&a2O]Y}0P}e*' );
define( 'SECURE_AUTH_KEY',  ',VbNZ|zQ-%v9<smJ[YbfUN<8irw9vKrj 2.P~o8-&,@)mDZI1icx2j)?vl?FMIMA' );
define( 'LOGGED_IN_KEY',    '[xOa{~yx*~j e=/:Pu9jh!np9-^t1HNEgJgFJC=xZuzB6Y&aO2`mOu7$uG8>9,Bt' );
define( 'NONCE_KEY',        'C${K>[K!d1ch3BsK1hj6U12va@5U,{4opAinkv.-7`g*geJv<(k-jod/a0a`jk;^' );
define( 'AUTH_SALT',        '?iYBeb#(z(k*DAtnRGry3AZ69cotR-/5)<Fp>|FoGbl$8v*cC>11{KF~Qt@(#mze' );
define( 'SECURE_AUTH_SALT', 'E(3bn[U?6dNBH~VixbBNpA7Z6[^oxa(Dt6y>=_]F~aGouNr6*y5`PoRxvlR-/)V}' );
define( 'LOGGED_IN_SALT',   'scSwC> ^f0g0P|r#L6zNgv(:V;_VR4u&+2x5R.JKFAb,934R|d@~La+E[!x;BJ8s' );
define( 'NONCE_SALT',       'JYf`Du5Sh^fwG3$(;1-s@HXVc>>B-5W@e:SS)fO0EXf}AZS7T/NjH9ETkaHN=%3W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'floors1_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
