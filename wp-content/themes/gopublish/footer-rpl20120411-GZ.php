</div><!--innerwrap-->




<!-- begin footer -->

<div style="clear:both;"></div>
</div><!--wrap-->
<form method="post" action="https://w1.buysub.com/servlet/OrdersGateway?cds_mag_code=RDR&cds_page_id=69279&cds_response_key=T2EMBED">
  <table width="960" height="300" align="left" background="/wp-content/uploads/2012/02/rider.jpg" no-repeat>
    <tr>
      <td width="618" height="35"></td>
    </tr>
    <tr>
      <td width="618" height="35"></td>
    </tr>
    <tr>
      <td width="618" height="20"></td>
    </tr>
    <tr>
      <td width="618"></td>
      <td width="112" height="25"><div align="right">
        <p><font color="#fff">Email:</font></p>
      </div></td>
      <td colspan="3"><div align="left">
        <input type="text" value="" name="cds_email" size="40"/>
      </div></td>
         </tr>
    <tr>
      <td width="618"></td>
      <td height="25"><div align="right">
        <p><font color="#fff">Name:</font></p>
      </div></td>
      <td colspan="3"><div align="left">
        <input type="text" value="" name="cds_name" size="40"/>
      </div></td>
    </tr>
    <tr>
      <td width="618"></td>
      <td height="25"><div align="right">
        <p><font color="#fff">Address:</font></p>
      </div></td>
      <td colspan="3"><div align="left">
        <input type="text" value="" name="cds_address_1" size="40" />
      </div></td>
    </tr>
    <tr>
      <td width="618"></td>
      <td height="25"><div align="right">
        <p><font color="#fff">City:</font></p>
      </div></td>
      <td colspan=3><div align="left">
        <input type="text" value="" name="cds_city" size="40"/>
      </div></td>
    </tr>
    <tr>
      <td width="618"></td>
      <td height="25"><div align="right">
        <p><font color="#fff">State:</font></p>
      </div></td>
      <td width="23"><div align="left">
        <input type="text" name="cds_state" size="3" maxlength="2" /> 
      </div></td>
      <td width="80" height="25"><div align="right">
        <p><font color="#fff">ZIP:</font></p>
      </div></td>
      <td width="214"><div align="left">
        <input type="text" name="cds_zip" size="10" /> 
      </div></td>
    </tr>
        <tr>
      <td width="537"></td>
      <td colspan="4" height="25" align="center"><input type="submit" value="Subscribe Now!" name="send"></input></td>
         </tr>
</table></form>

<?php if (get_theme_mod('display-leader-footer') == "Yes") include(TEMPLATEPATH . "/leaderboardfoot.php"); ?>

<div style="clear:both"></div>

<div id="footer">
<?php wp_reset_query(); ?>
	<p>Copyright &copy; <?php echo date('Y'); ?> &bull; <a href="<?php if (get_theme_mod('google-apps')) { echo get_theme_mod('google-apps'); } else { bloginfo('url'); } ?>"><?php bloginfo('name'); ?></a> &bull; Design</a> by <a href="http://www.schoolnewspapersonline.com">SNO Sites</a> and <a href="http://www.godengo.com">Godengo</a> &bull; <a href="/about-us/" >About Us</a> &bull; <a href="/contact-us/" >Contact Us</a> &bull; <a href="/advertise/" >ADVERTISE WITH US</a> &bull; <a href="/privacy-policy" >Privacy</a> &bull; <a href="#" onClick="toggle('status',1);return false;">Site Info</a> &bull; <?php wp_loginout(); ?><?php wp_register(' &bull; ', ''); ?>

</p>



<table id="status1" width="850" align="center" cellpadding="0" cellspacing="0" class="ftrtable">
  <tr valign="middle">
    <td width="101%" colspan="4" ><p align="center"><br />
    Rider Magazine . Motorcycle Reviews - Motorcycle Touring</p>
      <p align="center"><br />
      </p></td>
  </tr>
  </table>
<script language="javascript"> toggle('status',1) </script>



</div>

<?php do_action('wp_footer'); ?>


            <?php if(get_theme_mod('analytics') == 'Yes') { ?>
                
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo get_theme_mod('analytics_code'); ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

            <?php } ?> 

</body>
</html>