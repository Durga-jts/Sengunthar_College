<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<<<<<<< Updated upstream
<body>

    <style>
         
        .gallery-container img {
=======
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .thumbnail {
>>>>>>> Stashed changes
            margin: 50px 0px;
            width: 400px;
            height: 300px;
            display: flex;
            flex-wrap: nowrap;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);
            border: 10px solid white;
        }
<<<<<<< Updated upstream
        .gallery-container .row{
            margin-top: -40px;

        } 
        .carousel-item {
        display: flex;
        width:200vh;
        justify-content: center;
    }

    /* Ensure images don't exceed their container width */
    .carousel-item img {
        width: 100%; 
        height: 50vh;
        object-fit: cover;
    }
    </style>

=======
        .thumbnail:hover {
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8);
        }
        #gallery-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000; /* Ensure the gallery container is in front */
        }
        #gallery {
            max-width: 80%;
            height: 85%;
            position: relative;
            overflow: hidden;
            z-index: 1001; /* Ensure the gallery content is in front of the container */
        }
        #image {
            max-width: 100%;
            max-height: 100%;
            display: block;
            margin: auto;
        }
        #close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            color: black;
            font-size:20px;
            padding:2px;
            cursor: pointer;
            z-index: 1002; /* Ensure the close button is in front of the content */
        }
        #prev-btn, #next-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 25px;
            color: white;
            cursor: pointer;
            background: none;
            border: none;
            outline: none;
            z-index: 1002; /* Ensure the navigation buttons are in front of the content */
            border:1px solid #000;
            background-color:#ccc;
        }
        #prev-btn {
            left: 10px;
            color:#fff;
        }
        #prev-btn:hover {
            left: 10px;
            color:#000;
            border:1px solid #000;
            background-color:#ccc;
            padding:5px;
        }
        #next-btn {
            right: 10px;
            color:#fff;
            
        }
        #next-btn:hover {
            right: 10px;
            color:#000;
            border:1px solid #000;
            background-color:#ccc;
            padding:5px;
        }
    </style>
    
>>>>>>> Stashed changes
    <!-- /* Header */ -->
<!-- /* Header */ -->
<?php include("header.php"); ?>

<<<<<<< Updated upstream
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Gallery</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end --> 

    <div></div>
    <!-- Gallery -->
    <div class="container gallery-container">
    <div class="row">
    <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery14.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery15.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery16.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery17.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery18.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery19.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery20.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery21.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery22.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery23.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery24.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery25.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery26.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery27.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery28.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery29.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery30.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery31.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery32.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery33.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>

        <div class="row">
        <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery34.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery35.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-md-4" data-toggle="modal" data-target="#lightboxGallery" data-aos="fade-up-left" data-aos-duration="800">
                <img src="assets\images\gallery36.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>
        </div>
        
        <!-- Modal -->
            <div class="modal fade" id="lightboxGallery" role="dialog" tabindex="-1" aria-labelledby="lightboxGalleryLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="margin-top:40%; width:40em;">
                        <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div id="galleryIndicators" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <!-- Carousel items for images 1 to 36 -->
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets\images\gallery1.jpg" alt="Boat on Calm Water">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery2.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery3.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery4.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery5.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery6.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery7.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery8.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery9.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery10.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery11.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery12.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery13.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery14.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery15.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery16.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery17.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery18.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery19.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery20.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery21.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery22.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery23.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery24.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery25.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery26.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery27.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery28.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery29.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery30.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery31.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery32.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery33.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery34.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery35.jpg" alt="Wintry Mountain Landscape">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets\images\gallery36.jpg" alt="Wintry Mountain Landscape">
                                </div>


                                <!-- Add similar carousel items for images 3 to 36 -->
                            </div>
                            <a class="carousel-control-prev" href="#galleryIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#galleryIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



    </div>
    <!-- Gallery -->
<!-- Add this script after your existing JavaScript code -->
<script>
    $(document).ready(function () {
        // Function to update carousel controls visibility
        function updateCarouselControls() {
            var currentIndex = $('#galleryIndicators').find('.carousel-item.active').index();
            var totalItems = $('#galleryIndicators').find('.carousel-item').length;

            // Hide or show next and previous buttons based on the current index
            if (currentIndex === 0) {
                $('.carousel-control-prev').hide(); // Hide previous button on the first image
            } else {
                $('.carousel-control-prev').show();
            }

            if (currentIndex === totalItems - 1) {
                $('.carousel-control-next').hide(); // Hide next button on the last image
            } else {
                $('.carousel-control-next').show();
            }
        }

        // Event listener for carousel slide event
        $('#galleryIndicators').on('slid.bs.carousel', function () {
            updateCarouselControls();
        });

        // Event listener for modal shown event
        $('#lightboxGallery').on('shown.bs.modal', function () {
            updateCarouselControls();
        });
    });
=======
<!-- body overlay area start -->
<div class="body_overlay"></div>
<!-- body overlay area end -->
<!-- crumbs area start -->
<div class="crumbs-area">
    <div class="container">
        <div class="crumb-content">
            <h4 class="crumb-title"><span>Gallery</h4>
        </div>
    </div>
