<?php get_header();

    $project_type_slug = get_queried_object()->slug; //retrieves slug of specific project in Project Type taxonomy
    $project_type_name = get_queried_object()->name; //retrieves name of specific project in Project Type taxonomy
?>

<!-- ====== Banner Start ====== -->
<section id="inner-banner">
  <div class="container">
    <div class="row">
      <div class="inner-heading">
        <h2><?php echo $project_type_name;?></h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo home_url();?>/portfolio">Portfolio</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $project_type_name;?></li>
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

      <div class="row portfolio-gallary">
<?php
    $tax_post_args = array(
        'post_type' => 'our_work', // Your Post type Name that You Registered
        'order' => 'ASC',

        // data below filters project types (taxonomy)
        'tax_query' => array(
            array(
                'taxonomy' => 'project-type',
                'field' => 'slug',
                'terms' => $project_type_slug
            )
        )
    );
    $tax_post_qry = new WP_Query($tax_post_args);

    if($tax_post_qry->have_posts()) :
       while($tax_post_qry->have_posts()) :
            $tax_post_qry->the_post();
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


</div>
<!-- my design -->

<?php get_footer();?>