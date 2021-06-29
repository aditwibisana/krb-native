<?php
session_start();
error_reporting(0);
include "include/koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Kebun Raya Balikpapan</title>
    <?php
    include "header.php";
    ?>
</head>

<body>

    <div class="body-overlay"></div>
    <!-- Menu-->
    <div class="nav-container">
        <?php
        include "menu.php";
        ?>
        <div class="copyright">2016 &copy; Bone Template. All rights reserved.</div>
        <div class="exit"></div>
        <ul class="social">
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-dribbble"></a></li>
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-instagram"></a></li>
            <li><a href="#" class="fa fa-pinterest"></a></li>
        </ul>
    </div>
    <!-- Wrapper-->
    <div id="wrapper" class="container-fluid smooth-transition">
        <!-- Header-->
        <header>
            <div class="container">
                <!-- Branding--><a href="index.html" class="brand"> <img alt="" src="images/kebun-raya-2.png" class="dark-brand" width="200px" height="50px"><img alt="" src="images/logo-white.svg" class="light-brand"></a>
                <!-- Menu-->
                <div class="menu"></div>
            </div>
        </header>
        <!-- Hero & Tera Slider-->
        <section class="slider">
            <ul class="slides">
                <!-- Slide-->
                <li class="slide">
                    <!-- Background-->
                    <div class="hero fs">
                        <div style="background-image: url(images/office/03.jpg);" class="bg parallax"></div>
                        <div class="container text-center offset-top">
                            <!-- Content-->

                            <?php
                            include "content.php";
                            ?>
                            <!-- Footer-->
                            <footer>
                                <div class="container content">
                                    <div class="row">
                                        <!-- Contact info-->
                                        <div class="col-md-2">
                                            <p>P (+1) 0 123 456 78<br>F (+1) 0 123 456 78<br>M email@example.com</p>
                                        </div>
                                        <div class="col-md-2">
                                            <p>Bone Agency Ltd<br>Designstreet 137<br>12345 NY, New York</p>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <!-- Social links-->
                                            <ul class="social">
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-instagram"></a></li>
                                                <li><a href="#" class="fa fa-pinterest"></a></li>
                                            </ul>
                                            <!-- Copyright message-->
                                            <div class="copyright">2016 &copy; Bone Template. All rights reserved. <a href="http://themeforest.net/item/bone-responsive-agency-portfolio-html-template/15299321">Buy Bone</a></div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <script src="js/assets/bootstrap.js"></script>
                        <script src="js/assets/imagesloaded.pkgd.min.js"></script>
                        <script src="js/assets/validation.js"></script>
                        <script src="js/assets/masonry.pkgd.min.js"></script>
                        <script src="modules/tera-slider/tera-slider.js"></script>
                        <script src="modules/tera-lightbox/tera-lightbox.js"></script>
                        <script src="js/assets/animsition.js"></script>
                        <script src="js/functions.js"></script>
</body>

</html>