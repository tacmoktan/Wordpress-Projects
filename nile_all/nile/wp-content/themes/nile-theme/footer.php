<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nile-theme
 */

?>

	<footer class="layout-dark">
        <div class="container padding-tb-100px">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="about-us sm-mb-45px">
                        <div class="logo-footer margin-bottom-35px">
                            <a href="#">
                            	<?php 
	                            	$imageId = 'footer_logo';
	                            	$image = cs_get_option($imageId);
	                            	$imageSrc = wp_get_attachment_image_src($image,'full');
	                            	$imageSrc = $imageSrc[0];
                            	?>
                            	<img src="<?php echo $imageSrc ?>" alt="">
                            </a>
                        </div>
                        <div class="text margin-bottom-35px">
                            <?php echo cs_get_option('footer_description');?>
                        </div>
                        <a href="<?php echo home_url();?>/about" class="nile-bottom sm">Read More</a>
                    </div>
                </div>

				<div class="col-lg-3 col-md-6">
                    <div class="nile-widget widget_nav_menu sm-mb-45px">

                        <h2 class="title">Our Services</h2>
                        <ul class="footer-menu">
							<?php
	                    		$args = array('post_type' => 'our_service');
	                    		$query = new WP_Query($args);
	                    		if($query->have_posts()):
	                    			while($query->have_posts()):
	                    				$query->the_post();
	                    	?>
                            <li><a href="<?php the_field('href');?>"><?php the_title();?></a></li>
                            <?php
                            		endwhile;
                            	endif;
                            ?>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="nile-widget widget_nav_menu sm-mb-45px">
                        <h2 class="title">Site Pages</h2>
                        <ul class="footer-menu">
                            <li><a href="<?php echo home_url();?>/about">About </a></li>
                            <li><a href="<?php echo home_url();?>/our-team">Our Team </a></li>
                            <li><a href="<?php echo home_url();?>/services">Services </a></li>
                            <li><a href="<?php echo home_url();?>/faqs">FAQs </a></li>
                            <li><a href="<?php echo home_url();?>">Terms and Conditions </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="nile-widget">
                        <div class="margin-bottom-60px">
                            <h2 class="title">Location</h2>
                            <div class="contact-info opacity-9">
                                <div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
                                <div class="text">
                                    <span class="title-in">Location :</span> <br>
                                    <span class="font-weight-500 text-uppercase"><?php echo cs_get_option('header_subaddress')?></span>
                                </div>
                            </div>
                        </div>
                        <div class="call_center">
                            <h2 class="title">Call Center</h2>
                            <div class="contact-info opacity-9">
                                <div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
                                <div class="text">
                                    <span class="title-in">Call Us :</span><br>
                                    <span class="font-weight-500 text-uppercase"><?php echo cs_get_option('header_phone');?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="copy-right">
            <div class="container padding-tb-50px">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copy-right-text text-lg-left text-center sm-mb-15px"><a href="https://www.templatespoint.net" target="_blank"> &copy; <?php echo cs_get_option('copyright');?></a> </div>
                    </div>
                    <div class="col-lg-6">
                        <!--  Social -->
                        <ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
                        	
                            <?php
                                if(cs_get_option('facebook')){
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
                                if(cs_get_option('facebook')){
                            ?>
                                <li class="list-inline-item"><a class="twitter" href="<?php echo cs_get_option('twitter');?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <?php
                                }
                            ?>

                            <?php
                                if(cs_get_option('facebook')){
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
    </footer>

    <?php wp_footer();?>
</body>


<!-- home-300:34-->
</html>