<?php
if ( !class_exists( 'AMDV_Woo_Cart_Builder_Admin' ) ) {
    class AMDV_Woo_Cart_Builder_Admin
    {
        public static function init() {
          echo 'Admin Test';
        }
    }

    // Run the below code on entry
    AMDV_Woo_Cart_Builder_Admin::init();
}
