<?php
if ( !class_exists( 'AMDV_Woo_Cart_Builder_Admin' ) ) {
    class AMDV_Woo_Cart_Builder_Admin
    {
        public static function init() {
          include_once plugin_dir_path( __FILE__ ) . 'templates/plugin-options-page.php';
        }
    }

    // Run the below code on entry
    AMDV_Woo_Cart_Builder_Admin::init();
}
