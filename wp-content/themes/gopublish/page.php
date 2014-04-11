<?php

get_header();

?>

<div id="content">

    <div id="contentleft">

        <div class="postarea">

            <?php include(TEMPLATEPATH."/breadcrumb.php");

            if (have_posts()) : while (have_posts()) : the_post();

                $title=get_post_meta($post->ID, title, true);

                if (!$title) { ?>
                    <h1><?php the_title(); ?></h1>
                <?php }

                edit_post_link('(Edit This Page)', '<p>', '</p>');

                the_content(__('[Read more]'));

                endwhile;

            else: ?>
			
			    <p>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                </p>

            <?php endif; ?>

        </div>

    </div>
	
    <?php include(TEMPLATEPATH."/sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>