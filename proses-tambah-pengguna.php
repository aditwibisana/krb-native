<?php
include "include/koneksi.php";

$email = $_POST["email"];
$pin = $_POST['pin'];
$no_hp = $_POST["no_hp"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$nama_lengkap = $_POST["nama_lengkap"];
$alamat = $_POST["alamat"];

if (empty($_POST["email"]) || empty($_POST["pin"]) || empty($_POST["no_hp"]) || empty($_POST["jenis_kelamin"]) || empty($_POST["nama_lengkap"]) || empty($_POST["alamat"])) {
    echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
    echo '<meta http-equiv="refresh" content="0; url=bukutamu.php">';
} else {
    $sql = "INSERT INTO data_pengguna (email, pin, no_hp, jenis_kelamin, nama_lengkap, alamat)
			VALUES ('$email', '$pin', '$no_hp','$jenis_kelamin', '$nama_lengkap','$alamat')";
    $kueri = mysqli_query($conn, $sql);
    echo "<script language='javascript'>alert('Selamat Bergabung');</script>";
    echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
