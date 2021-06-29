<?php
include_once 'admin.session.php';
?>


<div class="container">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<!-- Komponen navbar -->
			<ul class="nav pull-left">
				<li><a href="home.php"><b class="text-error"> Home</b></a></li>

				<li><a href="member.php?hal=1"><b class="text-error"> Data Pengunjung </b></a></li>
				<li><a href="data_pengguna.php"><b class="text-error"> Data Pengguna</b></a></li>

				<li><a href="daftar-pemesanan.php?hal=1"><b class="text-error"> Data Pemesanan</b></a></li>
				<li><a href="pemesanan.php?hal=1"><b class="text-error"> Daftar Spot</b></a></li>
				<li><a href="pemesanan.php?hal=1"><b class="text-error"> Daftar Flora</b></a></li>
				<li><a href="logout.php" onclick="return confirm ('Apakah anda yakin ingin Logout?')"><b class="text-error"> Logout</b></a></li>


				<!--			<li><a href="laporan.php?hal=1"><b  class="text-error"> Laporan Pendapatan</b></a></li>
<!--			<li><a href="konfirmasi.php?hal=1"><b  class="text-error"> Data Konfirmasi</b></a></li>
				<li><a href="permintaan.php?hal=1"><b  class="text-error"> Data Permintaan</b></a></li>-->



			</ul>

		</div>
	</div>
</div>