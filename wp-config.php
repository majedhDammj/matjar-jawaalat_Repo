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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'nh@BxVFSVqG1}~U5{_XYC&a]7L8pX.?R}E4PSC%eejoy^Ls@56H~Yy=}Fy5S%/e$' );
define( 'SECURE_AUTH_KEY',  'gXvwt:hd6PCY7<f-]7A0<NGw4@&r`tS8P_`^H+Zzp]Oead`D08NY;x2pgMU?>d/#' );
define( 'LOGGED_IN_KEY',    'O#4ZL*W?{D&%OaOgP!(e)!;1zvvLlm0$V0/ZuB^Fu2VazRvwKfnMZhI0VWmy/kYm' );
define( 'NONCE_KEY',        'ffZs.f^(&O@}r<,BI~MJwKZ*KKjaNfq6#n2F<?tuZDL9Ko-[cT)K^o/U-CUdO{H@' );
define( 'AUTH_SALT',        '13kI{SBon%;9^V_d00K+#~1H0M:0hifYDL88ceNT[,0 -C5?QL<rYW;W rZ?|V66' );
define( 'SECURE_AUTH_SALT', '1B,)=@mnfOLcUxIon6Gsm~UL_Dw#-d348N[}dLGS2Dzn_Wg^i[Jg>9p7uqm2cNvI' );
define( 'LOGGED_IN_SALT',   'j!WM?}35Tt$%E<+[jJj`:0?I8MkF)U0U+eWU@FO)vno*o_:iYzKbl_ [N3d=3i<J' );
define( 'NONCE_SALT',       '~gpo$0r b(H?YHfH`,pl)h%BZ48&GVK%_a`,ze,IOu,$HqV*Vc]1o5W.jYsKKm_T' );

/**#@-*/

/**
 * WordPress database table prefix.
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
