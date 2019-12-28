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
          if ( is_admin() ) {
            self::admin_init();
          } else {
            self::public_init();
          }
        }

        public static function admin_init() {
          include_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';
        }

        public static function public_init() {
          include_once plugin_dir_path( __FILE__ ) . 'public/public.php';
        }
    }

    // Run the below code on entry
    AMDV_Woo_Cart_Builder::init();
}
