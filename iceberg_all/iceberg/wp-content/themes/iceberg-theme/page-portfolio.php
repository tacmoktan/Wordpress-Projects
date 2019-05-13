<?php get_header();?>
<!-- ====== Banner Start ====== -->
<section id="inner-banner">
  <div class="container">
    <div class="row">
      <div class="inner-heading">
        <h2>Portfolio</h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- ====== Banner End ====== --> 

<!-- ====== Portfolio Start ====== -->
<section id="portfolio">
  <div class="container">
    <h3 class="d-none">heading</h3>
    
      <div class="col-lg-12 col-md-12 col-xs-12">
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
                            <img src="<?php the_post_thumbnail_url();?>" alt="project">
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
<!-- ====== Portfolio End ====== --> 

<!-- ====== Counter Start ====== -->
<section id="counter">
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
</section>
<!-- ====== Counter End ====== --> 
</div>

<?php get_footer();?>