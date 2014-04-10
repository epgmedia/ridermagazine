<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en, sv" />
<meta name="viewport" content="width=device-width,initial-scale=.5,user-scalable=yes" />

<title><?php bloginfo('name'); ?><?php if(wp_title('', false)) { echo ' : '; wp_title(''); } else { echo ' : '; bloginfo('description'); } ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats please -->

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21503281-3']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>


<link rel="apple-touch-icon" href="/wp-content/uploads/2011/12/riderapplebutton.gif" />
<link rel="Shortcut Icon" href="<?php echo get_theme_mod('favicon'); ?>" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>

<?php wp_enqueue_style('thickbox'); ?> <!-- inserting style sheet for Thickbox.  -->

<?php wp_enqueue_script('thickbox'); ?> <!--  including Thickbox javascript. -->

<!-- begin content slider -->
<script src="<?php bloginfo('template_url'); ?>/javascript/jquery-latest.pack.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/jquery.cycle.all.min.js"></script>

<script type="text/javascript">
	var $ = jQuery.noConflict();
		$(document).ready(function(){	
		 	$('#slideshow').cycle({
			fx:      "<?php echo get_theme_mod('top-stories-transition'); ?>", // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
			pager:   '#pager',  // selector for element to use as pager container
			speed: <?php echo get_theme_mod('top-stories-trans-speed'); ?>,
			<?php if (get_theme_mod('top-stories-automate')=="On") { ?>
			timeout: <?php echo get_theme_mod('top-stories-speed'); ?>,  // milliseconds between slide transitions (0 to disable auto advance)
			pause:   true,	  // true to enable "pause on hover"
			pauseOnPagerHover: true // true to pause when hovering over pager link
			<?php } else { ?>
			timeout: 0
			<?php } ?>
			});
	
		});	
</script>


<script src="<?php bloginfo('template_url'); ?>/javascript/jcarousellite_1.0.1c4.js" type="text/javascript"></script>  




<?php wp_head(); ?>


<style type="text/css" media="screen"><!-- @import url( <?php bloginfo('stylesheet_url'); ?> ); --></style>

<?php include(TEMPLATEPATH . "/customstyles.php"); ?>




<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	if (!document.getElementsByTagName) return false;
	var sfEls = document.getElementById("nav").getElementsByTagName("li");

	// if you only have one main menu - delete the line below //
	var sfEls1 = document.getElementById("subnav").getElementsByTagName("li");
	//

	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}

	// if you only have one main menu - delete the "for" loop below //
	for (var i=0; i<sfEls1.length; i++) {
		sfEls1[i].onmouseover=function() {
			this.className+=" sfhover1";
		}
		sfEls1[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover1\\b"), "");
		}
	}
	//

}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>





</head>


<body>
<div id="rightcolumnads">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(6) ) : else : endif; ?>
</div>
<div id="pagetop"></div>

	<?php if (get_theme_mod('leaderboard-location') == "Above Header") include(TEMPLATEPATH . "/leaderboardhead.php"); ?>



<?php if (get_theme_mod('breakingnews-location') == "Header") { ?>
<?php $scrollspeed = get_theme_mod('breakingnews-speed'); ?>

<?php $bncheck = get_option('bsno'); if ($bncheck == "bsno837625b") 

	{ include(TEMPLATEPATH."/tools/breakingnews.php"); } ?>

<?php } ?>

<div id="wrap">

<div id="header">

  <div id="headerleft" <?php if(get_theme_mod('header_blog_title') == 'Image') { ?>style="padding-left:0px;width:960px;" <?php } ?>>

    <?php if(get_theme_mod('header_blog_title') == 'Image') { ?>

            <a href="<?php echo get_settings('home'); ?>/"><img src="<?php echo get_theme_mod('header-image'); ?>" style="width:<?php echo get_theme_mod('header-width'); ?>px;height:<?php echo get_theme_mod('header-height'); ?>px" alt="<?php bloginfo('description'); ?>" /></a>

    <?php } else { ?>


                <a href="<?php echo get_settings('home'); ?>/"><h1><?php bloginfo('name'); ?></h1></a>
                <p><?php bloginfo('description'); ?></p>  


    <?php } ?>
	</div>
	
	

</div>

<div id="navbar">

	<div id="navbarleft">
		<ul id="nav">
   			<?php wp_nav_menu( array('menu' => 'Top Menu') ); ?>
		</ul>
	</div>
	
	<div id="navbarright">
		<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" value="search our site..." name="s" id="searchbox" onfocus="if (this.value == 'search our site...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'search our site...';}" /><input type="image" style="vertical-align:top;" src="<?php bloginfo('template_url'); ?>/images/search.png" alt="Search" /></form>
	</div>
	
</div>


<?php if (get_theme_mod('bottomnav')=="Show") { ?>

<div id="subnavbar">
	<ul id="subnav">
   			<?php wp_nav_menu( array('menu' => 'Bottom Menu') ); ?>
	</ul>

		<div class="subnavbarright">
		<p><a href="<?php bloginfo('rss_url'); ?>"><img style="vertical-align:middle" src="<?php bloginfo('template_url'); ?>/images/rss.gif" alt="Subscribe to <?php bloginfo('name'); ?>" /></a></p>
		</div>
</div>


<?php } ?>

	<?php if (get_theme_mod('leaderboard-location') == "Below Header") include(TEMPLATEPATH . "/leaderboardhead.php"); ?>

<div class="innerwrap">

<!-- leave this for clickable background please -->
<script>
(function($){
  $(document).ready(function(){
	$(document).click(function(e){
	   if(e.target.nodeName == "HTML" || e.target.nodeName == "BODY"){
	    window.open('http://bs.serving-sys.com/BurstingPipe/adServer.bs?cn=tf&c=20&mc=click&pli=3856917&PluID=0&ord=[timestamp]');
	   }
	})
   })
})(jQuery);</script>
