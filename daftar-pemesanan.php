<?php
session_start();
error_reporting(0);
include "include/koneksi.php";
?>
<?php
if ($_GET['id_pengguna'] == "") {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Daftar Pemesanan</title>
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
                            <h2>Daftar Pemesanan</h2>
                            <table width="100px" border='1' class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Pemesanan</th>
                                        <th>Tgl Pesan</th>
                                        <th>Nama Tempat</th>
                                        <th>Tgl Check In</th>
                                        <th>Tanggal Check Out</th>
                                        <th>Durasi Hari</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>
                                        <th>Bukti</th>
                                        <th>Konfirmasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $id_pengguna = $_SESSION['id_pengguna'];
                                    $q = mysqli_query($conn, "SELECT * FROM pemesanan where id_pengguna='$_SESSION[id_pengguna]'");
                                    $no = 1;
                                    while ($d = mysqli_fetch_array($q)) {
                                        $qb = $conn->query("SELECT * FROM pembayaran where id_pesan='$d[id_pesan]'");

                                        if (mysqli_num_rows($qb) > 0) {
                                            $b = mysqli_fetch_array($qb);
                                            $konfirmasi = "$b[konfirmasi]";
                                            if ($b['konfirmasi'] == "Sudah") {
                                                $cetak = "<a href='cetak-bukti.php?id_pesan=$d[id_pesan]' target='_blank' class='btn btn-success'>Cetak</a>";
                                            } else {
                                                $cetak = "<a href='cetak-bukti.php?id_pesan=$d[id_pesan]' target='_blank' class='btn btn-success'>Cetak</a>";
                                            }
                                        } else {
                                            $konfirmasi = "Belum";
                                            $bayar = "<a href='bayar.php?id_pesan=$d[id_pesan]' class='btn btn-info'> Bayar </a>";
                                            $cetak = "<a href='cetak-bukti.php?id_pesan=$d[id_pesan]' target='_blank' class='btn btn-success'>Cetak</a>";
                                        }
                                        $tempat = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM daftar_tempat where id_tempat='$d[id_tempat]'"));

                                        $qqb = mysqli_query($conn, "SELECT * FROM pembayaran where id_pesan='$d[id_pesan]'");

                                        $bb = mysqli_fetch_array($qqb);
                                        if ($bb['bukti'] != "") {
                                            $bukti = "<img src='bukti/$bb[bukti]' height='150' width='150' />";
                                        } else {
                                            $bukti = "Belum ada";
                                        }
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $d['id_pesan'] ?></td>
                                            <td><?php echo $d['tanggal_pesan'] ?></td>
                                            <td><?php echo $tempat['nama_tempat'] ?></td>
                                            <td><?php echo $d['check_in'] ?></td>
                                            <td><?php echo $d['check_out'] ?></td>
                                            <td><?php echo $d['durasi'] ?></td>
                                            <td>
                                                <p>Rp.</p><?php echo number_format($d['harga'], 0, ',', '.') ?>
                                            </td>
                                            <td>
                                                <p>Rp.</p><?php echo number_format($d['total_harga'], 0, ',', '.') ?>
                                            </td>
                                        <?php echo "<td>$bukti</td><td>$konfirmasi</td><td>$bayar $cetak</td>
                                        </tr>";

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