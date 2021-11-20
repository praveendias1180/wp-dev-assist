<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * WP Dev Assist Admin Page.
 */
class WPDA_Admin_Page{
    function __construct() {
        add_action( 'admin_menu', array( $this, 'admin_page') );
    }

    /**
     * Add the top level menu page.
     */
    function admin_page() {
        /**
         * Add admin page and get the slug.
         */
        $admin_page = add_menu_page(
            'WPDA',
            'Dev Assist',
            'manage_options',
            'wp-dev-assist',
            array($this, 'admin_page_html'),
            'dashicons-rest-api',
            25
        );

        /**
         * Load assets for this page.
         */
        add_action('load-' . $admin_page, array($this, 'load_admin_assets') );
    }

    /**
     * Load assets for admin page.
     */
    function load_admin_assets(){
        add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    /**
     * Enqueue Frontend App Script.
     */
    function enqueue_scripts(){
        wp_enqueue_script('wpda-app', WPDA_URI . 'frontend/dist/bundle.js', array(), '', true);
    }

    /**
     * Top level menu callback function
     */
    function admin_page_html() {
        // check user capabilities
        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        }
    
        // add error/update messages
    
        // check if the user have submitted the settings
        // WordPress will add the "settings-updated" $_GET parameter to the url
        if ( isset( $_GET['settings-updated'] ) ) {
            // add settings saved message with the class of "updated"
            add_settings_error( 'myshortcode_messages', 'myshortcode_message', __( 'Settings Saved', 'myshortcode' ), 'updated' );
        }
    
        // show error/update messages
        settings_errors( 'myshortcode_messages' );
        ?>
        <div class="wrap">
            <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
                <!-- Plugin the React App Here. -->
                <div id="wp-dev-assist-app"></div>
                <!-- End of Dev Assist React App. -->
        </div>
        <?php
    }
}