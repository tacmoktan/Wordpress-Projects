<?php get_header();?>
  
  <!-- ====== Banner Start ====== -->
  <section id="inner-banner">
    <div class="container">
      <div class="row">
        <div class="inner-heading">
          <h2>Blog Detail</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo home_url();?>/blog">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Banner End ====== --> 
  
  <!-- ====== Blog Posts Start ====== -->
  <section id="single-post-detail">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="row">
        <?php 
        		if(have_posts()):
        			while(have_posts()):
        				the_post();
        ?>
          <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 blog-detail">
            <div class="post-img"> <img src="<?php the_post_thumbnail_url();?>" alt="Post" /></div>
            <div class="post-detail">
              <div class="about-post">
                <h4><?php echo get_the_title(); ?></h4>
                <div class="post-status">
                  <ul>
                    <li><i class="flat flaticon-folder"></i> <span><a href="javascript:void(0)"><?php echo get_the_author();?></a></span></li>
                    <!-- <li><i class="flat flaticon-chat"></i> <span>20</span></li> -->
                    <li><i class="flat flaticon-calendar"></i> <span><?php the_date();?></span></li>
                  </ul>
                </div>
                <div class="description">
                  <?php the_content();?>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="tags_share">
                <div class="tags">
                  <div class="title">Tags</div>
                  <ul>
                    <?php
                        $tagsArr = get_the_tags();
                        foreach ($tagsArr as $tag) {    
                    ?>
                    <li><a href="javascript:void(0)" title="<?php echo $tag->name;?>"><?php echo $tag->name;?></a></li>
                    <?php
                        }
                    ?>
<!--                     <li><a href="javascript:void(0)" title="HTML">HTML</a></li>
                    <li><a href="javascript:void(0)" title="CSS">CSS</a></li>
                    <li><a href="javascript:void(0)" title="Jquery">Jquery</a></li>
                    <li><a href="javascript:void(0)" title="CSS">CSS</a></li> -->
                  </ul>
                </div>
                <div class="share_on">
                  <div class="title">Share On :</div>
                  <div class="icons"> <a href="javascript:void(0)"><i class="flat flaticon-facebook-logo"></i></a> <a href="javascript:void(0)"><i class="flat flaticon-twitter"></i></a> <a href="javascript:void(0)"><i class="flat flaticon-google-plus-logo"></i></a> <a href="javascript:void(0)"><i class="flat flaticon-linkedin-logo"></i></a> <a href="javascript:void(0)"><i class="flat flaticon-instagram"></i></a> </div>
                </div>
              </div>
            </div>

          </div>
          <?php
          			endwhile;
          		endif;
          ?>
          <aside class="col-lg-3 col-md-12 col-sm-12 col-xs-12 sidebar right">

             <div class="widget">
              <div class="sidebar_heading">
                <h5>Recent Posts</h5>
                <div class="separator left-align ">
                  <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
              </div>
              <div class="widget-content">
              	<?php 
              		$args = array(
              			'post_type'=>'post',
              			'posts_per_page'=>3,
              			'cat'=>3
              		);

              		$query = new WP_Query($args);

              		if($query->have_posts()):
              			while($query->have_posts()):
              				$query->the_post();
              	?>
                <div class="post-item">
                  <div class="post-img"> <img src="<?php the_post_thumbnail_url();?>" alt="post" /> </div>
                  <div class="post-content">
                    <a href="<?php the_permalink();?>"><?php the_title();?> </a>
                    <div class="post-status"> <i class="flat flaticon-calendar"></i> <span><?php echo get_the_date();?></span> </div>
                  </div>
                </div>
                <?php
                		endwhile;
                	endif;
                ?>

              </div>
            </div>
            <!-- QUICK CONNECT form -->
            <div class="widget">
              <div class="sidebar_heading">
                <h5>Quick Connect</h5>
                <div class="separator left-align ">
                  <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
              </div>
              <div class="widget-content">
                <div class="quick-connect-form">
                  <!-- <form action="https://wpshopmart.com/index.html"> -->
                    <?php echo do_shortcode('[contact-form-7 id="342" title="Quick Connect Form"]');?>                    
                  <!-- </form> -->
                </div>
              </div>
            </div>
            <!-- QUICK CONNECT Form end -->
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Blog Posts End ====== --> 

</div>

<?php get_footer();?>