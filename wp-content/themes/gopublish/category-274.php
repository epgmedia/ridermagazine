<?php get_header(); ?>
<!-- =============== KTM Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > KTM Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2013/LP/ktm-logo.jpg\" width=\"188\" height=\"77\" align=\"left\" style=\"margin-right:15px;\" alt=\"KTM Motorcycles\">				   

<h1 style=\"font-weight:bold\">KTM Road Tests & Reviews</h1>
<h2 class=\"top\"><strong>KTM Motorcycle Guide</strong></h2>

<p>
KTM is an Austrian motorcycle and moped manufacturer founded in 1934 by engineer Hans Trunkenpolz. It started out as a metal working shop and was named <em>Kraftfahrzeuge Trunkenpolz Mattighofen</em>. In 1954, KTM began producing motorbikes. In reviews, the company is best known for its off-road motorcycles, though in recent years it has expanded into street motorcycle production.
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
<h2><strong>KTM Motorcycles, Who Uses Them?</strong></h2>
<p>KTM motorcycle road tests discuss the company's street-legal dual-sport motorcycles and sport-oriented street motorcycles, as well as a wide range of off-road motorcycles for racing and recreational use. Reviews focus on the fact that the company has been creating and improving its 2-stroke mtorbikes and has been looking into Direct Fuel Injection. KTM also has a lightweight, street legal (Europe) car known as the X-Bow.</p>
<br/>
<h2><strong>KTM Motorcycle Standouts</strong></h2>
<p>
KTM motorcycle road tests on their street-legal lineup include the 690 Enduro R dual-sport, the 450 SMR supermoto, the 690 Duke sport standard, the 990 SM T and 990 Adventure tourers, and the 1190 RC8 R and 1190 RC8 R Race Spec superbikes. KTM recently introduced the 1190 Adventure as an early-release 2014 model.
</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>