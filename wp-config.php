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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',         'geHuvLnI 2wS|?Ch$t*eG[/ACqkBN556CLECu*N7yJ@JE}4!{!gxW3Hq!Mtx:)v%' );
define( 'SECURE_AUTH_KEY',  '4$ qAqyyx$1DAgb:PW8bBROAt}sPB7J-Qh 6:}XGB/~ML,;TIIjhDr8BnjP_6kp9' );
define( 'LOGGED_IN_KEY',    '!XL:A}=Bk6u^q<~C&g8nj`xpK;P<#5BQ^L]-{gNt$ cmL$66|uU?Jd1sCtSYYSU3' );
define( 'NONCE_KEY',        'XUFsDFHlS,q=elYhf+dRtLKR:$*FMO&3pfAR7ZC&WV+&1nMrp~kr 4`V!N+ }+]b' );
define( 'AUTH_SALT',        'KrsDC@y=7CybnmusUzAtHBpEk9D8A*0ufT%ezS.x44 Ln>L>I^=OAsL/PMuybSQ-' );
define( 'SECURE_AUTH_SALT', 'Bq[iL]al.,}}y,/5jcDFQ= D4/lVumjHbOt}XZ#<67/WJzZ?5J%((?$~dI{^`9eW' );
define( 'LOGGED_IN_SALT',   '8}QrhF{/CT$I&5?OjUA`$*~X)U+V+^[Fx-!^`ZfAl{(l,N@ZY&f2wy;v{UXKB)pK' );
define( 'NONCE_SALT',       '?F*y8r,L^UQviOC;VWIY$Kxyoq.:Z66w5?T%tQIix*#hHxVlt2x;f-?CPV~,H@sE' );

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
