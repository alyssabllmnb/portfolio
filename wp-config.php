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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'cV<&&V4XTs!Q_giz7o^N;Eb{!iu6HXPS&O]J$d7hw8T7DA(nd[^o$vnI4)Pcj*U!' );
define( 'SECURE_AUTH_KEY',  'A6GTHxQ@EfI[G[6@{Of_!.iSF$1IOL;NYPCKE)44*`wrT]g0*oe)~dN:![gJ6]3>' );
define( 'LOGGED_IN_KEY',    '.EUuE<Tgyhs/pynf<)0:x`|/sFj|aA7:UnYHLO66usy/<9Eqbmd6)Ly`2Oaig~9;' );
define( 'NONCE_KEY',        'J8zMkggfe$5-WRV)|_6<>e3tO|m&#& M{y@CE=4/Ro0=S0ORe6/<Cg7x5dMKh6%)' );
define( 'AUTH_SALT',        '8>O658*0>%*+Ew1 b$VFM%chdV5V|<EtdY*39Gzf`7pimajMsw5zbwrqQnx2RZ!d' );
define( 'SECURE_AUTH_SALT', 'GT2-Q%:!>O5w.?_?mqa`@{ZdCt;Z2#Gcvr~Wl!>L&E(j;s6$dbW5mnfOXSPgGu3P' );
define( 'LOGGED_IN_SALT',   ':J[E=$,/|Jn8Bh,lXj.tGW]Wi@r989,3P;d>`x[Cj%{LJ5_c=(N#<zp&@mt7}Wr,' );
define( 'NONCE_SALT',       '.$ld]:dvDvf.:sy=16fx,gAf:t:s`Oc7lNbWQP0W:]zPK{|K_Ci1agJ^UDDCK,]W' );

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
