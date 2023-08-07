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
define( 'DB_NAME', 'wp_ss_db' );

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
define( 'AUTH_KEY',         '7q9v`:OTD54.$SnwGPrbgW|RBb aO}wpO6{k-k%MQWObJof<s]kT1%-2nuy%t<Z(' );
define( 'SECURE_AUTH_KEY',  '8z)6MQBAlS]}XN~SWzP~Ir?Xj~v4q/w@]}NnUTBPTQG*} 1u=x_tJ*r?}6j^F6A?' );
define( 'LOGGED_IN_KEY',    'U$Rdha_tU.@gQ}vRAK,W^:P5=rd!Z:+Zc!KXs_vRZCA|A:-3(j-CW;n2B*$G/=8o' );
define( 'NONCE_KEY',        '?~Kq!H?u/F&We{S?F;m`E(p._Oa47i&7g)*pV73@yI#/Kke.VM |Z&_z+e%6p]JN' );
define( 'AUTH_SALT',        'G]G[CrD1$nr`!=@8qalH8uL|{WPY&O7^25Fr&GG;ODx{<:/C7iOhqLtA5 ISD5[M' );
define( 'SECURE_AUTH_SALT', 'LKE-sl1&oRX^ @nNr<K}`*@5EgDp(3mf}<@R7?Wv@L:65<)<.]fEv9vu^E(|nH&z' );
define( 'LOGGED_IN_SALT',   '<4oab6vv2:W0uXAL>U1IfFE&n|f 1wQvf,:[BqI<ZZhpnA_ft>eSef1I3;XoS;@H' );
define( 'NONCE_SALT',       'u+N)]R3e^YGeNtnn]#63z.8)m#_jtRIH+NNDu3lmpS3p.1a%pv$lpz=C?gyCJpQ|' );

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
