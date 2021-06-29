<?php
session_start();
$_SESSION['email'] = '';
unset($_SESSION['email']);
session_unset();
session_destroy();
header("Location: login.php");

echo "<script>window.alert('Sukses Keluar dari system.');
				window.location='../index.php'</script>";
die();
