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
define('DB_NAME', 'first_continental');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I#=C<lmcg3mzrOSlwT,ewG%WV SId<K+D;dbe0e7$%`df[E[X8_32lZF+-iqFdO{');
define('SECURE_AUTH_KEY',  'P3G+,{%0;^<>VtmZ0~V. GlL~teMf]X$.<~7t{)CnBo~YPWek@,nN;^O1xI2SAx>');
define('LOGGED_IN_KEY',    '||WWU4z*H0?vKy2*E0v/~l0#ppL#[N5?TA+$|||Oui$R6U=7gWe|g&%w`zSGO|7<');
define('NONCE_KEY',        '^Oj|8iZ@%Ezg,5Q@whDqB7M~+_I+E~b2Nko|E+c{3s+*=c>g<S5DfG{&xPBedZy1');
define('AUTH_SALT',        '#I85k.Ry~(a!.M;.qd1uj/3m/$~#]^f|mfB^4tyVxQW!9dJI8UcE&,yIrg6.+fIk');
define('SECURE_AUTH_SALT', '6Zt-.ynSoKEPO-I[H^-|ni%5k0z/7c5g7^9N&2a3geY?}~p:&yv!yATuL]lL{h)D');
define('LOGGED_IN_SALT',   ']*SdogNU}}7vC~ bZ>^*$AD[s7N=[o;&FB./b~BHO}U-Bc8v0x |<.X?<mC;+yY]');
define('NONCE_SALT',       '3``Q`8;u>eTcj|A |Vc|ktBuu*gq{PAMa/Dfhyl,RBt yt1:jUoLF;`NmkWtEy[t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
