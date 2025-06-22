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
define( 'DB_NAME', 'wp_food' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '&43&4Y<W!8y|s rIVH{{[oB@$#A|o>/JxT9=D:<G|T><]0MLo}Hi}AvSrxnnGUAX' );
define( 'SECURE_AUTH_KEY',  '{^28bp@`[eR][0(E{d~23SE?F)qtiIEfF@{U@v-V@c`KO!L@UwFl}#QB.7X^zEj#' );
define( 'LOGGED_IN_KEY',    '8Hus7lyxxeh%pM2IzP)5/t$]zh^^+KM(_lZw+pp*$EN_~6)Euf=_8jdn>~i5WcFJ' );
define( 'NONCE_KEY',        '2o-MMfPT#r|/Qvj/G~z6VeWP<Rv;&$Y]F^y)BB@6O4HT$z(#ToxllK(fvL[ieR4G' );
define( 'AUTH_SALT',        '!#h+#pa#EZku!s6i[0F[H!+v9:k5%]ME t+YrM%JVG_VR}Z5P**>!)Jf!XCbk)g0' );
define( 'SECURE_AUTH_SALT', '`?uNFmy77G}xOCLEd}]aZFZ:l@AO!GSBuJpQG-EO8[ C>@p<{ULKLlM5COA<P;6?' );
define( 'LOGGED_IN_SALT',   'cbY|:Nk(4,DCCzjfNPw?N&f; MR;Qy2OJDIV6~oQbb0AA*zX~%$t&}B+=<PZ><( ' );
define( 'NONCE_SALT',       'C1Qg`25KWDBr],8sF>MZq&c^xv;kdq,RlK&;]Q a(D7>J>=SVfy}>v&B8]H.C_+_' );

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
