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
define('DB_NAME', 'amydalrymple_dev');

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
define('AUTH_KEY',         'd/.;sF<Nl=SV)TOBDQSl;jriI4l1$ Kxm}L4RfgYu^aZ(v6)KX63tE0g|<+RUp5`');
define('SECURE_AUTH_KEY',  '5z;Z3)Qkq(|;k;h70/k%AOxb|hzZYOQ21;SdyPZWn,cJQ+zKpFqQ% |$0`Z`_L3e');
define('LOGGED_IN_KEY',    'rn.z5#e(<)rz bit zIl{0 S`HvEX}^#eKDgm.(P=n`gR+9FG7X~NM[FAsPgkI2-');
define('NONCE_KEY',        '2=?vnV7~J7jmxjccZ/]Yo@-+)$ko%C/Ub67%9SHw|{j<8P44p:9J|S2Re[*Hisud');
define('AUTH_SALT',        '8Kq.Z!=z;g,G3_24daK9q-Oy:6tQ.7fQfq[;]$ves[Pg6</,GzEHAH2wg*(WmA<C');
define('SECURE_AUTH_SALT', 'e=)44Pi6%h1d51B8F>#Uju4{&JCG|=q`X*yZ;1|9T:^z!(/fX.{K00/&o[]h(D#U');
define('LOGGED_IN_SALT',   '5:LE;$@sZhX|BY~h6P|{,q19~2z>G5={6VPNG#MSwYuYUmNoCU.#6V*-K:dFjb6D');
define('NONCE_SALT',       'y,dJb7t^E<:KyZq-u?xLp?<5owM[1PkmY^/eH4uH<Ar;%@Kg9@.OU$DH<8^$4Do<');

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
