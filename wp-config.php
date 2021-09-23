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
define( 'DB_NAME', 'CCSIIARC' );

/** MySQL database username */
define( 'DB_USER', 'CCSIIARC' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sikadi666666' );

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
define( 'AUTH_KEY',         '*wBfpgwj-5D0]}~UIig$*8_ED06`z2htWN5Hiaz_@3KEUfKWcU(l9$$!]M]6m&JO' );
define( 'SECURE_AUTH_KEY',  '#e!.^8@/s3cL7Jv}XrWqEAbE|BbO%}(/_Bw,Rh&1;@6-*U[<1d@=7X}&[D=D9jy>' );
define( 'LOGGED_IN_KEY',    '~hLFCLfoUU]ffVzKr#8Tq>Bp4Q=<E&DqzCvVUc._mC]zMkYKWVDvKXd@N:(p4O}G' );
define( 'NONCE_KEY',        'b#4!P;[D =}/ob0W9,SfCvIp=y__eLIfT9~#bVKtjFCZq-]D@2.>9]Bx2?tSi/|v' );
define( 'AUTH_SALT',        'XE6<UT6DE[c67c*xOqhlERc1(8r&9IwD9G1Si$Sg5>I[+cmG{6_ER(J.ZS1uQN%F' );
define( 'SECURE_AUTH_SALT', '5rwt}6uzl7y}Ac?;@tUa%byx,wK/*7$FnYKtl:eL&(R1{D@iiJg_WTqsP+o^PO%>' );
define( 'LOGGED_IN_SALT',   'huY)/G`lQ+,ot~D^CKC]HVT3gNOTro:nAPBVCH%|4Nx:T5ugb:Uas3I3*j%9~Yyj' );
define( 'NONCE_SALT',       '7>IwSh8D(YpH=<JJllNP31Cr%RR%kx-GSNu,*ica12$>P8>/3iJ?awZ.HW:ZHEl{' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
