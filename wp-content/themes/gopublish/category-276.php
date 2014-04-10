<?php get_header(); ?>
<!-- =============== Yamaha Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Yamaha Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2012/LP/logo-yamaha.gif\" width=\"250\" height=\"68\" align=\"left\" style=\"margin-right:15px;\" alt=\"Yamaha Motorcycles\">				   

<h1 style=\"font-weight:bold\">Yamaha Motorcycle Road Tests<br/>&amp; Reviews</h1>
<h2 class=\"top\"><strong>Yamaha Motorcycle Guide</strong></h2>

<p>Yamaha Motor Company Limited, a division of Japanese conglomerate Yamaha Corporation, has been producing motorized vehicles since 1955. Yamaha currently produces motorcycles, motorbikes, ATVs, boats, marine engines, automobile engines, personal watercraft and snowmobiles. Under the Yamaha brand, it produces sportbikes (YZF-R1, FZ1, FZ8 and others), sport tourers (FJR1300A), adventure tourers (Super T&eacute;n&eacute;r&eacute;), dual-sports (WR250X, XT250 and others), dirt bikes (YZ450F, WR450F and others) and scooters (Tmax, Zuma and others). In the U.S., cruisers produced by Yamaha have been sold under the Star Motorcycles brand since 2006, including the Royal Star, Roadliner, Stratoliner, Vmax, Raider, Stryker and others. Yamaha motorcycle reviews and road tests explain why the brand has won Rider&#8218;s Motorcycle of the Year four times: in 2006 with the FZ1, in 2003 with the FJR1300, in 1996 with the Royal Star Tour Classic and in 1993 with the GTS1000.
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
<h2><strong>Yamaha Motorcycles, Who Uses Them? </strong></h2>
<p>Yamaha motorcycle reviews address a full range of motorcycles, from cruisers (under the Star Motorcycles brand), sport tourers and sportbikes, to dirt bikes, dual-sports and scooters, as well as ATVs, boats, marine engines, automobile engines, personal watercraft and snowmobiles.</p>
<br/>
<h2><strong>Yamaha Motorcycle Standouts </strong></h2>
<p><a href="http://www.ridermagazine.com/manufacturer/yamaha" title="Yamaha motorcycle reviews">Yamaha motorcycle reviews</a> The Yamaha V-Max, introduced in 1985 and produced with few changes until 2008, is a power cruiser with a 1,197cc V-4 engine derived from the Venture. It became famous after multiple Yamaha motorcycle guides, reviews and road tests praised it for its V-Boost system, which opens butterfly valves at 8,000 rpm to give a rush of acceleration.  The original bike had poor handling, but with a slight variation of the name, the VMax was completely redesigned for 2009 with a 1,679cc V-4, modern engine technology (YCC-I and YCC-T) and components, and much better handling. The FJR1300, which replaced the FJ1100 and FJ1200 open-class sportbikes, was introduced in 2003 and set a new benchmark in terms of performance among sport tourers.</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>