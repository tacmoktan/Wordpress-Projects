<?php get_header();?>
  
  <!-- ====== Banner Start ====== -->
  <section id="inner-banner">
    <div class="container">
      <div class="row">
        <div class="inner-heading">
          <h2>FAQ's</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">FAQ's</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Banner End ====== --> 
  
  <!-- ====== Faq's Start ====== -->
  <section id="faq">
  <div class="container">
    
      <div class="col-md-12">
      <div id="accordion">
        <?php
            $args = array(
              'post_type'=>'post',
              'order'=>'ASC',
              'category__in'=>13
            );
            $query =  new WP_Query($args);
            $i = 0;
            if($query->have_posts()):
              while($query->have_posts()):
                $query->the_post();
                $i++;

        ?>
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <span class="s_no">0<?php echo $i;?>.</span><?php the_title();?></button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <?php the_content(); ?>
            </div>
          </div>
        </div>
        <?php
              endwhile;
            endif;
        ?>
<!--         <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <span class="s_no">02.</span>When an unknown printer took a galley of type and scrambled it to make a type specimen book. </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <ul>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
               <span class="s_no">03.</span>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <ul>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
               <span class="s_no">04.</span>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. </button>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <ul>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFive">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> 
                <span class="s_no">05.</span>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages </button>
            </h5>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <ul>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingSix">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
               <span class="s_no">06.</span>Contrary to popular belief, Lorem Ipsum is not simply random text. </button>
            </h5>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <ul>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
                <li><i class=""></i>Lorem Ipsum has been the industry's standard</li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
</div>

<div class="col-md-12">
<div class="chat-id text-center"><p>If you do not find the answer to your question listed within our FAQ's, you can always contact us directly at <span>letstalk@bizler.com</span></p></div>
</div>
    </div>
  

</section>
<!-- ====== Faq's End ====== -->
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