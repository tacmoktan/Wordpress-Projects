<?php get_header();?>


<!-- ====== Banner Start ====== -->
<section id="inner-banner" class="index-3">
  <div class="container">
    <div class="col-lg-12 col-md-12 col-xs-12">
      <div class="inner-heading">
        <h2><?php the_title();?></h2>
        <div class="separator left-align">
          <ul>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="<?php echo home_url();?>" title="Home">Home</a></li>
           <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
         </ol>
       </nav>
     </div>
   </div>
 </div>
</section>
<!-- ====== Banner End ====== --> 

<!-- ====== About Us Start ====== -->
<section id="about-us" class="index-3">
  <div class="container">
    <h2 class="d-none">Heading</h2>
    <div class="col-lg-12 col-md-12 col-xs-12" style="padding:100px 0;">
    <div class="row row-safari">
     <?php
     $pageId = 259;
     $imageId = get_post_thumbnail_id($pageId);
     $imageSrc = wp_get_attachment_image_src($imageId,'full');
     $imageSrc = $imageSrc[0];

     $excerpt = apply_filters('the_excerpt', get_post_field('post_excerpt', $pageId));

     ?>
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-area"> <img class="img_sec" src="<?php echo $imageSrc;?>" alt="About" /> </div>
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content-area">
      <div class="about-heading">Our Story</div>
      <?php
      echo $excerpt;
      ?>
      <a class="defualt-button view_more" href="<?php echo home_url()?>/about-detail">View More</a> 
    </div>
  </div>
</div>
</div>
</section>

<!-- ====== About Us End ====== --> 

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
<!-- ====== About Details Start ====== -->
<section id="about-detail" class="index-3">
  <div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mid-content">
      <div class="row">
        <?php
        for($i=1;$i<=3;$i++){
          $imageId = 'objective_image'.$i;
          $image =  cs_get_option($imageId);
          $imageSrc = wp_get_attachment_image_src($image,'full');
          $imageSrc = $imageSrc[0];

          $objectiveTitleId = 'objective_title'.$i;
          $objectiveTitle = cs_get_option($objectiveTitleId);

          $objectiveDescriptionId = 'objective_description'.$i;
          $objectiveDescription = cs_get_option($objectiveDescriptionId);              

          ?>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="img-area">
              <img src="<?php echo $imageSrc;?>" alt="<?php $objectiveTitle;?>" /> 
            </div>
            <div class="section_heading">
              <h4><?php echo $objectiveTitle;?></h4>

              <div class="separator left-align ">
                <ul>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
            <div class="description">
              <p><?php echo $objectiveDescription;?></p>
            </div>
          </div>
          <?php
        }
        ?>


      </div>
    </div>
  </div>
</section>
<!-- ====== About Details End ====== --> 

<!-- ====== Counter Start ====== -->
<!-- <section id="counter" class="counter-inner">
  <div class="container">
    <div class="col-lg-12">
      <div class="row">
        <div class="counter-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="count_icon"> <i class="flat flaticon-happiness"></i> </div>
          <div class="counter_content">
            <h2><span class="counter">200</span>+</h2>
            <div class="title">Happy Client</div>
          </div>
        </div>
        <div class="counter-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="count_icon"> <i class="flat flaticon-coffee-cup"></i> </div>
          <div class="counter_content">
            <h2><span class="counter">750</span>+</h2>
            <div class="title">Cups of Coffee</div>
          </div>
        </div>
        <div class="counter-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="count_icon"> <i class="flat flaticon-like"></i> </div>
          <div class="counter_content">
            <h2><span class="counter">1800</span>+</h2>
            <div class="title">Projects Done</div>
          </div>
        </div>
        <div class="counter-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="count_icon"> <i class="flat flaticon-building"></i> </div>
          <div class="counter_content">
            <h2><span class="counter">15</span></h2>
            <div class="title">Office Locations</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</section> -->
<!-- ====== Counter End ====== --> 
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
                  <h5><a href="team-member-detail-2.html"><?php the_title();?></a></h5>
                  <span><?php echo get_field('working_position');?></span> </div>
                  <div class="description">
                    <p><?php the_content();?></p>
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
</div>

<?php get_footer();?>