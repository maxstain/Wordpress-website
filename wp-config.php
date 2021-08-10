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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'o@uc#,:<oKJe?N;FGUk;E,>.<ahs<;fa/mi&XDRC;I.~+0^ !C~tpCcBRNd.[5G2' );
define( 'SECURE_AUTH_KEY',  ':LG-Ek-?ChIVTn-=YkM9Brlcy7W<6[z[Ay-=)|!K__c7m0&mo>y)d/goD:}5`>(A' );
define( 'LOGGED_IN_KEY',    'T%aq5GN8/=A/<L-$W~efV6DX|Vz~GfKERe,yI /,e@nW$7s[=44S>r0B!^`{VUAA' );
define( 'NONCE_KEY',        '=; D3g]?sY6#T}-G/Py2,:mM#U}EFp0AqaT!i|UYw%TB$3gEYMT~SyippLxDy?4S' );
define( 'AUTH_SALT',        'I9u9PpFF1By+[2)/$k,P.^u4<;zA`?CAJkd)!Ogr[ho ?zzJR6;NdbQGoas/C~7a' );
define( 'SECURE_AUTH_SALT', '`>[=Xp^_Bb<azeINk_CoTp^%5DQ;_e+:w*H}FTX4i9hFYILRbB?u7q>/:4Q8!qA[' );
define( 'LOGGED_IN_SALT',   't-;#ihQ4>d#iCeCzy 0`bX+OMbfyR)mdP+Z.xjOwd}JlMUMnQEfcd+f]lA>diq<0' );
define( 'NONCE_SALT',       'nb@*OX3mt|=OXLe~(q:&g|/7IA=[_2,VfCgRi A5`&Ogx*EYzNu@;Fhe=w.hh{Ig' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'WC_GZD_ENCRYPTION_KEY', '7352cb369a8ec1704e8874ec136edd4d9d1ff2a9f8c66032a8d2a77f5c357401' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
