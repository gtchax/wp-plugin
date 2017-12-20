<?php // Plugindev - Settings Page

if (! defined('ABSPATH')) {
     exit;
 }

//display settings page

 function plugindev_display_settings_page() {

     // Check if user is allowed acces
     if ( ! current_user_can( 'manage_options' )) return;

     ?>

    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() );?></h1>
        <form action="options.php" method="post">
            <?php
                //output security fields
                // plugindev_options is the name of the settings group to be displayed
                settings_fields('plugindev_options');

                // output setting sections
                // plugindev defines menu slug
                do_settings_sections( 'plugindev' );

                submit_button( 'Save settings');
            ?>
        </form>
    </div>
<?php
} 