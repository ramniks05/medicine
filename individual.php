<?php
      include 'admin-panel/include/config.php';
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Partner</title>
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

  <!-- <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .dropdown-select {
      width: 200px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
    }
    .dropdown-options {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      background-color: #fff;
      border: 1px solid #ccc;
      border-top: none;
      border-radius: 0 0 5px 5px;
      max-height: 200px;
      overflow-y: auto;
      display: none;
    }
    .dropdown-option {
      padding: 8px 10px;
      cursor: pointer;
    }
    .dropdown-option:hover {
      background-color: #f0f0f0;
    }
    .selected-options {
      display: flex;
      flex-wrap: wrap;
      margin-top: 5px;
    }
    .selected-option {
      background-color: #007bff;
      color: #fff;
      border-radius: 20px;
      padding: 5px 10px;
      margin-right: 5px;
      margin-bottom: 5px;
      cursor: pointer;
    }
    .selected-option:hover {
      background-color: #0056b3;
    }
  </style> -->

  <style>


@media(max-width: 496px){
    #mySelect{
        width:min-content;
    }
}


  </style>
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
        <div class="container" style="padding:10%">


    <div  class="col-12 form-block" style="box-shadow: 0 0 10px #dddddd52;background-color: #f1f7f9;border: 2px solid #359aa0;border-radius: 8px;padding: 20px;margin-top:-100px;">
   <h1  class="main-heading">Individual Registration</h1>
   <div  class="spinner-border text-primary" hidden=""></div>
   <!-- <div  class="alert alert-danger" hidden=""><strong >Oops! </strong> Something went wrong try again after some time </div> -->
   <hr >
   <form  id="addFrom" class="register-form ng-untouched ng-pristine ng-invalid">
   <div class="messages" id="serviceSuccess"></div>
      <div  class="row">
         <div  class="col-sm-3 col-xs-12">
            <div  class="form-group">
               <label  for=""> First Name</label><input  type="text" name="cName"  placeholder="First Name" class="form-control ng-untouched ng-pristine ng-invalid"><!---->
            </div>
         </div>
         <div  class="col-sm-3 col-xs-12">
            <div  class="form-group">
               <label  for="">Last Name </label><input  type="text"  name="aName"  placeholder="Last Name" class="form-control ng-untouched ng-pristine ng-invalid"><!---->
            </div>
         </div>
         <div  class="col-sm-3">
            <div  class="form-group">
               <label  for="">Address 1</label><input  type="text" name="address1"  placeholder="Address1" class="form-control ng-untouched ng-pristine ng-invalid"><!---->
            </div>
         </div>
         <div  class="col-sm-3">
            <div  class="form-group">
               <label  for="">Address 2</label><input  type="text" name="address2"  placeholder="Address2" class="form-control ng-untouched ng-pristine ng-invalid"><!---->
            </div>
         </div>
      </div>
      <div  class="row">
         <div  class="col-sm-3">
            <div  class="form-group">
               <label  for="">City</label>
               <input  name="city" type="text" placeholder="City" class="form-control ng-untouched ng-pristine ng-invalid"><!---->
               
              
            </div>
         </div>
         <div  class="col-sm-3">
            <div  class="form-group">
               <label  for="">Pincode</label>
               <input  name="pincode" type="number"  placeholder="pincode" class="form-control ng-untouched ng-pristine ng-invalid"><!---->
            </div>
         </div>
         <div  class="col-sm-3 col-xs-12">
            <div  class="form-group">
               <label  for="">Contact Number</label><input  type="number" name="mobile" placeholder="Phone number" class="form-control ng-untouched ng-pristine ng-invalid"><!---->
            </div>
         </div>
         <div  class="col-sm-3 col-xs-12">
            <div  class="form-group">
               <label  for="">Email</label><input  name="email" type="text"  placeholder="Email" class="form-control ng-untouched ng-pristine ng-invalid"><!---->
            </div>
         </div>
      </div>
      <div  class="row">
         <div  class="col-md-12">
            <div  class="form-group">
               <label >What services do you offer?</label>
                 <br>
               <?php $services = mysqli_query($conn , "SELECT * FROM services");?>
                <select class="form-control custom-select form-control form-select" id="mySelect"  multiple required name="services[]">
                    <option value="" select>Select Services</option>
                <?php foreach($services as $key){ ?>
                <option value="<?php echo $key['name'] ?>" ><?php echo $key['name'] ?></option>
                <?php } ?>
                </select>
            </div>
         </div>
         <div  class="col-md-4">
            <div  class="form-group">
               <label  for="">How did you hear about us?</label>
               <select name="hearFrom" class="custom-select form-control ng-untouched ng-pristine ng-valid">
                  <option  value="" disabled="">Select</option>
                  <option  value="Google"> Google </option>
                  <option  value="Hospital"> Hospital/Doctor </option>
                  <option  value="LinkedIn"> LinkedIn </option>
                  <option  value="JustDial"> JustDial </option>
                  <option  value="SMS"> SMS </option>
                  <option  value="Facebook"> Facebook </option>
                  <option  value="Website"> Website </option>
                  <option  value="Quickr"> Quickr </option>
                  <option  value="Friend"> Friend/Relative </option>
                  <option  value="Others"> Others </option>
               </select>
            </div>
         </div>
      </div>

      <input type="hidden" name="act" value="add">
      <input type="hidden" name="table_name" value="partnerWithUs">
      <input type="hidden" name="type" value="2">


      <div  class="row">
         <div  class="col-12">
           
         </div>
         <div  class="col-12">
         <div  class="form-group"><button  type="submit" class="btn btn-success" id="submitBtn">Join Now <i class="fa fa-spinner fa-spin" id="spiny" style="font-size:24px;display:none"></i></button></div>

         </div>
      </div>
   </form>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

</body>

</html>


<script type="text/javascript">

$(document).ready(function() {
        $('#mySelect').select2();
    });
    $(document).ready(function(){
    $('#addFrom').on('submit',function(e){
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



document.addEventListener("DOMContentLoaded", function() {
  var selectBox = document.getElementById("mySelect");

  selectBox.addEventListener("change", function() {
    var selectedOptions = [];
    var options = selectBox.options;
    for (var i = 0; i < options.length; i++) {
      if (options[i].selected) {
        selectedOptions.push(options[i].value);
      }
    }
    console.log("Selected options:", selectedOptions);
  });
});


</script>