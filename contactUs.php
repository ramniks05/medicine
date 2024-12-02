<?php
      include 'admin-panel/include/config.php';
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Book Now</title>
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
    <div class="page-content">
      <section class="pt-0">
        <div class="container">

        <section class="section-py contact-page">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="theme-title ht-split-text">
          <h2 data-splitting="chars" style="color:#9C0000">Have Any Questions? <span class="title-text d-block">Get In Touch!</span>
          </h2>
        </div>
        <ul class="contact-media list-unstyled">
          <li>
            <i class="flaticon-location"></i>
            <p class="mb-0"><?php echo $web_data['address'] ?></p>
          </li>
          <li>
            <i class="flaticon-chat"></i>
            <a href="mailto:<?php echo $web_data['email'] ?>"><?php echo $web_data['email'] ?></a>
          </li>
          <li>
            <i class="flaticon-doctor-consultation"></i>
            <a href="tel:+912345678900"><?php echo $web_data['mobile'] ?></a>
          </li>
          <li>
            <i class="flaticon-working-hours"></i>
            <div>
              <p class="mb-2">Mon - Sat: 09:00AM to 6:00PM</p>
              <p class="mb-0">Sunday: 10:00AM to 1:00PM</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 mt-6 mt-lg-0">
        <div class="box-shadow p-5 rounded">
        <form id="submitService">
            <h3 style="color:#9C0000">Request a Callback</h3>
            <hr>
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
                              <div class="col-md-12">
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

        <!-- <p>
            <?php echo $web_data['contactUs']  ?>
            </p> -->
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