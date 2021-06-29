<?php
session_start();
include 'include/koneksi.php';
$nama_file   = $_FILES['upload_bukti']['name'];
$lokasi_file = $_FILES['upload_bukti']['tmp_name'];
if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file, "bukti/$nama_file");
}
$email = $_SESSION['email'];
$user = $conn->query("SELECT * FROM data_pengguna, daftar_tempat WHERE email='$email'");
if (mysqli_num_rows($user) == 0) {
} else {
    $row = mysqli_fetch_assoc($user);
}
date_default_timezone_set('Asia/Jakarta');
$tgl_skr = date('Y-m-d H:i:s');

$sql = "INSERT INTO pembayaran VALUE ('','$_POST[id_pesan]','$nama_file',now(),'Belum')";
$kueri = mysqli_query($conn, $sql);


//update stok
/*
$stok=mysql_query("select * from item_dipesan where id_pemesanan='$_POST[id]'");
while($r=mysql_fetch_array($stok)){
$cb=mysql_fetch_array(mysql_query("select * from berita where id_berita='$r[id_berita]'"));
$st=$cb[stok]-$r[jml];
mysql_query("update berita set stok='$st' where id_berita='$r[id_berita]'");
}
*/

//echo"pemesanan sukses";
echo "<script type='text/javascript'>
      alert('Pembayaran Berhasil, Silakan Tunggu Konfirmasi dari admin...!!!');
      </script>";
echo "<meta http-equiv='refresh' content='0; index.php'>";
