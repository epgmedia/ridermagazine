<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>BMW MOTORCYCLE ROAD TESTS: Rider Magazine | Expert Motorcycle Reviews</title>
<meta name="description" content=" BMW motorcycle road tests and reviews: Find latest BMW motorcycle buyers guide, motorcycle accessories reviews and more from Rider Magazine.  BMW adventure touring motorcycles, BMW R 1200 GS reviews,..." />
<meta name="keywords" content="bmw motorcycle reviews,bmw motorcycle road tests,bmw motorcycle buyers guide" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<!-- leave this for stats please -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	//Small ad blows up to big ad on hover, then close button closes the large ad
$(".smallad").hover(function(){	
$(".largead").show();
$(".closebtn").show();
$(".closebtn").click(function(){
$(".largead").hide();
$(".closebtn").hide();
	});
});

//Click anywhere on the page to hide the large ad
$("html").click(function(){
	$(".largead").hide();
});

});
</script>


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

function trackGAEvent(catIn,actionIn) {
_gaq.push(['_trackEvent', catIn, actionIn]);
}    

function trackGAEvent3(catIn,actionIn,evtLabel) {
_gaq.push(['_trackEvent', catIn, actionIn, evtLabel]);
}    
 
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


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/togglemenu.js"></script>


</head>


<body onLoad="return window_onload();">
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

<?php 
//echo "b4 breadcrumb<br>";
include(TEMPLATEPATH."/breadcrumb.php");
//echo "after breadcrumb<br>";
?>
</div>			
<?php 

//Rider Magazine’s 2012 Motorcycle of the Year


//if (have_posts()) : while (have_posts()) : the_post(); 
if (have_posts()){echo "have posts";}else{echo "have no posts";}


echo "got here 0";

//$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
echo "got here 1";
//if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
// 			$number = 10;
$number = 3;
echo "got here 2";
$r = new WP_Query(array('posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true));
echo "got here 3";
if ($r->have_posts()){echo "have posts2";}else{echo "have no posts2";}


//275 81 BMW Motorcycle Reviews BMW motorcycle reviews, comparisons and news from Rider magazine. Search for a specific review using our search option or browse our full collection of BMW road tests.
//query_posts('cat=81');
query_posts('cat=81'.'&orderby=date&order=asc&showposts=3');
while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a></li>
<?php endwhile;?>


<h1>BMW Motorcycle Road Tests &amp; Reviews</h1>
<p>INSERT ARTICLE DATABASE HERE: http://www.ridermagazine.com/manufacturer/bmw</p>
<h2><strong>BMW Motorcycle Guide </strong></h2>
<p>BMW, an acronym for Bayerische Motoren Werke, is a German motorcycle, automobile and engine manufacturing company founded in 1917. BMW motorcycle road tests began 1923 when the motorbikes were first manufactured using an air-cooled, horizontally opposed “boxer” twin engine, a much modernized version of which still powers several models in BMW's current lineup. </p>
<h2><strong>BMW Motorcycles, Who Uses Them? </strong></h2>
<p><a href="http://www.ridermagazine.com/manufacturer/bmw" title="BMW motorcycle reviews">BMW motorcycle reviews</a> feature street-legal motorcycles for touring, sport touring, sport riding and dual-sport/adventure. BMW also owns Husqvarna, an Italian manufacturer of dirt bikes. </p>
<h2><strong>BMW Motorcycle Standouts </strong></h2>
<p>BMW's most iconic current model is the BMW R 1200 GS, an adventure touring motorcycle that is the company's best seller. Originally introduced in 1980 as the R80G/S, it popularized the concept of Gel&auml;nde/Strasse (German for off-road/on-road) and helped launch the dual-sport/adventure touring market. The 1979 BMW R100RT was the company's first touring motorcycle, which featured a windscreen, fairing, saddlebags and shaft drive; later versions of the R-RT introduced oil cooling for the trademark boxer engine, BMW motorcycle road tests examine the unique Telelever front and Paralever rear suspension, as well as electronic suspension adjustment. The 1983 BMW K100 was the first model in the company's lineup powered by a liquid-cooled, in-line four engine, the K-series was BMW's debut platform for an electrically adjustable windscreen and anti-lock brakes </p>
<p>BMW motorcycle reviews made the K 1600 GTL <em>Rider </em>'s 2012 Motorcycle of the Year because it broke new ground in the luxury touring segment with a powerful in-line engine, the best power-to-weight ratio in the class, remarkable handling and performance, as well as useful features such as the Multi-Controller and optional Adaptive Headlight. </p>
<h2>&nbsp;</h2>
</body>
</html>
