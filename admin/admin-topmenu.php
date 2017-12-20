<?php // Plugindev - Admin Menu

if (! defined('ABSPATH')) {
     exit;
 }


function plugindev_add_toplevel_menu() {
   
      // Top Level Menu Page
        add_menu_page( 
            'Plugindev Settings',              // string $page_title
            'Plugindev',                       // string $menu_title
            'manage_options',                  // string $capability
            'plugindev',                       // string $menu_slug
            'plugindev_display_settings_page', // callable $function
            'dashicons-admin-generic',         // string $icon_url
            null                               // int $position
        );
}
add_action('admin_menu', 'plugindev_add_toplevel_menu');
