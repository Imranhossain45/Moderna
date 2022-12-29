 <!-- ======= Footer ======= -->
 <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

<div class="footer-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4>Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
      </div>
      <div class="col-lg-6">
         <?php
           if(isset($_SESSION['success'])){
          printf('<div class="alert alert-success"> %s </div>', $_SESSION['success']);
            }
            ?>
        <form action="subscribe.php" method="POST">
          <input type="email" name="email" class="form-control" placeholder="Enter Your Email"><input type="submit" name="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <p>
          1614/1,Nurani Mosjid Road <br>
          East Jurain,Kadamtoli,Dhaka-1204<br>
          Bangladesh <br><br>
          <strong>Phone:</strong> +88-01517141272<br>
          <strong>Email:</strong> smimranhossain45@gmail.com<br>
        </p>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
        <h3>About Moderna</h3>
        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
        <div class="social-links mt-3">
          <a href="https://www.facebook.com/mdimran.h.sagor" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/s_m.imran.hossain/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/imran-hossain-854878206/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="https://twitter.com/home" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="row">
          <div class="col text-center text-white mt-5">
            <p>&copy; All Rights Reserved by MD IMRAN HOSSAIN</p>
          </div>
        </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
    Designed by <a href="http://localhost/Moderna/admin/profile/imran-profile.php" target="_blank">Md Imran Hossain</a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?=siteUrl()?>/assets/js/purecounter_vanilla.js"></script>
<script src="<?=siteUrl()?>/assets/js/aos.js"></script>
<script src="<?=siteUrl()?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?=siteUrl()?>/assets/js/glightbox.min.js"></script>
<script src="<?=siteUrl()?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?=siteUrl()?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?=siteUrl()?>/assets/js/noframework.waypoints.js"></script>
<script src="<?=siteUrl()?>/assets/js/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?=siteUrl()?>/assets/js/main.js"></script>

</body>

</html>