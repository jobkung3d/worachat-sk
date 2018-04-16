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
define('DB_NAME', 'worachat_db');

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
define('AUTH_KEY',         'CwQOq9(Uv^^tmK#rGr,TP,?/#cS2-i %SQa?{#NaG@c+_-=>F*7nYl~boDv+,vCN');
define('SECURE_AUTH_KEY',  'kuJf@sV2^jm5%JY,OwM+lZGMKkGsG]NUMce(O?r5h8,=#n,Rrh,!^4-S[6:*3r~t');
define('LOGGED_IN_KEY',    'MQvl;{YzCV:3PpdWV^SJa|wQ]m ch1b.DF57TFYAta01p2+)H$*%E}-Mh<IHQ^Ig');
define('NONCE_KEY',        'jCE<{K+ZT2h/}&:^XA7KrIjn@(DPR]Hp/EZHD2_>.PP|F^Hw4dePa4(]zlf_ss;M');
define('AUTH_SALT',        'trpVWBoUInBRoOjSe+/:WNlR%{g@(b!E=A]*,#y:P4u1dH/0=,&Ha6NnEDf!6d5l');
define('SECURE_AUTH_SALT', '.$Xq+m../(X^8Q$.|D50u,{mxy$j6!1YDvY|[J~4_2Uc$x#E!BJgPIkuF?9-L>DX');
define('LOGGED_IN_SALT',   'ljH&$;~@%|snbQ(O+1o-6,0~;AMS|!GcY>+q+;v{}8-1u3Y@G2W3KxyD[rnw<.&0');
define('NONCE_SALT',       'PtR&Kk4=0s[|7>v%]h8So%;w%g8/bbkpUgz> ADW,sEjMX !7!}U>?K0iD>[ZS^)');

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
