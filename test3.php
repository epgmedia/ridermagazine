<html>
<body>


<a href="" onmouseover="trackGAEvent('testClick');">Rider Magazine on Facebook</a>
<br />
<a href="" onmouseover="trackGAEvent('testClick','value of fld2');">fld2 defined</a>
<br />

<script language="JavaScript" type="text/javascript">

function trackGAEvent(catIn,actionIn) {
//_gaq.push(['_trackEvent', '+catIn+', 'Click', '+URLname+']);
//_gaq.push(['_trackEvent', catIn, 'Click', URLname]);
document.write("catIn="+catIn+"<br>actionIn="+actionIn+"<br><br>test");
    
}    
</script>

</body>
</html>