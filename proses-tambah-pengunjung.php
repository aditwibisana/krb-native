<?php
include "include/koneksi.php";

$nama_pengunjung = $_POST["nama_pengunjung"];
$tanggal = $_POST["tanggal"];
$no_hp = $_POST["no_hp"];
$alamat = $_POST["alamat"];

if (empty($_POST["nama_pengunjung"]) || empty($_POST["tanggal"]) || empty($_POST["no_hp"]) || empty($_POST["alamat"])) {
    echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
    echo '<meta http-equiv="refresh" content="0; url=bukutamu.php">';
} else {
    $sql = "INSERT INTO data_pengunjung (nama_pengunjung, tanggal, no_hp,alamat)
			VALUES ('$nama_pengunjung', '$tanggal', '$no_hp','$alamat')";
    $kueri = mysqli_query($conn, $sql);
    echo "<script language='javascript'>alert('Selamat Berkunjung');</script>";
    echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
