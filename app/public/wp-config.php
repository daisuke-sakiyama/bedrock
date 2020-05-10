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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'ttR29YU1XG21XUt0juOtSy+FB8f6MNlCAa5FVslzi+jA/aijXkg6QRYZsSYfm5Uojs0caldrjs/e3m8PHztZNg==');
define('SECURE_AUTH_KEY',  '+JBqaudu4bKAD1QkMGjUjL5Z1hs3MVYxyUdRh7rYDiKvSMyGoHsC13n5bVFkqjnutd3x9qvnNbJ6Fy1Md/HFlQ==');
define('LOGGED_IN_KEY',    '14FMA8c4pxr5tjpPymQQqgMKnX8IsZXcpPgkjxC0DOPBmSPX7Mqn4+D3jOBoAXPh2Epg7xKQcHjeLzoGkupeEg==');
define('NONCE_KEY',        'Dw5EA5T2rmqvV5x5rcnSpqYP1EIXZf7lFlbBBDcxv6M0VtGt/bfdW9xjJp4nJfUHHYUJO4vjTeP5Jw86FCeiMQ==');
define('AUTH_SALT',        'YLEaJkIXZBaacjLblqFL5A5El5fFAovvkofXrGR7fMRTuK45T/8KAK9oxKvcg+Ntk6HCVwhGAzTLyf6b4fSCRQ==');
define('SECURE_AUTH_SALT', 'lcEL8Wt9iWfe7q0zBeHcxkhyc7ULDAaRygjBdAbEhEEny1leI4IUY9+XZ1x3F3SpgGCQRH18XdD45QGxWNxQXg==');
define('LOGGED_IN_SALT',   'khKJjXw0ALkJqi26T8Uwdvs2SF3R5Qo5VGgD88BgwFPF2gO5YLvzqtHXzswgPWY5bfa7+g+PYF8EL23vKnmzuQ==');
define('NONCE_SALT',       'E40RQQCGQUA5sMPg0WrbycyPdAT3mCkVUh4IDOiuCUS6m0/fBP6QH14UIGmdy/QBpAOk/p/M7J6gR08jfDtikA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
