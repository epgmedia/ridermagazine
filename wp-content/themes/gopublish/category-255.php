<?php get_header(); ?>
<!-- =============== Victory Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Victory Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2013/LP/victory-logo.jpg\" width=\"230\" height=\"153\" align=\"left\" style=\"margin-right:15px;\" alt=\"Victory Motorcycles\">				   

<h1 style=\"font-weight:bold\">Victory Road Tests & Reviews</h1>
<h2 class=\"top\"><strong>Victory Motorcycle Guide</strong></h2>

<p>
Victory Motorcycles, established in 1998, is a division of Polaris Industries and is an American manufacturer of V-twin cruiser and touring motorbikes. The company began full production of its first motorcycle, the V92C, in Spirit Lake, Iowa, in 1998. Victory soon expanded its model lineup by introducing a sport cruiser, the V92SC, at Sturgis in 1999. In 2005, Victory motorcycle road tests began on a power cruiser called the Hammer. The Minnesota-based company continued to grow and produced its 50,000th motorcycle in 2009. That year, the company celebrated its 10th anniversary with the Victory Vision.
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
<h2><strong>Victory Motorcycles, Who Uses Them?</strong></h2>
<p>Victory Motorcycles manufactures V-twin cruiser and touring motorcycles. Victory has made a name for itself in motorcycle reviews and guides by designing cruiser motorcycles with progressive styling and state-of-the-art engineering.</p>
<br/>
<h2><strong>Victory Motorcycle Standouts</strong></h2>
<p>
Victory's first motorcycle, the V92C, earned "Motorcycle Cruiser of the Year" honors by the press. In 2001, Victory introduced its line of Arlen Ness Signature Series Accessories, which began a longstanding friendship and working relationship between the Ness family and Victory Motorcycles. In 2002, the company created the Freedom 92/5 V-twin, a 92-cubic-inch engine mated to a 5-speed transmission that debuted in the Victory Vegas in 2003. Motorcycle reviews and road tests of the Hammer, Vegas 8-Ball and Vegas Jackpot followed, as well as the Kingpin and the 10th Anniversary Victory Vision (2009). Victory launched the Cross Roads and Cross Country touring models for 2010, and the flagship Cross Country Tour, which has the most luggage capacity of any production motorcycle, for 2012.
</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>