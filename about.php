<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HS Hotel - ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php
    require('inc/links.php');
    ?>
    <style>
        .box:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.1);
            transition: all 0.5s;
        }

        .h-line {
            width: 150px;
            height: 1.7px;
            margin: 0 auto;
        }
    </style>
</head>

<body class="bg-light">
    <?php
    require('inc/navbar.php');
    ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo facere nisi
            culpa praesentium <br> voluptatibus illo aliquid accusamus
            hic. Consequuntur qui est non atque, vitae eius doloribus dolores cum modi libero.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3 h-font">Lorem ipsum dolor sit.</h3>
                <p class="h-font">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nihil quisquam maiore porro quidem debitis est ratione.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nihil quisquam maiore porro quidem debitis est ratione.
                </p>
            </div>

            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-dark border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h2 class="mt-3 h-font">100+ Rooms</h2>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-dark border-4 text-center box">
                    <img src="images/about/customers.svg" width="60px">
                    <h2 class="mt-3 h-font">200+ Customers</h2>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-dark border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h2 class="mt-3 h-font">150+ Reviews</h2>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-dark border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h2 class="mt-3 h-font">100+ staffs</h2>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 text-center h-font fw-bold">Management Team</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/carousel1.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/carousel1.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/carousel1.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/carousel1.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/carousel1.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/carousel1.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <!-- Footer -->
    <?php
    require('inc/footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>