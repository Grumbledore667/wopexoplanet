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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Fr3ak');

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
define('AUTH_KEY',         'E343j5Wbfjq>;>gXaKu4ZoqghvwZlw<0TFUzvsV6ldvV 9Vuiw,@{%o$nxB])W!L');
define('SECURE_AUTH_KEY',  'RqB~%f=-lDa{iN1f~F:1e{#SvEllC@Z0wh-:3&t1E!9hJ7)(|azdrJ/fW|)F-ld*');
define('LOGGED_IN_KEY',    '4C4#zMwNBp_P+.Fr8ifPq RK4l>[h5I`^_:+vM0j$R$-O-+7rADMa(2a<&QJ%UtT');
define('NONCE_KEY',        'D$sKqJ?YyfVFz*bV+5dr/h|bM%IY:1i`+@_-mZSD{TncN0(MCg1XzQJD/@|,&c}7');
define('AUTH_SALT',        'R13T&0N4us6,p`/AZ@GYaZk{^cQW#Fntun1*,IVPp[#8]!vdfI6HQFHh9nz0kdfT');
define('SECURE_AUTH_SALT', 'd)oJSYx<26a(r)P^+;i,4{2glOW;Z7_zScm*E<>{ofc@_9tIT>!]W,X$Q+P<2VPC');
define('LOGGED_IN_SALT',   '/;8ux)&?[Td88j]u^jS<J+TdsVVqUpyZ%6`Spo>es0wY@F>6-|8tnr4zkX[ot^K@');
define('NONCE_SALT',       '&@a;n N~CkG*p5ON0n2S0/KlGl1XPGZN-jB&yp<Uw[[qkj8xa]Hwn-_a8LV!$Mj.');

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
