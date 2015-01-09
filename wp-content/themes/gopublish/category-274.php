<?php get_header(); ?>
	<!-- =============== KTM Motorcycle Reviews =============== -->

<div id="content" class="cat-lp">

	<div id="contentleft">

		<div class="postarea">

			<div class="breadcrumb">
				<a href="http://www.ridermagazine.com" title="Go to Home.">Home</a> >
				<a href="http://www.ridermagazine.com/manufacturer"
				   title="Go to the MANUFACTURER category archives.">MANUFACTURER</a> > KTM
				                                                                    Motorcycle
				                                                                    Reviews
			</div>
			<p><?php
				//echo category_description();
				echo "
<img src=\"http://www.ridermagazine.com/wp-content/uploads/2013/LP/ktm-logo.jpg\" width=\"188\" height=\"77\" align=\"left\" style=\"margin-right:15px;\" alt=\"KTM Motorcycles\">				   

<h1 style=\"font-weight:bold\">KTM Road Tests & Reviews</h1>
<h2 class=\"top\"><strong>KTM Motorcycle Guide</strong></h2>

<p>
KTM is an Austrian motorcycle and moped manufacturer founded in 1934 by engineer Hans Trunkenpolz. It started out as a metal working shop and was named <em>Kraftfahrzeuge Trunkenpolz Mattighofen</em>. In 1954, KTM began producing motorbikes. In reviews, the company is best known for its off-road motorcycles, though in recent years it has expanded into street motorcycle production.
</p>		
				"; ?>
			</p>

			<?php get_template_part('inc/loop-category'); ?>

			</div>

		</div>

		<?php include( TEMPLATEPATH . "/sidebar.php" ); ?>
		<div class="widgetwrap widgetLP">
			<div class="widgetbody3">
				<h2><strong>KTM Motorcycles, Who Uses Them?</strong></h2>

				<p>KTM motorcycle road tests discuss the company's street-legal dual-sport
				   motorcycles and sport-oriented street motorcycles, as well as a wide range
				   of off-road motorcycles for racing and recreational use. Reviews focus on
				   the fact that the company has been creating and improving its 2-stroke
				   mtorbikes and has been looking into Direct Fuel Injection. KTM also has a
				   lightweight, street legal (Europe) car known as the X-Bow.</p>
				<br/>

				<h2><strong>KTM Motorcycle Standouts</strong></h2>

				<p>
					KTM motorcycle road tests on their street-legal lineup include the 690
					Enduro R dual-sport, the 450 SMR supermoto, the 690 Duke sport standard,
					the 990 SM T and 990 Adventure tourers, and the 1190 RC8 R and 1190 RC8 R
					Race Spec superbikes. KTM recently introduced the 1190 Adventure as an
					early-release 2014 model.
				</p>
			</div>
		</div>
		<!-- widgetwrap ends  -->


	</div>

	<!-- The main column ends  -->

<?php get_footer(); ?>