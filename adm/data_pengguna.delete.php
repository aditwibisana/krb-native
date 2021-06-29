<?php
session_start();
include_once('admin.session.php');
$kode    = $_GET['kode'];
$sql    = mysqli_query($conn, "DELETE FROM data_pengguna where id_pengguna='$kode'");

echo "<script language=javascript>
			window.alert('Hapus Berhasil');
			window.location='data_pengguna.php?hal=1';
			</script>";
