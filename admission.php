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
                
                    <form class="apply_form bg_dark_9 p-5 mt-5"  name="myform" id="myform" >
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
                        <button type="submit" class="btn btn-primary" id="nextStep" onclick="validateForm()">Submit</button>
                        </div>   
                    </form>
                 <!-- College Application End  -->
                    <div id="popupContainer" style="display: none;">
                        <div id="popupContent" class="mb-4 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <div class="text-center">
                                <h1>Thank You !</h1>
                                <p style="line-height:1em;">Your Information was successfully submitted.</p>
                                <p style="font-style: italic;" >We'll contact you when a decision is made.</p>
                                <button class="btn btn-primary"  id="closeButton" onclick="nextpage()">Close</button>
                            </div>
                        </div>
                    </div>
                
            </div>
            </div>
        </div>
    </div>

    
    <script>
        // function showThankYouMessage() {
        //     // Hide the form
        //     document.getElementById('myForm').style.display = 'none';
            
        //     // Show the thank you message
        //     document.getElementById('thankYouMessage').style.display = 'block';
        // }

    <!-- footer start -->
    <?php include("footer.php"); ?>
    <!-- footer area end -->

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
    // <script>
    //     function show1() {
    //         document.getElementById("blog1").style.display = "none";
    //         document.getElementById("blog2").style.display = "block";
    //         document.getElementById("blog3").style.display = "none"; // hide payment form
    //     }
    
    //     function show2() {
    //         document.getElementById("blog1").style.display = "block";
    //         document.getElementById("blog2").style.display = "none";
    //         document.getElementById("blog3").style.display = "none"; // hide payment form
    //     }
    
    //     function show3() {
    //         document.getElementById("blog1").style.display = "none";
    //         document.getElementById("blog2").style.display = "none";
    //         document.getElementById("blog3").style.display = "block"; // show payment form
    //     }
    //     function show4() {
    //         document.getElementById("blog1").style.display = "none";
    //         document.getElementById("blog2").style.display = "block";
    //         document.getElementById("blog3").style.display = "none"; // show payment form
    //     }
    // </script>
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
 
         var selectedCourse = $('#course_class').val();

            if (selectedCourse === 'Choose one') {
                $('#course_class').focus();
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
         var guardian_name = $('#guardian_first_name').val();
         if (guardian_name.length < 3) {
             $('#guardian_first_name').focus();
             $('#guardian-name-validation').text('Please enter a valid name');
             return;
         } else {
             $('#guardian-name-validation').text('');
         }
 
         // Validate Parents/Guardian Occupation
         var guardian_occupation = $('#guardian_occupation').val();
         if (guardian_occupation.length < 3) {
             $('#guardian_occupation').focus();
             $('#guardian-occupation-validation').text('Please enter a valid input');
             return;
         } else {
             $('#guardian-occupation-validation').text('');
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
        //  document.getElementById("blog1").style.display = "none";
        //      document.getElementById("blog2").style.display = "block";
        //      document.getElementById("blog3").style.display = "none"; 
               
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

function isValidMark(mark) {
    // You can modify this validation based on your specific requirements
    var markRegex = /^\d{2,4}$/;
    return markRegex.test(mark);
}
function isoutMark(out_of) {
    // You can modify this validation based on your specific requirements
    var markRegex = /^\d{3,4}$/;
    return markRegex.test(out_of);
}
function isValidMark(mark1) {
    // You can modify this validation based on your specific requirements
    var markRegex = /^\d{2,4}$/;
    return markRegex.test(mark1);
}
function isoutMark(out_of1) {
    // You can modify this validation based on your specific requirements
    var markRegex = /^\d{3,4}$/;
    return markRegex.test(out_of1);
}
function isValidMark(mark2) {
    // You can modify this validation based on your specific requirements
    var markRegex = /^\d{2,4}$/;
    return markRegex.test(mark2);
}
function isoutMark(out_of2) {
    // You can modify this validation based on your specific requirements
    var markRegex = /^\d{3,4}$/;
    return markRegex.test(out_of2);
}

 </script>

<script>
  var nextStep = document.querySelector('#nextStep');

  nextStep.addEventListener('click', function (e) {
    e.preventDefault();
    // Hide first view
    document.getElementById('myform').style.display = 'none';

    // Show thank you message element
    document.getElementById('popupContainer').style.display = 'block';
  });
  function nextpage(){
    window.location.href="admission.php";
}
</script>

<!-- <script>
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
                var mark = $('#mark').val();
                if (!mark || !isValidMark(mark)) {
                    $('#mark').focus();
                    $('#mark-validation').text('Please enter a valid mark.');
                    return;
                } else {
                    $('#mark-validation').text('');
                }
                var out_of = $('#out_of').val();
                if (!out_of || !isoutMark(out_of)) {
                    $('#out_of').focus();
                    $('#outmark-validation').text('Please enter a valid mark.');
                    return;
                } else {
                    $('#outmark-validation').text('');
                }
                
                var address = $('#address').val();
                if (!address) {
                    $('#address').focus();
                    // alert('Please enter the student\'s address.');
                    return;
                }
        
                // Validate City
                var city = $('#city').val();
                if (!city) {
                    $('#city').focus();
                    // alert('Please enter the city.');
                    return;
                }
        
                // Validate State
                var state = $('#state').val();
                if (!state) {
                    $('#state').focus();
                    // alert('Please enter the state.');
                    return;
                }
        
               
        
                // Validate Country
                var country = $('#country').val();
                if (!country) {
                    $('#country').focus();
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
                if (!mark1 || !isValidMark(mark1)) {
                    $('#mark1').focus();
                    $('#mark1-validation').text('Please enter a valid mark.');
                    return;
                } else {
                    $('#mark1-validation').text('');
                }
                var out_of1 = $('#out_of1').val();
                if (!out_of1 || !isoutMark(out_of1)) {
                    $('#out_of1').focus();
                    $('#outmark1-validation').text('Please enter a valid mark.');
                    return;
                } else {
                    $('#outmark1-validation').text('');
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
                if (!mark2 || !isValidMark(mark2)) {
                    $('#mark2').focus();
                    $('#mark2-validation').text('Please enter a valid mark.');
                    return;
                } else {
                    $('#mark2-validation').text('');
                }
                var out_of2 = $('#out_of2').val();
                if (!out_of2 || !isoutMark(out_of2)) {
                    $('#out_of2').focus();
                    $('#outmark2-validation').text('Please enter a valid mark.');
                    return;
                } else {
                    $('#outmark2-validation').text('');
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
            //     document.getElementById("blog1").style.display = "none";
            // document.getElementById("blog2").style.display = "none";
            // document.getElementById("blog3").style.display = "block";
    }

    // mail function
    $(document).ready(function () {
                $("form").submit(function (e){
                e.preventDefault();
                var formData = {
                        name: $("#user_first_name").val(),
                        lname: $("#user_last_name").val(),
                        dob: $("#dob").val(),
                        gender: $("#gender").val(),
                        course: $("#course_class").val(),
                        email: $("#user_email").val(),
                        phone: $("#user_phone").val(),
                        guardian: $("#guardian_first_name").val(),
                        guardian_occ: $("#guardian_occupation").val(),
                        address: $("#std_address").val(),
                        city: $("#user_city").val(),
                        state: $("#user_state").val(),
                        pincode: $("#user_pincode").val(),
                        country: $("#user_country").val(),
                       
                    };
                    console.log(formData)
                    $.ajax({
                        url: "admission-process_form.php",
                        type: "POST",
                        data: formData,
                        // beforeSend: function() {
                        //     n.html("<div class='alert alert-info'><p>Loading ...</p></div>")
                        // },
                        success: function(data) {
                            $("#blog1").trigger('reset'); // Reset the form
                            alert(data)
                        },
                        error: function() {
                            n.html("<div class='alert alert-success'><p>Error !!!</p></div>")
                        }
                    })
                })


            })

</script> -->


    </html>
