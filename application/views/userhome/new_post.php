<section class="iq-breadcrumb">
  <div class="iq-breadcrumb-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7 align-self-center">
          <h2 class="iq-fw-8 mb-3">New Post</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Submit a new opportunity</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-5">
          <img src="<?=base_url()?>assets/user-home/images/contact-us.png" class="img-fluid" alt="image">
        </div>
      </div>
    </div>
  </div>
  <div class="iq-breadcrumb-img">
    <img src="<?=base_url()?>assets/user-home/images/02.png" class="img-fluid breadcrumb-two" alt="image">
  </div>
</section>



<div class="main-content">
  <section class="iq-contact-us pb-0">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-title mb-4">
            <h2 class="title iq-fw-8">You can add new opportunities here</h2>
          </div>
        </div>
      </div>
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
      <form action="process" method="post">
      <div class="row mb-5">
        <div class="col-lg-12">
          <div class="project-form mb-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="text" name="company" class="form-control contact-first-name" placeholder="Company / Organaisation / College">
                </div>
                <div class="form-group">
                  <input type="text" name="title" class="form-control contact-phone" placeholder="Title of the post">
                </div>
                <div class="form-group">
                  <input type="text" name="website" class="form-control contact-email" placeholder="Application Link">
                </div>
                <div class="form-group">
                  <input name="location" type="text" class="form-control contact-email" placeholder="Location of Job / Internship">
                </div>
                <div class="form-group">
                  <input name="email" type="hidden" class="form-control contact-email" placeholder="Email address of the company">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="last-date" type="text" class="form-control contact-email" placeholder="Last date of application">
                </div>
                <div class="form-group">
                  <textarea name="moreInfo" class="form-control contact-message" placeholder="More Details"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <button type="submit" class="slide-button button mr-3 first">Submit</button>
          </a>
        </div>
      </div>
    </form>
    </div>
  </section>
</div>
