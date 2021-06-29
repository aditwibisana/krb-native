<?php
session_start();
error_reporting(0);
// koneksi database
include 'include/koneksi.php';

// menangkap data yang di kirim dari form
if (isset($_POST['submit'])) {
    $id_pengguna = $_POST['id_pengguna'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $pin = $_POST['pin'];
    $alamat = $_POST['alamat'];

    // update data ke database
    $sql = "UPDATE data_pengguna set nama_lengkap='$nama_lengkap', email='$email', pin='$pin' ,no_hp='$no_hp', alamat='$alamat' where id_pengguna='$_SESSION[id_pengguna]'";
    if (mysqli_query($conn, $sql)) {
        echo ("<script>
        alert('Data Berhasil diubah');
        window.location='index.php';		
    </script>");
    } else {
        echo ("<script>
        alert('Gagal);
        window.location='proses-edit-profil-pengguna.php';
    </script>");
    }
}
