<?php
session_start();
error_reporting(0);
// koneksi database
include 'include/koneksi.php';
$email = $_SESSION['email'];
$user = $conn->query("SELECT * FROM data_pengguna, daftar_tempat WHERE email='$email'");
if (mysqli_num_rows($user) > 0) {
    $row = mysqli_fetch_array($user);
    $_SESSION["id_pengguna"] = $row["id_pengguna"];
    $_SESSION["nama_tempat"] = $row["nama_tempat"];
}
$id_tempat = $_GET['id_tempat'];
$tempat = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM daftar_tempat where id_tempat='$id_tempat[id_tempat]'"));
// Menghitung Selisih Hari
$check_in   = $_POST['check_in'];
$check_out   = $_POST['check_out'];
$check_in1   = $_POST['check_in'];
$check_out1   = $_POST['check_out'];
$check_in1    = date('Y-m-d', strtotime($check_in));
$check_out2    = date('Y-m-d', strtotime($check_out));
$check_in = new DateTime("$check_in");
$check_out = new DateTime("$check_out");
$durasi = $check_out->diff($check_in)->days;

// Mengetahui Tanggal pemesanan
$tanggal_pesan = date('Y-m-d');
// Menghitung Total harga
$harga = $tempat['harga'];
$total_harga = $harga * $durasi;
$sql = "INSERT INTO pemesanan (id_pengguna, id_tempat, tanggal_pesan, check_in, check_out, durasi, harga, total_harga)
			VALUES ('$_SESSION[id_pengguna]','$tempat[id_tempat]','$tanggal_pesan', '$check_in1', '$check_out1', '$durasi','$harga','$total_harga')";
$kueri = mysqli_query($conn, $sql);

if ($sql) {
    echo "<script type='text/javascript'>
      alert('Pemesanan Berhasil...!!');
      </script>";
    echo "<meta http-equiv='refresh' content='0; booking.php'>";
} else {
    echo "<meta http-equiv='refresh' content='0; booking.php'>";
}
