<?php
/*
Plugin Name: muir plugin
Plugin URI: http://www.muirlakealliance.ca/
Description: Various Shortcodes
Author: Matthew Loewen
Version: 1.0
Author URI: http://www.mlplace.ca
*/

if ( ! defined( 'MP_PLUGIN_DIR' ) )
    define( 'MP_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . basename( dirname( __FILE__ ) ) . '/' );

// Bible Referance tagger  Use: [reftag]
require_once( MP_PLUGIN_DIR . 'inc/reftag.php' );
// Tabs Shortcodes
require_once( MP_PLUGIN_DIR . 'inc/tabs.php' );
// social links  [social]
require_once( MP_PLUGIN_DIR . 'inc/social.php' );
//  wysiwyg cutom buttons
require_once( MP_PLUGIN_DIR . 'inc/paste-clean.php' );
//  Post Content shortcode [ml-post id=2885]
require_once( MP_PLUGIN_DIR . 'inc/post-content.php' );
// latest sermons shortcode [latest-sermons posts_per_page="1"]
require_once( MP_PLUGIN_DIR . 'inc/latest-sermons.php' );

?>
