<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
if ( file_exists( dirname( __FILE__ ) . '/wp-config-production.php' ) ) {
    require( 'wp-config-production.php' );
}else {
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'wordpress');

    /** MySQL database username */
    define('DB_USER', 'root');

    /** MySQL database password */
    define('DB_PASSWORD', 'root');

    /** MySQL hostname */
    define('DB_HOST', 'localhost');

    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');

    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');

    /** Environment variable */
    define('WP_ENV', 'local');

    /** Debugging tools */
    define('WP_DEBUG', false);

    /**#@+
     * Authentication Unique Keys and Salts.
     *
     * Change these to different unique phrases!
     * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
     * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
     *
     * @since 2.6.0
     */
    define('AUTH_KEY',         '*f3m;0:vMTaKr6piK{+tEv2-n*0IaxuRvhI-{~Ob-e/O+jQ04_P.~~)iki@KI%sJ');
    define('SECURE_AUTH_KEY',  '2E+1v?.-|UuNsr2|`N55/SEyb6KA|Qo&&[ee-oY2g2Nb1PC3J[AW|Z+6P7n,+M<S');
    define('LOGGED_IN_KEY',    'ft2vhgnR!UC583Y/AX0+06Bn3bAp?P1n2J.&!8(w|i#n:/4|#ALrs^*a`i=QYHZ_');
    define('NONCE_KEY',        'n[{u5|y`1AwC&%|J(>v SgQ~a|zhU-6<p,NN^J%.!q[l=JtO^h:T+Ec6/3,G:Rkz');
    define('AUTH_SALT',        'I-M %-@xn^p-;$O7i|CZNQ-2CS*&!0@.aBQ#e;+B|YE?L$yr44?AF7f/iQ2Qy4B:');
    define('SECURE_AUTH_SALT', '[})%E3H>>@ A8R9okq%oT 8(a7vx>9!DoUEO,7L<2+q>x6K+G4ck,~ 2e-/+GKN9');
    define('LOGGED_IN_SALT',   ' T]KQ$;QdYZbK-ggYcTvUX[|HXQt;Pm0KjqyJ2KVSP0tzKbZL&-18I|U}0HWznsV');
    define('NONCE_SALT',       'Yc3*:c5T7,<{P=-y(.C3FqX,eK.BnV]/N0@Lb|cY&<}|Hp<i7F0e8|4qOo$rJ=.m');

    /**#@-*/

    /**
     * WordPress Database Table prefix.
     *
     * You can have multiple installations in one database if you give each a unique
     * prefix. Only numbers, letters, and underscores please!
     */
    $table_prefix  = 'urbanscrumping_';
 
    /**
     * WordPress Localized Language, defaults to English.
     *
     * Change this to localize WordPress. A corresponding MO file for the chosen
     * language must be installed to wp-content/languages. For example, install
     * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
     * language support.
     */
    define('WPLANG', '');

    /* That's all, stop editing! Happy blogging. */

    /** Absolute path to the WordPress directory. */
    if ( !defined('ABSPATH') )
    	define('ABSPATH', dirname(__FILE__) . '/');

    /** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
}
