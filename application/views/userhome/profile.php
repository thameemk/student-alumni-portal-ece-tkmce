
<section class="iq-breadcrumb">
  <div class="iq-breadcrumb-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-12  col-md-7 align-self-center">
          <h2 class="iq-fw-8 mb-3">My Profile</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">my profile</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-5">
          <img src="<?=base_url()?>assets/user-home/images/blog.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="iq-breadcrumb-img">
    <img src="<?=base_url()?>assets/user-home/images/02.png" class="img-fluid breadcrumb-two" alt="image">
  </div>
</section>
<div>
<?php if($this->session->flashdata('msg')): ?>
<div class="alert alert-success" role="alert">
  <center><?php echo $this->session->flashdata('msg'); ?></center>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('msgreq')): ?>
<div class="alert alert-danger" role="alert">
  <center><?php echo $this->session->flashdata('msgreq'); ?></center>
</div>
<?php endif; ?>
</div>
<div class="main-content">
  <section class="iq-blogs">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-side-blog">
            <div class="blog-title-img text-center iq-mt-80">
              <img src="<?=base_url()?>assets/user-home/images/users/01.jpg" class="img-fluid rounded-circle mb-3" alt="images">
              <h5><?php echo $title; ?></h5>
              <span class="text-bold"><?php echo $num_rows;?> Posts
              <p class="mb-0">
              Company : <?php echo $user_company;?><br>
              Email : <?php echo $user_email;?><br>
              Phone : <?php echo $phone;?><br>
              Password :<?php echo "•••••••";?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-8 iq-rmt-40">

          <?php foreach (array_reverse($user) as $row) { ?>
          <div class="clearfix"></div>
          <div class="comments-box position-relative mt-5">
            <div class="media">
              <div class="media-body">
                <h6 class="mt-0 float-left"><?=$row['title']?></h6><a href="javascript:void(0)">@<?=$row['place']?></a>
                <a class="month-detail float-right" href="javascript:void(0)"><i class="far fa-calendar-alt"></i><?=substr($row['timeStamp'],0,10)?></a>
                <div class="clearfix"></div>
                <P>
                <?php if($row['location']!='') { ?>
                Location : <?=$row['location']?><br>
                <?php } ?>
                <?php if($row['last_date']!='') { ?>
                Last Date : <?=$row['last_date']?><br>
                <?php } ?>
                <?php if($row['details']!='') { ?>
                More Info : <?=$row['details']?>
                <?php } ?>
                </P>
                <a target="_blank" class="reply-btn text-green iq-font-18" href="<?=$row['reg_link']?>">Apply <i class="fas fa-long-arrow-alt-right"></i></a>
                <br>
              </div>
            </div>
          </div>
        <?php } ?>

        </div>
      </div>
    </div>
  </section>
</div>
