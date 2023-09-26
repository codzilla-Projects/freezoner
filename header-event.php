<!DOCTYPE html>
<html>
<head>
	<title>
		<?php wp_title('|','true','right') ?>
		<?php bloginfo('name'); ?>	
	</title>
	<meta charset="<?php bloginfo('charset') ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Codezilla - https://codzilla.net/">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
	<link href="<?php bloginfo('url'); ?>/wp-content/uploads/2021/05/favicon.ico" rel="icon">
	<link href="<?php bloginfo('url'); ?>/wp-content/uploads/2021/05/favicon.ico" rel="apple-touch-icon">

	<?php wp_head(); ?>
</head>
<body>
	<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Main Header / Header Style Four -->
    <header class="main-header header-style-four">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <div class="text"> <a href="tel:<?=get_option('fz_phone'); ?>" class="number"><?=get_option('fz_phone'); ?></a></div>
                </div>
                <div class="top-right clearfix">
                    <!-- Info List -->
					<ul class="info-list">
						<li>
                        	<div class="curruncy" id="showWeatherforcast" ></div>
                        </li>

                        <li>
                        	<div id="showWeatherforcast">
                     			1
					            <span id="display-from-currency">USD</span> :
					            <span id="display-amt">3.673</span>
					            <span id="display-to-currency">AED</span>
					        </div>
					    </li>
                        
						<li class="quote">
							<div id="MyClockDisplay" class="clock" onload="showTime()"></div>
						</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container clearfix">
				<!--Info-->
				<div class="logo-outer">
					<div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?= get_option('sh_logo_img'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"></a></div>
				</div>

				<!--Nav Box-->
				<div class="nav-outer clearfix">
					<!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
					<nav class="main-menu navbar-expand-md navbar-light">
						<div class="navbar-header">
							<!-- Togg le Button -->      
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon flaticon-menu-1"></span>
							</button>
						</div>
						
						<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
							<?php freezoner_menu(); ?>
						</div>
					</nav>
					<!-- Main Menu End-->
					
					<!-- Outer Box -->
					<div class="outer-box clearfix">
						<div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
					</div>
				</div>
			</div>
            
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="<?php bloginfo('url'); ?>"><img src="<?= get_option('sh_logo_img'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
    <!--Page Title-->
    <section id="page-title" class="page-title centered" style="background: fixed center center url('<?php $page_image = get_post_meta(get_the_ID(),'fz_events_image',true); if(empty($page_image)){ echo fz_URL ."assets/images/background/5.jpg" ;} else{ echo $page_image;}?> ');background-size: cover;">
    	<div class="auto-container">
        	<h2><?php the_title() ?></h2>
            <ul class="page-breadcrumb">
            	<li><a href="<?php bloginfo('url'); ?>">home</a></li>
                <li><?php the_title() ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->