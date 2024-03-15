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
define( 'AUTH_KEY',          'eaTR.5]z534!ul(8#0=7^>iL/MMN}Ib<Vdo|r?I^waJQ]&Kld_tbQ@JUc*lT~zS3' );
define( 'SECURE_AUTH_KEY',   'g_[ :##q4?I#:G*ds20)+V@HQ6W?|}*5VO]g~R8Zyj@e+f~EcCf3]04I`M(iOY*Y' );
define( 'LOGGED_IN_KEY',     '<bTE@A4m{5r-,;wxwrx/,W!FeXW<@wS@Flm=9w|W [w{,+xPet]$YE^JLO#R7j4]' );
define( 'NONCE_KEY',         '4h9C5W[b*!2>q#-^BLe[lY`_N9#p3FkkJr_a5~rK+M@M]7DFdF7)$_`T[5rMLyZZ' );
define( 'AUTH_SALT',         'Z<zc=zhQeuJiA28a^fq+fl=Wu#c5I/P+ja;VJ38n:aPQtg)v@-.r2b 1DZ>_8hPn' );
define( 'SECURE_AUTH_SALT',  'Q.31iz(5[p(b;?0[m8;B}$RVuXT`~N4^xn(BO8k!%8Un,7ccU5vS_}?x}RuAlOB4' );
define( 'LOGGED_IN_SALT',    'Oay`AYWKm./vK;%X!WjlE#7O^S-4pU?gU!;BMv=K>o[l2U[aZtD/nu<z5_y5m8mT' );
define( 'NONCE_SALT',        'k5jJB6v.ll2H|^< m*Bi`r3G$GYxc_a 2Y4}-lY$,w:`B*RQ>m|Jud/-4)]t@M/P' );
define( 'WP_CACHE_KEY_SALT', '.S%M.K7>r2*6v#hF!76v3OQW0!{uV!.}=l|TQJ8g6.6X|;j :ojDaR{C=)#&sggB' );


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
