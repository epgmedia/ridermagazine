<?php get_header(); ?>
<!-- =============== Retro + Vintage Motorcycles =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a class="category" href="http://www.ridermagazine.com/category/style/" title="Go to the CATEGORY category archives.">CATEGORY</a> > Retro + Vintage Motorcycles
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "			   

<h1 style=\"font-weight:bold\">Retro + Vintage Motorcycles</h1>

<p>Retro + Vintage Motorcycle reviews and road tests include old (vintage) motorcycles, such as those featured in Clement Salvadori&#8217;s <em>Retrospective</em> column each month, as well as motorcycles styled to look like those that rolled off the assembly line decades ago (retro). Cruisers can be considered retro due to their styling, but they&#8217;re a more natural fit in the Cruiser + Touring Motorcycles category. Whereas the irrational exuberance of the 2000s brought us overpriced, blinged&#8211;out choppers and painful&#8211;to&#8211;watch TV shows about customizers with short tempers, motorcycle guides suggest that back&#8211;to&#8211;basics vintage motorcycles have enjoyed a revival since the Great Recession. Harley&#8211;Davidson has its Dark Custom line, Victory offers blacked&#8211;out 8&#8211;Ball versions of several models and DIY builders are snapping up low&#8211;cost bikes on Craigslist and eBay for caf&eacute; racer and bobber projects.</p>

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
<h2><strong>Retro + Vintage Motorcycles, Who Uses Them?</strong></h2>

<p>According to reviews Retro + Vintage Motorcycles appeal to older riders who feel nostalgic for the motorbikes they longed for when they were young, as well as to younger riders who appreciate styling and technology from years past. Rare and exceptional vintage motorcycles have become quite popular among collectors, with auctions fetching record prices year after year. With recent economic times requiring folks to do more with less, many motorcyclists have pulled dusty old bikes out of their garage and restored them to working order. Others who want the look of a vintage motorcycle but not the spongy brakes, dodgy tires and clapped&#8211;out suspension buy modern&#8211;built, retro&#8211;styled motorcycles.</p>

<br/>
<h2><strong>Retro + Vintage Motorcycle Standouts</strong></h2>

<p>The July 2010 issue of <em>Rider</em> is one of the most popular issues ever published. Its cover carried the headline &#8220;Retro Rides&#8221; (July 2010) and featured guides, reviews and road tests of the Moto Guzzi V7 Classic, Harley&#8211;Davidson Sportster Forty&#8211;Eight, Royal Enfield Bullet C5 and Triumph Scrambler&#8211;all modern motorcycles that can trace their roots back decades. Popular retro models available today also include the Honda CB1100, Moto Guzzi V7 (Racer, Special and Stone), Suzuki TU250X, Triumph Bonneville and Triumph Thruxton, as well as scooters made by Vespa and Kymco.</p>

</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>