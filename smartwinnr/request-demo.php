<?php
include 'includes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>

</head>
<body>
    <section>
        <div class="row">
            <div class="col">
            <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
        <!-- <img class="ml-margin-bottom20 ml_request_demo_logo" src="/images/smartwinnr_white_logo 2.png" alt="SmartWinnr Logo"> -->
        <h1 class="ml_text_blue ml-margin-top-sections">Schedule a Free Demo</h1>
        <div class="ml_font_1_point_one ml_text_blue ">See how SmartWinnr can drive <span class="ml_text_bold">Sales Revenue goals</span> for your team, through
          <ul class="ml_text_blue">
            <li class="ml_font_1_point_one">gamified sales contests</li>
            <li class="ml_font_1_point_one">continuous learning</li>
            <li class="ml_font_1_point_one">systematic coaching</li>
          </ul>
        </div>
        <div class="ml_text_blue ml_font_1_point_one ml_text_bold ml-margin-top30">What's in it for you?</div>
        <div class="ml_font_1_point_one ml_text_blue ">In this 1-hour session, our consultant will help with:
          <ul class="ml_text_blue ">
            <li class="">Walkthrough of a <span><b>customised demo</b> </span> of SmartWinnr, to meet your business needs</li>
            <li class="">Take back a <span><b>concrete plan</b> </span> for gamifying your sales contest, training or coaching</li>
         
          </ul>
        </div>
        <div class="ml_text_blue ml_font_1_point_one ml_text_bold ml-margin-bottom20 ml-margin-top30">Global enterprises rely on SmartWinnr</div>
        <div class="row text-center">
          <img class="logo" src="images/fedex-logistics-logo.png" alt="FTN Logo">
          <img class="logo" src="images/bsc.png" alt="Boston Scientific Logo">
          <img class="logo" src="images/skf-logo.webp" alt="SKF Logo">
          <img class="logo" src="images/icici_bank_logo.webp" alt="ICICI Logo">
          <img class="logo" src="images/nn-logo.png" alt="NN Logo">
        </div> 

        <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide text-center">
        
    <img src="images/14.png" class="swiper-img">
    </div>
    <div class="swiper-slide text-center">
    <img src="images/24.png" class="swiper-img">
    </div>
    <div class="swiper-slide text-center">
    <img src="images/23.png" class="swiper-img">
    </div>
    ...
  </div>
 

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

 
</div>
            </div> 
            <div class="col">
            <div class="form1">
              <form action="api.php" method="post">
                <label for="">Name <span style="color:red">*</span></label>
                <br>
                <input type="text" placeholder="please enter your name" name="name">
                <br>
                <br>
                <label for="">Company Business Email<span style="color:red">*</span></label>
                <br>
                <input type="text" placeholder="please enter your business email" name="email">
                <br><br>
                <label for="">Phone Number <span style="color:red">*</span></label>
                <br>
                <input type="text" placeholder="please enter your phone number" name="num">
                <br><br>
                <label for="">Organization <span style="color:red">*</span></label>
                <br>
                <input type="text" placeholder="please enter your organization" name="org">
                <br><br>
                <label for="">What are you interested in?</label>
                <br>
                <input type="checkbox" name="intr[]"  value="Sales Contest"><label for="">Sales Contest</label> 
                <span><input type="checkbox"  name="intr[]"  value="Sales Learning"><label for="">Sales Learning</label> </span>
                <br>
                <input type="checkbox"  name="intr[]" value="Sales Coaching"><label for="">Sales Coaching</label> 
                <span><input type="checkbox"  name="intr[]"  value="Sales Incentives"><label for="">Sales Incentives</label></span>
                <br>
                <br>
                <br>
                <label for="">Message</label>
                <br>
                <textarea  id="" cols="30" rows="3" name="msg"></textarea>
                <br>
                <button class="btn btn-light">REQUEST DEMO</button>
                

              </form>
            </div>
            </div>
        </div>
        <!-- <img class="swoop w-100" src="swoop_mask.min.svg"> -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="swiper.js"></script>
    <script>
      
    </script>
</body>
</html>