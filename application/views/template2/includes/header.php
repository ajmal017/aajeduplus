<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>AajFxCOIN</title>
<!-- Stylesheets -->
<link href="<?= base_url(); ?>assets/template2/css/bootstrap.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/template2/css/revolution-slider.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/template2/css/style.css" rel="stylesheet">

<!--Favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/template2/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/template2/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/template2/images/favicon/favicon-16x16.png">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?= base_url(); ?>assets/template2/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<script type="text/javascript">
    window._site_url = '<?php echo site_url(); ?>';
</script>
<body ng-app="MyApp" ng-controller="MyController">
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div> 
	
    <!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">
		
        <!--Header Top-->
   		<div class="header-top">
        	<div class="auto-container clearfix">
            	<!--Top Left-->
            	<div class="top-left pull-left">
                    
                    <ul class="links-nav clearfix">
                        <!--<li class="social-links">
                        	<a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-pinterest-p"></span></a>
                        </li>-->
                    </ul>
                    
                </div>
                
                <!--Top Right-->
            	<div class="top-right pull-right">
               	
                	<ul class="links-nav">
                        <li><span class="icon flaticon-telephone"></span> +91 9970236208</li>
                        <li><span class="icon flaticon-close-envelope"></span> info@aajfxcoin.com</li>
                    </ul>
                    
                </div>
            </div>
        </div><!--End Header Top-->
        
   	
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">

                	<div class="pull-left logo-outer">
                    	<div class="logo"><a href="<?= site_url(); ?>"><img src="<?= imagePath('assets/template2/images/logo.png','',0,45) ?>" alt="" title="Bolton"></a></div>
                    </div>

                   <div class="nav-outer pull-right clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <?php $this->view('template2/includes/menu'); ?>
                    </nav>
                </div>
                    
                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="<?= site_url(); ?>" class="img-responsive"><img src="<?= imagePath('assets/template2/images/logo.png','',0,45) ?>" alt="Bolton"></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>

                        <?php $this->view('template2/includes/menu'); ?>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->