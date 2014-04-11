<?php
/*
Template Name: Great Roads Page
*/

get_header();

?>

<div id="content">

    <div id="contentleft">

        <div class="postarea">

            <?php

            edit_post_link('(Edit This Page)', '<p>', '</p>');

            if (have_posts()) : while (have_posts()) : the_post();

                the_content(__('[Read more]'));

                endwhile;
            else: ?>

                <p>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                </p>

            <?php endif; ?>

        </div>

        <div style="float: left; width: 300px;">

        <?php
        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Great Roads Left") ) :
        endif;
        ?>

        </div>

        <div style="float: right; width: 300px;">

            <?php
            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Great Roads Right") ) :
            endif;
            ?>

        </div>

    </div>
	
    <?php include(TEMPLATEPATH."/sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>