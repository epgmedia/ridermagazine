<?php get_header(); ?>
<!-- =============== Star Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Star Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2013/LP/star-logo.jpg\" width=\"160\" height=\"69\" align=\"left\" style=\"margin-right:15px;\" alt=\"Star Motorcycles\">				   

<h1 style=\"font-weight:bold\">Star Road Tests & Reviews</h1>
<h2 class=\"top\"><strong>Star Motorcycle Guide</strong></h2>

<p>
Yamaha created Star Motorcycles in 1994 as a standalone brand for its line of cruiser motorcycles in the U.S. market. In 2006, the motorbike brand was expanded to being its own company, although the brand is operated out of the Yamaha Motor Corporation offices in Cypress, California, and Yamaha still handles production and distribution. All Star motorcycles are designed in the United States.
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
<h2><strong>Star Motorcycles, Who Uses Them?</strong></h2>
<p>Star motorcycle road tests are performed on their street-legal cruiser motorcycles with V4 and V-twin engines.</p>
<br/>
<h2><strong>Star Motorcycle Standouts</strong></h2>
<p>
Star Motorcycle reviews address a mix of cruiser models, including the Royal Star Venture S luxury tourer, Stratoliner and Roadliner Big Twins, Road Star and V Star lines (ranging from 250cc to 1,670cc), its Stryker and Raider choppers and Vmax power cruiser. In 2012, Star motorcycle road tests began on the Star Custom Line (SCL), a limited-production line of factory custom motorcycles, the first of which was the SCL Raider.
</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>