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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sid' );

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
define( 'AUTH_KEY',         'CmA~Wz/~*&W=/fN!DQB&]rcdL>l,Ix.^t<@X`(+A;IO$8/YLwaS_K75@r<E0MdMh' );
define( 'SECURE_AUTH_KEY',  '%I{j$a]0s9MvV08Vq2]wF4cG?L^*y`>K)=#VG.EzwGINj)VP_Zt,AdTtdmS;}wD`' );
define( 'LOGGED_IN_KEY',    '20*g2gvPWsXPgA8L;_1zN[aXrHln&o:RAJ~yh$1G4.70 C&yl)+lUDK}h`KrH[] ' );
define( 'NONCE_KEY',        'CpnV zj7$kA;?eM_GMpbB8@BC@$a][wKmz_dzoN4@eUJYO(]w)!Yfs*gh?r>5<c~' );
define( 'AUTH_SALT',        'ie(8^Yp-B@-Ki+d<_vv+Z]mHgm0STRI/q=DF@OoVD;.kAw?j!at_Pz<:b*grPO1$' );
define( 'SECURE_AUTH_SALT', 't+nK@Y@R93i/ktqet`:Wt^0a!Kkxe/6cK|G1V6R6?dq]>[)Pw|vBw?()OEMg|nc+' );
define( 'LOGGED_IN_SALT',   '2A5u_kX;EdUXfg<Z<c9aXE(A]PA]p.@R5_e -UB49Ba&(mSCM_`5vlDnvB#W-KCj' );
define( 'NONCE_SALT',       'DAe[AwuDpY%HD{ag9iv&D?;p+?b8VElIIcp~s;l{!0z.rVzaCtc2b&eqk)z3[6UK' );

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
