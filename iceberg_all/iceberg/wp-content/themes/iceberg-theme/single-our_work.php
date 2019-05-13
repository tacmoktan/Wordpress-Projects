<?php get_header();?>

<!-- ====== Banner Start ====== -->
<section id="inner-banner">
  <div class="container">
    <div class="row">
      <div class="inner-heading">
        <h2>Portfolio Detail</h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo home_url();?>/portfolio">Portfolio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Portfolio Detail</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- ====== Banner End ====== --> 

<!-- ====== Portfolio Start ====== -->
<section id="portfolio_detail">
  <div class="container">
    <h3 class="d-none">heading</h3>
   	<?php
   		if(have_posts()):
   			while(have_posts()):
   				the_post();
   	?>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
    <div class="project_screen">
       <img src="<?php the_post_thumbnail_url( );?>" alt="Project" />
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about_project">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="icon">
            <i class="flat flaticon-avatar"></i> 
          </div>
          <div class="content">
            <h6>Client</h6>
            <div class="value"><?php echo get_field('client_name');?></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="icon">
            <i class="flat flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 
          </div>
          <div class="content">
            <h6>Location</h6>
            <div class="value"><?php echo get_field('client_location');?></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="icon">
            <i class="flat flaticon-calendar"></i> 
          </div>
          <div class="content">
            <h6>Date</h6>
            <div class="value"><?php the_date();?></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="icon">
            <i class="flat flaticon-folder"></i> 
          </div>
          <div class="content">
            <h6>Category</h6>
            <?php 
             $term = get_field('category');
             if($term):
            ?>
            <div class="value"> 
              <?php echo $term->name; ?> 
            </div>
            <?php
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 project_description">
        <h4><?php the_title();?></h4>
        <?php the_content();?> 
    </div>
 <?php
 			endwhile;
 		endif;
 ?> 
  </div>
  </div>
</section>
<!-- ====== Portfolio End ====== --> 

<!-- ====== Recent Project Start ====== --> 
<section id="portfolio" class="gray-bg">
    <div class="container">
       <div class="section_heading">
      <h2>Recent <span>Projects</span></h2>
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

<!-- ====== Counter Start ====== -->
<!-- <section id="counter">
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
</div>

<?php get_footer();?>