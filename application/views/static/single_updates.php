<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								<?=$update['event_title']?>
							</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

  <!-- Start event-details Area -->
  <section class="event-details-area section-gap mt-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 event-details-left">
          <div class="main-img">
            <img class="img-fluid" src="<?php echo base_url()?>assets/uploads/upcoming/<?=$update['event_image_2']?>" alt="Loading image...">
          </div>
          <div class="details-content">
            <a href="#">
              <h4><?=$update['event_title']?></h4>
            </a>
            <p>
            <?=$update['event_details']?>
            </p>
          </div>
          <div class="social-nav row no-gutters">
            <div class="col-lg-6 col-md-6 ">
              <ul class="focials">
                <li><a href="<?=$update['facebook']?>"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?=$update['twitter']?>"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?=$update['instagram']?>"><i class="fa fa-instagram"></i></a></li>
                <li><a href="<?=$update['youtube']?>"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-6 navs">
              <a href="#" class="nav-prev"><span class="lnr lnr-arrow-left"></span>Prev Event</a>
              <a href="#" class="nav-next">Next Event<span class="lnr lnr-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 event-details-right">
          <div class="single-event-details">
            <h4>Details</h4>
            <ul class="mt-10">
              <li class="justify-content-between d-flex">
                <span>Start date</span>
                <span><?=$update['start_date']?></span>
              </li>
              <li class="justify-content-between d-flex">
                <span>End date</span>
                <span><?=$update['end_date']?></span>
              </li>
              <li class="justify-content-between d-flex">
                <span>Fee</span>
                <span><?=$update['Fee']?></span>
              </li>
            </ul>
          </div>
          <div class="single-event-details">
            <h4>Venue</h4>
            <ul class="mt-10">
              <li class="justify-content-between d-flex">
                <span><?=$update['event_venue']?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End event-details Area -->
