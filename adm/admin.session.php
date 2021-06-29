<?php
include_once('../include/koneksi.php');

if (!$_SESSION['username']) {
	header("location:/");
}
