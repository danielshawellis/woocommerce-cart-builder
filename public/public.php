<?php
if ( !class_exists( 'AMDV_Woo_Cart_Builder_Public' ) ) {
    class AMDV_Woo_Cart_Builder_Public
    {
        public static function init() {
          echo 'Public Test';
        }
    }

    // Run the below code on entry
    AMDV_Woo_Cart_Builder_Public::init();
}
