<?php
/**
 * Plugin Name: Custom Backend Font
 * Plugin URI: https://github.com/doabayomi/admin-wordpress-font
 * Description: Customizing the admin font to create a new feel for the dashboard
 * Version: 1.0
 * Author: Daniel Abayomi
 * Author URI: https://github.com/doabayomi
 */

if ( !defined('ABSPATH') ) {
    exit;
}

// WordPress Custom Font @ Admin
function admin_custom_font() {
    echo '<link rel="preconnect" href="https://fonts.gstatic.com">' . PHP_EOL;
    echo '<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">' . PHP_EOL;
    echo '<style>body, #wpadminbar *:not([class="ab-icon"]), .wp-core-ui, .media-menu, .media-frame *, .media-modal *{font-family: "Poppins", sans-serif; !important;}</style>' . PHP_EOL;
}
add_action( 'admin_head', 'admin_custom_font' );

// WordPress Custom Font @ Admin Frontend Toolbar
function admin_custom_font_frontend_toolbar() {
    if(current_user_can('administrator')) {
        echo '<link rel="preconnect" href="https://fonts.gstatic.com">' . PHP_EOL;
        echo '<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">' . PHP_EOL;
        echo '<style>#wpadminbar *:not([class="ab-icon"]){font-family: "Poppins", sans-serif; !important;}</style>' . PHP_EOL;
    }
}
add_action( 'wp_head', 'admin_custom_font_frontend_toolbar' );

// WordPress Custom Font @ Admin Login
function admin_custom_font_login_page() {
    if(stripos($_SERVER["SCRIPT_NAME"], strrchr(wp_login_url(), '/')) !== false) {
        echo '<link rel="preconnect" href="https://fonts.gstatic.com">' . PHP_EOL;
        echo '<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">' . PHP_EOL;
        echo '<style>bodyfont-family: "Poppins", sans-serif; !important;}</style>' . PHP_EOL;
    }
}
add_action( 'login_head', 'admin_custom_font_login_page' );
?>
