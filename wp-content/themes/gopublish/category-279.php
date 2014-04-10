<?php get_header(); ?>
<!-- =============== Cruiser + Touring =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a class="category" href="http://www.ridermagazine.com/category/style/" title="Go to the CATEGORY category archives.">CATEGORY</a> > Cruiser + Touring Motorcycles
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "			   

<h1 style=\"font-weight:bold\">Cruiser + Touring Motorcycles</h1>

<p>Cruiser + Touring Motorcycles includes two of the most popular motorcycle categories, accounting for nearly three out of every four on-highway motorcycles sold in the United States. According to sales data from the Motorcycle Industry Council for 2012, motorcycles classified as &#8220;Cruiser&#8221; accounted for 32.3% and those classified as &#8220;Touring&#8221; accounted for 41.9% of total on-highway units sold. As discussed in Cruiser motorcycle guides, most cruisers are classically styled motorcycles that highlight the exposed engine&#8211;usually an air-cooled V&#8211;twin&#8211;and metalwork such as chrome exhaust pipes or heavy fenders. They typically offer a relaxed, feet-forward riding position favored by riders who, as the name implies, enjoy cruising down Main Street or their favorite back road. Touring motorcycles, which includes some cruisers as well as other types of bikes, are designed for long-distance travel. Touring motorcycle reviews look for typical details like a windshield (and sometimes a fairing) to protect the rider from wind, a comfortable seat and attached luggage, such as hard or soft saddlebags and possibly a trunk. Baggers, a nickname for motorcycles equipped with saddlebags, straddle the cruiser and touring categories and they&#8217;re very popular today.</p>		
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
<h2><strong>Cruiser + Touring Motorcycles, Who Uses Them?</strong></h2>
<p>Because America is renowned for its wide-open spaces and we love the open road, Cruiser + Touring Motorcycles are very popular in road tests. The cruiser style was invented in the U.S. in the early 1900s by companies such as Harley-Davidson, Indian and many others. Even today, the three major U.S. motorcycle manufacturers&#8211;Harley-Davidson, Victory and Indian&#8211;build cruisers and touring motorcycles exclusively. In an attempt to capture some of the American cruiser market, all four major Japanese manufacturers&#8211;Honda, Kawasaki, Suzuki and Yamaha&#8211;as well as European manufacturers such as Triumph and Moto Guzzi, build cruisers. Most motorcycle guides suggest that Cruisers appeal to motorcyclists who place a lot of importance on style and, due to their limited cornering clearance and laidback riding position, less importance on performance. Cruisers often have low seat heights, allowing riders of all sizes to put both feet firmly on the ground when stopped. According to the reviews and road tests, Touring motorcycles appeal to anyone who wants to ride comfortably all day or for days on end.</p>
<br/>
<h2><strong>Cruiser + Touring Motorcycle Standouts</strong></h2>
<p>The brand most associated with cruisers is Harley-Davidson, a company based in Milwaukee, Wisconsin, that has been building motorcycles since 1903. Harley-Davidson has several model families, including Sportster, Dyna, Softail, V-Rod, CVO and Touring. Victory Motorcycles and Indian Motorcycle, the other two major American motorcycle manufacturers, are both owned by Minnesota-based Polaris Industries. Victory builds cruisers (Boardwalk, Judge), baggers (Cross Roads) and touring bikes (Cross Country Tour, Vision), and Indian builds very classically styled cruisers (Chief Classic) and touring bikes (Chief Vintage). Cruisers are also manufactured by Honda (Fury, Shadow), Ducati (Diavel), Kawasaki (Vulcan), Moto Guzzi (California), Suzuki (Boulevard), Triumph (Speedmaster, Thunderbird) and Yamaha/Star (V Star, Raider). Road tests can be found for most Touring motorcycles, including variations on the models listed above with windshields and saddlebags, as well as more performance-oriented models like the Honda Gold Wing GL1800 and BMW K 1600 GTL.</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>