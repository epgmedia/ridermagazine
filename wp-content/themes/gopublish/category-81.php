<?php get_header(); ?>

<!-- =============== BMW Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

    <div id="contentleft">
   
        <div class="postarea">

            <div class="breadcrumb">
                <a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
                <a href="http://www.ridermagazine.com/manufacturer" title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > BMW Motorcycle Reviews
            </div>

            <div>
                <?php //echo category_description(); ?>
                <img src="http://www.ridermagazine.com/wp-content/uploads/2012/LP/logo-bmw.jpg" width="200" height="200" align="left" style="margin-right:15px;">
                <h1 style="font-weight:bold">
                    BMW Motorcycle Road Tests
                    <br/>&amp; Reviews
                </h1>
                <h2 class="top">
                    <strong>BMW Motorcycle Guide</strong>
                </h2>
                <p>
                    BMW, an acronym for Bayerische Motoren Werke, is a German motorcycle,
                    automobile and engine manufacturing company founded in 1917. BMW motorcycles
                    were first manufactured in 1923, powered by an air-cooled, horizontally opposed
                    'boxer' twin engine, a much modernized version of which still powers several
                    models in BMW's current lineup.
                </p>
            </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1>
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
            </h1>

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
                <?php
            }
            if ($audio) { ?>
                <div style="width:300px;">
                <?php $audioplayer = "[audio:" . $audio . "]";
                    if (function_exists('insert_audio_player')) {
                        insert_audio_player($audioplayer);
                    }
                ?>
                </div>
                <?php
            } ?>
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

                <?php the_tags('<p><span class="tags">Tags: ', ', ', '</span></p>'); ?>

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

            <h2>
                <strong>BMW Motorcycles, Who Uses Them? </strong>
            </h2>

            <p>
                <a href="http://www.ridermagazine.com/manufacturer/bmw" title="BMW motorcycle reviews">BMW motorcycle reviews</a>
                feature street-legal motorcycles for touring, sport touring,
                sport riding and dual-sport/adventure. BMW also owns Husqvarna,
                an Italian manufacturer of dirt bikes.
            </p>

            <br/>

            <h2>
                <strong>BMW Motorcycle Standouts </strong>
            </h2>

            <p>
                BMW's most iconic current model is the BMW R 1200 GS, an adventure touring
                motorcycle that is the company's best seller. Originally introduced in 1980
                as the R80G/S, it popularized the concept of Gel&auml;nde/Strasse (German
                for off-road/on-road) and helped launch the dual-sport/adventure touring
                market. The 1979 BMW R100RT was the company's first touring motorcycle, which
                featured a windscreen, fairing, saddlebags and shaft drive; later versions
                of the R-RT introduced oil cooling for the trademark boxer engine, BMW
                motorcycle road tests examine the unique Telelever front and Paralever rear
                suspension, as well as electronic suspension adjustment. The 1983 BMW K100
                was the first model in the company's lineup powered by a liquid-cooled,
                in-line four engine, the K-series was BMW's debut platform for an electrically
                adjustable windscreen and anti-lock brakes
            </p>

            <p>
                BMW motorcycle reviews made the K 1600 GTL <em>Rider's</em> 2012 Motorcycle
                of the Year because it broke new ground in the luxury touring segment with a
                powerful in-line engine, the best power-to-weight ratio in the class, remarkable
                handling and performance, as well as useful features such as the Multi-Controller
                and optional Adaptive Headlight.
            </p>

        </div>

    </div><!-- widgetwrap ends  -->

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>