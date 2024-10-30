<?php
  // If this file is called directly, abort.
  if ( ! defined( 'ABSPATH' ) ) {
    exit;
  }
//here is where we the post types thanks to https://codex.wordpress.org/Function_Reference/get_post_types
  function get_all_the_post_types_function() {
    $all_post_types = get_post_types();
    foreach ( $all_post_types as $post_type ) {
        // revision/nav_bar_item post types
        if ( in_array( $post_type, array( 'revision', 'nav_menu_item', 'attachment', 'custom_css', 'customize_changeset' ) ) ) {
            // Custom stuff here
        } else {
          //start the accordion div here
          echo '<tr><td class="row-title">';
          echo 'Post Type: <em>' . esc_attr__( $post_type ) . '</em>';
          echo '</td></tr>';
          //stop the accordion div here
        }
    }
  }
?>