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
        .bg_dark_9 {
    background-color: #f5f5f5;
}
.form-group {
    margin-bottom: 1rem;
}
.form-control{
    line-height: 2.5;
    font-size: 1em;
}
.validation-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
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
    <!-- header area start -->

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
                <h4 class="crumb-title"><span>Admission</span></h4>
            </div>
        </div>
    </div>
    <!-- apply content start -->
    <div class="about-area ptb--10">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="section-title">
                    <h2><span>Apply this form to admission</span></h2>
                
                    <form action="#" class="apply_form bg_dark_9 p-5 mt-5" id="blog1" >
                        <div class="content mb-5">
                            <h3 class="primary-color">College Admissions Form</h3>
                            <p>Enter your admission information below</p>
                            
                            <hr></hr>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_first_name">Enter First Name</label>
                                    <input type="text" class="form-control" id="user_first_name" placeholder="First Name" required>
                                    <span class="validation-message" id="first-name-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_last_name">Enter Last Name</label>
                                    <input type="text" class="form-control" id="user_last_name" placeholder="Last Name" required>
                                    <span class="validation-message" id="last-name-validation"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control" name="dob">
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user_class">Class you want to apply for*</label>
                                    <select name="user_class" class="form-control" id="user_class"   style="height:3.3em;">
                                        <option value="5">Choose one</option>
                                        <option value="1">B.Pharm (Bachelor of Pharmacy)</option>
                                        <option value="2">D.Pharm (Diploma in Pharmacy)</option>
                                        <option value="3">M.Pharm (Master of Pharmacy)</option>
                                        <option value="4">Doctor of Pharmacy(Pharm.D)</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_last_name">Email</label>
                                    <input type="text" class="form-control" id="user_email" placeholder="example@gmail.com">
                                    <span class="validation-message" id="email-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_last_name">Phone Number</label>
                                    <input type="number" class="form-control" id="user_phone" placeholder="xxxxxxxxxx">
                                    <span class="validation-message" id="phone-validation"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="guardian_first_name">Parents/ Guardian Name</label>
                                    <input type="text" id="guardian_first_name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="guardian_last_name">Parents/ Guardian Occupation</label>
                                    <input type="text" id="guardian_occupation" class="form-control" placeholder="Occupation...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="std_address">Student's Address</label>
                                    <input type="text" id="std_address" class="form-control" placeholder="State Address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_city">City</label>
                                    <input type="text" id="user_city" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_last_name">State</label>
                                    <input type="text" id="user_state" class="form-control" placeholder="State">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_city">Pincode</label>
                                    <input type="number" id="user_pincode" class="form-control" placeholder="Pincode">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_last_name">Country</label>
                                    <input type="text" id="user_country" class="form-control" placeholder="Country">
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-4">
                        <a href="#" class="btn btn-primary" onclick="validateForm()">Next</a>
                    </div>   
                    </form>
                 <!-- College Application End  -->
                <!-- Class XII Start-->
                <form action="#" class="apply_form bg_dark_9 p-5 mt-5" id="blog2" style="display: none;">
                    <div class="content mb-5">
                        <h3 class="primary-color">Education</h3>
                        <h4>Class XII</h4>
                        <hr></hr>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_first_name">Name of the School</label>
                                <input type="text" id="name_schl" class="form-control"  placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_last_name">Board</label>
                                <input type="date" id="board" class="form-control" name="dob">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_first_name">XII Mark</label>
                                <input type="number" id="mark" class="form-control"  placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_last_name">Out of</label>
                                <input type="number" id="out_of" class="form-control"  placeholder="">
                            </div>
                        </div>
                    </div>
                <div class="row">
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="std_address">School Address</label>
                                <input type="text" id="std_address" class="form-control" placeholder="School Address">
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="std_city"></label>
                                <input type="text" id="user_city" class="form-control mt-2" placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="std_city"></label>
                                <input type="text" id="user_state" class="form-control mt-2" placeholder="State">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="std_city"></label>
                                <input type="text" id="user_country" class="form-control mt-2" placeholder="Country">
                            </div>
                        </div>     
                </div>  
                 <!-- Class XII  End--> 
                <!-- Class X  -->
                <div class="content mb-5"> 
                    <h4>Class X</h4>
                    <hr></hr>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_first_name">Name of the School</label>
                            <input type="text" id="name_schl1" class="form-control"  placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_last_name">Board</label>
                            <input type="date" id="board1" class="form-control" name="dob">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_first_name">X Mark</label>
                            <input type="number" id="mark1" class="form-control"  placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_last_name">Out of</label>
                            <input type="number" id="out_of1" class="form-control"  placeholder="">
                        </div>
                    </div>
                </div>
            <div class="row">
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="std_address">School Address</label>
                            <input type="text" id="std_address1" class="form-control" placeholder="School Address">
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="std_city"></label>
                            <input type="text" id="user_city1" class="form-control mt-2" placeholder="City">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="std_city"></label>
                            <input type="text" id="user_state1" class="form-control mt-2" placeholder="State">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="std_city"></label>
                            <input type="text" id="user_country1" class="form-control mt-2" placeholder="Country">
                        </div>
                    </div>     
            </div>  
             <!-- Class X  End-->
             <!-- Class XI Start-->
             <div class="content mb-5"> 
                <h4>Class XI</h4>
                <hr></hr>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_first_name">Name of the School</label>
                        <input type="text" id="name_schl2" class="form-control"  placeholder="First Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_last_name">Board</label>
                        <input type="date" id="board2" class="form-control" name="dob">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_first_name">XI Mark</label>
                        <input type="number" id="mark2" class="form-control"  placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_last_name">Out of</label>
                        <input type="number" id="out_of2" class="form-control"  placeholder="">
                    </div>
                </div>
            </div>
        <div class="row">
            
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="std_address">School Address</label>
                        <input type="text" id="std_address2" class="form-control" placeholder="School Address">
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="std_city"></label>
                        <input type="text" id="user_city2" class="form-control mt-2" placeholder="City">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="std_city"></label>
                        <input type="text" id="user_state2" class="form-control mt-2" placeholder="State">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="std_city"></label>
                        <input type="text" id="user_country2" class="form-control mt-2" placeholder="Country">
                    </div>
                </div>     
        </div>  
                <div class="d-flex justify-content-between mt-4">
                    <a href="#" class="btn btn-primary" onclick="show2()">Back</a>
                    <a href="#" class="btn btn-primary" onclick="validateform2()">Next</a>
                </div>
                 <!-- Class XI End -->
                </form> 

                <form action="#" class="apply_form bg_dark_9 p-5 mt-5" id="blog3" style="display: none;">
                    <div class="content mb-5">
                        <h3 class="primary-color">Admission Fee</h3>
                        <h4>Payment Details</h4>
                        <hr></hr>
                    </div>
                    Accepted Card <br>
				<img src="assets/images/card1.png" width="108">
				<img src="assets/images/card2.png" width="50">
               
				<div class="row mt-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_first_name">Credit card number</label>
                            <input type="number" class="form-control"  placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_class">Exp Month</label>
                            <!-- <select name="user_class" id="user_class" class="form-control"  style="height:3.3em;">
                                <option value="5">Choose one</option>
                                <option value="1">B.Pharm (Bachelor of Pharmacy)</option>
                                <option value="2">D.Pharm (Diploma in Pharmacy)</option>
                                <option value="3">M.Pharm (Master of Pharmacy)</option>
                                <option value="4">Doctor of Pharmacy(Pharm.D)</option>
                                
                            </select> -->
                            <select name="user_class" id="user_class" class="form-control"  style="height:3.3em; font-size:1em;">
                                <option>Choose Month..</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_class">Exp Year</label>
                            <!-- <select name="user_class" id="user_class" class="form-control"  style="height:3.3em;">
                                <option value="5">Choose one</option>
                                <option value="1">B.Pharm (Bachelor of Pharmacy)</option>
                                <option value="2">D.Pharm (Diploma in Pharmacy)</option>
                                <option value="3">M.Pharm (Master of Pharmacy)</option>
                                <option value="4">Doctor of Pharmacy(Pharm.D)</option>
                                
                            </select> -->
                           <select name="user_class" id="user_class" class="form-control"  style="height:3.3em;  font-size:1em;">
                                <option>Choose Year..</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_class">CVV</label>
                            <input type="number" class="form-control"  placeholder="">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <a href="#" class="btn btn-primary" onclick="show4()">Back</a>
                    <a href="#" class="btn btn-primary" onclick="validateform3()">Submit</a>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- /* Footer */ -->
