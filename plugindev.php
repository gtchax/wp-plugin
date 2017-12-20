<?php
/**
 * Pugindev
 *
 * @package     PluginPackage
 * @author      Your Name
 * @copyright   2017 Your Name or Company Name
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Plugindev
 * Plugin URI:  https://example.com/plugin-name
 * Description: Description of the plugin.
 * Version:     1.0.0
 * Author:      Gwinyai Chakonda
 * Author URI:  https://gwinyai.me
 * Text Domain: plugin-plugindev
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

 // exit if file is called directly
 if (! defined('ABSPATH')) {
     exit;
 }

 

// if admin area
if (is_admin() ) {

    //include dependencies
    require_once plugin_dir_path( __FILE__ ) . 'admin/admin-topmenu.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
}


