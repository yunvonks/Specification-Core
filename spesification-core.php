<?php
/**
 * Plugin Name: Specification Core
 * Plugin URI: https://specification.com
 * Description: Specification Core v0.9.34 adalah sistem basis data ponsel modular untuk WordPress. ​Fitur Utama: ​Module Control: Aktifkan modul sesuai performa. ​Editor Assist: Autocomplete, Quick Paste & validasi AnTuTu. ​SEO Bridge: Skema JSON-LD & sinkronisasi SEOPress. ​Currency & Audit: Konversi harga global & audit data.
 * Version: 0.9.35
 * Author: Yunvonks
 * Author URI: https://yunvonks.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: spesification-core
 * Domain Path: /languages
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Plugin constants
define( 'SPESIFICATION_CORE_VERSION', '0.9.35' );
define( 'SPESIFICATION_CORE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SPESIFICATION_CORE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Load plugin features
if ( file_exists( SPESIFICATION_CORE_PLUGIN_DIR . 'includes/module-control.php' ) ) {
    require_once SPESIFICATION_CORE_PLUGIN_DIR . 'includes/module-control.php';
}
if ( file_exists( SPESIFICATION_CORE_PLUGIN_DIR . 'includes/editor-assist.php' ) ) {
    require_once SPESIFICATION_CORE_PLUGIN_DIR . 'includes/editor-assist.php';
}
if ( file_exists( SPESIFICATION_CORE_PLUGIN_DIR . 'includes/seopress-bridge.php' ) ) {
    require_once SPESIFICATION_CORE_PLUGIN_DIR . 'includes/seopress-bridge.php';
}
if ( file_exists( SPESIFICATION_CORE_PLUGIN_DIR . 'includes/currency-audit.php' ) ) {
    require_once SPESIFICATION_CORE_PLUGIN_DIR . 'includes/currency-audit.php';
}

// Enqueue SEOPress Social spacing fix CSS
add_action( 'admin_enqueue_scripts', function() {
    if ( file_exists( SPESIFICATION_CORE_PLUGIN_DIR . 'assets/css/seopress-social-spacing-fix.css' ) ) {
        wp_enqueue_style( 
            'seopress-social-spacing-fix', 
            SPESIFICATION_CORE_PLUGIN_URL . 'assets/css/seopress-social-spacing-fix.css',
            array(),
            SPESIFICATION_CORE_VERSION
        );
    }
});

// Plugin activation hook
register_activation_hook( __FILE__, function() {
    update_option( 'spesification_core_version', SPESIFICATION_CORE_VERSION );
    update_option( 'spesification_core_activated', current_time( 'mysql' ) );
});

// Plugin deactivation hook
register_deactivation_hook( __FILE__, function() {
    // Keep settings on deactivation
});

?>
