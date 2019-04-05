<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nile-theme
 */

?>
<!DOCTYPE html>
<html lang="en-US">


<!-- home-300:34-->
<head>
	
    <title>Nile - Transportation and Logistics Responsive HTML5 Template</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, modern, shipment, transport, transportation, truck, trucking">
    <meta name="description" content="Transportation and Logistics Responsive HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body>
    <!--  Header  -->
    <header class="background-white">
        <div class="header-output">
            <div class="header-output">
                <div class="header-in">

                    <!-- Up Head -->
                    <div class="up-head d-none d-lg-block background-grey-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4"><i class="fa fa-phone margin-right-10px"></i>
                                            <?php echo cs_get_option('header_phone');?>
                                        </div>
                                        <div class="col-md-4"><i class="fa fa-envelope-o margin-right-10px"></i>
                                            <?php echo cs_get_option('header_email');?>
                                        </div>
                                        <div class="col-md-4"><i class="fa fa-map-marker margin-right-10px"></i>
                                            <?php echo cs_get_option('header_address');?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            
                                        </div>

                                        <div class="col-lg-6">
                                            <!--  Social -->
                                            <ul class="social-media list-inline text-right margin-0px text-white">
                                                <!-- adding conditionals to display mentioned social media in codestar -->
                                                <?php 
                                                    if (cs_get_option('facebook')){
                                                ?>
                                                    <li class="list-inline-item"><a class="facebook" href="<?php echo cs_get_option('facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <?php
                                                    }
                                                ?>
                                                
                                                <?php
                                                    if(cs_get_option('youtube')){
                                                ?>
                                                    <li class="list-inline-item"><a class="youtube" href="<?php echo cs_get_option('youtube'); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                <?php
                                                    }
                                                ?>
                                                
                                                <?php
                                                    if(cs_get_option('linkedin')){
                                                ?>
                                                    <li class="list-inline-item"><a class="linkedin" href="<?php echo cs_get_option('linkedin')?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <?php
                                                    }
                                                ?>
                                                
                                                <?php
                                                    if(cs_get_option('plus-google')){  
                                                ?>
                                                    <li class="list-inline-item"><a class="plus-google" href="<?php echo cs_get_option('plus-google');?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <?php
                                                    }
                                                ?>
                                                
                                                <?php
                                                    if(cs_get_option('twitter')){
                                                ?>
                                                    <li class="list-inline-item"><a class="twitter" href="<?php echo cs_get_option('twitter');?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <?php
                                                    }
                                                ?>
                                                
                                                <?php
                                                    if(cs_get_option('rss')){   
                                                ?>
                                                    <li class="list-inline-item"><a class="rss" href="<?php echo cs_get_option('rss');?>"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                                <?php
                                                    }
                                                ?>

                                                
                                            </ul>
                                            <!-- // Social -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Up Head -->
                    <div class="container">
                        <div class="position-relative">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">
                                    <?php 
                                       $logo    = cs_get_option('header_logo1');
                                       $logoSrc = wp_get_attachment_image_src($logo,'full');/*retrieving logo using codestar framework*/
                                       $logoSrc = $logoSrc[0];
                                    ?>
                                    <a id="logo" href="<?php echo home_url();?>" class="d-inline-block margin-tb-15px"><img src="<?php echo $logoSrc;?>" alt=""></a>
                                    <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
                                </div>
                                <div class="col-lg-7 col-md-12 position-inherit">
                                <ul id="menu-main" class="nav-menu float-xl-left text-lg-center link-padding-tb-25px dropdown-dark">    
                                    <?php 
                                        wp_nav_menu(array('theme_location'=>'menu-1'));  
                                    ?>
                                </ul>
                                </div>

                                <div class="col-lg-2 col-md-12  d-none d-lg-block">
                                    <a data-toggle="modal" data-target=".bd-example-modal-lg" href="#" class="btn btn-sm border-radius-30 margin-tb-20px text-white  background-main-color  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                                    <i class="fa fa-envelope-o margin-right-10px"></i>  Get A Quote
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- // Header  -->

    <!-- Search  -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form class="clearfix d-block">
            <input type="search" value="" placeholder="Search for . . . ." />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- // Search  -->

    <!-- Get A Quote  -->
    <div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content margin-top-150px background-main-color">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img src="<?php echo home_url();?>/wp-content/uploads/2019/02/contact-img.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="padding-30px">
                            <h3 class="padding-bottom-15px">Get A Free Quote</h3>
                            <?php echo do_shortcode('[contact-form-7 id="384" title="Get a quote Form"]');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Get A Quote  -->