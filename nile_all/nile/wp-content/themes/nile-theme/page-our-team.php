
<?php get_header();?>

	<div class="page-title">
		<div class="container">
			<div class="padding-tb-120px">
				<h1><?php the_title();?> </h1>
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url();?>">Home</a></li>
					<li class="active"><?php the_title();?></li>
				</ol>
			</div>
		</div>
	</div>



	<!--  page output -->

	<div class="nile-about-section">
		<div class="container">
			<!-- Title -->
<!-- 			<div class="section-title margin-bottom-40px">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="icon text-main-color"> 03</div>
						<div class="h2">Team</div>
					</div>
				</div>
			</div> -->
			<!-- // End Title -->



			<div class="row">
				<?php 
					$args = array('post_type'=>'our_team');
					$query = new WP_Query($args);
					if($query->have_posts()):
						while($query->have_posts()):
							$query->the_post();
				?>
				<div class="col-lg-3 col-md-6">
					<div class="team layout-2">
						<div class="img-team">
							<img src="<?php the_post_thumbnail_url();?>" alt="">
						</div>
						<div class="padding-20px">
							<h3><?php the_title();?></h3>
							<div class="jop"><?php the_content();?></div>
							<ul class="social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<?php
						endwhile;
					endif;
				?>
				<!-- <div class="col-lg-3 col-md-6">
					<div class="team layout-2">
						<div class="img-team">
							<img src="assets/img/team-2.jpg" alt="">
						</div>
						<div class="padding-20px">
							<h3>Rabie Elkheir</h3>
							<div class="jop">Ceo</div>
							<ul class="social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-md-6">
					<div class="team layout-2">
						<div class="img-team">
							<img src="assets/img/team-3.jpg" alt="">
						</div>
						<div class="padding-20px">
							<h3>Salim Ahmed</h3>
							<div class="jop">Engineer</div>
							<ul class="social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-md-6">
					<div class="team layout-2">
						<div class="img-team">
							<img src="assets/img/team-4.jpg" alt="">
						</div>
						<div class="padding-20px">
							<h3>Ali Abakker</h3>
							<div class="jop">Engineer</div>
							<ul class="social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div> -->

			</div>

		</div>
	</div>
<?php get_footer();?>


	