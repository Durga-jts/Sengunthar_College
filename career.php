<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sengunthar College of Pharmacy</title>
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
                    <h2 class="text-center"><span>Career</span></h2>
                    <form   onsubmit="showThankYouMessage(); return false;" class="apply_form p-5 mt-3" name="careerForm" id="careerForm">

                        <!-- First Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <span class="validation-message" id="first-name-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <span class="validation-message" id="email-validation"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
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
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control" name="dob" id="dob" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <select id="gender" class="form-control" name="gender" style="height:3.3em;">
                                      <option value="" class="form-control">Select Gender</option>
                                      <option value="male" class="form-control">Male</option>
                                      <option value="female" class="form-control">Female</option>
                                      <option value="other" class="form-control">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Second Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Phone Number -->
                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="number" class="form-control" id="phone" name="phone" required>
                                    <span class="validation-message" id="phone-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Resume -->
                                <div class="form-group">
                                    <label for="resume">Resume:</label>
                                    <input type="file" class="form-control" id="resume" name="resume" accept=".pdf, .doc, .docx" required>
                                </div>
                            </div>
                        </div>
    
                        <div id="greetingContainer" class="vh-70 d-none justify-content-center align-items-center">
    <div>
        <div class="mb-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor"
                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
        </div>
        <div class="text-center">
            <h1>Thank You !</h1>
            <p style="line-height:1em;">Your Information was successfully submitted.</p>
            <p style="font-style: italic;">We'll contact you when a decision is made.</p>
            <button class="btn btn-primary" id="closeButton" onclick="nextpage()">Close</button>
        </div>
    </div>
</div>

                        <!-- Submit Button -->
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-primary" onclick="validateForm()">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Thank You message box -->
    <div id="thankYouMessage">
        Thank you for submitting the form!
    </div>
   <!-- footer area start -->
<?php include("footer.php"); ?>
<!-- footer area end -->
<script>
   function showThankYouMessage() {
    // Hide the form
    document.getElementById('careerForm').style.display = 'none';
    
    // Show the thank you message
    document.getElementById('thankYouMessage').style.display = 'block';
}


function validateForm() {

    var Name = $('#name').val();
    if (Name.length < 3) {
        $('#name').focus();
        $('#first-name-validation').text('Please enter a valid name.');
        return;
    } else {
        $('#first-name-validation').text('');
    }


    
    var email = $('#email').val();
    if (!email || !isValidEmail(email)) {
        $('#email').focus();
        $('#email-validation').text('Please enter a valid email address.');
        return;
    } else {
        $('#email-validation').text('');
    }
    
    var selectedCourse = $('#course_class').val();

if (selectedCourse === 'Choose one') {
    $('#course_class').focus();
    return;
}
    var dob = $('[name="dob"]').val();
    if (!dob) {
       
        
        $('[name="dob"]').focus();
        
        return;
    }
    var gender = $('#gender').val();
         if (!gender) {
             $('#gender').focus();
             
             return;
         }


    var phoneNumber = $('#phone').val();
    if (!phoneNumber || !isValidPhoneNumber(phoneNumber)) {
        $('#phone').focus();
        $('#phone-validation').text('Please enter a valid phone number.');
        return;
    } else {
        $('#phone-validation').text('');
    }
    var resume = $('[name="resume"]').val();
    if (!resume) {
       
        
        $('[name="resume"]').focus();
        
        return;
    }
    
}
function isValidEmail(email) {
         // You can implement a more sophisticated email validation if needed
         var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         return emailRegex.test(email);
     }
 
     function isValidPhoneNumber(phoneNumber) {
         // You can implement a more sophisticated phone number validation if needed
         var phoneRegex = /^\d{10}$/;
         return phoneRegex.test(phoneNumber);
     }

       // mail function
    //    $(document).ready(function () {
    //             $("form").submit(function (e){
    //             e.preventDefault();
    //             var formData = {
    //                     name: $("#name").val(),
    //                     email: $("#email").val(),
    //                     course: $("#course_class").val(),
    //                     dob: $("#dob").val(),
    //                     gender: $("#gender").val(),
    //                     num: $("#phone").val(),
    //                     // resume: $("#resume").val(),
                       
    //                 };
    //                 console.log(formData)
    //                 $.ajax({
    //                     url: "career-process_form.php",
    //                     type: "POST",
    //                     data: formData,
    //                     // beforeSend: function() {
    //                     //     n.html("<div class='alert alert-info'><p>Loading ...</p></div>")
    //                     // },
    //                     success: function(data) {
    //                         $("#careerForm").trigger('reset'); // Reset the form
    //                         alert(data)
    //                     },
    //                     error: function() {
    //                         n.html("<div class='alert alert-success'><p>Error !!!</p></div>")
    //                     }
    //                 })
    //             })


    //         })
</script>
 <!-- jquery latest version -->
 <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
 <!-- bootstrap 4 js -->
 <script src="assets/js/bootstrap.min.js"></script>
 <!-- others plugins -->
 <script src="assets/js/owl.carousel.min.js"></script>
 <script src="assets/js/jquery.magnific-popup.min.js"></script>
 <script src="assets/js/jquery.slicknav.min.js"></script>
 <script src="assets/js/plugins.js"></script>
 <script src="assets/js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>