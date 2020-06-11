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
define( 'DB_NAME', 'hvac_db' );

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
define( 'AUTH_KEY',         '>r,KIIZ?&y(IjfQNK}pO:9CMYY97~V8ls.v7O0&yD/qO1Aqad4nZ.YRc^9{knF8w' );
define( 'SECURE_AUTH_KEY',  '0,LXfrBr$y5af_OQJzbNLaoG {Y9vYOcNHy+b[38C3Ebqp]f-BR6Sggj6M%0B7D{' );
define( 'LOGGED_IN_KEY',    '3d;RFp%dAA[>mw{oTY]4qWq1-Exjl<7=*b:D7FTK9@CilV2k#KTDE~GiZ_@K)r+i' );
define( 'NONCE_KEY',        'b2Cp|IkAuNKw?Djt~i2RrmZ^rTC3%qNsYI&AlG!XMVTM-58[6DY-wt0k#:U]^Yog' );
define( 'AUTH_SALT',        ',OMkIwFUUDEo].rCT^ -6epG2 DO@hGNkoQ*UwAhQ4GxS{:}O>0B08]j}AuQMtoK' );
define( 'SECURE_AUTH_SALT', 'kUf<j.@iGTG-0l`+rP~IgyL6NDsqw_Ra|5#|5SNnsq+5`Q-.N3`:Es$=92 aCUY|' );
define( 'LOGGED_IN_SALT',   '.WPsE_U$VOB&=eVRGr?i|8MU3W,IY]qY;r1FFij#aakaMc/p>ZiRR9A8/v~iST1C' );
define( 'NONCE_SALT',       'w.J`W6r8!<sI8UaABm|(fvTjc/4yeGcV$p;W575YR8EGWe[H!Xk?1nl[nA<fl:bD' );

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
