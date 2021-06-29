<?php
	session_start();
	include_once('admin.session.php');
	$kode	= $_GET['kode'];
	$sql	= mysqli_query($conn, "DELETE FROM data_pengunjung where nama_pengunjung='$kode'");
	
	echo "<script language=javascript>
			window.alert('Hapus Berhasil');
			window.location='member.php?hal=1';
			</script>";
