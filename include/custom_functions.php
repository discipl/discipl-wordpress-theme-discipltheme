<?php
/*
 * Custom Function File
 *
 * Place your custom function, filter and hooks here. This will keep your functions 
 * when there is a theme update.
 *
 */

 
 //========================================================================================================

add_filter( 'genesis_after', 'rhswp_trackercode', 999 );

function rhswp_trackercode() {
  
  if ( 'www.discipl.org' == $_SERVER["HTTP_HOST"] || 'discipl.org' == $_SERVER["HTTP_HOST"] ) { 
        echo '<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["enableLinkTracking"]);
  _paq.push(["setLinkTrackingTimer", 750]);
  _paq.push(["enableHeartBeatTimer"]);
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);
  (function() {
    var u="//statistiek.rijksoverheid.nl/piwik/";
    _paq.push(["setTrackerUrl", u+"js/tracker.php"]);
    _paq.push(["setSiteId", 875]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0];
    g.type="text/javascript"; g.async=true; g.defer=true; g.src=u+"js/tracker.php"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->';
    }
    else {
        if ( WP_DEBUG ) {
          echo '<!-- Geen Piwik: ' . $_SERVER["HTTP_HOST"] . '-->';
        }
    }
}

//========================================================================================================
