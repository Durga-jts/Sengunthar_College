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
            height:60%;
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

<!-- About Text Content -->
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

            <div class="col-lg-9" id="library">
                <div class="row">
                    <div class="col-lg-12" style="display: flex;">
                        <div class="about_content mr-5" style="flex:1;align-items: center;justify-content: space-between;flex-wrap: wrap; max-width:100%;">
                            <h3>Library</h3>
                            <p class="text-justify">Senghundhar College of Pharmacy's central library is a knowledge treasure featuring a diverse collection of books, national and international journals, internet facilities, and audiovisual aids. The library supports research in various pharmaceutical specialties, including pharmacy practice, pharmacology, pharmaceutical analysis, medicinal chemistry, pharmacognosy, biotechnology, and pharmaceutical sciences. With department libraries complementing the central facility, students have easy access to resources relevant to their specializations. The library, equipped with a photocopier and scanner, plays a pivotal role in catering to the academic and research needs of the institute.</p>
                            <p class="text-justify">A Library is a knowledge treasure. The Library plays a vital role in collecting the scientific and technical information and disseminating it in order to satisfy the current and future needs of the academic and research community. It contains a large number of textbooks and reference books for various pharmaceutical branches and allied subjects. It offers extensive access to journals and periodicals of national and international scientific research.</p>
                
                            <h4>Library Services</h4>
                            <ul class="cs_course_syslebus">
                                <li><i class="fa fa-check mt-4 mb-4"></i> Reading /Referencing</li>
                                <li><i class="fa fa-check mb-4"></i> Circulation</li>
                                <li><i class="fa fa-check mb-4"></i> International journals</li>
                                <li><i class="fa fa-check mb-4"></i> Photocopying</li>
                                <li><i class="fa fa-check mb-4"></i> Internet Facilities</li>
                                <li><i class="fa fa-check mb-4"></i> New Arrival List</li>
                                <li><i class="fa fa-check mb-4"></i> Newspaper Clipping</li>
                                <li><i class="fa fa-check mb-4"></i> Laboratories</li>
                            </ul>
                        </div>
                
                        <img src="sengunthar college of pharmacy content\sengunthar college of pharmacy\DSC_4026.jpg" alt="Library Image" class="zoom-image" >
                    </div>
                </div>
                <hr>
            <!-- <Library ends -->
               
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