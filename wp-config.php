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
define( 'DB_NAME', 'db_sandrakids' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'dVto$q+mU6-Ipfb1@c9!oVK?1v( !)0)Oi:^[(>=S0}&uiHk)a3[B[FZw)6Hcd7`' );
define( 'SECURE_AUTH_KEY',  'yMX;<d2A*fj;&FetOp]x?)b5+v5uK T?ZU-z{IN#a?49*n}`O1l2K%079!S60$&o' );
define( 'LOGGED_IN_KEY',    'Oh(H+CN;{a%y_1N:|dCx*=t5b5],zKs:,ktPs0dAhKRM3@dT~AvZ}f)[C8+u+y):' );
define( 'NONCE_KEY',        ':m~C6WN:7y[XC^-2QKx&0fot(ii*(%AO{w]dgR@,sL1f7gnNGX&uUlkpf@J=j=2y' );
define( 'AUTH_SALT',        'N54!6g9dz,Nq#L!0OR`1Z_e x)~ML:&!@7_COOumAZbmu=/CLXc3xau`mJf6Eh<&' );
define( 'SECURE_AUTH_SALT', 'Q91#5J_`Iei@uup*{m_o9Qr-O2QDdu~ AzN3NbKzt^NrX6Ii~T|{s1$av?#WAhQK' );
define( 'LOGGED_IN_SALT',   '+c[=-rCP8s6cnW:&UH_;Msz;t!y$[MQh3-x6rzg#~`{XWEkplT%b|?]%Z 6wQz)S' );
define( 'NONCE_SALT',       '*=R0EFTM2+WWqqc~E?9&~2jwla1CgkFqUCeGG/JhyZZfZ2!Yi&k,->+@5/ rmbJ+' );

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
