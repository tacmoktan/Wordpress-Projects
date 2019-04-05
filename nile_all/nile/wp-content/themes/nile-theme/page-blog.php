<?php get_header();?>

<div class="page-title">
	<div class="container">
		<div class="padding-tb-120px">
			<h1><?php the_title();?></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo home_url();?>">Home</a></li>
				<li class="active"><?php the_title(); ?></li>
			</ol>
		</div>
	</div>
</div>


<div class="padding-tb-100px">
	<div class="container">

		<div class="row justify-content-center">


			<div class="col-md-9">
				
				<?php
					$data = array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'order' => 'ASC',
						'cat'=>'3' /*represents 3rd category i.e. blogs */
					);
					$query = new WP_Query($data);
					if($query->have_posts()):
						while($query->have_posts()):
							$query->the_post();
				?>

				<div class="post-standard">
					<div class="thum-img">
						<a href="#"><img src="<?php the_post_thumbnail_url();?>" alt=""></a>
					</div>
					<a href="#" class="title">Everything Is Okay In The End. If it's Not Okay, Then It's Not The End</a>
					<div class="meta-out">
						<ul class="meta">
							<li> <span class="icon icon_clock_alt"></span> <?php the_date();?></li>
							<li> <span class="icon icon_profile"></span><a href="#"> <?php the_author();?></a> </li>
							<!-- <li> <span class="icon icon_comment_alt"></span><a href="#"></a> </li> -->
						</ul>
					</div>
					<div class="excerpt">
						<p><?php the_excerpt();?></p>
					</div>
					<a href="<?php the_permalink();?>" class="nile-bottom md">Read More <i class="fa fa-arrow-right"></i> </a>
				</div>
				
				<?php
						endwhile;
					endif;
				?>

				<!-- pagination -->
				<ul class="pagination pagination-md ">
					<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">Next</a></li>
				</ul>
				<!-- // pagination -->
			</div>

		</div>

	</div>
</div>

<?php get_footer();?>