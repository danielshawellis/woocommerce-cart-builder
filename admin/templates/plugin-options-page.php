<?php
if ( !class_exists( 'AMDV_Woo_Cart_Builder_Admin_Options_Page' ) ) {
    class AMDV_Woo_Cart_Builder_Admin_Options_Page
    {
        public function __construct() {
          add_action('admin_menu', array( $this, 'create_options_page_menu_item' ) );
        }

        public static function create_options_page_menu_item() {
          add_menu_page( 'WooCommerce Cart Builder Settings', 'Woo Cart Builder', 'administrator', __FILE__, array( $this, 'create_options_page' ) );
        }

        // This function is called within create_options_page_menu_item()
        public static function create_options_page() {
          echo 'Options Page Test';
        }
    }

    // Run the below code on entry
    new AMDV_Woo_Cart_Builder_Admin_Options_Page;
}
