<html>
<body>


<a href="http://www.facebook.com/RiderMagazine" onClick="pushIt('testClick');">Rider Magazine on Facebook</a>

<script language="JavaScript" type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21503281-3']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


var URLname = document.URL;
function pushIt(catIn) {
//_gaq.push(['_trackEvent', '+catIn+', 'Click', '+URLname+']);
_gaq.push(['_trackEvent', catIn, 'Click', URLname]);
}    
</script>

</body>
</html>