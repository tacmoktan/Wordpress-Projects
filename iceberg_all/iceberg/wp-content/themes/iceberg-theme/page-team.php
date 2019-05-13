<?php get_header();?>
  
  <!-- ====== Banner Start ====== -->
  <section id="inner-banner" class="index-3">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="inner-heading">
          <h2>Our Team</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Our Team</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Banner End ====== --> 
  
  <!-- ====== Services Start ====== -->
 <section id="our_team" class="inner index-3">
  <div id="ui-ux">
    <div class="container">
      <div class="section_heading">
        <h2>UI/UX Designers</h2>
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
            		'post_type'=>'our_team',
            		'position'=>'ui-ux-designers',
            		'order'=>'ASC'
            	);
            	$query= new WP_Query($args);
            	if($query->have_posts()):
            		while($query->have_posts()):
            			$query->the_post();
            ?>
            <div class="item col-lg-6 col-md-6 col-md-12 col-xs-12">
            <div class="client_dp"> <img src="<?php the_post_thumbnail_url();?>" alt="Team" /> </div>
            <div class="team-card">
              <div class="name_designation">
                <h5><a href="<?php the_permalink();?>"><?php the_title();	?></a></h5>
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
          </div>
        </div>
    
    </div>
  </div>
  <div id="web-developer" class="gray-bg">
    <div class="container">
      <div class="section_heading">
        <h2>Web Developers</h2>
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
            		'post_type'=>'our_team',
            		'position'=>'web-developers',
            		'order'=>'ASC'
            	);
            	$query= new WP_Query($args);
            	if($query->have_posts()):
            		while($query->have_posts()):
            			$query->the_post();
            ?>
            <div class="item col-lg-6 col-md-6 col-md-12 col-xs-12">
            <div class="client_dp"> <img src="<?php the_post_thumbnail_url();?>" alt="Team" /> </div>
            <div class="team-card">
              <div class="name_designation">
                <h5><a href="<?php the_permalink();?>"><?php the_title();	?></a></h5>
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

          </div>
        </div>
      
    </div>
  </div>
  <div id="seo-smo">
    <div class="container">
      <div class="section_heading">
        <h2>SEO/SMO</h2>
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
            		'post_type'=>'our_team',
            		'position'=>'seo-smo',
            		'order'=>'ASC'
            	);
            	$query= new WP_Query($args);
            	if($query->have_posts()):
            		while($query->have_posts()):
            			$query->the_post();
            ?>
            <div class="item col-lg-6 col-md-6 col-md-12 col-xs-12">
            <div class="client_dp"> <img src="<?php the_post_thumbnail_url();?>" alt="Team" /> </div>
            <div class="team-card">
              <div class="name_designation">
                <h5><a href="<?php the_permalink();?>"><?php the_title();	?></a></h5>
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


          </div>
        </div>
      
    </div>
  </div>
</section>
  <!-- ====== Services End ====== --> 
  
</div>

<?php get_footer();?> 