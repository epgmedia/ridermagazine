<?php
/*
Template Name: Latest Issue
*/


get_header(); ?>

	<div id="content">

		<div id="contentleft" style="width:940px">

			<div class="postarea" style="width:920px">

				<table align="right">
					<tbody>
					<tr>
						<td><a href="https://w1.buysub.com/pubs/AC/RDR/login_singlemag_noCAPTCHA.jsp?cds_page_id=68438&amp;cds_mag_code=RDR">
								<img class="alignnone size-full wp-image-337" title="Customer Service" src="/wp-content/uploads/2011/02/Rider-Customer-Service.png" alt="Customer Service" width="170" height="24" />
							</a></td>
						<td><a href="https://w1.buysub.com/pubs/AC/RDR/login_singlemag_noCAPTCHA.jsp?cds_page_id=68438&amp;cds_mag_code=RDR">
								<img class="alignnone size-full wp-image-336" title="Rider Magazine Renewal" src="/wp-content/uploads/2011/02/Rider-Renew-Subscription.png" alt="Renew Rider Subscription" width="170" height="24" />
							</a></td>
						<td><a href="https://itunes.apple.com/us/app/rider-mag/id834498691?ls=1&amp;mt=8">
								<img class="alignnone size-full wp-image-338" title="Magazine App" src="/wp-content/uploads/2011/02/Rider-Magazine-App.png" alt="Magazine App" width="170" height="24" />
							</a></td>
					</tr>
					</tbody>

				</table>

				<div style="float:right;width:500px;padding:10px 0 10px 10px;">
					<?php the_post_thumbnail( 'full' ); ?>
					<p>
						<?php echo get_post(get_post_thumbnail_id())->post_excerpt;	?>
					</p>
				</div>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php edit_post_link('(Edit This Page)', '<p>', '</p>'); ?>

				<?php the_content(__('[Read more]')); ?>

				<table style="margin: auto;">
					<tbody>
					<tr>
						<td><a href="https://w1.buysub.com/pubs/AC/RDR/RDR_US_Convert.jsp?cds_page_id=68650&cds_mag_code=RDR&id=1422984687040&lsid=50341123115019292&vid=6">
								<img class="alignnone size-full wp-image-337" title="Subscribe Now" src="/wp-content/uploads/2011/02/Rider-Subscribe-Now.png" alt="Subscribe Now" width="170" height="24" />
							</a></td>
						<td><a href="http://www.wheresmymagazine.com/">
								<img class="alignnone size-full wp-image-337" title="Newsstand" src="/wp-content/uploads/2011/02/On-Newsstands-Rider.png" alt="Newsstand" width="170" height="24" />
							</a></td>
						<td><a href="/more-magazines/">
								<img class="alignnone size-full wp-image-338" title="More Magazines" src="/wp-content/uploads/2011/02/Rider-More-Magazines.png" alt="More Magazines" width="170" height="24" />
							</a></td>
						<td><a href="https://w1.buysub.com/servlet/ConvertibleGateway?cds_mag_code=RDR&amp;cds_page_id=68650">
								<img class="alignnone size-full wp-image-336" title="Rider Magazine Gift Subscription" src="/wp-content/uploads/2011/02/Rider-Gift-Subscription.png" alt="Gift Subscription" width="170" height="24" />
							</a></td>
						<td><a href="https://w1.buysub.com/pubs/AC/RDR/login_singlemag_noCAPTCHA.jsp?cds_page_id=68438&amp;cds_mag_code=RDR">
								<img class="alignnone size-full wp-image-337" title="Rider Subscription Renewal" src="/wp-content/uploads/2011/02/Rider-Renew-Subscription.png" alt="Renew Rider Subscription" width="170" height="24" />
							</a></td>
					</tr>
					</tbody>
				</table>

				<?php endwhile;

				else: ?>

					<p>
						<?php _e('Sorry, no posts matched your criteria.'); ?>
					</p>

				<?php endif; ?>

			</div>

		</div>

	</div>

	<!-- The main column ends  -->

<?php get_footer(); ?>