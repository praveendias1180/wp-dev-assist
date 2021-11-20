<?php
/**
 * Plugin Name:       WP Dev Assist 
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Developer Assistance Plugin for WordPress.
 * Version:           0.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Praveen Dias
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       wpda 
 * Domain Path:       /languages
 */

/**
 * Useful Definitions.
 */
define('WPDA_DIR', __DIR__);
define('WPDA_URI', plugin_dir_url(__FILE__));

/**
 * Die if not defined ABSPATH.
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * The Frontend 
 */
require_once( WPDA_DIR . '/frontend/inc/class-wpda-frontend.php' );
$wpda_frontend = new WPDA_Frontend();

/**
 * The Backend 
 */
require_once( WPDA_DIR . '/backend/inc/class-wpda-backend.php' );
$wpda_backend = new WPDA_Backend();