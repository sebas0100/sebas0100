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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '|ZO%/=_z~IH#;*pu8/;/njCj&{`c,EaFH:[.&!)?rVB8PQh@)^iodz,`Ys(GsJ?o' );
define( 'SECURE_AUTH_KEY',  'A#bAP4iS)%`t WnYh/ gVmVj}4u?LWyD+dP$5=NG?&%WcOidQ*To,eZdnWa2&JGi' );
define( 'LOGGED_IN_KEY',    'keOB_}<k.=|}le_OM]Dq!jDI{FVb |NGw6?2*^Ckx5=n[>`6=&Y3M8kLZarN;eOc' );
define( 'NONCE_KEY',        'KX$:)XqeN:HnW-rc/sLJOj;oY`uZ5%6>Oae4!g;b+pNHe{P_}nNXkQV+{1m3UOIS' );
define( 'AUTH_SALT',        'H/YKNA:!5o*]NZB2#D|;&f6rZ?F/_k@t*]5KpaH:5/>Zw|3}}Hne;B[M4{hP}XQ<' );
define( 'SECURE_AUTH_SALT', 'mq!C!>ceY^HGk^*hU8x:ec SASb+1]*AE-U4HYB2>q6E*c&xx^?X_9C#Q#LT+SP2' );
define( 'LOGGED_IN_SALT',   '?sGggGsgh1q{y+(rhWDG(H%@=kFk[T1_=OL+tik4dWy):@2Fm4c[+[xd|FB9Er(F' );
define( 'NONCE_SALT',       'U6dR-G@_woQLNslufgCR`vMek2OG)#F zSa`fHj T]q5km2*^K}!c092FtLdCY79' );

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
