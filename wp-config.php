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
define( 'AUTH_KEY',          'h!n^e>3@VDKB[RU[R7Cmw;M`VSiSmw]WG@$bmS&WD@!#P%A{[z2!0iZ!v9aw2@r&' );
define( 'SECURE_AUTH_KEY',   'FziW>-k=dLQH0c]Qh| SF.h.ZpP~7HU8><7r%+J7y1 v)L-;$L0~`?gBro>5SA_T' );
define( 'LOGGED_IN_KEY',     'iau<g_9WS~L!z_ai/QfY|ku898^_GR){ZR88I[na]d$]M@QnpWJBmO*1ZbD0>2}(' );
define( 'NONCE_KEY',         ' sZs]0FupBn<s<rP2|]DE~XF9,Prd{6TkWe[z!?}B^.WAnWl=Vi]S.V| Y*Z>e`p' );
define( 'AUTH_SALT',         '5;c1R-+y35 A7LXuB})J+Uk.)Mkk]nP&iL)Ez=zBUE+wRKQ%Z(~$j*1w*; V4[.w' );
define( 'SECURE_AUTH_SALT',  'bj&L[gO?mlL<i2=S04O!qz+j}za4I/rj<4dl~x`t,+k&/ty[(UJZq>D.Uyl(z]:v' );
define( 'LOGGED_IN_SALT',    '_&_1_xFjWCTrPMss^:tP<{nfSX|12etvZJs0gkV>|/r*1K7#k8V2!,e:Oh5PEs.P' );
define( 'NONCE_SALT',        '{)3ixr0,KSBv dfOA;}^?,.=@2u?SNHA|1~w/17YGA)}5#Q!^P@<dYJ6$R!rz.kS' );
define( 'WP_CACHE_KEY_SALT', 'jf;#yuN`ET lfu*&:Y{F>3m&z`UY|Q_Uq_PL?<&.VRd=w8Y`noE*@%mCWd|e%qHS' );


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
