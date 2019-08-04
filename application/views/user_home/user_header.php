
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> - Department of ECE</title>
    <link rel="stylesheet" href="<?php echo base_url ()?>assets/front/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/userhome/front/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/userhome/front/css/custom.css">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?php echo base_url();?>user/home">
            <img src="<?php echo base_url ()?>assets/front/img/ece_logo.png" alt="" title="" />
            </a>
        </div>
        <!-- <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div> -->
        <div class="navigation__column">
            <ul class="navigations__links">              
                <li class="navigation__list-item">
                  	<?php if ($this->session->userdata('user_email') == TRUE) {?>
                    <a href="<?=base_url()?>Login/logout" class="navigation__link">
                      <span>Logout</span>
                    </a>
                    <?php } else { ?>
                      <a href="<?=base_url()?>login" class="navigation__link">
                        <span>Login</span>
                      </a>
                    <?php }?>
                </li>
                <li class="navigation__list-item">
                    <a href="<?=base_url()?>User/submit" class="navigation__link">
                      <span>New !</span>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?=base_url()?>User/profile" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
