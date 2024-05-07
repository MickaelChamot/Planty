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
define( 'AUTH_KEY',          '_-as}.@7Y3Zn3q.H%6jW. tAkB?3V47372H>M!pYO$>4:!s]NhZX^uimt=97:L[g' );
define( 'SECURE_AUTH_KEY',   '`LX~%03HZyI7E90tkH7c[KPxr77{fw4e;^pV=K9MgG5T`RE&Oj2a{Rxc{8;TSSyN' );
define( 'LOGGED_IN_KEY',     ',Lbn3J)k~#.)F>ePV9B9!Ss)k~,x t]$=4bf::Z.8M6w74IX-ugk&>=m?(y;E!c:' );
define( 'NONCE_KEY',         'DaFe`>k%Jom21I~9U`/?4D[55:dLZM4ztpfr[2/!I6n)6XSH]%;lS>^)/WaJRj/P' );
define( 'AUTH_SALT',         'NuAK!k=^d}gCG-X<2S<D$j!=%3D@N.4-Tm)/8[N=x8~tW0^<<4ocO.Bk|7tctwiX' );
define( 'SECURE_AUTH_SALT',  '@wE5(CBB0w~!!Oh#;Ubci-?a+=$-[piO{1L3v5Tw^J^P00wjG2H: {x6~xcZ2=cf' );
define( 'LOGGED_IN_SALT',    '?:|CxJyo~b8Pbxx(Q}~FFf+Z6oZ5fh)>Y%/O{7^y}yFkQ1|4N2kD;Oa,pG(h|%a0' );
define( 'NONCE_SALT',        '!c28<0zfwTxd*d10bB8JKpK~y/H lC|+U/-EE<>YHR,c}6`QKZGA^Tny9tP~hDzU' );
define( 'WP_CACHE_KEY_SALT', 'EJVHLUe$Za27Qh8tDr()$<HXoin}vdC!0S1848%w*vjTm1^H!,{RNhBRCi`M~u50' );


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
