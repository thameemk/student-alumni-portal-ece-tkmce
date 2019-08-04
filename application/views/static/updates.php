<!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Upcoming Events
            </h1>
            <p class="text-white link-nav"><a href="<?php echo base_url();?>home">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url();?>updates"> Events</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start events-list Area -->
    <section class="events-list-area section-gap event-page-lists">
      <div class="container">
        <div class="row align-items-center">
          <?php foreach($updates as $row){ ?>
          <div class="col-lg-6 pb-30">
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="<?php echo base_url()?>assets/uploads/upcoming/<?=$row['event_image']?>" alt="Loading image...">
              </div>
              <div class="detials col-12 col-md-6">
                <p><?=$row['start_date']?></p>
                <a href="<?php echo base_url("updates/".$row['link'])?>"><h4><?=$row['event_title']?></h4></a>
                <p align="justify">
                   <?=$row['short_details']?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>
    <!-- End events-list Area -->
