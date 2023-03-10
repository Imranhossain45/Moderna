<?php 
function siteUrl()
{
    $bassfol = explode('/', $_SERVER['REQUEST_URI']);
    $protocol = explode('/', $_SERVER["SERVER_PROTOCOL"]);
    return strtolower($protocol['0']) . "://" . $_SERVER['SERVER_NAME'] . "/" . $bassfol[1];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Moderna Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=siteUrl()?>/assets/css/animate.min.css" rel="stylesheet">
  <link href="<?=siteUrl()?>/assets/css/aos.css" rel="stylesheet">
  <link href="<?=siteUrl()?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=siteUrl()?>/assets/css/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=siteUrl()?>/assets/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=siteUrl()?>/assets/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=siteUrl()?>/assets/css/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=siteUrl()?>/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="<?=siteUrl()?>/index.php"><span>Moderna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="<?=siteUrl()?>/index.php">Home</a></li>
          <li><a href="<?=siteUrl()?>/about.php">About</a></li>
          <li><a href="<?=siteUrl()?>/services.php">Services</a></li>
          <li><a href="<?=siteUrl()?>/portfolio.php">Portfolio</a></li>
          <li><a href="<?=siteUrl()?>/team.php">Team</a></li>
          <li><a href="<?=siteUrl()?>/blog.php">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="<?=siteUrl()?>/contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->