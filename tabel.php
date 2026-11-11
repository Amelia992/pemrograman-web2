<?php
// Koneksi ke server MySQL
$servername = "localhost";
$username   = "root";
$password   = "";

// Buat koneksi
$koneksi = mysqli_connect($servername, $username, $password);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Buat database
$sql_db = "CREATE DATABASE IF NOT EXISTS db_bukutamu";
if (mysqli_query($koneksi, $sql_db)) {
    echo "✅ Database berhasil dibuat<br>";
} else {
    echo "❌ Error database: " . mysqli_error($koneksi);
}

// Pilih database
mysqli_select_db($koneksi, "db_bukutamu");

// Buat tabel
$sql_tabel = "CREATE TABLE IF NOT EXISTS tbl_tamu (
    id INT NOT NULL AUTO_INCREMENT,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    pesan TEXT NOT NULL,
    tanggal DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
)";

if (mysqli_query($koneksi, $sql_tabel)) {
    echo "✅ Tabel berhasil dibuat";
} else {
    echo "❌ Error tabel: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
