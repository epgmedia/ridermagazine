<?php get_header(); ?>
<!-- =============== Harley Davidson Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Harley-Davidson Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2012/LP/logo-harley-davidson.gif\" width=\"205\" height=\"168\" align=\"left\" style=\"margin-right:15px;\">				   
<h1 style=\"font-weight:bold\">Harley Davidson Motorcycle<br/> Road Tests &amp; Reviews</h1>
<h2 class=\"top\"><strong>Harley-Davidson Motorcycle Guide </strong></h2>
<p>Harley-Davidson motorcycle road tests demonstrate why the company, founded in 1903 in Milwaukee, Wisconsin, by William S. Harley and brothers Arthur and Walter Davidson, is the largest American motorcycle manufacturer and the world's oldest continuously operating motorcycle manufacturer. The company is still headquartered in Milwaukee, in the same location on Juneau Avenue since 1906. In 2008 Harley-Davidson opened a large museum in downtown Milwaukee that coincided with the company's 105th anniversary celebrations. Harley-Davidson motorcycle reviews depict one of the world\'s most recognizable brands, and the company has a very loyal, brand-centric community, organized in part through the Harley Owners Group (H.O.G.). </p>			
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
<h2><strong>Harley-Davidson Motorcycles, Who Uses Them? </strong></h2>
<p><a href="http://www.ridermagazine.com/manufacturer/harley-davidson" title="Harley Davidson motorcycle reviews">Harley-Davidson motorcycle reviews</a> emphasize classically styled cruisers and touring motorcycles, nearly all of which are powered by air-cooled, 45-degree V-twins (the lone exception is the liquid-cooled V-Rod). </p>
<br/>
<h2><strong>Harley-Davidson Motorcycle Standouts </strong></h2>
<p>The Harley-Davidson Sportster, introduced in 1957, is one of the longest-running and perhaps most widely known models in Harley's lineup; with 883cc or 1,200cc engines, Sportsters are smaller than Harley's \"Big Twins,\" making them less expensive as well as popular among newer and younger riders. Harley-Davidson's FL, or Touring, line of motorcycles includes the Road King, Road Glide, Street Glide and Electra Glide, and with their windscreens, fairings (on some) and saddlebags they are among the most popular models for hitting the open road. The 1992 Harley-Davidson V-Rod, or VRSC, introduced the 60-degree Revolution V-twin, an engine jointly developed with Porsche that was the first to be offered by Harley with overhead cams and liquid cooling. </p>
<p>After Harley-Davidson motorcycle road tests, the Heritage Softail Classic became <em>Rider </em>'s 2000 Motorcycle of the Year because it introduced the more powerful, markedly smoother counterbalanced Twin Cam 88B V-twin, as well as a stiffer chassis, better brakes and other refinements. </p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>