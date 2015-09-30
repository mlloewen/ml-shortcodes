<?php

// Filter Functions with Hooks
function custom_mce_button() {
  // Check if user have permission
  if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
    return;
  }
  // Check if WYSIWYG is enabled
  if ( 'true' == get_user_option( 'rich_editing' ) ) {
    add_filter( 'mce_external_plugins', 'custom_tinymce_plugin' );
    add_filter( 'mce_buttons', 'register_mce_button' );
  }
}
add_action('admin_head', 'custom_mce_button');

// Function for new button
function custom_tinymce_plugin( $plugin_array ) {
    $url = plugins_url()."/ml-shortcodes";
    $plugin_array['custom_mce_button'] = $url . '/editor_plugin.js';
   // echo $url . '/editor_plugin.js';
  return $plugin_array;
}

// Register new button in the editor
function register_mce_button( $buttons ) {
  array_push( $buttons, 'custom_mce_button' );
  return $buttons;
}

?>
