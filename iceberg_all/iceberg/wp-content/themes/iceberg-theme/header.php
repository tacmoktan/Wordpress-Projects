<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iceberg-theme
 */

?>
<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Iceberg Technology - A Complete Web Solutions</title>
<meta name="Bizler" content="Bizler">
<!-- description -->
<meta name="description" content="Bizler-Multipurpose Business Template">
<!-- keywords -->
<meta name="keywords" content="Business , Bootstrap4, Responsive, HTML5, CSS3, Carousel, Website Template, Revolution, UI Development, Bizler" >

<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- jquery js-->
<!-- <script src="js/jquery.min.js"></script> -->
<?php wp_head(); ?>
</head>
<body>
    <!-- ====== Preloader ====== -->
      <div class="preloader js-preloader flex-center">
			<div class="dots">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>

<div class="wraper"> 
  <!-- ====== Header Starts ====== -->
 <div class="header-top contact_info">
            <div class="container">
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="follow_us_on">
                 <ul>
                 <?php
                 	if(cs_get_option('facebook')){

                 	
                 ?>
                  <li><a target="_blank" href="<?php echo cs_get_option('facebook');?>" title="Facebook" ><i class="flat flaticon-facebook-logo"></i></a></li>
                  
                    <li class="separator-pipesign white"></li>
                  <?php
                  	}
                  ?>

                  <?php
                 	if(cs_get_option('twitter')){

                 	
                 ?>
                  <li><a target="_blank" href="<?php echo cs_get_option('twitter');?>" title="Twitter" ><i class="flat flaticon-twitter"></i></a></li>
                  
                    <li class="separator-pipesign white"></li>
                  <?php
                  	}
                  ?>

                  <?php
                 	if(cs_get_option('plus-google')){

                 	
                 ?>
                  <li><a target="_blank" href="<?php echo cs_get_option('plus-google');?>" title="Google" ><i class="flat flaticon-google-plus-logo"></i></a></li>
                  
                    <li class="separator-pipesign white"></li>
                  <?php
                  	}
                  ?>

                  <?php
                  	if(cs_get_option('linkedin')){


                  ?>
                  <li><a target="_blank" href="<?php echo cs_get_option('linkedin');?>" title="Linkedin" ><i class="flat flaticon-linkedin-logo"></i></a></li>
                  
                    <li class="separator-pipesign white"></li>
                  <?php
                  	}
                  ?>

                  <?php
                 	if(cs_get_option('instagram')){

                 	
                 ?>
                  <li><a target="_blank" href="<?php echo cs_get_option('instagram');?>" title="Instagram" ><i class="flat flaticon-instagram"></i></a></li>
                 <?php
                 	}
                 ?>

                 <?php
                  if(cs_get_option('pinterest')){

                  
                 ?>
                    <li><a target="_blank" href="<?php echo cs_get_option('pinterest');?>" title="Pinterest" ><i class="fa fa-pinterest"></i></a></li>
                  <?php
                    }
                  ?>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mail-call">
              <div class="mail-to"><i class="flat flaticon-mail-black-envelope-symbol"></i><?php echo cs_get_option('header_email');?></div>
              <span class="separator-pipesign white"></span>
              <div class="call-on"><i class="flat flaticon-phone-receiver"> </i><?php echo cs_get_option('header_phone');?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <header class="header index-2">
    <div class="container">
         <nav class="navbar navbar-expand-lg">

            <!-- Brand -->
            <h2 class="nav-brand">
            	<?php
            		$image = cs_get_option('header_logo2');
            		$imageSrc = wp_get_attachment_image_src( $image, 'full' );
            		$imageSrc = $imageSrc[0];
            	?>
              
              <a class="navbar-brand" href="<?php echo home_url();?>" title="Iceberg"><img src="<?php echo $imageSrc ?>" alt="Iceberg" style="width:145px;height:45px;"/></a>
            </h2>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content"
            aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->

             <div class="main-menu collapse navbar-collapse" id="nav-content">
              
              <ul class="navbar-nav">
              	<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
              </ul>
              
            </div>
          </nav>
    </div>
  </header>
  <!-- ====== Header End ====== --> 
