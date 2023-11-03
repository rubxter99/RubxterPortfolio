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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\RubxterPortfolio\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'RLife' );

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
define( 'AUTH_KEY',         'y/4Yf7C!{N<A{E=~du#t:zrVo8a>.;/~)+!3n[xR- ?hy70[_!.YO>n[R^CH&CJ2' );
define( 'SECURE_AUTH_KEY',  'g[S~&i.T+^8z/ECkE)y(uQEZ2|>!v).{KlIZ#CT4NH;8uxnrW{VK!qo&I9RqG%q~' );
define( 'LOGGED_IN_KEY',    '[=RJeeLi~C~w!2O)7u!6W$]3 EiD+Lmu[w[AQNy0=l>`Yds;16AHE21!y.fhJYr.' );
define( 'NONCE_KEY',        't.rgYygH LmGC*9q2We83Ra-`m]h>> PZLJwL*(T7>V,> {E8;`xQ7hNtw+-I=*3' );
define( 'AUTH_SALT',        '^K.bZi;$?[x{9hWD7L]+2u{B&EM!Nh$Bmd_llgFJ]xh$rWuhtx4{v-OgX@u)*3So' );
define( 'SECURE_AUTH_SALT', 'RtR.4]IlHZFdS3|ePx#YXadOD}0(N:{=r1h;_Q2Ihq$7]aVOzBIwSH:JIqp%%xs4' );
define( 'LOGGED_IN_SALT',   'JZjv^=4$tvwbc6iB+Jua_iM}YhSXHRyAfg8INs`H{U+`3DL!DO.gI]SL]~2es0Rm' );
define( 'NONCE_SALT',       'Rk,Stc^-`g(wNL1P|Rpb8w@8xwJOQ*Xvm]=Ww.4sUQKmvfEv~{`*;_}Z:28ec.W&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
