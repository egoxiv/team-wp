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
define('DB_NAME', 'mysql');

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
define('AUTH_KEY',         'cuX1J`cD<nd$.c2qS9H7{V2*|Kixoj#ZR>S}M:F[a8}_vG?a_Slz7gZHme-;1QO>');
define('SECURE_AUTH_KEY',  'n&NnRN{bdS(&#$ahQMezHhuRg&,Ua9jI3~U0$&=YJ}dAXj.0wr4I]P`jS{Hmf9kJ');
define('LOGGED_IN_KEY',    '[=LY+coG2ZP}tKt&A{;PJro/0G<^1$XB<07,* ED]A%m${MM};$Cm/yjPT^|rPtz');
define('NONCE_KEY',        'Uz1PyOw_jqFUl`>p=e*j@[C]a4E<OM$(W-s{(L>i`7Y9b?c,vd<xFK:R$U?3WyXR');
define('AUTH_SALT',        '4!*UssT~oVw[I9TBTw,|HvK),&2?Q8y-EL>;J=ykuu$cA/D0?rp$KDaU,*Mh>qCY');
define('SECURE_AUTH_SALT', ':20RSJ1ozH@JeA+3K}|s/W34Dt#G#`}Z,aF-7T?@6LFaW1U<71BW`]4T)p_}TKZr');
define('LOGGED_IN_SALT',   'l__-<UR8Lp02%.ubc*Z8Y* Uk|#,vLO/K_$s:em{*GLRq/nEN^.ymt8-TrU= ]0v');
define('NONCE_SALT',       'q`z Ny[`$a4&91anQ,kNuf7@u*w>mM:);;iU<v4{,31)mF=Y$BJb 5LbfO0  EpW');

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
