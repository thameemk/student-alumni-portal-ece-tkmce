<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us
							</h1>
							<p class="text-white link-nav"><a href="<?php echo base_url();?>home">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url();?>about"> About Us</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->



			<!-- Start info Area -->
			<section class="info-area pb-120 mt-5">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 no-padding info-area-left">
							<img class="img-fluid ml-3" src="<?php echo base_url()?>assets/front/img/tkm_about.jpg" alt="">
							<img class="img-fluid ml-3 mt-3" src="<?php echo base_url()?>assets/front/img/tkm_about_ece.jpg" alt="">

						</div>
						<div class="col-lg-6 info-area-right">
							<h3 class="mb-2">The Department of Electronics & Communication - TKMCE</h3>
                    <?php foreach($about as $row){ ?>
							       <p align="justify"><?php echo $row['details']; ?></p>
                   <?php } ?>
						</div>
					</div>
				</div>
			</section>
			<!-- End info Area -->

			<!-- Start course-mission Area -->
			<section class="course-mission-area pb-120">
				<div class="container">

                    <div class="row">
                        <div class="col-md-6 accordion-left">

                            <!-- accordion 2 start-->
                            <dl class="accordion">
                                <dt>
                                    <a id="vision" href="">Vision</a>
                                </dt>
                                <dd>
                                     Impart quality education in Electronics and Communication Engineering through excellent teaching and research ambience, keeping abreast of the changes in technology and environment
                                </dd>
                                <dt>
                                    <a id="mission" href="">Mission</a>
                                </dt>
                                <dd>
                                    <li>Offer UG and PG programs at par with the curricula offered by institutions of national importance.
                                    <li>Provide robust academic, research and co – curricular ambience for moulding graduates to high quality professionals in practice and higher education
                                    <li>Prepare graduates adaptable to the changing requirements of the society, through lifelong learning coupled with an ethical outlook and dedication.
                                </dd>
                            </dl>
                            <!-- accordion 2 end-->
                        </div>
                        <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                        	<div class="overlay overlay-bg"></div>
							<!-- <a class="play-btn" href="#"><img class="img-fluid mx-auto" src="img/play.png" alt="Loading image..."></a> -->
                        </div>
                    </div>
				</div>
			</section>
			<!-- End course-mission Area -->
