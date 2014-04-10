<?php get_header(); ?>
<!-- =============== Honda Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Honda Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2012/LP/logo-honda.jpg\" width=\"200\" height=\"159\" align=\"left\" style=\"margin-right:15px;\">				   
<h1 style=\"font-weight:bold\">Honda Motorcycle Road Tests<br/>&amp; Reviews</h1>
<h2 class=\"top\"><strong>Honda Motorcycle Guide</strong></h2>
<p>Honda, the biggest of the Japanese Big Four, began manufacturing motorcycles in 1955. Honda motorcycle road tests reflect the company's history as the world's largest manufacturer of both motorcycles and internal combustion engines by volume. Having been in continuous production since 1958, surpassing 60 million units in 2008, Honda's Super Cub is the world's most produced motor vehicle. The Super Cub's U.S. advertising campaign, &quot;You meet the nicest people on a Honda,&quot; had a positive, enduring impact on Honda motorcycle reviews, their image, and American attitudes about motorcycling. </p>		
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
<h2><strong>Honda Motorcycles, Who Uses Them? </strong></h2>
<p>Honda offers a full range of motorcycles, from cruisers, sport tourers, sportbikes and the iconic Gold Wing luxury tourer to dirt bikes, dual-sports and scooters, as well as ATVs, side-by-sides and personal watercraft. </p>
<br/>
<h2><strong>Honda Motorcycle Standouts </strong></h2>
<p><a href="http://www.ridermagazine.com/manufacturer/honda" title="Honda motorcycle reviews">Honda motorcycle reviews</a> mark 1969 as the year the Honda CB750 introduced the transverse, overhead camshaft, in-line four cylinder engine that became the dominant configuration among high-performance motorcycles, and became the first widely produced motorcycle to feature a front disc brake. The 1974 Honda Gold Wing GL1000 featured a reliable, torquey, smooth-running flat-four engine that was ideal for long-distance touring; over its nearly 40-year history of Honda motorcycle road tests, the Gold Wing became the standard by which all other luxury-touring motorcycles were measured. In the early 1980s, Honda's VF/VFR line of V4 powered motorcycles launched the sportbike category, bringing 'race replica' styling, suspension and performance to street-legal motorcycles. The Honda VFR750 went on to become one of the most refined and revered sport-touring motorcycles ever made. </p>
<p>In Honda motorcycle reviews, the VFR1200F was <em>Rider </em>'s 2010 Motorcycle of the Year because of its powerful, MotoGP-inspired V4 engine, optional dual-clutch transmission (a first on a motorcycle) and exquisite fit and finish, elevating Honda's iconic VFR to an even higher level of sophistication. </p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>