<?php include("footer.php"); ?>
    </body>
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
    <script>
        function show1() {
            document.getElementById("blog1").style.display = "none";
            document.getElementById("blog2").style.display = "block";
            document.getElementById("blog3").style.display = "none"; // hide payment form
        }
    
        function show2() {
            document.getElementById("blog1").style.display = "block";
            document.getElementById("blog2").style.display = "none";
            document.getElementById("blog3").style.display = "none"; // hide payment form
        }
    
        function show3() {
            document.getElementById("blog1").style.display = "none";
            document.getElementById("blog2").style.display = "none";
            document.getElementById("blog3").style.display = "block"; // show payment form
        }
        function show4() {
            document.getElementById("blog1").style.display = "none";
            document.getElementById("blog2").style.display = "block";
            document.getElementById("blog3").style.display = "none"; // show payment form
        }
    </script>
<script>
    function validateForm() {
         // Validate First Name
         var firstName = $('#user_first_name').val();
         if (firstName.length < 3) {
             $('#user_first_name').focus();
             $('#first-name-validation').text('Please enter a valid first name with a minimum of 3 letters.');
             return;
         } else {
             $('#first-name-validation').text('');
         }
 
         // Validate Last Name
         var lastName = $('#user_last_name').val();
         if (lastName.length < 3) {
             $('#user_last_name').focus();
             $('#last-name-validation').text('Please enter a valid last name with a minimum of 3 letters.');
             return;
         } else {
             $('#last-name-validation').text('');
         }
 
         // Validate Date of Birth
         var dob = $('[name="dob"]').val();
         if (!dob) {
            
             
             // Set focus on the Date of Birth input field
             $('[name="dob"]').focus();
             
             return;
         }
 
         // Validate Gender
         var gender = $('[name="gender"]').val();
         if (!gender) {
              // Set focus on the Date of Birth input field
              $('[name="gender"]').focus();
             return;
         }
 
         // Validate Class
         var user_class = $('[name="user_class"]').val();
         if (!user_class) {
             $('[name="user_class"]').focus();
             return;
         }
 
         // Validate Email
         var email = $('#user_email').val();
         if (!email || !isValidEmail(email)) {
             $('#user_email').focus();
             $('#email-validation').text('Please enter a valid email address.');
             return;
         } else {
             $('#email-validation').text('');
         }
 
         // Validate Phone Number
         var phoneNumber = $('#user_phone').val();
         if (!phoneNumber || !isValidPhoneNumber(phoneNumber)) {
             $('#user_phone').focus();
             $('#phone-validation').text('Please enter a valid phone number.');
             return;
         } else {
             $('#phone-validation').text('');
         }
        
       
         
         
         // Validate Parents/Guardian Name
         var guardianName = $('#guardian_first_name').val();
         if (!guardianName) {
             // alert('Please enter the parents/guardian name.');
             $('#guardian_first_name').focus();
             return;
         }
 
         // Validate Parents/Guardian Occupation
         var guardianOccupation = $('#guardian_occupation').val();
         if (!guardianOccupation) {
             $('#guardian_occupation').focus();
             // alert('Please enter the parents/guardian occupation.');
             return;
         }
 
         // Validate Student's Address
         var studentAddress = $('#std_address').val();
         if (!studentAddress) {
             $('#std_address').focus();
             // alert('Please enter the student\'s address.');
             return;
         }
 
         // Validate City
         var city = $('#user_city').val();
         if (!city) {
             $('#user_city').focus();
             // alert('Please enter the city.');
             return;
         }
 
         // Validate State
         var state = $('#user_state').val();
         if (!state) {
             $('#user_state').focus();
             // alert('Please enter the state.');
             return;
         }
 
         // Validate Pincode
         var pinCode = $('#user_pincode').val();
if (!pinCode || !isValidPinCode(pinCode)) {
    $('#user_pincode').focus();
    $('#pincode-validation').text('Please enter a valid 6-digit pin code.');
    return;
} else {
    $('#pincode-validation').text('');
}
 
         // Validate Country
         var country = $('#user_country').val();
         if (!country) {
             $('#user_country').focus();
             // alert('Please enter the country.');
             return;
         }
 
         // If all validations pass, you can proceed to the next page or perform other actions
         document.getElementById("blog1").style.display = "none";
             document.getElementById("blog2").style.display = "block";
             document.getElementById("blog3").style.display = "none"; 
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
     function isValidPinCode(pinCode) {
    // You can implement a more sophisticated pin code validation if needed
    var pinCodeRegex = /^\d{6}$/;
    return pinCodeRegex.test(pinCode);
}

// function isValidMark(mark) {
//     // You can modify this validation based on your specific requirements
//     var markRegex = /^\d{2,4}$/;
//     return markRegex.test(mark);
// }
 </script>

<script>
    function validateform2(){
        var name_schl = $('#name_schl').val();
                if (!name_schl) {
                    $('#name_schl').focus();
                    return;
                }
                var board = $('#board').val();
                if (!board) {
                    $('#board').focus();
                    return;
                }
//                 var mark = $('#mark').val();
// if (!mark || !isValidMark(mark)) {
//     $('#mark').focus();
//     $('#mark-validation').text('Please enter a valid mark (2 to 4 digits).');
//     return;
// } else {
//     $('#mark-validation').text('');
// }
                var out_of = $('#out_of').val();
                if (!out_of) {
                    $('#out_of').focus();
                    return;
                }
                var studentAddress = $('#std_address').val();
                if (!studentAddress) {
                    $('#std_address').focus();
                    // alert('Please enter the student\'s address.');
                    return;
                }
        
                // Validate City
                var city = $('#user_city').val();
                if (!city) {
                    $('#user_city').focus();
                    // alert('Please enter the city.');
                    return;
                }
        
                // Validate State
                var state = $('#user_state').val();
                if (!state) {
                    $('#user_state').focus();
                    // alert('Please enter the state.');
                    return;
                }
        
                // Validate Pincode
                var pincode = $('#user_pincode').val();
                if (!pincode) {
                    $('#user_pincode').focus();
                    // alert('Please enter the pincode.');
                    return;
                }
        
                // Validate Country
                var country = $('#user_country').val();
                if (!country) {
                    $('#user_country').focus();
                    // alert('Please enter the country.');
                    return;
                }
                var name_schl1 = $('#name_schl1').val();
                if (!name_schl1) {
                    $('#name_schl1').focus();
                    return;
                }
                var board1 = $('#board1').val();
                if (!board1) {
                    $('#board1').focus();
                    return;
                }
                var mark1 = $('#mark1').val();
                if (!mark1) {
                    $('#mark1').focus();
                    return;
                }
                var out_of1 = $('#out_of1').val();
                if (!out_of1) {
                    $('#out_of1').focus();
                    return;
                }
                var studentAddress1 = $('#std_address1').val();
                if (!studentAddress1) {
                    $('#std_address1').focus();
                    // alert('Please enter the student\'s address.');
                    return;
                }
        
                // Validate City
                var city1 = $('#user_city1').val();
                if (!city1) {
                    $('#user_city1').focus();
                    // alert('Please enter the city.');
                    return;
                }
        
                // Validate State
                var state1 = $('#user_state1').val();
                if (!state1) {
                    $('#user_state1').focus();
                    // alert('Please enter the state.');
                    return;
                }

            
        
                // Validate Country
                var country1 = $('#user_country1').val();
                if (!country1) {
                    $('#user_country1').focus();
                    // alert('Please enter the country.');
                    return;
                }
                var name_schl2 = $('#name_schl2').val();
                if (!name_schl2) {
                    $('#name_schl2').focus();
                    return;
                }
                var board2 = $('#board2').val();
                if (!board2) {
                    $('#board2').focus();
                    return;
                }
                var mark2 = $('#mark2').val();
                if (!mark2) {
                    $('#mark2').focus();
                    return;
                }
                var out_of2 = $('#out_of2').val();
                if (!out_of2) {
                    $('#out_of2').focus();
                    return;
                }
                var studentAddress2 = $('#std_address2').val();
                if (!studentAddress2) {
                    $('#std_address2').focus();
                    // alert('Please enter the student\'s address.');
                    return;
                }
        
                // Validate City
                var city2= $('#user_city2').val();
                if (!city2) {
                    $('#user_city2').focus();
                    // alert('Please enter the city.');
                    return;
                }
        
                // Validate State
                var state2 = $('#user_state2').val();
                if (!state2) {
                    $('#user_state2').focus();
                    // alert('Please enter the state.');
                    return;
                }
                var country2 = $('#user_country2').val();
                if (!country2) {
                    $('#user_country2').focus();
                    // alert('Please enter the country.');
                    return;
                }
                document.getElementById("blog1").style.display = "none";
            document.getElementById("blog2").style.display = "none";
            document.getElementById("blog3").style.display = "block";
    }
</script>

<script>
    function validateform3(){

    }
</script>



    </html>
