<?php
include "includes/header.php";
if(isset($_POST['conatct_submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message =$_POST['message'];

  
    
// echo'<script>alert("'.$name.'")</script>';

// echo'<script>alert("'.$email.'")</script>';
// echo'<script>alert("'.$number.'")</script>';
// echo'<script>alert("'.$message.'")</script>';


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


<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Contact Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

    <section class="ftco-section img bg-hero" style="background-image:url(img/contact-us-bg.jpg)">
        <div class="container">
            <div class="row justify-content-center">
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="wrapper">
                    <div class="row no-gutters justify-content-between">
                        <div class="col-lg-5 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-5">
                                <h3 class="mb-4 contact-title">Contact us</h3>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="text pl-4 contact-con">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                            <span class="contact-span">Address:</span>
                                        </div>
                                        <p>Corporate Office: 1st floor, D.No. 4-62-1, Plot No.21, MVV Builders, Near Post Office, Lawsons Bay colony, Visakhapatnam - 530017</p>
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
                                        <a href="mailto:mvvbuilders.sales@gmail.com">mvvbuilders.sales@gmail.com</span></a>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4 contact-get">Get in touch</h3>
                        <div id="form-message-warning" class="mb-4"></div>
                            <div id="form-message-success" class="mb-4">
                                Your message was sent, thank you!
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
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
                                        <textarea name="message" class="form-control" id="message" name="message" cols="30" rows="5" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 check-box">
                                            <input type="checkbox" class="contact-check" name="subject">
                                            <p>I authorize MVV Builders and its representatives to Call, SMS, Email or WhatsApp me about its products and offers. This consent overrides any registration for DND / NDNC.</p>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                         <input type="submit" value="Send Message" class="btn btn-primary" name="conatct_submit">
                                        <div class="submitting"></div>
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





<!-- Google map start -->
<div class="section">
    <div class="container-fluid map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1918.9147235304195!2d83.36237466784856!3d17.774965029831673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a395be8abcd5399%3A0xf9942190966ed12!2sMVV%20GREEN%20FIELD!5e0!3m2!1sen!2sin!4v1664942294112!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- Google map end -->
<?php
include "includes/footer.php";
?>
<script>
$(document).ready(function() {
    $("#contact_submit").click(function() {
        $.ajax({
            method: "post",
            url: "ajax/contact_enquiries.php",
            data: $("#contact_form").serialize(),
            success: function(contact_enquiry_status) {
                $("#contact-response").html(contact_enquiry_status);
                $("#contact-response").show();
                $("#contact_form")[0].reset();
            }
        })
    })
})
</script>