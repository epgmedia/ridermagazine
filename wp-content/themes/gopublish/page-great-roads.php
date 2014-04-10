<?php
/*
Template Name: Great Roads Page
*/
?>
<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
	
		
<?php edit_post_link('(Edit This Page)', '<p>', '</p>'); ?>		

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				
		
			<?php the_content(__('[Read more]'));?>
		 			
			<?php endwhile; else: ?>
			
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<div style="float: left; width: 300px;">

<?php //start widgetized-page code added by Nick 19Nov2012 ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Great Roads Left") ) : ?>
<?php endif; ?>
<?php //end widgetized-page code added by Nick 19Nov2012 ?>  
</div>

<div style="float: right; width: 300px;">

<?php //start widgetized-page code added by Nick 19Nov2012 ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Great Roads Right") ) : ?>
<?php endif; ?>
<?php //end widgetized-page code added by Nick 19Nov2012 ?>  
</div>


</div>
	
<?php include(TEMPLATEPATH."/sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>