<?php
/*
Template Name: Touring Adventures Page
*/
?>
<?php get_header(); ?>

<div id="content">

    <div id="contentleft">
	
	    <div class="postarea">
	
		    <div class="breadcrumb">

                <a href="http://www.ridermagazine.com/" title="Go to Home.">Home</a> &gt;
                <a href="" title="Reload the current page.">Touring Adventures</a>

            </div>
			
            <h1>Touring Adventures</h1>

            <p>
                This section features motorcycle rallies and clubs, travel features,
                tour reviews and Favorite Rides. Here, it’s all about the ride and the
                destination often comes too quick.
            </p>

            <?php

            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Touring Adventures Page") ) :

            endif;

            edit_post_link('(Edit This Page)', '<p>', '</p>');

            ?>
						
        </div>
		
    </div>
	
    <?php include(TEMPLATEPATH."/sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>