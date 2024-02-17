<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" id="triggerColor" href="assets/css/triggerplate/color-0.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="preloader">
        <div class="loader"></div>
    </div>

    <?php include("header.php"); ?>

    <div class="offset-search">
        <form onsubmit="return validateForm()" action="contact_email.php" id="form" method="POST" name="form">
            <input type="text" name="search" placeholder="Search here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="body_overlay"></div>

    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Contact </span>Us</h4>
            </div>
        </div>
    </div>

    <div class="contact-info mt-2 ptb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 my-5">
                    <div class="cnt-info">
                        <h4>Contact Info</h4>
                        <p><span class="font-weight-bold text-uppercase">Senghundhar College Of Pharmacy</span> <br>Kumaramangalam Post, Tiruchengode, <br>Namakkal Dt. ,Tamil Nadu - 637205.</p>
                        <ul class="address">
                            <li><i class="fa fa-phone"></i>+91 9367653355 / 8825707617</li>
                            <li><i class="fa fa-envelope"></i>info@senguntharpharmacycollege.org</li>
                            <li class="ml-5">admissions@senguntharpharmacycollege.org</li>
                            <li><i class="fa fa-globe"></i>www.senguntharpharmacycollege.org</li>
                        </ul>
                        <ul class="social list-inline mt-5">
                            <li><a href="https://www.facebook.com/retterikumaranhospital"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2FRetterikumaran1"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://support.google.com/"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 my-5 map" >
                    <div class="embed-responsive embed-responsive-16by9" style="height: 100%;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31290.075042885695!2d77.91597220387258!3d11.38869765418794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babdf6778d52f25%3A0x5ff9de9dc438f5a8!2sSenghundhar%20College%20of%20Pharmacy!5e0!3m2!1sen!2sin!4v1704889349764!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form-area pb--40">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="cnt-title">
                        <h4>Get in touch <span>with us</span></h4>
                        <p>We Inform you later.  Please fill the below details.</p>
                    </div>
                </div>
            </div>
            <div class="contact-form col-lg-5 mx-auto text-center">
                <form action="contact_email.php" id="form" method="POST" name="form">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Enter your name" id="name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="Your Email" id="email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="phone" placeholder="Number" id="phone" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="subject" placeholder="Subject" id="subject" required>
                        </div>
                        <div class="col-12">
                            <textarea class="h-75" name="message" id="message" placeholder="Your message here" value="msg" required></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" name="submit" id="submit" onclick=" showPopup()" >SEND TO US</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="popupContainer" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #fff; padding: 20px; border: 1px solid #ccc; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); z-index: 9999;">
        <div id="popupContent" class="mb-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
            </svg>
            <div class="text-center">
                <h1>Thank You!</h1>
                <p style="line-height:1em;">Your information was successfully submitted.</p>
                <p style="font-style: italic;">We'll contact you when a decision is made.</p>
                <button class="btn btn-primary" id="closeButton" onclick="closePopup()">Close</button>
            </div>
        </div>
    </div>

<!-- footer area start -->
<?php include("footer.php"); ?>
<!-- footer area end -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function showPopup() {
        // Display the popup container
        $("#popupContainer").show();
    }

    function closePopup() {
        // Hide the popup container
        $("#popupContainer").hide();
        // You can redirect the user to another page or perform additional actions after closing the popup
    }

    function validateForm() {
        // Check if all validations passed
        showPopup();
    }
</script> 
</body>

</html>
