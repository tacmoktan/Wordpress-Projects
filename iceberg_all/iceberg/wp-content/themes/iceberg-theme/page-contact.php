<?php get_header();?>

<!-- ====== Banner Start ====== -->
<section id="inner-banner">
  <div class="container">
    <div class="row">
      <div class="inner-heading">
        <h2><?php the_title();?></h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- ====== Banner End ====== --> 


<!-- ====== Contact Detail Start ====== -->
<section id="contact-us">
  <div class="container">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-detail">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="contact-card">
            <div class="icon"><i class="flat flaticon-phone-receiver"></i></div>
            <div class="heading">
              <h5>Phone No.</h5>
            </div>
            <div class="description">
              <p><?php echo cs_get_option('header_phone');?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="contact-card">
            <div class="icon"><i class="flat flaticon-facebook-placeholder-for-locate-places-on-maps"></i></div>
            <div class="heading">
              <h5>Address</h5>
            </div>
            <div class="description">
              <p><?php echo cs_get_option('header_address');?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="contact-card">
            <div class="icon"><i class="flat flaticon-mail-black-envelope-symbol"></i></div>
            <div class="heading">
              <h5>Email Id</h5>
            </div>
            <div class="description">
              <p><?php echo cs_get_option('header_email');?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="mid-content">
        <div class="row">    
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
           <h3>Let’s Get In Touch!</h3>
           <div class="separator left-align ">
            <ul>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="description">
            It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you ! <span> We reply within 24 hours!</span>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
          <!-- <form action="https://wpshopmart.com/index.html"> -->
            <?php echo do_shortcode( '[contact-form-7 id="322" title="Contact Form 1"]' ); ?>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
<!-- ====== Contact Detail End ====== --> 

<!-- ====== Location Map Start ====== --> 
  <div id="map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.707130255525!2d85.34366231453875!3d27.726327431265574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb196636148319%3A0x18818dadf379a809!2sIceberg+Technology!5e0!3m2!1sen!2snp!4v1552474596047" frameborder="0" style="border:0" allowfullscreen></iframe>
 
  </div>
<!-- ====== Location Map End ====== --> 

<?php get_footer();?>