<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities and Events</title>
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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!--color css-->
    <link rel="stylesheet" id="triggerColor" href="assets/css/triggerplate/color-0.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- /* Header */ -->
<?php include("header.php"); ?>


    <div class="full-img" id="fullImgBox">
        <img src="image1.jpg" id="fullImg">
        <span onclick="closeFullImg()">X</span>
    </div>

    <!-- <h2>Activities and Events</h2> -->
    <div class="container-fluid mt-5">
        <div class="img-gallery">
            <div class="one">
                <img src="assets\images\event1.jpg" onclick="openFullImg(this.src)"><br>
                <p>RECEIVING A GOLD MEDAL FROM HEALTH MINISTER BY RUPA 2017 B.PHARM</p>
            </div>
            <div class="two">
                <img src="assets\images\event2.jpg" onclick="openFullImg(this.src)"><br>
                <p> BLOOD DONATION CAMP-2019</p>
            </div>
            <div class="three">
                <img src="assets\images\event3.jpg" onclick="openFullImg(this.src)"><br>
                <p>24 JUNE 2022- WINNER JKKN COLLEGE OF PHARMACY IN CULTURAL COMPETATION</p>
            </div>
            <div class="four">
                <img src="assets\images\event4.jpg" onclick="openFullImg(this.src)"><br>
                <p>NATIONAL TECHNOLOGY DAY CELEBERATION 2023</p>
            </div>
            <div class="five">
                <img src="assets\images\event5.jpg" onclick="openFullImg(this.src)"><br>
                <p>THE PRECLINICAL RESEARCH PARADIGM FOR REVEMPED INFECTIOUS DISEASES-INTERNATIONAL CONFERENCE</p>
            </div>
            <div class="six">
                <img src="assets\images\event6.jpg" onclick="openFullImg(this.src)"><br>
                <p>GRADUATION DAY 2017 BATCH</p>
                
            </div>
            <div class="seven">
                <img src="assets\images\event7.jpg" onclick="openFullImg(this.src)"><br>
                <p>DRUG ABUSE AWAERNESS PROGRAMME -2023</p>
            </div>
            <div class="eight">
                <img src="assets\images\event8.jpg" onclick="openFullImg(this.src)"><br>
                <p>CARDIOPULMONARY RESUSCITATION AWARENESS PROGRAMME – 2023</p>
            </div>
            <div class="nine">
                <img src="assets\images\event9.jpg" onclick = "openFullImg(this.src)"><br>
                <p>NATIONAL PHARMACY WEEK CELEBERATION -2019</p>
            </div>
        </div>
    </div>
    <script>
        var fullImgBox = document.getElementById("fullImgBox");
        var fullImg = document.getElementById("fullImg");


        function openFullImg(pic) {
            fullImgBox.style.display = "flex";
            fullImg.src = pic;
        }
        function closeFullImg() {
            fullImgBox.style.display = "none";
        }

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

    <?php include("footer.php"); ?>
</body>

</html>