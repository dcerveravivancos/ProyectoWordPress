<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ContadorVisitas' );

/** Database username */
define( 'DB_USER', 'default' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'o>9c9mGWfG|$Xye!<W*IGM9/>?VU8K]C2Ed/=@t+d;ku,Hi/Vy+<xP4k<JN+3tbO' );
define( 'SECURE_AUTH_KEY',   '] &Zo!Gcgha2$71`,9f08C]L~o/KHP <2Q KdCQ]UA]@)Ndha+s[@D|$5Q8*h/36' );
define( 'LOGGED_IN_KEY',     '/]2.{Ys6S(lRpNh8vV&:$uw%$5+qrn)w]9`{l>;~[Cba^T+&<S{J[&ff=D74 `7y' );
define( 'NONCE_KEY',         '}+:xzQcl_K|b^B|$|NxbUT8s}BlTey[$[HZ4lRD.M>d9{iwN$!K-T=LD|rg`HO[`' );
define( 'AUTH_SALT',         ',{!xIE3|;>=|K!xd!pY{GY*JT`r_%={B]<)@~:cM(;6pI#p/*.]R{r3mku7;iz_r' );
define( 'SECURE_AUTH_SALT',  '@Jhxn)W>naO(/aU>yt}E*@9W``=C/(Mw-l9G<JAtvP `[VoS/2>#wXf,^b@Fud($' );
define( 'LOGGED_IN_SALT',    'Am*y+W@*_)5}B`~2WQ4KXox/nybev~B&`q6g, {m{no|m]y34p6&S5Q0~QN7 .Tn' );
define( 'NONCE_SALT',        '|>wjyW,E?6u[@6L4.T5Bmc%0!xRzds+x8!n _hyguRi]osD[seVo5q-y^T39[3(D' );
define( 'WP_CACHE_KEY_SALT', '%dQMuZf1:Bz`^,Afh.nnAz@VL=!b+P=~:JHk4,lsw;^?*P&#LyqA]LY6eXD;LlO[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
