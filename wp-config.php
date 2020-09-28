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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'JOBSCAN' );

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', 'Poke8112' );

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
define( 'AUTH_KEY',         'Rn}w4S(KLJ^.FRbp70?=p?FRi]]-9dm3(-+}mf#~7UVjN~[g}#4 /BI@^@X%KPpn' );
define( 'SECURE_AUTH_KEY',  ',Fe=*gjGkh$g^q4ogI.DPPbC<pnMH>O`7lEUi1t31@|!*^}*7MO}p]_Fo]fFD{x_' );
define( 'LOGGED_IN_KEY',    'E&3wig)}}a@#J4y%wX!wF3xS@A?4j0)Y.Cr-*#JG(M`IxfYw=r/isThZ,V`uyGF/' );
define( 'NONCE_KEY',        '8sKh>rMZPoQKtx>LD9!oi&V4(2*$)KDA0eRxYkuRy%PVD8{v/9:;-qDQ$VpQ^696' );
define( 'AUTH_SALT',        '6XD[Bab-pZwo+~W>#,h5Q-U~oc_JdIxU[oR(74C~LOlB{t>4,S.ue{SI~%^1$&?V' );
define( 'SECURE_AUTH_SALT', '_!G[yX5r_^d+tusCTc)+Pn.Ovr DQy)vSqPoU[G2YNt@*OYg{@Wd5i0HV@#H{f6I' );
define( 'LOGGED_IN_SALT',   'S_DSw:>%F:Dzi=p)ncwlMHCJ]-Be/fv2Z|% FrSkl[3ZWlz64aoC5uL*3SK_6OdA' );
define( 'NONCE_SALT',       'lrwCVL)Oxmg?Cyl=].%pepn=<L>{1Xj>x9GV7 vn7]$Pr.NxK,q-)bv3,b$wO<kR' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

