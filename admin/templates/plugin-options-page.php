<?php
if ( !class_exists( 'AMDV_Woo_Cart_Builder_Admin_Options_Page' ) ) {
    class AMDV_Woo_Cart_Builder_Admin_Options_Page
    {
        public function __construct() {
          add_action('admin_menu', array( $this, 'create_options_page_menu_item' ) );
        }

        public static function create_options_page_menu_item() {
          $page_title = 'WooCommerce Cart Builder Settings';
          $menu_title = 'Woo Cart Builder';
          $capability = 'administrator';
          $slug = 'woocommerce_cart_page_builder';
          $callback = array( $this, 'create_options_page' );
          $icon = 'dashicons-admin-plugins';
          $position = 100;

          add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
        }

        // This function is called within create_options_page_menu_item()
        public static function create_options_page() {
          ?>
          <div class="wrap">
            <h1>WooCommerce Cart Builder Settings</h1>
          </div>
          <?php
        }
    }

    // Run the below code on entry
    new AMDV_Woo_Cart_Builder_Admin_Options_Page;
}
