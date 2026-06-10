<?php
/**
 * Plugin Name: Specification Core
 * Plugin URI: https://github.com/yunvonks/Specification-Core
 * Description: Specification Core v0.9.34 adalah sistem basis data ponsel modular untuk WordPress. ​Fitur Utama: ​Module Control: Aktifkan modul sesuai performa. ​Editor Assist: Autocomplete, Quick Paste & validasi AnTuTu. ​SEO Bridge: Skema JSON-LD & sinkronisasi SEOPress. ​Currency & Audit: Konversi harga global & audit data.
 * Version: 0.9.35
 * Author: Yunvonks
 * Author URI: https://github.com/yunvonks
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: specification-core
 * Domain Path: /languages
 * Requires at least: 5.0
 * Requires PHP: 7.4
 * Network: false
 * Tested up to: 6.4
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Plugin initialization and version info
define( 'SPEC_CORE_VERSION', '0.9.35' );
define( 'SPEC_CORE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SPEC_CORE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SPEC_CORE_PLUGIN_SLUG', 'specification-core' );

// Load plugin features
if ( file_exists( SPEC_CORE_PLUGIN_DIR . 'includes/module-control.php' ) ) {
    require_once SPEC_CORE_PLUGIN_DIR . 'includes/module-control.php';
}
if ( file_exists( SPEC_CORE_PLUGIN_DIR . 'includes/editor-assist.php' ) ) {
    require_once SPEC_CORE_PLUGIN_DIR . 'includes/editor-assist.php';
}
if ( file_exists( SPEC_CORE_PLUGIN_DIR . 'includes/seopress-bridge.php' ) ) {
    require_once SPEC_CORE_PLUGIN_DIR . 'includes/seopress-bridge.php';
}
if ( file_exists( SPEC_CORE_PLUGIN_DIR . 'includes/currency-audit.php' ) ) {
    require_once SPEC_CORE_PLUGIN_DIR . 'includes/currency-audit.php';
}

// Enqueue SEOPress Social spacing fix CSS
add_action( 'admin_enqueue_scripts', function() {
    if ( file_exists( SPEC_CORE_PLUGIN_DIR . 'assets/css/seopress-social-spacing-fix.css' ) ) {
        wp_enqueue_style( 
            'seopress-social-spacing-fix', 
            SPEC_CORE_PLUGIN_URL . 'assets/css/seopress-social-spacing-fix.css',
            array(),
            SPEC_CORE_VERSION
        );
    }
});

// Plugin activation hook
register_activation_hook( __FILE__, function() {
    $old_version = get_option( 'spec_core_version' );
    update_option( 'spec_core_version', SPEC_CORE_VERSION );
    update_option( 'spec_core_activated', current_time( 'mysql' ) );
    
    // Log upgrade from older version
    if ( $old_version && $old_version !== SPEC_CORE_VERSION ) {
        update_option( 'spec_core_upgraded_from', $old_version );
    }
});

// Plugin deactivation hook
register_deactivation_hook( __FILE__, function() {
    // Keep settings on deactivation for re-activation
});

// Add action link to plugin settings
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), function( $links ) {
    $settings_link = '<a href="admin.php?page=specification-core-settings">Settings</a>';
    array_unshift( $links, $settings_link );
    return $links;
});

// Log plugin information
if ( is_admin() ) {
    add_action( 'admin_notices', function() {
        if ( get_option( 'spec_core_upgraded_from' ) ) {
            $old_version = get_option( 'spec_core_upgraded_from' );
            echo '<div class="notice notice-success is-dismissible"><p>';
            echo 'Specification Core upgraded from ' . esc_html( $old_version ) . ' to ' . esc_html( SPEC_CORE_VERSION );
            echo '</p></div>';
            delete_option( 'spec_core_upgraded_from' );
        }
    });
}

?>
