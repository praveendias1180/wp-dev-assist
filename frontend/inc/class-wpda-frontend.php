<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * WP Dev Assist Frontend.
 */
class WPDA_Frontend{
    
    /**
     * Admin page with React.
     */
    private $admin_page;

    function __construct() {
        
        /**
         * Plug-in the admin page.
         */
        require_once( WPDA_DIR . '/frontend/inc/class-wpda-admin-page.php' );
        $this->admin_page = new WPDA_Admin_Page();
    }
}
