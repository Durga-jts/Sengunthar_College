<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities</title>

     <!--  Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!--  jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!--  Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!--  Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!--  Font Awesome (if used) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="styles.css">
<style>
    .facilities-content_section li{
  list-style-type: none;
}
.zoom-image {
            width: 40%;
            max-height: 80%;
            /* border:1px solid rgb(149 34 15); */
            border-radius: 5%;
            transition: transform 0.3s ease-in-out;
        }

        @media screen and (max-width: 600px) {
            .zoom-image {
                height:20%;
            }
        }
</style>
</head>


<body>
    
<!-- /* Header */ -->
<?php include("header.php"); ?>

    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Facilities</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end --> 

<section class="facilities-content_section">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-3">
                <div class="faq_question_widget shadow_box ">
                    <div class="widget_list">
                        <ul class="list_details" onclick="activateMenuItem(event)">
                            <li class="py-4"><a href="facilities.php" class="sidemenu_active ">Library</a></li>
                            <li class="py-4"><a href="facilities-auditorium.php" class="">Auditorium & Halls</a></li>
                            <li class="py-4"><a href="facilities-machineroom.php" class="">Machine Room</a></li>
                            <li class="py-4"><a href="facilitites-com-lab.php" class="">Computer Lab</a></li>
                            <li class="py-4"><a href="facilities-trasportation.php" class="">Transportation and Hostels</a></li>
                        </ul>
                    </div>
                </div>
            </div>
                <!-- Machine Rooms Start -->
                <div class="col-lg-9">
                <div class="row my-5" id="rooms">
                    <div class="col-lg-12" style="display: flex;">
                        <div class="about_content mr-5" style="flex:1;align-items: center;justify-content: space-between;flex-wrap: wrap; max-width:100%;">
                            <h3>Machine Rooms</h3>
                            <p class="text-justify">The Machine Room at Senghundhar College of Pharmacy serves as a platform for hands-on experience in pharmaceutical unit operations. It is equipped with machinery for the manufacture of various solid, liquid, and semi-solid formulations. Instruments include ampoule filling and sealing machines, ball mills, capsule filling machines, coating pans, and more. This facility supports the practical learning required for pharmaceutical dosage forms and drug delivery system development.</p>
                            <h4>Safety Measures</h4>
                            <ul class="cs_course_syslebus">
                                <li>
                                    <i class="fa fa-check mt-3 mb-4"></i>
                                    All the machines present in this room are properly maintained.
                                </li>
                                <li>
                                    <i class="fa fa-check mb-4"></i>
                                    This room is well ventilated.
                                </li>
                                <li>
                                    <i class="fa fa-check mb-4"></i>
                                    Before entering this user should wear aprons.
                                </li>
                                <li>
                                    <i class="fa fa-check mb-4"></i>
                                    All the machines in this room will be standard operating procedures and entry log books.
                                </li>
                               
                                <li>
                                    <i class="fa fa-check mt-4"></i>
                                    The cleanliness of this room is regularly maintained.
                                </li>
                                
                                
                            </ul>
                        </div>
                       
                        <img src="sengunthar college of pharmacy content\sengunthar college of pharmacy\DSC_4020.jpg" alt="Library Image" class="zoom-image">
                        
                    </div>
                </div>
                </div>
                <hr>
                <!-- Machine Room End -->
                </div>

        </div>
    </div>
</section>
<script>
//     function activateMenuItem(event) {
//         // Check if the clicked element is an anchor tag
//         if (event.target.tagName === 'A') {
//             // Remove the sidemenu_active class from all items
//             var menuItems = document.querySelectorAll('.list_details li a');
//             menuItems.forEach(function (menuItem) {
//                 menuItem.classList.remove('sidemenu_active');
//             });

//             // Add the sidemenu_active class to the clicked item
//             event.target.classList.add('sidemenu_active');
//         }
//     }

//     document.addEventListener('DOMContentLoaded', function() {
//     // Get the section ID from the URL
//     var section = window.location.hash.substring(1);

//     // Show the corresponding content based on the section
//     if (section) {
//         var sectionElement = document.getElementById(section);
//         if (sectionElement) {
//             // Scroll to the section
//             sectionElement.scrollIntoView();
            
//             // Optionally, you can add a class or other styling to highlight the selected section
//             sectionElement.classList.add('highlighted-section');
//         }
//     }
// });

</script>
<!-- /* Footer */ -->
<?php include("footer.php"); ?>
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