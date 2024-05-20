<?php
  define("APPURL", "http://localhost:3000/");

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>GuzoGateways</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo APPURL; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href=" <?php echo APPURL; ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav ">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?php echo APPURL; ?>/index.php" class="logo">
                        <img src="<?php echo APPURL; ?>/assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="<?php echo APPURL; ?>/index.php" class="active">Home</a></li>
                        <li><a href="<?php echo APPURL; ?>/about.html">About</a></li>
                        <li><a href="<?php echo APPURL; ?>/deals.html">Deals</a></li>
                        <li><a href="<?php echo APPURL; ?>/login.html">Login</a></li>
                        <li><a href=" <?php echo APPURL;  ?>/auth/register.php">Register</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->