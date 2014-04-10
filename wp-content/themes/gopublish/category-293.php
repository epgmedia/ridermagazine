<?php get_header(); ?>
<!-- =============== Can-Am Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Can-Am Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2013/LP/can-am-logo.jpg\" width=\"156\" height=\"102\" align=\"left\" style=\"margin-right:15px;\" alt=\"Can-Am Motorcycles\">				   

<h1 style=\"font-weight:bold\">Can-Am Road Tests & Reviews</h1>
<h2 class=\"top\"><strong>Can-Am Motorcycle Guide</strong></h2>

<p>
The Can-Am motorcycle brand began in the 1970s, creating off-road dirt bikes and taking home the top three places in the International Six Days Enduro. Can-Am motorbikes also swept the 1974 AMA 250cc National Motocross Championship. Despite its success in racing, Can-Am's primary holding company, Bombardier Recreational Products (BRP), shifted focus away from the motorcycle market. In 2006, BRP reintroduced the Can-Am brand with an all-new ATV line. Then, in 2007, the Can-Am brand was also used to introduce the Can-Am Spyder, a new three-wheeled roadster.
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
<h2><strong>Can-Am Motorcycles, Who Uses Them?</strong></h2>
<p>Today, Can-Am reviews focus on the three-wheeled Spyder line for street use, as well as several ATVs and side-by-side vehicles like the Commander and Outlander for off-road use.</p>
<br/>
<h2><strong>Can-Am Motorcycle Standouts</strong></h2>
<p>
The Can-Am Roadster has a unique Y-shaped footprint with two wheels up front to give it more stability and control, making it easy for just about anyone to ride. Can-Am motorcycle road tests on the Spyder line include the Spyder RT (luxury touring), ST (sport touring) and RS (sport). All have anti-lock brakes, stability control and an optional semi-automatic transmission.
</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>