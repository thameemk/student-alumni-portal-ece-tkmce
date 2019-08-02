<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-between">
			<div class="banner-content col-lg-9 col-md-12">
				<h1 class="text-uppercase">
				We Ensure better education
				for a better world
				</h1>
				<p class="pt-10 pb-10">
					In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.
				</p>
				<a href="#" class="primary-btn text-uppercase">Get Started</a>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->
<!-- Start feature Area -->
<section class="feature-area mb-5">
	<div class="container">
		<div class="row">

			<div class="col-lg-4">
				<div class="single-feature">
					<div class="title">
						<h4>MISSION</h4>
					</div>
					<div class="desc-wrap">
						<p style="text-overflow: ellipsis;">
						Offer UG and PG programs at par with the curricula offered by institutions of...
						</p>
						<a href="<?php echo base_url();?>about#mission">Readmore</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-feature">
					<div class="title">
						<h4>VISION</h4>
					</div>
					<div class="desc-wrap">
						<p style="text-overflow: ellipsis;">
							Impart quality education in Electronics and Communication Engineering ...
						</p>
						<a href="<?php echo base_url();?>about#vision">Readmore</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events of our Department</h1>
								<p>If you are a serious astronomy fanatic like a lot of us</p>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="active-upcoming-event-carusel">
						<?php
			      $i=0;
			      foreach($events as $row){
			        if($i==2) break;
			        $i++;
			      ?>
						<div class="single-carusel row align-items-center">
							<div class="col-12 col-md-6 thumb">
								<img class="img-fluid" src="<?php echo base_url ()?>assets/uploads/upcoming/<?=$row['event_image']?>" alt="Loading image ...">
							</div>
							<div class="detials col-12 col-md-6">
								<p><?=$row['start_date']?></p>
								<a href="<?php echo base_url("updates/".$row['link'])?>"><h4><?=$row['event_title']?></h4></a>
								<p>
								<?=$row['event_details']?>
								</p>
							</div>
						</div>
					<?php } ?>
					</div>
				</div><center>
				<a href="<?php echo base_url();?>updates" class="text-uppercase primary-btn mx-auto mt-40">Load more..</a>
			</center>
			</div>
		</section>
<!-- End feature Area -->
