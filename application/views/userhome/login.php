<div class="login-info">
    <h2 class="iq-fw-9 mb-3">Login</h2>
    <h6>Welcome to <span class="main-color">ECE Live</span> please login your account.</h6>
    <?php if($this->session->flashdata('msg')): ?>
    <div class="alert alert-danger" role="alert">
      <center><?php echo $this->session->flashdata('msg'); ?></center>
    </div>
    <?php endif; ?>
    <?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
      <center><?php echo $this->session->flashdata('success'); ?></center>
    </div>
    <?php endif; ?>
    <form action="<?=base_url("Login/process")?>" method="post">
        <div class="form-group">
            <input name="user_email" type="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group form-check mb-4 pb-4">
            <a href="<?=base_url()?>signup" class="float-left iq-fw-6">Register here!!</a>
            <a href="#" class="float-right iq-fw-6">Forgot Password</a>
        </div>
        <button type="submit" class="slide-button button mr-3 first">Login</button>
    </form>
</div>
<ul class="social-list">
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
</ul>
</div>
<div class="col-lg-6 align-self-center position-relative">
    <div class="login-right-bar h-100 text-center">
        <img src="<?=base_url()?>assets/user-home/images/login.png" class="img-fluid" alt="">
    </div>
</div>
</div>
<img src="<?=base_url()?>assets/user-home/images/2.png" class="img-fluid login-footer-one" alt="">
<img src="<?=base_url()?>assets/user-home/images/3.png" class="img-fluid login-footer-two" alt="">
<img src="<?=base_url()?>assets/user-home/images/1.png" class="img-fluid login-footer-three" alt="">
</div>
