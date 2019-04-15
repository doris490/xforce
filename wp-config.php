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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nuevabd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '47Fd|& |Asi;PJX4ba;w@%w0TvUSkuY==[4RG/$Z{fg.,ELZQQ?|g(8oQq}]9_Mz' );
define( 'SECURE_AUTH_KEY',  ')1<W+aH&LwEh~o/}-{32%{_S7,o*@;(.Ts29KGr)`<{iQ@bss1vA90tH~y*;a.HL' );
define( 'LOGGED_IN_KEY',    'Vcw.oz#P_ny|K|,MJfm<a6%L)mUB_m%52Y56IA%#TFXP7fe=ln{uZ,/n0c(AmT;H' );
define( 'NONCE_KEY',        'cE9+Ipzy8,7WD@d-rG!obx$o*uz~k0_}^L6>h$<3048Ja@kb5o3Ob.Y>en/uY7t]' );
define( 'AUTH_SALT',        'B:r$Uss#>-%oqPLgal>WD4.svmEd<-hzntW2xoi7XFKMlCdQ=Boq?/I0f8ffY5u)' );
define( 'SECURE_AUTH_SALT', ';Mjf *T)xJ`40Lf}RT.QCYAw;q,//!0Axx1,1S*L|.7J40wMQkrWoc[-!6zP:lJ;' );
define( 'LOGGED_IN_SALT',   'lhNK/$Rr_5i3SC-TE:Pt;eBtY$20)KeqEu&$s_fJv:jj_w/t(P id&lfBMiMN`B5' );
define( 'NONCE_SALT',       'YBGda?p.L!tDztoBGV/G-`Nz!Gq]nB!Zt<w`rxpgLf~Hef5jdUm9>kXTEpo=>l}/' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
