<?php
/** Header File */

global $post;
get_header();
?>

	<div id="content">

		<div id="contentleft">

			<div class="postarea">

				<?php
				get_template_part( 'breadcrumb' );

				if ( have_posts() ) : while ( have_posts() ) : the_post();

					$photographer    = get_post_meta( $post->ID, 'photographer', true );
					$caption         = get_post_meta( $post->ID, 'caption', true );
					$video           = get_post_meta( $post->ID, 'video', true );
					$slideshowcredit = get_post_meta( $post->ID, 'slideshowcredit', true );
					$jobtitle        = get_post_meta( $post->ID, 'jobtitle', true );
					$writer          = get_post_meta( $post->ID, 'writer', true );
					$featured        = get_post_meta( $post->ID, 'featured', true );
					$related         = get_post_meta( $post->ID, 'related', true );
					$slideshow       = get_post_meta( $post->ID, 'slideshow', true );
					$gallery         = get_post_meta( $post->ID, 'gallery', true );
					$videographer    = get_post_meta( $post->ID, 'videographer', true );
					$audio           = get_post_meta( $post->id, 'audio', true);


					if ( $video ) {
						$pattern = "/height=\"[0-9]*\"/";
						$video1  = preg_replace( $pattern, "height='400'", $video );
						$pattern = "/width=\"[0-9]*\"/";
						$video1  = preg_replace( $pattern, "width='590'", $video1 );
						?>
						<div style="margin-bottom:15px;">
							<?php
							echo $video1;
							if ( $videographer ) { ?>
								<p class="photocredit" style="padding-bottom:0;">
									Video Credit: <?php echo $videographer; ?>
								</p>
							<?php } ?>
						</div>
					<?php } ?>

					<h1 style="line-height:40px"><?php the_title(); ?></h1>

					<div id="permalinkphotobox">

						<?php
						if ( $audio ) {
							$audioplayer = "[audio:" . $audio . "]";
							if ( function_exists( 'insert_audio_player' ) ) {
								insert_audio_player( $audioplayer );
							} ?>
							<div style="margin-bottom:15px"></div>
						<?php }

						if ( $slideshow ) {
							$showalbum = "[slideshow id =" . $slideshow . " w=302 h=200]";
							echo do_shortcode( $showalbum ); ?>
							<div style="margin-bottom:15px"></div>
						<?php }

						if ( $gallery ) {
							$showalbum = "[nggallery id =" . $gallery . " w=50 h=50]";
							echo do_shortcode( $showalbum ); ?>
						<?php }

						if ( $slideshowcredit ) { ?>
							<p class="photocredit">
								Credit: <?php echo $slideshowcredit; ?>
							</p>
						<?php }

						if ( $featured != "No" ) {

							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'permalink', array( 'class' => 'permalinkimage' ) );
							}
							if ( $caption ) { ?>
								<p class="photocaption">
									<?php echo $caption; ?>
								</p>
							<?php }
							if ( $photographer ) { ?>
								<p class="photocredit">
									Photo Credit: <?php echo $photographer; ?>
								</p>
							<?php } ?>

						<?php } ?>

					</div>

					<p>
						<?php snowriter(); ?> <?php the_time( 'F j, Y' ); ?> <?php edit_post_link( '(Edit)', '', '' ); ?>
						<br/>
						Filed under <?php the_category( ', ' ) ?>
					</p>

					<?php the_content( __( 'Read more' ) ); ?>

					<div style="clear:both;"></div>

					<div class="postmeta">

						<?php
						the_tags( '<p><span class="tags">Tags: ', ', ', '</span></p>' );
						?>

					</div>

				<?php endwhile;

				else: ?>

					<p>
						<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
					</p>

				<?php endif; ?>

			</div>

			<div style="clear:both;"></div>

			<?php

			if ( get_post_meta( $post->ID, 'related', true ) != "No" ) { ?>

				<div style="clear:both;margin-bottom:15px;"></div>

				<div class="widgetwrap">

					<div class="titlewrap610">

						<h2>Related Content</h2>

					</div>

					<div id="permalinksidebar">
						<?php if ( function_exists( 'ddop_show_posts' ) ) {
							echo ddop_show_posts();
						} ?>

						<h3>Other stories that might interest you...</h3>

						<?php if ( function_exists( 'similar_posts' ) ) {
							similar_posts();
						} ?>

					</div>

					<div class="widgetfooter"></div>

				</div>

			<?php } ?>

			<?php if ( get_theme_mod( 'comments' ) == "Enable" ) { ?>

				<div class="widgetwrap">

					<div class="titlewrap610">
						<h2>Comments</h2>
					</div>

					<div class="widgetbody">
						<?php
						if ( $commentspolicy = get_theme_mod( 'comments-policy' ) ) {
							echo '<p>' . $commentspolicy . '</p>';
						}
						comments_template();
						?>
					</div>

					<div class="widgetfooter"></div>

				</div>

			<?php } ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>