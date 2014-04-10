<?php get_header(); ?>
<!-- =============== Sport Standard + Standard Motorcycles =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a class="category" href="http://www.ridermagazine.com/category/style/" title="Go to the CATEGORY category archives.">CATEGORY</a> > Sport Standard + Standard Motorcycles
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "			   

<h1 style=\"font-weight:bold\">Sport Standard + Standard Motorcycles</h1>

<p>Sport Standard + Standard Motorcycles are, like cruisers, bikes that are stripped bare with no bodywork, which is why they are sometimes referred to as &#8220;naked&#8221; bikes, though included in reviews and road tests of this category are some bikes with small fairings and windshields. But unlike cruisers, sport standards and standards have a more upright riding position and styling that can range from basic to sporty. Motorcycle guides state that they&#8217;re lighter, have more cornering clearance and are more performance oriented than cruisers. The term &#8220;standard&#8221; is used because they are versatile, general purpose motorbikes. Included in this category are &#8220;streetfighters,&#8221; tough&#8211;looking street bikes that are essentially sportbikes without bodywork. </p>	
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
<h2><strong>Sport Standard + Standard Motorcycles, Who Uses Them?</strong></h2>

<p>Motorcycle guides discuss the fact that Sport Standard + Standard Motorcycles, though popular in the 1970s and 1980s (the term Universal Japanese Motorcycle, or UJM, was coined back then because all four major Japanese manufacturers&#8211;Honda, Kawasaki, Suzuki and Yamaha&#8211;offered seemingly interchangeable motorcycles with in&#8211;line four engines, similar chassis and conventional styling), since the 1990s sport standards and standard motorbikes have been overshadowed by more specialized motorcycles: sport tourers, tourers, sportbikes, dual&#8211;sports, etc. Sport standards and standard motorcycles are popular in road tests among riders who want a no&#8211;nonsense motorcycle, one that performs well but isn&#8217;t limited by excessive weight and bodywork. On the other hand, because of their basic nature, many owners add accessories to enhance the performance, touring capability or other aspect of their motorcycle.</p>

<br/>
<h2><strong>Sport Standard + Standard Motorcycle Standouts</strong></h2>

<p>According to motorcycle guides, Sport standards and standard motorbikes available today include the Aprilia Tuono and Mana 850 GT; BMW F 800 R and R 1200 R; Ducati Hypermotard, Monster and Streetfighter; Honda CB500F and CB1000R; Kawasaki Versys and Z1000; KTM 690 Duke; Moto Guzzi Griso 8V SE; Suzuki GW250 and SFV650; Triumph Speed Triple and Street Triple; and Yamaha FZ8 and FZ1.</p>

</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>