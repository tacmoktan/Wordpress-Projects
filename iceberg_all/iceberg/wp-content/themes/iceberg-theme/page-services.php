<?php get_header();?>
  
  <!-- ====== Banner Start ====== -->
  <section id="inner-banner" class="index-3">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="inner-heading">
          <h2>Services</h2>
          <div class="separator left-align">
            <ul>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#" title="Home">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Banner End ====== --> 
  
  <!-- ====== Services Start ====== -->
  <section id="services" class="index-3 inner pdb-70">
    <div class="container">
      
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="row blog-isotope">
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

          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 blog-iso-item">
            <div class="item card_mr_top">
              <div class="service-card">
                <div class="service_icon"><i class="flat flaticon-computer-graphic"></i></div>
                <div class="service_detail">
                  <h5> <a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?> </a></h5>
                  <p><?php the_excerpt();?> </p>
                </div>
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
  </section>
  <!-- ====== Services End ====== --> 
  
  <!-- ====== Work Status Start ====== -->
  <section id="work-status" class="index-3">
    <h3 class="d-none">heading</h3>
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="counter-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="counter_content">
              <div class="display"><span class="counter">95</span>%</div>
              <div class="title">Web Design</div>
            </div>
          </div>
          <div class="counter-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="counter_content">
              <div class="display"><span class="counter">80</span>%</div>
              <div class="title">Web Development</div>
            </div>
          </div>
          <div class="counter-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="counter_content">
              <div class="display"><span class="counter">70</span>%</div>
              <div class="title">Web Hosting</div>
            </div>
          </div>
          <div class="counter-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="counter_content">
              <div class="display"><span class="counter">75</span>%</div>
              <div class="title">Digital Marketing</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>
  <!-- ====== Work Status End ====== --> 
  
  
  
  
</div>

<?php get_footer();?>