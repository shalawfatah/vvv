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
define( 'DB_NAME', 'shalaw' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'wp' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ' ?*D(WFE077gl+^Hs#,q|5?g2x/*bTcs]IQ/@n79.d3}4$UH9!SB$CD4D% Dm($z' );
define( 'SECURE_AUTH_KEY',   'fOVhLLxtU}o3G?O@[Z5Hl._%J5&!o_hO_k4a(Fg3G)HIs_i#=!GPI{OT0h,A%0)_' );
define( 'LOGGED_IN_KEY',     'p#by<y]+yk]uIR2aN@4 hfx5,gvQf%?VZYSJNpKl#`(_$zyHhU@@bw:jyF3IhaJ&' );
define( 'NONCE_KEY',         'r36NO8Q2,HT& @~5668xZ+mXSoVT5q^U^@&qY)6PM[x;bsP:+ZkT7)?PnRa-p>hP' );
define( 'AUTH_SALT',         'FgLc]G|_%71i{UQ@g},gwMj *3G^K@ZF>u=|DTJ`m1C|95A:`YO!;}6w`.D6nuN*' );
define( 'SECURE_AUTH_SALT',  'bi,Z7EDkAls  <+%:`:%.cIYLmbG.o0xl8sc3{*(vcId;a9M]m$DZs 8rILs0:gz' );
define( 'LOGGED_IN_SALT',    'ho4qO*:ZB_-/[7=NCJLXhrtOuVx>c2qU)M=2k><gJ;Cp(40=[(vUbPSeusA=!iQ7' );
define( 'NONCE_SALT',        'GAVY?3H/]fT@L;$wKo8(%P#(PxCUi=[Cz^bGnc,wpA)u}QeL>O`YB]o9J8)N(t/u' );
define( 'WP_CACHE_KEY_SALT', '@26gp/)xe A/i>};RX6HOFnK~I%F@GqwGqteaG|dAn,AQGF[FJhUsn]<K*}S,P7n' );


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
define( 'WP_DEBUG', true );


/* Add any custom values between this line and the "stop editing" line. */



define( 'SCRIPT_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