</div>
<!-- crumbs area end --> 
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
            <div id="gallery-container">
                <div id="gallery">
                    <img id="image" src="" alt="Gallery Image">
                    <button class="px-3" id="close-btn" onclick="closeGallery()">&times;</button>
                    <button class="px-2" id="prev-btn" onclick="prevImage()">&lt;</button>
                    <button class="px-2" id="next-btn" onclick="nextImage()">&gt;</button>
                </div>
            </div>

            <div id="thumbnail" class="gallery row">
               
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery1.jpg" onclick="showGallery(0)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery2.jpg" onclick="showGallery(1)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery3.jpg" onclick="showGallery(2)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery4.jpg" onclick="showGallery(3)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery5.jpg" onclick="showGallery(4)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery6.jpg" onclick="showGallery(5)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery7.jpg" onclick="showGallery(6)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery8.jpg" onclick="showGallery(7)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery9.jpg" onclick="showGallery(8)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery10.jpg" onclick="showGallery(9)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery11.jpg" onclick="showGallery(10)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery12.jpg" onclick="showGallery(11)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery13.jpg" onclick="showGallery(12)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery14.jpg" onclick="showGallery(13)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery15.jpg" onclick="showGallery(14)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery16.jpg" onclick="showGallery(15)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery17.jpg" onclick="showGallery(16)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery18.jpg" onclick="showGallery(17)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery19.jpg" onclick="showGallery(18)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery20.jpg" onclick="showGallery(19)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery21.jpg" onclick="showGallery(20)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery22.jpg" onclick="showGallery(21)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery23.jpg" onclick="showGallery(22)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery24.jpg" onclick="showGallery(23)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery25.jpg" onclick="showGallery(24)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery26.jpg" onclick="showGallery(25)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery27.jpg" onclick="showGallery(26)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery28.jpg" onclick="showGallery(27)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery29.jpg" onclick="showGallery(28)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery30.jpg" onclick="showGallery(29)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery31.jpg" onclick="showGallery(30)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery32.jpg" onclick="showGallery(31)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery33.jpg" onclick="showGallery(32)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery34.jpg" onclick="showGallery(33)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery35.jpg" onclick="showGallery(34)">
                </div>
                <div class="col-md-4">
                    <img class="thumbnail" src="assets/images/gallery36.jpg" onclick="showGallery(35)">
                </div>

            </div>
    </div>
</div>
<script>
    var images = [
        'assets/images/gallery1.jpg',
        'assets/images/gallery2.jpg',
        'assets/images/gallery3.jpg',
        'assets/images/gallery4.jpg',
        'assets/images/gallery5.jpg',
        'assets/images/gallery6.jpg',
        'assets/images/gallery7.jpg',
        'assets/images/gallery8.jpg',
        'assets/images/gallery9.jpg',
        'assets/images/gallery10.jpg',
        'assets/images/gallery11.jpg',
        'assets/images/gallery12.jpg',
        'assets/images/gallery13.jpg',
        'assets/images/gallery14.jpg',
        'assets/images/gallery15.jpg',
        'assets/images/gallery16.jpg',
        'assets/images/gallery17.jpg',
        'assets/images/gallery18.jpg',
        'assets/images/gallery19.jpg',
        'assets/images/gallery20.jpg',
        'assets/images/gallery21.jpg',
        'assets/images/gallery22.jpg',
        'assets/images/gallery23.jpg',
        'assets/images/gallery24.jpg',
        'assets/images/gallery25.jpg',
        'assets/images/gallery26.jpg',
        'assets/images/gallery27.jpg',
        'assets/images/gallery28.jpg',
        'assets/images/gallery29.jpg',
        'assets/images/gallery30.jpg',
        'assets/images/gallery31.jpg',
        'assets/images/gallery32.jpg',
        'assets/images/gallery33.jpg',
        'assets/images/gallery34.jpg',
        'assets/images/gallery35.jpg',
        'assets/images/gallery36.jpg',
        
    ];

    var currentImageIndex = 0;
    var imageElement = document.getElementById('image');
    var galleryContainer = document.getElementById('gallery-container');
    var galleryElement = document.getElementById('gallery');
    var prevBtn = document.getElementById('prev-btn');
    var nextBtn = document.getElementById('next-btn');
    
    function showGallery(index) {
        currentImageIndex = index;
        imageElement.src = images[index];
        toggleNavigationButtonsVisibility();
        galleryContainer.style.display = 'flex';
        
    }

    function closeGallery() {
        galleryContainer.style.display = 'none';
    }

    function prevImage() {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        imageElement.src = images[currentImageIndex];
        toggleNavigationButtonsVisibility();
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        imageElement.src = images[currentImageIndex];
        toggleNavigationButtonsVisibility();
    }

    function toggleNavigationButtonsVisibility() {
        prevBtn.style.display = currentImageIndex === 0 ? 'none' : 'block';
        nextBtn.style.display = currentImageIndex === images.length - 1 ? 'none' : 'block';
    }
</script>
>>>>>>> Stashed changes
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- /* Footer */ -->

    <!-- /* Footer */ -->
<?php include("footer.php"); ?>
<<<<<<< Updated upstream

</body>

</html>
=======
</body>
</html>
>>>>>>> Stashed changes
