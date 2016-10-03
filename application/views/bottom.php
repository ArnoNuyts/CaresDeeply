</div>
<?php foreach($javascripts as $js): ?>
    <script crossorigin="anonymous" type="text/javascript" src="<?= strpos($js, '//') === FALSE? base_url("js/$js"):$js; ?>"></script>
<?php endforeach; ?>
<? /*
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.caresdeeply.be/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.caresdeeply.be/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code --> */ ?>
</body>
</html>
