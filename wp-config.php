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
/** The name of the database for WordPresss */
define('DB_NAME', 'wpnn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'asdasd');

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
define('AUTH_KEY',         'i]}`d-x@>$%S~$Qr*!.xJi6dVnSN5wmf_}YEX)aI@= J7Jkk,GIA`%t{.2cB6]fP');
define('SECURE_AUTH_KEY',  '$A/4/WM@ktXgx7I>R]p9-dOn S3MPtzPVc0AS;5h&eNZ#`KF+.!@-$hX[5/MOb$C');
define('LOGGED_IN_KEY',    'y>g>NFCI>Rc6d.Rg-Ou`=/^b13r@2_Aw2hWMn8J}UUHmo<fSnNKw@-[C3XZM )a<');
define('NONCE_KEY',        ';6rNOh(ziE~ ?c3[..ugXi>cZ:L5KzbHLPX9v Vo<KS^8AxcH HDuU[BAOiCy1cH');
define('AUTH_SALT',        '8 tHOc-|m*XoIc_e2+0RkJohoS 2@)KG3Ajgw=VAAI]mvshY.HUo eyA7z0{H%][');
define('SECURE_AUTH_SALT', 'w:KH2z4@O@RFMI~]R|]SkZ?Y7s,q$v[v.`j?coUm_+@fh vT%qNYrif2xN3Mh$C/');
define('LOGGED_IN_SALT',   '_l~(IzFd(Yu.Z_<~t %P&[xX|yo/#}SEC!kPQr{?/~I!-K1y(4EPRY1+[OlLcX8o');
define('NONCE_SALT',       ']dpqUvaxkoGkJ5jr9Y&$&GF$EH7J|(|SK&QPS03Q,OYsakH:7s&nY/}$}tqe1)Hu');
define('FS_METHOD', 'direct');

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
