<?php get_header();?>

<div class="page-title">
		<div class="container">
			<div class="padding-tb-120px">
				<h1><?php the_title();?></h1>
				<ol class="breadcrumb">
					<li><a href="<?php home_url();?>">Home</a></li>
					<li class="active"><?php the_title();?></li>
				</ol>
			</div>
		</div>
	</div>

	<div class="padding-tb-100px">

		<div class="container">
			<div class="row">
				<div class="col-lg-8">

					<?php
							$args = array('post_type'=>'faqs','order'=>'ASC');
							$query = new WP_Query($args);

							if($query->have_posts()):
								while($query->have_posts()):
									$query->the_post();
						?>
					<div id="accordion" class="nile-accordion sm-mb-45px">
						
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-block btn-link active" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-info-circle"></i> <?php the_title();?></button>
								</h5>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<?php the_content();?> </div>
							</div>
						</div>

						<!-- <div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-truck"></i> Explore our Facilities</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-plane"></i> Warehousing Solution</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="heading4">
								<h5 class="mb-0">
									<button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"><i class="fa fa-bus"></i> Responsive & Retina</button>
								</h5>
							</div>
							<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
								<div class="card-body">
									Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </div>
							</div> 
						</div> -->


					</div>
					<?php
								endwhile;
							endif;
						?>

				</div>

				<!-- <div class="col-lg-4">
					<div class="contact-modal">
						<div class="background-main-color">
							<div class="padding-30px">
								<h3 class="padding-bottom-15px">Get A Free Quote</h3>
								<form>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>Full Name</label>
											<input type="text" class="form-control" id="inputName44" placeholder="Name">
										</div>
										<div class="form-group col-md-6">
											<label>Email</label>
											<input type="email" class="form-control" id="inputEmail44" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label>Message</label>
										<textarea class="form-control" id="exampleFormControlTextarea11" rows="3"></textarea>
									</div>
									<a href="#" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">SEND MESSAGE</a>
								</form>
							</div>
						</div>
					</div>
				</div> -->


			</div>
			<!-- // row -->
		</div>
		<!-- // container -->

	</div>
	
<?php get_footer();?>
