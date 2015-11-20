<?php /* Template Name : Privilege Page */ ?>

<?php get_header(); ?>
	
	<div id="site-banner">
	    <div class="banner-highlight">
	        <h2>Testing</h2> 
	    </div>
	</div>
	<!-- End #site-banner -->

    <div id="site-content">
    	<section class="container">

        	<div class="content-main col-md-9">
        		
        		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        			
					<?php the_content(); ?>

        		<?php endwhile; endif; ?>		

        	</div>

            
         	<div class="content-aside col-md-3">
                <div class="aside-module">
                        <h3>Want to Check Dates?</h3>
                        <p>Click below to complete our simple online enquiry form</p>
                        <a href="/enquiry/">Enquire Now</a>
                    </div>
                    <div class="aside-module">
                        <h3>Vehicle Damage Excess Insurance</h3>
                        <p>Insure your Vehicle Damage Excess with Questor Insurance Services Ltd</p>
                        <a href="/questor-excess-insurance/">Find out more</a>
                    </div>
                    <div class="aside-module">
                        <h3>Terms &amp; Conditions</h3>
                        <p>Click below to see our full list of terms and conditions</p>
                        <a href="/terms-and-conditions/">Find out more</a>
                    </div>
            </div>
            
        </section>

    </div>
    <!-- End #site-content -->

<?php get_footer(); ?>