<?php
session_start();
include_once('admin.session.php');

$i = 1;
$jml_per_halaman = 10; // jumlah data yg ditampilkan perhalaman
$jml_data = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pemesanan"));
$jml_halaman = ceil($jml_data / $jml_per_halaman);

if (isset($_GET['hal'])) {

    $hal = $_GET['hal'];
    $i = ($hal - 1) * $jml_per_halaman  + 1;
    $s = mysqli_query($conn, "SELECT * FROM pemesanan order by tanggal_pesan ASC limit " . (($hal - 1) * $jml_per_halaman) . ", $jml_per_halaman");
} else {
    $s = mysqli_query($conn, "SELECT * FROM pemesanan order by tanggal_pesan ASC limit 0, $jml_per_halaman")
        or die(mysqli_error(''));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Daftar Pemesanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../img/favicon.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <style>
        body {
            background-image: url(../img/body.jpg);
            background-repeat: repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>

    <?php
    include_once('menu.php');
    ?>
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <div>
                <div class="modal-header">
                    <h3>Daftar Pemesanan</h3>
                    <p>Total Pemesanan : <b><?php echo $jml_data; ?></b></p>
                </div>

                <div style="margin-top:10px">
                    <table class="table table-condensed table-bordered table-hover">
                        <thead>
                            <td width="5%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>No</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>ID Pesan</h5>
                                </font>
                            </td>
                            <td width="30%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Nama Pemesan</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Tanggal Pesan</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Tanggal Check In</h5>
                                </font>
                            </td>

                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Tanggal Check Out</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Durasi</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Harga</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Total Harga</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Bukti</h5>
                                </font>
                            </td>
                            <td width="10%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5>Konfirmasi</h5>
                                </font>
                            </td>


                            <td width="5%">
                                <font face="Helvetica, cursive" class="text-error text-center">
                                    <h5><span class="icon-wrench"></span></h5>
                                </font>
                            </td>
                        </thead>
                        <?php
                        while ($data = mysqli_fetch_array($s)) {
                            $qb = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id_pesan='$data[id_pesan]'");

                            if (mysqli_num_rows($qb) > 0) {
                                $b = mysqli_fetch_array($qb);

                                $konfirmasi = "$b[konfirmasi] dikonfirmasi";

                                if ($b['bukti'] != "") {
                                    $bukti = "<img src='../bukti/$b[bukti]' style='width:100px;height:100px;' />";
                                } else {
                                    $bukti = "Belum ada";
                                }

                                $bayar = "Sudah Bayar";
                                if ($b['konfirmasi'] == "Sudah") {
                                    $bkonf = "Batal Konfirmasi";
                                    $lkonf = "btlkonfirmasi";
                                } else {
                                    $bkonf = "Konfirmasi";
                                    $lkonf = "konfirmasi";
                                }
                            } else {
                                $konfirmasi = "Belum Dikonfirmasi";
                                $bayar = "Belum Bayar";
                            }
                            $u = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM data_pengguna WHERE id_pengguna='$data[id_pengguna]'"));
                            $nama = $u['nama_lengkap'];
                            $email = $data['id_pengguna'];
                            $kode = $data['id_pesan'];
                        ?>

                            <tbody>
                                <td>
                                    <font face="Helvetica, cursive" class="text-info text-left">
                                        <h5><?php echo $i ?></h5>
                                    </font>
                                </td>
                                <td>
                                    <font face="Helvetica, cursive" class="text-error text-left">
                                        <h5><?php echo "$data[id_pesan]"; ?></h5>
                                    </font>
                                </td>
                                <td>
                                    <font face="Helvetica, cursive" class="text-info text-left">
                                        <h5><?php echo "$u[nama_lengkap]"; ?></h5>
                                    </font>
                                </td>
                                <td>
                                    <font face="Helvetica, cursive" class="text-info text-left">
                                        <h5><?php echo "$data[tanggal_pesan]"; ?></h5>
                                    </font>
                                </td>
                                <td>
                                    <font face="Helvetica, cursive" class="text-info text-left">
                                        <h5><?php echo "$data[check_in]"; ?></h5>
                                    </font>
                                </td>
                                <td>
                                    <font face="Helvetica, cursive" class="text-info text-left">
                                        <h5><?php echo "$data[check_out]"; ?></h5>
                                    </font>
                                </td>
                                <td>
                                    <font face="Helvetica, cursive" class="text-info text-left">
                                        <h5><?php echo "$data[durasi]"; ?> Hari</h5>
                                    </font>
                                </td>
                                <td>
                                    <font face="Helvetica, cursive" class="text-info text-left">
                                        <h5>Rp.<?php echo number_format($data['harga'], 0, ',', '.') ?></h5>
                                    </font>
                                </td>
                                <td>
                                    <font face="Helvetica, cursive" class="text-info text-left">
                                        <h5>Rp.<?php echo number_format($data['total_harga'], 0, ',', '.') ?></h5>
                                    </font>
                                </td>
                                <?php
                                if (['bukti'] != " ") {
                                    $bukti = "<img src='../bukti/$b[bukti]' style='width:100px;height:100px;' />";
                                } else {
                                    $bukti = "Belum ada";
                                }
                                ?>
                                <td>
                                    <font face="Comic Sans MS, cursive" class="text-info text-left">
                                        <h5><?php echo $bukti; ?></h5>
                                    </font>
                                </td>
                                <td>
                                    <font face="Comic Sans MS, cursive" class="text-info text-left">
                                        <h5><?php echo "$bayar / $konfirmasi"; ?></h5>
                                    </font>
                                </td>


                                <td>
                                    <font face="Helvetica, cursive" class="text-info text-center">
                                        <h5>
                                            <center>
                                                <a class="btn btn-small btn-info" href="data_pengguna.update.php?kode=<?php echo $kode; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"> Edit</a>
                                                <a ace="Helvetica, cursive" class="text-info text-center">
                                                    <h5>
                                                        <a class="btn btn-small btn-warning" href="data_pengguna.delete.php?kode=<?php echo $kode; ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm ('Apakah anda yakin ingin menghapus data <?php echo $data['nama_lengkap']; ?>?')">Hapus</a>
                                                    </h5>
                                            </center>
                                    </font>
                                </td>
                            </tbody>
                        <?php $i++;
                        } ?>
                    </table>
                </div>

                <div class="pagination pagination-centered">
                    <ul>
                        <?php for ($i = 1; $i <= $jml_halaman; $i++) { ?>
                            <li><a href="member.php?hal=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    </div>

    <br><br><br><br>
    <?php include_once('../footer.php'); ?>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>