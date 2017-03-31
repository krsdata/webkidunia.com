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
define('DB_NAME', 'webkidun_db');

/** MySQL database username */
define('DB_USER', 'webkidun_user');

/** MySQL database password */
define('DB_PASSWORD', '4+B#RSS]cADS');

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
define('AUTH_KEY',         'cbbahKK)5Ga0[^<3tm2`xE&*e#5he(Qak1Pfi2@VQA]3|/f|(Q,__c=i(N;Cr05d');
define('SECURE_AUTH_KEY',  'g`u)]BCk>dIh,IaSbM*$yy~#6kT6>Zi7ucB%#wPu<e5`a@FzajG6yA^0knw109x`');
define('LOGGED_IN_KEY',    'VTv ^!ifoov4#Amtnf#8-&VGQ7S|vi_tJFV$jf[xtWHL.@w?%vz<q53UG5^&VNUb');
define('NONCE_KEY',        '0ODsTy4rGDN@mYQ{a5sy[NL4JDT^vlF(?~_PMQug+0^tg&{(ZUECuV;d@l6VH~gd');
define('AUTH_SALT',        '@(&]72XoZo?Y$>g(t&tUUSuL>.^&-k%-.[q,8Mm5$I-M5Kml*Ro}_ss>t1O*J:*Y');
define('SECURE_AUTH_SALT', '%sM33?vvJ;dKcE_cb,fwdS|:-*WK{3J$|TPEK4@6WGx|=jV1Q}/v{4q5I-9%[vIE');
define('LOGGED_IN_SALT',   '<rxI!p&-IfWUWana uW}Q$OQvK(xP;O95e|kjt)PdfMxc8w}jpo$cK{Eg9Fdr(bS');
define('NONCE_SALT',       'm]Aw(:I5-u)/%U~WX*rf<[js`*O>{[!y8a//4_N:*tb8$uNmy~4uhqL>8:{~?4hs');

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
