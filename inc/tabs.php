<?php

add_shortcode( 'tabsinit', 'tabs_init' );
add_shortcode( 'tabstitle', 'muir_tab_title' );
add_shortcode( 'tabcontent', 'muir_tab' );

function tabs_init( $atts, $content = null ) {
global $tabsnum;
return '<link async rel="stylesheet" href="' . plugins_url( 'ml-shortcodes/css/sermonicons.css' , dirname(__FILE__)) . '" type="text/css" />
<div class="tabs"><ul class="tab-links">' . do_shortcode($content) . '</div>';
}

function muir_tab_title( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'title' => 'Summary',
        'title2' => 'false',
        'title3' => 'false',
    ), $atts );
    $return ='<li class="active"><a href="#tab1"><span class="icon-summary"><div class="tab-title">' . esc_attr($a['title']) . '</div></span></a></li>';
    if (esc_attr($a['title2']) !== 'false'){
        $return = $return . '<li><a href="#tab2"><span class="icon-notes"><div class="tab-title">' . esc_attr($a['title2']) .'</div></span></a></li>';
        if (esc_attr($a['title3']) !== 'false'){
            $return = $return . '<li><a href="#tab3"><span class="icon-question"><div class="tab-title">' . esc_attr($a['title3']) .'</div></span></a></li>';
    }
    $return = $return . '</ul><div class="tab-content">' . do_shortcode($content) . '</div><div class="tabs"><ul class="tab-links">' . $return .'</ul></div>';
   return $return;
}
}

function muir_tab( $atts, $content = null ) {
    global $tabsnum;
    ++$tabsnum;
    $a = shortcode_atts( array(
        'default' => 'false',
    ), $atts );
    $return = esc_attr($a['active']);
    if ($tabsnum == 1){
        $return = '<div id="tab' . $tabsnum . '" class="tab active">';
    } else {
        $return = '<div id="tab' . $tabsnum . '" class="tab">';
    }
    $return = $return . do_shortcode($content) . '</div>';
   return $return;
}
?>
