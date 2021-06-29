<?php
session_start();
error_reporting(0);
include "include/koneksi.php";
?>
<?php
if ($_GET['id_tempat'] == "") {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Daftar Tempat</title>
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
                        <div class="panel-body">
                            <h2>Daftar Tempat</h2>
                            <table width="100px" border='1' class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th rowspan=2>No</th>
                                        <th rowspan=2>Nama Paket</th>
                                        <th rowspan=2>Deskripsi</th>
                                        <th rowspan=2>Harga</th>
                                        <th colspan=3>Foto</th>
                                        <th rowspan=2>Aksi</th>

                                    </tr>
                                    <tr>
                                        <th>Foto 1</th>
                                        <th> Foto 2</th>
                                        <th>Foto 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "include/koneksi.php";
                                    $no = 1;
                                    $q = mysqli_query($conn, "select * from daftar_tempat order by nama_tempat");
                                    while ($d = mysqli_fetch_array($q)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['nama_tempat']; ?></td>
                                            <td width='500px'><?php echo $d['deskripsi_tempat']; ?></td>
                                            <td>
                                                <p>Rp.</p><?php echo number_format($d['harga'], 0, ',', '.') ?>
                                            </td>
                                            <td><a href='galery/$d[foto_tempat1]' target='blank'><img src='<?php echo "galeri/$d[foto_tempat1]" ?>' height='100' width='100'></a></td>
                                            <td><a href='galery/$d[foto_tempat2]' target='blank'><img src='<?php echo "galeri/$d[foto_tempat2]" ?>' height='100' width='100'></a></td>
                                            <td><a href='galery/$d[foto_tempat3]' target='blank'><img src='<?php echo "galeri/$d[foto_tempat3]" ?>' height='100' width='100'></a></td>
                                            <td>
                                            <?php
                                            if ($_SESSION['id_pengguna'] != "") {
                                                echo "<a href='pesan.php?id_tempat=$d[id_tempat]' class='btn btn-info'>Pesan</a></td>";
                                            } else {
                                                echo "<a href=\"#\" role=\"button\" data-toggle=\"modal\" data-target=\"#kode\" class=\"btn btn-primary\">Pesan</a></td>";
                                            }
                                            echo "</tr>";
                                            $no++;
                                        }
                                            ?>
                                        </tr>
                                </tbody>


                            </table>
                        </div>


                    </div>
                </div>
            </section>
        </div>

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
<?php } ?>