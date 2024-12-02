<?php
      include 'admin-panel/include/config.php';
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Package</title>
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
  <link href="assets_package/style.css" rel="stylesheet" type="text/css">
</head>
<style>
    section {
    padding-top: 0px!important;
    }
</style>

        <style>
        
/* Pagination links */
.pagination a {
  color: white;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {background-color: #ddd;}
        </style>
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



    <section class="w3l-courses">
        <div class="blog pb-5" id="courses">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    
                    <?php
                    
                    //   $setFlag = '0';

                    //     $per_page_record = 1;  // Number of entries to show in a page.   
                    //     // Look for a GET variable page if not found default is 1.        
                    //     if (isset($_GET["page"])) {    
                    //         $page  = $_GET["page"];    
                    //     }    
                    //     else {    
                    //     $page=1;    
                    //     }    

                    //     $start_from = ($page-1) * $per_page_record;    
                        
                    //       $query = "SELECT * FROM package LIMIT $start_from, $per_page_record";  
                    //     $rs_result = mysqli_query ($conn, $query);    
                    //     $rs_count = mysqli_num_rows(mysqli_query ($conn, $query)); 
                    
                    ?>
                    
                   <?php $package = mysqli_query($conn , "SELECT * FROM package");?>
                    <?php foreach($package as $key){
                    
                    if($key['offer_price'] == "NA"){
                        $price = $key['price'];
                    }else{
                        $price = $key['offer_price'];
                    }
                    ?>
                    <div class="col-lg-4 col-md-6 item mt-md-0 mt-5" style="margin-top:10px !important">
                        <div class="card">

                            <div class="card-body course-details">
                                <div class="course-price-badge"> <?php echo $key['test_completed'] ?>+ Tests</div>
                                <br />

                                <div class="price-review d-flex justify-content-between mb-1align-items-center">

                                    <p>₹ <?php echo $price; ?></p>
                                    <ul class="rating-star">
                                        <?php  
                                        $rating = $key['rating'];
                                        
                                        for($i=0 ; $i < 5 ; $i++){
                                        ?>
                                        <li><span class="fa fa-star<?php if($i >= $rating){ echo "-o"; } ?> "></span></li>
                                        <?php } ?>
                                        
                                    </ul>
                                </div>
                                <a href="packageDetail.php?id=<?php echo $key['id'] ?>" class="course-desc">
                                    <?php echo $key['name'] ?>
                                </a>
                                <hr />

                                <a href="#course-single" style="color:black" class="course-content">
                                    <?php echo $key['shortDescription'] ?>
                                </a>
                                <br />

                                <div class="container6">
                                    <a href="" class="receipe blue" style="background-color:red"><?php echo $key['benefits'] ?>+ Exclusive Benefits</a>
                                </div>

                                <div class="course-meta mt-4">
                                    <div class="meta-item course-lesson">
                                        <span class="fa fa-spoon"></span>
                                        <span class="meta-value"> <?php echo $key['firstTag'] ?></span>
                                    </div>
                                    <div class="meta-item course-lesson">
                                        <span class="fa fa-male"></span>
                                        <span class="meta-value"> <?php echo $key['secondTag'] ?> </span>
                                    </div>
                                    <div class="meta-item course-">
                                        <span class="fa fa-clock-o"></span>
                                        <span class="meta-value"> <?php echo $key['thirdTag'] ?> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="author align-items-center">
                                    <span src="" alt="" class="img-fluid rounded-circle"></span>
                                    <ul class="blog-meta">
                                        <li>
                                            <?php if($key['offer_price'] == "NA"){ ?>
                                            <a href="#author" style="font-size:15px"> Rs <?php echo $key['price'] ?></a>
                                            <?php }else{ ?>
                                              <a href="#author" style="font-size:15px"> Rs <?php echo $key['offer_price'] ?></a> <span class="meta-value mx-1" style="font-size:10px"><del>Rs <?php echo $key['price'] ?></del></span>
                                            <?php } ?>
                                        </li>
                                        <li style="margin-left: 50px;">
                                            <button class="btn ml-auto" style="background-color: #0087c3; border-radius: 5px; padding: 5px 10px; border: none;">
                                                <a style="font-size: 15px; color: white; text-decoration: none;" href="packageDetail.php?id=<?php echo $key['id'] ?>">View Detail</a>
                                            </button>
                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    
                   

           

                </div>
            </div>
        </div>
        
                                
                            
    </section>
    
     <?php $package12 = mysqli_query($conn , "SELECT * FROM package where popular='1' order by id desc");
     
     $count = mysqli_num_rows($package12);
     
     if($count > 0){
     
     ?>
                       
    <section class="w3l-courses">
        <h1 style="text-align: center; font-weight: bold; color:black;">Popular Tests</h1>
        
       

        <div class="blog pb-5" id="courses">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    
                    <?php foreach($package12 as $key){ ?>
                    <div class="col-lg-4 col-md-6 item mt-5 pt-lg-2">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#course-single" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/upload/<?php echo $key['image'] ?>"
                                         alt="Card image cap">
                                </a>

                            </div>
                            <div class="card-body course-details">

                                <a href="packageDetail.php?id=<?php echo $key['id'] ?>" class="course-desc">
                                    <?php echo $key['name'] ?>
                                </a>

                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <!--<div class="col-lg-4 col-md-6 item mt-5 pt-lg-2">-->
                    <!--    <div class="card">-->
                    <!--        <div class="card-header p-0 position-relative">-->
                    <!--            <a href="#course-single" class="zoom d-block">-->
                    <!--                <img class="card-img-bottom d-block" src="assets/images/c4.jpg"-->
                    <!--                     alt="Card image cap">-->
                    <!--            </a>-->

                    <!--        </div>-->
                    <!--        <div class="card-body course-details">-->

                    <!--            <a href="#course-single" class="course-desc">-->
                    <!--                Diabetes Test-->
                    <!--            </a>-->

                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-lg-4 col-md-6 item mt-5 pt-lg-2">-->
                    <!--    <div class="card">-->
                    <!--        <div class="card-header p-0 position-relative">-->
                    <!--            <a href="#course-single" class="zoom d-block">-->
                    <!--                <img class="card-img-bottom d-block" src="assets/images/c4.jpg"-->
                    <!--                     alt="Card image cap">-->
                    <!--            </a>-->

                    <!--        </div>-->
                    <!--        <div class="card-body course-details">-->

                    <!--            <a href="#course-single" class="course-desc">-->
                    <!--                Blood Pressure Test-->
                    <!--            </a>-->

                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                </div>
                <!-- pagination -->
                <!-- //pagination -->
            </div>
        </div>
    </section>
    
    <?php } ?>


    <section class="w3l-contact-1 pb-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="d-grid contact-view">
                    <div class="cont-details">
                        <h4 class="title-small">Get in touch</h4>
                        <h3 class="title-big mb-4">Feel free to contact us</h3>
                        <p class="mb-sm-5 mb-4">Start working with Us, We guarantee that you’ll be able to have any issue resolved within 24 hours.</p>

                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker text-primary"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Our head office address</h6>
                                <p class="pr-lg-5"><?php echo $web_data['address'] ?></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone text-primary"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Call for help </h6>
                                <p><a href="tel:+(21) 255 999 8888"><?php echo $web_data['mobile'] ?></a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o text-primary"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Contact with our support</h6>
                                <p><a href="mailto:<?php echo $web_data['email'] ?>" class="mail"><?php echo $web_data['email'] ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="map-content-9">
                        <h5 class="mb-sm-4 mb-3">Write to us</h5>
                        
                        <div class="messages" id="message"></div>
                        <form id="addForm">
                            <div class="twice-two">
                                <input type="text" class="form-control" name="name" id="w3lName" placeholder="Name"
                                       required="">
                                <input type="email" class="form-control" name="email" id="w3lSender" placeholder="Email"
                                       required="">
                            </div>
                            <div class="twice">
                                <input type="text" class="form-control" name="subject" id="w3lSubject"
                                       placeholder="Subject" required="">
                            </div>
                            <textarea name="message" class="form-control" id="message" placeholder="Message"
                                      required=""></textarea>
                                      
                                      <input type="hidden" name="act" value="add">
                                <input type="hidden" name="table_name" value="buyPackage">
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                            </div>
                        </form>
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
