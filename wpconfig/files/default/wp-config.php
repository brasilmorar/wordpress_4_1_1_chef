<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wordpress.m8dcu1.0001.use1.cache.amazonaws.com');
 
define('WP_HOME','http://d314br02cahoxx.cloudfront.net');
define('WP_SITEURL','http://d314br02cahoxx.cloudfront.net');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cb6s6twoi9om.us-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'qu.u<s ({LuQVc77YRVHF-{+[+U;>Vf.JA-b6vNnO#}R>YYP}a!w&@nZYe#*K;rm');
define('SECURE_AUTH_KEY',  '+Ub^ucTGJ@dp?F))0sLer-9x+;x- $Zm5{Cy#+0(_k]ntGRLj6D+HCWeIG<A)(N+');
define('LOGGED_IN_KEY',    'X-ZVb4ue}`N4_-2;#N{wvi:76q[FIT:}S)C ,-8$|wm_,c;LkJZqgw%`9+-n}(kN');
define('NONCE_KEY',        'R{ZYk%vv#Oi/F= 6_4>ykhH26|1/f]|5TS>>M`%e772<g-sx3pI~z]fZtyn[J{?]');
define('AUTH_SALT',        'G7u~cUpgA/`BOWSV_30zr2y-7Q9x!pdVY*r4)V9xF.W>-+%1XnK{VaP/JRAD{U>E');
define('SECURE_AUTH_SALT', '%)-7w&$VWA{=il4qf,MX*aK-4aWm]M=0bYU-Mh)O_P~;L3.x:fJOF<hx De1EwZ6');
define('LOGGED_IN_SALT',   '+X6/RL^A2#9c[{A5|KI6;_{iG~_Pug=&>-;J)rRQ!M^DC#fqB]vzv|}-uV|8j2-$');
define('NONCE_SALT',       'AS.ETb2 q`7< I@Q.8|3smO)` /s +-}OHjZfF GqvSa/d+5r.BUt85]}k)|u7> ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
