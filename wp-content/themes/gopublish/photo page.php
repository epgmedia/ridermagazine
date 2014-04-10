<?php
/*
Template Name: Photos
*/
?>
<?php get_header(); ?>

<div id="content">

	<div id="contentleft" style="width:940px">
	
		<div class="postarea" style="width:920px">
<?php>
global $TanTanFlickrPlugin;
if (!is_object($TanTanFlickrPlugin)) wp_die('Flickr Photo Album plugin is not installed / activated!');

// load the appropriate albums index, album's photos, or individual photo template.
// $photoTemplate contains the template being used
?>
<div=id="content" class="narrowcolumn">
<?php
include($tpl = $TanTanFlickrPlugin->getDisplayTemplate($photoTemplate));

// uncomment this line to print out the template being used
//echo 'Photo Album Template: '.$tpl;
?>

<?php if (!is_object($Silas)):?>
<div class="flickr-meta-links">
Powered by the <a href="http://tantannoodles.com/toolkit/photo-album/">Flickr Photo Album</a> plugin for WordPress.
</div>
<?php endif; ?>

</div>?>

				
									
		</div>
		
	</div>
	
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>