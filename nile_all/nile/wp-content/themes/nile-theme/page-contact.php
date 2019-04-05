<?php get_header();?>

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


<div class="padding-tb-100px">

	<div class="container">
		<div class="row">

			<div class="col-lg-6 sm-mb-45px">
				<p> <?php $postId =386; echo get_post_field('post_content',$postId); ?></p>
				<h5>Phone :</h5>
				<span class="d-block"><i class="fa fa-phone text-main-color margin-right-10px" aria-hidden="true"></i> <?php echo cs_get_option('header_phone');?></span>
				<span class="d-block sm-mb-30px"><i class="fa fa-mobile text-main-color margin-right-10px" aria-hidden="true"></i> <?php echo cs_get_option('header_phone');?></span>
				<h5 class="margin-top-20px">Address :</h5>
				<span class="d-block sm-mb-30px"><i class="fa fa-map text-main-color margin-right-10px" aria-hidden="true"></i> <?php echo cs_get_option('header_address');?> </span>
				<h5 class="margin-top-20px">Email :</h5>
				<span class="d-block sm-mb-30px"><i class="fa fa-envelope-open text-main-color margin-right-10px" aria-hidden="true"></i> <?php echo cs_get_option('header_email');?> </span>
			</div>

			<div class="col-lg-6">
				<div class="contact-modal">
					<div class="background-main-color">
						<div class="padding-30px">
							<h3 class="padding-bottom-15px">Get A Free Quote</h3>
							 <?php echo do_shortcode(' [contact-form-7 id="385" title="My Contact Form"] '); ?> 
						</div>

					</div>
				</div>
			</div>


		</div>
	</div>

</div>


<div class="map-layout">
	<div class="map-embed">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20980.754338669292!2d-118.30289592578626!3d34.08843374094495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z2YTZiNizINij2YbYrNmE2YjYs9iMINmD2KfZhNmK2YHZiNix2YbZitin2Iwg2KfZhNmI2YTYp9mK2KfYqiDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2ssa!4v1534382441818" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8"></div>
			<div class="col-lg-4">
				<div class="padding-tb-50px padding-lr-30px background-main-color pull-top-309px">
					<div class="contact-info-map">
						<div class="margin-bottom-30px">
							<h2 class="title">Location</h2>
							<div class="contact-info opacity-9">
								<div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
								<div class="text">
									<span class="title-in">Location :</span> <br>
									<span class="font-weight-500 text-uppercase"><?php echo cs_get_option('header_subaddress');?></span>
								</div>
							</div>
						</div>
						<hr>
						<div class="call_center margin-top-30px">
							<h2 class="title">Call Center</h2>
							<div class="contact-info opacity-9">
								<div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
								<div class="text">
									<span class="title-in">Call Us :</span><br>
									<span class="font-weight-500 text-uppercase"><?php echo cs_get_option('header_phone');?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer();?>