<?php
/*
Template Name: Email Subscription - Rider
*/
?>
            
       <?php get_header(); ?>



<table align="center" border="0" cellpadding="20"><tr><td>&nbsp;</td><tr><td>
	<h1>Subscribe to Enews</h1></td></tr><tr><td>&nbsp;</td><tr><tr><td>
<script type="text/javascript">
/***********************************************
* Textarea Maxlength script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
function ismaxlength(obj, mlength)
{
  if (obj.value.length > mlength)
    obj.value = obj.value.substring(0, mlength)
}
</script>



<form method="post" name="profileform" action="https://EPGMediaLLC.informz.net/clk/remote_post.asp">
  <table width="593" cellspacing="0" cellpadding="0" bgcolor="#ffffff" border="0">
  
      <tr>
        <td colspan="2">
        <font face=Arial size=3 color="#000000"></font>
        </td>
      </tr>
    
<SCRIPT LANGUAGE="JavaScript">
function moveCaret(event, objThisField, objNextField, objPrevField, nSize)
{
	var keynum;
	if(window.event) // IE	
		keynum = event.keyCode;	
	else if(event.which) // Netscape/Firefox/Opera	
		keynum = event.which;				
	if (keynum == 37 || keynum == 39 || keynum == 38 || keynum == 40 || keynum == 8) //left, right, up, down arrows, backspace
	{		
		var nCaretPosition = getCaretPosition(objThisField);		
		if (keynum == 39 && nCaretPosition == nSize)
			moveToNextField(objNextField);		   
		if ((keynum == 37 || keynum == 8) && nCaretPosition == 0)			
			moveToPrevField(objPrevField);		   
		return;
	}
	if (keynum == 9) //Tab
		return;
	if (objThisField.value.length >= nSize && objNextField != null)
		moveToNextField(objNextField);
}  
function moveToNextField(objNextField)
{
	if (objNextField == null)
		return;
	objNextField.focus();
	if (document.selection) //IE
	{
		oSel = document.selection.createRange ();
		oSel.moveStart ('character', 0);
		oSel.moveEnd ('character', objNextField.value.length);
		oSel.select();							
	}
	else
	{
	   objNextField.selectionStart = 0;
       objNextField.selectionEnd = objNextField.value.length;
	}
}
function moveToPrevField(objPrevField)
{
	if (objPrevField == null)
		return;
	objPrevField.focus();
	if (document.selection) //IE
	{		
		oSel = document.selection.createRange ();
		oSel.moveStart ('character', 0);
		oSel.moveEnd ('character', objPrevField.value.length);
		oSel.select ();					
	}
	else
	{
	   objPrevField.selectionStart = 0;
       objPrevField.selectionEnd = objNextField.value.length;
	}
}
function getCaretPosition(objField)
{
	var nCaretPosition = 0;
	if (document.selection) //IE
	{
	   var oSel = document.selection.createRange ();
	   oSel.moveStart ('character', -objField.value.length);
	   nCaretPosition = oSel.text.length;
	}	
	if (objField.selectionStart || objField.selectionStart == '0')
       nCaretPosition = objField.selectionStart;
	return nCaretPosition;
}
</script>
    <tr>
   <td colspan="2"  bgcolor="#333333" align="left">
		<b><font face="Arial" color="#ffffff" size=4>&nbsp;Enter Your Information</font></b>
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
    <td></td>
    </tr>
<tr>
  <td colspan="2" width="100%">
    <table width="400" cellspacing="5" cellpadding="0" bgcolor="#ffffff" border="0">
      <tr>
        <td width="38%" nowrap valign="top"  align="left" >
          <font face=Arial size=3 color="#000000">Email:<FONT COLOR="RED">*</FONT></font>&nbsp;
        </td>
        <td width="62%" align="left" valign="top"><font face=Arial size=3 color="#000000">	
          <input alt="Email Address" type="text" name="email" size="25" maxlength="100" value="" >
		  
        </td>
      </tr>
    
        <tr>
          <td valign="top"  align="left"  width='38%' >
            <font face=Arial size=3 color="#000000">First Name:
            </font>&nbsp;
          </td>
  
            <td align="left" valign="top"  width='62%' >
              <input alt="First Name" type="text" name="personal_5784" value="" size="30" maxlength="500">
            </td>
          </tr>
        <tr>
          <td valign="top"  align="left"  width='38%' >
            <font face=Arial size=3 color="#000000">Last Name:
            </font>&nbsp;
          </td>
  
            <td align="left" valign="top"  width='62%' >
              <input alt="Last Name" type="text" name="personal_5785" value="" size="30" maxlength="500">
            </td>
          </tr>
          <tr>
            <td valign="top"  align="left"  width='38%' >
              <font face=Arial size=3 color="#000000">State/Province:
              </font>&nbsp;
            </td>
    
            <td align="left"  width='62%' valign=bottom >
  
                  <select name="demo_810" size="1">
    
                        <option value="">&nbsp;</option>
        
                      <option value="36647">AK</option>
      
                      <option value="36648">AL</option>
      
                      <option value="36649">AR</option>
      
                      <option value="36650">AZ</option>
      
                      <option value="36651">CA</option>
      
                      <option value="36652">CO</option>
      
                      <option value="36653">CT</option>
      
                      <option value="36654">DC</option>
      
                      <option value="36655">DE</option>
      
                      <option value="36656">FL</option>
      
                      <option value="36657">GA</option>
      
                      <option value="36658">HI</option>
      
                      <option value="36659">IA</option>
      
                      <option value="36660">ID</option>
      
                      <option value="36661">IL</option>
      
                      <option value="36662">IN</option>
      
                      <option value="36663">KS</option>
      
                      <option value="36664">KY</option>
      
                      <option value="36665">LA</option>
      
                      <option value="36666">MA</option>
      
                      <option value="36667">MD</option>
      
                      <option value="36668">ME</option>
      
                      <option value="36669">MI</option>
      
                      <option value="36670">MN</option>
      
                      <option value="36671">MO</option>
      
                      <option value="36672">MS</option>
      
                      <option value="36673">MT</option>
      
                      <option value="36674">NC</option>
      
                      <option value="36675">ND</option>
      
                      <option value="36676">NE</option>
      
                      <option value="36677">NH</option>
      
                      <option value="36678">NJ</option>
      
                      <option value="36679">NM</option>
      
                      <option value="36680">NV</option>
      
                      <option value="36681">NY</option>
      
                      <option value="36682">OH</option>
      
                      <option value="36683">OK</option>
      
                      <option value="36684">OR</option>
      
                      <option value="36685">PA</option>
      
                      <option value="36686">RI</option>
      
                      <option value="36687">SC</option>
      
                      <option value="36688">SD</option>
      
                      <option value="36689">TN</option>
      
                      <option value="36690">TX</option>
      
                      <option value="36691">UT</option>
      
                      <option value="36692">VA</option>
      
                      <option value="36693">VT</option>
      
                      <option value="36694">WA</option>
      
                      <option value="36695">WI</option>
      
                      <option value="36696">WV</option>
      
                      <option value="36697">WY</option>
      
                      <option value="36698">AB</option>
      
                      <option value="36699">BC</option>
      
                      <option value="36700">MB</option>
      
                      <option value="36701">NB</option>
      
                      <option value="36702">NF</option>
      
                      <option value="36703">NS</option>
      
                      <option value="36704">NT</option>
      
                      <option value="36705">NU</option>
      
                      <option value="36706">ON</option>
      
                      <option value="36707">PE</option>
      
                      <option value="36708">QC</option>
      
                      <option value="36709">SK</option>
      
                      <option value="36710">YT</option>
      
                      <option value="36711">AA</option>
      
                      <option value="36712">AE</option>
      
                      <option value="36713">AP</option>
      
                      <option value="36714">AS</option>
      
                      <option value="36715">FM</option>
      
                      <option value="36716">GU</option>
      
                      <option value="36717">MH</option>
      
                      <option value="36718">MP</option>
      
                      <option value="36719">PR</option>
      
                      <option value="36720">PW</option>
      
                      <option value="36721">VI</option>
      
                  </select>
  
            </td>
          </tr>
        <tr>
          <td valign="top"  align="left"  width='38%' >
            <font face=Arial size=3 color="#000000">Zip or Postal Code:
            </font><FONT COLOR="RED">*</FONT>&nbsp;
          </td>
  
            <td align="left" valign="top"  width='62%' >
              <input alt="Zip Code" type="text" name="personal_6146" value="" size="30" maxlength="500">
            </td>
          </tr>




    </table>
  </td>
</tr>
<tr>
  <td colspan="2" width="100%">
  <font face=Arial size=3 color="#000000"><font color=red size="1">*</font>&nbsp;Required</font><br>
  
  </td>
</tr>
<script type="text/javascript">
	function ShowDescriptions(SubDomain,val, brid) {
		myWindow = window.open(SubDomain + '/description.asp?brid=' + brid + '&id=' + val, 'Description', 'location=no,height=180,width=440,resizeable=no,scrollbars=yes,dependent=yes');
		myWindow.focus()
	}
</script>
<tr><td colspan="2" width="100%"></td></tr><tr><td>&nbsp;</td></tr><tr><td colspan="2" width="100%" bgcolor="#333333" align="left"><b><font face="Arial" color="#ffffff" size=4>&nbsp;Select Your Interests</font></b></td></tr><tr><td colspan="2"><table cellspacing="5"><tr><td width="537"><a href='#' onClick="ShowDescriptions('http://EPGMediaLLC.informz.net/EPGMediaLLC',64929,0); return false;"><font face=Arial size=3 color="#000000">Rider Magazine Newsletter and Communications</font></td><td width="20"><input alt="Rider Magazine Newsletter and Communications" type="checkbox" checked="true" value="64929" name="interests" ></td></tr><tr><td width="537"><a href='#' onClick="ShowDescriptions('http://EPGMediaLLC.informz.net/EPGMediaLLC',65486,0); return false;"><font face=Arial size=3 color="#000000">Email communications from other reputable motorcycle industry companies</font></td><td><input alt="Email communications from other reputable motorcycle industry companies" type="checkbox" checked="true" value="65486" name="interests" ></td></tr><input type="hidden" name="OptoutInfo" value=""></table><font face=Arial size=3 color="#000000"><font size="1">You will receive tailored information according to your interests.</font><font face=Arial size=3 color="#000000"></td></tr>
  <tr>
    <td colspan="2"><input type="hidden" name="formats" value="3"></td>
  </tr>
      <tr>
        <td colspan="2">
          <br><input type="submit" border=0 value="Next >>" name="update" style="background-color: #214b7b; color: #ffffff; border-style: groove; font-size: 16pt;border-color: #ffffff">
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <font face=Arial size=3 color="#000000"></font>
        </td>
      </tr>
  
  </table>
<input type=hidden name=fid value=2105>
<input type=hidden name=b value=3678>
<input type=hidden name=returnUrl value="http://www.ridermagazine.com/you-are-now-subscribed/?zmsg=1">
</form>


<script language='javascript'>
fullURL = document.URL
sAlertStr = ''
nLoc = fullURL.indexOf('&')
if (nLoc == -1)
	nLoc = fullURL.length
if (fullURL.indexOf('zreq=') > 0){
	sRequired = fullURL.substring(fullURL.indexOf('zreq=')+5, nLoc)
	if (sRequired.length > 0){
		sRequired = ',' + sRequired.replace('%20',' ')
		sRequired = sRequired.replace(/,/g,'\n  - ')
		sAlertStr = 'The following item(s) are required: '+sRequired + '\n'
	}
}
if (fullURL.indexOf('zmsg=') > 0) {
	sMessage = fullURL.substring(fullURL.indexOf('zmsg=')+5, fullURL.length)
	if (sMessage.length > 0) {
		sMessage = sMessage.replace(/%20/g, ' ')
		sMessage = sMessage.replace(/%0A/g, '\n')
		sAlertStr = sAlertStr + sMessage
	}
}

if (sAlertStr.length > 0)
	alert(sAlertStr)
</script>
</td></tr></table>

<?php get_footer(); ?>