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
 * Text Domain:         admin-login-customizer
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
 * @package AdminLoginCustomizer
 */
// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Define plugin constants
 * @since 1.0.0
 */
define( 'ALC_VERSION', '1.0.0' );
define( 'ALC_FILENAME', __FILE__ );
define( 'ALC_BASENAME', plugin_basename( __FILE__ ) );
define( 'ALC_BASEDIR', __DIR__ );
define( 'ALC_BASEURL', plugin_dir_url( __FILE__ ) );
define( 'ALC_TEXTDOMAIN', 'admin-login-customizer' );
define( 'ALC_ABSPATH', plugin_dir_path( ALC_FILENAME ) . 'includes' );

// Load texdomain
require_once ALC_ABSPATH . '/class-textdomain.php';
ALC\Textdomain::init();

// Initialize customizer
require_once ALC_ABSPATH . '/class-theme-customizer.php';
ALC\Theme_Customizer::init();

