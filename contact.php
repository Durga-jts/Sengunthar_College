<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sri Kumaran School of Nursing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--color css-->
    <link rel="stylesheet" id="triggerColor" href="assets/css/triggerplate/color-0.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- prealoader area end -->

    <!-- /* Header */ -->
<?php include("header.php"); ?>
    <!-- header area end -->
    
    <!-- offset search area start -->
    <div class="offset-search">
        <form action="#">
            <input type="text" name="search" placeholder="Search here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- offset search area end -->
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Contact </span>Us</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- contact info area start -->
    <div class="contact-info mt-2 ptb--10">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cnt-info">
                        <h4>Contact Info</h4>
                        <p>Kumaramangalam Post, Tiruchengode, Namakkal Dt. ,Tamil Nadu - 637205.</p>
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
                <div class="col-lg-7">
                    <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31290.075042885695!2d77.91597220387258!3d11.38869765418794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babdf6778d52f25%3A0x5ff9de9dc438f5a8!2sSenghundhar%20College%20of%20Pharmacy!5e0!3m2!1sen!2sin!4v1704889349764!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info area end -->
    <!-- contact form area start -->
    <div class="contact-form-area pb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="cnt-title">
                        <h4>Get in touch <span>with us</span></h4>
                        <p>We Inform you later.  Please fill the below details.</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form id="form" method="POST" name="form">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="name_st" placeholder="Enter your name" id="name" required 
                            oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                            oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-md-4">
                            <input type="email" name="emailid" placeholder="Your Email" id="emailid" required 
                            oninvalid="validateEmail(this)"
                            oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-md-4">
                            <input type="subject" name="subject" placeholder="Subject" id="subject" required 
                            oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                            oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-12">
                            <textarea name="msg" id="msg" placeholder="Your message here" value="msg" required 
                            oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                            oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" name="submit" id="submit" onclick="validate()">SEND TO US</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- contact form area end --> 

    <!-- thank you message area start -->
    <!-- <div class="vh-100 d-flex justify-content-center align-items-center" id="greeting">
        <div>
            <div class="mb-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                    fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
            </div>
            <div class="text-center">
                <h1>Thank You !</h1>
                <p style="font-size: 1.4em;">Your Information was successfully submitted.</p>
                <p style="font-style: italic;">We'll contact you when a decision is made.</p>
                <!-- <button class="btn btn-primary" onclick="NxtPage()">Back Home</button> -->
            <!-- </div>
        </div>
    thank you message area end  --> -->

    <!-- footer area start -->
<?php include("footer.php"); ?>
    <!-- footer area end -->
 

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&#038"></script>
    <script src="assets/js/google-maps.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
<script>
function validate() {
    const form = document.querySelector("#form")
   const submitButton = document.querySelector("#submit")
   const scriptURL = 'https://script.google.com/macros/s/AKfycbzzt22FtWbuI6nCdiCZsqpfmNX4nb0SpCbvV66GFktOLgQyZLJewju66-FpUDhHQqJU2A/exec'
                                 
   form.addEventListener('submit', e => {
     submitButton.disabled = true;
     e.preventDefault();

     let requestBody = new FormData(form);
     fetch(scriptURL, {method: 'POST', body: requestBody,})
       .then(response => {
        //   alert('Success!', response);
          submitButton.disabled = false;

          const greetingContainer = document.createElement('div');
                greetingContainer.className = 'vh-100 d-flex justify-content-center align-items-center';
                greetingContainer.id = 'greeting';

                greetingContainer.innerHTML = `
                    <div>
                        <div class="mb-4 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                                fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h1>Thank You !</h1>
                            <p style="line-height:1em;">Your Information was successfully submitted.</p>
                            <p style="font-style: italic;" >We'll contact you when a decision is made.</p>
                            <button class="btn btn-primary"  id="closeButton" onclick="nextpage()">Close</button>
                        </div>
                    </div>
                `;

                document.body.appendChild(greetingContainer);

                // Add event listener to close button
                const closeButton = document.getElementById('closeButton');
                closeButton.addEventListener('click', () => {
                    document.body.removeChild(greetingContainer);
                });
            })
            .catch(error => {
                alert('Error!', error.message);
                submitButton.disabled = false;
            });
    });
}
document.querySelector('#form').addEventListener('submit', function (e) {
    e.preventDefault();
    validate();
});

function validateAge(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.patternMismatch) {
            input.setCustomValidity('Age should only contain numeric characters');
        }
    }

function validateContactNumber(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.patternMismatch) {
            input.setCustomValidity('Number should contain atleast 10 numeric characters');
        }
    }

function validateEmail(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.typeMismatch) {
            input.setCustomValidity('Enter a valid email address. Please include "@" and ".com"');
        }
    }
function nextpage(){
    window.location.href="contact.html";
}


</script> 
</html>