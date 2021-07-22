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
define( 'DB_NAME', 'wpdb_bikecraft' );

/** MySQL database username */
define( 'DB_USER', 'wpdb_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '7845961230' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '%U=|u.-p&l:>y>G=txSSWrK4a1,*0lZ{V;?=[xbTko-W(j[ymmn~=#d>SNx5<EB`' );
define( 'SECURE_AUTH_KEY',  ' $=^g[^9W~^PQsx8G3bE/E^Jw5YM5sj/B%?v;~z.GpwKl(z!>U^ob[dkM+Wnypvr' );
define( 'LOGGED_IN_KEY',    'Q^z:?;{,:J}%(^Hn{}X6$CKETwb>R^2UF~6Ha92v5w:2t@J>f4PfKE;,R!|55nNg' );
define( 'NONCE_KEY',        '#8OSF4MaIR g:O=:;c#++28)i14U^#ZGZW3gC$5+Fwru(lOVcOJ+9~#HGfyL5nc!' );
define( 'AUTH_SALT',        'Uli6<B5o0U%(_oB.4C;}o(FmPWSgdGn*w:;Mq_kjN4.$^BB6_Fj$x93/mlvwywrE' );
define( 'SECURE_AUTH_SALT', 'fTGzh`/1~6=42fxfZ;twa@wzfy#/*j-<LSmm_5H}NzbnF24?# w:A82G{R?$%:Fv' );
define( 'LOGGED_IN_SALT',   'S&@Q!1KX{:dT2q(Y;&cXppgvQYN^+4`98.O]#LN}Z4b%{pwnhS3 4z,s=i<$GI_(' );
define( 'NONCE_SALT',       ';Tf4Z~Qc!bB6rRF(~3+blb8DT9Z@}E;Vq@?~^;TOw{gy8h@vJ[u; +ZdP;%gUQ:z' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
