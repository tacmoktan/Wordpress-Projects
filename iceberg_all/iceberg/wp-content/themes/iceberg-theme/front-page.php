<?php get_header(); ?>

<!-- ====== Slider Start ====== -->
<div class="slider index-3">
 <div class="owl-main owl-carousel owl-theme">
  <?php
  for($i = 1; $i<=4;$i++){
    $imageId = 'slider'.$i;
    $image =  cs_get_option($imageId);
    $imageSrc = wp_get_attachment_image_src($image,'full');
    $imageSrc = $imageSrc[0];

    $sliderTitleId = 'slider_title'.$i;
    $sliderTitle = cs_get_option($sliderTitleId);

    $sliderDescriptionId = 'slider_description'.$i;
    $sliderDescription = cs_get_option($sliderDescriptionId);
    ?>
    <div class="item"> 
      <img class="d-block w-100" src="<?php echo $imageSrc?>" alt="First slide">

      <div class="caption d-md-block">
        <div class="display"><?php echo $sliderTitle ?> </div>
        <div class="content"><?php echo $sliderDescription ?></div>
        <a href="<?php echo home_url();?>/about" class="view_more" title="View More">View More</a>
        <a href="<?php echo home_url();?>/contact" class="view_more contact_us" title="Contact Us">Contact Us</a>
      </div>

    </div>
    <?php
  }
  ?>

  </div>
</div>
<!-- ====== Slider End ====== --> 


<!-- ====== Qualities Start ====== -->
<section id="qualities" class="index-3">
  <div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="content">
        <?php
        for($i=1;$i<=4;$i++){
          $iconId = 'company_description_icon'.$i;
          $icon = cs_get_option($iconId);

          $headingId = 'company_description_title'.$i;
          $heading = cs_get_option($headingId);

          $descriptionId = 'company_description_content'.$i;
          $description = cs_get_option($descriptionId);
          ?>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 column">
            <div class="icon"> <i class="<?php echo $icon; ?>"></i> </div>
            <div class="heading">
              <h5><?php echo $heading;?></h5>
            </div>
            <div class="description">
              <p><?php echo $description; ?> </p>
            </div>
          </div>
          <?php
        }
        ?>

      </div>
    </div>
  </div>
</section>
<!-- ====== Qualities End ====== --> 

<!-- ====== About Us Start ====== -->
<section id="about-us" class="index-3">
  <div class="container">
    <div class="section_heading">
      <h1>About <span>Us</span></h1>
      <div class="separator">
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <!-- <div class="heading_content"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div> -->
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12 content_sec">
      <div class="row row-safari">
        <?php 
        $pageId = 259; 
        $imageId = get_post_thumbnail_id( $pageId );
        $imageSrc = wp_get_attachment_image_src($imageId,'full');

        $excerpt = apply_filters('the_excerpt', get_post_field('post_excerpt', $pageId));

        ?>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-area"> <img class="img_sec" src="<?php echo $imageSrc[0]; ?>" alt="About" /> </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content-area">
          <h5> Our Story </h5>
          <?php echo $excerpt; ?>
          <a class="defualt-button view_more" href="<?php echo home_url()?>/about">View More</a> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Us End ====== --> 

  <!-- ====== Services Start ====== -->
  <section id="services" class="gray-bg index-3">
    <div class="container">
      <div class="section_heading">
        <h2>Services</h2>
        <div class="separator">
          <ul>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class="heading_content"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
      </div>
      <div class="col-lg-12 col-md-12 col-xs-12 content_sec">
       <div class="service-slider owl-one owl-carousel owl-theme">
        <?php
        $args = array(
          'post_type'=>'service',
          'order'=>'ASC',
        );
        $query = new WP_Query($args);
        if($query->have_posts()):
          while($query->have_posts()):
            $query->the_post();

            ?>
            <div class="item"> 
              <div class="service_icon"><i class="flat flaticon-computer-graphic"></i></div>
              <div class="connector"> <span></span> </div>
              <div class="service-card">
                <div class="service_detail">
                  <h5><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
                  <p><?php the_excerpt(); ?></p>
                </div>
              </div>
            </div>
            <?php
          endwhile;
        endif;
        ?>

      </div>
      <div class="h-border"><span></span></div>
    </div>
  </div>
  <div class="overlay"></div>
