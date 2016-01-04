<!-- <?php /* Template Name : Tariff Page */ ?> -->

<?php get_header(); ?>
	
	<div id="site-banner">
            <div class="banner-highlight">
                <h2>WE HAVE GOT YOU SORTED</h2>
                <h3>WE INCLUDE EVERYTHING YOU NEED TO ENJOY YOUR HOLIDAY</h3>
            </div>
        </div>
        <!-- End #site-banner -->

        <div id="site-content">
        	<section class="container">

                <div class="content-main col-md-9">

                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <h1><?php the_title(); ?></h1>
                    
                   	<?php the_field('top_content'); ?>

                    <div id="tariff-table-container">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#six-berth" aria-controls="six-berth" role="tab" data-toggle="tab">6 Berth Pricing</a></li>
                        <li role="presentation"><a href="#four-berth" aria-controls="four-berth" role="tab" data-toggle="tab">4 Berth Pricing</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="six-berth">
                            <table cellpadding="0" cellspacing="0" width="100%" class="tariff-table">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Weekend (3 Nights)</td>
                                        <td>Weekly</td>
                                    </tr>
                                    <?php 

                                    if ( have_rows('six_tariff_table') ) : while ( have_rows('six_tariff_table') ) : the_row();

                                        $month = get_sub_field('months');
                                        $weekend_rate = get_sub_field('weekend_rate');
                                        $week_rate = get_sub_field('week_rate');

                                    ?>

                                        <tr>
                                            <td><?php echo $month ?></td>
                                            <td>£<?php echo $weekend_rate ?></td>
                                            <td>£<?php echo $week_rate ?></td>
                                        </tr>

                                    <?php endwhile; endif; wp_reset_query();?>

                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="four-berth">
                            <table cellpadding="0" cellspacing="0" width="100%" class="tariff-table">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Weekend (3 Nights)</td>
                                        <td>Weekly</td>
                                    </tr>
                                    <?php 

                                    if ( have_rows('four_tariff_table') ) : while ( have_rows('four_tariff_table') ) : the_row();

                                        $month = get_sub_field('months');
                                        $weekend_rate = get_sub_field('weekend_rate');
                                        $week_rate = get_sub_field('week_rate');

                                    ?>

                                        <tr>
                                            <td><?php echo $month ?></td>
                                            <td>£<?php echo $weekend_rate ?></td>
                                            <td>£<?php echo $week_rate ?></td>
                                        </tr>

                                    <?php endwhile; endif; wp_reset_query();?>

                                </tbody>
                            </table>
                        </div>
                      </div>

                    </div>

                    <?php the_field('bottom_content'); ?>

	                <?php endwhile; endif; ?>

                </div>
             	<div class="content-aside col-md-3">
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