<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db_bukutamu";

// Buat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
