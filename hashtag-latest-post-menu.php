<?php
/*
    * Plugin Name: Hashtag URL Placeholder
    * Plugin URI:  https://wordpress.org/plugins/hashtag-url-placeholder
    * Description: Create a #hastag linking to your latest post, in a post type or category.
    * Version:     1.3
    * Author:      Russell Aaron
    * Author URI:  http://russellenvy.com
    * Text Domain: hashtag-url-placeholder
    * License: GPL2
    * GitHub Plugin URI: https://github.com/KrashKartMedia/hashtag-url-placeholder
*/
  // If this file is called directly, abort.
  if ( ! defined( 'ABSPATH' ) ) {
    exit;
  }
   define( 'HUP_Version', '1.3' );
  //code used from Hugh Lashbrooke - http://www.hughlashbrooke.com/2012/07/wordpress-add-plugin-settings-link-to-plugins-page/
  function hashtag_url_settings_link( $links ) {
  $settings_link = '<a href="/wp-admin/options-general.php?page=hashtag-latest-post">' . __( 'Settings' ) . '</a>';
      array_push( $links, $settings_link );
        return $links;
  }
  $plugin = plugin_basename( __FILE__ );
  add_filter( "plugin_action_links_$plugin", 'hashtag_url_settings_link' );
 include 'get_post_types.php';
 include 'create_settings.php';
?>