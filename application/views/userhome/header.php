<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147260508-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-147260508-1');
  </script>

  <title><?php echo $title; ?>  - ECE Live</title>

  <link rel="shortcut icon" href="<?php echo base_url()?>assets/user-home/images/logo.png">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/user-home/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/user-home/css/typography.css">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/user-home/css/style.css">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/user-home/css/responsive.css">
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
                  <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/user-home/images/logo.png" alt="logo" class="img-fluid"></a>
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
                <li class="drop-down-multilevel"><a href="javascript:void(0)">My Profile</a>
                  <li><a href="full-4-portfolio.html">View Profile</a></li>
                  <?php if ($this->session->userdata('user_email') == TRUE) {?>
                  <li><a href="<?=base_url()?>Login/logout">Logout</a></li>
                  <?php } else { ?>
                  <li><a href="<?=base_url()?>login">Login</a></li>
                  <li><a href="<?=base_url()?>signup">Signup</a></li>
                  <?php }?>
                </li>
              </ul>

              <ul class="menu-links">

                <li>
                  <a href="<?php echo base_url()?>">Home</a>
                </li>
                <li>
                  <ul class="drop-down-multilevel">
                    <li><a href="portfolio.html">Tools</a></li>
                    <li><a href="porfolio-detail.html">Post New Opportunities</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

  </header>
