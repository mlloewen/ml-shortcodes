<?php

// Bible Referance tagger  Use: [reftag]
// Add Shortcode
add_shortcode( 'reftag', 'custom_bibly' );
function custom_bibly() {
    // Code
return '<script async src="http://www.blueletterbible.org/scripts/blbToolTip/BLB_ScriptTagger-min.js" type="text/javascript"></script>
<script type="text/javascript">
BLB.Tagger.Translation = "ESV";
BLB.Tagger.HyperLinks = "all";
BLB.Tagger.HideTranslationAbbrev = false;
BLB.Tagger.TargetNewWindow = true;
BLB.Tagger.Style = "par";
</script>';
/*
return '<script src="http://code.bib.ly/bibly.min.js"></script>
<link href="http://code.bib.ly/bibly.min.css" rel="stylesheet" />
*/
}

?>
