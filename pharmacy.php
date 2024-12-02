<?php
      include 'admin-panel/include/config.php';
      
      
      $data = mysqli_fetch_array(mysqli_query($conn , "SELECT * FROM medicine where id='1'"));
      
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pharmacy</title>
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
  
   <link rel="stylesheet" href="assets_medicine/css/style-starter.css">
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
    <!-- <section class="page-title">
      <div class="container-fluid p-0">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <h1>Home Health Care Services In India</h1>
          </div>

        </div>
      </div>
    </section><br> -->
    <!--page title end-->
    <!--body content start-->
    
    
     <section class="w3l-about-ab" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-5 left-wthree-img">
                        <h6 class="title-subhny">Introduction:</h6>
                        <h3 class="title-w3l mb-4" style="color:#9C0000">
                            <?php echo $data['heading']; ?>
                        </h3>

                    </div>
                    <div class="col-lg-7 pl-lg-5 align-self">
                        <p class="">
                            <?php echo $data['headingRightText']; ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="w3l-bottom-grids-6 py-5" id="services1">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center">
                <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">
                    Why Choose Medicine Home Delivery
                </h3>
            </div>
            <div class="grids-area-hny text-center row mt-lg-4">
                
                <?php if($data['why1head']){ ?>
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box icon-blue">
                        
                        <h4><a href="#feature" class="title-head"><?php echo $data['why1head'] ?></a></h4>
                        <p>
                            <?php echo $data['why1Data']; ?>
                        </p>

                    </div>
                </div>
                <?php } ?>
                
                
                
                
                <?php if($data['why2head']){ ?>
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box icon-blue">
                        
                        <h4><a href="#feature" class="title-head"><?php echo $data['why2head'] ?></a></h4>
                        <p>
                            <?php echo $data['why2Data']; ?>
                        </p>

                    </div>
                </div>
                <?php } ?>
               
                 <?php if($data['why3head']){ ?>
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box icon-blue">
                        
                        <h4><a href="#feature" class="title-head"><?php echo $data['why3head'] ?></a></h4>
                        <p>
                            <?php echo $data['why3Data']; ?>
                        </p>

                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>

    <section class="w3l-bottom-grids-6 py-5" id="services1" style="background:white">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="grids-area-hny text-center row mt-lg-4">
                
                <?php if($data['why4head']){ ?>
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box icon-blue">
                        
                        <h4><a href="#feature" class="title-head"><?php echo $data['why4head'] ?></a></h4>
                        <p>
                            <?php echo $data['why4Data']; ?>
                        </p>

                    </div>
                </div>
                <?php } ?>
                
                 <?php if($data['why5head']){ ?>
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box icon-blue">
                        
                        <h4><a href="#feature" class="title-head"><?php echo $data['why5head'] ?></a></h4>
                        <p>
                            <?php echo $data['why5Data']; ?>
                        </p>

                    </div>
                </div>
                <?php } ?>
                
                
                 <?php if($data['why6head']){ ?>
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box icon-blue">
                        
                        <h4><a href="#feature" class="title-head"><?php echo $data['why6head'] ?></a></h4>
                        <p>
                            <?php echo $data['why6Data']; ?>
                        </p>

                    </div>
                </div>
                <?php } ?>


            </div>
        </div>
    </section>
    
    <div class="w3l-content-2 py-5">
        <div class="container py-md-5 py-2">
            <div class="row whybox-wrap">
                <div class="col-lg-6 whybox-wrap-left">
                    <div class="title-content text-left">
                        <h3 class="title-w3l mb-sm-5 mb-4 pb-2">How it works</h3>
                    </div>

                    <div class="whybox-wrap-grid mb-4">
                        <div class="icon">
                            <span class="fa fa-calendar"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url"><?php echo $data['how1Head'] ?></a></h4>
                            <p class="mt-3"><?php echo $data['how1Data'] ?></p>
                        </div>
                    </div>
                    <div class="whybox-wrap-grid mb-4">
                        <div class="icon">
                            <span class="fa fa-pencil-square-o"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url"><?php echo $data['how2Head'] ?></a></h4>
                            <p class="mt-3"><?php echo $data['how2Data'] ?></p>
                        </div>
                    </div>
                    <div class="whybox-wrap-grid mb-4">
                        <div class="icon">
                            <span class="fa fa-shield"></span>
                        </div>
                        <div class="info">
                           <h4><a href="#url"><?php echo $data['how3Head'] ?></a></h4>
                            <p class="mt-3"><?php echo $data['how3Data'] ?></p>
                        </div>

                    </div>

                    <div class="whybox-wrap-grid mb-4">
                        <div class="icon">
                            <span class="fa fa-shield"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url"><?php echo $data['how4Head'] ?></a></h4>
                            <p class="mt-3"><?php echo $data['how4Data'] ?></p>
                        </div>

                    </div>

                    <div class="whybox-wrap-grid mb-4">
                        <div class="icon">
                            <span class="fa fa-shield"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url"><?php echo $data['how5Head'] ?></a></h4>
                            <p class="mt-3"><?php echo $data['how5Data'] ?></p>
                        </div>

                    </div>


                </div>
                <div class="col-lg-6 whybox-wrap-right pl-lg-5 position-relative mt-lg-0 mt-4">
                    <img src="assets/upload/<?php echo $data['image'] ?>" alt="" class="img-fluid radius-image">

                </div>
            </div>

        </div>
    </div>

    <section style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 40vh; background:white">
        <br />
        <br />
        <br />
        <br />
        <div>
            <h4 style="text-align:center">
                India's most popular online drug delivery Platform ensures that you receive your medications in record time.
            </h4>
        </div>
        <div style="margin-top: 30px;">
            <a class="btn btn-style btn-outline-light mr-2" href="https://carelixhealthcare.com/orderPharmacy.php">
                Place Order
            </a>
        </div>
        <br />
        <br />
        <br />
        <br />
    </section>


    
    <section class="w3l-content-5 py-5">
        <div class="content-4-main py-lg-5 py-md-4">
            <div class="container pb-5">
                <div class="title-content text-left">
                    <h3 class="title-w3l two mb-sm-5 mb-4">Conclusion </h3>
                </div>
                <div class="content-info-in row">
                    <div class="content-left col-lg-6">
                        <p class="">
                            <?php echo $data['conclusion'];  ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    
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