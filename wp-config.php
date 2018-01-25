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
define('DB_NAME', 'handicraft');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'HFb+o/ohY4hX<)bB1@Cgue.sPofx~EiJE|A>;@p~ALKVURG9?!ZstA@,Q4MNGoX[');
define('SECURE_AUTH_KEY',  '`Dyn/cg}+:rE6#@;p^D3:.n=}roqbWwc|n~*5dEKdXxkT!I+>B*l($<kL*afO83l');
define('LOGGED_IN_KEY',    'l{(^3jK`]&IZ3:wC&Xmx*bvM]!KADE^6KK`#b8;/ixeAKAg:ST$a%#M{j}}#&WAR');
define('NONCE_KEY',        'f(InXh{j}qCh+taV~@BC/jM1_V$z!t48u$ K]H#(y<>hnM@eER(R1E>.qgi}V=gv');
define('AUTH_SALT',        '$)Pxj2y#81>xnax+ ]z4n?ICkKCK|ky8o&d]q?@v0@>@6+pJX %!q?_&,94[52s5');
define('SECURE_AUTH_SALT', 'R]0?jF |JU:OfA-GLIK.*3[.Yy$PJ+AM|h%g0WSO*@uB~>i(O_8;-Avu:zi5Ds#6');
define('LOGGED_IN_SALT',   '2DIm}<Q5I0T6w)Ju&:OOquu7T>DvR4K<G?Z$EMwdKMPHPw<sMmI}l>@VDCv&b<E[');
define('NONCE_SALT',       '7iuTUxnt#X1ZRlYdQ]$]R uR/->TrWq}v@7-MGF5d.I=HRA.jXw`!xxd<dpxJr/v');

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
