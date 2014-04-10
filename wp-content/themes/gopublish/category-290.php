<?php get_header(); ?>
<!-- =============== Kymco Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Kymco Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2013/LP/kymco-logo.jpg\" width=\"230\" height=\"169\" align=\"left\" style=\"margin-right:15px;\" alt=\"Kymco Motorcycles\">				   

<h1 style=\"font-weight:bold\">Kymco Motorcycle Road Tests & Reviews</h1>
<h2 class=\"top\"><strong>Kymco Motorcycle Guide </strong></h2>

<p>
After splitting from Honda, Kymco was founded in 1963 as the Kwang Yang Motor Company, Ltd., with headquarters in Taiwan. Today, Kymco road tests and reviews can be found for the scooters, motorcycles and ATVs the company manufactures at five plants in Asia, including the main facility in the city of Kaohsiung. Kymco is the largest scooter manufacturer in Taiwan, and exports to 86 countries worldwide. Since 1994, Kymco has been officially accredited for ISO-9001 quality in manufacturing. The company&#8217;s partner in the United States is Kymco USA, with headquarters, marketing and distribution centered in Spartanburg, South Carolina. Kymco also manufactures engines for other OEMs, such as BMW&#8217;s G 450 X.
</p>		
				"; ?>
                </p>
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
           <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>

            <?php 	$audio = get_post_meta($post->ID, audio, true); 
            		$video = get_post_meta($post->ID, video, true); 
            		?>

				<?php if (has_post_thumbnail()) 
					{ the_post_thumbnail( 'archive', array('class' => 'categoryimage')); } ?>

				<?php if ($video) { $pattern = "/height=\"[0-9]*\"/"; $video = preg_replace($pattern, "height='150'", $video); $pattern = "/width=\"[0-9]*\"/"; $video = preg_replace($pattern, "width='200'", $video); ?><div style="float:right;width:200px;margin-bottom:15px;margin-left:10px"><?php echo $video; ?></div><?php } ?>
                <?php if ($audio) { ?><div style="width:300px;"><?php $audioplayer = "[audio:" . $audio . "]"; if (function_exists('insert_audio_player')) { insert_audio_player($audioplayer); } echo '</div>'; } ?>



            <p><?php snowriter(); ?><?php the_time('F j, Y'); ?><?php edit_post_link('(Edit)', ' &bull; ', ''); ?></p>
        
            <?php the_content_limit(300, "Read more &raquo;"); ?><div style="clear:both;"></div>
            

            
            <div class="postmeta2">
                <?php the_tags('<p><span class="tags">Tags: ', ', ', '</span></p>'); ?> 
            </div>
            
            <?php endwhile; else: ?>
           
           <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
           <p><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></p>
           
       </div>
               
   </div>
   
<?php include(TEMPLATEPATH."/sidebar.php");?>
<div class="widgetwrap widgetLP" >
<div class="widgetbody3">
<h2><strong>Kymco Motorcycles, Who Uses Them? </strong></h2>
<p>Kymco launched its first scooter in 1970, with the bulk of its motorbikes being of the single-cylinder, cruiser variety produced between 2004 and 2008. Kymco road tests can also be found for their wide range of gas and electric scooters from 50cc to 500cc, with 15 models available in the U.S. According to reviews, Kymco&#8217;s most popular models of scooters and motorcycles are the 125 Stryker, Agility, Dink, People, Stryker and Venox 250. </p>
<br/>
<h2><strong>Kymco Motorcycle Standouts </strong></h2>
<p>
Road tests and guides point to the Venox 250 cruiser as one of the most well-known motorcycles produced by Kymco (starting in 2005), with a single-cylinder engine producing 27 horsepower at 10,500 rpm. The Venox 250 has a disc front brake and drum rear brake, a 5-speed gearbox with a wet clutch and a tubular steel frame. The 125 Stryker, a motorcycle manufactured in 2004, has an air-cooled single-cylinder engine that produces 11.8 horsepower at 9,000 rpm, a disc front brake and a drum rear brake, and a 5-speed gearbox.<br/><br/>
In the scooter world, one of Kycmo's more popular models according to motorbike reviews is the People 150, which has a fuel-efficient 150cc 4-stroke SOHC engine, is great for inner city transportation and offers room for a passenger and underseat storage. Its newest scooter, the Xciting 500i ABS, is powered by a 38-horsepower engine and is equipped with a Bosch anti-lock braking system. 
</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>