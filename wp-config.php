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
define( 'DB_NAME', 'bcat' );

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
define( 'AUTH_KEY',         'r>qFW&@G6ObR91z<A;-|[a+cQ_%*B&WL]y3I]jElGu!9&pI94It{Z~),a[IE,Nm9' );
define( 'SECURE_AUTH_KEY',  'm,yyFFsARdW_P&+d -$gZQ [V9k?hPEZ)6PS;dc0_u$TB[1e4Z_.!}X:<%uB+0)]' );
define( 'LOGGED_IN_KEY',    'ks`#Ju-H/Qr<=Ihg) VlU[g4.(ToqC)Jhx.f075xF;!TehjUl0H(AA7zf}uya1cU' );
define( 'NONCE_KEY',        'M$WQ%g7snD9}Gm2nLq)~/:#G/G]gcmCpx;2~ae9yn$`iZE/ey)q!FTU pkOfSVX>' );
define( 'AUTH_SALT',        'V* s;$gwznAe)QUddsUT8jRzE{G8FGmb`Oj*]cug!xj4Kc7d` kdoZjUlw=N@ lL' );
define( 'SECURE_AUTH_SALT', 'kQ?^K%**tg$bm<qAd,1n8a==f~@TFeM36R`4j;/`~aH<2%,)HZm$r}u-+hvTBTPO' );
define( 'LOGGED_IN_SALT',   '6)i7t0,v|@+ZqI@$41Cem{c3Jc|oj]2X@r3:c9z*VM~:P{-xqMI_>|(]M x@75U[' );
define( 'NONCE_SALT',       'dPCCOB*-FUH+DE>L?@uMi]vWVs58WG|V9Z<Pe=Za^]}a7ZcT/$U^<)9WBM;%(]98' );

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
