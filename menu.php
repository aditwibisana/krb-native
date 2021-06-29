<ul class="nav">
    <?php
    if ($_SESSION['id_pengguna'] != "") {
    ?>
        <li><a href="index.php">Beranda </a>
        </li>
        </li>
        <li><a href="profil.php">Edit Profil </a>
        </li>
        <li><a href="daftar-pemesanan.php">Lihat Pemesanan </a>
        </li>
        <li><a href="booking.php">Booking</a>
        </li>
        <li><a href="pengguna/logout.php" onclick="return confirm ('Apakah anda yakin ingin logout')">Logout </a>

        <?php
    } else {
        ?>
        <li><a href="daftar.php">Daftar </a>
        </li>
        <li><a href="pengguna/login.php">Login </a>
        </li>
        <li><a href="#">Buku Tamu </a>
        </li>
        <li><a href="spot_menarik">Spot Menarik </a>
        </li>
        <<?php
        }
            ?> </ul>
</ul>