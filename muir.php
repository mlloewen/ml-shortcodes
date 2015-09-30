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

// Create the shortcode
add_shortcode('latest-sermons', 'wpfc_display_latest_sermons_shortcode');
function wpfc_display_latest_sermons_shortcode($atts) {

    // Pull in shortcode attributes and set defaults
    extract( shortcode_atts( array(
        'id' => false,
        'posts_per_page' => '10',
        'order' => 'DESC',
        'hide_nav' => false,
        'taxonomy' => false,
        'tax_term' => false,
        'image_size' => 'sermon_small',
        'tax_operator' => 'IN',
        'before' => '',
        'after' => '',
        'class' => ''
    ), $atts, 'sermons' ) );

    $args = array(
        'post_type' => 'wpfc_sermon',
        'posts_per_page' => $posts_per_page,
        'order' => $order,
        'meta_key' => 'sermon_date',
        'meta_value' => date("m/d/Y"),
        'meta_compare' => '>=',
        'orderby' => 'meta_value',
        'paged' => $my_page,
    );

    // If Post IDs
    if( $id ) {
        $posts_in = explode( ',', $id );
        $args['post__in'] = $posts_in;
    }

    // If taxonomy attributes, create a taxonomy query
    if ( !empty( $taxonomy ) && !empty( $tax_term ) ) {

        // Term string to array
        $tax_term = explode( ', ', $tax_term );

        // Validate operator
        if( !in_array( $tax_operator, array( 'IN', 'NOT IN', 'AND' ) ) )
            $tax_operator = 'IN';

        $tax_args = array(
            'tax_query' => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field' => 'slug',
                    'terms' => $tax_term,
                    'operator' => $tax_operator
                )
            )
        );
        $args = array_merge( $args, $tax_args );
    }

    $listing = new WP_Query( $args, $atts ) ;
    // Now that you've run the query, finish populating the object
    ob_start(); ?>

    <?php
    if ( !$listing->have_posts() )
        return;
    while ( $listing->have_posts() ): $listing->the_post(); global $post; ?>
    <?php echo $before; ?>
            <a class="<?php echo $class; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php
    echo $after;
    endwhile; //end loop ?>
        <span style="clear:both;"></span>
            <?php wp_reset_postdata(); ?>
    <?php
    $buffer = ob_get_clean();
    return $buffer;
}

?>
