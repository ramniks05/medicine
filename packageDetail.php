<?php include 'admin-panel/include/config.php'; 


$packageDetail = mysqli_fetch_array(mysqli_query($conn , "SELECT * FROM package where id='".$_GET['id']."'"))
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Package Details</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="shortcut icon" href="img/fav.png"> 
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
    <!--page title start-->
    <!--page title end-->
    <!--body content start-->
    <div class="page-content">
      <section class="pt-0">
        <div class="container" style="margin-right: auto !important;
    margin-left: auto !important;">

        <div class="row">
            <div class="col-md-12">
                <br>
                <div  class="card-body p-0 bg-grey">
                <center>
                <h5  class="card-title"><?php echo $packageDetail['name'] ?></h5>
                <div  class="card-img">
                    <img class="img-responsive" alt="360 Degree Annual Homecare Flagship Packages" src="assets/upload/<?php echo $packageDetail['image'] ?>" style="width:20rem" >
                </div>
                </center>
                    <p  class="card-text">
                        <?php echo $packageDetail['description'] ?>
                    </p>
                    
                    <center>
                    <a href="buyPackage.php?id=<?php echo $packageDetail['id'] ?>" class="btn btn-primary" style="margin:10px" >Buy Now</a>
                </div>

                
                </center>
            </div>
        </div>

        </div>
      </section>
      <!--service end-->
    </div>
    <!--body content end-->
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