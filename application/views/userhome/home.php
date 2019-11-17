<section class="iq-breadcrumb">
  <div class="iq-breadcrumb-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7 align-self-center">
          <h2 class="iq-fw-8 mb-3">Seek and ye shall find</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Don't miss</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-5">
          <img src="<?php echo base_url()?>assets/user-home/images/blog.png" class="img-fluid" alt="image">
        </div>
      </div>
    </div>
  </div>
  <div class="iq-breadcrumb-img">
    <img src="<?php echo base_url()?>assets/user-home/images/02.png" class="img-fluid breadcrumb-two" alt="image">
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

        <?php foreach(array_reverse($feed) as $row){ ?>

        <div class="col-lg-4 col-md-6 col-sm-12" id="<?=$row['id_link']?>">
          <div class="main-blog">
            <div class="blog-detail">
              <h6 class="mt-1 iq-fw-8"><?=$row['title']?></h6>
              <h5><a target="_blank" href="<?=$row['reg_link']?>">@<?=$row['place']?></a></h5>
              <?php if($row['last_date']!='') { ?>
                <p class="mb-0"><b>Last Date :</b> <?=$row['last_date']?> <?php } ?></p>
              <?php if($row['location']!='') { ?>
                <p class="mb-0"><b> Location :</b> <?=$row['location']?> <?php } ?></p>
              <?php if($row['details']!='') { ?>
                <p align="justify" class="mb-0"><b> More Info :</b> <?=$row['details']?> <?php } ?></p>
                <a target="_blank" class="reply-btn text-green iq-font-18" href="<?=$row['reg_link']?>">Apply <i class="fas fa-long-arrow-alt-right"></i></a>

              <div class="blog-info">
                <img src="<?php echo base_url()?>assets/userhome/img/<?=$row['author_img']?>" class="img-fluid rounded-circle mr-3 user-img" alt="<?=$row['author_img']?>"><span class="iq-fw-8 font-c iq-font-18"><?=$row['author_first_name']?>&nbsp;<?=$row['author_last_name']?></span>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

      </div>

    </div>
  </section>
</div>
