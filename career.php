<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Careers</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous" />
    <!--color css-->
    <link rel="stylesheet" id="triggerColor" href="assets/css/triggerplate/color-0.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
        
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- prealoader area end -->

    <!-- header area start -->
    <!-- /* Header */ -->
    <?php include("header.php"); ?>
    <!-- header area end -->

    <!-- offset search area start -->
    <!-- <div class="offset-search">
        <form action="#" >
            <input type="text" name="search" placeholder="Search here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div> -->
    <!-- offset search area end -->
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>careers</span></h4>
            </div>
        </div>
    </div>
    
    <div class="about-area ptb--5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="section-title">
                    <h2 class="text-center"><span>Careers</span></h2>
                    <!-- <div id="popupContainer">
                        <div id="popupContent">
                            
                        </div>
                    </div> -->
                    <!-- <form  class="apply_form p-5 mt-3" name="careerForm" id="careerForm"> -->
                    <form onsubmit="return validateForm()" action="career_email.php" class="apply_form p-5 mt-3" id="careerForm" method="POST" name="careerForm" >

                        <!-- First Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required style="height:41px;">
                                    <span class="validation-message" id="first-name-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <select id="gender" class="form-control" name="gender" style="height:41px;">
                                      <option value="" class="form-control">Select Gender</option>
                                      <option value="male" class="form-control">Male</option>
                                      <option value="female" class="form-control">Female</option>
                                      <option value="other" class="form-control">Other</option>
                                    </select>
                                </div>
                                <!-- Email -->
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user_class">Course</label>
                                    <select class="form-control" name="course_class" id="course_class"  style="height:3.3em;">
                                        <option>Choose one</option>
                                        <option>B.Pharm (Bachelor of Pharmacy)</option>
                                        <option>D.Pharm (Diploma in Pharmacy)</option>
                                        <option>M.Pharm (Master of Pharmacy)</option>
                                        <option>Doctor of Pharmacy(Pharm.D)</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div> -->
                             
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required style="height:41px;">
                                    <span class="validation-message" id="email-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Phone Number -->
                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="number" class="form-control" id="phone" name="phone" required style="height:41px;">
                                    <span class="validation-message" id="phone-validation"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Second Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control" name="dob" id="dob" style="height:41px;" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Resume -->
                                <div class="form-group">
                                    <label for="resume">Resume:</label>
                                    <input type="file" class="form-control" id="resume" name="resume" accept=".pdf, .doc, .docx" required style="height:41px; padding:2px;">
                                </div>
                            </div>
                        </div>
    
                
                        <!-- Submit Button -->
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-primary" id="nextStep" name="submit" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<!-- Popup Container -->
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
        var nameInput = document.getElementById('name');
        var genderInput = document.getElementById('gender');
        var emailInput = document.getElementById('email');
        var phoneInput = document.getElementById('phone');
        var dobInput = document.getElementById('dob');
        var resumeInput = document.getElementById('resume');

        if (nameInput.checkValidity() && genderInput.checkValidity() && emailInput.checkValidity() &&
            phoneInput.checkValidity() && dobInput.checkValidity() && resumeInput.checkValidity()) {
            // If all validations are correct, show the popup
            showPopup();
            return true;
            
        } else {
            // If validations fail, prevent form submission
            return false;
        }
    }
</script>

</body>
</html>
