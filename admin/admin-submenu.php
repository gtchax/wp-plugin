<?php // Plugindev - Admin Sub Menu

if (! defined('ABSPATH')) {
     exit;
 }

function plugindev_add_sublevel_menu() {
   
      // Settings Sublevel Menu Page
        add_submenu_page( 
            'options-general.php',             // string $parent_title, to display under Users use users.php, Tools use tools.php etc
            'Plugindev Settings',              // string $page_title
            'Plugindev',                       // string $menu_title
            'manage_options',                  // string $capability
            'plugindev',                       // string $menu_slug
            'plugindev_display_settings_page' // callable $function
                                     
        );
}
add_action('admin_menu', 'plugindev_add_sublevel_menu');