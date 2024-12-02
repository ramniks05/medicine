<?php
      include 'admin-panel/include/config.php';
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Package</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- <link rel="shortcut icon" href="img/fav.png"> -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap-icons.css" rel="stylesheet" type="text/css">
  <link href="css/lifeplus-icon.css" rel="stylesheet" type="text/css">
  <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
  <link href="css/odometer.css" rel="stylesheet" type="text/css">
  <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
  <link href="css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
  <link href="css/spacing.css" rel="stylesheet" type="text/css">
  <link href="css/base.css" rel="stylesheet" type="text/css">
  <link href="css/shortcodes.css" rel="stylesheet" type="text/css">
  <link href="css/theme-style.css" rel="stylesheet" type="text/css">
  <link href="css/theme-color/color-3.css" data-style="styles" rel="stylesheet">
  <link href="css/color-customize/color-customizer.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!-- page wrapper start -->
  <div class="page-wrapper">
    <!--header start-->
    <?php
    include 'include/header.php';
    ?>
    <!--header end-->
    
    <div class="page-content">

<!--team end-->

<section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-xl-7">
        <div class="theme-title ht-split-text">
          <!-- <h6>Our Packages</h6> -->
          <h2 data-splitting="chars">Our Packages  </h2>
          <hr>
          <br>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="swiper team-swiper">
          <div class="swiper-wrapper">
          <?php $package = mysqli_query($conn , "SELECT * FROM package");?>
          <?php foreach($package as $key){ ?>
            <div class="swiper-slide">
              <div class="team-member">
                <div class="team-images">
                  <img class="img-fluid" src="assets/upload/<?php echo $key['image'] ?>" alt="">
                </div>
                <div class="team-description">
                  <h4>
                    <!-- <a href="doctor-single.html">Dr. Luna Jensen</a> -->
                  </h4>
                  <!-- <span>Medical Oncologist</span> -->
                  <p>
                    <?php echo $key['shortDescription'] ?>
                  </p>
                  <hr>
                  <div class="flex" style="display:flex">
                        <a href="buyPackage.php?id=<?php echo $key['id'] ?>" class="btn btn-primary" style="margin:10px" >Buy Now</a>
                        <a href="packageDetail.php?id=<?php echo $key['id'] ?>" class="btn btn-success" style="margin:10px" >View Detail</a>
                  </div>
                </div>
              </div>
            </div>

            <?php } ?>
            
          </div>
          <div id="team-pagination" class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--team end-->

</div>

   



    <!--footer start-->
    <?php
    include 'include/footer.php';
    ?>
    <!--footer end-->
  </div>
  <!-- page wrapper end -->
  <!--back-to-top start-->
  <div class="scroll-top">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!--back-to-top end-->
  <!-- inject js start -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-appear.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/odometer.min.js"></script>
  <script src="js/circle-progressbar.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/splitting.min.js"></script>
  <script src="js/scrolltrigger.min.js"></script>
  <script src="js/gsap.min.js"></script>
  <script src="js/gsap-animation.js"></script>
  <script src="js/img-reveal.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/lifeplus-swiper-init.js"></script>
  <script src="js/color-customize/color-customizer.js"></script>
  <script src="js/theme-script.js"></script>
</body>

</html>