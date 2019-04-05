<?php get_header();?>

    <div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="logistics" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
        <div id="rev_slider_5_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-8" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <?php
                        $imageId = 'slider_image';
                        $image = cs_get_option($imageId);
                        $imageUrl = wp_get_attachment_image_src($image,'full');
                        $imageUrl = $imageUrl[0];

                        $sliderDescriptionId = 'slider_description';
                        $sliderDescription = cs_get_option($sliderDescriptionId);
                    ?>
                    <img src="<?php echo $imageUrl ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" id="slide-8-layer-1" data-x="['left','left','left','center']" data-hoffset="['0','43','52','2']" data-y="['middle','middle','middle','middle']" data-voffset="['-67','-68','-64','-56']" data-width="461" data-height="173" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1140,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 461px; max-width: 461px; max-width: 173px; max-width: 173px; white-space: nowrap; font-size: 50px; line-height: 59px; font-weight: 400; color: #000000; letter-spacing: -4px;font-family:Poppins;"> 
                         <?php echo $sliderDescription ?>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption rev-btn " id="slide-8-layer-2" data-x="['left','left','left','center']" data-hoffset="['0','41','47','7']" data-y="['top','top','top','top']" data-voffset="['345','372','378','375']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":640,"speed":1120,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:transparent;bc:rgb(255,255,255);"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 6; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: px;font-family:Poppins;background-color:rgb(229,57,53);border-color:rgb(229,57,53);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Contact Us </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
    <div class="service-section-3">
        <div class="container">
            <div class="row">
                <?php for ($i=1; $i <=3 ; $i++) {    /*to loop through the data in theme options*/
                    /*retrieve image src*/
                    $serviceLogoId = 'service_logo'.$i;
                    $serviceLogo = cs_get_option($serviceLogoId);
                    $serviceLogoSrc = wp_get_attachment_image_src($serviceLogo,'full');
                    $serviceLogoSrc = $serviceLogoSrc[0];

                    $serviceTitleId ='service_title'.$i;
                    $serviceDescriptionId = 'service_description'.$i ;
                ?>
                <div class="col-md-4">
                    <div class="service layout-3 sm-mb-35px">
                        <div class="clearfix">
                            <div class="icon"><img src="<?php echo $serviceLogoSrc ?>" alt=""></div>
                            <a href="#" class="title"><?php echo cs_get_option($serviceTitleId);?></a>
                        </div>
                        <div class="dis clearfix">
                            <?php echo cs_get_option($serviceDescriptionId);?>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>


    <!--============= About Us =============-->
    <div class="nile-about-section">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-truck"></i></div>
                        <div class="h2">Our Service</div>
                        <div class="des">In  quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue, eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur bibendum. </div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">
                <?php 
                    $args = array(
                        'post_type'=> 'our_service',
                        'posts_per_page' => 4,
                        'order' => 'ASC'
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="service-icon-box">
                        <div class="icon"><img src="<?php the_post_thumbnail_url()?>" alt=""></div>
                        <a href="#" class="title h2"><?php the_title();?></a>
                        <div class="des"><?php the_content();?></div>
                    </div>
                </div>
                <?php
                        endwhile;
                    endif;
                ?>        
            </div>


            <div class="text-center">
                <a href="<?php echo home_url(); ?>/services" class="nile-bottom md">Show all <i class="fa fa-arrow-right"></i> </a>
            </div>

        </div>

    </div>
    <!--============= //About Us =============-->



    <div class="call-action ba-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 padding-tb-15px">
                    <h2><?php echo cs_get_option('service_promotion_title'); ?></h2>
                    <div class="text"><?php echo cs_get_option('service_promotion_description');?></div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <?php
                            for($i=1;$i<=3;$i++){
                                $userActionTitleId = 'user_action_title'.$i;
                                $fontAwesomeIconsId = 'font_awesome_icons'.$i; 
                        ?>
                        <div class="col-lg-4 col-md-4 sm-mb-45px">
                            <a href="#" class="action-bottom layout-1">
								<i class="<?php echo cs_get_option($fontAwesomeIconsId); ?>"></i>
                                <h4><?php echo cs_get_option($userActionTitleId); ?></h4>
							</a>
                        </div>
                        <?php
                            }   
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section padding-tb-100px section-ba-2">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-money"></i></div>
                        <div class="h2">Our Pricing</div>
                        <div class="des">In quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue, eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur bibendum. </div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">

                <?php 
                    $args = array('post_type'=>'our_pricing');
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                ?>
                <!-- item -->
                <div class="col-lg-3 col-md-6">
                    <div class="<?php the_field('css_class');?>">
                        <div class="title main-color"><?php the_field('order_type');?></div>
                        <div class="price"><span>$</span><?php the_title();?></div>
                        <div class="per-mile"><?php the_field('rate');?></div>
                        <ul class="elements">
                            <li> <?php the_field('kg_load');?></li>
                            <li><?php the_field('kg_per_pallot');?>pallet </li>
                            <li><?php the_field('warehousing');?></li>
                            <li><?php the_field('free_packaging');?></li>
                            <li><?php the_field('support');?></li>
                        </ul>
                        <div class="padding-25px">
                            <a href="#" class="nile-bottom sm-block">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <!-- // end item -->

                <?php
                        endwhile;
                    endif;
                ?>   
            </div>

        </div>
    </div>




    <div class="partners">
        <div class="nile-about-section">
            <div class="container">
                <div class="row">
                    <?php
                        $args = array('post_type' => 'partners');
                        $query = new WP_Query($args);
                        if($query->have_posts()):
                            while($query->have_posts()):
                                $query->the_post();
                    ?>
                    <!-- partners item -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="partners-item margin-bottom-tb-15px text-center">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                        </div>
                    </div>
                    <!--//  partners item -->
                    <?php
                            endwhile;
                        endif;
                    ?>

                </div>
            </div>
        </div>
    </div>




    <div class="section padding-tb-100px section-ba-3">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-bookmark-o"></i></div>
                        <div class="h2">Last News</div>
                        <div class="des">In quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue, eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur bibendum. </div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">
                <?php
                    $args = array(
                        'post_type'=>'post',
                        'posts_per_page'=>'3',
                        'order'=>'DESC',
                        'cat'=>'4' /* this represents 4th category i.e. last news*/
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                ?>
                <div class="col-lg-4 col-md-6 sm-mb-35px">
                    <div class="blog-item">
                        <div class="img">
                            <a href="#"><img src="<?php the_post_thumbnail_url()?>" alt=""></a>
                            <a href="#" class="date">
								<span class="day"><?php the_field('day');?></span>
								<span class="month"><?php the_field('month')?></span>
							</a>
                        </div>
                        <a href="<?php the_permalink();?>" class="title"><?php the_excerpt();?></a>
                    </div>
                </div>
                <?php
                        endwhile;
                    endif;
                ?>

            </div>

        </div>
    </div>


    <?php get_footer();?>
