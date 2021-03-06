<?php get_header(); ?>
	
	<div id="site-banner">
		<div class="banner-highlight">
			<h2>DISCOVER SCOTLAND IN A WHOLE NEW WAY</h2>
			<h3>BY HIRING A MOTORHOME FROM SCOTTISHMOTORHOMES4HIRE</h3>
		</div>
	</div>
	<!-- End #site-banner -->
	
	<div id="site-content">
	
		<section class="container-full">
			<div class="section-title">
				<h1>Welcome to our new website</h1>
				<h4>Over the next few weeks we will be adding to the site so check back soon for new features</h4>
			</div>
			<div class="container panel-links">
				<div class="column col-sm-4">
					<a href="/fleet/" style="background: url('<?php bloginfo('template_directory'); ?>/assets/home_page/our_fleet.jpg')" class="square_link">
						<span class="overlay"><!--overlay--></span>
						<h5>Our Fleet</h5>
					</a>
				</div><!--
				--><div class="column col-sm-4">
					<a href="/enquiry/" style="background: url('<?php bloginfo('template_directory'); ?>/assets/home_page/enquiry.jpg')" class="square_link">
						<span class="overlay"><!--overlay--></span>
						<h5>Detailed Enquiry</h5>
					</a>
				</div><!--
				--><div class="column col-sm-4">
					<a href="/photo-wall/" style="background: url('<?php bloginfo('template_directory'); ?>/assets/home_page/photo_wall.jpg')" class="square_link">
						<span class="overlay"><!--overlay--></span>
						<h5>Hirer Photo Wall</h5>
					</a>
				</div>
			</div>
		</section>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php the_content(); ?>

		<?php endwhile; endif; ?>
		

	</div>


<?php get_footer(); ?>