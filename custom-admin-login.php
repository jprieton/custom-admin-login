<?php

/**
 * Plugin Name:         Custom Admin Login
 * Plugin URI:          https://github.com/jprieton/admin-login-customizer
 * Description:         Allows you to customize the background, logo, url and caption on the WordPress login page.
 * Tags:                admin, login, custom
 * Version:             1.0.0
 * Requires at least:   4.9
 * Tested up to:        4.9.6
 * Author:              Javier Prieto
 * Author URI:          https://github.com/jprieton
 * Text Domain:         custom-admin-login
 * Domain Path:         /languages/
 *
 * Custom Admin Login is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Custom Admin Login is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Custom Admin Login. If not, see http://www.gnu.org/licenses/gpl-3.0.txt.
 *
 * @package CustomAdminLogin
 */

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Define plugin constants
 * @since 1.0.0
 */
define( 'CustomAdminLogin\VERSION', '1.0.0' );
define( 'CustomAdminLogin\FILENAME', __FILE__ );
define( 'CustomAdminLogin\BASENAME', plugin_basename( __FILE__ ) );
define( 'CustomAdminLogin\TEXTDOMAIN', 'custom-admin-login' );
define( 'CustomAdminLogin\ABSPATH', plugin_dir_path( CustomAdminLogin\FILENAME ) . 'includes' );

// Load texdomain
require_once CustomAdminLogin\ABSPATH . '/class-textdomain.php';
CustomAdminLogin\Textdomain::init();

// Initialize customizer
require_once CustomAdminLogin\ABSPATH . '/class-theme-customizer.php';
CustomAdminLogin\Theme_Customizer::init();

