<?php
/**
 * Specification Core v0.9.35
 * Plugin Name: Specification Core
 * Version: 0.9.35
 * Description: Modular mobile database system for WordPress with SEOPress integration
 * Author: Yunvonks
 * Last Updated: 2026-06-10
 */

// Plugin initialization and version info
define( 'SPEC_CORE_VERSION', '0.9.35' );
define( 'SPEC_CORE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SPEC_CORE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Load plugin features
require_once SPEC_CORE_PLUGIN_DIR . 'includes/module-control.php';
require_once SPEC_CORE_PLUGIN_DIR . 'includes/editor-assist.php';
require_once SPEC_CORE_PLUGIN_DIR . 'includes/seopress-bridge.php';
require_once SPEC_CORE_PLUGIN_DIR . 'includes/currency-audit.php';

// Enqueue SEOPress Social spacing fix CSS
add_action( 'admin_enqueue_scripts', function() {
    wp_enqueue_style( 
        'seopress-social-spacing-fix', 
        SPEC_CORE_PLUGIN_URL . 'assets/css/seopress-social-spacing-fix.css',
        array(),
        SPEC_CORE_VERSION
    );
});

// Plugin activation hook
register_activation_hook( __FILE__, function() {
    // Initialize plugin settings
    update_option( 'spec_core_version', SPEC_CORE_VERSION );
    update_option( 'spec_core_activated', current_time( 'mysql' ) );
});

?>
