<?php /* Template Name: Text Only */ ?>

<?php get_header(); ?>

	
	<div id="site-banner">
	    <div class="banner-highlight">
	        <h2>&nbsp;</h2> 
	    </div>
	</div>
	<!-- End #site-banner -->

	<div id="site-content">
		<div class="container">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<?php the_content(); ?>

			<?php endwhile; endif; ?>

		</div>
	</div>


<?php get_footer(); ?>