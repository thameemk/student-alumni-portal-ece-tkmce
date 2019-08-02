<!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Blog
            </h1>
            <p class="text-white link-nav"><a href="<?php echo base_url()?>home">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="<?php echo base_url();?>blog">Blog </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> <?=$blog['b_title']?> </a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 posts-list">
            <div class="single-post row">
              <div class="col-lg-12">
                <div class="feature-img">
                  <img class="img-fluid" src="<?php echo base_url()?>assets/uploads/blog/<?=$blog['b_img_1']?>" alt="Loding image ...">
                </div>
              </div>
              <div class="col-lg-3  col-md-3 meta-details">
                <ul class="tags">
                  <li><a><?=$blog['b_cat']?></a></li>
                </ul>
                <div class="user-details row">
                  <p class="user-name col-lg-12 col-md-12 col-6"><a><?=$blog['b_author']?></a> <span class="lnr lnr-user"></span></p>
                  <p class="date col-lg-12 col-md-12 col-6"><a><?=$blog['b_date']?></a> <span class="lnr lnr-calendar-full"></span></p>
                  <p class="view col-lg-12 col-md-12 col-6"><a><?=$blog['b_views']?></a> <span class="lnr lnr-eye"></span></p>
                  <ul class="social-links col-lg-12 col-md-12 col-6">
                    <li><a href="<?=$blog['b_facebook']?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?=$blog['b_twitter']?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?=$blog['b_instagram']?>"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="<?=$blog['b_youtube']?>"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-9 col-md-9">
                <h3 class="mt-20 mb-20"><?=$blog['b_title']?></h3>
                <p class="excert">
                    <?=$blog['b_details']?>
                </p>
              </div>
              <div class="col-lg-12">
                <div class="row mt-30 mb-30">
                  <div class="col-6">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/uploads/blog/<?=$blog['b_img_2']?>" alt="">
                  </div>
                  <div class="col-6">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/uploads/blog/<?=$blog['b_img_3']?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 sidebar-widgets">
            <div class="widget-wrap">
              <div class="single-sidebar-widget search-widget">
                <form class="search-form" action="#">
                                <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
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
              <div class="single-sidebar-widget newsletter-widget">
                <h4 class="newsletter-title">Newsletter</h4>
                <p>
                  Here, I focus on a range of items and features that we use in life without
                  giving them a second thought.
                </p>
                <form action="<?=base_url("Pages/news_letter")?>" method="post">
                <div class="form-group d-flex flex-row">
                   <div class="col-autos">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
                      </div>
                    </div>
                    <button type="submit" class="bbtns">Subcribe</button>
                </div>
              </form>
                <p class="text-bottom">
                  You can <a href="#">unsubscribe</a> at any time
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End post-content Area -->
