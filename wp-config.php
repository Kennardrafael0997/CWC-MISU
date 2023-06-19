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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cwc_misu' );

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
define( 'AUTH_KEY',         '~EQ;[JK}X{&n0W^*HXn<_2`+x}Xkcg/@[C]^Y6G9lT9hmNG4B_BRKW:i=t00o)LX' );
define( 'SECURE_AUTH_KEY',  'NBe0~UmL}A/|nBpx=Wa9gSs%m{wQ,cD^tKhL3qBv89l^H-vjBE!en2[F9=pXXb]:' );
define( 'LOGGED_IN_KEY',    'gP~VAmbr_;aIAuhFcmNo3YN>;7!y[{E&>7*+$$5j.<OL#8JTUhU!e#hS6K{AU7D-' );
define( 'NONCE_KEY',        'Lo.}Uk,1?_W[]E_G5rS%WHYEpu*:)WP&Cq D9dqRR%0,baireqci?&CWQHp0~C d' );
define( 'AUTH_SALT',        '1~Ry*vdAyEy8?U%{!AB0$(et/;F)796T83B&IZ>i_fBg JxRZn:]rq:^i!oCyDaK' );
define( 'SECURE_AUTH_SALT', 'RP^ F#D0%g,w`3=.:>!hd<OB!Gu3()i1C?JxcYzLf/y#hYDUV$E!<8&9sd4CJ^P.' );
define( 'LOGGED_IN_SALT',   'kdE7SkHuqOc+u=^#8gX uLM=$,1xD1nzm{zlwact>Zg+LKy6`NXJHft))LL};U6J' );
define( 'NONCE_SALT',       ',m~A,cxYtzIUko4Mqt5T5P2A{t4%bW6O`1{L6vqQ7fliq(ksPpOYR>akrR:uM*[T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'misu_';

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
