<?php get_header(); ?>
<!-- =============== Suzuki Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

    <div id="contentleft">
   
        <div class="postarea">

            <div class="breadcrumb">

                <a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
                <a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > Suzuki Motorcycle Reviews

            </div>

            <div>

                <?php //echo category_description(); ?>
                <img src="http://www.ridermagazine.com/wp-content/uploads/2012/LP/logo-suzuki.gif" width="231" height="156" align="left" style="margin-right:15px;" alt="Suzuki Motorcycles">

                <h1 style="font-weight:bold;">Suzuki Motorcycle Road Tests<br/>
                    &amp; Reviews
                </h1>

                <h2 class="top"><strong>Suzuki Motorcycle Guide</strong></h2>

                <p>
                    Suzuki Motor Corporation is a Japanese manufacturer of motorcycles,
                    ATVs, automobiles and 4x4 vehicles, marine engines, wheelchairs and
                    small internal combustion engines. Suzuki motorcycle road tests and
                    guides praise the company&#8217;s cruisers (Boulevard M109R,
                    Boulevard C50T and others), sportbikes (Hayabusa, GSX-R1000,
                    GSX1250FA and others), adventure tourers (V-Strom 650/1000),
                    ual-sports (DR650SE, DR-Z400S) and dirt bikes (RM-Z450, DR-Z125 and
                    others). Outstanding Suzuki motorcycle reviews led to the brand
                    winning Rider&#8217;s Motorcycle of the Year in 2002 with the V-Strom
                    1000.
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

            <h2><strong>Suzuki Motorcycles, Who Uses Them? </strong></h2>

            <p>
                Suzuki offers a full range of motorcycles and motorbikes, from
                cruisers, sport tourers and sportbikes, to dirt bikes and dual-sports
                , as well as ATVs, automobiles and 4x4 vehicles, marine engines,
                wheelchairs and small internal combustion engines.
            </p>

            <br/>

            <h2><strong>Suzuki Motorcycle Standouts </strong></h2>

            <p>
                <a href="http://www.ridermagazine.com/manufacturer/suzuki" title="Suzuki motorcycle reviews">Suzuki motorcycle reviews</a>
                Suzuki introduced the first GSX-R750 sportbike in 1985, and it
                was one of the first motorcycles to offer the power, performance
                and lightweight of a racing motorcycle to consumers. In 2002,
                Suzuki introduced the DL1000 V-Strom, an adventure touring motorcycle
                that combined power, comfort, ruggedness and load capacity into a
                go-anywhere package. Due to excellent performance in Suzuki motorcycle
                reviews and road tests, V-Stroms &#8211; along with the DL650 variant
                introduced in 2004 &#8211; have proven to be very popular among
                touring riders.
            </p>

        </div>

    </div><!-- widgetwrap ends  -->

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>