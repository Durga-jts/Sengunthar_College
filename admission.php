<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admission</title>
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
    @media screen and (max-width: 600px) {
            h2{
                text-align:center;
            }
        }
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

    <!-- header start -->
    <?php include("header.php"); ?>
    <!-- header area end -->

    <!-- offset search area start -->
    <!-- <div class="offset-search">
        <form action="#">
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
                <h4 class="crumb-title"><span>Admission</span></h4>
            </div>
        </div>
    </div>
    <!-- apply content start -->
    <div class="about-area ">
        <div class="container-fluid">
            <div class="row justify-content-center mt-4">
                <div class="section-title">
                    <h2><span>Apply this form to admission</span></h2>
                
                    <form onsubmit="return validateForm()" action="admission_email.php" class="apply_form bg_dark_9 p-5 mt-5"  name="myform" id="myform"  method="POST">
                        <div class="content mb-5">
                            <h3 class="primary-color">College Admissions Form</h3>
                            <p>Enter your admission information below</p>
                            
                            <hr></hr>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_first_name">Enter First Name</label>
                                    <input type="text" class="form-control" id="user_first_name" name="user_first_name"placeholder="First Name" required style="height:41px;">
                                    <span class="validation-message" id="first-name-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_last_name">Enter Last Name</label>
                                    <input type="text" class="form-control" id="user_last_name" name="user_last_name" placeholder="Last Name" required style="height:41px;">
                                    <span class="validation-message" id="last-name-validation"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control" name="dob" id="dob" style="height:41px;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <select id="gender" class="form-control" id="gender" name="gender" style="height:41px;">
                                      <option value="" class="form-control">Select Gender</option>
                                      <option value="male" class="form-control">Male</option>
                                      <option value="female" class="form-control">Female</option>
                                      <option value="other" class="form-control">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user_class">Course</label>
                                    <select class="form-control" name="course_class" id="course_class"  style="height:41px;">
                                        <option>Choose one</option>
                                        <option>B.Pharm (Bachelor of Pharmacy)</option>
                                        <option>D.Pharm (Diploma in Pharmacy)</option>
                                        <option>M.Pharm (Master of Pharmacy)</option>
                                        <option>Doctor of Pharmacy(Pharm.D)</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_last_name">Email</label>
                                    <input type="text" class="form-control" name="user_email" id="user_email" placeholder="example@gmail.com" style="height:41px;">
                                    <span class="validation-message" id="email-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_last_name">Phone Number</label>
                                    <input type="number" class="form-control" id="user_phone" name="user_phone" placeholder="xxxxxxxxxx" style="height:41px;">
                                    <span class="validation-message" id="phone-validation"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="guardian_first_name">Parents/ Guardian Name</label>
                                    <input type="text" id="guardian_first_name" name="guardian_first_name" class="form-control" placeholder="Name" required style="height:41px;">
                                    <span class="validation-message" id="guardian-name-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="guardian_last_name">Parents/ Guardian Occupation</label>
                                    <input type="text" id="guardian_occupation" name="guardian_occupation" class="form-control" placeholder="Occupation..." style="height:41px;">
                                    <span class="validation-message" id="guardian-occupation-validation"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="std_address">Student's Address</label>
                                    <input type="text" id="std_address" name="std_address" class="form-control" placeholder="State Address" style="height:41px;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_city">City</label>
                                    <input type="text" id="user_city" name="user_city" class="form-control" placeholder="City" style="height:41px;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_last_name">State</label>
                                    <input type="text" id="user_state" name="user_state" class="form-control" placeholder="State" style="height:41px;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_city">Pincode</label>
                                    <input type="text" id="user_pincode" name="user_pincode" class="form-control" placeholder="Pincode" style="height:41px;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_last_name">Country</label>
                                    <input type="text" id="user_country" name="user_country" class="form-control" placeholder="Country" style="height:41px;">
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                        <button type="submit" name="submit" class="btn btn-primary" id="nextStep">Submit</button>
                        </div>   
                    </form>
                
                
            </div>
            </div>
        </div>
    </div>

    <!-- footer start -->
    <?php include("footer.php"); ?>
    <!-- footer area end -->

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
        showPopup();
    }
</script> 
</body>

    </html>
