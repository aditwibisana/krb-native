<?php
session_start();
error_reporting(0);
include "include/koneksi.php";
if ($_GET['id_pengguna'] == "") {
?>


    <!DOCTYPE html>
    <html>

    <head>
        <title>Form Pembayaran</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/core.css">
        <link rel="stylesheet" type="text/css" href="css/base.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="icon" type="image/png" href="favicon.png?v=2">

        <script src="js/assets/jquery.js"></script>
    </head>

    <body>

        <div class="body-overlay"></div>
        <!-- Menu-->
        <div class="nav-container">
            <ul class="nav">
                <?php
                include "menu.php"
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
        </ul>
        </div>
        <!-- Wrapper-->
        <div id="wrapper" class="container-fluid smooth-transition">
            <!-- Header-->
            <header>
                <div class="container">
                    <!-- Branding--><a href="index.html" class="brand"> <img alt="" src="images/kebun-raya-2.png" class="dark-brand" width="200px" height="50px"" class=" dark-brand"><img alt="" src="images/logo-white.svg" class="light-brand"></a>
                    <!-- Menu-->
                    <div class="menu"></div>
                </div>
            </header>
            <!-- Hero & Tera Slider-->


            <section>
                <div class="container content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <br>
                            <h2>Form Upload Bukti Bayar</h2>
                            <hr>
                            <form method=POST action=proses-bayar.php enctype='multipart/form-data'>
                                <input type=hidden name=id value='$r[id_berita]'>
                                <table class='table table-bordered table-striped'>
                                    <p>Cara Pembayaran dapat ditransfer melalui rekening 1560008763084 Bank Mandiri A/N Kebun Raya Balikpapan atau dapat membayar ditempat</p>

                                    <tr>
                                        <td> ID Pemesanan</td>
                                        <td> <input type=text name='id_pesan' value=<?php echo "'$_GET[id_pesan]'" ?> class='form-control' readonly=readonly></td>
                                    </tr>


                                    <tr>
                                        <td> Bukti Transfer </td>
                                        <td><input type=file name='upload_bukti' class='form-control'></td>
                                    </tr>

                                    <tr>
                                        <td colspan=2><input type=submit value=Kirim class='btn btn-primary'>
                                            <input type=button value=Batal onclick=self.history.back() class='btn btn-warning'>
                                        </td>
                                    </tr>
                                </table>



                            </form>
                        </div>
                    </div>
                </div>

                <section class="top-line">
                    <div class="container content text-center">

                    </div>
                </section>
                <!-- Footer-->

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
<?php } ?>