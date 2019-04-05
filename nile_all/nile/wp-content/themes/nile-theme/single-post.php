<?php get_header(); ?>

	<div class="page-title">
		<div class="container">
			<div class="padding-tb-120px">
				<h1>Blog</h1>
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url();?>">Home</a></li>
					<li class="active">Blog</li>
				</ol>
			</div>
		</div>
	</div>


	<div class="padding-tb-100px">
		<div class="container">

			<div class="row">

				<div class="col-md-9">

					<?php
						if(have_posts()):
							while(have_posts()):
								the_post();
					?>
					<div class="post-standard">
						<div class="thum-img">
							<a href="#"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
						</div>
						<a href="#" class="title"><?php the_title();?></a>
						<div class="meta-out margin-bottom-20px">
							<ul class="meta">
								<li> <span class="icon icon_clock_alt"></span> <?php the_date();?> </li>
								<li> <span class="icon icon_profile"></span><a href="#"><?php the_author(); ?></a> </li>
								<!-- <li> <span class="icon icon_comment_alt"></span><a href="#">2</a> </li> -->
							</ul>
						</div>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
						<!-- Post tags -->
						<hr>
						<div class="post-tags">
							<a href="#" rel="tag">chemicals</a>
							<a href="#" rel="tag">chemicals</a>
							<a href="#" rel="tag">chemicals</a>
							<a href="#" rel="tag">chemicals</a>
							<a href="#" rel="tag">chemicals</a>
							<a href="#" rel="tag">chemicals</a>
							<!-- // Post tags -->
						</div>

					</div>
					<?php
							endwhile;
						endif;
					?>

					<div class="margin-bottom-30px">
						<div class="block-single">
							<h4><i class="fa fa-comment margin-right-10px text-main-color"></i> Comments (3)</h4>
							<hr>

							<ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
								<li class="border-bottom-1 border-grey-1 margin-bottom-20px">
									<img src="assets/img/testimonial-1.png" class="float-left margin-right-20px border-radius-60 margin-bottom-20px" alt="">
									<div class="margin-left-85px">
										<a class="d-inline-block text-dark text-medium margin-right-20px" href="#">Bakhita alrawi </a>
										<span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
										<p class="margin-top-15px text-grey-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
									</div>
								</li>
								<li class="border-bottom-1 border-grey-1 margin-left-55px margin-bottom-20px">
									<img src="assets/img/testimonial-2.png" class="float-left margin-right-20px border-radius-60 margin-bottom-20px" alt="">
									<div class="margin-left-85px">
										<a class="d-inline-block text-dark text-medium margin-right-20px" href="#">Rabie Elkheir </a>
										<span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
										<p class="margin-top-15px text-grey-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
									</div>
								</li>
								<li class="border-bottom-1 border-grey-1 margin-bottom-20px">
									<img src="assets/img/testimonial-3.png" class="float-left margin-right-20px border-radius-60 margin-bottom-20px" alt="">
									<div class="margin-left-85px">
										<a class="d-inline-block text-dark text-medium margin-right-20px" href="#">Adel Alsaeed </a>
										<span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
										<p class="margin-top-15px text-grey-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="margin-bottom-30px">
						<div class="block-single">
							<h4><i class="fa fa-comment margin-right-10px text-main-color"></i> Add Comment</h4>
							<hr>
							<?php echo do_shortcode('[contact-form-7 id="457" title="Comment Form"]');?>
						</div>
					</div>

				</div>
				<div class="col-md-3">

					<div class="widget sidebar-wideget">
						<div class="sidebar-title">
							<h2>Latest Posts</h2>
						</div>
						<div class="last-post">
							<div class="item">
								<div class="img"><a href="#"><img src="assets/img/w-post-1.jpg" alt=""></a></div>
								<a class="title" href="#">Be the last to criticize a colleague who fails.</a>
								<div class="date"><i class="fa fa-clock-o"></i> 4 April, 2017</div>
							</div>
							<div class="item">
								<div class="img"><a href="#"><img src="assets/img/w-post-2.jpg" alt=""></a></div>
								<a class="title" href="#">Be the last to criticize a colleague who fails.</a>
								<div class="date"><i class="fa fa-clock-o"></i> 4 April, 2017</div>
							</div>
							<div class="item">
								<div class="img"><a href="#"><img src="assets/img/w-post-3.jpg" alt=""></a></div>
								<a class="title" href="#">Be the last to criticize a colleague who fails.</a>
								<div class="date"><i class="fa fa-clock-o"></i> 4 April, 2017</div>
							</div>
							<div class="item">
								<div class="img"><a href="#"><img src="assets/img/w-post-4.jpg" alt=""></a></div>
								<a class="title" href="#">Be the last to criticize a colleague who fails.</a>
								<div class="date"><i class="fa fa-clock-o"></i> 4 April, 2017</div>
							</div>
						</div>
					</div>


					<!-- <div class="widget sidebar-wideget widget_categories">
						<div class="sidebar-title">
							<h2>Categories</h2>
						</div>
						<ul>
							<li><a href="service-single.html">Air Freight (20)</a></li>
							<li><a href="service-single.html">Ocean Freight (10)</a></li>
							<li><a href="service-single.html">Packaging and Storage (125)</a></li>
							<li><a href="service-single.html">Cargo Transportation  (47)</a></li>
							<li><a href="service-single.html">Fast Delivery (55)</a></li>
							<li><a href="service-single.html">Railroad Transportation (2)</a></li>
						</ul>
					</div> 


					<div class="widget sidebar-wideget widget_categories">
						<div class="sidebar-title">
							<h2>Instagram Feed</h2>
							<div class="row">
								<div class="col-6 margin-bottom-20px"><a href="#"><img src="assets/img/instagram-4.jpg" alt=""></a></div>
								<div class="col-6 margin-bottom-20px"><a href="#"><img src="assets/img/instagram-3.jpg" alt=""></a></div>
								<div class="col-6 margin-bottom-20px"><a href="#"><img src="assets/img/instagram-1.jpg" alt=""></a></div>
								<div class="col-6 margin-bottom-20px"><a href="#"><img src="assets/img/instagram-2.jpg" alt=""></a></div>
							</div>
						</div>
					</div>
					-->
				</div>

			</div>

		</div>
	</div>
<?php get_footer();?>