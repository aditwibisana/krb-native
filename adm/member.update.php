<?php
session_start();
include_once('admin.session.php');
$kode	= $_GET['kode'];
$sql	= mysqli_query($conn, "SELECT * FROM data_pengunjung where nama_pengunjung='$kode'");
$data	= mysqli_fetch_array($sql);
if (mysqli_num_rows($sql) > 0) {
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Edit Data Pengujung</title>
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
				<div class="modal-header">
					<h3>Edit Member</h3>
				</div>
				<div style="margin-top:10px;">
					<form class="form-horizontal" name="form1" method="post" action="" enctype="multipart/form-data">
						<div class="control-group">
							<label class="control-label" for="kode">Nama Lengkap</label>
							<div class="controls">
								<input name="nama_pengunjung" type="text" id="nama" class="input-xxlarge" value='<?php echo "$data[nama_pengunjung]"; ?>'>
								<input name="kode" type="hidden" id="kode" class="input-small" value='<?php echo "$kode"; ?>'>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="nama">Tanggal Berkunjung</label>
							<div class="controls">
								<input name="tanggal" type="date" id="jk" class="input-xxlarge" value='<?php echo "$data[tanggal]"; ?>'>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="nama">No HP</label>
							<div class="controls">
								<input name="no_hp" type="text" id="email" class="input-xxlarge" value='<?php echo "$data[no_hp]"; ?>'>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="nama">Alamat</label>
							<div class="controls">
								<input name="alamat" type="text" id="nohp" class="input-xxlarge" value='<?php echo "$data[alamat]"; ?>'>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="update"></label>
							<div class="controls">
								<input name="update" type="submit" id="update" value="Update" class="btn btn-success">
								<input name="batal" type="submit" id="batal" value="Batal" class="btn btn-warning">
							</div>
						</div>

					<?php }
				if (isset($_POST['update'])) {
					mysqli_query($conn, "update data_pengunjung set
											nama_pengunjung= '$_POST[nama_pengunjung]',
											tanggal= '$_POST[tanggal]',
											no_hp= '$_POST[no_hp]',
											alamat= '$_POST[alamat]'
											where nama_pengunjung='$kode'") or die('mysqli_error');

					echo "<script language=javascript>
								window.alert('Edit Berhasil');
								window.location='member.php?hal=1';
								</script>";
					exit;
				}

				if (isset($_POST['batal'])) {
					echo "<script language=javascript>
								window.location='member.php?hal=1';
								</script>";
					exit;
				}
					?>
					</form>
				</div>
			</div>
		</div>

		<br><br><br><br>
		<?php include_once('../footer.php'); ?>
		<script src="js/jquery-1.8.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>

	</html>