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
define('DB_NAME', 'resume');

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
define('AUTH_KEY',         ']t%{(u|;5Q{R2OpAe$Do=zS)`R|ryn@]skK9UT00}X{NfJJ,Hpof!fU+K_9QSyjc');
define('SECURE_AUTH_KEY',  'ZrG9fao;wm)!Nu^gK<ox(A-(*[beL,4LMt|T),&|p]L^Zg!}x>%*4u(xf/o(iR*Z');
define('LOGGED_IN_KEY',    '.&I,<SQ:(M`g6(:++S7g[0]{(D C,eHPsc8_-DR6Mj}lTcr]^iVPlI*xG*xSK6&b');
define('NONCE_KEY',        'I|X=Fp>tQkgW;QeUeGq:}FTTT+DKUn`J&`GXC-~Mi|hB-c}#hga$&FdTe&P;d^e;');
define('AUTH_SALT',        'H<J)9/2mp5N6!se#9.?GWk(SfC+U8C*3ii-|7uvUno+v,OgLWf(I;j]7)v:lPL0V');
define('SECURE_AUTH_SALT', 'V*7D=Lg,2pe6-J~>kxe+Flqxs/~+?;!f`xvn{{MyYE-hDv9+#C92kL#8hNn:);B=');
define('LOGGED_IN_SALT',   'byLdHd@F>4{~;6(u~]N56Zq8}Jhk<<0{inm>:vq#I<0-0O%T[ld=Tl-r$F#_ckC[');
define('NONCE_SALT',       'D_VdvqD92`6<^)Va_eG?+D=,OFO=rW?xmVYTZA+oeamNx60>s:@@Zvezn)OB)ET5');

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
