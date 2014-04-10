</div><!--innerwrap-->

<?php if (get_theme_mod('display-leader-footer') == "Yes") include(TEMPLATEPATH . "/leaderboardfoot.php"); ?>


<!-- begin footer -->

<div style="clear:both;"></div>
</div><!--wrap-->

<div id="footer">
<?php wp_reset_query(); ?>
	<p>Copyright &copy; <?php echo date('Y'); ?> &bull; <a href="<?php if (get_theme_mod('google-apps')) { echo get_theme_mod('google-apps'); } else { bloginfo('url'); } ?>"><?php bloginfo('name'); ?></a> &bull; Design</a> by <a href="http://www.schoolnewspapersonline.com">SNO Sites</a> and <a href="http://www.godengo.com">Godengo</a> &bull; <a href="/about-us/" >About Us</a> &bull; <a href="/contact-us/" >Contact Us</a> &bull; <a href="/advertise/" >ADVERTISE WITH US</a> &bull; <a href="/uncategorized/terms-and-conditions.htm" >Privacy</a> &bull; <?php wp_loginout(); ?><?php wp_register(' &bull; ', ''); ?>

</p>

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