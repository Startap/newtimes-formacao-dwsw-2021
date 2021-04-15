<?php

/**
 * This is the Scripts file. We use this file to keep tracking our
 * marketing tool's JS. Such as Facebook Pixel, Google Adsense, Analytics
 * and any other type of tool in this category. 
 * 
 * All of our actual Javascript to deal with the interface should be put  
 * into a app.js file inside the assets folder.
 */
?>

<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '821091978493748');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=821091978493748&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->