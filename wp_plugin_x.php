
/*
Plugin Name:  wp plugin x
Plugin URI:    https://github.com/bayon/wp_plugin_x
Description:   Absolute most basic plugin.
Version:      1.0.0
Author:       sprite-pilot.com
Author URI:   https://www.sprite-pilot.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:   wp_plugin_x
Domain Path:  /languages

GitHub Plugin URI: https://github.com/bayon/wp_plugin_x
*/
<?php
//defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
 ?>

 <?php
 //
 /*
 dev/wp_dev/wp-content/plugins/wp_plugin_x/wp_plugin_x.php
 WP_PLUGIN_X
 Warning: Cannot modify header information - headers already sent by (output started at /home/fortew6/public_html/dev/wp_dev/wp-content/plugins/wp_plugin_x/wp_plugin_x.php:1) in /home/fortew6/public_html/dev/wp_dev/wp-admin/includes/misc.php on line 1114
got this error probably for echoing out the following lines.

I think I was wrong I think the abspath code above was echoing out something ....
 */
echo("<br>".__FILE__);
echo("<br>WP_PLUGIN_X");
  ?>
