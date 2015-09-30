<?php
//  Post Content shortcode [ml-post id=2885]
function ml_postcontent( $atts ){
    $a = shortcode_atts( array(
        'id' => '',), $atts );
    $post_id = $a['id'];
    $queried_post = get_post($post_id);
    $title = $queried_post->post_title;
    return do_shortcode(wpautop($queried_post->post_content));
}

add_shortcode( 'post-content', 'ml_postcontent' );
add_shortcode( 'ml-post', 'ml_postcontent' );
?>
