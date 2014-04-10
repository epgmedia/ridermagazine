<html>
<body>


<a href="" onmouseover="pushIt('testClick');">Rider Magazine on Facebook</a>
<br />
<a href="" onmouseover="pushIt('testClick','value of fld2');">fld2 defined</a>
<br />

<script language="JavaScript" type="text/javascript">

var URLname = document.URL;
function pushIt(catIn,fld2) {
//_gaq.push(['_trackEvent', '+catIn+', 'Click', '+URLname+']);
//_gaq.push(['_trackEvent', catIn, 'Click', URLname]);
if (typeof fld2=="undefined"){
document.write("catIn="+catIn+"<br>fld2=undefined<br><br>test");
}else{
document.write("catIn="+catIn+"<br>fld2="+fld2+"<br><br>test");
}
    
}    
</script>

</body>
</html>