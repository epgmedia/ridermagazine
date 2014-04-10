<?php get_header(); ?>
<!-- =============== Ducati Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Ducati Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2012/LP/logo-ducati.gif\" width=\"145\" height=\"155\" align=\"left\" style=\"margin-right:15px;\" alt=\"Ducati Motorcycles\">				   

<h1 style=\"font-weight:bold\">Ducati Motorcycle Road Tests<br/>&amp; Reviews</h1>
<h2 class=\"top\"><strong>Ducati Motorcycle Guide</strong></h2>

<p>Ducati Motor Holding S.p.A., a wholly owned subsidiary of Audi AG and headquartered in Bologna, Italy, has been designing and manufacturing motorcycles and motorbikes since 1950, starting with the Cucciolo (&#8220;puppy&#8221;) motorized bicycle. Ducati motorcycle guides praise the company&#8217;s 90-degree L-twin engines with desmodromic valve actuation and motorcycles that emphasize performance and style. Ducati currently produces the Monster (696, 796 and 1100EVO) and Streetfighter (848 and S) sport standards, Diavel power cruiser, Hypermotard (796 and 1100 EVO SP) supermotos, Multistrada adventure tourer and 848 and 1199 Panigale superbikes. Due to excellent Ducati motorcycle road tests and reviews, the company won Rider&#8217;s Motorcycle of the Year in 1998 with the ST2 sport tourer.</p>		
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
<h2><strong>Ducati Motorcycles, Who Uses Them? </strong></h2>
<p>Ducati offers street-legal motorcycles and motorbikes with an emphasis on performance, including the Monster and Streetfighter sport standards, Diavel power cruiser, Hypermotard supermotos, Multistrada adventure tourer and 848 and 1199 Panigale superbikes. </p>
<br/>
<h2><strong>Ducati Motorcycle Standouts </strong></h2>
<p><a href="http://www.ridermagazine.com/manufacturer/ducati" title="Ducati motorcycle reviews">Ducati motorcycle reviews</a> Ducati motorcycle guides emphasize the V-twin engines with desmodromic valve actuation, though this design was first produced in the early 1970s&#8211;two decades after the company began building motorcycles. Legendary engineer Fabio Taglioni first developed a 750cc desmodromic V-twin for racing, and the production 750 SuperSport was unveiled in 1973. In 1993, Ducati introduced the M900 Monster, a lightweight &#8220;naked&#8221; sport standard powered by a 900 SuperSport V-twin. The model proved to be very popular and its variations have been Ducati&#8217;s best sellers, several of which are in the current lineup. In 1995, Ducati introduced the 916, a superbike designed by Massimo Tamburini with aggressive styling, underseat exhausts and a single-sided swingarm. The 916, widely considered one of the most beautiful motorcycles ever built, heavily influenced sportbike design for years afterward.</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>