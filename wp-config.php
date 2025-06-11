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
define( 'AUTH_KEY',         ')a9@E U=W0:M170zDwQi+V?~c>N$lK44)C&=+tNUw<_Lpu~5V-XU`]^K0Uj]RT+G' );
define( 'SECURE_AUTH_KEY',  'r`V>yM5|zK3rpD*@[;ddedQxV;UEvs0bcbetR[=tI%uc2M 1~S[d0H%:);X|WC=4' );
define( 'LOGGED_IN_KEY',    'H_-$OcnY Dwo1~eLqh7Rk@|M97inx$BF6c>j_T?#I7nqu%0.[2/88!J2G7-[b_[i' );
define( 'NONCE_KEY',        '-]37IOy6[%F^F3_&~vLm=AA-! {g76*7=b Byb>9Iwzp1Y~0E$[l#`sJQ<BaMraN' );
define( 'AUTH_SALT',        '<;L:EPE8i~4^{w<;WfCU+<Kcm&m^87Ve]btzs5UFTneYFq8ha+G@xWR>?pvNiaWH' );
define( 'SECURE_AUTH_SALT', 'f+l/k?{^M8_hVB>)%!/!|cIgc(ad77fA_2K7R$cZR+(kiD*Cp%U4%@@9cAr%~cT<' );
define( 'LOGGED_IN_SALT',   '>6?$Ifi1XGS)cAlP;23`mG~t785,%)L7v1R%;)bu}@Cr9irK.kb.ZT}jk%i@{Arx' );
define( 'NONCE_SALT',       'L9*FUo2X J?s^w&z~e;D*o!w]LD?o.z5Z25Fc//uz-TeB /!u?iHkgZr1g,M#f5R' );

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
