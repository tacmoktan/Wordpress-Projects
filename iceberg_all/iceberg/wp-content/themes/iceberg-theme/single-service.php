<?php get_header();?>
<!-- ====== Banner Start ====== -->
<section id="inner-banner">
  <div class="container">
    <div class="row">
      <div class="inner-heading">
        <h2>Service Detail</h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="<?php echo home_url();?>" title="Home">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo home_url();?>/services" title="Services">Services</a></li>
            <li class="breadcrumb-item active" aria-current="page">Service Detail</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- ====== Banner End ====== --> 

<!-- ====== Services Start ====== -->
<section id="services-top">
  <div class="container">
    <h3 class="d-none">heading</h3>
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="row">
      <?php
            if(have_posts()):
              while(have_posts()):
                the_post();
       ?>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-area"> <img src="<?php the_post_thumbnail_url();?>" alt="About" /> </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content-area">
        <h5><?php the_title();?></h5>
        <?php the_content();?>
<!--         <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. More recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. More recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p> -->
      </div>
      <?php
                endwhile;
              endif;
       ?>
   </div></div>
  </div>
</section>
<!-- ====== Services End ====== --> 

<!-- ====== Counter Start ====== -->
<!-- <section id="services-counter" class="text-center">
  <div class="container">
    <h3 class="d-none">heading</h3>
    <div class="col-lg-12">
      <div class="row">
        <div class="counter-column col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="counter_content">
            <div class="display"><span class="counter">3</span>K</div>
            <div class="title">Projects Done</div>
          </div>
        </div>
        <div class="counter-column col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="counter_content">
            <div class="display"><span class="counter">8782</span></div>
            <div class="title">Hours Work</div>
          </div>
        </div>
        <div class="counter-column col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="counter_content">
            <div class="display"><span class="counter">682</span></div>
            <div class="title">Clients</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</section> -->
<!-- ====== Counter End ====== --> 

<!-- ====== Other Services Start ====== -->
<section id="services" class="gray-bg">
  <div class="container">
    <div class="section_heading">
      <h2>Other <span>Services</span></h2>
      <div class="separator">
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="heading_content">
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      </div>
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
          <div class="item service-card">
            <div class="service_icon"><i class="flat flaticon-web-design"></i></div>
            <div class="service_detail">
              <h5> <a href="<?php the_permalink();?>" title="<?php the_title();?>" ><?php the_title();?></a></h5>
              <p><?php the_content();?></p>
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
<!-- ====== Other Services End ====== --> 
<!-- </div> -->


<?php get_footer();?>