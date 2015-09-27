<?php

add_shortcode( 'social', 'muir_social' );

function muir_social( $atts, $content = null ) {
$current_url='http.//' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>
<!-- I got these buttons from simplesharebuttons.com -->
<div id="share-buttons">
<!-- Facebook -->
<a href="https://www.facebook.com/sharer.php?u=<?php echo $current_url?>" target="_blank"><img data-src="<?php echo plugins_url( 'img/facebook.png' , dirname(__FILE__)); ?>" alt="Facebook" class="lazyload" data-expand="-1" /></a>
<!-- Twitter -->
<!-- <a href="http://twitter.com/share?url=<?php echo $current_url?>" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a> -->
<!-- Google+ -->
<a href="https://plus.google.com/share?url=<?php echo $current_url?>" target="_blank"><img data-src="<?php echo plugins_url( 'img/google.png' , dirname(__FILE__)); ?>" alt="Google" class="lazyload" data-expand="-1" /></a>
<!-- Digg -->
<!-- <a href="http://www.digg.com/submit?url=http://www.simplesharebuttons.com" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" /></a> -->
<!-- Reddit -->
<!-- <a href="http://reddit.com/submit?url=http://www.simplesharebuttons.com&title=Simple Share Buttons" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" /></a> -->
<!-- LinkedIn -->
<!-- <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.simplesharebuttons.com" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" /></a> -->
<!-- Pinterest -->
<!-- <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><img src="http://www.simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" /></a> -->
<!-- StumbleUpon-->
<!-- <a href="http://www.stumbleupon.com/submit?url=http://www.simplesharebuttons.com&title=Simple Share Buttons" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/stumbleupon.png" alt="StumbleUpon" /></a> -->
<!-- Email -->
<a href="mailto:?Subject=Muir Lake Community Alliance Church&Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php echo $current_url?>"><img data-src="<?php echo plugins_url( 'img/email.png' , dirname(__FILE__)); ?>" alt="Email" class="lazyload" data-expand="-1" /></a>
</div>

<?php
}
?>
