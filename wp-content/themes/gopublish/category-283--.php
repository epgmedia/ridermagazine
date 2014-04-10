<?php get_header(); ?>
<!-- =============== Triumph Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

   <div id="contentleft">
   
       <div class="postarea">

<div class="breadcrumb">
<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
<a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Triumph Motorcycle Reviews
</div>
           		<p><?php 
                   //echo category_description(); 
                   echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2012/LP/logo-triumph.gif\" width=\"260\" height=\"73\" align=\"left\" style=\"margin-right:15px;\" alt=\"Triumph Motorcycles\">				   

<h1 style=\"font-weight:bold\">Triumph Motorcycle Road Tests<br/>&amp; Reviews</h1>
<h2 class=\"top\"><strong>Triumph Motorcycle Guide</strong></h2>

<p>Established in the United Kingdom in 1901, Triumph Motorcycles is one of the oldest motorcycle manufacturers in the world, though it ceased production for several years after going bankrupt in the early 1980s. Currently based in Hinckley and owned by John Bloor, Triumph produces about 50,000 motorcycles annually. Triumph motorcycle guides discuss a range of motorcycles and motorbikes in several model families: Classics (Bonneville, Thruxton, Scrambler), Cruisers (Thunderbird, Speedmaster, America, Rocket III), Roadster (Speed Triple, Street Triple), Supersport (Daytona), Adventure (Tiger 800/XC, Tiger 1050, Tiger Explorer) and Touring (Sprint GT, Trophy). Triumph motorcycle reviews and road tests led to the company winning <em>Rider&#8217;s</em> Motorcycle of the Year in 2007 with the Tiger 1050, and in 2011 with the Tiger 800/XC.</p>		
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
<h2><strong>Triumph Motorcycles, Who Uses Them? </strong></h2>
<p>Triumph offers street-legal motorcycles and motobikes in several model families: Classics (Bonneville, Thruxton, Scrambler), Cruisers (Thunderbird, Speedmaster, America, Rocket III), Roadster (Speed Triple, Street Triple), Supersport (Daytona), Adventure (Tiger 800/XC, Tiger 1050, Tiger Explorer) and Touring (Sprint GT, Trophy). </p>
<br/>
<h2><strong>Triumph Motorcycle Standouts </strong></h2>
<p><a href="http://www.ridermagazine.com/manufacturer/triumph" title="Triumph motorcycle reviews">Triumph motorcycle reviews</a> Triumph motorcycle reviews and road tests demonstrate that the company has built dozens of motorcycle and motorbike models since the company was first established in 1901, and several of the models in the current lineup are named after famous motorcycles from Triumph&#8217;s past. The Bonneville, built by Hinckley Triumph since 2001 and one of the company&#8217;s best-selling models, is based on the popular Bonneville built by Meriden Triumph from 1959-1988. It is named after the Bonneville Salt Flats, where Triumph made numerous land-speed record attempts. The Triumph Tiger, in 100 and T100 variants, was manufactured between 1939 and 1973; the Tiger name was revived in 1993 with the Tiger 900, which became the Tiger 1050, and other Tiger variants followed (Tiger 800/XC in 2011 and Tiger Explorer in 2012). Other past model names revived in recent years include Daytona, Thunderbird, Rocket and Trophy. Triumph motorcycle guides praise the top-selling Speed Triple, one of the first production streetfighter-style motorcycles (sportbikes without bodywork), known for its distinctive twin &#8220;bug-eye&#8221; headlights.</p>
</div>
</div><!-- widgetwrap ends  -->

       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>