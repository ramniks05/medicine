<?php

      include 'admin-panel/include/config.php';

      ?>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <title>Services</title>

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

    <section class="page-title">

      <div class="container-fluid p-0">

        <div class="row align-items-center">

          <div class="col-lg-12">

            <h1 style="color:#9C0000">Home Health Care Services In India</h1>

          </div>



        </div>

      </div>

    </section><br>

    <!--page title end-->

    <!--body content start-->

    <div class="page-content">

      <section class="pt-0">

        <div class="container">

          <div class="row gx-0 rounded overflow-hidden">

          <?php $services = mysqli_query($conn , "SELECT * FROM services");?>

          <?php 

          $odd = "#81d6fb";

          $even = "#d5ea5d";

          $previous_color = $even;

          foreach($services as $index => $key){ 

            if($index % 2 == 0) { // If index is even

                $color = $previous_color;

            } else { // If index is odd

                // Swap colors

                $color = ($previous_color == $even) ? $odd : $even;

            }

            

            // Use $color variable for your row styling

            

            // Update the previous color for the next iteration

            $previous_color = $color;

            

         

            ?>

            <div class="col-lg-6 col-md-12 p-2">

              <div class="theme-icon-box theme-bg h-100" style="background:<?php echo $color; ?>" >

                <img src="assets/upload/<?php echo $key['icon'] ?>" width="150px">

                <div class="icon-right-lg">

                  <img src="assets/upload/<?php echo $key['icon'] ?>" width="150px">

                </div>

                <h4 class="text-white"><?php echo $key['name'] ?></h4>

                <div>

                    <p class="text-white"> <?php echo $key['shortDescription'] ?></p>

                  <a href="serviceDetail.php?id=<?php echo $key['id'] ?>" class="themeht-btn white-btn">

                    <span>Read More</span>

                    <i class="flaticon-plus"></i>

                  </a>

                  <!--<a href="serviceDetail.php?id=<?php echo $key['id'] ?>" class="themeht-btn white-btn">-->

                  <!--  <span>Book Now</span>-->

                  <!--  <i class="flaticon-plus"></i>-->

                  <!--</a>-->

                </div>

              </div>

            </div>

            <?php } ?>

            

