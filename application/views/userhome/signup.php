<div class="login-info">
  <h2 class="iq-fw-8 mb-3">Register</h2>
  <h6>Welcome to <span class="main-color">ECE Live</span> please Register your account.</h6>
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
  <form action="<?=base_url("Signup/process")?>" method="post">
    <div class="form-group">
      <input type="text" name="firstname" class="form-control" placeholder="Fisrt Name">
    </div>
    <div class="form-group">
      <input type="text" name="lastname" class="form-control" placeholder="Last Name">
    </div>
    <div class="form-group">
      <input type="text" name="phone" class="form-control" placeholder="Phone">
    </div>
    <div class="form-group">
      <input type="text" name="passyear" class="form-control" placeholder="Year of pass">
    </div>
    <div class="form-group">
      <input type="text" name="company" class="form-control" placeholder="Company / Organisation">
    </div>
    <div class="form-group">
      <input name="user_email" type="email" class="form-control" placeholder="Email Address">
    </div>
    <div class="form-group">
      <input name="password" type="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
      <input name="passconf" type="password" class="form-control" placeholder="Confirm Password">
    </div>
    <div class="form-group form-check mb-4">
      <input name="agree" type="checkbox" class="form-check-input" id="exampleCheck1" required>
      <label class="form-check-label" for="exampleCheck1">By Clicking register, you agree on our <a href="<?=base_url()?>privacy-terms">terms and condition</a></label>
    </div>
    <button type="submit" class="slide-button button mr-3 first">Signup</button>
  </form>
  <a href="<?=base_url()?>login" class="form-check-label">Already have an account,  Click here to login</a>
</div>
<ul class="social-list">
  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
</ul>
</div>
<div class="col-lg-6 align-self-center position-relative">
  <div class="login-right-bar h-100 text-center">
    <img src="<?=base_url()?>assets/user-home/images/register.png" class="img-fluid" alt="Signup">
  </div>
</div>
</div>
<img src="<?=base_url()?>assets/user-home/images/2.png" class="img-fluid login-footer-one" alt="">
<img src="<?=base_url()?>assets/user-home/images/3.png" class="img-fluid login-footer-two" alt="">
<img src="<?=base_url()?>assets/user-home/images/1.png" class="img-fluid login-footer-three" alt="">
