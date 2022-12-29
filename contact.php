<?php 
session_start();
require_once "inc/header.php";
require_once "db.php";

?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="<?=siteUrl()?>/index.php"><span>Moderna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="<?=siteUrl()?>/index.php">Home</a></li>
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
          <li><a class="active" href="<?=siteUrl()?>/contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="<?=siteUrl()?>/index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>1614/1,Nurani Mosjid Road <br>
                     East Jurain,Kadamtoli,Dhaka-1204<br>
                     Bangladesh</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>smimranhossain45@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+88-01517141272<br>+88-01633087248</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          <?php
                    if(isset($_SESSION['success'])){
             printf('<div class="alert alert-success"> %s </div>', $_SESSION['success']);
                    }
                    
                    ?> 
            <form action="insertcontact.php" method="post">
              <div class="row">
                <div class="form-group">
                  <b>NAME:</b>
                  <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group mt-3">
                 <b>EMAIL:</b>
                  <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
               <b>SUBJECT:</b>
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
               <b>MESSAGE:</b>
                <textarea class="form-control" name="message" rows="10" placeholder="Message" required></textarea>
              </div>
              <button type="submit" name="submit" class="text-center mt-3 btn btn-primary">Send Message</button>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

</body>

</html>
<?php 
 require_once "inc/footer.php";
 unset($_SESSION['success']);
 ?>