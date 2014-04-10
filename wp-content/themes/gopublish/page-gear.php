<?php
/*
Template Name: Gear Page
*/
?>
<?php get_header(); get_sidebar(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
	
<div class="breadcrumb">
<a href="http://www.ridermagazine.com/" title="Go to Home.">Home</a>
&gt;
<a href="" title="Reload the current page.">Gear</a>
</div>
			


<h1> Motorcycle Gear</h1>

<p>The gear section of Ridermagazine.com is all about equipping both you and your motorcycle. In this section you will find introductions to new gear (New & Cool), hands-on gear testing and reviews, buyers guides and an option to browse gear by type. To make it easy to find exactly what you're looking for, our browse by type section breaks our gear into five sections: Apparel, Helmets, Tires, Parts & Accessories and Electronics.</p>
            
            
 
<?php //start widgetized-page code added by Gaby 13Dec2011 ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Gear Page") ) : ?>
<?php endif; ?>
<?php //end widgetized-page code added by Gaby 13Dec2011 ?>           
            
            
            
            
            
				<?php edit_post_link('(Edit This Page)', '<p>', '</p>'); ?>
		

			

						
		</div>
		
	</div>
	


</div>

<!-- The main column ends  -->

<?php get_footer(); ?>