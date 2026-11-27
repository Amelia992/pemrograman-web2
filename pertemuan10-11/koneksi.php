<?php
// 1. Menentukan nama server
$servername = "localhost";

// 2. Menentukan username dan password
$dbusername = "root";
$dbpassword = "";

// 3. Menghubungkan PHP ke MySQL
$link = mysqli_connect(
    $servername,
    $dbusername,
    $dbpassword
);

// 4. Memeriksa koneksi
if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// 5. Menampilkan pesan jika berhasil
echo "OK, koneksi berhasil!";
?>