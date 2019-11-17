<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?> - ECE Live TKMCE</title>

  <link rel="shortcut icon" href="<?=base_url()?>assets/user-home/images/logo.png">

  <link rel="stylesheet" href="<?=base_url()?>assets/user-home/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?=base_url()?>assets/user-home/css/typography.css">

  <link rel="stylesheet" href="<?=base_url()?>assets/user-home/css/style.css">

  <link rel="stylesheet" href="<?=base_url()?>assets/user-home/css/responsive.css">
</head>

<body>

  <header id="main-header" class="header-one">

    <nav id="menu-1" class="mega-menu" data-color="">

      <div class="menu-list-items">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">

              <ul class="menu-logo">
                <li>
                  <a href="#"><img src="<?=base_url()?>assets/user-home/images/logo.png" alt="logo" class="img-fluid"></a>
                </li>
              </ul>

              <ul class="menu-search-bar">
                <li>
                  <form method="post" action="#">
                    <label>
                      <input name="menu_search_bar" placeholder="Search" type="search">
                      <i class="fas fa-search"></i>
                    </label>
                  </form>
                </li>
                <li class="menu-contact iq-fw-5">
                  <a href="<?=base_url()?>user/profile" >My Profile</a>
                </li>
              </ul>

              <ul class="menu-links">

                <li>
                  <a href="<?=base_url()?>">Home</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Tools</a>

                  <ul class="drop-down-multilevel ">
                    <li>
                      <a href="javascript:void(0)">Profile Settings<i class="fas fa-angle-right "></i></a>

                      <ul class="drop-down-multilevel">
                        <?php if ($this->session->userdata('user_email') == TRUE) {?>
                          <li><a href="<?=base_url()?>user/editprofile">Edit Profile</a></li>
                        <li><a href="<?=base_url()?>login/logout">Logout</a></li>
                        <?php } else { ?>
                        <li><a href="<?=base_url()?>login">Login</a></li>
                        <li><a href="<?=base_url()?>signup">Register</a></li>
                        <?php }?>
                      </ul>
                    </li>
                    <li><a href="<?=base_url()?>user/submit">New Post<span class="ml-3 badge badge-danger">New!!</span></a></li>
                    <li><a href="<?=base_url()?>support">Contact us</a></li>
                    <li><a href="<?=base_url()?>about">About us</a></li>                    
                  </ul>
                </li>
            </div>
          </div>
        </div>
      </div>
    </nav>

  </header>
