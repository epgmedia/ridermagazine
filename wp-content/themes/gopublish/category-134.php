<?php get_header(); ?>

<!-- =============== Kawasaki Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

    <div id="contentleft">
   
        <div class="postarea">

            <div class="breadcrumb">

                <a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
                <a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Kawasaki Motorcycle Reviews

            </div>
           	<div>

                <?php //echo category_description(); ?>
                <img src="http://www.ridermagazine.com/wp-content/uploads/2012/LP/logo-kawasaki.jpg" width="230" height="123" align="left" style="margin-right:15px;">

                <h1 style="font-weight:bold;">Kawasaki Motorcycle Road Tests
                    <br/>&amp; Reviews
                </h1>

                <h2 class="top"><strong>Kawasaki Motorcycle Guide</strong></h2>

                <p>
                    The Kawasaki Motorcycle &amp; Engine Division has been manufacturing
                    motorcycles since 1954. The trademarked names of some of Kawasaki's
                    powersports machines&#8211;from Kawasaki Ninja sportbikes to Kawasaki
                    Vulcan cruisers to Kawasaki Jet Ski personal watercraft&#8211;have
                    become household names.
                </p>

            </div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php

        $audio = get_post_meta($post->ID, audio, true);
        $video = get_post_meta($post->ID, video, true);

        if (has_post_thumbnail()) {
            the_post_thumbnail( 'archive', array('class' => 'categoryimage'));
        }

        if ($video) {
            $pattern = "/height=\"[0-9]*\"/";
            $video = preg_replace($pattern, "height='150'", $video);
            $pattern = "/width=\"[0-9]*\"/";
            $video = preg_replace($pattern, "width='200'", $video);
            ?>

            <div style="float:right;width:200px;margin-bottom:15px;margin-left:10px">
                <?php echo $video; ?>
            </div>

        <?php }

        if ($audio) { ?>

            <div style="width:300px;">
                <?php $audioplayer = "[audio:" . $audio . "]";
                if (function_exists('insert_audio_player')) {
                    insert_audio_player($audioplayer);
                }
                ?>
            </div>

        <?php } ?>

            <p>
                <?php
                snowriter();
                the_time('F j, Y');
                edit_post_link('(Edit)', ' &bull; ', '');
                ?>
            </p>
        
            <?php the_content_limit(300, "Read more &raquo;"); ?>

            <div style="clear:both;"></div>
            
            <div class="postmeta2">
                <?php
                the_tags('<p><span class="tags">Tags: ', ', ', '</span></p>');
                ?>
            </div>
            
            <?php endwhile;

        else: ?>
           
            <p>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            </p>
        <?php endif; ?>
            <p>
                <?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>
            </p>
           
        </div>
               
    </div>
   
    <?php include(TEMPLATEPATH."/sidebar.php");?>

    <div class="widgetwrap widgetLP" >

        <div class="widgetbody3">

            <h2><strong>Kawasaki Motorcycles, Who Uses Them? </strong></h2>

            <p>
                <a href="http://www.ridermagazine.com/manufacturer/kawasaki" title="Kawasaki motorcycle reviews and test drives">Kawasaki motorcycle test drives</a>
                are only the beginning. The company offers a full range of motorcycles,
                from cruisers, sport tourers, sportbikes, dirt bikes and the iconic
                Kawasaki KLR650 dual-sport to ATVs, side-by-sides and personal watercraft.
            </p>

            <br/>

            <h2><strong>Kawasaki Motorcycle Standouts </strong></h2>

            <p>
                The 1984 Kawasaki GPZ900R helped usher in the modern sportbike era with
                its liquid-cooled, 16-valve, in-line four engine that was capable of
                more than 150 mph. It was the first motorcycle marketed under the Ninja
                name and the subject of many Kawasaki motorcycle reviews. The 1986
                Kawasaki ZG1000 Concours was powered by a 997cc in-line four with shaft
                drive, and it had a full fairing, tall windscreen, lockable saddlebags
                and large fuel capacity, making it one of the first sport tourers (it was
                replaced by the Concours 14 in 2008). In 1987 Kawasaki motorcycle test
                drives began to include the KLR650, a 651cc single-cylinder dual-sport
                motorcycle that stayed in Kawasaki's lineup all but unchanged for 21 years
                (it was updated for 2008), developed a reputation as an inexpensive,
                durable adventure bike, helping to launch numerous around-the-world trips
                and a large aftermarket for accessories.
            </p>

            <p>
                Kawasaki motorcycle reviews made the Concours 14 <em>Rider's</em> 2008
                Motorcycle of the Year because it reinvented the venerable Concours,
                building a comfortable, well-appointed sport tourer around the Ninja
                ZX-14 engine, with the addition of Variable Valve Timing for a broader
                powerband.
            </p>

        </div>

    </div><!-- widgetwrap ends  -->
       
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>