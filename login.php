<?php
session_start();
include "include/koneksi.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $sql = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password ='$password'");
    $num = mysqli_num_rows($sql);
    if ($num > 0) {
        $num2 = mysqli_fetch_array($sql);
        $_SESSION['id'] = $num2['id'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "<script language='javascript'>alert('Selamat Datang')</script>";
        echo '<meta http-equiv="refresh" content="0; url=admin/index.php">';
    } else {
        echo "<script language='javascript'>alert('Login Gagal')</script>";
        echo '<meta http-equiv="refresh" content="0; url=login/index.php">';
    }
}
