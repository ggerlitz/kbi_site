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
define('DB_NAME', 'mywp');

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
define('AUTH_KEY',         'e679eRUi36W]P/dnms&cxhULR*+s  tN%$^b|+Qs7NnKo ?k4@?`Inf9lFR!iFG<');
define('SECURE_AUTH_KEY',  'byH(h<@>@*QK!l.N} m_mH.[.&e*AKwcp8&O0c&ByZJS*893:v2h/{XkU~y56BRC');
define('LOGGED_IN_KEY',    'dhe`$XFLtqtzx [f]N_B6I]bz?4/?Y(<l/4LU|()Qvw[p4K8QMbwQ/Mntuq)CvRC');
define('NONCE_KEY',        '!OR0FY1W$^gz67XK}J3=.~Ep~@oIe<<bT[[IG<SQF9y*9C0Bi-_Sld$_8fU(!XGd');
define('AUTH_SALT',        'T[Uq!f69uM.Ssf@;+h9coYGEWF]7-$%p539FDfqGv%DL}0k8Dx$.r<PV1m+>AaIV');
define('SECURE_AUTH_SALT', 'd?}4Muf%~^CQ&;9c6}B$KpVksCy7P5fP[F,2&<7Mp3$q0=O;T]Qp#b[J|>FJgvU7');
define('LOGGED_IN_SALT',   '?m4cQ3-sDVJqKsrZAg^M<t.jH)Aj-WmHks<MN8eCV}r{ALx6FlTDS1nuwUzybU]}');
define('NONCE_SALT',       '7t0TR&#QV:HE~nQmL%Eb$;i)b#DbdegEM]Dp0I+Z5jJHU|WL,R^}SAg6x;[Q!eW6');

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
