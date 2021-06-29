<?php
session_start();
include "../include/koneksi.php";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pin = $_POST['pin'];
    $sql = mysqli_query($conn, "SELECT * FROM data_pengguna WHERE email='$email' AND pin='$pin'");
    $num = mysqli_num_rows($sql);
    if ($num > 0) {
        $num2 = mysqli_fetch_array($sql);
        $_SESSION['id_pengguna'] = $num2['id_pengguna'];
        $_SESSION['email'] = $email;
        $_SESSION['nama_lengkap'] = $num2['nama_lengkap'];
        $_SESSION['pin'] = $pin;
        echo "<script language='javascript'>alert('Selamat Datang, $num2[nama_lengkap]');</script>";
        echo '<meta http-equiv="refresh" content="0; url=../index.php">';
    } else {
        echo "<script language='javascript'>alert('Login Gagal')  window.location = 'login.php'</script>";;
    }
}