</section>
<!-- ====== Services End ====== --> 

<!-- ====== Team Start ====== -->
<section id="our_team" class="index-3">
  <div class="container">
    <div class="section_heading">
      <h2>Our <span>Team</span></h2>
      <div class="separator">
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="heading_content"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12 content_sec">
      <div class="row">
        <?php 
        $args = array(
          'post_type'=>'our_team',
          'order' => 'ASC',
          'posts_per_page' => 4
        );
        $query = new WP_Query($args);
        if($query->have_posts()):
          while($query->have_posts()):
            $query->the_post();
            ?>
            <div class="item col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="client_dp"> <img src="<?php the_post_thumbnail_url(); ?>" alt="Team" /> </div>
              <div class="team-card">
                <div class="name_designation">
                  <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                  <span><?php echo get_field('working_position');?></span> </div>
                  <div class="description">
                    <?php the_content();?>
                  </div>
                  <div class="social_links">
                    <ul>
                      <?php 
                      if(get_field('facebook')){
                        ?>
                        <li><a href="<?php echo get_field('facebook');?>" title="Facebook" ><i class="flat flaticon-facebook-logo"></i></a></li>
                        <?php
                      }
                      ?>
                      <?php
                      if(get_field('twitter')){
                        ?>
                        <li><a href="<?php echo get_field('twitter');?>" title="Twitter" ><i class="flat flaticon-twitter"></i></a></li>
                        <?php
                      }
                      ?>
                      <?php
                      if(get_field('google-plus')){
                        ?>
                        <li><a href="<?php echo get_field('google-plus');?>" title="Google" ><i class="flat flaticon-google-plus-logo"></i></a></li>
                        <?php
                      }
                      ?>
                      <?php
                      if(get_field('linkedin')){
                        ?>
                        <li><a href="<?php echo get_field('linkedin');?>" title="Linkedin" ><i class="flat flaticon-linkedin-logo"></i></a></li>
                        <?php
                      }
                      ?>
                      <?php
                      if(get_field('instagram')){
                        ?>
                        <li><a href="<?php echo get_field('instagram');?>" title="Instagram" ><i class="flat flaticon-instagram"></i></a></li>
                        <?php
                      }
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
              <?php
            endwhile;
          endif;
          ?>
          <div class="col-lg-12 col-md-12 col-xs-12  text-center"><a class="view_more" href="<?php echo home_url();?>/team">View More</a></div>

        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>
  <!-- ====== Team End ====== --> 

  <!-- ====== Portfolio Start ====== -->
  <section id="portfolio" class="index-3">
    <div class="container">
      <div class="section_heading">
        <h2>Our Works</h2>
        <div class="separator">
          <ul>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class="heading_content"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
      </div>
      <div class="col-lg-12 col-md-12 col-xs-12 content_sec ">
        <div class="portfolio-sort">
          <ul class="sorting clearfix center-grid">
            <li class="sort-btn active" data-filter="*">All</li>
            <li class="sort-btn" data-filter=".design">Web Design</li>
            <li class="sort-btn" data-filter=".development">Web Development</li>
            <li class="sort-btn" data-filter=".logo">Logo Design</li>
            <li class="sort-btn" data-filter=".app">App Design</li>
          </ul>
        </div>
        <div class="row portfolio-gallary">
          <?php
          $args = array(
            'post_type'=>'our_work',
            'order'=>'ASC'
          );
          $query = new WP_Query($args);
          if($query->have_posts()):
            while($query->have_posts()):
              $query->the_post();
              ?>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item design development">
                <div class="project portfolio-inner">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="project">
                  <div class="label">
                    <div class="label-text"> <a href="<?php the_permalink();?>" class="text-title"><?php the_title();?></a> </div>
                    <div class="label-bg"></div>
                  </div>
                  <div class="zoom"> <a href="<?php the_post_thumbnail_url();?>" class="popup-box"  data-lightbox="image" data-title="Project"> <i class="flat flaticon-magnifying-glass"></i> </a> </div>
                </div>
              </div>
              <?php
            endwhile;
          endif;
          ?>
        </div>

      </div>
    </div>
    <div class="overlay"></div>
  </section>
  <!-- ====== Portfolio End ====== --> 

  <!-- ====== Blog Start ======  -->
  <section id="blog_post" class="index-3">
    <div class="container">
      <div class="section_heading">
        <h2>Blog <span>Posts</span></h2>
        <div class="separator">
          <ul>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class="heading_content"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
      </div>
      <div class="col-lg-12 col-md-12 col-xs-12 content_sec">
        <div class="blog-slider owl-five owl-carousel owl-theme">
          <?php
          $args = array(
            'post_type' => 'post',
            'order' => 'ASC',
            'cat'=>3
          );
          $query = new WP_Query($args);
          if($query->have_posts()):
            while($query->have_posts()):
              $query->the_post();
              ?>
              <div class="item blog_card">
                <div class="post-img"> <img src="<?php the_post_thumbnail_url();?>" alt="Post" />
                  <div class="posted_on"> <span class="date"><?php the_time('j') ?></span> <span class="month"><?php the_time('F');?></span> </div>
                </div>
                <div class="post-detail">
                  <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                  <div class="post-status">
                    <ul>
                      <li><i class="flat flaticon-folder"></i> <span><a href="javascript:void(0)"><?php the_author?></a></span></li>
                      <li><i class="flat flaticon-chat"></i> <span>20</span></li>
                    </ul>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <?php
            endwhile;
          endif;
          ?>

        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>
  <!-- ====== Blog End ====== --> 

  <!-- ====== Clients Start ====== -->
  <section id="client" class="index-2">
    <div class="container">
      <div class="section_heading">
        <h2>Our Clients</h2>
        <div class="separator">
          <ul>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="team-slider owl-six owl-carousel owl-theme">
          <?php
          for($i=1;$i<=13;$i++){
            $imageId = 'logo_client'.$i;
            $image = cs_get_option( $imageId );
            $imageSrcArr = wp_get_attachment_image_src( $image, 'full' );
            $imageSrc = $imageSrcArr[0];

            ?>
            <div class="item"> <img src="<?php echo $imageSrc; ?>" alt="Client" /> </div>
            <?php
          }
          ?>
        </div>
        <div class="left-tri"></div>
        <div class="right-tri"></div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="overlay"></div>
  </section>
  <!-- ====== Clients End ====== --> 

  <!-- ====== Testimonials Start ====== -->
  <section id="testimonials" class="gray-bg index-3">
    <div class="container">
      <div class="row row-reverse">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section_heading">
            <h2>What <span>People Say</span></h2>
            <div class="separator">
              <ul>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="content_sec">
            <div class="col-lg-12 col-md-12">
              <div class="testimonials-slider owl-four owl-carousel owl-theme">
                <?php
                $args = array(
                  'post_type'=>'testimonials',
                  'order'    =>'ASC'
                );

                $query = new WP_Query($args);
                if($query->have_posts()):
                  while($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="item">
                      <div class="comment-box">
                        <div class="comment">
                          <?php the_content();?> 
                        </div>
                      </div>
                      <div class="client_detail">
                        <div class="client_dp"> <img src="<?php the_post_thumbnail_url();?>" alt="Client DP"/> </div>
                        <div class="name_designation">
                          <h5><?php the_title();?></h5>
                          <span><?php echo get_field('working_position');?></span> 
                        </div>
                      </div>
                    </div>
                    <?php
                  endwhile;
                endif;
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="overlay"></div>
  </section>
  <!-- ====== Testimonials End ====== --> 

  <!-- ====== Quick Connect Start ====== --> 
  <section id="quick-connect" class="index-3">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="newsletter">
              <div class="section_heading">
                <h4>Subscribe Our Newsletter</h4>
                <div class="separator">
                  <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
                <div class="heading_content"> Provide your email address and stay informed with our latest resources </div>
              </div>
              <form>
                <input type="text" placeholder="Enter your Email Id">
                <button type="submit">Subscribe</button>
              </form>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="quick-info">
              <div class="section_heading">
                <h4>For Quick Info</h4>
                <div class="separator">
                  <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
              </div>
              <div class="content">
                <div class="sub-heading">Call Us On</div>
                <div class="contact-no"><?php echo cs_get_option('header_phone');?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Quick Connect End ====== --> 


      <?php get_footer(); ?>