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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rg_wptest' );

/** MySQL database username */
define( 'DB_USER', 'regdev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'X7Sl0Z3IUsJNsF43' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v]2$A=9`?jIp2_B]:)8_[_1[<WE<*a_:er,Q,&8e&-5 y`@blX!dg`,9n(bU1_i[');
define('SECURE_AUTH_KEY',  '|Ovnna#:  ah|b#oth/}@yD!.I.u,TUF+VhwO4Yj;eb~vg}ixs}$$*iM?n9<z:,Z');
define('LOGGED_IN_KEY',    'GVZ&Qk:>uELEh+(|.NDhY&ZgeaJ[vRz4@@cc(2Z2XphO4C@d}.p}0$/hvvxFv:2a');
define('NONCE_KEY',        '_OJ(~(p`}En6t?ciZxmssX9/_Kb{y0309vai#JDNQ#+)y!aWab9hBJ,)BOs`z3px');
define('AUTH_SALT',        '+_:NjCZ70$:N:XE<K&[;yS[JU+r}s1?M@l,5v-bYnS{;Nj]G[Pr4wZ9*>NZ2P.D^');
define('SECURE_AUTH_SALT', 'iQEY||l|I]OW*0}hS~+7+#*#&;RvNn0Ra3M%|{bGk_v9w&RW!{Ni>/a?Kvf#mT:f');
define('LOGGED_IN_SALT',   'gq?dZ_GoL4)ZH*rba`lG!(P7u6y4Ga`1{!d->s@x;E;wA,ex]-Al]XL-r<?MqVkQ');
define('NONCE_SALT',       'fSz#h+1o!xGqoN5v3EOCi5#b4#![OaYY,F:O)S&O)SuO-in=+?Zgen| @ir(WV)o');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
