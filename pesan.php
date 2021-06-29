<?php
session_start();
error_reporting(0);
include "include/koneksi.php";
if ($_GET['id_pengguna'] == "") {
?>


    <!DOCTYPE html>
    <html>

    <head>
        <title>Pesan</title>
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
                            <h2>Pemesanan</h2>
                            <form action='proses_pemesanan.php<?php echo "?id_tempat=$_GET[id_tempat]" ?>' method='post'>
                                <?php
                                $id_pengguna = $_SESSION['id_pengguna'];

                                $email = $_SESSION['email']; // mengambil email dari session yang login
                                $sql = $conn->query("SELECT * FROM data_pengguna, daftar_tempat WHERE email='$email'"); // query memilih entri email pada database

                                if (mysqli_num_rows($sql) > 0) {

                                    $row = mysqli_fetch_array($sql);

                                    $_SESSION["id_pengguna"] = $row["id_pengguna"];
                                    $_SESSION["nama_tempat"] = $row["nama_tempat"];
                                }
                                ?>
                                <?php
                                $id_tempat = $_GET['id_tempat'];
                                $tempat = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM daftar_tempat where id_tempat='$id_tempat[id_tempat]'"));
                                ?>
                                <table class='table table-bordered table-striped'>
                                    <tr>
                                        <div class="form-group">
                                            <td><label>ID Tempat</label></td>
                                            <td><input type="text" class="form-control" name="tanggal_pesan" id="tanggal_pesan" value="<?php echo $_GET['id_tempat']; ?>" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                                        </div>
                                    </tr>

                                    <tr>
                                        <div class="form-group">
                                            <td><label>Tanggal Pesan</label></td>
                                            <td><input type="text" class="form-control" name="tanggal_pesan" id="tanggal_pesan" value="<?php echo date('d-m-Y'); ?>" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                            <td><label>Nama Lengkap</label></td>
                                            <td><input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                            <td><label>Email</label></td>
                                            <td><input type="text" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                            <td><label>Nomor Handphone</label></td>
                                            <td><input type="text" class="form-control" name="no_hp" id="no_hp" value="<?php echo $row['no_hp']; ?>" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                            <td><label>Nama Tempat</label></td>
                                            <td><input type="Text" class="form-control" name="nama_tempat" id="pin" value="<?php echo $tempat['nama_tempat']; ?>" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly></td>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                            <td><label>Harga</label></td>
                                            <td><input type="text" class="form-control" name="harga" id="alamat" value="<?php echo $tempat['harga']; ?>" aria-label="Disabled input example" autocomplete="off" style="width: 450px" disabled readonly>
                                            <td>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                            <td><label>Tanggal Check-in</label></td>
                                            <td><input type="date" class="form-control" name="check_in" id="check_in" placeholder="yyyy-mm-dd" autocomplete="off" style="width: 450px">
                                            <td>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                            <td><label>Tanggal Check-out</label></td>
                                            <td><input type="date" class="form-control" name="check_out" id="check_out" placeholder="yyyy-mm-dd" autocomplete="off" style="width: 450px">
                                            <td>
                                        </div>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><input type="submit" name="submit" value="Pesan" class="btn btn-primary"></td>
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