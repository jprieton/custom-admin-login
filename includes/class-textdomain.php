<?php

namespace ALC;

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Textdomain class
 *
 * @package        AdminLoginCustomizer
 * @subpackage     Init
 * @since          1.0.0
 * @author         Javier Prieto
 */
class Textdomain {

  /**
   * Single instance of this class
   *
   * @since     1.0.0
   * @var       Theme_Customizer
   */
  protected static $instance;

  /**
   * Main instance
   * Ensures only one instance of this class is loaded or can be loaded.
   *
   * @since   1.0.0
   * @static
   * @return  static
   */
  public static function &init() {
    if ( empty( static::$instance ) ) {
      static::$instance = new static();
    }

    return static::$instance;
  }

  /**
   * Class constructor
   * Declared as protected to prevent creating a new instance outside of the class via the new operator.
   *
   * @since   1.0.0
   */
  protected function __construct() {
    // This hook load the plugin textdomain
    add_action( 'plugins_loaded', [ $this, 'load_plugin_textdomain' ] );

    // This hook adds tanslation to plugin description
    add_action( 'all_plugins', [ $this, 'modify_plugin_description' ] );
  }

  /**
   * Load plugin textdomain
   *
   * @since     1.1.0
   */
  public static function load_plugin_textdomain() {
    load_plugin_textdomain( ALC_TEXTDOMAIN, FALSE, basename( dirname( ALC_BASENAME ) ) . '/languages/' );
  }

  /**
   * Adds tanslation to plugin description
   *
   * @since     1.0.0
   * @param     array $all_plugins
   * @return    array
   */
  public static function modify_plugin_description( $all_plugins = [] ) {
    if ( key_exists( ALC_BASENAME, $all_plugins ) ) {
      $all_plugins[ALC_BASENAME]['Description'] = __( 'Allows you to customize the background, logo, url and caption on the WordPress login page.', ALC_TEXTDOMAIN );
    }
    return $all_plugins;
  }

}
