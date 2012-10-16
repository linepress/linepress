<?php
/**
 * @package LinePress
 * @subpackage 
 * @version 0.1
 */

class LinesPress {
  
  public function __construct() {
    //Just plugins loaden
    add_action( 'plugins_loaded', array( $this, 'Commandos' ) );
  }

  /**
   * Add the LinesCommand to wp-cli if it's defined. Ergo the console version of wp is being used
   *
   * @since 1.0.0
   */
  public static function Commandos(){
    if ( defined('WP_CLI') && WP_CLI ) {
      // Include 'scaffold' commando
      include_once( WPMU_PLUGIN_DIR . '/wp-cli-scaffold/scaffold.php');
    }
  }
}