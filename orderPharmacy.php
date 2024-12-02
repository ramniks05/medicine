<?php
      include 'admin-panel/include/config.php';
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Order Pharmacy</title>
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
            <h1>Place Your Order Here</h1>
          </div>

        </div>
      </div>
    </section>
    <!--page title end-->
    <!--body content start-->
    <div class="page-content">
      <section class="pt-0">
        <div class="container">

            <div class="row">
                <div class="col-md-12" style="padding:100px">
                <div class="category-sec">
                        <div class="my-2 rounded-3">
                        <div class="messages" id="message"></div>

                            <form id="addForm">
                            <p class="fw-normal">Name</p>
                            <input name="name" required type="text" id="txtPatientName" class="form-control">
                            <span style="color: red">
                                <span data-val-controltovalidate="txtPatientName" data-val-errormessage="*" id="ctl00" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="visibility:hidden;">*</span></span>
                            <p class="fw-normal">
                                Patient Mobile No
                             <input name="mobile" required type="number" maxlength="12" id="txtMobileno" class="form-control">
                                <span style="color: red">
                                    <span data-val-controltovalidate="txtMobileno" data-val-errormessage="*" id="ctl01" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="visibility:hidden;">*</span></span>
                                <span data-val-controltovalidate="txtMobileno" data-val-errormessage="Only Numbers are allowed." id="RegularExpressionValidator1" data-val="true" data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid" data-val-validationexpression="^[0-9]*$" style="color:Red;visibility:hidden;">Only Numbers are allowed.</span>

                            </p>
                            <p class="fw-normal">
                                Email ID
                             <input name="email" required type="email" id="txtEmailid" class="form-control">
                            </p>
                            <span style="color: red">
                                <span data-val-controltovalidate="txtEmailid" data-val-errormessage="*" id="ctl02" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="visibility:hidden;">*</span></span>
                            <p class="fw-normal">
                                Address
                             <input name="address" required type="text" id="txtAddress" class="form-control">
                            </p>
                              <span style="color: red">
                                <span data-val-controltovalidate="txtAddress" data-val-errormessage="*" id="ctl03" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="visibility:hidden;">*</span></span>
                            <p class="fw-normal">
                                City
                             <input name="city" required type="text" id="txtCity" class="form-control">
                            </p>
                            <span style="color: red">
                                <span data-val-controltovalidate="txtCity" data-val-errormessage="*" id="ctl04" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="visibility:hidden;">*</span></span>
                            <p class="fw-normal">
                                Landmark
                             <input name="landmark" required type="text" id="txtLandmark" class="form-control">
                            </p>
                            <p class="fw-normal">
                                Prescription
                             <input type="file" accept=".jpg,.png,.jpeg" name="prescription" id="filePrescription" class="form-control" required>
                            </p>
                              <span style="color: red">
                                <span data-val-controltovalidate="filePrescription" data-val-errormessage="*" id="ctl05" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="visibility:hidden;">*</span></span>


                                <input type="hidden" name="act" value="add">
                                <input type="hidden" name="table_name" value="pharmacyEnquiry">

                                <center>
                                    <button type="submit" id="submitBtn" class="btn btn-success">Place Order <i class="fa fa-spinner fa-spin" id="spiny" style="font-size:24px;display:none"></i></a>
                                </center>
                                </form>
                        </div>
                    </div>
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


<script type="text/javascript">


    $(document).ready(function(){
    $('#addForm').on('submit',function(e){
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
                        $(window).scrollTop(0);
                        $('#message').html(`<div class="alert alert-success" role="alert">
                                                   We Have Received your Response, Will Revert you Shortly!!
                                                    </div>`);
                        
                        
                        
                        setTimeout(function(){  $("#message").html(``); window.location.reload(); },4000);
                                                   

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