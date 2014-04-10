<?php get_header(); ?>
<!-- =============== Moto Guzzi Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Moto Guzzi Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2013/LP/moto-guzzi-logo.jpg\" width=\"230\" height=\"123\" align=\"left\" style=\"margin-right:15px;\" alt=\"Moto Guzzi Motorcycles\">				   

<h1 style=\"font-weight:bold\">Moto Guzzi Road Tests & Reviews</h1>
<h2 class=\"top\"><strong>Moto Guzzi Motorcycle Guide</strong></h2>

<p>
Moto Guzzi is an Italian motorcycle manufacturer established in 1921 and is one of seven brands owned by Piaggio. In reviews and guides, the company is noted for its historic role in Italy's motorcycle manufacturing, its prominence worldwide in motorcycle racing, and a series of industry innovations including the first motorcycle centerstand, wind tunnel and eight-cylinder engine (the Moto Guzzi Grand Prix V8 in 1955).
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
<h2><strong>KMoto Guzzi Motorcycles, Who Uses Them?</strong></h2>
<p>Motorcycle reviews can be found for many Moto Guzzi models currently in production, including the V7 (Racer, Special and Stone) standard, Griso 8V SE sport standard, Norge 1200 sport tourer, Stelvio adventure tourer and California 1400 Custom and Touring cruisers. Guzzi has produced a number of historic racing motorcycles, including the Le Mans model range, and has produced motorbikes specifically for military and police use.</p>
<br/>
<h2><strong>Moto Guzzi Motorcycle Standouts</strong></h2>
<p>
The Moto Guzzi Grand Prix V8, introduced in 1955, was the first 500cc racing motorcycle fitted with a V8 engine utilizing dual overhead camshafts. It had two valves per cylinder, an oversquare bore/stroke (44.0 x 40.5 mm), and output around 80 horsepower at 12,000 rpm. In 1971, Moto Guzzi motorcycle reviews lauded the 750 V7 Sport, designed as the first 5-speed, 440-pound, 120-mph production motorcycle. A year later, Moto Guzzi introduced the California cruiser models, based on the model sold to the Los Angeles Police Department. The California remained popular in road tests and reviews throughout the 1980s and 1990s and remains in the U.S. Moto Guzzi range as the all-new California 1400. The iconic 850 Le Mans, a caf&eacute; racer, was released in 1976 and is still considered one of the most sought after of all Guzzis. The GT Norge was made famous for its 4,000-mile test ride in 1928 that proved its suspension prototype: the world's first swingarm suspension. In 2005, the Norge 1200 was introduced by retracing the 1928 ride. In 2008, Moto Guzzi added the Stelvio 1200, an adventure tourer named after the famous Stelvio Pass in the Italian Alps.
</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>