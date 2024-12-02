<?php
      include 'admin-panel/include/config.php';
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Carelix</title>
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
   <style>
    .imagePartner{
        width: 248px;
/*        border: 1px solid black;*/
        margin: 10px;
    }
   </style>
</head>

<body>
   <div class="page-wrapper">
      <?php
      include 'include/header.php';
      ?>
      <section class="p-0">
         <div class="swiper banner-swiper banner-slider banner-two">
            <div class="swiper-wrapper">
                <?php $banner = mysqli_query($conn , "SELECT * FROM banner");
                
                foreach($banner as $key){
                ?>
                <div class="swiper-slide" style="height:initial !important">
                  <div class="slider-img" data-bg-img="assets/upload/<?php echo $key['image'] ?>"></div>
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="banner-text">
                                    <h1 class="mb-4" style="color:#9C0000"><?php echo $key['title'] ?></h1>
                                    <p style="color:#9C0000"><?php echo $key['description'] ?></p>
                                    <!-- <div class="btn-box mt-5">
                                        <a class="themeht-btn primary-btn" href="aboutUs.php">
                                        <span>About Us</span>
                                        <i class="flaticon-plus"></i>
                                        </a>
                                        <a class="themeht-btn dark-btn" href="contactUs.php"><span>Contact Us</span><i class="flaticon-plus"></i></a>
                                    </div> -->
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
               <?php } ?>
               <!-- <div class="swiper-slide">
                  <div class="slider-img" data-bg-img="img/slider/2.jpg"></div>
                  <div class="banner-content">
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-7 col-12">
                              <div class="banner-text">
                                 <h1 class="mb-4">Welcome to <span>Click2Clinic</span> </h1>
                                 <p>Experience personalized care in the comfort of your home with Click2Clinic. From skilled nursing and physiotherapy to medical equipment, we bring a range of services to your doorstep, ensuring your well-being is our top priority.</p>
                                 <div class="btn-box mt-5">
                                    <a class="themeht-btn primary-btn" href="#">
                                       <span>About Us</span>
                                       <i class="flaticon-plus"></i>
                                    </a>
                                    <a class="themeht-btn dark-btn" href="#"><span>Contact Us</span><i class="flaticon-plus"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
            <div id="banner-swiper-button-next" class="swiper-button-next"></div>
            <div id="banner-swiper-button-prev" class="swiper-button-prev"></div>
         </div>
      </section>
      <div class="page-content">
         <section>
            <div class="container">
               <div class="row justify-content-center text-center">
                  <div class="col-lg-8 col-xl-7">
                     <div class="theme-title ht-split-text">
                        <h6 style="color:#9C0000">What We Do</h6>
                        <h2 data-splitting="chars" style="color:#9C0000">Our Services</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                <?php $services = mysqli_query($conn , "SELECT * FROM services order by RAND() limit 12");
                
                foreach ($services as $key){
                    ?>
                  <div class="col-md-2 col-6 sbvsfbdfbd">
                     <div class="swiper-slide">
                        <a href="serviceDetail.php?id=<?php echo $key['id'] ?>">
                        <div class=" sdvsfbdfd" style="    border-radius: 20px;
    padding: 10px;
    background: var(--themeht-white-color);
    box-shadow: 0 12px 34px 0 rgba(14, 17, 44, 0.06);
    margin: 10px;
    text-align: center;    min-height: 12.5rem;
    max-height: 12.5rem;">
                           <img src="assets/upload/<?php echo $key['icon'] ?>">
                           <h5><?php echo $key['name'] ?></h5>
                        </div>
                        </a>
                     </div>
                  </div>
                  <?php } ?>
                
               </div>
            </div>
         </section>
         <section class="pt-0">
            <div class="container">
               <div class="row justify-content-center text-center">
                  <div class="col-lg-8">
                     <div class="theme-title ht-split-text">
                        <h6 style="color:#9C0000">Why Us</h6>
                        <h2 data-splitting="chars" style="color:#9C0000">Why Choose Us?</h2>
                     </div>
                  </div>
               </div>
               <div class="row align-items-center">
                  <div class="col-lg-3">
                     <p>
                        <?php echo $web_data['frontPageLeftAbout'] ?>
                     </p>
                     <a href="aboutUs.php" class="themeht-btn primary-btn"><span>Read More</span><i class="flaticon-plus"></i></a>
                  </div>
                  <div class="col-lg-6 px-lg-8 my-5 my-lg-0 position-relative">
                     <div class="ht-img-effect">
                        <div class="ht-img-effect-image">
                           <img class="img-fluid w-100 rounded" src="assets/upload/<?php echo $web_data['frontPageImage'] ?>" alt="Why Us">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                  <p>
                        <?php echo $web_data['frontPageRightAbout'] ?>
                     </p>
                     
                  </div>
               </div>
            </div>
         </section>

         <section class="pt-0 pb-lg-0">
            <div class="container-fluid p-0">
               <div class="row align-items-center">
                  <div class="col-lg-6 vh-100 mobile-bg-img" data-bg-img="img/04.jpg"></div>
                  <div class="col-lg-6 mt-4 mt-md-0 py-10">
                     <div class="white-bg p-5 rounded form-overlap">
                        <div class="theme-title ht-split-text">
                           <h6 style="color:#9C0000">Caring for your loved ones, as our own, at the comfort of your home</h6>
                           <h2 data-splitting="chars" style="color:#9C0000">Request<span class="title-text"> a Callback</span></h2>
                        </div>
                        <form id="submitService">
                           <div class="messages" id="serviceSuccess"></div>
                           <div class="row">

                              <div class="col-md-6">
                                 <div class="form-group mb-4">
                                    <input class="form-control" id="form_name" type="text" name="name" placeholder="Enter Your Name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              
                              <div class="col-md-6">
                                 <div class="form-group mb-4">
                                 <?php $services = mysqli_query($conn , "SELECT * FROM services");?>
                                    <select class="form-control form-select" required name="serviceId">
                                        <option value="">Select Services</option>
                                       <?php foreach($services as $key){ ?>
                                       <option value="<?php echo $key['id'] ?>" ><?php echo $key['name'] ?></option>
                                       <?php } ?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group mb-4">
                                    <input class="form-control" id="form_phone" type="tel" name="mobile" placeholder="Enter Phone Number" required="required" data-error="Phone is required">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group mb-4">
                                    <input class="form-control"  type="date" name="date" placeholder="dd/mm/yyyy" required="required" data-error="Date is required"><i class=""></i>
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group mb-4">
                                    <select  class="form-control ng-dirty ng-valid ng-touched" name="city" required >
                                       <option  value="">Select City</option>
                                       <option  value="Delhi"> Delhi </option>
                                       <option  value="Hyderabad"> Hyderabad </option>
                                       <option  value="Gurugram"> Gurugram </option>
                                       <option  value="Noida"> Noida </option>
                                       <option  value="Others"> Others </option><!---->
                                    </select>
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>

                              <input type="hidden" name="act" value="add">
                                <input type="hidden" name="table_name" value="serviceEnquiry">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control h-auto" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="mt-5">
                                 <p><input type="checkbox" required >
                                 I authorise CareLix Health  and its representatives to Call, SMS, Email or WhatsApp me about its programmes and offers. This consent overrides any registration for DNC / NDNC.<p>
                                    <button class="themeht-btn primary-btn" type="submit" id="submitBtn"><span>Request Callback</span><i class="flaticon-plus"></i><i class="fa fa-spinner fa-spin" id="spiny" style="font-size:24px;display:none"></i></button></div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>

               </div>
            </div>
         </section>

         <section class="pt-0 pb-lg-0" style="margin-top:40px;margin-bottom:40px">
            <div class="container p-0">
               <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="theme-title ht-split-text">
                            <center>
                                <h2 data-splitting="chars" style="color:#9c0000">Our Partners</h2>
                                <p>Carelix works with leading hospitals, experienced doctors, nurses, diagnostic centers, and others to improve health outcomes for patients and profitability for our partners</p>
                            <hr>
                            </center>
                        </div>
                    </div> 
                    
                    <div class="col-md-12">
                        <div class="d-flex flex-wrap justify-content-start">
                        <?php $partners = mysqli_query($conn , "SELECT * FROM partners");
                            foreach($partners as $key){ ?>
                        <div class="item"><img class="imagePartner" src="assets/upload/<?php echo $key['image'] ?>" alt="" width="100%"></div>
                                <?php } ?>
                    </div>
                    </div>
                </div>
            </div>
        </section>


         <section class="dark-bg bg-repeat bg-auto ht-bg-move-effect mb-4" data-bg-img="images/bg-pattern01.png">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col">
                     <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                           
                        <?php $testimonial = mysqli_query($conn , "SELECT * FROM testimonial");
                
                           foreach($testimonial as $key){
                              ?>
                           <div class="swiper-slide">
                              <div class="testimonial style-1">
                                 <div class="testimonial-caption">
                                    <div class="testimonial-img"><img class="img-fluid" src="assets/upload/<?php echo $key['image'] ?>" alt="Image"></div>
                                    <div>
                                       <h4><?php echo $key['name'] ?></h4>
                                    </div>
                                 </div>
                                 <div class="testimonial-content">
                                    <p><span class="quote"><?php echo $key['description'] ?></span></p>
                                    <div class="testimonial-quote"><i class="flaticon flaticon-quote"></i></div>
                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

      </div>
      <?php
      include 'include/footer.php';
      ?>
   </div>

   <div class="scroll-top">
      <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-appear.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- <script src="js/odometer.min.js"></script> -->
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

<script type="text/javascript">


    $(document).ready(function(){
    $('#submitService').on('submit',function(e){
        e.preventDefault();
        $("#spiny").show();
        $('#submitBtn').attr('disabled', 'disabled');
          $.ajax({
                url:"admin-panel/phpActions/dynamic_update.php",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                    $("#spiny").hide();
                    if(data == "inserted"){
                        $('#serviceSuccess').html(`<div class="alert alert-success" role="alert">
                                                   We Have Received your Response, Will Revert you Shortly!!
                                                    </div>`);
                        
                        
                        
                        setTimeout(function(){  $("#serviceSuccess").html(``); window.location.reload(); },4000);
                                                   

                        // alert('Successfully Inserted');
                        // window.location.reload();
                    }else if(data == "updated"){
                        // alert('Successfully Updated');
                        // window.history.back();
                    }
                }
          });
    });
        
});


</script>