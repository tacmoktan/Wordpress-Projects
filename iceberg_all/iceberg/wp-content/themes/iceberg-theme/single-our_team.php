<?php get_header();?>
<!-- ====== Banner Start ====== -->
<section id="inner-banner">
  <div class="container">
    <div class="row">
      <div class="inner-heading">
        <h2>Our Member Detail</h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo home_url();?>/team">Our Team</a></li>
            <li class="breadcrumb-item active" aria-current="page">Our Member Detail</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- ====== Banner End ====== --> 

<!-- ====== Team Member Detail Start ====== -->
<section id="team_member_detail">
  <div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">
   	<?php
   		if(have_posts()):
   			while(have_posts()):
   				the_post();
   	?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="member-pic"> <img src="<?php the_post_thumbnail_url(  );?>" alt="Member" /> </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
          <div class="about_member">
            <div class="name_designation">
              <h3><?php the_title();?></h3>
              <h6><?php echo get_field('working_position');?></h6>
            </div>
            <div class="social_media">
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
            <div class="clearfix"></div>
            <div class="description">
              <?php the_content();?>
            </div>
          </div>
          <div class="contact-detail">
            <ul>
              <li> <i class="flat flaticon-phone-receiver"></i> 
                <?php 
                  if(get_field('phone')):
                    echo get_field('phone');
                  endif;
                ?> 
              </li>

              <li> <i class="flat flaticon-earth"></i> 
                <?php 
                  if(get_field('site')):
                    echo get_field('site');
                  endif;
                ?> 
              </li>
              
              <li> <i class="flat flaticon-mail-black-envelope-symbol"></i>
                <?php 
                if(get_field('email')):
                  echo get_field('email');
                endif;
                ?> 
              </li>
            </ul>
          </div>
        </div>
      </div>

 <?php
 			endwhile;
 		endif;
 ?>       
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-status">
        <div class="row">
          <div class="counter-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="counter_content">
              <div class="display"><span class="counter">95</span>%</div>
              <div class="title">CSS</div>
            </div>
          </div>
          <div class="counter-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="counter_content">
              <div class="display"><span class="counter">80</span>%</div>
              <div class="title">HTML5</div>
            </div>
          </div>
          <div class="counter-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="counter_content">
              <div class="display"><span class="counter">70</span>%</div>
              <div class="title">Jquery</div>
            </div>
          </div>
          <div class="counter-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="counter_content">
              <div class="display"><span class="counter">75</span>%</div>
              <div class="title">Sass/Less</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Team Member Detail End ====== --> 

<!-- ====== Recent Project Start ====== -->
<section id="portfolio" class="gray-bg">
  <div class="container">
    <div class="section_heading">
      <h2>Recent <span>Work</span></h2>
      <div class="separator">
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 content_sec">
      <div class="row">
              <?php
              $args = array(
                'post_type'=>'our_work',
                'posts_per_page' => 3
              );
              $query = new WP_Query($args);
              if($query->have_posts()):
                while($query->have_posts()):
                  $query->the_post();
                  ?>       
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item design development">
                        <div class="project portfolio-inner">
                            <img src="<?php the_post_thumbnail_url( );?>" alt="project">
                            <div class="label">
                                <div class="label-text"> <a href="<?php the_permalink();?>" class="text-title"><?php the_title();?></a> </div>
                                <div class="label-bg"></div>
                            </div>
                            <div class="zoom"> <a href="<?php the_post_thumbnail_url( );?>" class="popup-box"  data-lightbox="image" data-title="Project"> <i class="flat flaticon-magnifying-glass"></i> </a> </div>
                        </div>
                    </div>
        <?php
        		endwhile;
        	endif;
        ?>

      </div>
    </div>
  </div>
</section>
<!-- ====== Recent Project End ====== --> 

<!-- ====== Candidate Contact Start ====== -->
<section id="member">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 heading">
            <h3>Want To Join <span>Our Team</span></h3>
            <div class="q-mark">?</div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 meeting">
            <div class="meeting_icon"> <i class="flat flaticon-group-meeting"></i> </div>
            <div class="meeting_content">If you're Creative, passionate and enthusiatic about helping customers, <a href="contact-us-1.html">We want to meet you!</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</section>
<!-- ====== Candidate Contact End ====== --> 
</div>

<?php get_footer();?>