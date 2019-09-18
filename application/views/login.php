<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Login - Department of Electronics and Communication Engineering</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="<?php echo base_url ()?>assets/front/img/fav.png">
  <link href="<?=base_url();?>assets/login/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="<?=base_url();?>assets/login/style.css" rel='stylesheet' type='text/css' />
  <link href="<?=base_url();?>assets/login/font-awesome.min.css" rel="stylesheet">

  <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">

</head>

<body>
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Login<h5>
			<form action="<?=base_url("Login/process")?>" method="post">
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
				<div class="form-group">
					<label class="mb-2">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" name="user_email" aria-describedby="emailHelp" placeholder="" required="">
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
				</div>
				<button type="submit" class="btn btn-primary submit mt-2">Login</button>
				<p class="text-center mt-2">
          <a class="ml-3" href="<?=base_url()?>home">Home</a>
          <a class="ml-3" href="<?=base_url()?>signup">Register here !</a>
				</p>
			</form>
		</div>

	</div>
</body>
</html>
