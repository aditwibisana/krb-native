<?php
session_start();
error_reporting(0);
include "include/koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Profil</title>
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

        <center>
            <section>
                <div class="container content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <br>
                            <h3>Edit Profil</h3>
                            <marquee>
                            </marquee>
                            <hr>
                            <?php
                            $email = $_SESSION['email']; // mengambil email dari session yang login

                            $sql = $conn->query("SELECT * FROM data_pengguna WHERE email='$email'"); // query memilih entri email pada database
                            if (mysqli_num_rows($sql) == 0) {
                            } else {
                                $row = mysqli_fetch_assoc($sql);
                            }
                            ?>
                            <form action="proses-edit-profil-pengguna.php" method="POST">
                                <div class="form-group">
                                    <label>No Anggota</label>
                                    <input class="form-control" type="text" value="<?php echo $row['id_pengguna'] ?>" aria-label="Disabled input example" style="width: 450px" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>" autocomplete="off" style="width: 450px">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>" autocomplete="off" style="width: 450px">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Handphone</label>
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?php echo $row['no_hp']; ?>" autocomplete="off" style="width: 450px">
                                </div>
                                <div class="form-group">
                                    <label>PIN</label>
                                    <input type="password" class="form-control" name="pin" id="pin" value="<?php echo $row['pin']; ?>" autocomplete="off" style="width: 450px">
                                </div>
                                <div class="form-group">
                                    <label>Asal</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" autocomplete="off" style="width: 450px">
                                </div>

                                <input type="submit" name="submit" value="submit" class="btn btn-success">
                                <a href="pakaian.php"><input type="button" class="btn btn-default" value="Batal"></a>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </center>
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