<?php get_header();?>

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


<!-- ====== Blog Posts Start ====== -->
<section id="blog_post" class="index-3">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-xs-12">
			<div class="row">
				<?php
					$args = array(
						'post_type'=>'post',
						'posts_per_page'=>6,
						'cat'=>3
					);

					$query = new WP_Query($args);

					if($query->have_posts()):
						while($query->have_posts()):
							$query->the_post();
				?>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="item blog_card">
						<div class="post-img"> <img src="<?php the_post_thumbnail_url();?>" alt="Post" />
							<div class="posted_on"> <span class="date"><?php echo get_the_date('d') ?></span> <span class="month"><?php echo get_the_date('F');?></span> </div>
						</div>
						<div class="post-detail">
							<h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
							<div class="post-status">
								<ul>
									<li><i class="flat flaticon-folder"></i> <span><a href="javascript:void(0)"><?php the_author();?></a></span></li>
									<!-- <li><i class="flat flaticon-chat"></i> <span>20</span></li> -->
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php
						endwhile;
					endif;
				?>



			</div>
		</div>
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="flat flaticon-back"></i></a> </li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"> <a class="page-link" href="#"><i class="flat flaticon-arrow"></i></a> </li>
			</ul>
		</nav>
	</div>
</section>
<!-- ====== Blog Posts End ====== --> 
</div>
</div>
<?php get_footer();?>