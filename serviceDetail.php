<?php include 'admin-panel/include/config.php'; 


$serviceDetail = mysqli_fetch_array(mysqli_query($conn , "SELECT * FROM services where id='".$_GET['id']."'"))
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Service Details</title>
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
            <h1 style="color:#9C0000"><?php echo $serviceDetail['name'] ?></h1>
          </div>

        </div>
      </div>
    </section><br>
    <!--page title end-->
    <!--body content start-->
    <div class="page-content">
      <section class="pt-0">
        <div class="container">

        <section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 mb-6 mb-lg-0 order-lg-1">
           <?php if($serviceDetail['image']) { ?>
        <div class="service-image mb-5">
           
          <img class="img-fluid rounded" src="assets/upload/<?php echo $serviceDetail['image'] ?>" alt="...">
        
        </div>
          <?php } ?>
        <p >
            <?php echo $serviceDetail['description'] ?>
        </p>
      </div>
      <div class="col-12 col-lg-4">
        <div class="service-page-sidebar">
         
          <div class="service-widget">
            <h4 class="widget-title mb-4">Book Appointment</h4>
            <form id="submitService">
              <div class="messages" id="message"></div>
              <div class="form-group mb-4">
                <input class="form-control" id="form_name" type="text" name="name" placeholder="Your Name" required="required" data-error="Name is required.">
              </div>
              <div class="form-group mb-4">
                <input class="form-control" id="form_phone" type="tel" name="mobile" placeholder="Phone Number" required="required" data-error="Phone is required">
               
              </div>

              <input type="hidden" name="serviceId" value="<?php echo $_GET['id'] ?>">
              <div class="form-group mb-4">
                <input class="form-control" type="date" name="date" placeholder="dd/mm/yyyy" required="required" data-error="Date is required">
              </div>

              <div class="form-group mb-4">
                <select  class="form-control ng-dirty ng-valid ng-touched" name="city" required >
                    <option  value="">Select City</option>
                    <option  value="Delhi"> Delhi </option>
                    <option  value="Hyderabad"> Hyderabad </option>
                    <option  value="Gurugram"> Gurugram </option>
                    <option  value="Noida"> Noida </option>
                    <option  value="Others"> Others </option><!---->
                </select>
            </div>

              <div class="form-group">
                <textarea id="form_message" name="message" class="form-control h-auto" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
               
                <input type="hidden" name="act" value="add">
                                <input type="hidden" name="table_name" value="serviceEnquiry">
              </div>
              <div class="mt-5">
                <button class="themeht-btn primary-btn" type="submit"  id="submitBtn">
                  <span>Book An Appointment</span><i class="fa fa-spinner fa-spin" id="spiny" style="font-size:24px;display:none"></i>
                  <i class="flaticon-plus"></i>
                </button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

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