<!--             

            <div class="col-lg-6 col-md-12">

              <div class="theme-icon-box dark-bg h-100">

                <img src="img/icon/caregiver.svg" width="100px">

                <div class="icon-right-lg">

                  <img src="img/icon/caregiver.svg" width="100px">

                </div>

                <h4 class="text-white">CAREGIVER OR ATTENDANT</h4>

                <ul class="text-white">

                  <li>They are trained to bridge the gap between the patient, doctor, and the patient’s family.</li>

                  <li>Primary care to address your specific health needs.</li>

                  <li>Professional Support Staff.</li>

                  <li>Patient Assistant, Elderly Caregiver/attendant. </li>

                  <li>Personalized care and assessment at Home.</li>

                </ul>

                <a href="serviceDetail.php" class="themeht-btn white-btn">

                  <span>Read More</span>

                  <i class="flaticon-plus"></i>

                </a>

                <a href="#" class="themeht-btn white-btn">

                  <span>Book Now</span>

                  <i class="flaticon-plus"></i>

                </a>

              </div>

            </div>

            <div class="col-lg-6 col-md-12">

              <div class="theme-icon-box dark-bg h-100">

                <img src="img/icon/equipments.svg" width="100px">

                <div class="icon-right-lg">

                  <img src="img/icon/equipments.svg" width="100px">

                </div>

                <h4 class="text-white">MEDICAL EQUIPMENT AT HOME</h4>

                <ul class="text-white">

                  <li>Care at Home offers a wide range of medical equipment for rent or purchase.</li>

                  <li>Accessible &amp; affordable for you at your doorstep. </li>

                  <li>Latest medical equipment are home ranging - Mobility care, Respiratory care, covid care etc. </li>

                  <li>Delivery and support services like installation included for high-end medical equipment and gear.</li>

                  <li>Easy Booking process from App or Website.</li>

                </ul>

                <a href="serviceDetail.php" class="themeht-btn white-btn">

                  <span>Read More</span>

                  <i class="flaticon-plus"></i>

                </a>

                <a href="#" class="themeht-btn white-btn">

                  <span>Book Now</span>

                  <i class="flaticon-plus"></i>

                </a>

              </div>

            </div>

            <div class="col-lg-6 col-md-12">

              <div class="theme-icon-box theme-bg h-100">

                <img src="img/icon/physiotheraphy.svg" width="100px">

                <div class="icon-right-lg">

                  <img src="img/icon/physiotheraphy.svg" width="100px">

                </div>

                <h4 class="text-white">PHYSIO THERAPY AT HOME</h4>

                <div>

                  <ul class="text-white">

                    <li>Physiotherapy forms the critical pillars of complete recovery care.</li>

                    <li>Expert Physiotherapy Team for Post operative or Pre operative consultation</li>

                    <li>Physiotherapy Wide range of Treatment Options at your convenience.</li>

                    <li>Basic &amp; Advanced Physio Measurable Clinical Output Get treatment for Back pain, Shoulder, Arm, Leg pain &amp; Sports etc.</li>

                    <li>Book an Appointment or Enquire for More details.</li>

                  </ul>

                  <a href="serviceDetail.php" class="themeht-btn white-btn">

                    <span>Read More</span>

                    <i class="flaticon-plus"></i>

                  </a>

                  <a href="#" class="themeht-btn white-btn">

                    <span>Book Now</span>

                    <i class="flaticon-plus"></i>

                  </a>

                </div>

              </div>

            </div>

            <div class="col-lg-6 col-md-12">

              <div class="theme-icon-box theme-bg h-100">

                <img src="img/icon/babycare.svg" width="100px">

                <div class="icon-right-lg">

                  <img src="img/icon/babycare.svg" width="100px">

                </div>

                <h4 class="text-white">BABY CARE GIVER AT HOME</h4>

                <div>

                  <ul class="text-white">

                    <li>Lactation techniques and hygiene awareness</li>

                    <li>Facilitating post-natal mothers' home-based rehabilitation and early mobilization</li>

                    <li>Advice on eating a healthy and nutritious diet during the postpartum period</li>

                    <li>Newborn baby Vaccination and other medical assistance.</li>

                    <li>On Call consultation or Visiting Services at your doorstep.</li>

                    <li>For more details Enquire Now</li>

                  </ul>

                  <a href="serviceDetail.php" class="themeht-btn white-btn">

                    <span>Read More</span>

                    <i class="flaticon-plus"></i>

                  </a>

                  <a href="#" class="themeht-btn white-btn">

                    <span>Book Now</span>

                    <i class="flaticon-plus"></i>

                  </a>

                </div>

              </div>

            </div>

            <div class="col-lg-6 col-md-12">

              <div class="theme-icon-box dark-bg h-100">

                <img src="img/icon/radiology.svg" width="100px">

                <div class="icon-right-lg">

                  <img src="img/icon/radiology.svg" width="100px">

                </div>

                <h4 class="text-white">LAB TESTS AT HOME</h4>

                <ul class="text-white">

                  <li>A wide range of Diagnostics Lab tests &amp; Health Packages in the comfort of your home. </li>

                  <li>Free sample collection at home ECG, X- Ray, Blood Sample collections At Home etc.</li>

                  <li>Book lab assessments domestically and utilize the house care facility.</li>

                  <li>The blood pattern sample collection from home is handy and saves quite a lot of time. </li>

                  <li>We accept it as true within timely, quality, and patient-pleasant services.</li>

                  <li>Click2Clinic Provides Comprehensive Health Care Packages at affordable fee with main Diagnostic and Pathology Labs.</li>

                </ul>

                <a href="serviceDetail.php" class="themeht-btn white-btn">

                  <span>Read More</span>

                  <i class="flaticon-plus"></i>

                </a>

                <a href="#" class="themeht-btn white-btn">

                  <span>Book Now</span>

                  <i class="flaticon-plus"></i>

                </a>

              </div>

            </div>

            <div class="col-lg-6 col-md-12">

              <div class="theme-icon-box dark-bg h-100">

                <img src="img/icon/ICU-setupicon.svg" width="100px">

                <div class="icon-right-lg">

                  <img src="img/icon/ICU-setupicon.svg" width="100px">

                </div>

                <h4 class="text-white">ICU setup at Home</h4>

                <h6 class="text-white">Home ICU setup services include:</h6>

                <p class="text-white">The space you give at your home turns into an Intensive Care Unit (ICU) with our expert team continuing high standard of customised healthcare</p>

                <ul class="text-white">

                  <li>Doctor Home Visit or Video Consult</li>

                  <li>Medical Equipment (Rental/Purchase)</li>

                  <li>Critical care Nurse &amp; Attendant </li>

                  <li>Live monitoring </li>

                  <li>Physiotherapy</li>

                  <li>Blood Tests @ Home </li>

                  <li>Radiology Tests @ Home </li>

                  <li>Medicines @ Home </li>

                  <li>Ambulance &amp; Logistics </li>

                </ul>

                <a href="serviceDetail.php" class="themeht-btn white-btn">

                  <span>Read More</span>

                  <i class="flaticon-plus"></i>

                </a>

                <a href="#" class="themeht-btn white-btn">

                  <span>Book Now</span>

                  <i class="flaticon-plus"></i>

                </a>

              </div>

            </div>

            <div class="col-lg-6 col-md-12">

              <div class="theme-icon-box theme-bg h-100">

                <img src="img/icon/ambulance.svg" width="100px">

                <div class="icon-right-lg">

                  <img src="img/icon/ambulance.svg" width="100px">

                </div>

                <h4 class="text-white">AMBULANCE AT HOME</h4>

                <div>

                  <ul class="text-white">

                    <li>We offer one and two-ways ambulances.</li>

                    <li>Available in clinical emergency and non-emergency delivery to our affected person Home, hospital, or any destination.</li>

                    <li>Critically unwell sufferers through superior lifestyles help ambulance.</li>

                    <li>Ventilator,Road,Dead frame , Organs delivery etc</li>

                    <li>Oxygen Cylinder,Dead frame freezer box,ICU Ambulance</li>

                  </ul>

                  <a href="serviceDetail.php" class="themeht-btn white-btn">

                    <span>Read More</span>

                    <i class="flaticon-plus"></i>

                  </a>

                  <a href="#" class="themeht-btn white-btn">

                    <span>Book Now</span>

                    <i class="flaticon-plus"></i>

                  </a>

                </div>

              </div>

            </div>

            <div class="col-lg-6 col-md-12">

              <div class="theme-icon-box theme-bg h-100">

                <img src="img/icon/medicinedelivery.svg" width="100px">

                <div class="icon-right-lg">

                  <img src="img/icon/medicinedelivery.svg" width="100px">

                </div>

                <h4 class="text-white">PHARMACY AT HOME</h4>

                <div>

                  <ul class="text-white">

                    <li>Our group is made of especially skilled pharmacists &amp; healthcare professionals</li>

                    <li>A big range of healthcare offerings to be had in your comfort</li>

                    <li>We inventory handiest real drug treatments &amp; healthcare products.</li>

                    <li>Order drug treatments online at your comfort from throughout the Delhi and Hyderabad. </li>

                    <li>For Order Add to Cart or Call Us 90716 90716 </li>

                  </ul>

                  <a href="serviceDetail.php" class="themeht-btn white-btn">

                    <span>Read More</span>

                    <i class="flaticon-plus"></i>

                  </a>

                  <a href="#" class="themeht-btn white-btn">

                    <span>Book Now</span>

                    <i class="flaticon-plus"></i>

                  </a>

                </div>

              </div>

            </div>

            <div class="col-lg-6 col-md-12">

              <div class="theme-icon-box dark-bg h-100">

                <img src="img/icon/umbrellahealthpackage.svg" width="100px">

                <div class="icon-right-lg">

                  <img src="img/icon/umbrellahealthpackage.svg" width="100px">

                </div>

                <h4 class="text-white">UMBRELLA HEALTH PACKAGES</h4>

                <ul class="text-white">

                  <li>Our Home Healthcare is a range of services you or your loved one can avail at home while recovering from an illness or injury.</li>

                  <li>360° ANNUAL HOMECARE Package</li>

                  <li>Umbrella Home Health care Packages</li>

                  <li>MULTI-VITAMIN CHECK + FULL BODY - 74+ PARAMETERS</li>

                  <li>DIA-BEAT CARE ANNUAL PACKAGE.</li>

                  <li>Preventive/Critical Care Packages are also available at affordable prices.</li>

                  <li>Kindly reach out to us for more details</li>

                </ul>

                <a href="serviceDetail.php"class="themeht-btn white-btn">

                  <span>Read More</span>

                  <i class="flaticon-plus"></i>

                </a>

                <a href="#" class="themeht-btn white-btn">

                  <span>Book Now</span>

                  <i class="flaticon-plus"></i>

                </a>

              </div>

            </div> -->

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