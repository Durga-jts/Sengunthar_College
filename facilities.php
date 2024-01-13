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

<!-- About Text Content -->
<section class="facilities-content_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="faq_question_widget shadow_box ">
                    <div class="widget_list">
                        <ul class="list_details" onclick="activateMenuItem(event)">
                            <li class="py-4"><a href="#library" class="sidemenu_active ">Library</a></li>
                            <li class="py-4"><a href="#halls" class="">Auditorium & Halls</a></li>
                            <li class="py-4"><a href="#rooms" class="">Machine Room</a></li>
                            <li class="py-4"><a href="#lab" class="">Computer Lab</a></li>
                            <li class="py-4"><a href="#hostel" class="">Transportation and Hostels</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9" id="library">
                <div class="row">
                    <div class="col-lg-12" style="display: flex;">
                        <div class="about_content mr-5" style="flex:1;align-items: center;justify-content: space-between;flex-wrap: wrap; max-width:100%;">
                            <h3>Library</h3>
                            <p class="text-justify">Senghundhar College of Pharmacy's central library is a knowledge treasure featuring a diverse collection of books, national and international journals, internet facilities, and audiovisual aids. The library supports research in various pharmaceutical specialties, including pharmacy practice, pharmacology, pharmaceutical analysis, medicinal chemistry, pharmacognosy, biotechnology, and pharmaceutical sciences. With department libraries complementing the central facility, students have easy access to resources relevant to their specializations. The library, equipped with a photocopier and scanner, plays a pivotal role in catering to the academic and research needs of the institute.</p>
                            <p class="text-justify">A Library is a knowledge treasure. The Library plays a vital role in collecting the scientific and technical information and disseminating it in order to satisfy the current and future needs of the academic and research community. It contains a large number of textbooks and reference books for various pharmaceutical branches and allied subjects. It offers extensive access to journals and periodicals of national and international scientific research.</p>
                
                            <h4>Library Services</h4>
                            <ul class="cs_course_syslebus">
                                <li><i class="fa fa-check"></i> Reading /Referencing</li>
                                <li><i class="fa fa-check"></i> Circulation</li>
                                <li><i class="fa fa-check"></i> International journals</li>
                                <li><i class="fa fa-check"></i> Photocopying</li>
                                <li><i class="fa fa-check"></i> Internet Facilities</li>
                                <li><i class="fa fa-check"></i> New Arrival List</li>
                                <li><i class="fa fa-check"></i> Newspaper Clipping</li>
                                <li><i class="fa fa-check"></i> Laboratories</li>
                            </ul>
                        </div>
                
                        <img src="sengunthar college of pharmacy content\sengunthar college of pharmacy\DSC_4026.jpg" alt="Library Image" class="zoom-image" style="height:60%;">
                    </div>
                </div>
                <hr>
            <!-- <Library ends -->
                <!-- Auditorium  start-->
            
                <div class="row my-5" id="halls">
                    <div class="col-lg-12" style="display: flex;">
                        <div class="about_content mr-5" style="flex:1;align-items: center;justify-content: space-between;flex-wrap: wrap; max-width:100%;">
                            <h3>Auditorium & Halls</h3>
                            <p class="text-justify">Our multipurpose halls serve as versatile spaces for seminars, conferences, and examinations. Furnished with modern audio-visual equipment, including LCD projectors, speakers, and cordless mikes, these halls ensure a conducive environment for dynamic knowledge exchange. Monitored by digital cameras and equipped with metal detectors, our examination halls prioritize a secure and efficient examination process. Lecturer halls and discussion rooms provide additional spaces for interactive learning and faculty-student engagement.</p>
                         
                            <h4>Auditorium & Halls Services</h4>
                            <ul class="cs_course_syslebus">
                                <li>
                                    <i class="fa fa-check"></i>
                                    Conferences
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    Seminars
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    Examination
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    LCD projectors
                                </li>
                               
                                <li>
                                    <i class="fa fa-check"></i>
                                    Discussion Rooms 
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    Digital cameras 
                                </li>
                                
                            </ul>
                        </div>
                        <img src="sengunthar college of pharmacy content\sengunthar college of pharmacy\DSC_4040.jpg" alt="Library Image" class="zoom-image">
                       
                    </div>
                </div>
                <hr>
                <!-- Auditorium Ends -->

                <!-- Machine Rooms Start -->
                <div class="row my-5" id="rooms">
                    <div class="col-lg-12" style="display: flex;">
                        <div class="about_content mr-5" style="flex:1;align-items: center;justify-content: space-between;flex-wrap: wrap; max-width:100%;">
                            <h3>Machine Rooms</h3>
                            <p class="text-justify">The Machine Room at Senghundhar College of Pharmacy serves as a platform for hands-on experience in pharmaceutical unit operations. It is equipped with machinery for the manufacture of various solid, liquid, and semi-solid formulations. Instruments include ampoule filling and sealing machines, ball mills, capsule filling machines, coating pans, and more. This facility supports the practical learning required for pharmaceutical dosage forms and drug delivery system development.</p>
                            <h4>Safety Measures</h4>
                            <ul class="cs_course_syslebus">
                                <li>
                                    <i class="fa fa-check"></i>
                                    All the machines present in this room are properly maintained.
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    This room is well ventilated.
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    Before entering this user should wear aprons.
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    All the machines in this room will be standard operating procedures and entry log books.
                                </li>
                               
                                <li>
                                    <i class="fa fa-check"></i>
                                    The cleanliness of this room is regularly maintained.
                                </li>
                                
                                
                            </ul>
                        </div>
                       
                        <img src="sengunthar college of pharmacy content\sengunthar college of pharmacy\DSC_4020.jpg" alt="Library Image" class="zoom-image">
                        
                    </div>
                </div>
                <hr>
                <!-- Machine Room End -->

                <!-- Computer Lab Start -->
                <div class="row my-5" id="lab">
                    <div class="col-lg-12" style="display: flex;">
                        <div class="about_content mr-5" style="flex:1;align-items: center;justify-content: space-between;flex-wrap: wrap; max-width:100%;">
                            <h3>Computer Lab</h3>
                            <p class="text-justify">Our high-tech computer laboratory houses more than 50 advanced computers with LAN and internet services, LCD projection systems, printers, scanners, and other hardware and software. The internet connection, with a 45 Mbps 1:1 leased line, is available for educational and research purposes. The college also boasts a medicinal garden, featuring a variety of medicinal plants identified by expert taxonomists. This arboretum serves as a conservatory for plants used in primary health care.</p>
                            <h4>Safety Measures</h4>
                            <ul class="cs_course_syslebus">
                                <li>
                                    <i class="fa fa-check"></i>
                                    All the machines present in this room are properly maintained.
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    Computer room is equipped with AC
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    Internet Facilities is available for education and research purpose.
                                </li>
                                
                            
                                <li>
                                    <i class="fa fa-check"></i>
                                    The cleanliness of this room is regularly maintained.
                                </li>
                                
                                
                            </ul>
                        </div>
                        
                        <img src="sengunthar college of pharmacy content\sengunthar college of pharmacy\DSC_4023.jpg" alt="Library Image" class="zoom-image"> 
                        
                    </div>
                </div>
                <hr>
                <!-- Computer Lab End -->

                <!-- Hostel Lab Start -->
                <div class="row my-5" id="hostel">
                    <div class="col-lg-12" style="display: flex;">
                        <div class="about_content mr-5" style="flex:1;align-items: center;justify-content: space-between;flex-wrap: wrap; max-width:100%;">
                            <h3>Transportation and Hostels</h3>
                            <p class="text-justify">Senghundhar College of Pharmacy provides transportation facilities for students' convenience. Additionally, the college offers separate hostels for boys and girls, ensuring a secure and comfortable living environment for students pursuing their education at the institute.</p>
                            <h4>Transportation & Hostel Services</h4>
                            <ul class="cs_course_syslebus">
                                <li>
                                    <i class="fa fa-check"></i>
                                    The college offers separate hostels for boys and girls.
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    We provides transportation facilities for students' convenience. 
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    The cleanliness of this room is regularly maintained.
                                </li>   
                            </ul>
                        </div>
                        <img src="sengunthar college of pharmacy content\sengunthar college of pharmacy\DSC_4042.jpg" alt="Library Image" class="zoom-image">
                    </div>
                </div>
                <hr>
                <!-- Hostel Lab End -->


            </div>
        </div>
    </div>
</section>
<script>
    function activateMenuItem(event) {
        // Check if the clicked element is an anchor tag
        if (event.target.tagName === 'A') {
            // Remove the sidemenu_active class from all items
            var menuItems = document.querySelectorAll('.list_details li a');
            menuItems.forEach(function (menuItem) {
                menuItem.classList.remove('sidemenu_active');
            });

            // Add the sidemenu_active class to the clicked item
            event.target.classList.add('sidemenu_active');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
    // Get the section ID from the URL
    var section = window.location.hash.substring(1);

    // Show the corresponding content based on the section
    if (section) {
        var sectionElement = document.getElementById(section);
        if (sectionElement) {
            // Scroll to the section
            sectionElement.scrollIntoView();
            
            // Optionally, you can add a class or other styling to highlight the selected section
            sectionElement.classList.add('highlighted-section');
        }
    }
});

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