<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nfc');

/** MySQL database username */
define('DB_USER', 'pcmwooki');

/** MySQL database password */
define('DB_PASSWORD', 'rladnrl');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'MNF3hbB!,f|9A?)2m[Vt9a>xgV@}3;tSDE!}lgt+%Y1:j)q]|Ol;XYM7e+#++],8');
define('SECURE_AUTH_KEY',  '7LShdjg2s@j90uq|;WIU39A;Lgg;[/2+.3cCtojOR,].XE|r>&gKxk~W$p9O-SKi');
define('LOGGED_IN_KEY',    'D+Mu4bpCtWwS*-?Jy+/iheV+=YU;_WJqJu~Aw6wt^:XF!9I(S8s<{fU0nj|B_:]q');
define('NONCE_KEY',        'C6C+DIB73^nA#>82C0Qpjo]55#@DOnz/3cj5owx9v_lJL8;xfCdc3*2x:`GU6%2_');
define('AUTH_SALT',        ';Ifz%rx*Uam*S=Rfta7VibTVy8Jm5Q,$M3wrl8i-$EcefGn8EY]dPY92bw=RNNU%');
define('SECURE_AUTH_SALT', 'TMYnj8<(7|t-n@1Ve$iu[%XFTH/MD+-S|OPFKY;O}v+E=HDYCExyc>@5yF(Wrz5Y');
define('LOGGED_IN_SALT',   'NXXR}LS|U&I|TJ#I&b*3^_f]VP(Izd+IUxhzR<_Ef2[5/cW@?e3gHMawv])Nmnpu');
define('NONCE_SALT',       'J;tkqnE|.4|*1p0Y]CT+Xk[;}6!mvdFem29joT_o2XeM*?ohAZk *Yckmq257)i9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ko_KR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
