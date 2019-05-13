<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package iceberg-theme
 */

get_header();
?>
	<!-- ====== Banner Start ====== -->
<section id="inner-banner" class="index-3">
  <div class="container">
    <div class="col-lg-12 col-md-12 col-xs-12">
      <div class="inner-heading">
        <h2><?php the_title();?></h2>
        <div class="separator left-align">
          <ul>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="<?php echo home_url();?>" title="Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- ====== Banner End ====== --> 

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<!-- ====== Page Not Found Start ====== -->
<section id="page-not-found" class="gray-bg">
  <div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12 text-center img_sec">
            <img src="<?php echo home_url();?>/wp-content/uploads/2019/03/error_404.png" alt="Errow 404" />
        </div>
        <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 text-center content_sec">
            <div class="errow-heading">
                <img src="<?php echo home_url();?>/wp-content/uploads/2019/03/oops.png" alt="oops" />
            </div>
            <div class="error-content">
              <h4>Page Not Found!</h4>
              <div class="separator">
                <ul>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
              <p>This is not the page your are looking for. Reach out with your feelings and try refining your search or return to base.</p>
              <a href="<?php echo home_url();?>" title="Homepage">Back to Home</a>
            </div>
        </div>
    </div>
  </div>
</section>
<!-- ====== Page Not Found Start ====== -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
