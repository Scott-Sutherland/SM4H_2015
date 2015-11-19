<!DOCTYPE html>
<!--[if lte IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php the_field('page_title'); ?> | ScottishMotorhomes4Hire</title>
    
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="<?php echo the_field('body_id'); ?>">

    <!-- Google Tag Manager -->
    
    <!-- End Google Tag Manager -->

    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Scottish Motorhomes 4 Hire</a>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Fleet <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Motorhome One</a></li>
                                <li><a href="#">Motorhome Two</a></li>
                            </ul>
                        </li> -->
                        <li><a href="/our-fleet/">Our Fleet</a></li>
                        <li><a href="/tariff/">Tariff</a></li>
                        <li><a href="/enquiry/">Enquiry</a></li>
                        <li><a href="/contact/">Contact</a></li>                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </header>