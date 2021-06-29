<?php
include 'include/koneksi.php';
session_start();
$email = $_SESSION['email'];

$r1 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM pemesanan,pembayaran WHERE pemesanan.id_pesan=pembayaran.id_pesan and pembayaran.id_pesan='$_GET[id_pesan]'"));
$r = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM pemesanan WHERE id_pesan='$_GET[id_pesan]'"));
$r2 = $conn->query("SELECT * FROM data_pengguna, daftar_tempat WHERE email='$email'");
if (mysqli_num_rows($r2) == 0) {
} else {
    $row = mysqli_fetch_assoc($r2);
}
$r3 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM daftar_tempat WHERE id_tempat='$r[id_tempat]'"));
?>


<title>Cetak Bukti Pemesanan</title>
<style type="text/css">
    <!--
    .style1 {
        font-size: 18px;
        font-weight: bold;
    }
    -->
</style>

<body onLoad="javascript:window:print()">
    <div id="header">
        <i>No Struk. <?php echo " $r1[id_pembayaran]" ?>/<?php echo "$_GET[id_pesan]"; ?>/KRBPN/OL</i>
        <div align="center">
            <p><span class="style1">Kebun Raya Balikpapan</span><br>
                Jalan Soekarno Hatta Km. 15, Karang Joang, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76127<br>

                <hr>
            </p>

            <strong>Bukti Pembayaran </strong>
        </div>
    </div>
    <table width="382" border="0" align="center">
        <tr>
            <td width="125" height="31">Nama Pemesan</td>
            <td width="185">: <?php echo "$row[nama_lengkap]"; ?></td>
        </tr>
        <tr>
            <td height="35">Email</td>
            <td>: <?php echo "$row[email]"; ?></td>
        </tr>
        <tr>
            <td height="35">No Hp</td>
            <td>: <?php echo "$row[no_hp]"; ?></td>
        </tr>
        <tr>
            <td height="37">Tanggal Pesan</td>
            <td>: <?php echo "$r[tanggal_pesan]"; ?></td>
        </tr>

        <tr>
            <td height="37">Nama Paket</td>
            <td>: <?php echo "$r3[nama_tempat]"; ?></td>
        </tr>
        <tr>
            <td height="37">Lama Menginap</td>
            <td>: <?php echo "$r[durasi]"; ?> Hari</td>
        </tr>
        <tr>
            <td height="37">Check In</td>
            <td>: <?php echo "$r[check_in]"; ?></td>
        </tr>
        <tr>
            <td height="37">Check In</td>
            <td>: <?php echo "$r[check_out]"; ?></td>
        </tr>
        <tr>
            <td height="37">Harga</td>
            <td>: Rp.<?php echo number_format($r['harga'], 2);
                        ?></td>
        </tr>
        <tr>
            <td height="37">Total Bayar</td>
            <td>: Rp.<?php echo number_format($r['total_harga'], 2); ?></td>
        </tr>
        <tr>
            <td height="37">Status Konfirmasi</td>
            <td>: <?php echo $r1['konfirmasi']; ?></td>
        </tr>
    </table>