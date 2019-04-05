<?php get_header(); ?>
<div class="page-title">
	<div class="container">
		<div class="padding-tb-120px">
			<h1><?php the_title();?></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo home_url();?>">Home</a></li>
				<li class="active"><?php the_title();?></li>
			</ol>
		</div>
	</div>
</div>
<!--============= About Us =============-->
    <div class="nile-about-section">
        <div class="container">

            <div class="row">
                <?php 
                    $args = array(
                        'post_type'=> 'our_service',
                        'order' => 'ASC'
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="service-icon-box">
                        <div class="icon"><img src="<?php the_post_thumbnail_url()?>" alt=""></div>
                        <a href="#" class="title h2"><?php the_title();?></a>
                        <div class="des"><?php the_content();?></div>
                    </div>
                </div>
                <?php
                        endwhile;
                    endif;
                ?>        
            </div>


            

        </div>

    </div>
<!--============= //About Us =============-->

<?php get_footer(); ?>