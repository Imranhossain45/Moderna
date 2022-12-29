<?php 
require_once "inc/header.php";
require_once "db.php";

/* Banners */

$bannersQuery="SELECT * FROM banners";
$bannerResult=mysqli_query($conn,$bannersQuery);
if(mysqli_num_rows($bannerResult) > 0){
  $bannerData= mysqli_fetch_all($bannerResult,true);

}
/* Services */

$servicesQuery="SELECT * FROM services LIMIT 4";
$serviceResult=mysqli_query($conn,$servicesQuery);
if(mysqli_num_rows($bannerResult) > 0){
  $serviceData= mysqli_fetch_all($serviceResult,true);

}
/* Why US */

$whyusQuery="SELECT * FROM why_us";
$whyusResult=mysqli_query($conn,$whyusQuery);
if(mysqli_num_rows($whyusResult)>0){
  $whyusData= mysqli_fetch_all($whyusResult,true);

}

/* Features */

$featuresQuery="SELECT * FROM features LIMIT 4";
$featureResult=mysqli_query($conn,$featuresQuery);
if(mysqli_num_rows($featureResult) > 0){
  $featureData= mysqli_fetch_all($featureResult,true);

}

?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <?php
      foreach($bannerData as $key=> $bData){
      ?>
      <div class="carousel-item <?=$key==0 ? 'active' : ''?>">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?=$bData['title']?></h2>
          <p class="animate__animated animate__fadeInUp"><?=$bData['description']?></p>
          <?php
          if(!empty($bData['btn_text'])){
             printf("<a href='%s' class='btn-get-started animate__animated animate__fadeInUp'>%s</a>",$bData['btn_url'],$bData['btn_text']);
          }
          ?>
          
        </div>
      </div>

     <?php
      }
      ?>
      

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">

        <?php 
        foreach($serviceData as $sData){
          ?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box <?= $sData['icon_box']?>">
              <div class="icon"><i class="bx <?= $sData['icon']?>"></i></div>
              <h4 class="title"><a href="<?= $sData['url']?>"><?= $sData['title']?></a></h4>
              <p class="description"><?= $sData['description']?></p>
            </div>
          </div>
        <?php
        }
        ?>
          


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
        <?php 
          foreach($whyusData as $wData){
            ?>
          <div class="col-lg-6 video-box">
            <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
            <a href="<?=$wData['video_link']?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
           
         
           <div class="icon-box">
              <div class="icon"><i class="bx <?= $wData['icon_1']?>"></i></div>
              <h4 class="title"><a href="#"> <?= $wData['title_1']?></a></h4>
              <p class="description"> <?= $wData['description_1']?></p>
            </div>
            <!-- <div class="icon-box">
              <div class="icon"><i class="bx <?=$wdata['icon_1']?>"></i></div>
              <h4 class="title"><a href="#"><?=$wdata['title_1']?></a></h4>
              <p class="description"><?=$wdata['description_1']?></p>
            </div> -->
           <div class="icon-box">
              <div class="icon"><i class="bx <?= $wData['icon_2']?>"></i></div>
              <h4 class="title"><a href="#"> <?= $wData['title_2']?></a></h4>
              <p class="description"> <?= $wData['description_2']?></p>
            </div>
          </div>

          <?php
          }
          ?>

          
      </div>

    </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <?php 
        foreach($featureData as $fData){
        ?>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="uploads/features/<?= $fData['photo'] ?>" class="img-fluid" alt="<?= $fData['title']?>">
          </div>
          <div class="col-md-7 pt-4">
            <h3><?= $fData['title']?></h3>
            <?= $fData['description']?>
          </div>
        </div>
        

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
          <img src="uploads/features/<?= $fData['photo']?>" class="img-fluid" alt="<?= $fData['title']?>">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3><?= $fData['title']?></h3>
            <?= $fData['description']?>
          </div>
        </div>
        <?php
        }
        ?>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

 <?php 
 require_once "inc/footer.php";
 ?>