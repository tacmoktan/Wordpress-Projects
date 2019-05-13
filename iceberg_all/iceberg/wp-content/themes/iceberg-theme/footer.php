<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iceberg-theme
 */

?>

</div> <!-- // wraper  -->
<!-- ====== Footer Start ====== -->
<footer class="home index-3">
  <div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row row-safari">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 about">
          <div class="logo">
            <?php
                $logo = cs_get_option('header_logo1');
                $logoSrcArr = wp_get_attachment_image_src( $logo, 'full' );
                $logoSrc = $logoSrcArr[0];
            ?>
            <img src="<?php echo $logoSrc;?>" alt="Iceberg" />
          </div>
          <div class="detail">
            <p><?php echo cs_get_option('company_description');?><!-- Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. --></p>
          </div>
          <a href="<?php echo home_url()?>/about" class="view_more" title="View More">View More</a> </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 latest-news">
          <div class="section_heading">Latest <span>News</span></div>
          <?php
              $args = array(
                  'post_type'=>'post',
                  'order'=>'ASC',
                  'cat'=>4
              );

              $query = new WP_Query($args);
              if($query->have_posts()):
                while($query->have_posts()):
                  $query->the_post();
          ?>
          <div class="post-item">
            <div class="post-img"> <img src="<?php the_post_thumbnail_url();?>" alt="post" /> </div>
            <div class="post-content">
              <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
              <div class="post-status"> <?php echo get_the_date();?> </div>
            </div>
          </div>
          <?php
                endwhile;
              endif;
          ?>
          <!-- <div class="post-item">
            <div class="post-img"> <img src="img/recent-post-thumb-1.jpg" alt="post" /> </div>
            <div class="post-content">
              <p><a href="blog-detail.html">when an unknown printer took a galley of type and scrambled it to make a type.</a></p>
              <div class="post-status"> 06/10/2018 </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <div class="contact_info">
          <div class="row row-safari">
		
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">

            <div class="icon"> <i class="flat flaticon-facebook-placeholder-for-locate-places-on-maps"></i> </div>
            <div class="detail">
              <h5>Address</h5>
              <div class="content"> Head Office :<span class="value"> <?php echo cs_get_option('header_address');?></span> </div>
            </div>

          </div>
          
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
            <div class="icon"> <i class="flat flaticon-phone-receiver"></i> </div>
            <div class="detail">
              <h5>Call Us On</h5>
              <div class="content"> Main Office :<span class="value"><a href="javascript:void(0)" title="0123-456-789"> <?php echo cs_get_option('header_phone');?> </a></span> <br />
                Customer Support :<span class="value"> <a href="javascript:void(0)" title="0123-456-789"> <?php echo cs_get_option('header_phone');?> </a> </span> </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column">
            <div class="icon"> <i class="flat flaticon-mail-black-envelope-symbol"></i> </div>
            <div class="detail">
              <h5>Mail Us On</h5>
              <div class="content">Customer Support : <?php echo cs_get_option('header_email')?><br />Technical Support : <?php echo cs_get_option('alternate_header_email');?></div>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 column social">
            <div class="icon"> <i class="flat flaticon-share"></i> </div>
            <div class="detail">
              <h5>Follow Us On</h5>
              <div class="content"> 
                <?php
                  if(cs_get_option('facebook')){
                ?>
                <a target="_blank" href="<?php echo cs_get_option('facebook');?>" title="Facebook" ><i class="flat flaticon-facebook-logo"></i></a> 
                <?php
                  }
                ?>

                <?php
                  if(cs_get_option('twitter')){
                ?>
                <a target="_blank" href="<?php echo cs_get_option('twitter');?>" title="Twitter" ><i class="flat flaticon-twitter"></i></a> 
                <?php
                  }
                ?>
                
                <?php
                  if(cs_get_option('plus-google')){
                ?>
                <a target="_blank" href="<?php echo cs_get_option('plus-google');?>" title="Google" ><i class="flat flaticon-google-plus-logo"></i></a> 
                <?php
                  }
                ?>
                <?php
                  if(cs_get_option('linkedin')){
                ?>
                <a target="_blank" href="<?php echo cs_get_option('linkedin');?>" title="Linkedin" ><i class="flat flaticon-linkedin-logo"></i></a> 
                <?php
                  }
                ?>
                <?php
                  if(cs_get_option('instagram')){
                ?>
                <a target="_blank" href="<?php echo cs_get_option('instagram');?>" title="Instagram" ><i class="flat flaticon-instagram"></i></a> 
                <?php
                  }
                ?>

                <?php
                  if(cs_get_option('pinterest')){
                ?>
                <a target="_blank" href="<?php echo cs_get_option('pinterest');?>" title="Pinterest" ><i class="fa fa-pinterest"></i></a> 
                <?php
                  }
                ?>
              </div>
            </div>
          </div>
        </div>          
          </div>
     </div>
  </div>
  <div class="bottom">
    
    <hr />
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 copyright">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <?php echo cs_get_option('copyright');?>
            <span class="separator-pipesign white"></span>
            All Rights Reserved
            <!-- <span class="separator-pipesign white"></span>
            <a href="www.templatespoint.net">Templates Point</a> --></div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right"> <a href="javascript:void(0)">Privacy Policy</a>
            <span class="separator-pipesign white"></span>
            <a href="javascript:void(0)">Terms &amp; Conditions</a>
            <span class="separator-pipesign white"></span>
            <a href="<?php echo home_url();?>/faqs">FAQ's</a> </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- ====== Footer End ====== --> 



<?php wp_footer(); ?>
<script>
      $('.js-preloader').preloadinator({
        minTime: 2000
      });
</script> 
</body>

</html>