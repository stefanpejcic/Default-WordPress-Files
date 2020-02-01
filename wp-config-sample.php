<?php
2	/**
3	 * The base configuration for WordPress
4	 *
5	 * The wp-config.php creation script uses this file during the
6	 * installation. You don't have to use the web site, you can
7	 * copy this file to "wp-config.php" and fill in the values.
8	 *
9	 * This file contains the following configurations:
10	 *
11	 * * MySQL settings
12	 * * Secret keys
13	 * * Database table prefix
14	 * * ABSPATH
15	 *
16	 * @link https://codex.wordpress.org/Editing_wp-config.php
17	 *
18	 * @package WordPress
19	 */
20	
21	// ** MySQL settings - You can get this info from your web host ** //
22	/** The name of the database for WordPress */
23	define( 'DB_NAME', 'database_name_here' );
24	
25	/** MySQL database username */
26	define( 'DB_USER', 'username_here' );
27	
28	/** MySQL database password */
29	define( 'DB_PASSWORD', 'password_here' );
30	
31	/** MySQL hostname */
32	define( 'DB_HOST', 'localhost' );
33	
34	/** Database Charset to use in creating database tables. */
35	define( 'DB_CHARSET', 'utf8' );
36	
37	/** The Database Collate type. Don't change this if in doubt. */
38	define( 'DB_COLLATE', '' );
39	
40	/**#@+
41	 * Authentication Unique Keys and Salts.
42	 *
43	 * Change these to different unique phrases!
44	 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
45	 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
46	 *
47	 * @since 2.6.0
48	 */
49	define( 'AUTH_KEY',         'put your unique phrase here' );
50	define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
51	define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
52	define( 'NONCE_KEY',        'put your unique phrase here' );
53	define( 'AUTH_SALT',        'put your unique phrase here' );
54	define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
55	define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
56	define( 'NONCE_SALT',       'put your unique phrase here' );
57	
58	/**#@-*/
59	
60	/**
61	 * WordPress Database Table prefix.
62	 *
63	 * You can have multiple installations in one database if you give each
64	 * a unique prefix. Only numbers, letters, and underscores please!
65	 */
66	$table_prefix = 'wp_';
67	
68	/**
69	 * For developers: WordPress debugging mode.
70	 *
71	 * Change this to true to enable the display of notices during development.
72	 * It is strongly recommended that plugin and theme developers use WP_DEBUG
73	 * in their development environments.
74	 *
75	 * For information on other constants that can be used for debugging,
76	 * visit the Codex.
77	 *
78	 * @link https://codex.wordpress.org/Debugging_in_WordPress
79	 */
80	define( 'WP_DEBUG', false );
81	
82	/* That's all, stop editing! Happy publishing. */
83	
84	/** Absolute path to the WordPress directory. */
85	if ( ! defined( 'ABSPATH' ) ) {
86	        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
87	}
88	
89	/** Sets up WordPress vars and included files. */
90	require_once( ABSPATH . 'wp-settings.php' );
