<?php get_header(); ?>
<!-- =============== Can-Am Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Other Motorycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "			   

<h1 style=\"font-weight:bold\">Other Motorcycle Reviews</h1>
<h2 class=\"top\"><strong>Buell, Husaberg, Indian, Big Dog, MV Agusta + More</strong></h2>

<p>
Motorcycle reviews and comparisons from Buell, Husaberg, Husqvarna, Indian, Big Dog, MV Agusta plus more. To make it easier for visitors to browse motorcycle reviews by manufacture, Rider magazine has created specific categories for our 14 most-frequently tested motorcycle brands but fully acknowledge there are dozens of quality and reputable motorcycle brands beyond a mere fourteen.
</p>



<h2>Buell Motorcycle Guide</h2>
<p>
Founded in 1983 by former racer and ex-Harley-Davidson engineer Erik Buell, the Buell Motorcycle Company was an American motorcycle manufacturer based in East Troy, Wisconsin. Harley-Davidson acquired 49% of Buell in 1993, and it became a wholly owned subsidiary by 2003. By 2006, Buell had produced 100,000 motorcycles. In October 2009, in the wake of the economic downturn, Harley-Davidson shut down Buell. The following month, Buell and Harley-Davidson brought about the return of Buell motorbikes when they announced the launch of Erik Buell Racing, an independent company run by Erik Buell that currently produces the 1190RS superbike.</p>




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
<h2><strong>Buell Motorcycles, Who Uses Them?</strong></h2>
<p>Buell motorcycle reviews discuss classic motorbikes no longer produced, but at the time of Buell Motorcycle Company's closing, it offered several street-legal motorcycles, mostly V-twins: the entry-level, single-cylinder Blast (used as part of Harley-Davidson's Rider's Edge new-rider training), the XB9 series streetfighters, Ulysses XB12X and Ulysses XB12XT adventure tourers, the 1125 sportbike and the 1125CR caf&eacute; racer.</p>
<br/>
<h2><strong>Buell Motorcycle Standouts</strong></h2>
<p>
In 1987, the RR 1000 Battletwin was built as a sportbike using a modified Road Warrior chassis and a Harley-Davidson XR1000 engine. In 1994, Buell motorcycle road tests assessed the two-seater S2 Thunderbolt with a Road Warrior-based chassis and Sportster engine. The S2T Thunderbolt (1995-1996) was a touring version, with saddlebags. The S1 Lightning followed in 1996 and was a more fundamental sportbike than the Thunderbold. 
The Blast, Buell's smallest model and the only to use a single-cylinder engine, was created in 2000. It was a technical success according to road tests and motorbike reviews, but used half of a Harley-Davidson Sportster 883 engine and was very expensive compared to the higher-technology engines available from outside the company. The Buell Blast ended up making money for Harley while losing money for Buell and was discontinued in 2009.
In July 2007, Buell announced the 1125R, a <a href="http://en.wikipedia.org/wiki/Sport_bike" rel="nofollow">sportbike</a> that tapped into the XBRR racing bike. Buell motorcycle guides and reviews focused on the <a href="http://en.wikipedia.org/wiki/Rotax" rel="nofollow">Rotax</a> Helicon engine, a liquid-cooled 72-degree V-twin with four valves per cylinder and dual overhead cams. In 2009, Buell introduced the 1125CR, a caf&eacute; racer version of the 1125R. Road tests discussed the fact that the 1125CR had less bodywork, a clubman-style handlebar instead of clip-ons, a longer swingarm, a longer wheelbase and a shorter secondary drive ratio..
</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>