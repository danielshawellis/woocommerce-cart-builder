<?php
/**
 * Plugin Name:       WooCommerce Cart Builder
 * Description:       A pagebuilder plugin for the WooCommerce cart.
 * Version:           1.0.0
 * Author:            Daniel Ellis
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/*
  Basic environment checks for security
*/
if ( ! defined( 'ABSPATH' ) ) {
  die;
}

/*
  Define plugin's base class
*/
if ( !class_exists( 'AMDV_Woo_Cart_Builder' ) ) {
    class AMDV_Woo_Cart_Builder
    {
        public static function init() {
            
        }
    }

    // Run the below code on entry
    AMDV_Woo_Cart_Builder::init();
}
