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
define( 'DB_NAME', 'demo_database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':`BzMfDbk&nwy)^WA|tpCi@2)/r&Ew:U1*Hf-Yli!pse+oDFtb|U~^bC8G&Y~VH5' );
define( 'SECURE_AUTH_KEY',  'bz]5+)F)%62Um?Vzpri`f*$u{d ;^*<DrDOmRRt;wLu,MSzI%fVs&Ijd@ZHL9 RK' );
define( 'LOGGED_IN_KEY',    '=;hm4<sWz+i%nmm:H(?7E`8<BR )VjBRiQ%ky:KTp!=x-VND_vXnS!O_2Cqn[8Q*' );
define( 'NONCE_KEY',        'd-90UK$q$n=B@x#.!E[A1>peDOmgOARqXf06-ojBAApq!AO%f437<@nl+91yCws=' );
define( 'AUTH_SALT',        'S{KmrukBH$+092QcC!1yz[Axu1uz^9k.9C<NC,hbB,*r7s?<rN(apzX#1Kg<t5=0' );
define( 'SECURE_AUTH_SALT', 'BMyy1M)94ZD4C|S 2alzsp4tk=ovcDxfO~LexL&5hZI0h#h0QUtbd5VZKnNxN(;$' );
define( 'LOGGED_IN_SALT',   '}bor|fU53m6ZM)hI+vWYjW2[T%JVj9_z7mm#N~TZ(/VJ|1By973vX! *i;+,x@6)' );
define( 'NONCE_SALT',       'Nd1Yx-HnJQ72[KKVRJ>EM8a!6luP|NQC#]_5(>~c5_MVQbesL}CsBjj/ad=VMjZe' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
