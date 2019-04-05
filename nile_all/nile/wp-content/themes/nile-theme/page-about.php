<?php get_header();?>

    <div class="page-title">
        <div class="container">
            <div class="padding-tb-120px">
                <h1><?php the_title();?>  </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo home_url();?>">Home</a></li>
                    <li class="active"><?php the_title();?> </li>
                </ol>
            </div>
        </div>
    </div>
    <!--============= About Us =============-->
    <div class="nile-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-mb-45px">
                    <?php $postId=432; ?>
                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"><img src="assets/icons/title-icon-1.png" alt=""></div>
                        <h2 class="title-text">Who We Are ?</h2>
                    </div>
                    <div class="about-text margin-tb-25px">
                        <?php echo get_post_field('post_content',$postId);?>
                    </div>
                    <a href="#" class="nile-bottom sm">Read More</a>

                </div>
                <div class="col-lg-6">
                    <img src="<?php $imageId = get_post_thumbnail_id($postId); 
                    $imageSrc = wp_get_attachment_image_src( $imageId,'full' );
                    echo $imageSrc[0];?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--============= //About Us =============-->

<?php get_footer();?>
