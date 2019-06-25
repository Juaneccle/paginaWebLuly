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
define( 'DB_NAME', 'wp_luly' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1@_guZ{L8EbcQiFh^#=,w7xYiO~n=x/()NU-tVd5|LA1jp(BN%dgW_L_kK;+SRhh' );
define( 'SECURE_AUTH_KEY',  '/(6fcK8,}|KDGgH8&lvZGO.dj-WL&l>WI]{P!3foga,sY7v=*L1E@o]b@w2~7g^K' );
define( 'LOGGED_IN_KEY',    'vb(+]]F;Nb3_3ww%8JhG#}X]sTn}b*n&;}]=HWPcbfi(sRE.M&;H06%9b!!AdhVl' );
define( 'NONCE_KEY',        'y9[2 *f,{5Yp]d>%bD8DS|t$,8(.o?i+ &NlnF;$TFq-]*#L7.&--/!)yPr :Tt(' );
define( 'AUTH_SALT',        '0y}<p$}f&dJS:K^DrQ=-e,H^6xt-QQ~&tXW~p.tA9FSvUou,Li%a:zTPwMZ[#u=p' );
define( 'SECURE_AUTH_SALT', ',aJ>{h#VZ7ZE2TBU6z^P}3i$KuU+|z4S`h>IF,vd6J^9VGNzn0C(cO7s1jDq$kj0' );
define( 'LOGGED_IN_SALT',   'Tmk*wY4fzGOQIaMJQ&=:{Tf]<;=;(zS=q7?+6>r2cQ{?>Xb,YjTo9BLMUn1FQNpq' );
define( 'NONCE_SALT',       'sv)bu`4aZ|^Cq3!s1#vM7*S07:sL&Hd$n%x+(;e+p_hYZe0p@+c%PjsP7aAC%6%K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
