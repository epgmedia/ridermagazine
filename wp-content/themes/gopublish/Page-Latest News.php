<?php
/*
Template Name: Latest News Page
*/
?>
<?php get_header(); get_sidebar(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
	
<div class="breadcrumb">
<a href="http://www.ridermagazine.com/" title="Go to Home.">Home</a>
&gt;
<a href="" title="Reload the current page.">Latest News</a>
</div>
			


<h1> Latest News</h1>

<p>The latest news section of Ridermagazine.com is a firehose of motorcycle information. In this section you will find all the latest stories from every section of the Rider site.  </p>
            
            
 
<?php //start widgetized-page code added by Gaby 13Dec2011 ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Latest News Page") ) : ?>
<?php endif; ?>
<?php //end widgetized-page code added by Gaby 13Dec2011 ?>           
            
            				<?php edit_post_link('(Edit This Page)', '<p>', '</p>'); ?>

            
            
            
		
			

						
		</div>
		
	</div>
	


</div>

<!-- The main column ends  -->

<?php get_footer(); ?>