<?php
/*
Template Name: 404-test
*/
?>
<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
	
		<div class="breadcrumb">
<a href="http://www.ridermagazine.com/" title="Go to Home.">Home</a>
&gt;
<a href="" title="Reload the current page.">404-test</a>
</div>
			

<h1>This is only a test</h1>


            
 
<?php //start widgetized-page code added by Gaby 13Dec2011 ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("404-test") ) : ?>
<?php endif; ?>
<?php //end widgetized-page code added by Gaby 13Dec2011 ?>           
            
            
            
            
            
				<?php edit_post_link('(Edit This Page)', '<p>', '</p>'); ?>
		
		 			
		
        
						
		</div>
		
	</div>
	
<?php include(TEMPLATEPATH."/sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>