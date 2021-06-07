<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'todonerd_eightstore' );

/** MySQL database username */
define( 'DB_USER', 'todonerd_hassan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'abc123!"£' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|!HkiI2:3.7fB[uk-T<j::I](cTNc&8j!wB~8aQ<o.7of6EOP-1h(7iGYot$EAqM' );
define( 'SECURE_AUTH_KEY',  '41C`v%uXyqW(4z7Xf8zqW-!*ZL7Q@G)[81B)u&]=`H*pi#+*lkP7R]-<+7466)]y' );
define( 'LOGGED_IN_KEY',    '-VLk=:OGOCFr%f7j=KiBi#uof2hfoTk_Q.?mWZ~R24=LvH[sqDYOG##VOY8VJw,i' );
define( 'NONCE_KEY',        'fsRD>76Jn5Lz.2W=~=jW@%3Q=C:&qb2irg*sawb;-(`i4jHyUGYe#RCip%v|<Dn(' );
define( 'AUTH_SALT',        '>+g%2p%!!4gCy#e+g9SI0!2qmLwb0$9!FYP|?MR/6ca3AzR~@@exh,5LyxIgEfwT' );
define( 'SECURE_AUTH_SALT', ';Am_%#X<LfVPc7{v*TR PvGtr0G/E$Bh)#dS(m_PAp_|sCt@>p+9aQ+p[NbGVB1~' );
define( 'LOGGED_IN_SALT',   '71Ek@fpKx.z`UD#!eY3!qMv%YXNe%_gPO7,O,+#GeO*aJsdMWP[&xF,98zMR8e(&' );
define( 'NONCE_SALT',       'JqwS3fbhCk[U@Dv3(.P`BSFbF`n(HsAN}$as2:J[uj~_[mRbzOu!EVg5Wr7G~K{7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
