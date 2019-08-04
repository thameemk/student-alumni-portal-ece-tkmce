<!-- start banner Area -->
<section class="banner-area relative about-banner mb-5" id="blog">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Blog
				</h1>
				<p class="text-white link-nav"><a href="<?php echo base_url();?>home">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?php echo base_url();?>blog"> Blog</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->
<!-- Start post-content Area -->
<?php if($this->session->flashdata('msg')): ?>
<div class="alert alert-success" role="alert">
	<center><strong>Well done!</strong> <?php echo $this->session->flashdata('msg'); ?></center>
</div>
<?php endif; ?>
<section class="post-content-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
			<?php foreach($blogs as $row){ ?>
				<div class="single-post row">
					<div class="col-lg-3  col-md-3 meta-details">
						<ul class="tags">
							<li><a ><?=$row['b_cat']?></a></li>
						</ul>
						<div class="user-details row">
							<p class="user-name col-lg-12 col-md-12 col-6"><a><?=$row['b_author']?></a> <span class="lnr lnr-user"></span></p>
							<p class="date col-lg-12 col-md-12 col-6"><a><?=$row['b_date']?></a> <span class="lnr lnr-calendar-full"></span></p>
							<!-- <p class="view col-lg-12 col-md-12 col-6"><a><?=$row['b_views']?></a> <span class="lnr lnr-eye"></span></p> -->
						</div>
					</div>
					<div class="col-lg-9 col-md-9 ">
						<div class="feature-img">
							<img class="img-fluid" src="<?php echo base_url()?>assets/uploads/blog/<?=$row['b_img_1']?>" alt="">
						</div>
						<a class="posts-title" href="<?php echo base_url("blog/".$row['link'])?>">
							<h3><?=$row['b_title']?></h3>
						</a>
						<p class="excert">
							<?=$row['b_s_details']?>
						</p>
						<a href="<?php echo base_url("blog/".$row['link'])?>" class="primary-btn">View More</a>
					</div>
				</div>

			<?php } ?>

			</div>
			<div class="col-lg-4 sidebar-widgets">
				<div class="widget-wrap">
					<div class="single-sidebar-widget search-widget">
						<form class="search-form" action="#">
							<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="single-sidebar-widget popular-post-widget">
						<h4 class="popular-title">Popular Posts</h4>
						<div class="popular-post-list">
							<?php foreach ($blogs as $row) { ?>
							<div class="single-post-list d-flex flex-row align-items-center">
								<div class="thumb">
									<img class="img-fluid" style="width:150px;" src="<?php echo base_url()?>assets/uploads/blog/<?=$row['b_img_1']?>" alt="">
								</div>
								<div class="details">
									<a href="<?php echo base_url("blog/".$row['link'])?>">
										<h6><?=$row['b_title']?></h6>
									</a>
									<p><?=$row['b_date']?></p>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
					<div class="single-sidebar-widget ads-widget">
						<a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
					</div>
					<div class="single-sidebar-widget newsletter-widget">
						<h4 class="newsletter-title">Newsletter</h4>
					<p class="pb-5"></p>
						<form action="<?=base_url("Pages/news_letter")?>" method="post">
						<div class="form-group d-flex flex-row">
							<div class="col-autos">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
									</div>
									<input type="text" class="form-control" name="email" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
								</div>
							</div>
							<button type="submit" class="bbtns">Subcribe</button>
						</div>
					</form>
						<!-- <p class="text-bottom">
						You can <a href="#">unsubscribe</a> at any time
						</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End post-content Area -->
