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
define('DB_NAME', '{{ wordpress_database }}');

/** MySQL database username */
define('DB_USER', '{{ wordpress_root_user }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ wordpress_root_password }}');

/** MySQL hostname */
define('DB_HOST', 'database.{{ base_domain }}');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         'gpx .Xd8^xPJ2MSR VgUc}|W]&+vP{BgX[_sy4lnS]Ca9Q+ -E,[ZwM~.&^~<B+4');
define('SECURE_AUTH_KEY',  '20jOY!$,ByI<BL t zOUjs1#}S:`N7+d1XPpsJn*C/hOd-$9_DX}.d2c^=HUJld+');
define('LOGGED_IN_KEY',    '_MQy)]#<hWV`iWKbLp+BVoa**PqBt=*tBi1s.ysAlEP-w_s]b d}c.|hXz`o|g8.');
define('NONCE_KEY',        '+-oVu>2|[pAA3b+~|]-yb}}^4Nnl+EtgdJGRf}uJ*N (2]Pit+3%a5tzjPB:$+m+');
define('AUTH_SALT',        '<:9v_7nO!,h)&E=x7:>o|;R9+Cl&66kX=zxzZP)`m:;K em=-S7_~.)g-OjxpQ4I');
define('SECURE_AUTH_SALT', '<+_xt8$HpNk~oT0)4@a|,LvJC~l-B*+F4@-YM(o;!OUo+(/`,@|r8wph0a[ZUKoH');
define('LOGGED_IN_SALT',   'G:-|FKybY U|`/Cy2R#-b#Q -CEKC[$WB,3 iO5@fBIO$H@#$N#Iwy.!aLR[$>j(');
define('NONCE_SALT',       'Alq~l,x4<)TR[?_>=Qpq}90;Vs#C~{k%s}1^&HpsqmTb=@i>aqsf9<.p!@Z^)G%s');

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
