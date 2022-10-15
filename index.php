<?php
include "includes/header.php";
// include "includes/db_con.php";
if(isset($_POST['conatct_submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message =$_POST['message'];

 
$from = 'register@mvvbuilders.com';
$to = 'mvvbuilders.sales@gmail.com';
$subject = 'MVV Registration';
$message = '
<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Appointment Reminder Email Template</title>
    <meta name="description" content="Appointment Reminder Email Template">
</head>
<style>
    a:hover {text-decoration: underline !important;}
</style>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <!-- Logo -->
                    <tr>
                        <td style="text-align:center;">
                          <a href="https://mvvbuilders.com" title="logo" target="_blank">
                           <img class="navbar-brand-regular studa-logo " src="https://mvvbuilders.com/img/logos/logo.png" width="200" alt="brand-logo" style="
    background: black;
    padding: 10px 20px;
    border-radius: 5px;
">
                      
                          </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <!-- Email Content -->
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <!-- Title -->
                                <tr>
                                    <td style="padding:0 15px; text-align:center;">
                                        <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;">MVV User Details</h1>
                                        <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
                                        width:100px;"></span>
                                    </td>
                                </tr>
                                <!-- Details Table -->
                                <tr>
                                    <td>
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; border: 1px solid #ededed">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        Name</td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'.$name.'</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        Email </td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'.$email.'</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        Number </td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'.$number.'</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        Message</td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'.$message.'</td>
                                                </tr>
                                               
                                               

                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                                <p style="font-size:14px; color:#455056bd; line-height:18px; margin:0 0 0;">&copy; <strong>www.mvvbuilders.com</strong></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>



';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= 'From:"'.$from.'"' . "\r\n" .
// 'Reply-To:"'.$to.'"' . "\r\n" .
// 'X-Mailer: PHP/' . phpversion();
$headers .= "From:" . $from;
$email=mail($to,$subject,$message, $headers);
if($email){
     echo '<script>alert("Email Sent Successfull")</script>';
}
else{
     echo '<script>alert("Email not Sent ")</script>';
}
  





}

?>


<!-- Enquiry form starts -->
<section class="ftco-section img bg-hero about-enquiry-form" style="background-image:url(img/contact-us-bg.jpg)">
        <div class="container">
            <div class="row justify-content-center">
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="wrapper">
                    <div class="row no-gutters justify-content-between">
                        <div class="col-lg-5 col-md-5 col-sm-6 d-flex align-items-stretch form-contactus">
                            <div class="info-wrap w-100 p-5">
                                <h3 class="mb-4 contact-title">Contact us</h3>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="text pl-4 contact-con">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                            <span class="contact-span">Address:</span>
                                        </div>
                                        <p> Corporate Office: 1st floor, D.No. 4-62-1, Plot No.21, MVV Builders, Near Post Office, Lawsons Bay colony, Visakhapatnam - 530017</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="text pl-4 contact-con">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                            <span class="contact-span">Phone:</span> 
                                        </div>
                                        <a href="tel://+919848916600">+91 9848916600</a><br>
                                        <a href="tel://+919848916600">+91 9912936600</a><br>
                                        <a href="tel://+919848916600">+91 9071332233</a><br>
                                        <a href="tel://+919848916600">+91 9071330033</a> <br>
                                        <a href="tel://+919848916600">+91 9948661600</a> <br>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="text pl-4 contact-con">
                                        <div class="icon d-flex align-items-center justify-content-center contact-icons">
                                            <span class="fa fa-paper-plane"></span>
                                            <span class="contact-span">Email:</span>
                                        </div>
                                        <a href="mailto:mvvbuilders.sales@gmail.com">MVVbuilders.sales@gmail.com</span></a>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-6 col-md-6  form-reachus">
                    <div class="contact-wrap w-100 p-md-5 p-4 contact-icon">
                        <h3 class="mb-4 contact-get">Get in touch</h3>
                        <i class="fa-solid fa-xmark icon-contact"></i>
                        <div id="form-message-warning" class="mb-4"></div>
                            <div id="form-message-success" class="mb-4">
                                Your message was sent, thank you!
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row" id="myform">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="number" id="subject" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 check-box">
                                            <input type="checkbox" class="contact-check" name="agree" id="agree_checkbox" value="yes">
                                            <p>I authorize MVV Builders and its representatives to Call, SMS, Email or WhatsApp me about its products and offers. This consent overrides any registration for DND / NDNC.</p>
                                        
                                    </div>
                                    <div class="ml-4" style="display:none; color:red" id="agree_chk_error">
  Can't proceed as you didn't agree to the terms!
  </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                         <input type="submit" name="conatct_submit" value="Send Message" class="btn btn-primary">
                                        
                                    </div>
                                   
                                </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            </div>
    </section>
<!-- Enquriry form ends -->

<!-- Carousels section starts  -->

<div class="carousel_sec">
  <div class="progress-bar progress-bar--primary hide-on-desktop">
    <div class="progress-bar__fill"></div>
  </div>

<header class="main-post-wrapper">
  
  <div class="slides_sec">
    <article class="main-post main-post--active">
      <div class="main-post__image">
        <img src="./img/banner/2.png" alt="New McLaren wind tunnel 'critical' to future performance, says Tech Director Key" />
      </div>
      <div class="main-post__content">
        <div class="main-post__tag-wrapper">
          <!-- <span class="main-post__tag">News</span> -->
        </div>
        <h1 class="main-post__title">MVV GV GRAND - ONGOING PROJECT</h1>
        <!-- <a class="main-post__link" href="#">
              <span class="main-post__link-text">find out more</span>
              <svg
                class="main-post__link-icon main-post__link-icon--arrow"
                width="37"
                height="12"
                viewBox="0 0 37 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11"
                  stroke="white"
                />
              </svg>
            </a> -->
      </div>
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-2.jpg"/>
      </div>
      <div class="main-post__content">
        <h1 class="main-post__title">OUR WINNING STREAKS CONTINUES</h1>
      </div>
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-3.jpg" alt="Hamilton wants harder championship fight from Leclerc and
            Verstappen" />
      </div>
      <div class="main-post__content">
        <!-- <div class="main-post__tag-wrapper">
          <span class="main-post__tag">News</span>
        </div>
        <h1 class="main-post__title">Hamilton wants harder championship fight from Leclerc and Verstappen
        </h1> -->
      </div>
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-4.jpg" alt="Hamilton wants harder championship fight from Leclerc and
            Verstappen" />
      </div>
      
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-5.jpg"/>
      </div>
      <div class="main-post__content">
        <h1 class="main-post__title">Our constant endeavour is always to provide the best for our customers.</h1>
      </div>
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-6.jpg"/>
      </div>
      <div class="main-post__content">
        <h1 class="main-post__title">We Build On Faith</h1>
      </div>
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-7.jpg" alt="Hamilton wants harder championship fight from Leclerc and
            Verstappen" />
      </div>
      <div class="main-post__content">
        <div class="main-post__tag-wrapper">
          <a href="https://MVVcity.com/" target ="_blank"><span class="main-post__tag">Take me on Tour</span></a>
        </div>
        <h1 class="main-post__title">
        </h1>
      </div>
    </article>  
  </div>
</header>

<div class="posts-wrapper hide-on-mobile">
  <article class="post post--active">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title"></h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title"></h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title">
    </h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title">
    </h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title"></h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title"></h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title"></h2>
  </article>
</div>
</div>

<main style="min-height: 2vh;"></main>

<!-- Carousels section ends -->



<!--about start-->
<div class="about-city-estate">
    <div class="container">
         <div class="row mb-20 about-founder-secz">
             <div class="col-md-7">
                <div class="about-text about-founder-text">
                    <h3>Our Founder</h3>
                    <span class="animate-border mr-auto ml-auto mb-4"></span>
                    <p align="justify">MVV Builders, Visakhapatnam, Andhra Pradesh,India started its operations in the 90’s headed by Young Dynamic & Innovative Self-driven Entrepreneur MR . MULLAPUDI VEERA VENKATA SATYANARAYANA Well Known, Reputed and Leading Promoter & Builder in the industry . Over a period of more than two decades it has grown exponentially based in Visakhapatnam.Today, the company enjoys a strong presence in Visakhapatnam real estate and extending its prevalence to Hyderabad.  </p>
                    <p>It has taken large strides to attain a name for itself both in the industry and in the market, equipped with the latest State-of-the–Art Infrastructure facilities and trained Qualified Professionals & Skilled Manpower to cater to the dominant changing housing needs of the society.</p>
                    <p>MVV Builders has always Promoted and Designed Quality Living Spaces or Accommodation and Rendered Quality Services and also believes in Quality work leading to optimum customer satisfaction.
                    The company has established more than 90 Ventures and each Venture a landmark in the city setting competitive standards in the market & in the industry.</p>
                  
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-md-4 about-founder-img">
               <img src="img/mvv.jpg" class="br" />
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <img src="img/banner/91414-city-building-construction.gif" style="    width: 100%;height: 466px;border-radius: 10px;"/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="about-text about-founder-text">
                    <h3>Welcome to <span class="founder-title">MVV Properties</span></h3>
                    <p align="justify">Welcome To MVV Private Limited Which Is Vast Growing Leading Real
                        Estate Property Developers In India With An Envisioned Success Path And Opulent Experience Over
                        20+ Years In Delivering Quality New Trend Land Development Projects Of Open Plots, Suit Rooms,
                        And Farmlands. At MVV, We Are Well Known For Focusing On Catering Best Real Estate
                        Requirements And Own A Premium Tag At Providing The Constant Endeavor Transparency And Core
                        Values To Our Customers. </p>
                        <p>
                        Our Team Is A Group Of Professionals With Supplemental Experience Over The Decades In the Real
                        Estate Ventures Field. We Lead Our Services With Core Values, Promise Of Excellence, Prosperity,
                        Large-Scale Development, And Growth To Our Customers. We Mark The Land Which Is Luxurious, More
                        Quality Living Spaced, Facilities Nearby And Thoughtful Amenities So That The Property’s Value
                        Will Be Enhanced More And Gives Our Customer A Bulk Returns On Their Investments.We Now Further Concentrating More On Open Plots Which Are At The Foothills Of Sri
                Yadagiri Lakshmi
                Narasimha Swamy Temple At Yadadri (Yadagirigutta), Suit Rooms And Farmlands At Aler (Warangal) Areas
                Which Are Future Happening Cities With Large Scope Of Developments Around.</p>
                   
                </div>
            </div>
        </div>
        <div class="row about-founder-text founder-para">
            <p class="text-justify"> We Specifically Choose This
                Type Of Areas, Which Are On High Demand, So That Our Customers Should Benefit More With Returns On Their
                Investment. We Carefully Structure Our Properties with DTCP Approved Layouts And Stick To HMDA
                Guidelines. We Developed and Enlarged Our Domain Into Individual Ventures, Open Plots, Suit Rooms,
                Farmlands, And Similar Type Of Properties. We Render All the Filtered Best Advice Regarding the Real
                Estate Briefs and Needs Which Keeps On Value And Appreciations All The Time For Your Investments.<br />

                Our Main Goal Is Not Only to Sell the Properties But Also Strive To Develop Real Estate Properties With
                Keeping A Major Focus On Environmental Sustainability Projects And Carefully Crafted With Utmost
                Following All The Priority Rules, Sustainable Living Resources.
            </p>
        </div>
    </div>
</div>
<!--about end-->

<!-- Enquiry section starts here -->
 <button class = "enquiry-button">E<br>N<br>Q<br>U<br>I<br>R<br>Y</button>
<!-- Enquiry section ends here -->



<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Featured Properties</h1>
        </div>
        <ul class="list-inline-listing filters filters-listing-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">All</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">on going projectss</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">Comppleted projects</li>
            <!--<li data-filter="3" class="btn btn-inline filtr-button filtr">Farm Lands</li>-->
            <!--<li data-filter="4" class="btn btn-inline filtr-button filtr">Others</li>-->
        </ul>
        <div class="row">
            <div class="filtr-container">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Completed</div>
                            <a href="completed-projects.php"><img src=".\img\mvv-city.webp" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="completed-projects.php">MVV City</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Madurawada
                                </a>
                            </h3>
                
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Ongoing</div>
                            <a href="ongoing-projects.php"><img src="img/on/MVV-GREEN-FIELD.jpg" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="ongoing-projects.php">MVV The Grand</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Madurawada
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Completed</div>
                            <a href="completed-projects.php"><img src="img/on/MVV-GREEN-GARDENS.jpg" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="completed-projects.php">MVV & MK Park</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Kurmannapalem
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Completed</div>
                            <a href="completed-projects.php"><img src=".\img\mvv-highway.webp" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="completed-projects.php">MVV HighWay Homes</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Madurawada
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Completed</div>
                            <a href="completed-projects.php"><img src=".\img\mvv-hillvalley.jpg" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="#">MVV Hill Valley</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>MVP Colony
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Ongoing</div>
                            <a href="ongoing-projects.php"><img src="img/on/MVV-PINNACLE-HOMES.jpg" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="ongoing-projects.php">MVV PINNACLE HOMES</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Madurawada
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->
<!-- Counters strat -->
<div class="counters overview-bgi mb-70">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">91</h1>
                    <p>Constructed buildings</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-symbol-1"></i>
                    <h1 class="counter">4220</h1>
                    <p>Total Units</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6  bordered-right">
                <div class="counter-box col-xs-6 counter-pro">
                    <i class="flaticon-people counter-icon"></i>
                    <h1 class="counter counter-icon">10</h1>
                    <p>Upcoming Projects</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 wow">
                <div class="counter-box">
                    <i class="flaticon-people-1"></i>
                    <h1 class="counter">455</h1>
                    <p>Plots</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->
<!-- Our service start -->
<!-- 
<div class="mb-100 our-service">
    <div class="container">
        <div class="main-title">
            <h1><span>What are you</span> looking for?</h1>
        </div>

        <div class="row mgn-btm wow">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="content">
                    <i class="flaticon-apartment"></i>
                    <h4 class="text-dark font-weight-bold">Ongoing Constructions</h4>
                    <p align="justify" class="text-dark">Agricultural land, also referred to as "farmland", is typically land devoted to agriculture, the systematic and controlled use of other forms of life—particularly the rearing of livestock and production.
                    </P>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="content">
                    <i class="flaticon-internet"></i>
                    <h4 class="text-dark font-weight-bold">Pinnacle Constructions</h4>
                    <p align="justify" class="text-dark">Agricultural land, also referred to as "farmland", is typically land devoted to agriculture, the systematic and controlled use of other forms of life—particularly the rearing of livestock and production.
                    </P>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                <div class="content">
                    <i class="flaticon-vehicle"></i>
                    <h4 class="text-dark font-weight-bold">Apartments</h4>
                    <p align="justify" class="text-dark">Agricultural land, also referred to as "farmland", is typically land devoted to agriculture, the systematic and controlled use of other forms of life—particularly the rearing of livestock and production.
                    </P>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Our service end -->

            <!-- How we evolved section starts -->

<div class="container evolved-main">
    <h1>How We Evolved</h1>
  <div class="row">
    <div class="col">
      <div class="main-timeline">
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">1997 - 2001</span>
            <div class="timeline-icon">
              <!-- <i class="fa fa-rocket" aria-hidden="true"></i> -->
            </div>
            <div class="content evolved-content">
              <h3 class="title">Successfully Delivered Projects</h3>
              <p class="description">
              Srinivasa Towers, Srinivasa Mansions, Bay Castle, Maha Lakshmi Towers, MVV Towers, MVV Palace, MVV Arcade, MVV Beach Villa.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2002 - 2006</span>
            <div class="timeline-icon">
              <!-- <i class="fa fa-users" aria-hidden="true"></i> -->
            </div>
            <div class="content">
              <h3 class="title">Successfully Delivered Projects</h3>
              <p class="description">
              MVV Plaza, MVV Gardens, MVV Estates, MVV Esteem, MVV Beach Star, MVV Hill Valley, MVV Jagvir Vegi Gardens, MVV Royal Palace,MVV Chambers.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2007 - 2011</span>
            <div class="timeline-icon">
              <!-- <i class="fa fa-cog" aria-hidden="true"></i> -->
            </div>
            <div class="content">
              <h3 class="title">Successfully Delivered Projects</h3>
              <p class="description">
              MVV & MK Royal Gardens, MVV Presidency, MVV Apartments, MVV Heritage, MVV Paradise, MVV Srinivasa Chambers, MVV Royal, MVV Tepala Palce,MVV Palm Meadows, MVV Residency, MVV Sri Nilayam, MVV Homes, MVV Dream Homes, MVV Happy Homes, MVV Woods Ville, Srinivasa Residency, MVV Suvarna Nivasam, MVV Oakwoods, MVV Sivakasi Nilayam, MVV Courtyard, MVV Aurum.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2012 - 2016</span>
            <div class="timeline-icon">
              <!-- <i class="fa fa-heart" aria-hidden="true"></i> -->
            </div>
            <div class="content">
              <h3 class="title">Successfully Delivered Projects</h3>
              <p class="description">
              MVV Highway Homes, MVV Ozone, MVV Enclave, MVV Harmony, MVV Hillview, MVV AS Naidu Enclave, MVV Bhavani, MVV First Street, MVV Karuna, MVV Marina, MVV Nandanam, MVV Sai Kutir, MVV Lotus, MVV Pavan Abode, MVV Srinivasa Nilayam, MVV Suryaratn, MVV Bliss, MVV Signature, MVV Ram, MVV Greens, Mvv Pallavi, MVV Prasurya.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2017 - 2021</span>
            <div class="timeline-icon">
              <!-- <i class="fa fa-globe" aria-hidden="true"></i> -->
            </div>
            <div class="content evolved-content">
              <h3 class="title">Successfully Delivered Projects</h3>
              <p class="description">
              MVV Castle, MVV Exotica, MVV Iconia, MVV AVR Paradise, MVV Neeladri, MVV Fortune Nest, MVV City, MVV Orchids, MVV Beach Pearl.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2022</span>
            <div class="timeline-icon">
              <!-- <i class="fa fa-apple" aria-hidden="true"></i> -->
            </div>
            <div class="content">
              <h3 class="title">ONGOING PROJECTS</h3>
              <p class="description">
              MVV Lakshmi Residency, MVV Beach castle, MVV Silver Homes, MVV Satya Homes, MVV Meridian Homes, MVV Pinnacle Homes, MVV Green Field, MVV Green Gardens, MVV Orion, MVV & GV Sunrise, MVV GV The Grand.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">COUNTING ....</span>
            <div class="timeline-icon">
              <!-- <i class="fa fa-edit" aria-hidden="true"></i> -->
            </div>
            <div class="content">
              <h3 class="title">UPCOMING PROJECTS</h3>
              <p class="description">
              MVV City Phase II, MVV Kapuluppada, MVV Srinivasa, MVV-MK Housing Project, MVV&MK Near IT Park, MVV Chandrampalem North, MVV Chandrampalem South, MVV Siripuram, MVV & GV Near IT Park, MVV & GV Vadlapudi.
              </p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>    
            <!-- How we evolved section ends -->
<!-- Partners block end -->

<div class="clearfix"></div>

<!-- Testimonial section start-->
<div class="testimonials-3 overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
                    <h1>Our Testimonial</h1>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item content clearfix active">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src=".\img\testimonial1.jpg" alt="avatar-1" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Mvv Builders are the top quality construction company in town and so is the transaction with them, very professional and very prompt. In one word - they are very RELIABLE.  I am excited to buy my first house with them, and they are making sure my experience remains memorable.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            Suresh Viswanadhula
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item content clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src=".\img\testimonial2.jpg" alt="avatar-2" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            I purchased two flats, one in mvv city and the other in mvv greenfield. MVV builders always try to provide good quality houses in affordable prices. I trust the brand and will always refer all my friends and family to purchase MVV properties only.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            Rama Krishna Rao
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item content clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src=".\img\testimonials3.jpg" alt="avatar-4" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Very peaceful environment and better experience in apartments. The best builder I have seen. I own a house at MVV Pallavi, LB colony. Very good quality materials used.  Everything has been constructed according to the vastu and proper specifications. Supervisors are the best of their kind.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            Koushik Reddi
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item content clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src=".\img\testimonial4.jpg" alt="avatar-3" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            MVV is the brand name for apartment construction from 1997 onwards so many ventures gated communities and commercial complexes. The best quality services and homes, are built by them. They are affordable and durable. MVV builders are the BEST.
                                            <sup>
                                                <i class="fa fa-quote-right"></i>
                                            </sup>
                                        </div>
                                        <div class="author-name">
                                            Jaya Prakash
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouse3-example-generic" role="button" data-slide="prev">
                        <span class="slider-mover-left t-slider-l" aria-hidden="true">
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouse3-example-generic" role="button" data-slide="next">
                        <span class="slider-mover-right t-slider-r" aria-hidden="true">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial  end -->
<div class="clearfix"></div>

<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Our</span> Blog</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft delay-04s">
                <div class="thumbnail blog-box-2 clearfix">
                    <div class="blog-photo">
                        <img src="img/blog/blog-1.jpg" alt="blog-1" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="img/avatar/avatar-1.jpg" alt="user-blog">
                            </li>
                            <li><span>John Doe</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <!-- Detail -->
                    <div class="caption detail">
                        <h4><a href="#">RETREAT TO THE CLUB HOUSE</a></h4>
                        <!-- paragraph -->
                        <p class="blog-content">There's always an interesting moment waiting for you at the Clubhouse. The lavish and strongly planned establishment offers a plethora of leisure and unwinding.</p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="#" class="read-more">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 hidden-sm wow fadeInUp delay-04s">
                <div class="thumbnail blog-box-2 clearfix">
                    <div class="blog-photo">
                        <img src="img/blog/blog-2.jpg" alt="blog-2" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="img/avatar/avatar-4.jpg" alt="user-blog">
                            </li>
                            <li><span>Karen Paran</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <!-- Detail -->
                    <div class="caption detail">
                        <h4><a href="#">REJUVENATE THE NEW YOU </a></h4>
                        <!-- paragraph -->
                        <p class="blog-content">Let yourself go in one of the largest entertainment facilities that you would ever see in a residential community in Vizag. Welcome to the world of unlimited fun and pamper your senses to the maximum !! </p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="#" class="read-more">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInRight delay-04s">
                <div class="thumbnail blog-box-2 clearfix">
                    <div class="blog-photo">
                        <img src="img/blog/blog-3.jpg" alt="blog-3" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="img/avatar/avatar-3.jpg" alt="user-blog">
                            </li>
                            <li><span>John Antony</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <!-- Detail -->
                    <div class="caption detail">
                        <h4><a href="#">OUTDOORS IS THE SCENE OF ACTION</a></h4>
                        <!-- paragraph -->
                        <p class="blog-content">What you want what you get. Well curated spaces with designer landscapes, lush greenery and sparkling fountains. Whether it is you, your better-half your elders, your kids. Everyone gets their share of space to do what they want </p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="#" class="read-more">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Partners block start -->
<!-- <div class="partners-block">
    <div class="container">
        <h3>Brands & Partners</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel our-partners slide" id="ourPartners">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="img/brand/partner.png" alt="partner">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="img/brand/partner-2.png" alt="partner-2">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="img/brand/partner-3.png" alt="partner-3">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="img/brand/partner-4.png" alt="partner-4">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="img/brand/partner-5.png" alt="partner-5">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i
                            class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners" data-slide="next"><i
                            class="fa fa-chevron-right icon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Partners block end -->
<?php
include"includes/footer.php";
?>
<script>
    $("#myform").on("submit",function(form)
{
    if(!$("#agree_checkbox").prop("checked"))
    {
        $("#agree_chk_error").show();
    }
    else
    {
        $("#agree_chk_error").hide();
    }
    return false;
})
</script>